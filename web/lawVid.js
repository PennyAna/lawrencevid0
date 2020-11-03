const formSearch = document.getElementById("searchForm");
//const formSearchData = new FormData(formSearch);
const formNew = document.getElementById("newMovieForm");
//const formNewData = new FormData(formNew);
const formEdit = document.getElementById("editMovieForm");
//const formEditData = new FormData(formEdit);

function checkNewForm() {
    const newTitle = formNew.getElementById("titleName0");
    const newInfo = formNew.getElementById("titleInfo0");
    const titleError = formNew.getElementById("titleNameError0");
    const infoError = formNew.getElementById("titleInfoError0");
    checkMovieName(newTitle, titleError);
    checkMovieInfo(newInfo, infoError);
}
function checkEditForm() {
    const editTitle = formNew.getElementById("titleName1");
    const editInfo = formNew.getElementById("titleInfo1");
    const titleError = formNew.getElementById("titleNameError1");
    const infoError = formNew.getElementById("titleInfoError1");
    checkMovieName(editTitle, titleError);
    checkMovieInfo(editInfo, infoError);
}

function checkTitleSearch(title) {
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
function checkMovieName (title, error) {
    if (title.value == "") {
        error.display = compact;
        error.innerHTML = "Did you forget to put in the name?";
    }
    else {
        error.display = none;
    }
}
function checkMovieInfo(info, error) {
    if (info.value == "") {
        error.display = compact;
        error.innerHTML = "Did you forget to put in the name?";
    }
    else {
        error.display = none;
    }
}
