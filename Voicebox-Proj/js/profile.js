var divs = ["allPosts", "allComments", "allFelts", "allReplies", "allLikes"];
var titles = ["Posts", "Comments", "Felt", "Replies", "Likes"];
var visibleId = null;
var title;
var active = document.getElementById("postBtn");
var buttons = document.getElementById("buttons");
var toggle = document.getElementById("toggle");
var isPressed = false;

var allBtns = ["postBtn", "cmmntBtn", "feltBtn", "repliesBtn", "likeBtn"];
var specifiedBtn;

function show(id) {

    active.classList.remove("active");

    if (visibleId !== id) {
        visibleId = id;
        // title = visibleId.innerText;


    }
    hide();
}

function hide() {
    var div, i, id;
    // var buttons = document.getElementById("buttons");


    for (i = 0; i < divs.length; i++) {


        title = titles[i];
        id = divs[i];

        div = document.getElementById(id);
        if (visibleId === id) {
            div.style.display = "block";
            div.classList.add('animate__animated', 'animate__fadeIn');
            div.style.setProperty('--animate-duration', '0.5s');

            if (isPressed) {
                toggle.innerText = title;
                specifiedBtn.style.display = "none";

            }

        }


        else {
            div.style.display = "none";
        }
    }
}


function down() {



    if (buttons.className === "buttons") {
        isPressed = true;
        buttons.className += " responsive-list";

    } else {
        buttons.className = "buttons";
        isPressed = false;
    }

}

