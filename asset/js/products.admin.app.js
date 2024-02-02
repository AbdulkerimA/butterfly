// app to controll dump product page

//console.log("hi from pro app");

let dump_product_sec_width_height = () => {
    var height = window.innerHeight-80;
    let width = window.innerWidth;
    let navbar = document.getElementById("nav");
    let artic = document.getElementById("artic7").offsetHeight;
    let width_nav = navbar.offsetWidth-5;

    document.getElementById("artic7").style.width = (width-width_nav)+"px";
    document.getElementById("container2").style.height=(height-artic)+"px";
    document.getElementById("container2").style.height = (navbar.offsetHeight-80)+"px";
    
}

setInterval(dump_product_sec_width_height,100);


let numOfprod = document.querySelectorAll(".row");
let pName = document.querySelectorAll(".pName");

for (let i=0;i<numOfprod.length;i++){
    document.getElementById("Delete"+i).addEventListener("click",()=>{
       
        //alert("i am working");
        
        const xhttp = new XMLHttpRequest();
        xhttp.onload = () =>{
            //document.getElementById("tbody").innerHTML = xhttp.responseText;
            location.reload();
        }
        xhttp.open("post","./pupdate.script.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("productname=" + pName[i].innerText);
    
    });
}


// update product 
let Price = document.querySelectorAll(".price");

for (let i=0;i<Price.length;i++){
    document.getElementById("update"+i).addEventListener("click",()=>{
        
                const xhttp = new XMLHttpRequest();
                xhttp.onload = () =>{
                    if(xhttp.responseText != "error"){
                        Price[i].value = xhttp.responseText;
                        //document.getElementById("notification").innerText = "successfuly updated";
                    }
                }
                xhttp.open("post","./pupdate.script.php");
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("price=" + Price[i].value +"&&pname=" + pName[i].innerText);
    });
}

