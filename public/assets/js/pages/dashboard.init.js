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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/dashboard.init.js":
/*!**********************************************!*\
  !*** ./resources/js/pages/dashboard.init.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Nazox - Responsive Bootstrap 4 Admin Dashboard
Author: Themesdesign
Contact: themesdesign.in@gmail.com
File: Dashboard Init Js File
*/
// Line-column chart
var options = {
  series: [{
    name: '2020',
    type: 'column',
    data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
  }, {
    name: '2019',
    type: 'line',
    data: [23, 32, 27, 38, 27, 32, 27, 38, 22, 31, 21, 16]
  }],
  chart: {
    height: 280,
    type: 'line',
    toolbar: {
      show: false
    }
  },
  stroke: {
    width: [0, 3],
    curve: 'smooth'
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '20%'
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  colors: ['#5664d2', '#1cbb8c'],
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
};
var chart = new ApexCharts(document.querySelector("#line-column-chart"), options);
chart.render(); // donut chart

var options = {
  series: [42, 26, 15],
  chart: {
    height: 230,
    type: 'donut'
  },
  labels: ["Product A", "Product B", "Product C"],
  plotOptions: {
    pie: {
      donut: {
        size: '75%'
      }
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  colors: ['#5664d2', '#1cbb8c', '#eeb902']
};
var chart = new ApexCharts(document.querySelector("#donut-chart"), options);
chart.render(); // Radialchart 1

var radialoptions = {
  series: [72],
  chart: {
    type: 'radialBar',
    wight: 60,
    height: 60,
    sparkline: {
      enabled: true
    }
  },
  dataLabels: {
    enabled: false
  },
  colors: ['#5664d2'],
  stroke: {
    lineCap: 'round'
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: '70%'
      },
      track: {
        margin: 0
      },
      dataLabels: {
        show: false
      }
    }
  }
};
var radialchart = new ApexCharts(document.querySelector("#radialchart-1"), radialoptions);
radialchart.render(); // Radialchart 2

var radialoptions = {
  series: [65],
  chart: {
    type: 'radialBar',
    wight: 60,
    height: 60,
    sparkline: {
      enabled: true
    }
  },
  dataLabels: {
    enabled: false
  },
  colors: ['#1cbb8c'],
  stroke: {
    lineCap: 'round'
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: '70%'
      },
      track: {
        margin: 0
      },
      dataLabels: {
        show: false
      }
    }
  }
};
var radialchart = new ApexCharts(document.querySelector("#radialchart-2"), radialoptions);
radialchart.render(); // sparkline chart

var options = {
  series: [{
    data: [23, 32, 27, 38, 27, 32, 27, 34, 26, 31, 28]
  }],
  chart: {
    type: 'line',
    width: 80,
    height: 35,
    sparkline: {
      enabled: true
    }
  },
  stroke: {
    width: [3],
    curve: 'smooth'
  },
  colors: ['#5664d2'],
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function formatter(seriesName) {
          return '';
        }
      }
    },
    marker: {
      show: false
    }
  }
};
var chart = new ApexCharts(document.querySelector("#spak-chart1"), options);
chart.render();
var options = {
  series: [{
    data: [24, 62, 42, 84, 63, 25, 44, 46, 54, 28, 54]
  }],
  chart: {
    type: 'line',
    width: 80,
    height: 35,
    sparkline: {
      enabled: true
    }
  },
  stroke: {
    width: [3],
    curve: 'smooth'
  },
  colors: ['#5664d2'],
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function formatter(seriesName) {
          return '';
        }
      }
    },
    marker: {
      show: false
    }
  }
};
var chart = new ApexCharts(document.querySelector("#spak-chart2"), options);
chart.render();
var options = {
  series: [{
    data: [42, 31, 42, 34, 46, 38, 44, 36, 42, 32, 54]
  }],
  chart: {
    type: 'line',
    width: 80,
    height: 35,
    sparkline: {
      enabled: true
    }
  },
  stroke: {
    width: [3],
    curve: 'smooth'
  },
  colors: ['#5664d2'],
  tooltip: {
    fixed: {
      enabled: false
    },
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function formatter(seriesName) {
          return '';
        }
      }
    },
    marker: {
      show: false
    }
  }
};
var chart = new ApexCharts(document.querySelector("#spak-chart3"), options);
chart.render(); // vectormap

$('#usa-vectormap').vectorMap({
  map: 'us_merc_en',
  backgroundColor: 'transparent',
  regionStyle: {
    initial: {
      fill: '#e8ecf4',
      stroke: '#74788d',
      'stroke-width': 1,
      "stroke-opacity": 0.4
    }
  }
}); // datatable

$(document).ready(function () {
  $('.datatable').DataTable({
    "lengthMenu": [5, 10, 25, 50],
    "pageLength": 5,
    "columns": [{
      'orderable': false
    }, {
      'orderable': true
    }, {
      'orderable': true
    }, {
      'orderable': true
    }, {
      'orderable': true
    }, {
      'orderable': true
    }, {
      'orderable': false
    }],
    "order": [[1, "asc"]],
    "language": {
      "paginate": {
        "previous": "<i class='mdi mdi-chevron-left'>",
        "next": "<i class='mdi mdi-chevron-right'>"
      }
    },
    "drawCallback": function drawCallback() {
      $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
    }
  });
});

/***/ }),

/***/ 4:
/*!****************************************************!*\
  !*** multi ./resources/js/pages/dashboard.init.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/usuario/multi-tenancy/resources/js/pages/dashboard.init.js */"./resources/js/pages/dashboard.init.js");


/***/ })

/******/ });