<?php


include 'includes/db.php';

// exit to the page if the code is not found
if (!isset($_GET["code"])) {
    exit("Sorry, the page can't be found!");
} else {
    // getting the code to see if there is a row in the table that matches the code
    $code = $_GET["code"];

    // getting the email based on the code
    $getEmail = mysqli_query($connection, "SELECT email FROM resetpassword WHERE code = '$code'");

    if (mysqli_num_rows($getEmail) == 0) {
        exit("Sorry, the page can't be found!");
    }

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="css/newpass.css" />

    </head>

    <body>
        <nav>
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="85" viewBox="0 0 108 99" fill="none">
                <path d="M9.2876 95.3131L73.2283 98.4493V46.7057L9.2876 44.0908" fill="#FFFCFC" />
                <path d="M76.4374 46.8135L75.7856 98.5654L97.6392 64.82L96.7109 28.3354L76.4374 46.8135Z" fill="#FFFCFC" />
                <path d="M9.28776 44.0908L0.499023 60.3346L65.4073 62.8916L73.8998 46.4409L9.28776 44.0908Z" fill="#E9E8E8" />
                <path d="M76.3091 46.9955L85.8681 58.0922L102.3 39.5149L96.7109 28.3354L76.3091 46.9955Z" fill="#E9E8E8" />
                <path d="M9.28779 43.2139L30.4401 26.5977L20.3774 29.3698L0.499023 45.2826L9.28779 43.2139Z" fill="#E9E8E8" />
                <path d="M30.4399 25.5303L100.197 29.0554L102.3 27.2928" fill="#E9E8E8" />
                <path d="M32.74 7.12692C31.4829 7.13172 30.2787 7.53181 29.3925 8.23917C28.5063 8.94653 28.0105 9.90322 28.0143 10.8988L28.0717 25.9138C28.0755 26.9094 28.5785 27.8623 29.4701 28.5628C30.3617 29.2634 31.5689 29.6543 32.826 29.6495L38.751 29.6268C39.1189 29.6254 39.482 29.6919 39.8116 29.8209C40.1412 29.95 40.4282 30.1381 40.6498 30.3704L45.171 35.1073C45.3926 35.3396 45.6796 35.5277 46.0092 35.6567C46.3388 35.7858 46.7019 35.8522 47.0698 35.8508C47.4378 35.8494 47.8004 35.7802 48.129 35.6486C48.4575 35.517 48.7431 35.3268 48.963 35.0928L53.4478 30.3215C53.6676 30.0875 53.9532 29.8972 54.2818 29.7657C54.6104 29.6341 54.973 29.5649 55.3409 29.5635L61.2659 29.5409C62.523 29.5361 63.7271 29.136 64.6133 28.4286C65.4996 27.7212 65.9953 26.7646 65.9915 25.769L65.9342 10.754C65.9304 9.7584 65.4273 8.80552 64.5357 8.10495C63.6441 7.40438 62.437 7.0135 61.1799 7.0183L32.74 7.12692Z" fill="#E9E8E8" />
            </svg>

            <h1 class="logo-title">voicebox</h1>
        </nav>

        <div class="container">

        <?php


        // getting the new password

        if (isset($_POST['update'])) {
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];

            // cleaning password
            $password =  mysqli_real_escape_string($connection, $password);
            $confirm =  mysqli_real_escape_string($connection, $confirm);

            if (empty($password) || empty($confirm)) {
                echo '<div class="alert warning-alert2"> <h3>Please fill in the required fields. </h3></div>';
            } else {

                if ($confirm != $password) {
                    echo "Password does not match!";
                } else {

                    $emailRow = mysqli_fetch_array($getEmail);
                    $email = $emailRow['email'];

                    $passwordQuery = "SELECT password FROM users WHERE email = '$email'";
                    $get_password = mysqli_query($connection, $passwordQuery);

                    if (!$get_password) {
                        echo mysqli_error($connection);
                    }

                    $row = mysqli_fetch_array($get_password);
                    $db_user_password = $row['password'];


                    if ($db_user_password != $password) {


                        // making the users create a strong password
                        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
                            echo '<div class="alert warning-alert2"> <h3>Password should atleast be a minimun of 8 characters and should contain one upper case, one lower case, one digit, and  one special character.</h3></div>';
                        } else {

                            // getting email with same code in resetpassword table

                            // starting the query to update
                            $updateQuery = "UPDATE users SET ";

                            // hashing the password first
                            $hashed_password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

                            // updating the passsword
                            $updateQuery .= "password = '{$hashed_password}' ";
                            $updateQuery .= "WHERE email = '{$email}'";


                            // adding the updated contents to the database
                            if (!mysqli_query($connection, $updateQuery)) {
                                echo mysqli_error($connection);
                            }

                            // if everything was successful, delete the code from database
                            if ($updateQuery) {
                                $getEmail = mysqli_query($connection, "DELETE FROM resetpassword WHERE code = '$code'");
                            } else {
                                echo "error";
                            }


                            echo ("<script>location.href='login.php?status=changed'</script>");

                            // directing to profile page

                        }
                        // if not same, make the hashed password as the db password
                    } else {
                        $hashed_password = $db_user_password;
                    }
                }
            }
        }
    }

        ?>


        <div class="headings">
            <h1 class="page-title">Create new password</h1>
            <p class="sub-heading">Create a new password that is at least 6 characters long. A strong password is combination of letters, numbers, and punctuation marks.</p>
        </div>

        <article>



            <div class="center-form">
                <form action="<?php echo '"http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/new-pass.php?code=$code' ?>" method="post">

                    <input class="email input" type="password" name="password" placeholder="New password" /> <br>
                    <input class="email input" type="password" name="confirm" placeholder="Confirm password" /> <br>

                    <div class="center-button">
                        <button class="back">Cancel</button>

                        <input type="submit" name="update" value="Update password" />


                    </div>



                </form>

            </div>



        </article>



        </div>

    </body>

    </html>