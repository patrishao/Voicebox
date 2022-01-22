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
        $likesCount = $row['likesCount'];
        $commentCount = $row['commentCount'];
        // $postDate = date(DATE_ISO8601, strtotime($row['postDate']));
        $postCategory = $row['postCategory'];
        $postDate = $row['postDate'];
    }



    $userQuery = "SELECT * FROM users INNER JOIN posts ON users.userID = posts.postUserID  WHERE postID = $postID";
    $select_all_users_query = mysqli_query($connection, $userQuery);

    while ($row = mysqli_fetch_assoc($select_all_users_query)) {
        // getting data from  users
        $userID = $row['userID'];
        $usernamePoster = htmlspecialchars($row['userName']);
        $namePoster = htmlspecialchars($row['nickname']);
        $userProfPhoto = $row['userProfPhoto'];

        // getting data from posts table
    }
}
