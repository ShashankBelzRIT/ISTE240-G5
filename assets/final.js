// From Press to Pixel JavaScript File


// Home Page Carosel 
const image_sources = [
    "assets/images/home/newspaper1.jpg",
    "assets/images/home/newspaper2.jpg",
    "assets/images/home/newspaper3.jpg",
    "assets/images/home/newspaper4.jpg",
    "assets/images/home/newspaper5.jpg"
]

//sources:
// newspaper 1 - https://www.neh.gov/divisions/preservation/featured-project/turning-the-page-the-us-newspaper-program-1982-2011
// newspaper2 - https://www.istockphoto.com/search/2/image-film?phrase=digital+news+headlines
// newspaper 3 - https://www.meisterdrucke.us/fine-art-prints/Company-Byron/1059771/A-Newspaper-Stand.html
// newpaper 4 - https://stockcake.com/i/busy-newsroom-activity_1413886_585651
// newspaper 5 - https://www.istockphoto.com/search/2/image-film?phrase=digital+news+headlines

var img_index = 0;
function right(){
    img_index++;
    if (img_index > image_sources.length){
        img_index = 0;
    }

    const imgElement = document.getElementById("image");
    // console.log(image_sources[img_index]);
    imgElement.src = image_sources[img_index];
}

function left(){
    img_index--;

    if (img_index < 0){
        img_index = image_sources.length - 1;
    }

    const imgElement = document.getElementById("image");
    imgElement.src = image_sources[img_index];
}

let timer = 0;
let timerInterval;

function auto(){
    right();
}

document.addEventListener("DOMContentLoaded", () => {
    timerInterval = setInterval(auto, 3000);
});


//Hamburger
<<<<<<< HEAD

const hamburger = document.getElementById('hamburgerBtn');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

// let hamburger = document.getElementById('hamburgerBtn');
// console.log('The Hamburger: ');
// console.dir(hamburger);
// hamburger.addEventListener('click', clickMenu);

// function clickMenu() {
//     let nav = getNav();

//     for (let i = 0, l = nav.classList.length; i < l; i++) {
//         if (nav.classList[i] === 'shown') {
//             nav.classList.remove('shown');
//             return;
//         }
//     }

=======
// let hamburger = document.getElementById('hamburgerBtn');
// console.log('The Hamburger: ');
// console.dir(hamburger);
// hamburger.addEventListener('click', clickMenu);

// function clickMenu() {
//     let nav = getNav();

//     for (let i = 0, l = nav.classList.length; i < l; i++) {
//         if (nav.classList[i] === 'shown') {
//             nav.classList.remove('shown');
//             return;
//         }
//     }

>>>>>>> 89a073defb200677e46df7cdc23eef0123a55209
//     nav.classList.add('shown');
// }

// function getNav() {
//     let navElements = document.getElementsByTagName('nav');

//     if (navElements.length <= 0) {
//         console.error('There was a problem finding the nav element.');
//     }

//     return navElements[0];
// }
<<<<<<< HEAD
=======

const navbar = document.getElementById('hamburger');
if (navbar) {
    navbar.addEventListener('click', toggleNavigation);
}
function toggleNavigation() {
    const menu = document.getElementsByClassName('navigation')[0];
    if (!menu) {
        return;
    }
    menu.classList.toggle('shown');
    navbar.classList.toggle('shown');
}
>>>>>>> 89a073defb200677e46df7cdc23eef0123a55209
