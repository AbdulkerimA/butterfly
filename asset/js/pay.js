// 

let sizeControll = () =>{
    
    let height = window.innerHeight;
    let width = window.innerWidth;

    document.getElementById("container").style.height = height+"px";
    document.getElementById("container").style.width = width+"px";
}

setInterval(sizeControll,100);

let changeBg = (id) =>{
    document.getElementById(id).style.backgroundColor = "whitesmoke";
}