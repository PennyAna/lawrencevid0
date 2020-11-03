const searchTitleForm = FormData.searchForm;
// document.getElementById("searchForm");
const searchTitleField = searchTitleForm.getElementById("searchMovieName");
searchTitleField.addEventListener('change', () => checkTitleSearch(), false);

const newMovieForm = document.getElementById("newMovieForm");
const newMovieName = newMovieForm.getElementById("titleName");
const newMovieInfo = newMovieForm.getElementById("titleInfo");
newMovieName.addEventListener('blur', () => checkMovieName(), false);
newMovieInfo.addEventListener('blur', () => checkMovieInfo(), false);

const editMovieForm = document.getElementById("editMovieForm");
const editMovieName = editMovieForm.getElementById("titleName");
const editMovieInfo = editMovieForm.getElementById("titleInfo");
editMovieName.addEventListener('blur', () => checkMovieName(), false);
editMovieInfo.addEventListener('blur', () => checkMovieInfo(), false);

function checkTitleSearch() {
    const searchError = this.getElementById.getElementByClass("errorMsg");
    const searchField = this.getElementByid.getElementById("searchMovieName");
    if (searchField.value == "") {
        searchError.display = compact;
        searchError.innerHTML = "Did you forget to put in the name?";
    }
    else {
        searchError.display = none;
    }
}
function checkMovieName () {
    const movieName = thisForm.getElementById("titleName");
    const movieError = thisForm.getElementByClass("errorMsg");
    if (movieName.value == "") {
        movieError.titleNameError.display = compact;
        movieError.titleNameError.innerHTML = "Did you forget to put in the name?";
    }
    else {
        movieError.titleNameError.display = none;
    }
}
function checkMovieInfo(thisForm) {
    const movieInfo = thisForm.getElementById("titleInfo");
    const infoError = thisForm.getElementByClass("errorMsg");
    if (movieInfo.value == "") {
        infoError.titleInfoError.display = compact;
        infoError.titleInfoError.innerHTML = "Did you forget to put in the description? (Optional)";
    }
    else {
        infoError.titleInfoError.display = none;
    }
}
