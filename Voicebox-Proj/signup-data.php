<?php include 'includes/db.php'; ?>


<?php

// checking if the signup button has been pressed
if (isset($_POST['signup'])) {



    // getting the data based on the name
    $email = $_POST['email'];
    $username = $_POST['username'];
    $nickname = trim($_POST['name']);
    $password = $_POST['password'];
    $confirmPass = $_POST['confirm-password'];
    $date = $_POST['date'];



    // cleans up data to avoid hackers doing harm to the site, no injection
    $email =  mysqli_real_escape_string($connection, $email);
    $username =  mysqli_real_escape_string($connection, $username);
    $name =  mysqli_real_escape_string($connection, $nickname);
    $password =  mysqli_real_escape_string($connection, $password);
    $confirmPass =  mysqli_real_escape_string($connection, $confirmPass);


    // remove all illegal characters from email 
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);





    // checking if all the input field is filled 
    if (empty($email) || empty($username) || empty($nickname) || empty($password) || empty($confirmPass)) {

        echo '<div class="alert danger-alert"> <h3>Please fill out all the input fields.</h3></div>';
    } else {



        // created a query to get all data from users, this is to check if a user already exists to database
        $getUsersQuery = "SELECT * FROM users";
        $get_all_users = mysqli_query($connection, $getUsersQuery);

        if (!$get_all_users) {
            die("QUERY FAILED " . mysqli_error($connection));
        }

        // setting requirements for the username
        if (!preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/', $username)) {
            echo '<div class="alert danger-alert"> <h3>Username must be atleast 6 characters and should only contain letters, numbers, an underscore and should only end with a letter or number. </h3></div>';
        } else {


            // start the query to get all users to check if they exist and store the results to an array
            while ($row = mysqli_fetch_array($get_all_users)) {

                $db_email = $row['email'];
                $db_username = $row['userName'];
                $db_nickname = $row['nickname'];
                $db_password = $row['password'];
            }

            // validating the email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                // checking if the email and username  already exists in the database
                if ($email == $db_email) {
                    echo '<div class="alert danger-alert"> <h3>The email is already taken. Please try another email.</h3></div>';
                } elseif ($db_username == $username) {
                    echo '<div class="alert danger-alert"> <h3>The username is already taken. Please try another username.</h3></div>';
                } else {
                    // if itn doesnt exist, first check if the password is strong enough using preg_match conditions

                    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
                        echo '<div class="alert warning-alert"> <h3>Password should atleast be a minimun of 8 characters and should contain one upper case, one lower case, one digit, and  one special character.</h3></div>';
                    } else {

                        // if the password is not the same as the confirm pass, alert
                        if ($password != $confirmPass) {
                            echo '<div class="alert danger-alert"> <h3>Passwords does not match.</h3></div>';
                        } else {

                            // hashing the password gotten
                            $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

                            // adding the new password to the database
                            $insertQuery = "INSERT INTO users (email, userName, nickname, password, dateCreated)";
                            $insertQuery .= "VALUES ('$email', '$username', '$nickname', '$password', '$date')";

                            // check if the query failed
                            $register_user_query = mysqli_query($connection, $insertQuery);
                            if (!$register_user_query) {
                                die("QUERY FAILED " . mysqli_error($connection));
                            }
                            // if it's success, direct to login.php
                            echo ("<script>location.href='login.php?status=success'</script>");
                        }
                    }
                }
            } else {
                echo '<div class="alert danger-alert"> <h3>The email is not valid. Please try another email.</h3></div>';
            }
        }
    }
}
