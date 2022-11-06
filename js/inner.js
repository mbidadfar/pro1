
function showSide() {
    var menu = document.getElementById("side");
    if (menu.className == "sidebar") {
        menu.className += " show";
    }
    else {
        menu.className = "sidebar";
    }

}
