// const burger = document.getElementById("burger");
// let ul = document.querySelector('.burger-links')


// burger.addEventListener("click",menu)

// function menu(e) {
//     let target = e.target;
//     console.log(name)
//     if (target.getAttribute("data-name") === 'menu') {
//         e.target.setAttribute("data-name", "close");
//         console.log(ul)
//         ul.classList.remove('pointer-events-none')
//         ul.classList.add('pointer-events-auto')
//         ul.classList.remove('opacity-0')
//         ul.classList.add('opacity-100')
//         ul.classList.remove('top-[-400px]')
//     } else{
//         console.log(ul)
//         e.target.setAttribute("data-name", "menu");
//         ul.classList.add('opacity-0')
//         ul.classList.add('pointer-events-none')
//         ul.classList.remove('pointer-events-auto')
//         ul.classList.remove('opacity-100')
//     }
// }
// const body = document.body;
// const header = document.querySelector("navbar");
// const main = document.querySelector("document");
// const headerHeight = document.querySelector("header").offsetHeight;
// main.style.top = headerHeight + "px";
// let lastScroll = 0;
// window.addEventListener("scroll", () => {
//   let currentScroll = window.pageYOffset;
//   if (currentScroll - lastScroll > 0) {
//     header.classList.add("scroll-down");
//     header.classList.remove("scroll-up");
//   } else {
//     // scrolled up -- header show
//     header.classList.add("scroll-up");
//     header.classList.remove("scroll-down");
//   }
//   lastScroll = currentScroll;
// })