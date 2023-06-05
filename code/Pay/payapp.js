
let price = 10;
let priceFild = document.getElementById("price");

let showPrice = () => {
    priceFild.innerHTML = "total price $" + price*sessionStorage.getItem("prodamount");
}
window.addEventListener("load",showPrice);

let pay = document.getElementById("pay");

let payed = () => {
    sessionStorage.clear();
}

pay.addEventListener("click",payed);