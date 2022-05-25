function inputUpper(x) {
    x.value = x.value.toUpperCase();
}

function inputLower(x) {
    x.value = x.value.toLowerCase();
}

// Hitung Harga
// function hitungHarga() {
//     var biaya       = document.getElementById('biaya');
//     var biayaInput  = document.getElementById('427873150');
//     var jumlah      = document.getElementById('1176952798');
//     var provinsi    = document.getElementById('1455027347');
//     var provHarga   = provinsi.options[provinsi.selectedIndex].getAttribute('data-harga');
//     if( jumlah.value < 1 || jumlah.value === NaN || provHarga === null ) {
//         var harga   = '??? (silahkan isi data di atas terlebih dahulu)';
//     } else {
//         if(preorderJenis == 'hebat')    { var harga = (jumlah.value * 95000) + parseFloat(provHarga); }
//         if(preorderJenis == 'juara')    { var harga = (jumlah.value * 155000) + parseFloat(provHarga); }
//         if(preorderJenis == 'prestasi') { var harga = (jumlah.value * 175000) + parseFloat(provHarga); }
//     }
//     console.log(harga);
//     biaya.innerHTML     = harga;
//     biayaInput.value    = harga;
// }

// Get User ID From URL
var getParams = {}
location.search.substr(1).split("&").forEach(function(item) {getParams[item.split("=")[0]] = item.split("=")[1]})
if(getParams.uid !== undefined) {
    document.getElementById('97263414').value       = getParams.uid;
    console.log(getParams.uid);
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
                title: 'Pemesanan Berhasil!',
                html: 'Terima kasih!',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Cek Group WA',
                denyButtonText: `Pesan Lagi`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'https://rihand.link/orc8-group'
                } else {
                    window.location = './preorder'
                }
            })
        }
    })
})