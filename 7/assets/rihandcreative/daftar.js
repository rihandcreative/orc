// Multistep Form Attribute
var input = document.querySelectorAll('#form input[type="text"]');
for (var i=0; i < input.length; i++) {
    input[i].setAttribute('onkeyup', 'caseUpper(this);');
}

// Input Case Upper
function caseUpper(event) {
	let p 			= event.selectionStart;
	event.value     = event.value.toUpperCase();
	event.setSelectionRange(p, p);
}

// Create UserID
function createUserid() {
    var userRand    = Math.floor(Math.random() * 8888) + 1111;
    var inputUser   = document.getElementById('1240909360');
    var inputNama   = document.getElementById('838629778');
    inputUser.value = '';
    inputUser.value = inputNama.value.toLowerCase().split(' ').slice(0,2).join('') + userRand;
}

// Change Bidang
var jenjang     = document.getElementById('236803822');
var bidangSD    = document.getElementById('bidangSD');
var bidangSMP   = document.getElementById('bidangSMP');
var bidangSMA   = document.getElementById('bidangSMA');
var bidangHold  = document.getElementById('bidangHold');

jenjang.addEventListener('change', () => {

    bidangHold.classList.add('d-none');

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

// Validate Alamat
function validateAlamat() {
    
    var provinsi    = document.getElementById('Provinsi');
    var alamatFix   = document.getElementById('alamatInput').value + ', RT ' + document.getElementById('rt').value + ' / RW ' + document.getElementById('rw').value + ', ' + document.getElementById('kelurahan').value + ', ' + document.getElementById('kecamatan').value + ', ' + document.getElementById('kota').value + ', ' + provinsi.options[provinsi.selectedIndex].value + ' (' + document.getElementById('kodepos').value + ')';
    document.getElementById('1210374602').value = alamatFix;
    console.log(alamatFix);

}

// Get Form Submitted Parameter from URL
var getParams = {}
location.search.substr(1).split("&").forEach(function(item) {getParams[item.split("=")[0]] = item.split("=")[1]})
if(getParams.submit !== undefined) {
    Swal.fire({
        icon: 'success',
        title: 'Data Terkirim!',
        html: 'Data berhasil terkirim. Mohon <b>LANGSUNG</b> join group WhatsApp melalui tombol di bawah ini.',
        footer: '<a href="./">Kembali ke Halaman Utama</a>',
        showCancelButton: true,
        closeOnConfirm: false,
        closeOnCancel: true,
        confirmButtonText: 'Join Group WhatsApp',
        cancelButtonText: "Saya sudah join group dan ingin mengisi form lagi",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "https://rihand.link/orc7-group4";
        } else {
            window.location = "./daftar";
        }
    })
    
} else {
    Swal.fire({
        icon: 'info',
        title: 'Data Tidak Boleh Salah!',
        text: 'Mohon periksa kembali data yang telah dimasukkan karena akan digunakan di sertifikat dan medali. Data yang sudah dimasukkan tidak dapat diperbaiki setelah dikirimkan.',
    })
}

// Submit Form
$('#form').submit(function (event) {
    event.preventDefault()
    var extraData = {}
    $('#form').ajaxSubmit({
        data: extraData,
        // dataType: 'jsonp',  // This won't really work. It's just to use a GET instead of a POST to allow cookies from different domain.
        error: function () {
            // Submit of form should be successful but JSONP callback will fail because Google Forms
            // does not support it, so this is handled as a failure.
            // document.getElementById('formdiv').classList.add('d-none');
            // document.getElementById('thankyou').classList.remove('d-none');
            // You can also redirect the user to a custom thank-you page:
            window.location = window.location.href + '?submit=true';
        }
    })
})