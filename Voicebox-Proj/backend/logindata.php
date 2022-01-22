<?php include 'includes/db.php'; ?>

<?php


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // cleaning up the data
    $email =  mysqli_real_escape_string($connection, $email);
    $password =  mysqli_real_escape_string($connection, $password);



    if (empty($email) || empty($password)) {
        echo '<div class="alert warning-alert2"> <h3> Please fill out all the input fields.</h3></div>';
    } else {
        // created a query to get all data from users, this is to check if a user already exists to database
        $getusersData = "SELECT * FROM users WHERE email ='{$email}' ";
        $get_all_users_query = mysqli_query($connection, $getusersData);

        if (mysqli_num_rows($get_all_users_query) >= 1) {


            // start the query and get the results of that specific email found
            while ($row = mysqli_fetch_array($get_all_users_query)) {

                $db_id = $row['userID'];
                $db_email = $row['email'];
                $db_username = $row['userName'];
                $db_nickname = $row['nickname'];
                $db_password = $row['password'];
                $db_bio = $row['bio'];
                $db_userCoverPhoto = $row['userCoverPhoto'];
                $db_userImg = $row['userProfPhoto'];
                $db_date = $row['dateCreated'];
            }

            // checking if the hashed password matches the given password
            if (password_verify($password, $db_password)) {

                // assigning a session so it can be pulled later
                $_SESSION['userID'] = $db_id;
                $_SESSION['email'] = $db_email;
                $_SESSION['username'] = $db_username;
                $_SESSION['nickname'] = $db_nickname;
                $_SESSION['bio'] =  $db_bio;
                $_SESSION['userCoverPhoto'] = $db_userCoverPhoto;
                $_SESSION['userProfPhoto'] = $db_userImg;
                $_SESSION['dateCreated'] = $db_date;


                // sending a data that the user is logged in
                echo ("<script>location.href='index.php?status=loggedin'</script>");
            } else {
                echo '<div class="alert warning-alert2"> <h3>Password is incorrect. </h3></div>';
            }
        } else {
            echo '<div class="alert warning-alert2"> <h3>The email does not exist. </h3></div>';
        }
    }
}
