
let sales_section_width_height = () => {
    var height = window.innerHeight-20;
    let width = window.innerWidth;
    let navbar = document.getElementById("nav");
    let width_nav = navbar.offsetWidth-5;

    //heihgt of the dashbord
    document.getElementById("nav").style.height = height+"px";
    //width of right side panels
    document.getElementById("sec1").style.width=(width-(width_nav))+"px";

    // container width
    let sec1 = document.getElementById("sec1").offsetHeight;
    document.getElementById("container1").style.width=(width-(width_nav)-20)+"px";
    document.getElementById("container1").style.height = (height-sec1-50)+"px";
}
setInterval(sales_section_width_height,1);

let percentCalculator = () => {
    let percent = document.getElementById("num").textContent;
    let progress = document.getElementById("percent");
    //calculating the degree based on the percent
    let deg = (parseInt(percent)/100) * 360 ;
    progress.style.background = `conic-gradient(#b19990 ${deg}deg,#ffeedf 0deg)`;

}
setInterval(percentCalculator,100);

