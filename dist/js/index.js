webpackJsonp([1],{

/***/ 2:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

function timeToWidh() {
  [].concat(_toConsumableArray(document.querySelectorAll('[data-time]'))).forEach(function (el) {
    var ratio = 6.25;
    var time = el.getAttribute('data-time');
    el.removeAttribute('data-time');
    var timeArray = time.split('-');
    var timeStart = {
      hour: timeArray[0].split(':')[0],
      minute: timeArray[0].split(':')[1]
    };
    var timeEnd = {
      hour: timeArray[1].split(':')[0],
      minute: timeArray[1].split(':')[1]
    };
    var diff = {
      hour: timeEnd.hour - timeStart.hour,
      minute: timeEnd.minute - timeStart.minute
    };
    var hours = (diff.hour * 60 + diff.minute) / 60;
    var width = hours * ratio;
    el.style.width = width + '%';
  });
}

function emptySpaceHandler() {
  [].concat(_toConsumableArray(document.querySelectorAll('.room-empty-space'))).forEach(function (el) {
    if (!el.classList.contains('disabled')) {
      el.addEventListener('click', function () {
        window.location = '/new-event.php';
      });
      if (parseInt(getComputedStyle(el).width) >= 16) {
        el.innerHTML = '<svg width="16" height="16"><use xlink:href="#plus"></use></svg>';
      }
    }
  });
}

function eventHandler() {
  [].concat(_toConsumableArray(document.querySelectorAll('.room-event'))).forEach(function (el) {
    if (!el.classList.contains('disabled')) {
      el.addEventListener('click', function () {
        window.location = '/edit-event.php';
      });
    }
  });
}

window.onload = function () {
  timeToWidh();
  emptySpaceHandler();
  eventHandler();
};

/***/ })

},[2]);