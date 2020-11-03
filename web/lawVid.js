document.getElementById("searchTitleError").addEventListener("onblur", checkTitleSearch());
document.getElementById("titleName0").addEventListener("onblur", checkNewForm());
document.getElementById("titleInfo0").addEventListener("onblur", checkNewForm());
document.getElementById("titleName1").addEventListener("onblur", checkEditForm());
document.getElementById("titleInfo1").addEventListener("onblur", checkEditForm());

function checkNewForm() {
    const newTitle = document.getElementById("titleName0").value;
    const newInfo = document.getElementById("titleInfo0").value;
    const titleError = document.getElementById("titleNameError0");
    const infoError = document.getElementById("titleInfoError0");
    checkMovieName(newTitle, titleError);
    checkMovieInfo(newInfo, infoError);
}
function checkEditForm() {
    const editTitle = document.getElementById("titleName1").value;
    const editInfo = document.getElementById("titleInfo1").value;
    const titleError = document.getElementById("titleNameError1");
    const infoError = document.getElementById("titleInfoError1");
    checkMovieName(editTitle, titleError);
    checkMovieInfo(editInfo, infoError);
}

function checkTitleSearch() {
    const searchError = document.getElementById("searchTitleError");
    const searchField = document.getElementById("searchMovieName");
    if (searchField.value == "") {
        searchError.style.display = inline;
        searchError.innerHTML = "Did you forget to put in the name?";
    }
    else {
        searchError.style.display = none;
    }
}
function checkMovieName (title, error) {
    if (title.value == "") {
        error.style.display = inline;
        error.innerHTML = "Did you forget to put in the name?";
    }
    else {
        error.style.display = none;
    }
}
function checkMovieInfo(info, error) {
    if (info.value == "") {
        error.style.display = inline;
        error.innerHTML = "Did you forget to put in the name?";
    }
    else {
        error.style.display = none;
    }
}