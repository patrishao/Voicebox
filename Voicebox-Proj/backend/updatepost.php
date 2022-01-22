<?php


if (isset($_GET['p_id'])) {

    $postID = $_GET['p_id'];


    // getting the post on database based on the postID retrieved in link
    $postQuery = "SELECT * FROM posts WHERE postID = $postID";
    $select_all_posts_query = mysqli_query($connection, $postQuery);

    while ($row = mysqli_fetch_assoc($select_all_posts_query)) {

        $postTitle = htmlspecialchars($row['postTitle']);
        $postText =  htmlspecialchars($row['postText']);
        $postUserID = $row['postUserID'];
        $image = $row['image'];

        // $postDate = date(DATE_ISO8601, strtotime($row['postDate']));
        $postCategory = $row['postCategory'];
    }



    if (isset($_POST['post'])) {

        // getting the values ente'[]red
        $title = $_POST['postTitle'];
        $text = $_POST['postText'];




        $targetLoc = "uploaded-imgs2/";

        // check if the file is empty and it is, set the $img field to it's current value, if not get the value 
        if (!empty($_FILES["imgFile"]["name"])) {
            $img = $_FILES["imgFile"]["name"];
        } else {
            $img = $image;
        }

        if (empty($_POST['postTopic'])) {
            $topic = $postCategory;
        } else {
            $topic = $_POST['postTopic'];
        }



        // cleaning all the texts
        $title =  mysqli_real_escape_string($connection, $title);
        $text =  mysqli_real_escape_string($connection, $text);
        $topic =  mysqli_real_escape_string($connection, $topic);

        // checking if the important fileds are empty
        if (empty($title) || empty($topic)) {
            echo '<div class="warning warning-alert2"> <h3>Please fill in the required fields. </h3></div>';
        } else {
            // if all are filled start getting the files


            // move the files to the target location
            move_uploaded_file($_FILES["imgFile"]["tmp_name"], $targetLoc . $img);


            // updating the post to the database

            $updatePost = "UPDATE posts SET ";
            $updatePost .= "postTitle = '$title', ";
            $updatePost .= "postText = '$text', ";
            $updatePost .= "image = '$img', ";
            $updatePost .= "postCategory = '$topic' ";
            $updatePost .= "  WHERE postID = $postID";

            $updatePostQuery = mysqli_query($connection, $updatePost);

            if (!$updatePostQuery) {
                echo "Error " . mysqli_error($connection);
            }

            echo '<script type="text/javascript">', 'saveChanges();', '</script>';

            // echo ("<script>location.href='post-page.php?p_id=$postID'</script>");
        }
    }

    if (isset($_POST['delete'])) {

        $setKey0 = mysqli_query($connection, "SET FOREIGN_KEY_CHECKS = 0 ");

        $delete = "DELETE FROM posts WHERE postID = $postID;  ";

        $deleteQuery = mysqli_query($connection, $delete);

        $setKey1 = mysqli_query($connection, "SET FOREIGN_KEY_CHECKS = 1 ");


        if (!$deleteQuery) {
            echo mysqli_error($connection);
        }


        echo '<script type="text/javascript">', 'delete2();', '</script>';
    }

    if (isset($_POST['back'])) {
        echo '<script> window.history.go(-2) </script>';
    }
}
