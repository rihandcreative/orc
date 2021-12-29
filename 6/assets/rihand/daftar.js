// Multistep Form Attribute
var input = document.querySelectorAll('#formRegistrasi input');
for (var i=0; i < input.length; i++) {
    input[i].setAttribute('onkeyup', 'caseUpper(this); caseText(this)');
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

// Change Bidang
var jenjang     = document.getElementById('Jenjang');
var bidangSD    = document.getElementById('bidangSD');
var bidangSMP   = document.getElementById('bidangSMP');
var bidangSMA   = document.getElementById('bidangSMA');

jenjang.addEventListener('change', () => {

    if(jenjang.value === 'SD') {
        bidangSD.classList.remove('d-none');
        bidangSMP.classList.add('d-none');
        bidangSMA.classList.add('d-none');

    } else if(jenjang.value === 'SMP') {
        bidangSD.classList.add('d-none');
        bidangSMP.classList.remove('d-none');
        bidangSMA.classList.add('d-none');

    } else if(jenjang.value === 'SMA') {
        bidangSD.classList.add('d-none');
        bidangSMP.classList.add('d-none');
        bidangSMA.classList.remove('d-none');
    }

});

// Cek Data All
function cekData() {
    // Username
    var userRand    = Math.floor(Math.random() * 9999) + 1111;
    document.getElementById('Username').value           = document.getElementById('NamaLengkap').value.toLowerCase().split(' ').slice(0,2).join('') + userRand;
    // All Data
    document.getElementById('cekNama').innerHTML        = document.getElementById('NamaLengkap').value;
    document.getElementById('cekSekolah').innerHTML     = document.getElementById('Sekolah').value;
    document.getElementById('cekProvinsi').innerHTML    = document.getElementById('Provinsi').value;
    document.getElementById('cekKelas').innerHTML       = document.getElementById('Kelas').value;
    document.getElementById('cekBidang').innerHTML      = document.getElementById('Bidang').value;
    document.getElementById('cekTransferDari').innerHTML= document.getElementById('TransferDari').value;
    document.getElementById('cekTransferKe').innerHTML  = document.getElementById('TransferKe').value;
}

// Submit



const scriptURL = 'https://script.google.com/macros/s/AKfycbxaX3metMh66Pcb41Vl0ZnE1MSZtUpXrdOlE_lCngUO_th6HZlaz2rx2SypYl53DZd-/exec';
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