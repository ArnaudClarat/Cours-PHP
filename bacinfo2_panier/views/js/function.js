function count() {
    document.getElementById('r').innerText = document.getElementById('message').maxLength-document.getElementById('message').value.length;
}

function sum() {
    document.getElementById('sum').innerText = document.getElementsByClassName('quantity')*document.getElementsByClassName('price');
}