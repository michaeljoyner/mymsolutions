/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
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
/******/ 	__webpack_require__.p = "./";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__components_videoManager__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__components_contactForm__ = __webpack_require__(2);


window.contactF = __WEBPACK_IMPORTED_MODULE_1__components_contactForm__["a" /* default */];
__WEBPACK_IMPORTED_MODULE_1__components_contactForm__["a" /* default */].init();
__WEBPACK_IMPORTED_MODULE_0__components_videoManager__["a" /* default */].init();

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony default export */ __webpack_exports__["a"] = {
    elems: {
        container: document.getElementById("contactform-inner-box"),
        name: document.getElementById('sender-name'),
        email: document.getElementById('sender-email'),
        message: document.getElementById('sender-message'),
        send: document.getElementById('cf-send-btn'),
        errors: document.getElementById('cf-errors'),
        note: document.getElementById('cf-note'),
        banner: document.getElementById('gratitude-banner'),
        namethank: document.getElementById('name-to-thank'),
        form: document.getElementById('contact-form'),
        prompt: document.getElementById('show-cf-btn'),
        icon: document.getElementById('fa-send-icon')
    },

    init: function init() {
        var _this = this;

        if (!window.FormData) {
            this.elems.note.innerHTML = "Sorry, your browser doesn't support this contact form. Please use the details below.";
            return;
        }
        this.elems.send.addEventListener('click', function () {
            return _this.trySubmit();
        }, false);
        this.elems.prompt.addEventListener('click', function () {
            return _this.toggleContactForm();
        }, false);
    },
    toggleContactForm: function toggleContactForm() {
        var cont = this.elems.container;
        if (cont.classList.contains("expose")) {
            cont.classList.remove("expose");
        } else {
            cont.classList.add("expose");
        }
    },
    validate: function validate() {
        if (!this.elems.name.value || !this.elems.email.value || !this.elems.message.value) {
            return false;
        }
        return true;
    },
    trySubmit: function trySubmit() {
        if (this.validate()) {
            this.sendMessage();
        } else {
            this.elems.errors.innerHTML = "Please fill out all fields.";
        }
    },
    sendMessage: function sendMessage() {
        var _this2 = this;

        this.showSpinnerIcon();
        this.elems.note.innerHTML = "";
        this.elems.errors.innerHTML = "";
        var req = new XMLHttpRequest();
        var fData = new FormData();
        fData.append('name', this.elems.name.value);
        fData.append('email', this.elems.email.value);
        fData.append('message', this.elems.message.value);
        fData.append('_token', this.getCSRFToken());
        req.open("POST", '/contactmessage', true);
        req.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        req.onreadystatechange = function (ev) {
            if (req.readyState === 4) {
                if (req.status === 200) {
                    _this2.fadeOutForm();
                    _this2.showBanner();
                    _this2.elems.prompt.style.opacity = "0";
                } else {
                    _this2.elems.note.innerHTML = "Oh dear, an error occurred. Please try again later";
                    _this2.showSendIcon();
                }
            }
        };
        req.send(fData);
    },
    getCSRFToken: function getCSRFToken() {
        var meta = document.querySelector('meta[property="CSRF-token"]');
        return meta.getAttribute('content');
    },
    showBanner: function showBanner() {
        this.elems.namethank.innerHTML = this.elems.name.value;
        this.elems.banner.classList.add('show');
    },
    fadeOutForm: function fadeOutForm() {
        this.elems.form.classList.add("fade");
    },
    showSpinnerIcon: function showSpinnerIcon() {
        this.elems.icon.className = "fa fa-send fa-spin";
    },
    showSendIcon: function showSendIcon() {
        this.elems.icon.className = "fa fa-send";
    }
};

/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony default export */ __webpack_exports__["a"] = {
    elems: {
        video: document.querySelector('#video'),
        container: document.querySelector('.lead-video'),
        play: document.querySelector('#play_btn'),
        pause: document.querySelector('#pause_btn')
    },

    init: function init() {
        var _this = this;

        this.elems.container.classList.add('can-control');
        this.elems.container.addEventListener('click', function () {
            return _this.togglePlay();
        }, false);
        this.elems.video.addEventListener('play', function () {
            return _this.handlePlay();
        }, false);
        this.elems.video.addEventListener('pause', function () {
            return _this.handlePause();
        }, false);
    },
    togglePlay: function togglePlay() {
        var video = this.elems.video;
        if (video.paused) {
            return video.play();
        }
        video.pause();
    },
    handlePlay: function handlePlay() {
        var container = this.elems.container;
        container.classList.remove('paused');
        container.classList.add('playing');
        setTimeout(function () {
            return container.classList.remove('playing');
        }, 2000);
    },
    handlePause: function handlePause() {
        var container = this.elems.container;
        container.classList.remove('playing');
        container.classList.add('paused');
    }
};

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ })
/******/ ]);