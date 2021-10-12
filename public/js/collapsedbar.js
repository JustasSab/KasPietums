function openNav() {
    document.getElementById("openbtn").style.visibility = "hidden";
    document.getElementById("mySidebar").style.width = "200px";
    document.getElementById("right-content").style.marginLeft = "0";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("right-content").style.marginLeft= "-200px";
    document.getElementById("openbtn").style.visibility = "visible";
}
