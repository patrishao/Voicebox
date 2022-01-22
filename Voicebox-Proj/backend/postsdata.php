<?php

$userID =  $_SESSION['userID'];


error_reporting(0);

if (isset($_POST['post'])) {



    // getting the values ente'[]red
    $title = $_POST['postTitle'];
    $text = $_POST['postText'];
    $topic = $_POST['postTopic'];
    $date = $_POST['dateTime'];

    $targetLoc = "uploaded-imgs2/";

    // check if the file is empty, if not get the value
    if (!empty($_FILES["imgFile"]["name"])) {
        $img = $_FILES["imgFile"]["name"];
    }


    // cleaning all the texts
    $title =  mysqli_real_escape_string($connection, $title);
    $text =  mysqli_real_escape_string($connection, $text);
    $topic =  mysqli_real_escape_string($connection, $topic);

    // checking if the important fileds are empty
    if (empty($title) || empty($topic)) {
        echo '<div class="warning-alert2"> <h3>Please fill in the required fields. </h3></div>';
    } else {
        // if all are filled start getting the files


        // move the files to the target location
        if (!move_uploaded_file($_FILES["imgFile"]["tmp_name"], $targetLoc . $img)) {
            echo "Fail";
        }

        // adding the post to the database

        $addPost = "INSERT INTO posts (postTitle, postText, postUserId, image, postCategory, postDate) ";
        $addPost .= "VALUES ('$title', '$text', '$userID', '$img', '$topic', '$date')";
        $addPostQuery = mysqli_query($connection, $addPost);

        if (!$addPostQuery) {
            echo "Error " . mysqli_error($connection);
        }

        echo ("<script>location.href='index.php?status=uploaded'</script>");
    }
}
