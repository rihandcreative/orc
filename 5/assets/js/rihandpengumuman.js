window.jsPDF = window.jspdf.jsPDF;
function toDataUrl(url, callback) {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    var reader = new FileReader();
    reader.onloadend = function() {
      callback(reader.result);
    };
    reader.readAsDataURL(xhr.response);
  };
  xhr.open('GET', url);
  xhr.responseType = 'blob';
  xhr.send();
}

function makePDF(base64Img) {
  var doc = jsPDF({ // reinitialize doc
    orientation: "portrait",
    unit: "in",
    format: "A4"
  });
  
  doc.addImage(base64Img, "PNG", 0, 0, 8.27, 11.69);
  // doc.addImage(base64Img, "PNG", 0, 0, 6.2, 8.77);
  doc.save();
}