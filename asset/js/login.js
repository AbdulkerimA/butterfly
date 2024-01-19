// js app for login page
let auto_size = () =>{
    screen_width = window.innerWidth-50;
    screen_height = window.innerHeight-50;
 
    // select elements from DOM
    let main = document.getElementById("main");

    // setting width and height of main
    main.style.width = screen_width+"px";
    main.style.height = screen_height+"px"
}

setInterval(auto_size,10);
//input styling
let user = document.getElementById("user");
let pass = document.getElementById("pass");

let username_handl = document.getElementById("username-handle");
let password_handl = document.getElementById("password-handl");

user.addEventListener('click',()=>{
    //alert("hi i am working");
    username_handl.style.top = 16+"px";
});
pass.addEventListener('click',()=>{
    //alert("hi i am working");
    password_handl.style.top = 70+"px";
});

// if the user press the place holders the same thing must be happned
username_handl.addEventListener('click',()=>{
    //alert("hi i am working");
    username_handl.style.top = 16+"px";
});
password_handl.addEventListener('click',()=>{
    //alert("hi i am working");
    password_handl.style.top = 70+"px";
});