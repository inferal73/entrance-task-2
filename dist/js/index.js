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

function initTouchEvents() {
  var startx = 0;
  var touchElements = [].concat(_toConsumableArray(document.querySelectorAll('.room-events')), [document.querySelector('.workspace-time-grade')]);
  var rooms = document.querySelectorAll('.rooms');
  var fixedElementsHandler = function fixedElementsHandler() {
    var touchTranslate = parseInt(getComputedStyle(touchElements[0]).transform.split(/\s*,\s*/)[4]);
    if (touchTranslate > 0) {
      rooms.forEach(function (el) {
        el.classList.add('fixed');
      });
    } else {
      rooms.forEach(function (el) {
        el.classList.remove('fixed');
      });
    }
  };
  fixedElementsHandler();

  document.body.addEventListener('touchstart', function (e) {
    var touchobj = e.changedTouches[0];
    startx = parseInt(touchobj.clientX);
  }, false);

  document.body.addEventListener('touchmove', function (e) {
    var touchobj = e.changedTouches[0];
    var dist = (parseInt(touchobj.clientX) - startx) * 0.15;
    touchElements.forEach(function (el) {
      var currentTransalte = parseInt(getComputedStyle(el).transform.split(/\s*,\s*/)[4]);
      var newTranslate = currentTransalte + dist;
      if (newTranslate > 180) newTranslate = 180;
      if (newTranslate < -(960 - screen.width)) newTranslate = -(960 - screen.width);
      el.style.transform = 'translateX(' + newTranslate + 'px)';
    });
    fixedElementsHandler();
  }, false);
}

function setTimeLineHeight() {
  var eventHeight = getComputedStyle(document.querySelector('.workspace-body')).height;
  document.head.innerHTML += '<style>.workspace-time-list li:after { height: ' + eventHeight + ';} .workspace-current-time:after {height: ' + (parseFloat(eventHeight) + 11) + 'px; }</style>';
}

window.onload = function () {
  timeToWidh();
  emptySpaceHandler();
  eventHandler();
  initTouchEvents();
  setTimeLineHeight();
};

/***/ })

},[2]);