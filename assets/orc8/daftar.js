Swal.fire({
    icon: 'info',
    title: 'Data Tidak Boleh Salah!',
    text: 'Seluruh data akan digunakan sampai pembuatan piagam dan medali dengan ukiran nama. Data tidak bisa diganti setelah disubmit.',
})

function inputUpper(x) {
    x.value = x.value.toUpperCase();
}

// Create UserID
function createUserid() {
    var userRand    = Math.floor(Math.random() * 8888) + 1111;
    var inputUser   = document.getElementById('1221670114');
    var inputNama   = document.getElementById('1504388365');
    inputUser.value = '';
    inputUser.value = inputNama.value.toLowerCase().split(' ').slice(0,2).join('') + userRand;
    inputUser.value = inputUser.value.replace(/[^a-zA-Z0-9]/g, '');
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
            Swal.fire({
                icon: 'success',
                title: 'Pendaftaran Berhasil!',
                html: 'Seluruh peserta <strong>WAJIB</strong> bergabung ke group WA setelah pendaftaran.',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Gabung Group WA',
                denyButtonText: `Saya Sudah Bergabung`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'https://rihand.link/orc8-group'
                } else {
                    window.location = './daftar'
                }
            })
        }
    })
})

// Validate Alamat
function validateAlamat() {

    document.getElementById('103599388').value = document.getElementById('kota').value;
    
    var provinsi    = document.getElementById('Provinsi');
    var alamatFix   = document.getElementById('alamatInput').value  + ', Kelurahan ' + document.getElementById('kelurahan').value + ', Kecamatan ' + document.getElementById('kecamatan').value + ', ' + document.getElementById('kota').value + ', ' + provinsi.options[provinsi.selectedIndex].value + ' (' + document.getElementById('kodepos').value + ')';
    document.getElementById('1494903587').value = alamatFix;
    console.log(alamatFix);

}

// Change Bidang
var jenjang     = document.getElementById('1667372184');
var bidangSD    = document.getElementsByClassName('bidang-sd');
var bidangSMP   = document.getElementsByClassName('bidang-smp');
var bidangSMA   = document.getElementsByClassName('bidang-sma');
var bidangHold  = document.getElementById('bidangHold');

jenjang.addEventListener('change', () => {

    bidangHold.classList.add('d-none');

    if(jenjang.value === 'SD') {

        bidangSD[0].classList.remove('d-none');
        bidangSD[1].classList.remove('d-none');
        bidangSD[2].classList.remove('d-none');
        bidangSD[3].classList.remove('d-none');

        bidangSMP[0].classList.add('d-none');
        bidangSMP[1].classList.add('d-none');
        bidangSMP[2].classList.add('d-none');
        bidangSMP[3].classList.add('d-none');
        bidangSMP[4].classList.add('d-none');

        bidangSMA[0].classList.add('d-none');
        bidangSMA[1].classList.add('d-none');
        bidangSMA[2].classList.add('d-none');
        bidangSMA[3].classList.add('d-none');
        bidangSMA[4].classList.add('d-none');

    } else if(jenjang.value === 'SMP') {

        bidangSD[0].classList.add('d-none');
        bidangSD[1].classList.add('d-none');
        bidangSD[2].classList.add('d-none');
        bidangSD[3].classList.add('d-none');

        bidangSMP[0].classList.remove('d-none');
        bidangSMP[1].classList.remove('d-none');
        bidangSMP[2].classList.remove('d-none');
        bidangSMP[3].classList.remove('d-none');
        bidangSMP[4].classList.remove('d-none');

        bidangSMA[0].classList.add('d-none');
        bidangSMA[1].classList.add('d-none');
        bidangSMA[2].classList.add('d-none');
        bidangSMA[3].classList.add('d-none');
        bidangSMA[4].classList.add('d-none');

    } else if(jenjang.value === 'SMA') {

        bidangSD[0].classList.add('d-none');
        bidangSD[1].classList.add('d-none');
        bidangSD[2].classList.add('d-none');
        bidangSD[3].classList.add('d-none');

        bidangSMP[0].classList.add('d-none');
        bidangSMP[1].classList.add('d-none');
        bidangSMP[2].classList.add('d-none');
        bidangSMP[3].classList.add('d-none');
        bidangSMP[4].classList.add('d-none');

        bidangSMA[0].classList.remove('d-none');
        bidangSMA[1].classList.remove('d-none');
        bidangSMA[2].classList.remove('d-none');
        bidangSMA[3].classList.remove('d-none');
        bidangSMA[4].classList.remove('d-none');

    }

});