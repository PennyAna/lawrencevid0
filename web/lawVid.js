const searchTitleForm = document.getElementById("searchForm");
const searchTitleField = searchTitleForm.getElementById("searchMovieName");
const newMovieForm = document.getElementById("newMovieForm");
const editMovieForm = document.getElementById("editMovieForm");

function checkTitleSearch() {
    const searchError = searchTitleForm.getElementByClass("errorMsg");
    const searchField = searchTitleForm.getElementById("searchMovieName");
    if (searchField.value == "") {
        searchError.display = compact;
        searchError.innerHTML = "Did you forget to put in the name?";
    }
    else {
        searchError.display = none;
    }
}
function checkMovieName () {
    const movieName = this.parentElement.getElementById("titleName");
    const movieError = this.parentElement.getElementByClass("errorMsg");
    if (movieName.value == "") {
        movieError.titleNameError.display = compact;
        movieError.titleNameError.innerHTML = "Did you forget to put in the name?";
    }
    else {
        movieError.titleNameError.display = none;
    }
}
function checkMovieInfo() {
    const movieInfo = this.parentElement.getElementById("titleInfo");
    const infoError = this.parentElement.getElementByClass("errorMsg");
    if (movieInfo.value == "") {
        infoError.titleInfoError.display = compact;
        infoError.titleInfoError.innerHTML = "Did you forget to put in the description? (Optional)";
    }
    else {
        infoError.titleInfoError.display = none;
    }
}
