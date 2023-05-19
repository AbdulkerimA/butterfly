// on scroll side reveal animation for section two elements

let reveal = () => {
    let reveals = document.querySelectorAll(".reveal");

    for (let i=0; i<reveals.length; i++){
        let viewPort = window.innerHeight;
        let boxTop = reveals[i].getBoundingClientRect().top;
        let point = 150;

        if(boxTop < viewPort - point){
            reveals[i].classList.add("active");
        }
        else {
            reveals[i].classList.remove("active");
        }
    }
}
window.addEventListener("scroll",reveal);

// secript for section five
let numberOfview = 200 ;
let numberOfSell = 341;
let numberOfProduct = 500;

// appending to the html
document.querySelector(".view").appendChild(document.createTextNode(numberOfview));
document.querySelector(".sell").appendChild(document.createTextNode(numberOfSell));
document.querySelector(".product").appendChild(document.createTextNode(numberOfProduct));





