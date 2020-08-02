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
/******/ 	return __webpack_require__(__webpack_require__.s = 13);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/form-advanced.init.js":
/*!**************************************************!*\
  !*** ./resources/js/pages/form-advanced.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Nazox - Responsive Bootstrap 4 Admin Dashboard
Author: Themesdesign
Contact: themesdesign.in@gmail.com
File: Form Advanced Js File
*/
!function ($) {
  "use strict";

  var AdvancedForm = function AdvancedForm() {};

  AdvancedForm.prototype.init = function () {
    // Select2
    $(".select2").select2();
    $(".select2-limiting").select2({
      maximumSelectionLength: 2
    });
    $(".select2-search-disable").select2({
      minimumResultsForSearch: Infinity
    }); //colorpicker start

    $('.colorpicker-default').colorpicker({
      format: 'hex'
    });
    $('.colorpicker-rgba').colorpicker();
    $('#colorpicker-horizontal').colorpicker({
      color: "#88cc33",
      horizontal: true
    });
    $('#colorpicker-inline').colorpicker({
      color: '#DD0F20',
      inline: true,
      container: true
    }); //Bootstrap-TouchSpin

    var defaultOptions = {}; // touchspin

    $('[data-toggle="touchspin"]').each(function (idx, obj) {
      var objOptions = $.extend({}, defaultOptions, $(obj).data());
      $(obj).TouchSpin(objOptions);
    });
    $("input[name='demo3_21']").TouchSpin({
      initval: 40,
      buttondown_class: "btn btn-primary",
      buttonup_class: "btn btn-primary"
    });
    $("input[name='demo3_22']").TouchSpin({
      initval: 40,
      buttondown_class: "btn btn-primary",
      buttonup_class: "btn btn-primary"
    });
    $("input[name='demo_vertical']").TouchSpin({
      verticalbuttons: true
    }); //Bootstrap-MaxLength

    $('input#defaultconfig').maxlength({
      warningClass: "badge badge-info",
      limitReachedClass: "badge badge-warning"
    });
    $('input#thresholdconfig').maxlength({
      threshold: 20,
      warningClass: "badge badge-info",
      limitReachedClass: "badge badge-warning"
    });
    $('input#moreoptions').maxlength({
      alwaysShow: true,
      warningClass: "badge badge-success",
      limitReachedClass: "badge badge-danger"
    });
    $('input#alloptions').maxlength({
      alwaysShow: true,
      warningClass: "badge badge-success",
      limitReachedClass: "badge badge-danger",
      separator: ' out of ',
      preText: 'You typed ',
      postText: ' chars available.',
      validate: true
    });
    $('textarea#textarea').maxlength({
      alwaysShow: true,
      warningClass: "badge badge-info",
      limitReachedClass: "badge badge-warning"
    });
    $('input#placement').maxlength({
      alwaysShow: true,
      placement: 'top-left',
      warningClass: "badge badge-info",
      limitReachedClass: "badge badge-warning"
    });
  }, //init
  $.AdvancedForm = new AdvancedForm(), $.AdvancedForm.Constructor = AdvancedForm;
}(window.jQuery), //initializing
function ($) {
  "use strict";

  $.AdvancedForm.init();
}(window.jQuery);

/***/ }),

/***/ 13:
/*!********************************************************!*\
  !*** multi ./resources/js/pages/form-advanced.init.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /opt/lampp/htdocs/projeto-tenancy/admin/resources/js/pages/form-advanced.init.js */"./resources/js/pages/form-advanced.init.js");


/***/ })

/******/ });