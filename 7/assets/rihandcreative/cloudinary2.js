// === UPLOAD FILE CLOUDINARY === //

function unload() {
    document.getElementById('loader').classList.remove('d-none');
}

const cloudName = 'rihandcreative';
const unsignedUploadPreset = 'olimpiade7';

var fileSelect = document.getElementById("fileSelect"),
    fileElem = document.getElementById("fileElem"),
    urlSelect = document.getElementById("urlSelect");

fileSelect.addEventListener("click", function(e) {
    if (fileElem) {
        fileElem.click();
    }
    e.preventDefault();
}, false);

function uploadFile(file) {
    var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
    var xhr = new XMLHttpRequest();
    var fd = new FormData();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    document.getElementById('buktiPembayaranGambar').innerHTML = "<center><div id='loader'></div></center>";

    xhr.onreadystatechange = function(e) {

        if (xhr.readyState == 4 && xhr.status == 200) {

            var response = JSON.parse(xhr.responseText);
            var url = response.secure_url;
            var tokens = url.split('/');
            var img = new Image();
            img.src = tokens.join('/');
            img.alt = response.public_id;
            document.getElementById('buktiPembayaranGambar').innerHTML = "";
            document.getElementById('buktiPembayaranGambar').appendChild(img);

            var imgGallery  = document.getElementById('buktiPembayaranGambar');
            var imgGambar   = imgGallery.getElementsByTagName('img')[0];
            var imgSrc      = imgGambar.src;
            imgGambar.style.width = '30vw';

            if(preorderJenis == 'medali') { document.getElementById("1238003528").value = imgSrc; }

        }
    };

    fd.append('upload_preset', unsignedUploadPreset);
    fd.append('file', file);
    xhr.send(fd);
}

var handleFiles = function(files) {
    for (var i = 0; i < files.length; i++) {
        uploadFile(files[i]);
    }
};