<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">

    <title>Responsive menu dropdown</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="#home">Home</a>
        <a href="#news">Messages</a>
        <a href="#contact"> <i> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="42" viewBox="0 0 50 42" fill="none">
                    <path d="M42.977 27.9981C42.8149 27.834 42.6557 27.67 42.4995 27.5116C40.351 25.3288 39.0512 24.0114 39.0512 17.832C39.0512 14.6327 38.1401 12.0077 36.3442 10.039C35.02 8.58457 33.2299 7.48125 30.8705 6.66586C30.8402 6.65167 30.8131 6.63306 30.7905 6.6109C29.9418 4.22379 27.6196 2.625 25.0004 2.625C22.3813 2.625 20.06 4.22379 19.2114 6.60844C19.1887 6.62979 19.162 6.64781 19.1323 6.66176C13.6264 8.5657 10.9506 12.2186 10.9506 17.8295C10.9506 24.0114 9.65278 25.3288 7.50239 27.5092C7.34614 27.6675 7.18696 27.8283 7.02485 27.9956C6.6061 28.4198 6.34079 28.9359 6.26031 29.4828C6.17983 30.0297 6.28756 30.5846 6.57075 31.0816C7.17328 32.148 8.45746 32.81 9.92328 32.81H40.0883C41.5473 32.81 42.8227 32.1489 43.4272 31.0874C43.7116 30.5902 43.8203 30.0349 43.7406 29.4874C43.6608 28.9398 43.3958 28.423 42.977 27.9981V27.9981Z" fill="white" />
                    <path d="M25.0004 39.375C26.4116 39.374 27.7961 39.0523 29.0072 38.4438C30.2183 37.8354 31.2107 36.9629 31.8793 35.919C31.9108 35.869 31.9264 35.813 31.9245 35.7564C31.9226 35.6998 31.9033 35.6446 31.8685 35.5962C31.8337 35.5477 31.7846 35.5076 31.7259 35.4798C31.6672 35.452 31.601 35.4374 31.5336 35.4375H18.4691C18.4017 35.4373 18.3353 35.4518 18.2765 35.4795C18.2177 35.5073 18.1684 35.5473 18.1335 35.5958C18.0986 35.6443 18.0792 35.6996 18.0773 35.7562C18.0754 35.8128 18.0909 35.8689 18.1225 35.919C18.791 36.9628 19.7833 37.8352 20.9942 38.4436C22.205 39.0521 23.5894 39.3739 25.0004 39.375Z" fill="white" />
                </svg></i>Notifications</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>