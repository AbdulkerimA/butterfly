
let priceFild = document.getElementById("price");

// showing the amount of price that we are going to pay

let showPrice = () => {

    if(sessionStorage.getItem("totalP") != null)
    priceFild.innerHTML = "total price $" + sessionStorage.getItem("totalP");
    else
    priceFild.innerHTML = "total price $" + 0;
}

window.addEventListener("load", () => {
    showPrice();
});

let pay = document.getElementById("pay");

let payed = () => {
    sessionStorage.clear();
}

pay.addEventListener("click", () => {
        payed();
    
});