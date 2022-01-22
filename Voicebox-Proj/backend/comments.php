<?php
if (!empty($_SESSION['userID'])) {

    if (isset($_POST['comment'])) {

        // if a user is logged in, get the comment

        $text = $_POST['comment'];
        $date = $_POST['dateTime'];
        $commentpostID = $_GET['p_id'];
        $commentuserID = $_SESSION['userID'];

        mysqli_real_escape_string($connection,  $text);


        if (!empty($text)) {

            // putting the comment into database
            $uploadCommentQuery = "INSERT INTO comments (commentPostId, commentUserID, commentText, commentDate) ";
            $uploadCommentQuery .= "VALUES ('$commentpostID', '$commentuserID', '$text', '$date')";
            $upload_comment = mysqli_query($connection, $uploadCommentQuery);

            if (!$upload_comment) {
                echo "Error" . mysqli_error($connection);
            }
            // update the comment count by adding 1 everytime a comment is uploaded
            $updateCommentCountQuery = "UPDATE posts SET commentCount =  commentCount + 1 ";
            $updateCommentCountQuery .= "WHERE postID = $postID";
            $updateCommentCounts = mysqli_query($connection, $updateCommentCountQuery);

            if (!$updateCommentCounts) {
                echo "Error" . mysqli_error($connection);
            } else {
                echo ("<meta http-equiv='refresh' content='1'>");
            }
        }
    } elseif (isset($_POST['replyComment'])) {

        $reply = $_POST['replyComment'];
        $replyDate = $_POST['dateTimeReply'];
        $replypostID = $_GET['p_id'];
        $replyuserID = $_SESSION['userID'];
        $replyCommentID = $_POST['commentID'];

        mysqli_real_escape_string($connection,  $reply);

        $uploadReplyQuery = "INSERT INTO replies (replyDate, replyPostID, replyUserID, replyCommentID, replyText) ";
        $uploadReplyQuery .= "VALUES ('$replyDate', ' $replypostID', ' $replyuserID', '$replyCommentID', ' $reply')";

        $uploadReplies = mysqli_query($connection, $uploadReplyQuery);

        if (!$uploadReplies) {
            echo "Error" . mysqli_error($connection);
        } else {
            echo ("<meta http-equiv='refresh' content='1'>");
        }

        // update the comment count by adding 1 everytime a comment is uploaded
        $updateCommentCountQuery = "UPDATE posts SET commentCount =  commentCount + 1 ";
        $updateCommentCountQuery .= "WHERE postID = $postID";
        $updateCommentCounts = mysqli_query($connection, $updateCommentCountQuery);

        if (!$updateCommentCounts) {
            echo "Error" . mysqli_error($connection);
        } else {
            echo ("<meta http-equiv='refresh' content='1'>");
        }
    }
} else {
}
