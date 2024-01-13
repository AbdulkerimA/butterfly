// 

console.log("hi i am from users list");

let users_list_sec_width_height = () => {
    var height = window.innerHeight-80;
    let width = window.innerWidth;
    let navbar = document.getElementById("nav");
    let artic = document.getElementById("artic8").offsetHeight;
    let width_nav = navbar.offsetWidth-50;

    document.getElementById("artic8").style.width = (width-width_nav)+"px";
    document.getElementById("container3").style.height=(height-artic)+"px";
    document.getElementById("table").style.width =(width-width_nav-80)+"px";
    
}
setInterval(users_list_sec_width_height,100);
