function DisplaySearchBar() {
    var x = document.getElementById("searchbar");
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
    }
}