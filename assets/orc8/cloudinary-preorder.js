// BUKTI PEMBAYARAN //
var widgetBukti = cloudinary.createUploadWidget({
    cloudName: 'rihandcreative',
    uploadPreset: 'olimpiade8preorder',
    sources: ['local', 'camera']
}, (error, result) => {
    if (!error && result && result.event === "success") {
        console.log('Bukti Pembayaran: ', result.info.secure_url);
        document.getElementById(inputBukti).value           = result.info.secure_url;
        document.getElementById('gambarBukti').innerHTML    = '<img src="' + result.info.secure_url + '" width="80%" class="mt-3">';
    }
})
document.getElementById("btnBukti").addEventListener("click", function() {
    widgetBukti.open();
}, false);