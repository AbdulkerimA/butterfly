
let priceFild = document.getElementById("price");

let showPrice = () => {
    priceFild.innerHTML = "total price $" + sessionStorage.getItem("totalP");
}
window.addEventListener("load",showPrice);

let pay = document.getElementById("pay");

let payed = () => {
    sessionStorage.clear();
}

pay.addEventListener("click",payed);