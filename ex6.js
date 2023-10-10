document.getElementById('ageForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const age = parseInt(document.getElementById('age').value);

    if (!isNaN(age)) {
        if (age >= 18) {
            alert('Vous êtes majeur.');
        } else {
            alert('Vous êtes mineur.');
        }
    } else {
        alert('Veuillez entrer un âge valide.');
    }
});