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

window.onload = function () {
  timeToWidh();
  emptySpaceHandler();
  eventHandler();
}