const searchTitleForm = document.getElementById("searchForm");
const searchTitleField = searchTitleForm.getElementById("searchMovieName|");
searchTitleField.addEventListener('change', () => checkTitleSearch(), false);

const newMovieForm = document.getElementById("newMovieForm");
const newMovieName = newMovieForm.getElementById("titleName0");
const newMovieInfo = newMovieForm.getElementById("titleInfo0");
newMovieName.addEventListener('change', () => checkMovieName(), false);
newMovieInfo.addEventListener('change', () => checkMovieInfo(), false);

const editMovieForm = document.getElementById("editMovieForm");
const editMovieName = editMovieForm.getElementById("titleName1");
const editMovieInfo = editMovieForm.getElementById("titleInfo1");
editMovieName.addEventListener('change', () => checkMovieName(), false);
editMovieInfo.addEventListener('change', () => checkMovieInfo(), false);

function checkTitleSearch() {

}
function checkMovieName () {

}
function checkMovieInfo() {
    
}