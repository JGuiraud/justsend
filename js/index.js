console.log('hello');

var displayimage = document.getElementById('displayimage');
displayimage.classList.add('hide');

function displayUploadedImage(input) {
  if(input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      displayimage.setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
    displayimage.classList.remove('hide');

    console.log("change");
  }
}

var image = document.getElementById('picture');
image.addEventListener('change', function() {
  displayUploadedImage(this);
});
