

// like
$(document).ready(function () {
    $('.unfelt').click(function () {

        $.ajax({
            url: "post-page.php?p_id=<?php echo $postID; ?>",
            type: 'post',
            data: {
                liked: 1,
                'postID': postID,
                'userID': userID,
            }
        })

        window.location.reload()
    });
});

// unlike
$(document).ready(function () {
    $('.felt').click(function () {


        $.ajax({
            url: "post-page.php?p_id=<?php echo $postID; ?>",
            type: 'post',
            data: {
                unliked: 1,
                'postID': postID,
                'userID': userID,
            }
        })

        window.location.reload()
    });
});