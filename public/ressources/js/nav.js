// document.addEventListener('DOMContentLoaded', function () {
//     // Get all "navbar-burger" elements
//     let $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
//     // Check if there are any navbar burgers
//     if ($navbarBurgers.length > 0) {
//         // Add a click event on each of them
//         $navbarBurgers.forEach(function ($el) {
//             $el.addEventListener('click', function () {
//                 // Get the "main-nav" element
//                 let $target = document.getElementById('main-nav');
//                 // Toggle the class on "main-nav"
//                 $target.classList.toggle('hidden');
//             });
//         });
//     }
// });
//
// function Menu(e) {
//     let list = document.querySelectorAll('.burger-links');
//     e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]')list.classList.add('opacity-100')
// ) :
//     (e.name = "menu" , list.classList.remove('top-[80px]')
//         , list.classList.remove('opacity-100'))
// }
//
// let list = document.querySelectorAll('.burger-links');

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
