// JavaScript to control the testimonial slider
document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;
  
    // Function to show the current slide
    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });
    }
  
    // Initial slide
    showSlide(currentIndex);
  
    // Event listeners for previous and next slide buttons
    document.querySelector('.prev-slide').addEventListener('click', function () {
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      showSlide(currentIndex);
    });
  
    document.querySelector('.next-slide').addEventListener('click', function () {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    });
  });








  window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled-nav');
    } else {
        navbar.classList.remove('scrolled-nav');
    }
});




document.getElementById('explore').addEventListener('click', function() {
  window.location.href = 'login.php';

});

document.getElementById('getstarted').addEventListener('click', function() {
  window.location.href = 'login.php';

});
  