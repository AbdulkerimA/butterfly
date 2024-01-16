
let addpro_width_height = () => {
    var height = window.innerHeight-20;
    let width = window.innerWidth;
    let navbar = document.getElementById("nav");
    let width_nav = navbar.offsetWidth-5;

    //heihgt of the dashbord
    document.getElementById("nav").style.height = height+"px";
    //width of right side panels
    // addproduct section
    document.getElementById("sec5").style.width=(width-width_nav)+"px";
    document.getElementById("sec6").style.width=(width-width_nav)+"px";
    document.getElementById("sec6").style.height= height+"px";
}


setInterval(addpro_width_height,1);

let minus = document.getElementById("minus");
let add = document.getElementById("plus");

minus.addEventListener('click',() => {
   // decresing the value by 1 ervy time the minus button is clicked
   if(document.getElementById("pnumber").textContent <= 1)
    alert("the lowest product you can add is 1 ");
   else
    --(document.getElementById("pnumber").textContent);
});

// adding the number of a product every time the add button is clicked
add.addEventListener('click',() => {
    // decresing the value by 1 ervy time the minus button is clicked
    ++(document.getElementById("pnumber").textContent);
 });


// product image preview function 

let preview = () => {
    //alert("hi");
    let inputImg = document.getElementById("upload-file");
    let preview_on = document.getElementById("image_preview");

    let file = inputImg.files[0];
    let reader = new FileReader();

    reader.onload = function(e){
        preview_on.src = e.target.result;
    }

    reader.readAsDataURL(file);
}

