<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!-- jquery to active timeago  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/timeago.js" type="text/javascript"></script>

    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>


    <script>
        jQuery(document).ready(function() {
            jQuery("time.timeago").timeago();
        });
    </script>


</head>

<body>
    <?php include 'includes/nav.php' ?>
    <?php include 'includes/db.php' ?>



    <script src="js/alert.js" type="javascript"></script>



    <?php if (isset($_GET['status'])) {

        $status = $_GET['status'];

        if ($status === "uploaded") {  ?>
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Created a post successfully'
                })
            </script>

        <?php } else { ?>


            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                })
            </script>
    <?php }
    } ?>

    <div class="container" id="container">

        <main id="main">

            <!-- navicon for responsiveness -->
            <button onclick="navIcon()" id="topic-button" class="button-topic">
                <svg class="topic-button2" xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 13 14" fill="none">
                    <path d="M1.125 13.1181L9.21877 13.5871V5.84906L1.125 5.45801" fill="white" />
                    <path d="M9.62547 5.86489L9.54297 13.6042L12.3092 8.55769L12.1917 3.10156L9.62547 5.86489Z" fill="white" />
                    <path d="M1.12519 5.45801L0.0126953 7.88719L8.22895 8.26957L9.30395 5.80945L1.12519 5.45801Z" fill="#EDEDED" />
                    <path d="M9.60889 5.89211L10.8189 7.55159L12.8989 4.77342L12.1914 3.10156L9.60889 5.89211Z" fill="#EDEDED" />
                    <path d="M6.94444 0.84668C5.7682 0.84668 4.81445 1.55082 4.81445 2.41955C4.81445 3.28829 5.7682 3.99243 6.94444 3.99243V4.51714C6.94444 4.51714 8.69444 3.88229 9.01819 2.77225C9.02444 2.75121 9.03069 2.73017 9.03694 2.70913C9.04694 2.66829 9.05694 2.62746 9.06194 2.58538C9.06319 2.58043 9.06319 2.57548 9.06444 2.57053C9.07069 2.52103 9.07444 2.47029 9.07444 2.41955C9.07444 1.55082 8.12069 0.84668 6.94444 0.84668Z" fill="#EDEDED" />
                    <path d="M1.12519 5.3267L3.80269 2.8418L2.52894 3.25636L0.0126953 5.63607L1.12519 5.3267Z" fill="#EDEDED" />
                    <path d="M3.80273 2.68213L12.6327 3.20931L12.899 2.94572" fill="#EDEDED" />
                </svg>



            </button>




            <?php if (empty($_SESSION['userID'])) { ?>
                <a href="#" onclick="notLoggedIn()" class="toPost">
                <?php } else { ?>
                    <a href="create-post.php">
                    <?php } ?>

                    <script>
                        var button = document.querySelector('.toPost');
                        button.onclick = function() {
                            Swal.fire({
                                title: 'You are not logged in!',
                                text: "To create a post, you must be logged in.",
                                confirmButtonColor: '#BA5D5D',
                                confirmButtonText: '<b>Close<b>',
                                padding: 25,
                                showCancelButton: true,
                                cancelButtonColor: '#BA5D5D',
                                cancelButtonText: '<a href="login.php"><b>Login Now<b><a/>',


                            })
                        }
                    </script>

                    <div class="create-post">


                        <div class="create-post-container">


                            <img class="prof-pic" src="<?php if (empty($_SESSION['userProfPhoto'])) {
                                                            echo 'img/default-pic.jpg';
                                                        } else {
                                                            echo 'uploaded-imgs/' . $_SESSION['userProfPhoto'];
                                                        }
                                                        ?>">

                            <div class=" texts">

                                <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                                    <path d="M20.5 2.5625C15.7604 2.61968 11.2311 4.52788 7.8795 7.8795C4.52788 11.2311 2.61968 15.7604 2.5625 20.5C2.61968 25.2396 4.52788 29.7689 7.8795 33.1205C11.2311 36.4721 15.7604 38.3803 20.5 38.4375C25.2396 38.3803 29.7689 36.4721 33.1205 33.1205C36.4721 29.7689 38.3803 25.2396 38.4375 20.5C38.3803 15.7604 36.4721 11.2311 33.1205 7.8795C29.7689 4.52788 25.2396 2.61968 20.5 2.5625ZM30.75 21.7812H21.7812V30.75H19.2188V21.7812H10.25V19.2188H19.2188V10.25H21.7812V19.2188H30.75V21.7812Z" fill="white" />
                                </svg>

                                <p class="first-heading">Hi<?php if (empty($_SESSION['userID'])) {
                                                                echo ' there!';
                                                            } else {
                                                                echo ', ' . $_SESSION['nickname'] . '!';
                                                            } ?>

                                </p>
                                <p class="second-heading">
                                    <?php if (empty($_SESSION['userID'])) {
                                        echo 'Log in now and ';
                                    }  ?>Let your voice be heard.



                            </div>


                        </div>


                    </div>

                    </a>


                    <div class="line"></div>

                    <article class="all-posts">



                        <!-- posts -->

                        <?php

                        // to get the 50 most recent posts, i limited it to 50 so that there won't be too many data posted,
                        $postQuery = "SELECT * FROM posts ORDER BY postID DESC LIMIT 50";

                        $select_all_posts_query = mysqli_query($connection, $postQuery);


                        // creating a whileloop to get and display the data

                        // but first, the names from user table will ge retrieved
                        $postuserQuery = "SELECT * FROM users INNER JOIN posts ON users.userID = posts.postUserID ORDER BY postID DESC LIMIT 50";
                        $select_all_userposts_query = mysqli_query($connection, $postuserQuery);
                        while ($row = mysqli_fetch_assoc($select_all_userposts_query)) {

                            // getting table columns in database
                            $row2 = mysqli_fetch_assoc($select_all_posts_query);

                            // getting data from  users and converting the special characters to html entitiesto prevent 
                            $userID = $row['userID'];
                            $usernamePoster = htmlspecialchars($row['userName']);
                            $namePoster = htmlspecialchars($row['nickname']);
                            $userProfPhoto = $row['userProfPhoto'];
                            // getting data from posts table
                            $postID = $row2['postID'];
                            $postTitle = htmlspecialchars($row2['postTitle']);
                            $postText =  htmlspecialchars($row2['postText']);
                            $postUserID = $row2['postUserID'];
                            $image = $row2['image'];
                            $likesCount = $row2['likesCount'];
                            $commentCount = $row2['commentCount'];
                            // $postDate = date(DATE_ISO8601, strtotime($row['postDate']));
                            $postCategory = $row2['postCategory'];
                            $postDate = new DateTime($row2['postDate']);


                        ?>

                            <div class="post">


                                <div class="upper">

                                    <!-- not closing the while loop to display all the posts using  the while loop -->

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



                                    <div class="contents">


                                        <div class="user">
                                            <img class="user-img" src="uploaded-imgs/<?php echo $userProfPhoto ?>">

                                            <h1 class="name-post"> <?php echo $namePoster ?> <span class="square"> &#x25a0 </span> <time class="time timeago" datetime=" <?php echo $postDate->format(DateTime::ATOM) ?>"> </time> </h1>

                                            <h2 class="username-post"><?php echo '@' . $usernamePoster ?></h2>

                                        </div>



                                        <a href="post-page.php?p_id=<?php echo $postID ?>">
                                            <div class="post-content">
                                                <h1 class="post-title"> <?php echo $postTitle ?> </h1>
                                                <h2 class="post-text"> <?php echo $postText ?> </h2>


                                                <?php
                                                // if there is a data in the image, display it otherwise dont

                                                if ($image != null) { ?>
                                                    <img class="post-img" src="uploaded-imgs2/<?php echo $image ?>" />

                                                <?php } //closing the if statement 
                                                ?>



                                            </div>
                                        </a>
                                    </div>

                                </div>

                                <div class="content-actions">

                                    <div class="actions-holder">

                                        <div class="comment">
                                            <svg class="comment1" xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 14 15" fill="none">
                                                <path d="M7 14.0644C10.8658 14.0644 14 10.916 14 7.03222C14 3.14842 10.8658 0 7 0C3.13425 0 0 3.14842 0 7.03222C0 8.80031 0.650125 10.4177 1.72375 11.6534C1.63888 12.6741 1.35888 13.7932 1.04912 14.633C0.98 14.8199 1.11388 15.0288 1.288 14.9967C3.262 14.625 4.43537 14.0544 4.9455 13.757C5.61567 13.9622 6.3064 14.0656 7 14.0644Z" fill="white" />
                                            </svg>
                                            <p> <?php echo $commentCount ?> </p>
                                        </div>

                                        <div class="hands-up">
                                            <svg class="hands-up1" xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 16 19" fill="none">
                                                <path d="M2.66699 12.6668V6.72933C2.66699 6.07383 3.09433 5.54183 3.65366 5.54183C4.00033 5.54183 4.66699 5.77933 4.66699 6.72933V4.35433C4.66699 3.69883 5.09433 3.16683 5.65366 3.16683C5.99166 3.16683 6.66699 3.40433 6.66699 4.35433V2.771C6.66699 2.1155 7.09433 1.5835 7.65366 1.5835C8.21366 1.5835 8.66699 2.1155 8.66699 2.771V4.35433C8.66699 3.40433 9.32899 3.16683 9.66699 3.16683C10.227 3.16683 10.667 3.71387 10.667 4.37016V11.0835" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.66677 12.6671C2.66677 15.8337 4.7561 17.4171 7.33343 17.4171C9.91077 17.4171 10.7974 16.6254 12.7974 12.6671L13.8448 10.6048C14.2021 9.91761 13.9161 9.02619 13.2574 8.77286C13.0421 8.68931 12.8103 8.68642 12.5935 8.76459C12.3766 8.84276 12.1853 8.99821 12.0454 9.20986L10.6668 11.1099" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <p><?php echo $likesCount ?></p>
                                        </div>

                                        <div class="share">
                                            <svg class="share1" xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 17 16" fill="none">
                                                <path d="M10.625 11.3332L14.1667 7.99984L10.625 4.6665" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.8335 12V10.6667C2.8335 9.95942 3.13201 9.28115 3.66336 8.78105C4.19471 8.28095 4.91538 8 5.66683 8H14.1668" stroke="#FBFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>





                                    </div>

                                </div>

                            </div>




                        <?php }



                        ?>



                    </article>


        </main>




        <button onclick="navIcon()" id="x-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="32" viewBox="0 0 39 32" fill="none">
                <path d="M11.3244 9.29183C11.4376 9.19871 11.5721 9.12482 11.7201 9.07441C11.8682 9.024 12.0269 8.99805 12.1872 8.99805C12.3475 8.99805 12.5063 9.024 12.6543 9.07441C12.8024 9.12482 12.9369 9.19871 13.0501 9.29183L19.4997 14.5858L25.9494 9.29183C26.0627 9.19886 26.1972 9.12511 26.3453 9.07479C26.4933 9.02447 26.652 8.99857 26.8122 8.99857C26.9725 8.99857 27.1312 9.02447 27.2792 9.07479C27.4273 9.12511 27.5618 9.19886 27.6751 9.29183C27.7884 9.38481 27.8783 9.49519 27.9396 9.61667C28.001 9.73815 28.0325 9.86835 28.0325 9.99983C28.0325 10.1313 28.001 10.2615 27.9396 10.383C27.8783 10.5045 27.7884 10.6149 27.6751 10.7078L21.223 15.9998L27.6751 21.2918C27.7884 21.3848 27.8783 21.4952 27.9396 21.6167C28.001 21.7381 28.0325 21.8683 28.0325 21.9998C28.0325 22.1313 28.001 22.2615 27.9396 22.383C27.8783 22.5045 27.7884 22.6149 27.6751 22.7078C27.5618 22.8008 27.4273 22.8746 27.2792 22.9249C27.1312 22.9752 26.9725 23.0011 26.8122 23.0011C26.652 23.0011 26.4933 22.9752 26.3453 22.9249C26.1972 22.8746 26.0627 22.8008 25.9494 22.7078L19.4997 17.4138L13.0501 22.7078C12.9368 22.8008 12.8023 22.8746 12.6542 22.9249C12.5062 22.9752 12.3475 23.0011 12.1872 23.0011C12.027 23.0011 11.8683 22.9752 11.7203 22.9249C11.5722 22.8746 11.4377 22.8008 11.3244 22.7078C11.211 22.6149 11.1212 22.5045 11.0598 22.383C10.9985 22.2615 10.9669 22.1313 10.9669 21.9998C10.9669 21.8683 10.9985 21.7381 11.0598 21.6167C11.1212 21.4952 11.211 21.3848 11.3244 21.2918L17.7764 15.9998L11.3244 10.7078C11.2109 10.6149 11.1208 10.5046 11.0594 10.3831C10.9979 10.2616 10.9663 10.1314 10.9663 9.99983C10.9663 9.8683 10.9979 9.73806 11.0594 9.61657C11.1208 9.49508 11.2109 9.38473 11.3244 9.29183Z" fill="white" />
            </svg>

        </button>


        <aside>

            <div id="aside">

                <article class="search">

                    <form class="" id="searchForm" method="get" action="searched-post.php">

                        <div class="searchbar-container">
                            <input type="text" class="search-input" name="keyword" placeholder="Search a topic..." />

                            <button type="submit" form="searchForm" name="search" class="search-button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 23" fill="none">
                                    <path d="M11.4583 18.2083C16.0607 18.2083 19.7917 14.7759 19.7917 10.5417C19.7917 6.30748 16.0607 2.875 11.4583 2.875C6.85596 2.875 3.125 6.30748 3.125 10.5417C3.125 14.7759 6.85596 18.2083 11.4583 18.2083Z" stroke="#878686" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.875 20.1248L17.3438 15.9561" stroke="#878686" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg></button>
                        </div>

                    </form>

                </article>



                <article class="topics-list">

                    <div class="topic-list-container">

                        <h1 class="topics-heading">Topics</h1>


                        <form id="topicForm" method="get" action="specific-post.php">

                            <div class="button-list">

                                <button name="category" value="relationship" type="submit" class="relationship topic"> Relationship </button>

                                <button name="category" value="chat" type="submit" class="chat topic"> Chat </button>

                                <button name="category" value="lgbtqia" type="submit" class="lgbtqia topic"> LGBTQIA+ </button>

                                <button name="category" value="depression" type="submit" class="depression topic"> Depression </button>

                                <button name="category" value="mental-health" type="submit" class="mental-health topic"> MENTAL HEALTH </button>


                                <button name="category" value="grief" type="submit" class="grief topic"> GRIEF </button>

                                <button name="category" value="insecurity" type="submit" class="insecurity topic"> insecurity </button>

                                <button name="category" value="anxiety" type="submit" class="anxiety topic"> anxiety </button>

                                <button name="category" value="friends" type="submit" class="friends topic"> friends </button>

                                <button name="category" value="education" type="submit" class="education topic"> education </button>

                                <button name="category" value="bullying" type="submit" class="bullying topic"> bullying </button>

                                <button name="category" value="loneliness" type="submit" class="loneliness topic"> loneliness </button>

                                <button name="category" value="health" type="submit" class="health topic"> health </button>

                                <button name="category" value="happiness" type="submit" class="happiness topic"> happiness </button>

                                <button name="category" value="tiredness" type="submit" class="tiredness topic"> tiredness </button>

                                <button name="category" value="stress" type="submit" class="stress topic"> stress </button>

                                <button name="category" value="family" type="submit" class="family topic"> family </button>

                                <button name="category" value="frustration" type="submit" class="frustration topic"> frustration </button>

                                <button name="category" value="love" type="submit" class="love topic"> love </button>

                                <button name="category" value="pets" type="submit" class="pets topic"> pets </button>



                                <button name="category" value="others" type="submit" class="others topic"> others </button>




                            </div>

                        </form>

                    </div>

                </article>


            </div>
        </aside>


        <script>
            function navIcon() {
                var x = document.getElementById("aside");
                var y = document.getElementById("x-button");
                var z = document.getElementById("topic-button");
                var nav = document.getElementById("nav");
                var main = document.getElementById("main");

                if (x.style.display === "none") {
                    x.style.display = "block";
                    y.style.display = "block";
                    z.style.display = "none";
                    // nav.classList.add("blur");
                    main.classList.add("blur");
                    nav.classList.add("blur");


                } else {
                    x.style.display = "none";
                    y.style.display = "none";
                    z.style.display = "block";
                    main.classList.remove("blur");
                    nav.classList.remove("blur");
                }

            }
        </script>



    </div>



</body>



</html>