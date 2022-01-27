// Multistep Form Attribute
var input = document.querySelectorAll('#formRegistrasi input[type="text"]');
for (var i=0; i < input.length; i++) {
    // input[i].setAttribute('onkeyup', 'caseUpper(this); caseText(this)');
    input[i].setAttribute('onkeyup', 'caseText(this)');
    input[i].setAttribute('oninput', 'this.classList.remove("invalid")')
    input[i].classList.add('form-control');
}

var input = document.querySelectorAll('#formRegistrasi input');
for (var i=0; i < input.length; i++) {
    input[i].setAttribute('oninput', 'this.classList.remove("invalid")')
    input[i].classList.add('form-control');
}

var input = document.querySelectorAll('#formRegistrasi select');
for (var i=0; i < input.length; i++) {
    input[i].setAttribute('onchange', 'this.classList.remove("invalid")')
    input[i].classList.add('form-select');
}

// Input Case Title
function caseTitle(str) {
    return str.value.toLowerCase().split(' ').map(function(word) {
        return (word.charAt(0).toUpperCase() + word.slice(1));
    }).join(' ');
}

// Input Remove Characters
function caseText(str) {
    str.value = str.value.replace(/[^a-zA-Z 0-9_-]/g, '');
}

// Input Case Upper
function caseUpper(event) {
	let p 			= event.selectionStart;
	event.value     = event.value.toUpperCase();
	event.setSelectionRange(p, p);
}

// Count Price
document.getElementById('Provinsi').addEventListener('change', e => {
    // var bukusoal = document.getElementById('BukuSoal');
    var provinsi = document.getElementById('Provinsi');
    var harga    = parseFloat(provinsi.options[provinsi.selectedIndex].getAttribute('data-harga'));
    document.getElementById('total').innerHTML      = harga;
    document.getElementById('totalInput').value     = harga;
    console.log(harga);
});

// Cek Data All
function cekData() {
    var provinsi    = document.getElementById('Provinsi');
    var alamatFix   = document.getElementById('alamatInput').value + ', RT ' + document.getElementById('rt').value + ' / RW ' + document.getElementById('rw').value + ', ' + document.getElementById('kelurahan').value + ', ' + document.getElementById('kecamatan').value + ', ' + document.getElementById('kota').value + ', ' + provinsi.options[provinsi.selectedIndex].value + ' (' + document.getElementById('kodepos').value + ')';
    document.getElementById('Alamat').value             = alamatFix;
    console.log(alamatFix);
}

// Submit

const scriptURL = 'https://script.google.com/macros/s/AKfycbwLb8f-cg5fbitgJ3Di4GbGEGj2h-3nNubEVhMhcg-yWrNXzwawJ7heT1Moy7Dg9DvO2Q/exec';
const form      = document.getElementById('formRegistrasi');
const btnPrev   = document.getElementById('prevBtn');
const btnKirim  = document.getElementById('submitBtn');
const btnLoad   = document.getElementById('loadBtn');
const tabSuccess= document.getElementById('tabSuccess');
form.addEventListener('submit', e => {

    btnPrev.classList.add('d-none');
    btnKirim.classList.add('d-none');
    btnLoad.classList.remove('d-none');

    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {

            btnLoad.classList.add('d-none');
            tabSuccess.classList.remove('d-none');
            console.log('Success!', response);

        })
        .catch(error => console.error('Error!', error.message))
})