// js application to controll admin page

// function that makes the dashbord height responsive
let dashbord = () => {
    var height = window.innerHeight-20;
    let width = window.innerWidth;
    let navbar = document.getElementById("nav");
    let width_nav = navbar.offsetWidth-5;

    //heihgt of the dashbord
    document.getElementById("nav").style.height = height+"px";
    //width of right side panels
    //document.getElementById("sec1").style.width=(width-(width_nav))+"px";
    // addproduct section
    document.getElementById("sec5").style.width=(width-width_nav)+"px";
    document.getElementById("sec6").style.width=(width-width_nav)+"px";
    document.getElementById("sec6").style.height= height+"px";
}


setInterval(dashbord,1);

let percentCalculator = () => {
    let percent = document.getElementById("num").textContent;
    let progress = document.getElementById("percent");
    // calculating the degree based on the percent
    let deg = (parseInt(percent)/100) * 360 ;
    progress.style.background = `conic-gradient(#b19990 ${deg}deg,#ffeedf 0deg)`;

}

setInterval(percentCalculator,100);


// product number controller 
let minus = document.getElementById("minus");
let product_number = documetn.getElementById("pnumbr");
let add = document.getElementById("plus");

minus.addEventListener('click',() => {
    let pnumber = parseInt(product_number.textContent);
    pnumber--;
    product_number.textContent = pnumber;
});

