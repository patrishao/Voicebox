<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/nav.css" />

</head>

<body>

    <nav id="nav">
        <?php session_start() ?>
        <div class="logo">
            <svg class="logo-icon" xmlns="http://www.w3.org/2000/svg" width="80" height="85" viewBox="0 0 108 99" fill="none">
                <path d="M9.2876 95.3131L73.2283 98.4493V46.7057L9.2876 44.0908" fill="#FFFCFC" />
                <path d="M76.4374 46.8135L75.7856 98.5654L97.6392 64.82L96.7109 28.3354L76.4374 46.8135Z" fill="#FFFCFC" />
                <path d="M9.28776 44.0908L0.499023 60.3346L65.4073 62.8916L73.8998 46.4409L9.28776 44.0908Z" fill="#E9E8E8" />
                <path d="M76.3091 46.9955L85.8681 58.0922L102.3 39.5149L96.7109 28.3354L76.3091 46.9955Z" fill="#E9E8E8" />
                <path d="M9.28779 43.2139L30.4401 26.5977L20.3774 29.3698L0.499023 45.2826L9.28779 43.2139Z" fill="#E9E8E8" />
                <path d="M30.4399 25.5303L100.197 29.0554L102.3 27.2928" fill="#E9E8E8" />
                <path d="M32.74 7.12692C31.4829 7.13172 30.2787 7.53181 29.3925 8.23917C28.5063 8.94653 28.0105 9.90322 28.0143 10.8988L28.0717 25.9138C28.0755 26.9094 28.5785 27.8623 29.4701 28.5628C30.3617 29.2634 31.5689 29.6543 32.826 29.6495L38.751 29.6268C39.1189 29.6254 39.482 29.6919 39.8116 29.8209C40.1412 29.95 40.4282 30.1381 40.6498 30.3704L45.171 35.1073C45.3926 35.3396 45.6796 35.5277 46.0092 35.6567C46.3388 35.7858 46.7019 35.8522 47.0698 35.8508C47.4378 35.8494 47.8004 35.7802 48.129 35.6486C48.4575 35.517 48.7431 35.3268 48.963 35.0928L53.4478 30.3215C53.6676 30.0875 53.9532 29.8972 54.2818 29.7657C54.6104 29.6341 54.973 29.5649 55.3409 29.5635L61.2659 29.5409C62.523 29.5361 63.7271 29.136 64.6133 28.4286C65.4996 27.7212 65.9953 26.7646 65.9915 25.769L65.9342 10.754C65.9304 9.7584 65.4273 8.80552 64.5357 8.10495C63.6441 7.40438 62.437 7.0135 61.1799 7.0183L32.74 7.12692Z" fill="#E9E8E8" />
            </svg>

            <h1 class="logo-title">voicebox</h1>
        </div>

        <div class="topnav" id="myTopnav">

            <a href="index.php">

                <!-- home menu -->
                <div class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="35" viewBox="0 0 45 40" fill="none">
                        <path d="M41.2498 21.1111C41.0853 21.1119 40.9222 21.0839 40.7699 21.0286C40.6176 20.9733 40.4791 20.8918 40.3623 20.7889L22.4998 4.89997L4.63729 20.7889C4.39816 20.9709 4.09057 21.066 3.77597 21.0552C3.46138 21.0444 3.16295 20.9285 2.94034 20.7306C2.71772 20.5327 2.5873 20.2674 2.57515 19.9878C2.563 19.7082 2.67001 19.4347 2.87479 19.2222L21.6248 2.55552C21.859 2.34858 22.1758 2.23242 22.506 2.23242C22.8363 2.23242 23.1531 2.34858 23.3873 2.55552L42.1373 19.2222C42.3093 19.3782 42.4258 19.5758 42.4721 19.7903C42.5185 20.0047 42.4928 20.2266 42.3981 20.4282C42.3034 20.6297 42.1439 20.802 41.9397 20.9235C41.7355 21.0449 41.4955 21.1102 41.2498 21.1111Z" fill="white" />
                        <path d="M22.5 8.65576L7.5 22.0335V35.5558C7.5 36.1451 7.76339 36.7104 8.23223 37.1271C8.70107 37.5439 9.33696 37.778 10 37.778H18.75V26.6669H26.25V37.778H35C35.663 37.778 36.2989 37.5439 36.7678 37.1271C37.2366 36.7104 37.5 36.1451 37.5 35.5558V21.9558L22.5 8.65576Z" fill="white" />
                    </svg>

                    <p>Home</p>
                </div>

            </a>



            <!-- messages menu -->
            <a href="message.php">
                <div class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="35" viewBox="0 0 39 31" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.751203 12.111C0.751203 5.436 7.7487 0.444336 15.7512 0.444336C23.7537 0.444336 30.7512 5.436 30.7512 12.111C30.7512 18.786 23.7537 23.7777 15.7512 23.7777C13.6826 23.7823 11.6308 23.4478 9.6987 22.791L2.92245 23.7577C2.60706 23.8027 2.28394 23.7754 1.98376 23.6783C1.68359 23.5812 1.41629 23.4175 1.20725 23.2028C0.998199 22.9881 0.854329 22.7295 0.789283 22.4515C0.724237 22.1735 0.740173 21.8853 0.835578 21.6143L2.33558 17.3427C1.30045 15.7525 0.754047 13.9482 0.751203 12.111ZM15.7512 25.7227C13.985 25.7227 12.2731 25.5177 10.6587 25.1377C13.3812 28.3827 18.1081 30.4443 23.2512 30.4443C25.3198 30.4491 27.3716 30.1146 29.3037 29.4577L36.08 30.4243C36.3954 30.4694 36.7185 30.4421 37.0186 30.3449C37.3188 30.2478 37.5861 30.0842 37.7952 29.8695C38.0042 29.6548 38.1481 29.3961 38.2131 29.1181C38.2782 28.8402 38.2622 28.552 38.1668 28.281L36.6668 24.0093C37.702 22.4191 38.2484 20.6149 38.2512 18.7777C38.2512 15.1577 36.1925 12.0327 33.0331 9.931C33.1781 10.6505 33.2509 11.38 33.2506 12.111C33.2506 19.8993 25.0887 25.7227 15.7512 25.7227Z" fill="white" />
                    </svg>
                    <p> Messages</p>
                </div>
            </a>


            <!-- notifications menu -->
            <!-- <a href="notifs.php">


                <div class="list">


                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" viewBox="0 0 50 42" fill="none">
                        <path d="M42.977 27.9981C42.8149 27.834 42.6557 27.67 42.4995 27.5116C40.351 25.3288 39.0512 24.0114 39.0512 17.832C39.0512 14.6327 38.1401 12.0077 36.3442 10.039C35.02 8.58457 33.2299 7.48125 30.8705 6.66586C30.8402 6.65167 30.8131 6.63306 30.7905 6.6109C29.9418 4.22379 27.6196 2.625 25.0004 2.625C22.3813 2.625 20.06 4.22379 19.2114 6.60844C19.1887 6.62979 19.162 6.64781 19.1323 6.66176C13.6264 8.5657 10.9506 12.2186 10.9506 17.8295C10.9506 24.0114 9.65278 25.3288 7.50239 27.5092C7.34614 27.6675 7.18696 27.8283 7.02485 27.9956C6.6061 28.4198 6.34079 28.9359 6.26031 29.4828C6.17983 30.0297 6.28756 30.5846 6.57075 31.0816C7.17328 32.148 8.45746 32.81 9.92328 32.81H40.0883C41.5473 32.81 42.8227 32.1489 43.4272 31.0874C43.7116 30.5902 43.8203 30.0349 43.7406 29.4874C43.6608 28.9398 43.3958 28.423 42.977 27.9981V27.9981Z" fill="white" />
                        <path d="M25.0004 39.375C26.4116 39.374 27.7961 39.0523 29.0072 38.4438C30.2183 37.8354 31.2107 36.9629 31.8793 35.919C31.9108 35.869 31.9264 35.813 31.9245 35.7564C31.9226 35.6998 31.9033 35.6446 31.8685 35.5962C31.8337 35.5477 31.7846 35.5076 31.7259 35.4798C31.6672 35.452 31.601 35.4374 31.5336 35.4375H18.4691C18.4017 35.4373 18.3353 35.4518 18.2765 35.4795C18.2177 35.5073 18.1684 35.5473 18.1335 35.5958C18.0986 35.6443 18.0792 35.6996 18.0773 35.7562C18.0754 35.8128 18.0909 35.8689 18.1225 35.919C18.791 36.9628 19.7833 37.8352 20.9942 38.4436C22.205 39.0521 23.5894 39.3739 25.0004 39.375Z" fill="white" />
                    </svg>
                    <p> Notifications</p>


                </div>

            </a> -->

            <!-- menu icon for responsive -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i><svg class="menu" id="menu" xmlns="http://www.w3.org/2000/svg" width="38" height="35" viewBox="0 0 24 24" fill="none">
                        <path d="M3 6H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 12H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3 18H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <svg class="exit" id="exit" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 39 32" fill="none">
                        <path d="M11.3244 9.29183C11.4376 9.19871 11.5721 9.12482 11.7201 9.07441C11.8682 9.024 12.0269 8.99805 12.1872 8.99805C12.3475 8.99805 12.5063 9.024 12.6543 9.07441C12.8024 9.12482 12.9369 9.19871 13.0501 9.29183L19.4997 14.5858L25.9494 9.29183C26.0627 9.19886 26.1972 9.12511 26.3453 9.07479C26.4933 9.02447 26.652 8.99857 26.8122 8.99857C26.9725 8.99857 27.1312 9.02447 27.2792 9.07479C27.4273 9.12511 27.5618 9.19886 27.6751 9.29183C27.7884 9.38481 27.8783 9.49519 27.9396 9.61667C28.001 9.73815 28.0325 9.86835 28.0325 9.99983C28.0325 10.1313 28.001 10.2615 27.9396 10.383C27.8783 10.5045 27.7884 10.6149 27.6751 10.7078L21.223 15.9998L27.6751 21.2918C27.7884 21.3848 27.8783 21.4952 27.9396 21.6167C28.001 21.7381 28.0325 21.8683 28.0325 21.9998C28.0325 22.1313 28.001 22.2615 27.9396 22.383C27.8783 22.5045 27.7884 22.6149 27.6751 22.7078C27.5618 22.8008 27.4273 22.8746 27.2792 22.9249C27.1312 22.9752 26.9725 23.0011 26.8122 23.0011C26.652 23.0011 26.4933 22.9752 26.3453 22.9249C26.1972 22.8746 26.0627 22.8008 25.9494 22.7078L19.4997 17.4138L13.0501 22.7078C12.9368 22.8008 12.8023 22.8746 12.6542 22.9249C12.5062 22.9752 12.3475 23.0011 12.1872 23.0011C12.027 23.0011 11.8683 22.9752 11.7203 22.9249C11.5722 22.8746 11.4377 22.8008 11.3244 22.7078C11.211 22.6149 11.1212 22.5045 11.0598 22.383C10.9985 22.2615 10.9669 22.1313 10.9669 21.9998C10.9669 21.8683 10.9985 21.7381 11.0598 21.6167C11.1212 21.4952 11.211 21.3848 11.3244 21.2918L17.7764 15.9998L11.3244 10.7078C11.2109 10.6149 11.1208 10.5046 11.0594 10.3831C10.9979 10.2616 10.9663 10.1314 10.9663 9.99983C10.9663 9.8683 10.9979 9.73806 11.0594 9.61657C11.1208 9.49508 11.2109 9.38473 11.3244 9.29183Z" fill="white" />
                    </svg>
                </i>
            </a>

            <?php if (!empty($_SESSION['userID'])) {  ?>


                <!-- user menu -->
                <a href="#" class="pic">
                    <img class="pfp" src="<?php if (empty($_SESSION['userProfPhoto'])) {
                                                echo 'img/default-pic.jpg';
                                            } else {
                                                echo 'uploaded-imgs/' . $_SESSION['userProfPhoto'];
                                            }
                                            ?>">
                    <p class="name"> <?php echo $_SESSION['userName']; ?> </p>
                    <button id="dropdown" onclick="pressed()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="14" viewBox="0 0 27 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.305051 0.293712C0.401504 0.200609 0.516086 0.126742 0.642234 0.0763422C0.768383 0.0259421 0.903618 0 1.0402 0C1.17677 0 1.31201 0.0259421 1.43816 0.0763422C1.56431 0.126742 1.67889 0.200609 1.77534 0.293712L13.5003 11.5848L25.2252 0.293712C25.3217 0.20076 25.4364 0.127026 25.5625 0.0767207C25.6886 0.0264153 25.8238 0.000523434 25.9603 0.000523434C26.0969 0.000523434 26.2321 0.0264153 26.3582 0.0767207C26.4843 0.127026 26.599 0.20076 26.6955 0.293712C26.792 0.386664 26.8686 0.497014 26.9209 0.618462C26.9731 0.73991 27 0.870077 27 1.00153C27 1.13299 26.9731 1.26315 26.9209 1.3846C26.8686 1.50605 26.792 1.6164 26.6955 1.70935L14.2354 13.7063C14.139 13.7994 14.0244 13.8733 13.8982 13.9237C13.7721 13.9741 13.6368 14 13.5003 14C13.3637 14 13.2285 13.9741 13.1023 13.9237C12.9762 13.8733 12.8616 13.7994 12.7651 13.7063L0.305051 1.70935C0.208355 1.61648 0.131636 1.50616 0.0792903 1.3847C0.0269446 1.26324 0 1.13303 0 1.00153C0 0.87003 0.0269446 0.739821 0.0792903 0.618362C0.131636 0.496903 0.208355 0.38658 0.305051 0.293712Z" fill="white" />
                        </svg>



                    </button>

                </a>



                <div class="dropdown hidden" id="dropdownMenu">
                    <!-- profile menu -->

                    <a href="profile.php">
                        <div class="dropdown-list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14 7.86816C14 8.79642 13.6313 9.68666 12.9749 10.343C12.3185 10.9994 11.4283 11.3682 10.5 11.3682C9.57174 11.3682 8.6815 10.9994 8.02513 10.343C7.36875 9.68666 7 8.79642 7 7.86816C7 6.93991 7.36875 6.04967 8.02513 5.39329C8.6815 4.73691 9.57174 4.36816 10.5 4.36816C11.4283 4.36816 12.3185 4.73691 12.9749 5.39329C13.6313 6.04967 14 6.93991 14 7.86816ZM12.25 7.86816C12.25 8.33229 12.0656 8.77741 11.7374 9.1056C11.4092 9.43379 10.9641 9.61816 10.5 9.61816C10.0359 9.61816 9.59075 9.43379 9.26256 9.1056C8.93437 8.77741 8.75 8.33229 8.75 7.86816C8.75 7.40404 8.93437 6.95892 9.26256 6.63073C9.59075 6.30254 10.0359 6.11816 10.5 6.11816C10.9641 6.11816 11.4092 6.30254 11.7374 6.63073C12.0656 6.95892 12.25 7.40404 12.25 7.86816Z" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 0.871582C5.18438 0.871582 0.875 5.18096 0.875 10.4966C0.875 15.8122 5.18438 20.1216 10.5 20.1216C15.8156 20.1216 20.125 15.8122 20.125 10.4966C20.125 5.18096 15.8156 0.871582 10.5 0.871582ZM2.625 10.4966C2.625 12.3253 3.24887 14.0088 4.2945 15.3458C5.02883 14.3815 5.97616 13.6 7.0625 13.0624C8.14885 12.5247 9.34478 12.2455 10.5569 12.2466C11.7533 12.2454 12.9342 12.5174 14.0096 13.0418C15.085 13.5661 16.0265 14.329 16.7624 15.2723C17.5205 14.278 18.031 13.1174 18.2515 11.8866C18.4721 10.6558 18.3964 9.39017 18.0307 8.19444C17.665 6.99871 17.0198 5.90725 16.1486 5.01036C15.2773 4.11348 14.205 3.43696 13.0203 3.03678C11.8357 2.6366 10.5728 2.52426 9.33613 2.70906C8.09946 2.89386 6.92457 3.37049 5.90867 4.0995C4.89278 4.82852 4.06508 5.78897 3.49408 6.90138C2.92307 8.01379 2.62516 9.24618 2.625 10.4966ZM10.5 18.3716C8.69221 18.3743 6.93898 17.7524 5.537 16.6111C6.10131 15.8032 6.85242 15.1436 7.72642 14.6884C8.60042 14.2332 9.57144 13.9959 10.5569 13.9966C11.53 13.9958 12.4893 14.2272 13.3551 14.6716C14.2208 15.1159 14.9681 15.7605 15.5347 16.5516C14.1219 17.7299 12.3398 18.3742 10.5 18.3716Z" fill="white" />
                            </svg>
                            <p>Profile </p>
                        </div>
                    </a>


                    <!-- settings menu -->
                    <a href="edit-profile.php">
                        <div class="dropdown-list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                <path d="M17.7183 10.9986V10.4999V9.99456L18.9783 8.89206C19.2106 8.68734 19.363 8.40711 19.4086 8.10088C19.4543 7.79466 19.3902 7.48216 19.2277 7.21862L17.679 4.59362C17.5639 4.39429 17.3984 4.22873 17.1991 4.11355C16.9999 3.99836 16.7738 3.93761 16.5436 3.93737C16.401 3.93628 16.2592 3.95844 16.1236 4.003L14.529 4.54112C14.2536 4.35816 13.9664 4.19374 13.6693 4.04893L13.3346 2.39518C13.2746 2.09305 13.1102 1.82165 12.8703 1.62849C12.6303 1.43533 12.3301 1.33272 12.0221 1.33862H8.95084C8.64286 1.33272 8.34261 1.43533 8.10266 1.62849C7.86271 1.82165 7.69835 2.09305 7.63834 2.39518L7.30365 4.04893C7.00435 4.1937 6.71497 4.35812 6.4374 4.54112L4.87552 3.97675C4.73856 3.94106 4.59673 3.92776 4.45552 3.93737C4.22536 3.93761 3.99931 3.99836 3.80004 4.11355C3.60077 4.22873 3.43529 4.39429 3.32021 4.59362L1.77146 7.21862C1.61828 7.48177 1.56136 7.78999 1.61045 8.09049C1.65954 8.39099 1.81157 8.66508 2.04052 8.86581L3.28084 10.0011V11.0052L2.04052 12.1077C1.80511 12.3098 1.64891 12.5888 1.59965 12.8951C1.5504 13.2015 1.61127 13.5154 1.77146 13.7811L3.32021 16.4061C3.43529 16.6054 3.60077 16.771 3.80004 16.8862C3.99931 17.0014 4.22536 17.0621 4.45552 17.0624C4.59816 17.0635 4.74002 17.0413 4.87552 16.9967L6.47021 16.4586C6.74553 16.6416 7.03273 16.806 7.3299 16.9508L7.66459 18.6046C7.7246 18.9067 7.88896 19.1781 8.12891 19.3713C8.36886 19.5644 8.66911 19.667 8.97709 19.6611H12.0746C12.3826 19.667 12.6828 19.5644 12.9228 19.3713C13.1627 19.1781 13.3271 18.9067 13.3871 18.6046L13.7218 16.9508C14.0211 16.806 14.3104 16.6416 14.588 16.4586L16.1761 16.9967C16.3117 17.0413 16.4535 17.0635 16.5961 17.0624C16.8263 17.0621 17.0524 17.0014 17.2516 16.8862C17.4509 16.771 17.6164 16.6054 17.7315 16.4061L19.2277 13.7811C19.3809 13.518 19.4378 13.2098 19.3887 12.9093C19.3396 12.6087 19.1876 12.3347 18.9586 12.1339L17.7183 10.9986ZM16.5436 15.7499L14.2927 14.9886C13.7658 15.4349 13.1636 15.7838 12.5143 16.0189L12.0483 18.3749H8.95084L8.4849 16.0452C7.84074 15.8034 7.24178 15.4551 6.71302 15.0149L4.45552 15.7499L2.90677 13.1249L4.69177 11.5499C4.57043 10.8706 4.57043 10.1751 4.69177 9.49581L2.90677 7.87487L4.45552 5.24987L6.70646 6.01112C7.23339 5.5648 7.83561 5.21591 8.4849 4.98081L8.95084 2.62487H12.0483L12.5143 4.95456C13.1584 5.19634 13.7574 5.54462 14.2861 5.98487L16.5436 5.24987L18.0924 7.87487L16.3074 9.44987C16.4287 10.1292 16.4287 10.8246 16.3074 11.5039L18.0924 13.1249L16.5436 15.7499Z" fill="white" />
                                <path d="M10.5 14.4375C9.72124 14.4375 8.95996 14.2066 8.31244 13.7739C7.66492 13.3413 7.16025 12.7263 6.86223 12.0068C6.56421 11.2873 6.48623 10.4956 6.63816 9.73183C6.79009 8.96803 7.1651 8.26644 7.71577 7.71577C8.26644 7.1651 8.96803 6.79009 9.73183 6.63816C10.4956 6.48623 11.2873 6.56421 12.0068 6.86223C12.7263 7.16025 13.3413 7.66492 13.7739 8.31244C14.2066 8.95996 14.4375 9.72124 14.4375 10.5C14.4428 11.0185 14.3445 11.5329 14.1485 12.013C13.9525 12.4931 13.6627 12.9293 13.296 13.296C12.9293 13.6627 12.4931 13.9525 12.013 14.1485C11.5329 14.3445 11.0185 14.4428 10.5 14.4375ZM10.5 7.875C10.1531 7.86692 9.80811 7.92929 9.48597 8.05835C9.16384 8.18741 8.87123 8.38047 8.62585 8.62585C8.38047 8.87123 8.18741 9.16384 8.05835 9.48597C7.92929 9.80811 7.86692 10.1531 7.875 10.5C7.86692 10.8469 7.92929 11.1919 8.05835 11.514C8.18741 11.8362 8.38047 12.1288 8.62585 12.3742C8.87123 12.6195 9.16384 12.8126 9.48597 12.9417C9.80811 13.0707 10.1531 13.1331 10.5 13.125C10.8469 13.1331 11.1919 13.0707 11.514 12.9417C11.8362 12.8126 12.1288 12.6195 12.3742 12.3742C12.6195 12.1288 12.8126 11.8362 12.9417 11.514C13.0707 11.1919 13.1331 10.8469 13.125 10.5C13.1331 10.1531 13.0707 9.80811 12.9417 9.48597C12.8126 9.16384 12.6195 8.87123 12.3742 8.62585C12.1288 8.38047 11.8362 8.18741 11.514 8.05835C11.1919 7.92929 10.8469 7.86692 10.5 7.875Z" fill="white" />
                            </svg>
                            <p>User Settings </p>
                        </div>
                    </a>

                    <!-- help menu -->
                    <a href="edit-pass.php">
                        <div class="dropdown-list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                <path d="M15.75 7H17.5C17.7321 7 17.9546 7.09219 18.1187 7.25628C18.2828 7.42038 18.375 7.64294 18.375 7.875V18.375C18.375 18.6071 18.2828 18.8296 18.1187 18.9937C17.9546 19.1578 17.7321 19.25 17.5 19.25H3.5C3.26794 19.25 3.04538 19.1578 2.88128 18.9937C2.71719 18.8296 2.625 18.6071 2.625 18.375V7.875C2.625 7.64294 2.71719 7.42038 2.88128 7.25628C3.04538 7.09219 3.26794 7 3.5 7H5.25V6.125C5.25 4.73261 5.80312 3.39726 6.78769 2.41269C7.77226 1.42812 9.10761 0.875 10.5 0.875C11.8924 0.875 13.2277 1.42812 14.2123 2.41269C15.1969 3.39726 15.75 4.73261 15.75 6.125V7ZM14 7V6.125C14 5.19674 13.6313 4.3065 12.9749 3.65013C12.3185 2.99375 11.4283 2.625 10.5 2.625C9.57174 2.625 8.6815 2.99375 8.02513 3.65013C7.36875 4.3065 7 5.19674 7 6.125V7H14ZM9.625 12.25V14H11.375V12.25H9.625ZM6.125 12.25V14H7.875V12.25H6.125ZM13.125 12.25V14H14.875V12.25H13.125Z" fill="#F8F8F8" />
                            </svg>
                            <p>Change Password </p>
                        </div>
                    </a>


                    <!-- light mode -->
                    <!-- <a>
                        <div class="dropdown-list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M9.375 1.3125H10.625V4.59375H9.375V1.3125Z" fill="white" />
                                <path d="M13.5547 5.84053L15.7459 3.53906L16.6297 4.46766L14.4384 6.76847L13.5547 5.84053Z" fill="white" />
                                <path d="M15.625 9.84375H18.75V11.1562H15.625V9.84375Z" fill="white" />
                                <path d="M13.5547 15.1594L14.4384 14.2314L16.6297 16.5323L15.7459 17.4609L13.5547 15.1594Z" fill="white" />
                                <path d="M9.375 16.4062H10.625V19.6875H9.375V16.4062Z" fill="white" />
                                <path d="M3.37109 16.5323L5.56234 14.2314L6.44609 15.16L4.25484 17.4609L3.37109 16.5323Z" fill="white" />
                                <path d="M1.25 9.84375H4.375V11.1562H1.25V9.84375Z" fill="white" />
                                <path d="M3.37109 4.46766L4.25484 3.53906L6.44609 5.84053L5.56234 6.76847L3.37109 4.46766Z" fill="white" />
                                <path d="M10 7.875C10.4945 7.875 10.9778 8.02895 11.3889 8.31739C11.8 8.60583 12.1205 9.0158 12.3097 9.49546C12.4989 9.97511 12.5484 10.5029 12.452 11.0121C12.3555 11.5213 12.1174 11.989 11.7678 12.3562C11.4181 12.7233 10.9727 12.9733 10.4877 13.0746C10.0028 13.1758 9.50011 13.1239 9.04329 12.9252C8.58648 12.7265 8.19603 12.3901 7.92133 11.9584C7.64662 11.5267 7.5 11.0192 7.5 10.5C7.50083 9.80407 7.76449 9.1369 8.23315 8.6448C8.70181 8.15271 9.33721 7.87587 10 7.875ZM10 6.5625C9.25832 6.5625 8.5333 6.79343 7.91661 7.22609C7.29993 7.65875 6.81928 8.2737 6.53545 8.99318C6.25162 9.71267 6.17736 10.5044 6.32206 11.2682C6.46675 12.032 6.8239 12.7336 7.34835 13.2842C7.8728 13.8349 8.54098 14.2099 9.26841 14.3618C9.99584 14.5138 10.7498 14.4358 11.4351 14.1378C12.1203 13.8398 12.706 13.3351 13.118 12.6876C13.5301 12.04 13.75 11.2788 13.75 10.5C13.75 9.45571 13.3549 8.45419 12.6517 7.71577C11.9484 6.97734 10.9946 6.5625 10 6.5625Z" fill="white" />
                            </svg>
                            <p>Light Mode </p>
                        </div>

                    </a> -->

                    <a href="backend\logout.php">
                        <div class="dropdown-list no-border">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M7.5 18.375H4.16667C3.72464 18.375 3.30072 18.1906 2.98816 17.8624C2.67559 17.5342 2.5 17.0891 2.5 16.625V4.375C2.5 3.91087 2.67559 3.46575 2.98816 3.13756C3.30072 2.80937 3.72464 2.625 4.16667 2.625H7.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.333 14.875L17.4997 10.5L13.333 6.125" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.5 10.5H7.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Logout </p>
                        </div>
                    </a>




                </div>




            <?php } else {
            ?>

                <div class="no-session">

                    <a href="login.php">
                        <div class="loginbtn">
                            <p>Log in</p>
                        </div>
                    </a>



                </div>

            <?php } ?>


            <script src="js/nav.js"></script>





        </div>





    </nav>


</body>

</html>