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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 227);
/******/ })
/************************************************************************/
/******/ ({

/***/ 227:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(228);


/***/ }),

/***/ 228:
/***/ (function(module, exports) {

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    responsive: true,
    type: 'horizontalBar',
    data: {
        labels: ["Activity Management", "Quality Control", "Customer Expirience"],
        datasets: [{
            label: 'Total Score',
            data: response,
            backgroundColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx2 = document.getElementById("activity_chart");
var myChart2 = new Chart(ctx2, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["SDC Production", "SDC Service"],
        datasets: [{
            label: 'Data presented on Percentage (%)',
            data: [response_activity[0], response_activity[2]],
            backgroundColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    max: 100
                }
            }]
        },
        annotation: {
            annotations: [{
                type: 'line',
                id: 'hline1',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: response_activity[1],
                borderColor: 'green',
                borderWidth: 1,
                label: {
                    enabled: true,
                    backgroundColor: 'green',
                    fontSize: 10,
                    position: "left",
                    content: 'Production Goal ' + response_activity[1] + '%'
                }
            }, {
                type: 'line',
                id: 'hline2',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: response_activity[3],
                borderColor: 'blue',
                borderWidth: 1,
                label: {
                    enabled: true,
                    backgroundColor: 'blue',
                    fontSize: 10,
                    position: 'right',
                    content: 'Service Goal ' + response_activity[3] + '%'
                }
            }]

        }
    }
});

// Quality Chart
var service_goal = 94;
var service_on_service_goal = 93;
var self_qa_goal = 60;
var ctx3 = document.getElementById("quality_chart");
var myChart3 = new Chart(ctx3, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["Quality Producion", 'Quality Service', 'Self QA'],
        datasets: [{
            label: 'Data presented on Percentage (%)',
            data: response_quality,
            backgroundColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderWidth: 1
        }]
    },
    options: {
        // responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    min: 50,
                    max: 100
                }
            }]
        },
        annotation: {
            annotations: [{
                type: 'line',
                id: 'hline3',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: service_goal,
                borderColor: 'green',
                borderWidth: 0,
                label: {
                    enabled: true,
                    backgroundColor: 'green',
                    fontSize: 10,
                    position: "left",
                    content: 'Quality Production ' + service_goal + '%'
                }
            }, {
                type: 'line',
                id: 'hline4',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: service_on_service_goal,
                borderColor: 'blue',
                borderWidth: 1,
                label: {
                    enabled: true,
                    backgroundColor: 'blue',
                    fontSize: 10,
                    position: 'center',
                    content: 'Quality on Services ' + service_on_service_goal + '%'
                }
            }, {
                type: 'line',
                id: 'hline5',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: self_qa_goal,
                borderColor: 'red',
                borderWidth: 1,
                label: {
                    enabled: true,
                    backgroundColor: 'red',
                    fontSize: 10,
                    position: 'right',
                    content: 'Self Qa Goal ' + self_qa_goal + '%'
                }
            }]

        }
    }

});

// CCK Chart
// var ctx4 = document.getElementById("cck_chart");
// var myChart4 = new Chart(ctx4, {
//     responsive: true,
//     type: 'bar',
//     data: {
//         labels: ["BB added", "BB call", "Elegible", "Added"],
//         datasets: [{
//             label: 'Data presented on Amount',
//             data: response_cck,
//             backgroundColor: [
//                 'rgba(137,167,191,0.7)',
//                 'rgba(91,111,127,0.7)',
//                 'rgba(182,222,255,0.7)',
//                 'rgba(46,56,64,0.7)',
//                 'rgba(164,200,229,0.7)'
//             ],
//             borderColor: [
//                 'rgba(137,167,191,0.7)',
//                 'rgba(91,111,127,0.7)',
//                 'rgba(182,222,255,0.7)',
//                 'rgba(46,56,64,0.7)',
//                 'rgba(164,200,229,0.7)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         responsive: true,
//         scales: {
//             yAxes: [{
//                 ticks: {
//                     beginAtZero: true,
//                 }
//             }]
//         }
//     }
// });
var ctx5 = document.getElementById("cck_chart_goal");
var myChart5 = new Chart(ctx5, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["CCK TR", "CALL BACK"],
        datasets: [{
            label: 'Data presented on percentage %',
            data: response_cck_goal,
            backgroundColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    max: 100
                }
            }]
        },
        annotation: {
            annotations: [{
                type: 'line',
                id: 'hline3',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: response_cck_goal[2],
                borderColor: 'red',
                borderWidth: 0,
                label: {
                    enabled: true,
                    backgroundColor: 'red',
                    fontSize: 10,
                    position: "left",
                    content: 'CCk Goal ' + Math.round(response_cck_goal[2]) + '%'
                }
            }, {
                type: 'line',
                id: 'hline4',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: 90,
                borderColor: 'blue',
                borderWidth: 1,
                label: {
                    enabled: true,
                    backgroundColor: 'blue',
                    fontSize: 10,
                    position: 'right',
                    content: 'Call Back Goal ' + 90 + '%'
                }
            }]

        }
    }
});
//Graph Protection Plan
var ctx7 = document.getElementById("pp");
var myChart7 = new Chart(ctx7, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["DPP Added"],
        datasets: [{
            label: 'Data presented on percentage %',
            data: response_dpp,
            backgroundColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    max: 100
                }
            }]
        },
        annotation: {
            annotations: [{
                type: 'line',
                id: 'hline6',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: 54,
                borderColor: 'green',
                borderWidth: 0,
                label: {
                    enabled: true,
                    backgroundColor: 'green',
                    fontSize: 10,
                    position: "left",
                    content: 'DDP Goal ' + 54 + '%'
                }
            }]

        }
    }
});

var ctx6 = document.getElementById("minor");
var myChart6 = new Chart(ctx6, {
    responsive: true,
    type: 'bar',
    data: {
        labels: ["i90 %"],
        datasets: [{
            label: 'Data presented on percentage %',
            data: response_minor,
            backgroundColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderColor: ['rgba(137,167,191,0.7)', 'rgba(91,111,127,0.7)', 'rgba(182,222,255,0.7)', 'rgba(46,56,64,0.7)', 'rgba(164,200,229,0.7)'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

/***/ })

/******/ });