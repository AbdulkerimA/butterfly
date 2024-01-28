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

// amount controller
let amnt_contorller = ()=>{
    
    let plus = document.querySelectorAll("#plus");
    let minus = document.querySelectorAll("#minus");
    let delete_ = document.querySelectorAll("#delete");

    // add amount of a single product to buy
    for(let i=0;i<plus.length;i++){
        plus[i].addEventListener("click",()=>{
            ++(document.querySelectorAll("#amunt")[i].innerText);
        });
    }

    // decreas amount of a single product to buy
    for(let i=0;i<minus.length;i++){
        minus[i].addEventListener("click",()=>{
            let amount = document.querySelectorAll("#amunt")[i].innerText;
            if (amount > 1){
                alert("hi");
                --(document.querySelectorAll("#amunt")[i].innerText);
            }
            else{
                document.querySelectorAll("#amunt")[i].parentElement.parentElement.remove();
            }
        });
    }

    //remove a product from the cart 
    for(let i=0;i<delete_.length;i++){
        delete_[i].addEventListener("click",()=>{
            document.querySelectorAll("#amunt")[i].parentElement.parentElement.remove();
        });
    }
}

amnt_contorller();

let privious_amount = 0;

let cart_elements = ()=>{
    
    let amount_of_element = document.querySelectorAll("#prod-cont");

    if(amount_of_element.length > 0 && privious_amount == 0){
        privious_amount = amount_of_element.length;
        console.log("seted in 0 ");
        console.log(privious_amount);
    } 

    if(amount_of_element.length < privious_amount || amount_of_element.length > privious_amount){
        privious_amount = amount_of_element.length;
        amnt_contorller();
        console.log("seted in 1");
        console.log(privious_amount);
    }
}

setInterval(cart_elements,100);