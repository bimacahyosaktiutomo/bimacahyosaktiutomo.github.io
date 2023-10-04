feather.replace()   

document.addEventListener('DOMContentLoaded',function(){
    const DarkModeOn = confirm("Gelap ?");
    if(DarkModeOn) {
        darkmode();
        localStorage.setItem("darkModeChoice", "true");
    }
})

window.addEventListener("load", function () {
    setTimeout(removeLoader,1000);
});

function removeLoader() {
    var loaderWrapper = document.querySelector(".loader-wrapper");
    if (loaderWrapper) {
        loaderWrapper.style.transition = "opacity 0.5s";
        loaderWrapper.style.opacity = "0";
        setTimeout(function () {
            if (loaderWrapper && loaderWrapper.parentNode) {
                loaderWrapper.parentNode.removeChild(loaderWrapper);
            }
        }, 500);
    }
}

var aboutme = document.getElementById('aboutme')
var menu = document.getElementById('show')
var close = document.getElementById('close')

var hamburgerVisible = false;

function hamburger() {
    if (window.innerWidth <= 768) {
        aboutme.style.display = hamburgerVisible ? 'flex' : 'none';
        menu.style.display = hamburgerVisible ? 'none' : 'block';
        close.style.display = hamburgerVisible ? 'block' : 'none';
    } else {
        aboutme.style.display = 'flex';
        menu.style.display = 'none';
        close.style.display = 'none';
    }
}

window.addEventListener("resize", hamburger);

hamburger();

function showMenu() {
    hamburgerVisible = !hamburgerVisible;
    hamburger();
}

function darkmode() {
    var badan = document.body
    var elementt = document.getElementsByTagName('nav')
    var element2 = document.getElementsByTagName('footer')
    var sun = document.getElementById('sun')
    var moon = document.getElementById('moon')
    var kartu = document.getElementsByClassName('card')
    var landing_img = document.getElementsByClassName('landing-image')

    // var cardImages = document.querySelectorAll('img.card-dark-mode');
    var cardImages = document.getElementsByClassName('card-img');
    
    badan.classList.toggle('dark-badan')
    
    for (var i = 0; i < elementt.length; i++) {
        elementt[i].classList.toggle('dark-mode');
    }
    for (var i = 0; i < element2.length; i++) {
        element2[i].classList.toggle('dark-mode');
    }
    for (var i = 0; i < kartu.length; i++) {
        kartu[i].classList.toggle('card-dark-mode')
    }
    
    if (sun.style.display === 'none'){
        for (var i = 0; i < landing_img.length; i++) {
            landing_img[i].style.filter = 'brightness(50%)'
        }
        for (var i = 0; i < cardImages.length; i++) {
            // cardImages[i].classList.toggle('card-gambar-dark-mode');
            cardImages[i].style.backgroundColor = 'transparent';
        }
        sun.style.display = 'block'
        moon.style.display = 'none'
    }else{
        for (var i = 0; i < landing_img.length; i++) {
            landing_img[i].style.filter = 'brightness(100%)'
        }
        for (var i = 0; i < cardImages.length; i++) {
            // cardImages[i].classList.toggle('card-gambar-dark-mode');
            cardImages[i].style.backgroundColor = 'white';
        }
        sun.style.display = 'none'
        moon.style.display = 'block'
    }
    
}

function showCard(button) {
    var card = button.closest('.card'); 
    var descrip = card.querySelector('.descrip'); 
    var buttondown = card.querySelector('.arrow-down'); 
    var buttonup = card.querySelector('.arrow-up');

    if (descrip.style.display === 'none' || descrip.style.display === '') {
        descrip.style.display = 'block';
        buttondown.style.display = 'none';
        buttonup.style.display = 'block';
    } else {
        descrip.style.display = 'none';
        buttondown.style.display = 'block';
        buttonup.style.display = 'none';
    }
}