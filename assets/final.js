// From Press to Pixel JavaScript File


// Home Page Carosel 
const image_sources = [
    
]

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
