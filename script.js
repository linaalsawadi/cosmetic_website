const header = document.querySelector('header');
function fixedNavbar(){
    header.classList.toggle('scroll', window.pageYOffset > 0)
}
fixedNavbar();
window.addEventListener('scroll',fixedNavbar);

let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click' , function(){
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
})

userBtn.addEventListener('click' , function(){
    let userBox = document.querySelector('.user-box');
    userBox.classList.toggle('active');
})

/*---------------------Home Page Slider---------------------*/
"use strict"
const leftArrow = document.querySelector('.left-arrow .bxs-left-arrow'),
    rightArrow = document.querySelector('.right-arrow .bxs-right-arrow'),
    slider = document.querySelector('.slider');

/*---------------------Scroll To Right---------------------*/
function scrollRight(){
    if(slider.scrollWidth - slider.clientWidth === slider.scrollLeft){
        slider.scrollTo({
            left: 0,
            behavior: "smooth"
        });
    }
    else{
        slider.scrollBy({
            left: window.innerWidth, 
            behavior: "smooth"
        })/*;*/
    }
}
/*---------------------Scroll To Left---------------------*/
function scrollLeft(){
    slider.scrollBy({
        left: -window.innerWidth, 
        behavior: "smooth"
    
    })
}

let timerId = setInterval(scrollRight, 4000);

/*---------------------Reset Timer To Scroll Right---------------------*/

function resetTimer(){
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 4000);
}

/*---------------------Scroll Event---------------------*/

slider.addEventListener('click', function(ev){
    if(ev.target === leftArrow){
        scrollLeft();
        resetTimer();
    }
})

slider.addEventListener('click', function(ev){
    if(ev.target === rightArrow){
        scrollRight();
        resetTimer();
    }
})

/*---------------------Testimonial Slider---------------------*/

let slides = document.querySelectorAll('.testimonial-item');
let index = 0;

function nextSlide(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
    }

function prevSlide(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');

    }