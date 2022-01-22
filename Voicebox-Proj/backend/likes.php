<?php

// this is for the felt and unfelt (hands)
if (isset($_POST['felt'])) {

    // getting post ID sent through ajaxs
    $postID = $_POST['postID'];
    $userID = $_POST['userID'];


    // creating query to acess the counts
    $searchPostQuery = "SELECT * from posts WHERE postID =  $postID ";
    $postResult = mysqli_query($connection, $searchPostQuery);
    $postRow = mysqli_fetch_array($postResult);

    $postlikes = $postRow['likesCount'];

    // adding one like every time a button is pressed
    mysqli_query($connection, "UPDATE posts SET likesCount=$postlikes+1 WHERE postID =$postID");

    // adding the likes to the likes database
    mysqli_query($connection, "INSERT INTO felt (feltUserID, feltPostID) VALUES ($userID, $postID) ");
}

if (isset($_POST['unfelt'])) {

    // getting post ID sent through ajaxs
    $postID = $_POST['postID'];
    $userID = $_POST['userID'];


    // creating query to acess the counts
    $searchPostQuery = "SELECT * from posts WHERE postID =  $postID ";
    $postResult = mysqli_query($connection, $searchPostQuery);
    $postRow = mysqli_fetch_array($postResult);

    $postlikes = $postRow['likesCount'];

    // deleting the likes to the likes database
    mysqli_query($connection, "DELETE FROM felt WHERE feltUserID = $userID AND feltPostID =  $postID");

    //  updating the posts to decrement the like in posts everytime the button is pressed
    mysqli_query($connection, "UPDATE posts SET likesCount=$postlikes-1 WHERE postID =$postID");
}

$checkedFeltQuery =  mysqli_query($connection, "SELECT * FROM felt WHERE feltPostID = $postID AND feltUserID = $userID");
$checkedResults = mysqli_num_rows($checkedFeltQuery) >= 1 ? true : false;

// this is for the like and unlike (hands)
if (isset($_POST['liked'])) {

    // getting post ID sent through ajaxs
    $postID = $_POST['postID'];
    $userID = $_POST['userID'];
    $commentID = $_POST['commentID'];


    // creating query to acess the counts
    $searchCommentQuery = "SELECT * from comments WHERE commentID =  $commentID ";
    $commentResult = mysqli_query($connection, $searchCommentQuery);
    $commentRow = mysqli_fetch_array($commentResult);

    $postComments = $commentRow['likesCount'];

    // adding one like every time a button is pressed
    mysqli_query($connection, "UPDATE comments SET likesCount=$postComments+1 WHERE commentID =$commentID");

    // adding the likes to the likes database
    mysqli_query($connection, "INSERT INTO likes (likesUserID, likesCommentID) VALUES ($userID, $commentID) ");
}


if (isset($_POST['unliked'])) {


    // getting post ID sent through ajaxs
    $postID = $_POST['postID'];
    $userID = $_POST['userID'];
    $commentID = $_POST['commentID'];


    // creating query to acess the counts
    $searchCommentQuery = "SELECT * from comments WHERE commentID =  $commentID ";
    $commentResult = mysqli_query($connection, $searchCommentQuery);
    $commentRow = mysqli_fetch_array($commentResult);


    $postComments = $commentRow['likesCount'];

    // deleting the likes to the likes database
    mysqli_query($connection, "DELETE FROM likes WHERE likesUserID = $userID AND likesCommentID =  $commentID");

    //  updating the posts to decrement the like in posts everytime the button is pressed
    mysqli_query($connection, "UPDATE comments SET likesCount=$postComments-1 WHERE commentID = $commentID");
}
