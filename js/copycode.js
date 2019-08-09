
var copybutton = document.getElementById('copybutton');
copybutton.addEventListener('click', function() {

  var copyText = document.getElementById("generated-code");
  copyText.select();
  document.execCommand("copy");
  document.getElementById('copy-success').innerHTML = "Code sucessfuly copied";
})
