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

	var userID 	    = document.getElementById("694406928").value;
	var fetchUser 	= userList.find(o => o.userid === userID);

    // if(preorderJenis == 'medali') {
        var inputNama       = document.getElementById("1824919968");
        var inputSekolah    = document.getElementById("867885731");
        var inputBidang     = document.getElementById("1164322884");
        var inputPeringkat  = document.getElementById("180774025");
        var inputMedali     = document.getElementById("1673236932");
        var inputAlamat     = document.getElementById("1413955553");
    // }

	if(!fetchUser) {
		document.getElementById("alert-userid").classList.remove('d-none');
        document.getElementById("useridCek").value  = '';
		inputNama.value         = '';   // NAMA
		inputSekolah.value 	    = '';   // SEKOLAH
		inputBidang.value       = '';   // BIDANG
		inputPeringkat.value 	= '';   // PERINGKAT
        inputMedali.value       = '';   // MEDALI
        inputAlamat.value       = '';   // ALAMAT
	} else {
		document.getElementById("alert-userid").classList.add('d-none');
        document.getElementById("useridCek").value  = 'ok';
        inputNama.value         = fetchUser.nama.toUpperCase();   // NAMA
		inputSekolah.value 	    = fetchUser.sekolah.toUpperCase();   // SEKOLAH
		inputBidang.value       = fetchUser.bidang.toUpperCase();   // BIDANG
		inputPeringkat.value 	= fetchUser.peringkat;   // PERINGKAT
        inputMedali.value       = fetchUser.medali.toUpperCase();   // MEDALI
        inputAlamat.value       = fetchUser.alamat.toUpperCase();   // ALAMAT
	}
}

// Hitung Harga
function hitungHarga() {
    var biaya       = document.getElementById('biaya');
    var biayaInput  = document.getElementById('1749374995');
    var jumlah      = document.getElementById('1652745537');
    var provinsi    = document.getElementById('Provinsi');
    var provHarga   = provinsi.options[provinsi.selectedIndex].getAttribute('data-harga');
    if( jumlah.value < 1 || jumlah.value === NaN || provHarga === null ) {
        var harga   = '??? (silahkan isi data di atas terlebih dahulu)';
    } else {
        if(preorderJenis == 'medali') { var harga = (jumlah.value * 90000) + parseFloat(provHarga); }
        if(preorderJenis == 'paket')  { var harga = (jumlah.value * 140000) + parseFloat(provHarga); }
        if(preorderJenis == 'legal')  { var harga = (jumlah.value * 170000) + parseFloat(provHarga); }
    }
    console.log(harga);
    biaya.innerHTML     = harga;
    biayaInput.value    = harga;
}

// Get Form Submitted Parameter from URL
var getParams = {}
location.search.substr(1).split("&").forEach(function(item) {getParams[item.split("=")[0]] = item.split("=")[1]})
if(getParams.submit !== undefined) {
    Swal.fire({
        icon: 'success',
        title: 'Data Terkirim!',
        // html: 'Data berhasil terkirim. Mohon <b>LANGSUNG</b> join group WhatsApp melalui tombol di bawah ini.',
        showCancelButton: true,
        closeOnConfirm: false,
        closeOnCancel: true,
        confirmButtonText: 'Pesan Lagi',
        cancelButtonText: "Kembali ke Halaman Utama",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "./preorder";
        } else {
            window.location = ".";
        }
    })
    
} else {
    Swal.fire({
        icon: 'info',
        title: 'Data Tidak Boleh Salah!',
        text: 'Mohon periksa kembali data yang telah dimasukkan, karena dta yang sudah dimasukkan tidak dapat diperbaiki setelah dikirimkan.',
    })
}

// Submit Form
$('#form').submit(function (event) {

    document.getElementById('btnLoading').classList.remove('d-none');
    document.getElementById('btnKirim').classList.add('d-none');

    event.preventDefault()
    var extraData = {}
    $('#form').ajaxSubmit({
        data: extraData,
        // dataType: 'jsonp',  // This won't really work. It's just to use a GET instead of a POST to allow cookies from different domain.
        error: function () {
            // Submit of form should be successful but JSONP callback will fail because Google Forms
            // does not support it, so this is handled as a failure.
            window.location = window.location.href + '?submit=true';
        }
    })
})