/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 29);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/roundslider.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/roundslider.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Nazox - Responsive Bootstrap 4 Admin Dashboard
Author: Themesdesign
Contact: themesdesign.in@gmail.com
File: Round slider Init Js File
*/
// Slider Types
$("#default-slider").roundSlider({
  radius: 80,
  sliderType: "default",
  value: 42
});
$("#min-range").roundSlider({
  radius: 80,
  sliderType: "min-range",
  value: 46
});
$("#range").roundSlider({
  radius: 80,
  sliderType: "range",
  value: 54
}); // Slider circle shapes

$("#quarter-top-left").roundSlider({
  radius: 80,
  circleShape: "quarter-top-left",
  sliderType: "min-range",
  showTooltip: false,
  value: 50
});
$("#half-top").roundSlider({
  radius: 80,
  circleShape: "half-top",
  sliderType: "min-range",
  showTooltip: false,
  value: 50
}); // example

$("#square-roundslider").roundSlider({
  radius: 80,
  width: 14,
  handleSize: "24,12",
  handleShape: "square",
  sliderType: "min-range",
  value: 38
});
$("#handleshape-dot").roundSlider({
  radius: 80,
  width: 8,
  handleSize: "+16",
  handleShape: "dot",
  sliderType: "min-range",
  value: 65
});
$("#border-roundslider").roundSlider({
  radius: 80,
  width: 10,
  handleSize: "+10",
  sliderType: "range",
  value: "10,60"
});
$("#outer-border").roundSlider({
  radius: 80,
  width: 14,
  handleSize: "+0",
  sliderType: "range",
  value: "5,55"
});
$("#outer-border-dot").roundSlider({
  radius: 80,
  width: 0,
  handleSize: 16,
  handleShape: "square",
  value: 60
});
$("#handle-arrow").roundSlider({
  sliderType: "min-range",
  radius: 105,
  width: 16,
  value: 75,
  handleSize: 0,
  handleShape: "square",
  circleShape: "half-top",
  showTooltip: false
});
$("#handle-arrow-dashed").roundSlider({
  sliderType: "min-range",
  radius: 105,
  width: 16,
  value: 75,
  handleSize: 0,
  handleShape: "square",
  circleShape: "half-top",
  showTooltip: false
});

/***/ }),

/***/ 29:
/*!******************************************************!*\
  !*** multi ./resources/js/pages/roundslider.init.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /opt/lampp/htdocs/projeto-tenancy/admin/resources/js/pages/roundslider.init.js */"./resources/js/pages/roundslider.init.js");


/***/ })

/******/ });