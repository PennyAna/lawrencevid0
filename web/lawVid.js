document.getElementById("searchTitleError").addEventListener("onblur", checkTitleSearch());
//this one works
function checkTitleSearch() {
    const searchError = document.getElementById("searchTitleError");
    const searchField = document.getElementById("searchMovieName");
    if (searchField.value == "") {
        searchError.innerHTML = "Did you forget to put in the name?";
    }
}
