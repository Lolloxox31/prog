$( document ).ready(function() {
    const imglist = document.querySelectorAll('.enlargeclick');
    const fullPage = document.querySelector('#fullpage');
    
    imglist.forEach(img => {
      img.addEventListener('click', function() {
        fullPage.style.backgroundImage = 'url(' + img.src + ')';
        fullPage.style.display = 'block';
      });
    });
});