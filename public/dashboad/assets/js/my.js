$(document).ready(function() {
    // Handle file input change event
    $('.imageInput').change(function() {
        previewImage(this);
    });

    function previewImage(input) {
        var file = input.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);
            };

            reader.readAsDataURL(file);
        }
    }
});
 // Initialize CKEditor on all textareas with the class "myTextarea"
 document.querySelectorAll('.myTextarea').forEach(function(textarea) {
    CKEDITOR.replace(textarea);
  });

  // Example: Add new content to the first CKEditor instance every second
  var counter = 0;
  setInterval(function() {
    var newContent = 'New content ' + counter + ' added at ' + new Date().toLocaleTimeString();
    CKEDITOR.instances.myTextarea.setData(newContent);
    counter++;
  }, 1000);