
const header = document.querySelector('header');

function fixednavbar() {
    header.classList.toggle('scroll', window.pageYOffset > 0);
};

fixednavbar();

window.addEventListener('scroll', fixednavbar);

let menu = document.querySelector('#menu-btn');
let userbtn = document.querySelector('#user-btn');

menu.addEventListener('click', function () {
    let nav = document.querySelector('.navbar'); // Use the correct selector
    nav.classList.toggle('active');
});

userbtn.addEventListener('click', function (event) {
    event.preventDefault();
    let usebox = document.querySelector('.user-box'); // Use the correct selector
    usebox.classList.toggle('active');
});



/*---------------------testimonial scroll---------------------*/


// Initialize the slides variable

let slides=document.querySelectorAll('.testimonial-item');
let index=0;

function nextSlide(){
    slides[index].classList.remove('active');
    index=(index+1)%slides.length;
    slides[index].classList.add('active');
}

function prevSlide(){
    slides[index].classList.remove('active');
    index=(index-1+slides.length)%slides.length;
    slides[index].classList.add('active');
}


