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

//function 
let i=100
let numAnimation = () => {
        if (i <= numberOfview)
        document.querySelector(".view").innerHTML = i;
        if (i <=numberOfSell)
        document.querySelector(".sell").innerHTML = i;
        if ( i <= numberOfProduct)
        document.querySelector(".product").innerHTML = i;
        i=i+5
}
let caller = () => {
    setInterval(numAnimation,1);
}

let sec5 = document.getElementById("sec5");
sec5.addEventListener("mouseover",caller);






