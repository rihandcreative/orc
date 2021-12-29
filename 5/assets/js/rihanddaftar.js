// === GENERAL FUNCTIONS === //

function inputUppercase(event) {
	let p 					= event.selectionStart;
	event.value 		= event.value.toUpperCase();
	event.className = '';
	event.setSelectionRange(p, p);
}

function inputNumber(event) {
	event.value = event.value.replace(/\D/g,'');
}

function readonlyFunc() {

  var namaInput   = document.getElementById("nama");
  var namaCheck   = document.getElementById("oknama");
  if(namaCheck.checked == true) { namaInput.readOnly = true; }
  if(namaCheck.checked == false) { namaInput.readOnly = false; }

  var sekolahInput   = document.getElementById("sekolah");
  var sekolahCheck   = document.getElementById("oksekolah");
  if(sekolahCheck.checked == true) { sekolahInput.readOnly = true; }
  if(sekolahCheck.checked == false) { sekolahInput.readOnly = false; }

}

function showNextBtn() {
  var nextBtn   = document.getElementById("nextBtn");
  nextBtn.classList.remove("d-none");
}

// === HIDE/SHOW BIDANG === //

$("#jenjang").change(function(){
  var value = this.value;
  if (value == "SD")  { $("#bidangSD").show(); $("#bidangSMP").hide(); $("#bidangSMA").hide(); }
  if (value == "SMP") { $("#bidangSD").hide(); $("#bidangSMP").show(); $("#bidangSMA").hide(); }
  if (value == "SMA") { $("#bidangSD").hide(); $("#bidangSMP").hide(); $("#bidangSMA").show(); }
});



// === CURRENCY === //

let rupiah = Intl.NumberFormat('id-ID');
var total = 0;
function CalculateTotal(){
  $("input:checkbox").each(function(){
    if($(this).is(":checked")){
        total += parseFloat($(this).data('harga'));
    }
  });
  $("#total").html(rupiah.format(total));
}

$("input:checkbox").change(function(){
  total = 0;
  CalculateTotal();
}).trigger("change");



// === FUNCTION RANDOM NUMBER BETWEEN x-y === //

function randomNum(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min)
}



// === REVIEW/PERIKSA DATA === //

function reviewData() {

  var nama    = document.getElementById("nama").value;
  var userid  = nama.split(' ').slice(0,2).join('').toLowerCase() + randomNum(123456, 987654);
  var userpass= nama.toLowerCase().replace(/[^a-zA-Z ]/g, "").replace(/\s+/g, " ").replace(/^\s+|\s+$/g, "").replace(/ +/g, "");
  var kode    = document.getElementById("kode").value;
  var wa      = document.getElementById("wa").value;
  var sekolah = document.getElementById("sekolah").value;
  var jenjang = document.getElementById("kelas").value;
  var bidang  = $('input[name="Bidang"]:checked').map(function () { return this.value; }).get().join(", ");
  var transferDari  = document.getElementById("transferDari").value;
  var transferKe    = document.getElementById("transferKe").value;
  var buktiSrc      = document.getElementById("BuktiPembayaran").value;

  document.getElementById("userid").value     = userid;
  document.getElementById("userpass").value   = userpass;

  document.getElementById("reviewnama").innerHTML         = nama;
  document.getElementById("reviewkode").innerHTML         = kode;
  document.getElementById("reviewwa").innerHTML           = wa;
  document.getElementById("reviewsekolah").innerHTML      = sekolah;
  document.getElementById("reviewjenjang").innerHTML      = jenjang;
  document.getElementById("reviewbidang").innerHTML       = bidang;
  document.getElementById("reviewtransferDari").innerHTML = transferDari;
  document.getElementById("reviewtransferKe").innerHTML   = transferKe;
  document.getElementById("reviewbukti").src              = buktiSrc;

}



// === UPLOAD FILE CLOUDINARY === //

const cloudName = 'rihandcreative';
const unsignedUploadPreset = 'olimpiade';

var fileSelect  = document.getElementById("fileSelect"),
    fileElem    = document.getElementById("fileElem"),
    urlSelect   = document.getElementById("urlSelect");

fileSelect.addEventListener("click", function(e) {
  if (fileElem) { fileElem.click(); }
  e.preventDefault();
}, false);

function uploadFile(file) {
  var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
  var xhr = new XMLHttpRequest();
  var fd = new FormData();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

  xhr.onreadystatechange = function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response  = JSON.parse(xhr.responseText);
      var url       = response.secure_url;
      var tokens    = url.split('/');
      var img       = new Image();
      img.src       = tokens.join('/');
      img.alt       = response.public_id;
      document.getElementById('buktiPembayaranGambar').innerHTML = "";
      document.getElementById('buktiPembayaranGambar').appendChild(img);

      var imgGallery  = document.getElementById('buktiPembayaranGambar');
      var imgGambar   = imgGallery.getElementsByTagName('img')[0];
      var imgSrc      = imgGambar.src;
      document.getElementById("BuktiPembayaran").value = imgSrc;

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

// === SECURE === //

window.onload=function(){function e(e){return e.stopPropagation?e.stopPropagation():window.event&&(window.event.cancelBubble=!0),e.preventDefault(),!1}document.addEventListener("contextmenu",function(e){e.preventDefault()},!1),document.addEventListener("keydown",function(t){t.ctrlKey&&t.shiftKey&&73==t.keyCode&&e(t),t.ctrlKey&&t.shiftKey&&74==t.keyCode&&e(t),83==t.keyCode&&(navigator.platform.match("Mac")?t.metaKey:t.ctrlKey)&&e(t),t.ctrlKey&&85==t.keyCode&&e(t),123==event.keyCode&&e(t)},!1)};