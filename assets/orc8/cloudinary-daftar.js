var buktiInput      = document.getElementById('1730543772');
var buktiGambar     = document.getElementById('buktiGambar');
var identitasInput  = document.getElementById('381680996');
var identitasGambar = document.getElementById('identitasGambar');

var widgetBukti = cloudinary.createUploadWidget({
    cloudName: 'rihandcreative',
    uploadPreset: 'developer',
    sources: ['local', 'camera', 'url']
}, (error, result) => {
    if (!error && result && result.event === "success") {
        console.log('Bukti Pembayaran: ', result.info.secure_url);
        buktiInput.value        = result.info.secure_url;
        buktiGambar.innerHTML   = '<img src="' + result.info.secure_url + '" width="80vw">';
    }
})
document.getElementById("buktiBtn").addEventListener("click", function(){ widgetBukti.open(); }, false);

var widgetIdentitas = cloudinary.createUploadWidget({
    cloudName: 'rihandcreative',
    uploadPreset: 'developer',
    sources: ['local', 'camera', 'url']
}, (error, result) => {
    if (!error && result && result.event === "success") {
        console.log('Kartu Identitas: ', result.info.secure_url);
        identitasInput.value    = result.info.secure_url;
        identitasGambar.innerHTML   = '<img src="' + result.info.secure_url + '" width="80vw">';
    }
})
document.getElementById("identitasBtn").addEventListener("click", function(){ widgetIdentitas.open(); }, false);