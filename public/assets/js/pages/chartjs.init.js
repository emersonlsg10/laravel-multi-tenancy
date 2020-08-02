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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/chartjs.init.js":
/*!********************************************!*\
  !*** ./resources/js/pages/chartjs.init.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Nazox - Responsive Bootstrap 4 Admin Dashboard
Author: Themesdesign
Contact: themesdesign.in@gmail.com
File: ChartJs init Js File
*/
!function ($) {
  "use strict";

  var ChartJs = function ChartJs() {};

  ChartJs.prototype.respChart = function (selector, type, data, options) {
    Chart.defaults.global.defaultFontColor = "#8791af", Chart.defaults.scale.gridLines.color = "rgba(166, 176, 207, 0.1)"; // get selector by context

    var ctx = selector.get(0).getContext("2d"); // pointing parent container to make chart js inherit its width

    var container = $(selector).parent(); // enable resizing matter

    $(window).resize(generateChart); // this function produce the responsive Chart JS

    function generateChart() {
      // make chart width fit with its container
      var ww = selector.attr('width', $(container).width());

      switch (type) {
        case 'Line':
          new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
          });
          break;

        case 'Doughnut':
          new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
          });
          break;

        case 'Pie':
          new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
          });
          break;

        case 'Bar':
          new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
          });
          break;

        case 'Radar':
          new Chart(ctx, {
            type: 'radar',
            data: data,
            options: options
          });
          break;

        case 'PolarArea':
          new Chart(ctx, {
            data: data,
            type: 'polarArea',
            options: options
          });
          break;
      } // Initiate new chart or Redraw

    }

    ; // run function - render chart at first load

    generateChart();
  }, //init
  ChartJs.prototype.init = function () {
    //creating lineChart
    var lineChart = {
      labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
      datasets: [{
        label: "Sales Analytics",
        fill: true,
        lineTension: 0.5,
        backgroundColor: "rgba(85, 110, 230, 0.2)",
        borderColor: "#5664d2",
        borderCapStyle: 'butt',
        borderDash: [],
        borderDashOffset: 0.0,
        borderJoinStyle: 'miter',
        pointBorderColor: "#5664d2",
        pointBackgroundColor: "#fff",
        pointBorderWidth: 1,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "#5664d2",
        pointHoverBorderColor: "#fff",
        pointHoverBorderWidth: 2,
        pointRadius: 1,
        pointHitRadius: 10,
        data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80]
      }, {
        label: "Monthly Earnings",
        fill: true,
        lineTension: 0.5,
        backgroundColor: "rgba(252, 185, 44, 0.2)",
        borderColor: "#fcb92c",
        borderCapStyle: 'butt',
        borderDash: [],
        borderDashOffset: 0.0,
        borderJoinStyle: 'miter',
        pointBorderColor: "#fcb92c",
        pointBackgroundColor: "#fff",
        pointBorderWidth: 1,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "#fcb92c",
        pointHoverBorderColor: "#eef0f2",
        pointHoverBorderWidth: 2,
        pointRadius: 1,
        pointHitRadius: 10,
        data: [80, 23, 56, 65, 23, 35, 85, 25, 92, 36]
      }]
    };
    var lineOpts = {
      scales: {
        yAxes: [{
          ticks: {
            max: 100,
            min: 20,
            stepSize: 10
          }
        }]
      }
    };
    this.respChart($("#lineChart"), 'Line', lineChart, lineOpts); //donut chart

    var donutChart = {
      labels: ["Desktops", "Tablets"],
      datasets: [{
        data: [300, 210],
        backgroundColor: ["#5664d2", "#ebeff2"],
        hoverBackgroundColor: ["#5664d2", "#ebeff2"],
        hoverBorderColor: "#fff"
      }]
    };
    this.respChart($("#doughnut"), 'Doughnut', donutChart); //Pie chart

    var pieChart = {
      labels: ["Desktops", "Tablets"],
      datasets: [{
        data: [300, 180],
        backgroundColor: ["#1cbb8c", "#ebeff2"],
        hoverBackgroundColor: ["#1cbb8c", "#ebeff2"],
        hoverBorderColor: "#fff"
      }]
    };
    this.respChart($("#pie"), 'Pie', pieChart); //barchart

    var barChart = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
        label: "Sales Analytics",
        backgroundColor: "rgba(28, 187, 140, 0.8)",
        borderColor: "rgba(28, 187, 140, 0.8)",
        borderWidth: 1,
        hoverBackgroundColor: "rgba(28, 187, 140, 0.9)",
        hoverBorderColor: "rgba(28, 187, 140, 0.9)",
        data: [65, 59, 81, 45, 56, 80, 50, 20]
      }]
    };
    var barOpts = {
      scales: {
        xAxes: [{
          barPercentage: 0.4
        }]
      }
    };
    this.respChart($("#bar"), 'Bar', barChart, barOpts); //radar chart

    var radarChart = {
      labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
      datasets: [{
        label: "Desktops",
        backgroundColor: "rgba(252, 185, 44, 0.2)",
        borderColor: "#fcb92c",
        pointBackgroundColor: "#fcb92c",
        pointBorderColor: "#fff",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "#fcb92c",
        data: [65, 59, 90, 81, 56, 55, 40]
      }, {
        label: "Tablets",
        backgroundColor: "rgba(84, 56, 220, 0.2)",
        borderColor: "#5664d2",
        pointBackgroundColor: "#5664d2",
        pointBorderColor: "#fff",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "#5664d2",
        data: [28, 48, 40, 19, 96, 27, 100]
      }]
    };
    this.respChart($("#radar"), 'Radar', radarChart); //Polar area  chart

    var polarChart = {
      datasets: [{
        data: [11, 16, 7, 18],
        backgroundColor: ["#fcb92c", "#1cbb8c", "#ff3d60", "#5664d2"],
        label: 'My dataset',
        // for legend
        hoverBorderColor: "#fff"
      }],
      labels: ["Series 1", "Series 2", "Series 3", "Series 4"]
    };
    this.respChart($("#polarArea"), 'PolarArea', polarChart);
  }, $.ChartJs = new ChartJs(), $.ChartJs.Constructor = ChartJs;
}(window.jQuery), //initializing
function ($) {
  "use strict";

  $.ChartJs.init();
}(window.jQuery);

/***/ }),

/***/ 2:
/*!**************************************************!*\
  !*** multi ./resources/js/pages/chartjs.init.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /opt/lampp/htdocs/projeto-tenancy/admin/resources/js/pages/chartjs.init.js */"./resources/js/pages/chartjs.init.js");


/***/ })

/******/ });