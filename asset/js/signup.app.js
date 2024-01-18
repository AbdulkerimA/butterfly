//
//alert("hi i fine");

// size of the container
let con_size = () => {
    var height = window.innerHeight;
    var width = window.innerWidth;
    
    document.getElementById("cont").style.height = height+"px";
    document.getElementById("cont").style.width = width+"px";
}
setInterval(con_size,100);

let side_image_size_setter = () =>{
    let height = document.getElementById("form").offsetHeight;
    let width = document.getElementById("form").offsetWidth;

    document.getElementById("side-img").style.height = height+"px";
    document.getElementById("side-img").style.width = width+20+"px";
}
setInterval(side_image_size_setter,100);


var alertdisable = () => {
    document.getElementById("error").style.display="none";
}