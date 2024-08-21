// script.js

//Funzione per la selezione del form
function SelezioneForm() {
    var query = document.getElementById('query').value;
    var forms = document.getElementsByClassName('queries');

    for (var i = 0; i < forms.length; i++) {
        if (forms[i].id == "query" + query) {
            forms[i].style.display = 'flex';
        } else {
            forms[i].style.display = 'none';
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.navbar ul li a');

    links.forEach(link => {
        link.addEventListener('click', () => {
            links.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
        });
    });
});

//Event listener di SelezioneForm 
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('query').addEventListener('change', SelezioneForm);
    SelezioneForm();
});
