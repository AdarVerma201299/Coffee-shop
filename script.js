const header = document.querySelector('header');

function fixednavbar() {
    header.classList.toggle('scroll', window.pageYOffset > 0);
};

fixednavbar();

window.addEventListener('scroll', fixednavbar);

let menu = document.querySelector('#menu-btn');
let userbtn = document.querySelector('#user-btn');

menu.addEventListener("click", function () {
    let nav = document.querySelector('.navbar'); // Use the correct selector
    nav.classList.toggle('active');
});

userbtn.addEventListener("click", function (event) {
    event.preventDefault();
    let usebox = document.querySelector('.user-box'); // Use the correct selector
    usebox.classList.toggle('active');
});


/*---------------------home page---------------------*/
"use strict"
let leftArrow = document.querySelector('.left-arrow .bxs-left-arrow'),
    rightArrow = document.querySelector('.right-arrow .bxs-right-arrow'),
    slider = document.querySelector('.slider'); 

/*---------------------scroll to right---------------------*/

function scrollRight(){
    if(slider.scrollWidth - slider.clientWidth == slider.scrollLeft){
        slider.scrollTo({
            left: 0,
            behavior: "smooth"
        });
    } else {
        slider.scrollBy({
            left: window.innerWidth,
            behavior: "smooth"
        });
    }
}

/*---------------------scroll to left---------------------*/

function scrollLeft(){
    slider.scrollBy({
        left: -window.innerWidth,
        behavior: "smooth"
    });
}

let timerId = setInterval(scrollRight, 7000);

/*---------------------reset timer to scroll right---------------------*/
function resetTimer(){
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 7000);
}

/*---------------------scroll event---------------------*/

slider.addEventListener("click", function(ev){
    if(ev.target === leftArrow){
        scrollLeft();
        resetTimer();
    } else if(ev.target === rightArrow){
        scrollRight();
        resetTimer();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    function showPopup() {
      document.getElementById('popup').style.display = 'flex';

      setTimeout(function () {
        document.getElementById('popup').style.display = 'none';
      }, 3000);
    }  
    showPopup();
  });
  