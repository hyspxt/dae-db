// script.js

//Funzione per la selezione del form
function SelezioneForm() {
    var query = document.getElementById('query').value;
    var forms = document.getElementsByClassName('queries');

    for (var i = 0; i < forms.length; i++) {
        if (forms[i].id == "query" + query) {
            forms[i].style.display = 'flex';
            if (query == 11 || query == 13)
                dataOdierna();
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

//Funzione per stampare la data corrente
function dataOdierna() {
    var oggi = new Date();
    var giorno = oggi.getDate();
    var mese = oggi.getMonth() + 1; // I mesi sono indicizzati a partire da 0
    var anno = oggi.getFullYear();
    
    // Aggiungi uno zero davanti ai numeri singoli
    if (giorno < 10) {
        giorno = '0' + giorno;
    }
    if (mese < 10) {
        mese = '0' + mese;
    }

    var dataCompleta = giorno + '/' + mese + '/' + anno;
    document.getElementById('dataOdierna').textContent = dataCompleta;
}

//Funzione per visualizzare gli allert
function mostraAlert(risultato) {
    if(risultato) {
        alert("Operazione completata con successo!");
    }
    else if (!risultato) {
        alert("Errore nell'esecuzione della query.");
    }
}

//Event listener di SelezioneForm 
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('query').addEventListener('change', SelezioneForm);
    SelezioneForm();
});
