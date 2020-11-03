
//const formSearchData = new FormData(formSearch);

//const formNewData = new FormData(formNew);

//const formEditData = new FormData(formEdit);

function checkNewForm() {
    const formNew = document.getElementById("newMovieForm");
    const newTitle = formNew.getElementById("titleName0");
    const newInfo = formNew.getElementById("titleInfo0");
    const titleError = formNew.getElementById("titleNameError0");
    const infoError = formNew.getElementById("titleInfoError0");
    checkMovieName(newTitle, titleError);
    checkMovieInfo(newInfo, infoError);
}
function checkEditForm() {
    const formEdit = document.getElementById("editMovieForm");
    const editTitle = formEdit.getElementById("titleName1");
    const editInfo = formEdit.getElementById("titleInfo1");
    const titleError = formEdit.getElementById("titleNameError1");
    const infoError = formEdit.getElementById("titleInfoError1");
    checkMovieName(editTitle, titleError);
    checkMovieInfo(editInfo, infoError);
}

function checkTitleSearch(title) {
    const formSearch = document.getElementById("searchForm");
    const searchError = formSearch.getElementByClass("errorMsg");
    const searchField = formSearch.getElementById("searchMovieName");
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
