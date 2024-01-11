// auto image changer for section 1
let imges = [
    './asset/pic/backgrounds/bg1.jpg',
    './asset/pic/backgrounds/bg2.jpg',
    './asset/pic/backgrounds/bg3.jpg',
    './asset/pic/backgrounds/bg4.jpg',
    './asset/pic/backgrounds/bg5.jpg',
    './asset/pic/backgrounds/bg6.jpg',
    './asset/pic/backgrounds/bg7.jpg'
];
// selecting the element
let section_one = document.getElementById("sec1");
let index = 0 ;
//fumction to change  images
let changeImage = () => {
    section_one.style.backgroundImage = "url('"+imges[index]+"')";
    if(index >= 6)
    index = 0;
    else
    index++;
}
// calling the function to change images in 3 sec
setInterval(changeImage,3000);

// add to cart function

let prodNum = sessionStorage.getItem("prodamount"); // number of product added to the cart

let addToCart = () => { 
    prodNum++;
    sessionStorage.setItem("prodamount",prodNum);
    document.getElementById("num").innerHTML = prodNum;
}

// chacking for number of product on  session storage 

window.addEventListener("load", () => {
    prodNum = sessionStorage.getItem("prodamount");
    if (prodNum == null)
    document.getElementById("num").innerHTML = 0;
    else
    document.getElementById("num").innerHTML = prodNum;
});


// function for nav bar to hide when scroll down

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-60px";
  }
  prevScrollpos = currentScrollPos;
}

// to make the nav bar transparent when it's in the area of sec1

let mainTop = document.querySelector(".main");
let makeTransparent = () => {
    if (mainTop.getBoundingClientRect().top < 0 ){
        document.querySelector("nav").classList.add("active");
    }
    else{
        document.querySelector("nav").classList.remove("active");
    }
}
setInterval(makeTransparent,1000);

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






