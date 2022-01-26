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

document.getElementById('UserID').setAttribute('onkeyup', '');

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

// Get User ID From URL
var getParams = {}
location.search.substr(1).split("&").forEach(function(item) {getParams[item.split("=")[0]] = item.split("=")[1]})
if(getParams.uid !== undefined) {
  document.getElementById('UserIDbtn').classList.add('d-none');
  document.getElementById('UserIDdiv').classList.remove('d-none');
  document.getElementById('UserIDtxt').innerHTML  = getParams.uid;
  document.getElementById('UserID').value         = getParams.uid;
  cekUserId();
  console.log(getParams.uid);
}

// Cek User ID
function cekUserId() {
	var userID 	    = document.getElementById("UserID").value;
	var fetchUser 	= userList.find(o => o.userid === userID);

	if(!fetchUser) {
		document.getElementById("alert-userid").classList.remove('d-none');
        document.getElementById("nextBtn").classList.add('d-none');
		document.getElementById("NamaLengkap").value= '';
		document.getElementById("Sekolah").value 	= '';
		document.getElementById("Bidang").value 	= '';
		document.getElementById("Peringkat").value 	= '';
        document.getElementById("Sertifikat").value = '';
	} else {
		document.getElementById("alert-userid").classList.add('d-none');
        document.getElementById("nextBtn").classList.remove('d-none');
		document.getElementById("NamaLengkap").value 	= fetchUser.nama.toUpperCase();
		document.getElementById("Sekolah").value 		= fetchUser.sekolah.toUpperCase();
		document.getElementById("Bidang").value 		= fetchUser.bidang.toUpperCase();
		document.getElementById("Peringkat").value      = fetchUser.peringkat;
        document.getElementById("Medali").value         = fetchUser.medali.toUpperCase();
        document.getElementById("Sertifikat").value     = fetchUser.sertifikat;
	}
}

// Count Price
document.getElementById('Provinsi').addEventListener('change', e => {
    var bukusoal = document.getElementById('BukuSoal');
    var provinsi = document.getElementById('Provinsi');
    var harga    = parseFloat(provinsi.options[provinsi.selectedIndex].getAttribute('data-harga')) + parseFloat(bukusoal.options[bukusoal.selectedIndex].getAttribute('data-harga')) + 135000;
    document.getElementById('total').innerHTML      = harga;
    document.getElementById('totalInput').value     = harga;
    console.log(harga);
});
document.getElementById('BukuSoal').addEventListener('change', e => {
    var bukusoal = document.getElementById('BukuSoal');
    var provinsi = document.getElementById('Provinsi');
    var harga    = parseFloat(provinsi.options[provinsi.selectedIndex].getAttribute('data-harga')) + parseFloat(bukusoal.options[bukusoal.selectedIndex].getAttribute('data-harga')) + 135000;
    document.getElementById('total').innerHTML      = harga;
    document.getElementById('totalInput').value     = harga;
    console.log(harga);
});

// Cek Data All
function cekData() {
    var provinsi    = document.getElementById('Provinsi');
    var alamatFix   = document.getElementById('alamatInput').value + ', RT ' + document.getElementById('rt').value + ' / RW ' + document.getElementById('rw').value + ', ' + document.getElementById('kelurahan').value + ', ' + document.getElementById('kecamatan').value + ', ' + document.getElementById('kota').value + ', ' + provinsi.options[provinsi.selectedIndex].value + ' (' + document.getElementById('kodepos').value + ')';
    document.getElementById('cekNama').innerHTML        = document.getElementById('NamaLengkap').value;
    document.getElementById('cekSekolah').innerHTML     = document.getElementById('Sekolah').value;
    document.getElementById('cekBidang').innerHTML      = document.getElementById('Bidang').value;
    document.getElementById('cekPeringkat').innerHTML   = document.getElementById('Peringkat').value;
    document.getElementById('cekMedali').innerHTML      = document.getElementById('Medali').value;
    document.getElementById('cekAlamat').innerHTML      = alamatFix;
    document.getElementById('Alamat').value             = alamatFix;
    document.getElementById('cekTransferKe').innerHTML  = document.getElementById('TransferKe').value;
    document.getElementById('cekBukusoal').innerHTML    = document.getElementById('BukuSoal').value;
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