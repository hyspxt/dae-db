// script.js

//Funzione per la selezione del form
function SelezioneForm() {
    var query = document.getElementById('query').value;
    var forms = document.getElementsByClassName('queries');

    for (var i = 0; i < forms.length; i++) {
        if (forms[i].id == "query" + query) {
            forms[i].style.display = 'flex';
            if (query == 11 || query == 13)
                StampadataOdierna(query);
            if (query == 14){
                fetch('query.php?action=getEtaMedia')
                .then(response => response.text())
                .then(data => {
                    console.log('Server response:', data);
                    document.getElementById('media').innerText = data;
                })
                .catch(error => console.error('Error fetching data:', error));
            }
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
function StampadataOdierna(query) {
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
    if(query == 11)
        document.getElementById('dataOdierna11').textContent = dataCompleta;
    else if(query == 13)
        document.getElementById('dataOdierna13').textContent = dataCompleta;

}

//Event listener di SelezioneForm 
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('query').addEventListener('change', SelezioneForm);
    SelezioneForm();
});

//Funzione che segna l'età Paziente
const rangeInput = document.getElementById('EtaP');
const rangeValue = document.getElementById('rangeValueP');

rangeInput.addEventListener('input', function() {
    rangeValue.textContent = document.getElementById('EtaP').value;
});

//Funzione che segna l'età Soccoritore
const rangeInputS = document.getElementById('EtaS');
const rangeValueS = document.getElementById('rangeValueS');

rangeInputS.addEventListener('input', function() {
    rangeValueS.textContent = document.getElementById('EtaS').value;
});

//Funzione che segna l'età Operatore
const rangeInputO = document.getElementById('EtaO');
const rangeValueO = document.getElementById('rangeValueO');

rangeInputO.addEventListener('input', function() {
    rangeValueO.textContent = document.getElementById('EtaO').value;
});


// Funzione per visualizzare la tabella della query 10
document.addEventListener('DOMContentLoaded', function() {
    function setupQuery(buttonId, formId, tableId) {
        const button = document.getElementById(buttonId);
        const form = document.getElementById(formId);
        const table = document.getElementById(tableId);

        if (button && form && table) {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const formData = new FormData(form);

                fetch('query.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    table.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                    table.innerHTML = '<p>An error occurred while fetching the data.</p>';
                });
            });
        } else {
            console.error(`One or more elements are missing: ${buttonId}, ${formId}, ${tableId}`);
        }
    }

    // Setup queries
    setupQuery('button9', 'formQuery9', 'table9');
    setupQuery('button10', 'formQuery10', 'table10');
    setupQuery('button11', 'formQuery11', 'table11');
    setupQuery('button12', 'formQuery12', 'table12');
    setupQuery('button13', 'formQuery13', 'table13');
    setupQuery('button15', 'formQuery15', 'table15');
    setupQuery('button16', 'formQuery16', 'table16');
    setupQuery('button17', 'formQuery17', 'table17');
});

function toggleExtraFields() {
    var checkBox = document.getElementById("toggleFields");
    var extraFields = document.getElementById("extraFields");
    
    if (checkBox.checked)
        extraFields.style.display = "block";
    else
        extraFields.style.display = "none";
}