/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById("nav");
    var e = document.getElementById("exit");
    var m = document.getElementById("menu");


    if (x.className === "topnav") {
        x.className += " responsive";

        // changing background color
        y.style.backgroundColor = "#292828";
        e.style.display = "block";
        m.style.display = "none";



    } else {
        x.className = "topnav";
        y.style.backgroundColor = "#BA5D5D";
        e.style.display = "none";
        m.style.display = "block";

    }
}


let dropdown = document.getElementById("dropdown");


function pressed() {
    let menu = document.getElementById("dropdownMenu")

    if (menu.style.display === "none") {
        menu.style.display = "block";
        dropdown.style.transform = "rotate(180deg)";
    } else {
        menu.style.display = "none";
        dropdown.style.transform = "rotate(0deg)";
    }
}




