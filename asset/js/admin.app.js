// js application to controll admin page

// function that makes the dashbord height responsive
let dashbord = () => {
    var height = window.innerHeight-20;
    let width = window.innerWidth;
    let navbar = document.getElementById("nav");
    let width_nav = navbar.offsetWidth-5;

    //heihgt of the dashbord
    document.getElementById("nav").style.height = height+"px";
}


setInterval(dashbord,1);
