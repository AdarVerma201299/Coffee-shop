
document.addEventListener('DOMContentLoaded', function () {
    function showPopup() {
      document.getElementById('popup').style.display = 'flex';

      setTimeout(function () {
        document.getElementById('popup').style.display = 'none';
      }, 1000);
    }  
    showPopup();
  });
  