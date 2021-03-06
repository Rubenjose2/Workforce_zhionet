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
/******/ 	return __webpack_require__(__webpack_require__.s = 225);
/******/ })
/************************************************************************/
/******/ ({

/***/ 225:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(226);


/***/ }),

/***/ 226:
/***/ (function(module, exports) {

// For the alerts auto dismist
$("#success-alert").fadeTo(1000, 500).slideUp(500, function () {
    $("#success-alert").slideUp(500);
});

//Modal post manipulation
$(".click-row").click(function (event) {
    $post_id = $(this).attr("data-send");
    $.ajax({
        method: 'GET',
        url: '/admin/postshow',
        data: {
            'id': $post_id
        },
        success: function success(response) {
            $("#button_accept").attr("data-send", response.id);
            $('#myModalLabel').empty().append(response.subject);
            $('.modal-body').empty().append(response.body);
            $('#myModal').modal({ backdrop: "static" });
            // console.log(response);
        }
    });
});

$('#button_accept').on('click', function () {
    $post_id = $(this).attr("data-send");
    $.ajax({
        method: 'GET',
        url: 'updatepost',
        data: {
            'id': $post_id
        },
        complete: function complete(response) {
            $('.post-status[data-id=' + $post_id + ']').replaceWith('<td class="read-post">Read</td>');
            // console.log(response);
        }
    });
});
//Data table 

$('#table-data').DataTable({
    order: [3, 'desc']
});

function ConfirmDelete() {
    var x = confirm("Are you sure want to Delete the User?");
    if (x) {
        return true;
    } else {
        return false;
    }
}

/***/ })

/******/ });