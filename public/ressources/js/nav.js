const burger = document.getElementById("burger");
let ul = document.querySelector('.burger-links')


burger.addEventListener("click",menu)

function menu(e) {
    let target = e.target;
    console.log(name)
    if (target.getAttribute("data-name") === 'menu') {
        e.target.setAttribute("data-name", "close");
        console.log(ul)
        ul.classList.remove('pointer-events-none')
        ul.classList.add('pointer-events-auto')
        ul.classList.remove('opacity-0')
        ul.classList.add('opacity-100')
        ul.classList.remove('top-[-400px]')
    } else{
        console.log(ul)
        e.target.setAttribute("data-name", "menu");
        ul.classList.add('opacity-0')
        ul.classList.add('pointer-events-none')
        ul.classList.remove('pointer-events-auto')
        ul.classList.remove('opacity-100')
    }
}

var lastScrollTop;
navbar = document.getElementById('navbar');
window.addEventListener('scroll',function(){
var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
if(scrollTop > lastScrollTop){
navbar.style.top='-80px';
}
else{
navbar.style.top='0';
}
lastScrollTop = scrollTop;
});