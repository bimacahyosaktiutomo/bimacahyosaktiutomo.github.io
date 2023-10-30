feather.replace()   

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

document.onscroll = function() {
    const specs = document.querySelector('#specs');
    const nav = document.querySelector('nav');
    
    if(specs.getBoundingClientRect().top <= 0) { // if the distance of the 'specs' section to the browser top is smaller than 0
      nav.classList.add('dark'); // add dark font color
    } else {
      nav.classList.remove('dark'); // remove dark  font color
    }
}

function darkmode(){
    var sun = document.getElementById('sun');
    var moon = document.getElementById('moon');

    document.body.classList.toggle("dark");
    if (sun.style.display === 'none'){
        sun.style.display = 'block'
        moon.style.display = 'none'
    }else{
        sun.style.display = 'none'
        moon.style.display = 'block'
    }
}


// CRUD
function confirmDelete(id) {
    if (confirm("Konfirmasi Penghapusan Barang")) {
        window.location.href = "../include/inc_delete.php?id=" + id;
    }
}

function confirmDeleteUSR(id) {
    if (confirm("Konfirmasi Penghapusan User")) {
        window.location.href = "../include/inc_deleteUSR.php?id=" + id;
    }
}