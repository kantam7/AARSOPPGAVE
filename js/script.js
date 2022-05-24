// MODALS
/* Get the modals*/
var modal = document.getElementById('id01', 'id02', 'id03');

/* When the user clicks anywhere outside of the modal, close it*/
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


/*FAQ dropdown*/
var buttons = document.querySelectorAll('button');

buttons.forEach( button =>{
    button.addEventListener('click',()=>{
        const faq = button.nextElementSibling;
        const icon = button.children[1];

        faq.classList.toggle('show');
        icon.classList.toggle('rotate');
    })
} )
