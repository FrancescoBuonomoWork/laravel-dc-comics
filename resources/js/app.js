import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteForms = document.querySelectorAll('.form-delete');
const deleteModal = new bootstrap.Modal('#modalDelete');

const btnModalDelete = document.querySelector('#button-modal-delete');
console.log(btnModalDelete)

const textModal = document.querySelector('.text-modal');

deleteForms.forEach((deleteForm) => {
    const deleteFormBtn = deleteForm.querySelector('.form-delete-btn');
    const comicTitle = deleteForm.dataset.deleteTitle;
    deleteFormBtn.addEventListener('click', (ev) => {
        ev.preventDefault();
        textModal.innerHTML += comicTitle + '?';
        deleteModal.show(); // Mostra la modale
        
        btnModalDelete.addEventListener('click',() =>{

            deleteForm.submit(); // Esegue la submit della form che ha aperto la modale
        })

    });
});