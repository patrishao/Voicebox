
<?php



$userID =  $_SESSION['userID'];

// getting all the data once everything is filled.
if (isset($_POST['save'])) {



    // first checking if a an image was submitted and if there is no file submitted, get the current image on the session
    // and if there there is a file, get the file name 
    if (empty($_FILES["profPhoto"]["name"])) {
        $profilePhoto = $_SESSION['userProfPhoto'];
    } else {
        $profilePhoto =  uniqid() . $_FILES["profPhoto"]["name"];
        // getting the profile image name with uniqid to generate a unique number for each photo, so it wont be overwritten
    }

    if (empty($_FILES["coverPhoto"]["name"])) {
        $coverPhoto = $_SESSION['userCoverPhoto'];
    } else {
        $coverPhoto =  uniqid() . $_FILES["coverPhoto"]["name"]; //getting the cover photo name

    }



    // getting the rest of the details

    $userName = $_POST['username'];
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];

    // cleaning up the data to prevent hacks
    $userName =  mysqli_real_escape_string($connection, $userName);
    $name =  mysqli_real_escape_string($connection, $name);
    $password =  mysqli_real_escape_string($connection, $password);
    $confirmPass =  mysqli_real_escape_string($connection, $confirmPass);


    // target directory of the image to be uploaded
    $targetLoc = "uploaded-imgs/";
    $targetLoc2 = "uploaded-imgs2/";



    if (empty($userName) || empty($name) || empty($password) || empty($confirmPass)) {
        echo '<div class="warning-alert2"> <h3>Please fill in the required fields. </h3></div>';
    } else {

        // move the files to the target location
        move_uploaded_file($_FILES["coverPhoto"]["tmp_name"], $targetLoc . $coverPhoto);
        move_uploaded_file($_FILES["profPhoto"]["tmp_name"], $targetLoc . $profilePhoto);

        // checks if the password is the same as confirm password
        if ($password === $confirmPass) {
            // getting the password of the user from the database
            $passwordQuery = "SELECT password FROM users where userID = $userID";
            $get_password = mysqli_query($connection, $passwordQuery);
            $row = mysqli_fetch_array($get_password);
            $db_user_password = $row['password'];

            // check if the pw from database is not the same as the password
            if (password_verify($password, $db_user_password)) {


                // starting the query to update
                $updateQuery = "UPDATE users SET ";
                $updateQuery .= "userName = '{$userName}',";
                $updateQuery .= "nickname = '{$name}',";
                $updateQuery .= "bio = '{$bio}',";
                // $updateQuery .= "password = '{$hashed_password}', ";
                $updateQuery .= "userCoverPhoto = '{$coverPhoto}', ";
                $updateQuery .= "userProfPhoto = '{$profilePhoto}' ";
                $updateQuery .= "WHERE userID = '{$userID}'";

                // adding the updated contents to the database
                if (!mysqli_query($connection, $updateQuery)) {
                    echo mysqli_error($connection);
                }


                // updating the sessions asap
                $_SESSION['username'] = $userName;
                $_SESSION['nickname'] = $name;
                $_SESSION['bio'] =  $bio;
                $_SESSION['userCoverPhoto'] = $coverPhoto;
                $_SESSION['userProfPhoto'] = $profilePhoto;

                echo '<script type="text/javascript">', 'saveChanges();', '</script>';

                // directing to profile page

                // }
                // if not same, don't do anything
            } else {
                echo '<div class="warning-alert2"> <h3>The password you have entered is wrong. </h3></div>';
            }
        } else {
            echo '<div class="warning-alert2"> <h3>The password you have entered is wrong. </h3></div>';
        }
    }
}
