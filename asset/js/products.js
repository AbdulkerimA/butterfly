// products page editor
//alert("i am fine");

let set_product_section_size = () => {
    let height = window.innerHeight;
    let width = window.innerWidth;

    // get the catagory section size 
    let catagory_width = document.getElementById("side-panel").offsetWidth;
    let catagory_height = document.getElementById("side-panel").offsetHeight;

    // calculating and seting the products section
    let remaining_width = width-catagory_width;

    document.getElementById("products").style.width = remaining_width+"px";
    document.getElementById("products").style.height= catagory_height+"px";

}

setInterval(set_product_section_size,100);


// request 

let loadProduct = (ptype) =>{

    // creat an obj
    const xhttp = new XMLHttpRequest();

    xhttp.onload = () => {
        if(xhttp.status == "200"){
            document.getElementById("products").innerHTML = xhttp.responseText;
        }
        else{
            document.getElementById("products").innerHTML = "there is some kind of error here";
        }
    }

    xhttp.open("post","/butterfly/scripts/products.script.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("ptype=" + ptype);
}

// adding class to the cart 
let enabled= false; // a bit to controll when to display a cart 

document.getElementById("cart").addEventListener("click",()=>{
    if (!enabled){
        document.getElementById("cart-display").classList.add("cart-visible");
        enabled=true;
    }
    else{
        document.getElementById("cart-display").classList.remove("cart-visible");
        enabled = false;
    }
    
});