// === GENERAL FUNCTIONS === //

function inputUppercase(event) {
	let p 					= event.selectionStart;
	event.value 		= event.value.toUpperCase();
	event.className = '';
	event.setSelectionRange(p, p);
}

function inputTitle(event) {
  event.value = event.value.split(' ').map((word) => word[0].toUpperCase() + word.slice(1).toLowerCase()).join(' ');
}

function inputNumber(event) {
	event.value = event.value.replace(/\D/g,'');
}


// === CURRENCY === //

function calc() {
  var harga   = (parseFloat($('#pesanan').val()) * 135000);
  var total   = harga + $('#provinsi').find(':selected').data('harga');
  $('#total').html( total );
  $('#totalInput').val( total )
} $("#pesanan").keyup(calc); $("#provinsi").change(calc);



// === FETCH DATA MELALUI ARRAY === //

function fetchDataUser() {
	var userID 			= document.getElementById("userID").value;
	var fetchUser 	= userList.find(o => o.userid === userID);

	if(!fetchUser) {
		document.getElementById("alert-userid").classList.remove('d-none');
    document.getElementById("nextBtn").classList.add('d-none');
		document.getElementById("nama").value 		= '';
		document.getElementById("sekolah").value 	= '';
		document.getElementById("bidang").value 	= '';
		document.getElementById("peringkat").value 	= '';
	} else {
		document.getElementById("alert-userid").classList.add('d-none');
    document.getElementById("nextBtn").classList.remove('d-none');
		document.getElementById("nama").value 			= fetchUser.nama.toUpperCase();
		document.getElementById("sekolah").value 		= fetchUser.sekolah.toUpperCase();
		document.getElementById("bidang").value 		= fetchUser.bidang.toUpperCase();
		document.getElementById("peringkat").value 	= fetchUser.peringkat;
    document.getElementById("medali").value     = fetchUser.medali.toUpperCase();
	}
}



// === REVIEW/PERIKSA DATA === //

function reviewData() {

  var nama          = document.getElementById("nama").value;
  var sekolah       = document.getElementById("sekolah").value;
  var bidang        = document.getElementById("bidang").value;
  var peringkat     = document.getElementById("peringkat").value;
  var medali        = document.getElementById("medali").value;
  var kode          = document.getElementById("kode").value;
  var wa            = document.getElementById("wa").value;
  var alamat        = document.getElementById("alamatInput").value;
  var kodepos       = document.getElementById("kodepos").value;
  var rt            = document.getElementById("rt").value;
  var rw            = document.getElementById("rw").value;
  var kelurahan     = document.getElementById("kelurahan").value;
  var kecamatan     = document.getElementById("kecamatan").value;
  var kota          = document.getElementById("kota").value;
  var provinsi      = document.getElementById("provinsi").value;
  var pesanan       = document.getElementById("pesanan").value;
  var total         = document.getElementById("total").innerHTML;
  var transferDari  = document.getElementById("transferDari").value;
  var transferKe    = document.getElementById("transferKe").value;
  var buktiSrc      = document.getElementById("BuktiPembayaran").value;
  var alamatFix     = alamat + ', RT ' + rt + ' / RW ' + rw + ', ' + kelurahan + ', ' + kecamatan + ', ' + kota + ', ' + provinsi + ' (' + kodepos + ')';

  document.getElementById("reviewnama").innerHTML         = nama;
  document.getElementById("reviewsekolah").innerHTML      = sekolah;
  document.getElementById("reviewbidang").innerHTML       = bidang;
  document.getElementById("reviewperingkat").innerHTML    = peringkat + ' (MEDALI ' + medali + ')';
  document.getElementById("reviewwa").innerHTML           = kode + wa;
  document.getElementById("reviewalamat").innerHTML       = alamatFix;
  document.getElementById("alamat").value                 = alamatFix;
  document.getElementById("reviewpesanan").innerHTML      = pesanan;
  document.getElementById("reviewtotal").innerHTML        = total;
  document.getElementById("reviewtransferDari").innerHTML = transferDari;
  document.getElementById("reviewtransferKe").innerHTML   = transferKe;
  document.getElementById("reviewbukti").src              = buktiSrc;

}



// === UPLOAD FILE CLOUDINARY === //

function unload() {
  document.getElementById('loader').classList.remove('d-none');
}

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

// window.onload=function(){function e(e){return e.stopPropagation?e.stopPropagation():window.event&&(window.event.cancelBubble=!0),e.preventDefault(),!1}document.addEventListener("contextmenu",function(e){e.preventDefault()},!1),document.addEventListener("keydown",function(t){t.ctrlKey&&t.shiftKey&&73==t.keyCode&&e(t),t.ctrlKey&&t.shiftKey&&74==t.keyCode&&e(t),83==t.keyCode&&(navigator.platform.match("Mac")?t.metaKey:t.ctrlKey)&&e(t),t.ctrlKey&&85==t.keyCode&&e(t),123==event.keyCode&&e(t)},!1)};