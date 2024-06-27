document.addEventListener('DOMContentLoaded', function() {
  const images = document.querySelectorAll('.image');
  
  images.forEach(function(image) {
    image.addEventListener('mouseenter', function() {
      images.forEach(function(otherImage) {
        if (otherImage !== image) {
          otherImage.classList.add('blur');
        }
      });
    });
    
    image.addEventListener('mouseleave', function() {
      images.forEach(function(otherImage) {
        otherImage.classList.remove('blur');
      });
    });
  });
});
