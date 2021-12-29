var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) {
  showTab(currentTab);
});

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  
  if (n == 0) { document.getElementById("prevBtn").style.display = "none"; }
  else { document.getElementById("prevBtn").style.display = "inline"; }
  
  if (n == (x.length - 1)) { document.getElementById("nextBtn").innerHTML = '<i class="fas fa-angle-double-right"></i>'; }
  else { document.getElementById("nextBtn").innerHTML = '<i class="fas fa-angle-double-right"></i>'; }
  
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("nextprevious").style.display = "none";
    document.getElementById("all-steps").style.display = "none";
    document.getElementById("register").style.display = "none";
    document.getElementById("text-message").style.display = "block";
  }
  showTab(currentTab);
}

function validateForm() {
  var x, y, i, valid = true;
  x       = document.getElementsByClassName("tab");
  input   = x[currentTab].getElementsByTagName("input");
  textarea= x[currentTab].getElementsByTagName("textarea");
  select  = x[currentTab].getElementsByTagName("select");
  for (i = 0; i < input.length; i++) { if (input[i].value == "") { input[i].className += " invalid"; valid = false; } }
  for (i = 0; i < textarea.length; i++) { if (textarea[i].value == "") { textarea[i].className += " invalid"; valid = false; } }
  for (i = 0; i < select.length; i++) { if(select[i].value == "") { select[i].className += " invalid"; valid = false; } } 
  if (valid) { document.getElementsByClassName("step")[currentTab].className += " finish"; }
  return valid;
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}