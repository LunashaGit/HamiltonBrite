/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./public/ressources/js/app.js":
/*!*************************************!*\
  !*** ./public/ressources/js/app.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! ../../../../ressources/js/nav.js */ "./public/ressources/js/nav.js");

/***/ }),

/***/ "./public/ressources/js/nav.js":
/*!*************************************!*\
  !*** ./public/ressources/js/nav.js ***!
  \*************************************/
/***/ (() => {

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
var burger = document.getElementById("burger");
var ul = document.querySelector('.burger-links');
burger.addEventListener("click", menu);

function menu(e) {
  var target = e.target;
  console.log(name);

  if (target.getAttribute("data-name") === 'menu') {
    e.target.setAttribute("data-name", "close");
    console.log(ul);
    ul.classList.remove('pointer-events-none');
    ul.classList.add('pointer-events-auto');
    ul.classList.remove('opacity-0');
    ul.classList.add('opacity-100');
    ul.classList.remove('top-[-400px]');
  } else {
    console.log(ul);
    e.target.setAttribute("data-name", "menu");
    ul.classList.add('opacity-0');
    ul.classList.add('pointer-events-none');
    ul.classList.remove('pointer-events-auto');
    ul.classList.remove('opacity-100');
  }
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
__webpack_require__(/*! ../../../../ressources/js/app */ "./public/ressources/js/app.js");
})();

// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!******************************!*\
  !*** ./resources/css/app.js ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin

})();

/******/ })()
;