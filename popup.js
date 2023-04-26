document.addEventListener('DOMContentLoaded', function() {
    var cookiePopup = document.querySelector('.cookie-popup');
    var cookieAccept = document.querySelector('#cookie-accept');
    var cookieDecline = document.querySelector('#cookie-decline');
  
    if (!localStorage.getItem('cookieAccepted')) {
      cookiePopup.style.display = 'block';
    }
  
    cookieAccept.addEventListener('click', function() {
      localStorage.setItem('cookieAccepted', true);
      cookiePopup.style.display = 'none';
    });
  
    cookieDecline.addEventListener('click', function() {
      cookiePopup.style.display = 'none';
    });
  });
  