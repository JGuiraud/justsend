
var pastebutton = document.getElementById('pastebutton');
pastebutton.addEventListener('click', function() {
  console.log('click');
  navigator.clipboard.readText()
  window.clipboardData.getData('Text')



  var inputToPaste = document.getElementById("input-code");
/*
  inputToPaste.select();
*/
  document.execCommand("paste");
})
