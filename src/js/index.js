function timeToWidh () {
  [...document.querySelectorAll('[data-time]')].forEach((el) => {
    const ratio = 6.25;
    const time = el.getAttribute('data-time');
    el.removeAttribute('data-time')
    const timeArray = time.split('-');
    const timeStart = {
      hour: timeArray[0].split(':')[0],
      minute: timeArray[0].split(':')[1]
    };
    const timeEnd = {
      hour: timeArray[1].split(':')[0],
      minute: timeArray[1].split(':')[1]
    };
    const diff = {
      hour: timeEnd.hour - timeStart.hour,
      minute: timeEnd.minute - timeStart.minute
    }
    const hours = ((diff.hour * 60) + diff.minute) / 60;
    const width = hours * ratio;
    el.style.width = `${width}%`;
  });
}

function emptySpaceHandler () {
  [...document.querySelectorAll('.room-empty-space')].forEach((el) => {
    if(!el.classList.contains('disabled')) {
      el.addEventListener('click', function () {
        window.location = '/new-event.php'
      })
      if (parseInt(getComputedStyle(el).width) >= 16) {
        el.innerHTML = '<svg width="16" height="16"><use xlink:href="#plus"></use></svg>'
      }
    }
  });
}

function eventHandler () {
  [...document.querySelectorAll('.room-event')].forEach((el) => {
    if(!el.classList.contains('disabled')) {
      el.addEventListener('click', function () {
        window.location = '/edit-event.php'
      })
    }
  })
}

function initTouchEvents() {
  let startx = 0;
  const touchElements = [...document.querySelectorAll('.room-events'), document.querySelector('.workspace-time-grade')];
  const rooms = document.querySelectorAll('.rooms');
  const fixedElementsHandler = () => {
    const touchTranslate = parseInt(getComputedStyle(touchElements[0]).transform.split(/\s*,\s*/)[4]);
    if(touchTranslate > 0) {
      rooms.forEach((el) => {
        el.classList.add('fixed');
      })
    } else {
      rooms.forEach((el) => {
        el.classList.remove('fixed');
      })
    }
  }
  fixedElementsHandler();

  document.body.addEventListener('touchstart', function(e){
    const touchobj = e.changedTouches[0];
    startx = parseInt(touchobj.clientX);
  }, false)

  document.body.addEventListener('touchmove', function(e){
    const touchobj = e.changedTouches[0]
    const dist = (parseInt(touchobj.clientX) - startx) * 0.15;
    touchElements.forEach((el) => {
      const currentTransalte = parseInt(getComputedStyle(el).transform.split(/\s*,\s*/)[4]);
      let newTranslate = currentTransalte + dist;
      if(newTranslate > 180 ) newTranslate = 180
      if(newTranslate < -(960 - screen.width) ) newTranslate = -(960 - screen.width)
      el.style.transform = `translateX(${newTranslate}px)`;
    });
    fixedElementsHandler();
  }, false)
}

function setTimeLineHeight() {
  const eventHeight = getComputedStyle(document.querySelector('.workspace-body')).height;
  document.head.innerHTML += `<style>.workspace-time-list li:after { height: ${eventHeight};} .workspace-current-time:after {height: ${parseFloat(eventHeight) + 11}px; }</style>`
}

window.onload = function () {
  timeToWidh();
  emptySpaceHandler();
  eventHandler();
  initTouchEvents();
  setTimeLineHeight();
}