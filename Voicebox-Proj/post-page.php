<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/post-page.css">

    <!-- jquery to active timeago  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/timeago.js" type="text/javascript"></script>

    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


    <script>
        jQuery(document).ready(function() {
            jQuery("time.timeago").timeago();
        });
    </script>



</head>

<body>



    <?php include 'includes/nav.php' ?>
    <?php include 'includes/db.php' ?>
    <?php include 'backend/post-pagedata.php' ?>
    <?php include "backend/comments.php" ?>
    <?php include "backend/likes.php" ?>

    <script>
        function notLogged() {
            Swal.fire({
                title: 'You are not logged in!',
                text: "To comment, you must be logged in.",
                confirmButtonColor: '#BA5D5D',
                confirmButtonText: '<b>Close<b>',
                padding: 25,
                showCancelButton: true,
                cancelButtonColor: '#BA5D5D',
                cancelButtonText: '<a href="login.php"><b>Login Now<b><a/>',


            })
        }
    </script>




    <!-- getting the likes -->


    <div class="container">



        <?php if ($_SESSION['userID'] == $userID) { ?>

            <article class="title">
                <div class="txts">

                    <h1 class="txt-title">Your Post</h1>

                    <a href="edit-post.php?p_id=<?php echo $postID ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none">
                            <path d="M20 2H4C2.897 2 2 2.897 2 4V16C2 17.103 2.897 18 4 18H7V21.767L13.277 18H20C21.103 18 22 17.103 22 16V4C22 2.897 21.103 2 20 2ZM20 16H12.723L9 18.233V16H4V4H20V16Z" fill="white" />
                            <path d="M13.8032 9.18892L12.4042 7.79092L8.53516 11.6549V13.0539H9.93416L13.8032 9.18892ZM14.1302 6.06592L15.5282 7.46492L14.4622 8.53092L13.0632 7.13292L14.1302 6.06592Z" fill="white" />
                        </svg>

                    </a>
                </div>
            </article>

        <?php } else { ?>

            <article class="title">
                <div class="txts">

                    <h1 class="txt-title">@<?php echo $usernamePoster ?>'s Post</h1>


                </div>
            </article>

        <?php } ?>

        <article class="user-post">

            <div class="contents">


                <div class="user">
                    <img class="user-img" src="uploaded-imgs/<?php echo $userProfPhoto  ?>">

                    <h1 class="name-post"><?php echo $namePoster ?> </h1>
                    <h2 class="username-post">@<?php echo $usernamePoster ?></h2>

                </div>

                <div class="post-content">
                    <h1 class="post-title"><?php echo $postTitle ?></h1>
                    <p class="post-text"><?php echo $postText ?> </p>

                    <?php if (!empty($image)) { ?>

                        <img src="uploaded-imgs2/<?php echo $image; ?>" class="imageUploaded" />

                    <?php } ?>
                </div>


                <div class="date-time">

                    <!-- converting the date to time -->
                    <p class="time"><?php echo date("g:i A", strtotime($postDate)) ?></p>

                    <!-- converting the date to month -->
                    <p class="date"><?php echo date("F j, Y", strtotime($postDate)) ?></p>

                </div>

        </article>




        <article class="post-details">

            <div class="posts">

                <div class="comment">
                    <svg class="comment1" xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 14 15" fill="none">
                        <path d="M7 14.0644C10.8658 14.0644 14 10.916 14 7.03222C14 3.14842 10.8658 0 7 0C3.13425 0 0 3.14842 0 7.03222C0 8.80031 0.650125 10.4177 1.72375 11.6534C1.63888 12.6741 1.35888 13.7932 1.04912 14.633C0.98 14.8199 1.11388 15.0288 1.288 14.9967C3.262 14.625 4.43537 14.0544 4.9455 13.757C5.61567 13.9622 6.3064 14.0656 7 14.0644Z" fill="white" />
                    </svg>
                    <p><?php $commentCount ?> Comments</p>
                </div>
                <!-- <?php echo $check =  $checkedResults ?  'user liked' :  'user did not like'; ?> -->

                <!-- this php toggles the class if a user active  has been found to like the page -->
                <div class="hands-up <?php echo $check =  $checkedResults ?  'felt' :  'unfelt' ?>">

                    <svg class="hands-up1" xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 16 19" fill="none">
                        <path d="M2.66699 12.6668V6.72933C2.66699 6.07383 3.09433 5.54183 3.65366 5.54183C4.00033 5.54183 4.66699 5.77933 4.66699 6.72933V4.35433C4.66699 3.69883 5.09433 3.16683 5.65366 3.16683C5.99166 3.16683 6.66699 3.40433 6.66699 4.35433V2.771C6.66699 2.1155 7.09433 1.5835 7.65366 1.5835C8.21366 1.5835 8.66699 2.1155 8.66699 2.771V4.35433C8.66699 3.40433 9.32899 3.16683 9.66699 3.16683C10.227 3.16683 10.667 3.71387 10.667 4.37016V11.0835" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2.66677 12.6671C2.66677 15.8337 4.7561 17.4171 7.33343 17.4171C9.91077 17.4171 10.7974 16.6254 12.7974 12.6671L13.8448 10.6048C14.2021 9.91761 13.9161 9.02619 13.2574 8.77286C13.0421 8.68931 12.8103 8.68642 12.5935 8.76459C12.3766 8.84276 12.1853 8.99821 12.0454 9.20986L10.6668 11.1099" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p><?php $likesCount ?> feels/felt the same</p>
                </div>


                <script>
                    var postID = <?php echo $_GET['p_id']; ?>;
                    var userID = <?php echo $_SESSION['userID']; ?>;

                    // felt
                    $(document).ready(function() {
                        $('.unfelt').click(function() {

                            $.ajax({
                                url: "post-page.php?p_id=<?php echo $postID; ?>",
                                type: 'post',
                                data: {
                                    felt: 1,
                                    'postID': postID,
                                    'userID': userID,
                                }
                            })

                            window.location.reload()
                        });
                    });

                    // unfelt
                    $(document).ready(function() {
                        $('.felt').click(function() {


                            $.ajax({
                                url: "post-page.php?p_id=<?php echo $postID; ?>",
                                type: 'post',
                                data: {
                                    unfelt: 1,
                                    'postID': postID,
                                    'userID': userID,
                                }
                            })

                            window.location.reload()
                        });
                    });
                </script>



            </div>

            <div class="topic">
                <svg class="topic-logo" xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                    <path d="M1.72217 18.0606L10.9491 18.6244V9.32308L1.72217 8.85303" fill="#D4CECE" />
                    <path d="M11.4124 9.34258L11.3184 18.6454L14.4719 12.5794L14.3379 6.021L11.4124 9.34258Z" fill="#D4CECE" />
                    <path d="M1.72235 8.85303L0.454102 11.773L9.82063 12.2326L11.0461 9.27547L1.72235 8.85303Z" fill="#DADADA" />
                    <path d="M11.394 9.3753L12.7734 11.37L15.1446 8.03061L14.3381 6.021L11.394 9.3753Z" fill="#DADADA" />
                    <path d="M8.35593 3.31104C7.01501 3.31104 5.92773 4.15743 5.92773 5.20166C5.92773 6.24589 7.01501 7.09229 8.35593 7.09229V7.723C8.35593 7.723 10.3509 6.9599 10.72 5.6256C10.7271 5.60032 10.7343 5.57503 10.7414 5.54974C10.7528 5.50065 10.7642 5.45156 10.7699 5.40099C10.7713 5.39504 10.7713 5.38909 10.7727 5.38314C10.7799 5.32364 10.7841 5.26265 10.7841 5.20166C10.7841 4.15743 9.69686 3.31104 8.35593 3.31104Z" fill="#DADADA" />
                    <path d="M1.72235 8.6954L4.7747 5.7085L3.32263 6.20681L0.454102 9.06728L1.72235 8.6954Z" fill="#DADADA" />
                    <path d="M4.77441 5.5166L14.8406 6.15028L15.1441 5.83344" fill="#DADADA" />
                    <path d="M17.61 8.61C17.386 8.61 17.1993 8.54 17.05 8.4C16.9007 8.25067 16.826 8.05933 16.826 7.826C16.826 7.59267 16.9007 7.406 17.05 7.266C17.1993 7.11667 17.386 7.042 17.61 7.042C17.8247 7.042 18.002 7.11667 18.142 7.266C18.2913 7.406 18.366 7.59267 18.366 7.826C18.366 8.05933 18.2913 8.25067 18.142 8.4C18.002 8.54 17.8247 8.61 17.61 8.61ZM17.61 14.07C17.386 14.07 17.1993 14 17.05 13.86C16.9007 13.7107 16.826 13.5193 16.826 13.286C16.826 13.0527 16.9007 12.8613 17.05 12.712C17.1993 12.5627 17.386 12.488 17.61 12.488C17.8247 12.488 18.002 12.5627 18.142 12.712C18.2913 12.8613 18.366 13.0527 18.366 13.286C18.366 13.5193 18.2913 13.7107 18.142 13.86C18.002 14 17.8247 14.07 17.61 14.07Z" fill="white" />
                </svg>
                <img class="topic-icon" src="img/categories/<?php echo $postCategory ?>.png">
                <p class="topic-text"> <?php echo strtolower($postCategory) ?></p>
            </div>

        </article>


        <!-- post  a comment -->

        <article class="user-comment">




            <svg class="arrow-pointer" xmlns="http://www.w3.org/2000/svg" width="14" height="41" viewBox="0 0 14 41" fill="none">
                <path d="M2.55365 1C0.0956907 17.0434 -1.25619 47.0067 13 38.5131" stroke="#838383" stroke-linecap="round" />
            </svg>

            <img class="user-pic" src="<?php if (empty($_SESSION['userProfPhoto'])) {
                                            echo 'img/default-pic.jpg';
                                        } else {
                                            echo 'uploaded-imgs/' . $_SESSION['userProfPhoto'];
                                        }
                                        ?>">

            <form method="post" id="commentForm" action="" name="commentForms">
                <input type="text" name="dateTime" value="<?php echo (new \DateTime())->format('Y-m-d H:i:s'); ?>" hidden />
                <textarea placeholder="What's your say about this?" name="comment" class="text-area" id="commentArea"></textarea>
                <input type="submit" name="postComment" hidden />

            </form>

            <script>
                $("#commentArea").keypress(function(e) {
                    if (e.which === 13 && !e.shiftKey) {
                        e.preventDefault();

                        $("#commentForm").submit();
                    }
                });
            </script>


        </article>

        <!-- comments -->
        <article class="comment-section">

            <?php

            // to get the 20 most recent posts
            $getComment = "SELECT * FROM comments WHERE commentPostID = $postID ";
            $select_comment_query = mysqli_query($connection, $getComment);



            // creating a whileloop to get and display the data

            // get the commenter's details based on the user id of the commenter
            $commentUserQuery = "SELECT * FROM users INNER JOIN comments ON users.userID = comments.commentUserID WHERE commentPostID = $postID ";
            $select_user_comment_query = mysqli_query($connection, $commentUserQuery);




            while ($commentRow = mysqli_fetch_assoc($select_comment_query)) {

                // getting table columns in database

                $commentID = $commentRow['commentID'];
                $commentPostID = $commentRow['commentPostID'];
                $commentUserID = $commentRow['commentUserID'];
                $commentText = htmlspecialchars($commentRow['commentText']);
                $commentDate = $commentRow['commentDate'];
                $commentlikesCount = $commentRow['likesCount'];

                $userRow = mysqli_fetch_assoc($select_user_comment_query);

                // getting data from  users
                $commenterID = $userRow['userID'];
                $commenterUserName = htmlspecialchars($userRow['userName']);
                $commenterName = htmlspecialchars($userRow['nickname']);
                $commenterPhoto = $userRow['userProfPhoto'];









            ?>



                <div class="comment">

                    <div class="commenter">

                        <img class="commenter-pic" src="uploaded-imgs/<?php echo $commenterPhoto ?>">

                        <div class="names">
                            <h1 class="commenter-name"><?php echo $commenterName ?> <span class="square"> &#x25a0 </span> <time class="time timeago" datetime=" <?php echo date(DATE_ISO8601, strtotime($commentDate)); ?>"> </time> </h1>
                            <h2 class="commenter-username">@<?php echo $commenterUserName ?></h2>

                        </div>


                        <div class="commenter-comment comment-reply" id="comment">
                            <p><?php echo $commentText ?> </p>
                        </div>


                        <div class="line" id="line<?php echo $i++; ?>"></div>

                    </div>


                    <div class="comment-actions">


                        <?php


                        $checkedLikesQuery =  mysqli_query($connection, "SELECT * FROM likes WHERE likesCommentID = $commentID AND likesUserID = $userID");
                        $checkLikedResults = mysqli_num_rows($checkedLikesQuery) >= 1 ? true : false;



                        ?>



                        <!-- <?php echo $check =  $checkLikedResults ?  'user liked' :  'user did not like'; ?> -->

                        <div class="like">


                            <button class="like-button <?php echo $check3 =   $checkLikedResults  ?  'unlikedbutton' :  'liked-button' ?>" value="<?php echo $commentID ?>">

                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <g clip-path="url(#clip0_132_1841)">
                                        <path d="M6.65458 1.42935L6.99981 1.75888L7.34504 1.42935C8.18194 0.63052 9.34795 0.36637 10.4635 0.56111C11.5828 0.756513 12.5929 1.40426 13.1153 2.35145C13.6258 3.27724 13.7146 4.57078 12.8412 6.17069C11.982 7.74474 10.1948 9.59978 6.9998 11.5993C3.80484 9.59998 2.01756 7.74503 1.15837 6.17103C0.285062 4.57117 0.373801 3.27759 0.88434 2.35175C1.40669 1.40449 2.41683 0.75668 3.53616 0.56122C4.65169 0.366423 5.81769 0.630529 6.65458 1.42935Z" stroke="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_132_1841">
                                            <rect width="14" height="14" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </button>
                            <p class="like-p"> <?php $commentlikesCount ?>Likes</p>
                        </div>
                    </div>

                </div>




                <div class="reply-section">


                    <?php

                    $getRepliesUsersQuery = "SELECT * FROM users INNER JOIN replies ON users.userID = replies.replyuserID WHERE  replyCommentID = $commentID ";
                    $get_all_user_replies = mysqli_query($connection, $getRepliesUsersQuery);



                    $getRepliesQuery = "SELECT * FROM replies WHERE replyCommentID = $commentID";
                    $get_all_replies = mysqli_query($connection, $getRepliesQuery);

                    while ($getReply  = mysqli_fetch_assoc($get_all_replies)) {
                        $replyDate = $getReply['replyDate'];
                        $replyID = $getReply['replyID'];
                        $replyUserID = $getReply['replyuserID'];
                        $replyCommentID = $getReply['replyCommentID'];
                        $replyText = htmlspecialchars($getReply['replyText']);

                        $userrepliesRow = mysqli_fetch_assoc($get_all_user_replies);
                        $replierID = $userrepliesRow['userID'];
                        $replierUserName = htmlspecialchars($userrepliesRow['userName']);
                        $replierName = htmlspecialchars($userrepliesRow['nickname']);
                        $replierPhoto = $userrepliesRow['userProfPhoto'];



                    ?>


                        <div class="comment-rep">



                            <div class="replier">
                                <img class="replier-pic" src="uploaded-imgs/<?php echo $replierPhoto ?>">

                                <div class="reply-names">
                                    <h1 class="replier-name"><?php echo $replierName ?> <span class="square"> &#x25a0 </span> <time class="time timeago" datetime=" <?php echo date(DATE_ISO8601, strtotime($replyDate)) ?>"></time> </h1>
                                    <h2 class="replier-username"><?php echo $replierUserName ?></h2>
                                </div>

                            </div>

                            <div class="replier-comment comment-reply2" id="">
                                <p><?php echo $replyText ?></p>

                            </div>



                            <div class="reply-line line2" id="line2"></div>

                            <div class="reply-comment-end"></div>
                        </div>




                    <?php } ?>


                    <div class="reply-form replyGroup" id="">
                        <img class="reply-pic" src="<?php if (empty($_SESSION['userProfPhoto'])) {
                                                        echo 'img/default-pic.jpg';
                                                    } else {
                                                        echo 'uploaded-imgs/' . $_SESSION['userProfPhoto'];
                                                    }
                                                    ?>">

                        <form method="post" id="replyForms" action="" name="replyForm" class="replyForm reply-forms<?php echo $i; ?>">
                            <input type="text" name="dateTimeReply" value="<?php echo (new \DateTime())->format('Y-m-d H:i:s'); ?>" hidden />
                            <textarea placeholder="What's your say about this comment?" name="replyComment" class="reply-area replies<?php echo $i; ?>" id="replyArea"></textarea>



                            <input type="text" name="commentID" value="<?php echo $commentID ?>" hidden />

                            <input type="submit" name="commentReply" hidden />



                        </form>



                        <script>
                            $(".replies<?php echo $i; ?>").keypress(function(e) {
                                if (e.which === 13 && !e.shiftKey) {
                                    e.preventDefault();

                                    $(".reply-forms<?php echo $i; ?>").submit();
                                }
                            });







                            // adjusting the line based on the height of user comment
                            // const line = document.getElementById("line<?php echo $i++; ?>");
                            // const comment = document.getElementById("comment<?php echo $i++; ?>");
                            // const line2 = document.getElementById("line2");
                            // const reply = document.getElementById("reply-comment");

                            // line.style.height = (comment.offsetHeight - (40) + "px");

                            // line2.style.height = (reply.offsetHeight - (40) + "px");
                        </script>








                    </div>



                </div>



            <?php }
            ?>





    </div>


    </article>




    </div>

    <?php if (!empty($_SESSION['userID'])) { ?>

        <script>
            // ---- FOR THE COMMENTS -- 
            var postID = <?php echo $_GET['p_id']; ?>;
            var userID = <?php echo $_SESSION['userID']; ?>;



            // like
            $(document).ready(function() {
                $('.liked-button').click(function() {

                    // getting the value of the comment to know which comment has been liked
                    var commentID = $(this).val();

                    $.ajax({
                        url: "post-page.php?p_id=<?php echo $postID; ?>",
                        type: 'post',
                        data: {
                            liked: 1,
                            // 'postID': postID,
                            'userID': userID,
                            'commentID': commentID,
                        }
                    })

                    window.location.reload()
                });
            });

            // unlike
            $(document).ready(function() {
                $('.unlikedbutton').click(function() {


                    var commentID = $(this).val();
                    $.ajax({
                        url: "post-page.php?p_id=<?php echo $postID; ?>",
                        type: 'post',
                        data: {
                            unliked: 1,
                            // 'postID': postID,
                            'userID': userID,
                            'commentID': commentID,
                        }
                    })

                    window.location.reload()
                });
            });
        </script>

        <script>
            const tx = document.getElementsByTagName("textarea");
            var value = 0;


            for (let i = 0; i < tx.length; i++) {



                tx[i].setAttribute("style", "height:" + (tx[i].offsetHeight) + "px;overflow-y:hidden;");


                tx[i].addEventListener("input", OnInput, false);





            }

            function OnInput() {


                // if the scroll height is less than the default size
                if (this.scrollHeight <= this.offsetHeight) {

                    // reset the height  to default
                    this.setAttribute('style', '' + "px;overflow-y:hidden;");
                    this.style.height = (this.scrollHeight) + "px";




                    // if the scroll height is greater than the default size
                } else {
                    this.style.height = this.offsetHeight;
                    this.style.height = (this.scrollHeight) + "px";

                }
            }
        </script>

    <?php } ?>

    <script>
        var lines1 = document.getElementsByClassName("line1");
        var comment1 = document.getElementsByClassName("comment-reply1");

        for (var i = 0; i < lines1.length; i++) {
            lines[i].style.height = (comment[i].offsetHeight + (100) + "px");
        }



        var lines2 = document.getElementsByClassName("line2");
        var comment2 = document.getElementsByClassName("comment-reply2");

        for (var i = 0; i < lines2.length; i++) {

            lines2[i].style.height = (comment2[i].offsetHeight - (40) + "px");
        }
    </script>

</body>

</html>