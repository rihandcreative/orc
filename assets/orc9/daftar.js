Swal.fire({
    icon: 'info',
    title: 'Data Tidak Boleh Salah!',
    text: 'Seluruh data akan digunakan sampai pembuatan piagam dan medali dengan ukiran nama. Data tidak bisa diganti setelah disubmit.',
})

function inputUpper(x) {
    x.value = x.value.toUpperCase();
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
            document.getElementById('btnLoading').classList.add('d-none');
            document.getElementById('btnSuccess').classList.remove('d-none');

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
                    window.location = 'https://rihand.link/orc9-group'
                } else {
                    window.location = './daftar.html'
                }
            })
        }
    })
})

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