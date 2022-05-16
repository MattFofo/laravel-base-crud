require('./bootstrap');


//HTML elements
const eleConfirmDelete = document.getElementById('confirm-delete');
const eleNotDelete = document.getElementById('not-delete');
const eleOverlayDeleteAlert = document.querySelector('.overlay-delete-alert');

//delete confirm

function toggleVisibility(element) {
    element.classList.toggle('invisible');
}


eleConfirmDelete.addEventListener('click', () => {
    toggleVisibility(eleOverlayDeleteAlert);
})

eleNotDelete.addEventListener('click', () => {
    toggleVisibility(eleOverlayDeleteAlert);
})

