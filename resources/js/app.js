require('./bootstrap');


//HTML elements
const eleConfirmDelete = document.getElementById('confirm-delete');
const eleNotDelete = document.getElementById('not-delete');
const eleOverlayDeleteAlert = document.querySelector('.overlay-delete-alert');

//delete confirm
eleConfirmDelete.addEventListener('click', function () {
    eleOverlayDeleteAlert.classList.toggle('invisible');
})

eleNotDelete.addEventListener('click', function () {
    eleOverlayDeleteAlert.classList.toggle('invisible');
})
