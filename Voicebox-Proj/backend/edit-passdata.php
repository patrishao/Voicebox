
<?php



$userID =  $_SESSION['userID'];

// getting all the data once everything is filled.
if (isset($_POST['save'])) {



    // getting the rest of the details

    $currentPass = $_POST['passwordCurrent'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];


    // cleaning up the data to prevent hacks
    $currentPass =  mysqli_real_escape_string($connection, $currentPass);
    $password =  mysqli_real_escape_string($connection, $password);
    $confirmPass =  mysqli_real_escape_string($connection, $confirmPass);




    if (empty($password) || empty($confirmPass)) {
        echo '<div class="warning-alert2"> <h3>Please fill in the required fields. </h3></div>';
    } else {

        // checks if the password is the same as confirm password
        if ($password === $confirmPass) {

            // getting the password of the user from the database
            $passwordQuery = "SELECT password FROM users where userID = $userID";
            $get_password = mysqli_query($connection, $passwordQuery);
            $row = mysqli_fetch_array($get_password);
            $db_user_password = $row['password'];



            // check if the pw from database is not the same as the passwordd

            if (password_verify($currentPass, $db_user_password)) {


                if ($db_user_password != $password) {

                    // making the users create a strong password
                    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
                        echo '<div class="warning-alert2"> <h3>Password should atleast be a minimun of 8 characters and should contain one upper case, one lower case, one digit, and  one special character.</h3></div>';
                    } else {


                        // starting the query to update
                        $updateQuery = "UPDATE users SET ";

                        // hashing the password first
                        $hashed_password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

                        // updating the passsword
                        $updateQuery .= "password = '{$hashed_password}' ";
                        $updateQuery .= "WHERE userID = '{$userID}'";


                        // adding the updated contents to the database
                        if (!mysqli_query($connection, $updateQuery)) {
                            echo mysqli_error($connection);
                        }


                        echo '<script type="text/javascript">', 'saveChanges();', '</script>';

                        // directing to profile page

                    }
                    // if not same, make the hashed password as the db password
                } else {
                    $hashed_password = $db_user_password;
                }
            } else {
                echo '<div class="warning-alert2"> <h3>The password you have entered is wrong. </h3></div>';
            }
        } else {
        }
    }
}
