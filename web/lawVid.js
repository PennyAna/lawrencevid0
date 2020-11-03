
//const formSearchData = new FormData(formSearch);

//const formNewData = new FormData(formNew);

//const formEditData = new FormData(formEdit);

function checkNewForm() {
    const newTitle = document.getElementById("titleName0");
    const newInfo = document.getElementById("titleInfo0");
    const titleError = document.getElementById("titleNameError0");
    const infoError = document.getElementById("titleInfoError0");
    checkMovieName(newTitle, titleError);
    checkMovieInfo(newInfo, infoError);
}
function checkEditForm() {
    const editTitle = document.getElementById("titleName1");
    const editInfo = document.getElementById("titleInfo1");
    const titleError = document.getElementById("titleNameError1");
    const infoError = document.getElementById("titleInfoError1");
    checkMovieName(editTitle, titleError);
    checkMovieInfo(editInfo, infoError);
}

function checkTitleSearch() {
    const formSearch = document.getElementById("searchForm");
    const searchError = formSearch.getElementByClass("errorMsg");
    const searchField = formSearch.getElementById("searchMovieName");
    if (searchField.value == "") {
        searchError.style.display = block;
        searchError.innerHTML = "Did you forget to put in the name?";
    }
    else {
        searchError.style.display = none;
    }
}
function checkMovieName (title, error) {
    if (title.value == "") {
        error.style.visibility = ;
        error.innerHTML = "Did you forget to put in the name?";
    }
    else {
        error.style.display = none;
    }
}
function checkMovieInfo(info, error) {
    if (info.value == "") {
        error.style.display = block;
        error.innerHTML = "Did you forget to put in the name?";
    }
    else {
        error.style.display = none;
    }
}
