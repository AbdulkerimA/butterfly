// on scroll side reveal animation for section two elements

let reveal = () => {
    let reveals = document.querySelectorAll(".reveal");

    for (let i=0; i<reveals.length; i++){
        let viewPort = window.innerHeight;
        let boxTop = reveals[i].getBoundingClientRect().top;
        let point = 150;

        if(boxTop < viewPort - point){
            reveals[i].classList.add("active");
        }
        else {
            reveals[i].classList.remove("active");
        }
    }
}
window.addEventListener("scroll",reveal);
