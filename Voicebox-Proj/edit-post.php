<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" type="text/css" href="css/createpost.css" />

    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</head>



<body>

    <?php include 'includes/nav.php'; ?>
    <?php include 'includes/db.php'; ?>


    <?php include 'backend/updatepost.php';

    ?>


    <p class="title">+ Edit post</p>

    <script src="js/alert.js"></script>




    <div class="container">




        <?php include 'backend/updatepost.php';

        ?>


        <div class="contents">


            <script>

            </script>


            <form action="edit-post.php?p_id=<?php echo $postID ?>" method="post" enctype="multipart/form-data">
                <div class="post-title">
                    <img src="<?php if (empty($_SESSION['userProfPhoto'])) {
                                    echo 'img/default-pic.jpg';
                                } else {
                                    echo 'uploaded-imgs/' . $_SESSION['userProfPhoto'];
                                }
                                ?>" class="user-img" id="profileDisplay" />

                    <textarea placeholder=" Post Title" name="postTitle" class="postTitle"><?php echo $postTitle ?></textarea>

                </div>


                <div class="img-holder">
                    <input type="file" name="imgFile" id="fileAttach" accept="image/png, image/jpeg, image/gif" onChange="loadFile(event)" hidden value="<?php echo $image ?>" />

                    <div class="fileAttachment" id="" onclick="triggerClickGif()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 33 33" fill="none">
                            <path d="M5.5 6.875H23.375V16.5H26.125V6.875C26.125 5.35837 24.8916 4.125 23.375 4.125H5.5C3.98338 4.125 2.75 5.35837 2.75 6.875V23.375C2.75 24.8916 3.98338 26.125 5.5 26.125H16.5V23.375H5.5V6.875Z" fill="#DCD5D5" />
                            <path d="M11 15.125L6.875 20.625H22L16.5 12.375L12.375 17.875L11 15.125Z" fill="#DCD5D5" />
                            <path d="M26.125 19.25H23.375V23.375H19.25V26.125H23.375V30.25H26.125V26.125H30.25V23.375H26.125V19.25Z" fill="#DCD5D5" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 28" fill="none">
                            <path d="M17.2344 13.4121H16.2812C16.1375 13.4121 16.0187 13.5133 16.0187 13.6418V19.6875C16.0187 19.8133 16.1344 19.9172 16.2812 19.9172H17.2344C17.3781 19.9172 17.4969 19.816 17.4969 19.6875V13.6418C17.4938 13.516 17.3781 13.4121 17.2344 13.4121ZM14.9156 16.4062H12.1625C12.0188 16.4062 11.9 16.5074 11.9 16.6359V17.2867C11.9 17.4125 12.0156 17.5164 12.1625 17.5164H13.65V17.5355C13.6312 18.3531 12.9312 18.8973 11.8844 18.8973C10.6594 18.8973 9.89688 18.0578 9.89688 16.6715C9.89688 15.3016 10.6437 14.4676 11.8438 14.4676C12.7219 14.4676 13.3281 14.8367 13.575 15.5148L13.6031 15.5914H15.1406L15.1187 15.4656C14.8719 14.1066 13.5844 13.2344 11.8438 13.2344C9.69375 13.2344 8.3125 14.5852 8.3125 16.677C8.3125 18.7961 9.67813 20.125 11.8625 20.125C13.875 20.125 15.175 19.023 15.175 17.3113V16.6332C15.175 16.5074 15.0594 16.4062 14.9156 16.4062Z" fill="#DCD5D5" />
                            <path d="M26.7062 7.89141L19.9813 2.00703C19.7938 1.84297 19.5406 1.75 19.275 1.75H6C5.44687 1.75 5 2.14102 5 2.625V25.375C5 25.859 5.44687 26.25 6 26.25H26C26.5531 26.25 27 25.859 27 25.375V8.51211C27 8.27969 26.8937 8.05547 26.7062 7.89141ZM18.8125 3.76797L24.6938 8.91406H18.8125V3.76797ZM24.75 24.2812H7.25V3.71875H16.6875V9.625C16.6875 10.2594 17.275 10.7734 18 10.7734H24.75V24.2812Z" fill="#DCD5D5" />
                            <path d="M19.0062 19.9009H20.0155C20.1593 19.9009 20.278 19.7997 20.278 19.6712V17.3524H23.0218C23.1655 17.3524 23.2843 17.2513 23.2843 17.1228V16.4255C23.2843 16.2997 23.1686 16.1958 23.0218 16.1958H20.278V14.5853H23.303C23.4468 14.5853 23.5655 14.4841 23.5655 14.3556V13.6228C23.5655 13.497 23.4499 13.3931 23.303 13.3931H19.0062C18.8624 13.3931 18.7437 13.4942 18.7437 13.6228V19.6685C18.7437 19.7997 18.8624 19.9009 19.0062 19.9009Z" fill="#DCD5D5" />
                        </svg>

                        <p class="file-p">Attach a media....</p>

                        <!-- hiding the image if there is no image -->
                        <?php if (empty($image)) { ?>
                            <img src="" class=" image" id="imgFile" />
                        <?php } else { ?>
                            <img src="<?php echo "uploaded-imgs2/" . $image ?>" class=" image" id="imgFile" style="display:block" ; />
                        <?php } ?>
                    </div>




                </div>

                <div class=" textarea-container">
                    <textarea placeholder="Write a text... (optional)" class="post-text" name="postText"><?php echo $postText ?></textarea>


                </div>

                <label class="chooseTopic">

                    <svg class="icon icon-envelop">
                        <use xlink:href="#box"></use>
                    </svg>

                    <select class="chooseTopic hover" placeholder="Choose the topic" name="postTopic" ">
                        <option value=" <?php echo $postCategory ?>" disabled selected class="disabled"><?php echo $postCategory ?></option>
                        <option value="relationship">Relationtionship</option>
                        <option value="Chat">Chat</option>
                        <option value="LGBTIQIA">LGBTIQIA+</option>
                        <option value="Depression">Depression</option>
                        <option value="MentalHealth">Mental Health</option>
                        <option value="Grief">Grief</option>
                        <option value="Insecurity">Insecurity</option>
                        <option value="Anxiety">Anxiety</option>
                        <option value="Friends">Friends</option>
                        <option value="Education">Education</option>
                        <option value="Bullying">Bullying</option>
                        <option value="Loneliness">Loneliness</option>
                        <option value="Health">Health</option>
                        <option value="Happiness">Happiness</option>
                        <option value="Tiredness">Tiredness</option>
                        <option value="Stress">Stress</option>
                        <option value="Family">Family</option>
                        <option value="Frustration">Frustration</option>
                        <option value="Love">Love</option>
                        <option value="Pets">Pets</option>
                        <option value="Others">Others</option>

                    </select>


                </label>


                <div class="submit-buttons">
                    <button type="submit" class="post-btn" name="post">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 12H4M12 20V12V20ZM12 12V4V12ZM12 12H20H12Z" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <p>Update Post</p>
                    </button>


                    <button type="submit" class="delete-btn" name="delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M6 7H5V20C5 20.5304 5.21071 21.0391 5.58579 21.4142C5.96086 21.7893 6.46957 22 7 22H17C17.5304 22 18.0391 21.7893 18.4142 21.4142C18.7893 21.0391 19 20.5304 19 20V7H6ZM10 19H8V10H10V19ZM16 19H14V10H16V19ZM16.618 4L15 2H9L7.382 4H3V6H21V4H16.618Z" fill="#F8F8F8" />
                        </svg>

                        <p>Delete Post</p>

                    </button>

                    <button type="submit" class="back-btn" name="back">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M8 5L3 10L8 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 10H11C16.523 10 21 14.477 21 20V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <p>Cancel</p>

                    </button>



                </div>




            </form>


            <svg class="spritesheet">
                <symbol id="box" viewBox="0 0 20 21" fill="none">
                    <title>voicebox</title>
                    <path d="M1.74506 19.7811L13.7238 20.4775V8.98764L1.74506 8.40699" fill="#E9E8E8" />
                    <path d="M14.325 9.01161L14.2029 20.5033L18.2969 13.01L18.123 4.90847L14.325 9.01161Z" fill="#E9E8E8" />
                    <path d="M1.74506 8.40699L0.0986328 12.014L12.2586 12.5818L13.8496 8.92883L1.74506 8.40699Z" fill="#E9E8E8" />
                    <path d="M14.3008 9.05201L16.0916 11.5161L19.17 7.39092L18.123 4.90847L14.3008 9.05201Z" fill="#E9E8E8" />
                    <path d="M1.74514 8.2122L5.70786 4.52249L3.8227 5.13806L0.0986328 8.67157L1.74514 8.2122Z" fill="#E9E8E8" />
                    <path d="M5.70795 4.28547L18.7764 5.06823L19.1704 4.67685" fill="#E9E8E8" />
                    <path d="M6.13854 0.198933C5.90303 0.199999 5.67745 0.28884 5.51142 0.445913C5.3454 0.602985 5.25252 0.815421 5.25323 1.03649L5.26398 4.37063C5.26469 4.5917 5.35893 4.80329 5.52596 4.95885C5.693 5.11442 5.91915 5.20122 6.15466 5.20015L7.26465 5.19512C7.33358 5.19481 7.40161 5.20957 7.46335 5.23822C7.5251 5.26688 7.57886 5.30865 7.62038 5.36022L8.46738 6.41208C8.5089 6.46365 8.56266 6.50542 8.62441 6.53408C8.68615 6.56273 8.75418 6.57749 8.82311 6.57718C8.89204 6.57687 8.95997 6.56149 9.02153 6.53228C9.08309 6.50307 9.13658 6.46081 9.17777 6.40886L10.018 5.34937C10.0592 5.29742 10.1126 5.25517 10.1742 5.22595C10.2358 5.19674 10.3037 5.18137 10.3726 5.18106L11.4826 5.17603C11.7181 5.17496 11.9437 5.08612 12.1097 4.92905C12.2758 4.77198 12.3686 4.55954 12.3679 4.33847L12.3572 1.00433C12.3565 0.783263 12.2622 0.571674 12.0952 0.416109C11.9282 0.260545 11.702 0.173748 11.4665 0.174814L6.13854 0.198933Z" fill="#E9E8E8" />
            </svg>
            </symbol>
            </svg>

        </div>

        <footer>Community Guidelines <span> &#9725;</span> Help Center <span> &#9725;</span> Terms of service <span> &#9725;</span> Privacy Policy <span> &#9725;</span> Cookie Policy
        </footer>
    </div>


    </div>


    <!-- automatically increase textarea size -->
    <script>
        const tx = document.getElementsByTagName("textarea");
        var value = 0;


        for (let i = 0; i < tx.length; i++) {



            tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");


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

        function triggerClickGif(e) {
            document.querySelector('#fileAttach').click();
        }

        var loadFile = function(event) {
            var profileDisplay = document.getElementById('imgFile');
            profileDisplay.style.display = "block";
            profileDisplay.src = URL.createObjectURL(event.target.files[0]);
            profileDisplay.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
</body>

</html>