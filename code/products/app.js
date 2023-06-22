
// adding to the cart 

let products = [
    "diary milk","caramels","blue","maltesers",
    "ferrero rocher","Kitkat caramel","maltesers","m&m's",
    "milk chocolate","kitkat","toblerone","chocolat box",
    "verkade","quality street","toblerone","twirl"
]; // a list of products name 

const price = [
    4,10.5,8.5,3,
    4,10.5,8.5,3,
    4,10.5,8.5,3,
    4,10.5,8.5,3
]; // list of price for eqch products

let imgsrc = [
    "./../../resource/pic/products/1.jpg",
    "./../../resource/pic/products/caramels.jpg",
    "./../../resource/pic/products/create-your-own-6-bar-letterbox-selection-450x450.jpg",
    "./../../resource/pic/products/darkmaltesers.jpg",
    "./../../resource/pic/products/ferrerorochertjpg.jpg ",
    "./../../resource/pic/products/kitkat.jpg",
    "./../../resource/pic/products/maltesers.jpg",
    "./../../resource/pic/products/mandmprotein.jpg",
    "./../../resource/pic/products/Milk-Chocolate-Bar.jpg",
    "./../../resource/pic/products/kitkat.jpg",
    "./../../resource/pic/products/shopping.png",
    "./../../resource/pic/products/shopping2.png",
    "./../../resource/pic/products/shopping3.png",
    "./../../resource/pic/products/shopping4.png",
    "./../../resource/pic/products/super-toblerone-giant-chocolate.jpg",
    "./../../resource/pic/products/twirlorangeresized.png"
]; // list of product images

let addToCartButt = document.querySelectorAll("#addToCart"); // getting all the buttons on the prod page
let deleteFromCartB ;
let prodOnCart = sessionStorage.getItem("prodnum"); // number of product selected
let totalprice = sessionStorage.getItem("totalP");
// function to display nuber of added products in the cart 

let addToCart = ( prodprice ) => {
    prodOnCart++;
    totalprice += prodprice; // price of added products

    sessionStorage.setItem("totalP",totalprice);
    sessionStorage.setItem("prodnum",prodOnCart);
    
    //document.getElementById("prodnum").innerHTML = prodOnCart;
    document.getElementById("pay").innerHTML = "Total $ " + totalprice;

}// this func only affects the session storage and the header on cart sec

// function to create the replica of an added produnct

let addpro = ( productName,img) => {
    
    let box = document.createElement("div"); // 
    let pname = document.createTextNode(productName);
    let imgNode = document.createElement("img");
    let cancel = document.createElement("div");
    imgNode.src = img;

    box.classList.add("box");

    cancel.innerHTML = "<i id=\"deleteElement\" class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>"

    box.appendChild(imgNode);
    box.appendChild(pname);
    box.appendChild(cancel);


    document.getElementById("cartsec").appendChild(box);
}

 // deleting an item from car tlist 
 
let deletepro = ( element ) => {
    // making the element disapear 
    element.parentElement.parentElement.remove();

    /*
    // decreaing number of pro
    prodOnCart--;
    sessionStorage.setItem("prodnum",prodOnCart);
    document.getElementById("prodnum").innerHTML = prodOnCart;

    // decrising total amount of price */
}


// onload event to inisilize the sessionStorage or prodOnCart

 window.addEventListener("load",() => {
    //prodOnCart = sessionStorage.getItem("prodnum");
    totalprice = sessionStorage.getItem("totalP");
/*
    if (prodOnCart == null || prodOnCart == "NaN" ) {
        prodOnCart = 0;
        document.getElementById("prodnum").innerHTML = prodOnCart;
    }
    
    else
    document.getElementById("prodnum").innerHTML = prodOnCart;
*/
    // chaking if there is an order that is not payed 
    if (totalprice != null )
    document.getElementById("pay").innerHTML = "total $ "+ totalprice;
    else
    document.getElementById("pay").innerHTML = "total $ "+ 0;

});



let checkingCartList = () => {
    
    deleteFromCartB = document.querySelectorAll("#deleteElement");

   for (let i=0 ; i<deleteFromCartB.length; i++){
       deleteFromCartB[i].addEventListener("click",() => {
           deletepro(deleteFromCartB[i]);
       });
   }
}


// loop to identify which product is selected and to listen for an event on all add to cart buttons 

for (let i=0 ; i<addToCartButt.length; i++){
    addToCartButt[i].addEventListener("click",() => {
        addpro(products[i],imgsrc[i]);
        addToCart(price[i]);
        checkingCartList();
    });
}



//setInterval(checkingCartList,1000);