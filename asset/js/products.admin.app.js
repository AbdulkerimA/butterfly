// app to controll dump product page

console.log("hi from pro app");

let dump_product_sec_width_height = () => {
    var height = window.innerHeight-80;
    let width = window.innerWidth;
    let navbar = document.getElementById("nav");
    let artic = document.getElementById("artic7").offsetHeight;
    let width_nav = navbar.offsetWidth-5;

    document.getElementById("artic7").style.width = (width-width_nav)+"px";
    document.getElementById("container2").style.height=(height-artic)+"px";
    
}

setInterval(dump_product_sec_width_height,100);

let del = document.getElementsByClassName("del");

for (let i=0; i < del.length ; i++){
    del[i].addEventListener('click',()=>{
        if(document.getElementsByClassName("amount")[i].textContent >= 1)
         --(document.getElementsByClassName("amount")[i].textContent);
        else
        {
            document.getElementsByClassName("product")[i].remove();
        } 
        
       });
}

// function to remove an element 
