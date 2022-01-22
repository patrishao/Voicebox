<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/profile.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    <?php include 'includes/nav.php' ?>

    <div class="container">

        <div class="holder">

            <article class="user-info">


                <!-- coverphoto edit -->
                <div class="coverphoto-container">
                    <img class="cover-img" src="<?php if (empty($_SESSION['userCoverPhoto'])) {
                                                    echo 'img/default-cover.jpg';
                                                } else {
                                                    echo 'uploaded-imgs/' . $_SESSION['userCoverPhoto'];
                                                }
                                                ?>">
                    <img src="<?php if (empty($_SESSION['userProfPhoto'])) {
                                    echo 'img/default-pic.jpg';
                                } else {
                                    echo 'uploaded-imgs/' . $_SESSION['userProfPhoto'];
                                }
                                ?>" class="prof-photo" />

                </div>

                <div class="contents">


                    <div class="names">

                        <div class="name-holder">
                            <h1 class="user-name"><?php ?></h2>
                                <h2 class="username">@username</h2>

                        </div>

                        <div class="side-btn">

                            <!-- <button><a href="edit-profile.php"> Edit Profile</a></button> -->
                            <button>Follow</button>
                        </div>

                    </div>

                    <div class="date-joined">
                        <img src="img/calendar.png" class="calendar">
                        <p>Joined December 2021</p>
                    </div>

                    <div class="follow">
                        <p class="followings">0 Followings</p>
                        <p>0 Followers</p>
                    </div>

                </div>


            </article>



            <article class="buttons" id="buttons">

                <button id="postBtn" class="active" onclick="show('allPosts');">Posts</button>
                <button id="cmmntBtn" onclick="show('allComments');">Comments</button>
                <button id="feltBtn" onclick="show('allFelts');">Felt</button>
                <button id="repliesBtn" onclick="show('allReplies');">Replies</button>
                <button id="likeBtn" onclick="show('allLikes');">Likes</button>
                <button class="down-arrow" onclick="down();"> <span id="toggle"> Posts </span> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="6" viewBox="0 0 11 6" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.12428 0.125877C0.163576 0.0859754 0.210257 0.0543181 0.261651 0.0327181C0.313045 0.0111181 0.368141 0 0.423784 0C0.479426 0 0.534522 0.0111181 0.585916 0.0327181C0.63731 0.0543181 0.683991 0.0859754 0.723287 0.125877L5.50011 4.96493L10.2769 0.125877C10.3163 0.0860399 10.363 0.0544397 10.4143 0.0328803C10.4657 0.0113209 10.5208 0.000224329 10.5764 0.000224329C10.6321 0.000224329 10.6871 0.0113209 10.7385 0.0328803C10.7899 0.0544397 10.8366 0.0860399 10.8759 0.125877C10.9153 0.165713 10.9465 0.213006 10.9678 0.265055C10.989 0.317104 11 0.37289 11 0.429228C11 0.485565 10.989 0.541351 10.9678 0.5934C10.9465 0.645449 10.9153 0.692742 10.8759 0.732579L5.79961 5.87412C5.76032 5.91402 5.71364 5.94568 5.66224 5.96728C5.61085 5.98888 5.55575 6 5.50011 6C5.44447 6 5.38937 5.98888 5.33798 5.96728C5.28659 5.94568 5.2399 5.91402 5.20061 5.87412L0.12428 0.732579C0.0848852 0.692779 0.0536295 0.645497 0.0323035 0.593443C0.0109774 0.541389 0 0.485585 0 0.429228C0 0.37287 0.0109774 0.317066 0.0323035 0.265012C0.0536295 0.212958 0.0848852 0.165677 0.12428 0.125877Z" fill="white" />
                    </svg>
                </button>

            </article>


            <article class="links">

                <div class="all-posts" id="allPosts">

                    <!-- This is the post template -->
                    <div class="posts-holder">

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
                            <i class="topic-icon">icon</i>
                            <p class="topic-text"> Topic</p>
                        </div>
                        <div class="user">
                            <img class="user-img" src="img/default-pic.jpg">
                            <h1 class="name-post">Username <span class="square"> &#x25a0 </span> <span class="time"> Time ago</span> </h1>
                            <h2 class="username-post">@Username</h2>

                        </div>

                        <div class="post-content">
                            <h1 class="post-title">Post title "Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                            <h2 class="post-text">Post texts Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </h2>

                            <div class="actions-holder">
                                <div class="comment">
                                    <svg class="comment1" xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 14 15" fill="none">
                                        <path d="M7 14.0644C10.8658 14.0644 14 10.916 14 7.03222C14 3.14842 10.8658 0 7 0C3.13425 0 0 3.14842 0 7.03222C0 8.80031 0.650125 10.4177 1.72375 11.6534C1.63888 12.6741 1.35888 13.7932 1.04912 14.633C0.98 14.8199 1.11388 15.0288 1.288 14.9967C3.262 14.625 4.43537 14.0544 4.9455 13.757C5.61567 13.9622 6.3064 14.0656 7 14.0644Z" fill="white" />
                                    </svg>
                                    <p>0</p>
                                </div>

                                <div class="hands-up">
                                    <svg class="hands-up1" xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 16 19" fill="none">
                                        <path d="M2.66699 12.6668V6.72933C2.66699 6.07383 3.09433 5.54183 3.65366 5.54183C4.00033 5.54183 4.66699 5.77933 4.66699 6.72933V4.35433C4.66699 3.69883 5.09433 3.16683 5.65366 3.16683C5.99166 3.16683 6.66699 3.40433 6.66699 4.35433V2.771C6.66699 2.1155 7.09433 1.5835 7.65366 1.5835C8.21366 1.5835 8.66699 2.1155 8.66699 2.771V4.35433C8.66699 3.40433 9.32899 3.16683 9.66699 3.16683C10.227 3.16683 10.667 3.71387 10.667 4.37016V11.0835" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.66677 12.6671C2.66677 15.8337 4.7561 17.4171 7.33343 17.4171C9.91077 17.4171 10.7974 16.6254 12.7974 12.6671L13.8448 10.6048C14.2021 9.91761 13.9161 9.02619 13.2574 8.77286C13.0421 8.68931 12.8103 8.68642 12.5935 8.76459C12.3766 8.84276 12.1853 8.99821 12.0454 9.20986L10.6668 11.1099" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p>0</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- comments -->

                <div class="all-comments" id="allComments">

                    <!-- comment template -->
                    <div class="comment-holder">

                        <p class="comment-indicator">Commented on @username's post</p>

                        <svg class="arrow-pointer" xmlns="http://www.w3.org/2000/svg" width="14" height="41" viewBox="0 0 14 41" fill="none">
                            <path d="M2.55365 1C0.0956907 17.0434 -1.25619 47.0067 13 38.5131" stroke="#838383" stroke-linecap="round" />
                        </svg>

                        <div class="user">
                            <img class="user-img" src="img/default-pic.jpg">
                            <h1 class="name-post">Username <span class="square"> &#x25a0 </span> <span class="time"> Time ago</span> </h1>
                            <h2 class="username-post">@Username</h2>
                        </div>


                        <div class="post-text commenter">

                            <div class="line"></div>


                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                        </div>



                        <div class="actions-holder left">
                            <!-- reply -->
                            <div class="comment ">
                                <svg class="comment1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M6.5 11.6892L6.49922 11.6892C5.90213 11.6901 5.30724 11.6071 4.72965 11.442L4.53297 11.3858L4.3533 11.4835C3.96827 11.693 3.08418 12.102 1.6056 12.4096C1.83756 11.7212 2.03065 10.9072 2.09865 10.144L2.11843 9.92201L1.96659 9.75891C1.0497 8.77399 0.5 7.49184 0.5 6.09459C0.5 3.03463 3.15568 0.5 6.5 0.5C9.84432 0.5 12.5 3.03463 12.5 6.09459C12.5 9.15454 9.84432 11.6892 6.5 11.6892Z" stroke="white" />
                                </svg>

                                <p>Reply</p>
                            </div>

                            <!-- like -->
                            <div class="hands-up">
                                <svg class="hands-up1" xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                    <g clip-path="url(#clip0_132_1841)">
                                        <path d="M6.65458 1.42935L6.99981 1.75888L7.34504 1.42935C8.18194 0.63052 9.34795 0.36637 10.4635 0.56111C11.5828 0.756513 12.5929 1.40426 13.1153 2.35145C13.6258 3.27724 13.7146 4.57078 12.8412 6.17069C11.982 7.74474 10.1948 9.59978 6.9998 11.5993C3.80484 9.59998 2.01756 7.74503 1.15837 6.17103C0.285062 4.57117 0.373801 3.27759 0.88434 2.35175C1.40669 1.40449 2.41683 0.75668 3.53616 0.56122C4.65169 0.366423 5.81769 0.630529 6.65458 1.42935Z" stroke="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_132_1841">
                                            <rect width="14" height="13" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p>0 Likes</p>
                            </div>

                        </div>

                    </div>



                </div>


                <div class="all-felt" id="allFelts">
                    <div class="posts-holder">

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
                            <i class="topic-icon">icon</i>
                            <p class="topic-text"> Topic</p>
                        </div>
                        <div class="user">
                            <img class="user-img" src="img/default-pic.jpg">
                            <h1 class="name-post">Username <span class="square"> &#x25a0 </span> <span class="time"> Time ago</span> </h1>
                            <h2 class="username-post">@Username</h2>

                        </div>

                        <div class="post-content">
                            <h1 class="post-title">Post title "Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                            <h2 class="post-text">Post texts Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </h2>

                            <div class="actions-holder">
                                <div class="comment">
                                    <svg class="comment1" xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 14 15" fill="none">
                                        <path d="M7 14.0644C10.8658 14.0644 14 10.916 14 7.03222C14 3.14842 10.8658 0 7 0C3.13425 0 0 3.14842 0 7.03222C0 8.80031 0.650125 10.4177 1.72375 11.6534C1.63888 12.6741 1.35888 13.7932 1.04912 14.633C0.98 14.8199 1.11388 15.0288 1.288 14.9967C3.262 14.625 4.43537 14.0544 4.9455 13.757C5.61567 13.9622 6.3064 14.0656 7 14.0644Z" fill="white" />
                                    </svg>
                                    <p>0</p>
                                </div>

                                <div class="hands-up">
                                    <svg class="hands-up1 fill" xmlns="http://www.w3.org/2000/svg" width="16" height="19" viewBox="0 0 16 19" fill="none">
                                        <path d="M2.66699 12.6668V6.72933C2.66699 6.07383 3.09433 5.54183 3.65366 5.54183C4.00033 5.54183 4.66699 5.77933 4.66699 6.72933V4.35433C4.66699 3.69883 5.09433 3.16683 5.65366 3.16683C5.99166 3.16683 6.66699 3.40433 6.66699 4.35433V2.771C6.66699 2.1155 7.09433 1.5835 7.65366 1.5835C8.21366 1.5835 8.66699 2.1155 8.66699 2.771V4.35433C8.66699 3.40433 9.32899 3.16683 9.66699 3.16683C10.227 3.16683 10.667 3.71387 10.667 4.37016V11.0835" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M4.66699 4.35449V8.70866" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.66677 12.6671C2.66677 15.8337 4.7561 17.4171 7.33343 17.4171C9.91077 17.4171 10.7974 16.6254 12.7974 12.6671L13.8448 10.6048C14.2021 9.91761 13.9161 9.02619 13.2574 8.77286C13.0421 8.68931 12.8103 8.68642 12.5935 8.76459C12.3766 8.84276 12.1853 8.99821 12.0454 9.20986L10.6668 11.1099" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p>0</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="all-replies" id="allReplies">
                    <!-- comment template -->
                    <div class="comment-holder">

                        <p class="comment-indicator">Replied on @username's comment</p>

                        <svg class="arrow-pointer" xmlns="http://www.w3.org/2000/svg" width="14" height="41" viewBox="0 0 14 41" fill="none">
                            <path d="M2.55365 1C0.0956907 17.0434 -1.25619 47.0067 13 38.5131" stroke="#838383" stroke-linecap="round" />
                        </svg>

                        <div class="user">
                            <img class="user-img" src="img/default-pic.jpg">
                            <h1 class="name-post">Username <span class="square"> &#x25a0 </span> <span class="time"> Time ago</span> </h1>
                            <h2 class="username-post">@Username</h2>
                        </div>


                        <div class="post-text commenter">

                            <div class="line"></div>


                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                        </div>



                        <div class="actions-holder left">

                            <!-- like -->
                            <div class="hands-up">
                                <svg class="hands-up1" xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                    <g clip-path="url(#clip0_132_1841)">
                                        <path d="M6.65458 1.42935L6.99981 1.75888L7.34504 1.42935C8.18194 0.63052 9.34795 0.36637 10.4635 0.56111C11.5828 0.756513 12.5929 1.40426 13.1153 2.35145C13.6258 3.27724 13.7146 4.57078 12.8412 6.17069C11.982 7.74474 10.1948 9.59978 6.9998 11.5993C3.80484 9.59998 2.01756 7.74503 1.15837 6.17103C0.285062 4.57117 0.373801 3.27759 0.88434 2.35175C1.40669 1.40449 2.41683 0.75668 3.53616 0.56122C4.65169 0.366423 5.81769 0.630529 6.65458 1.42935Z" stroke="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_132_1841">
                                            <rect width="14" height="13" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                0 Likes
                            </div>

                        </div>

                    </div>
                </div>

                <div class="all-likes" id="allLikes">
                    <!-- comment template -->
                    <div class="comment-holder">



                        <div class="user">
                            <img class="user-img" src="img/default-pic.jpg">
                            <h1 class="name-post">Username <span class="square"> &#x25a0 </span> <span class="time"> Time ago</span> </h1>
                            <h2 class="username-post">@Username</h2>
                        </div>


                        <div class="post-text commenter">

                            <div class="line"></div>


                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                        </div>



                        <div class="actions-holder left">

                            <!-- like -->
                            <div class="hands-up">
                                <svg class="hands-up1 liked" xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                    <g clip-path="url(#clip0_132_1841)">
                                        <path d="M6.65458 1.42935L6.99981 1.75888L7.34504 1.42935C8.18194 0.63052 9.34795 0.36637 10.4635 0.56111C11.5828 0.756513 12.5929 1.40426 13.1153 2.35145C13.6258 3.27724 13.7146 4.57078 12.8412 6.17069C11.982 7.74474 10.1948 9.59978 6.9998 11.5993C3.80484 9.59998 2.01756 7.74503 1.15837 6.17103C0.285062 4.57117 0.373801 3.27759 0.88434 2.35175C1.40669 1.40449 2.41683 0.75668 3.53616 0.56122C4.65169 0.366423 5.81769 0.630529 6.65458 1.42935Z" stroke="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_132_1841">
                                            <rect width="14" height="13" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                0 Likes
                            </div>

                        </div>

                    </div>
                </div>

        </div>



    </div>




    </div>






    </article>

    </div>

    </div>

    <script src="js/profile.js"></script>


</body>

</html>