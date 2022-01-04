var currentTab = 0;
showTab(currentTab);

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        // document.getElementById("nextBtn").innerHTML = "Kirim &#10003;";
        document.getElementById("nextBtn").classList.add('d-none');
        document.getElementById("prevBtn").classList.add('d-none');
    } else {
        document.getElementById("nextBtn").innerHTML = "Lanjut &rarr;";
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        

        return false;
    }
    showTab(currentTab);
}

function validateForm() {
    var x, i, valid = true;
    x = document.getElementsByClassName("tab");
    input = x[currentTab].getElementsByTagName("input");
    textarea = x[currentTab].getElementsByTagName("textarea");
    select = x[currentTab].getElementsByTagName("select");
    for (i = 0; i < input.length; i++) {
        if (input[i].value == "") {
            input[i].className += " invalid";
            valid = false;
        }
    }
    for (i = 0; i < textarea.length; i++) {
        if (textarea[i].value == "") {
            textarea[i].className += " invalid";
            valid = false;
        }
    }
    for (i = 0; i < select.length; i++) {
        if (select[i].value == "") {
            select[i].className += " invalid";
            valid = false;
        }
    }
    if (valid) {
        document.getElementsByClassName("step")[currentTab].classList += " finish";
    }
    return valid;
}

function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}

// === UPLOAD FILE CLOUDINARY === //

function unload() {
    document.getElementById('loader').classList.remove('d-none');
}

const cloudName = 'rihandcreative';
const unsignedUploadPreset = 'olimpiade';

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

            var imgGallery = document.getElementById('buktiPembayaranGambar');
            var imgGambar = imgGallery.getElementsByTagName('img')[0];
            var imgSrc = imgGambar.src;
            document.getElementById("BuktiPembayaran").value = imgSrc;
            document.getElementById("cekPembayaran").src = imgSrc;

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