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