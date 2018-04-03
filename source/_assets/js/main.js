/*jshint esversion: 6 */

import Slideout from 'slideout';
import jsonSampleData from './data.json';
import jsonSampleData2 from './data2.json';

function ready(fn) {
  if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading"){
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

// array.from polyfill
// Production steps of ECMA-262, Edition 6, 22.1.2.1
if (!Array.from) {
  Array.from = (function () {
    var toStr = Object.prototype.toString;
    var isCallable = function (fn) {
      return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
    };
    var toInteger = function (value) {
      var number = Number(value);
      if (isNaN(number)) { return 0; }
      if (number === 0 || !isFinite(number)) { return number; }
      return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
    };
    var maxSafeInteger = Math.pow(2, 53) - 1;
    var toLength = function (value) {
      var len = toInteger(value);
      return Math.min(Math.max(len, 0), maxSafeInteger);
    };
    return function from(arrayLike/*, mapFn, thisArg */) {
      var C = this;
      var items = Object(arrayLike);
      if (arrayLike == null) {
        throw new TypeError('Array.from requires an array-like object - not null or undefined');
      }
      var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
      var T;
      if (typeof mapFn !== 'undefined') {
        if (!isCallable(mapFn)) {
          throw new TypeError('Array.from: when provided, the second argument must be a function');
        }
        if (arguments.length > 2) {
          T = arguments[2];
        }
      }
      var len = toLength(items.length);
      var A = isCallable(C) ? Object(new C(len)) : new Array(len);
      var k = 0;
      var kValue;
      while (k < len) {
        kValue = items[k];
        if (mapFn) {
          A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
        } else {
          A[k] = kValue;
        }
        k += 1;
      }
      A.length = len;
      return A;
    };
  }());
}

ready(function() {
  var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('menu'),
    'side': 'right'
  });
  function close(eve) {
    eve.preventDefault();
    slideout.close();
  }

  slideout
    .on('beforeopen', function() {
      this.panel.classList.add('panel-open');
    })
    .on('open', function() {
      this.panel.addEventListener('click', close);
    })
    .on('beforeclose', function() {
      this.panel.classList.remove('panel-open');
      this.panel.removeEventListener('click', close);
    });
  // Menu Toggle button
  document.querySelector('.js-slide-menu-toggle').addEventListener('click', function() {
    slideout.toggle();
  });
  document.querySelector('.js-slide-menu-toggle-desktop').addEventListener('click', function() {
    slideout.toggle();
  });
  Array.from(document.querySelectorAll('.js-modal-button')).forEach(link => {
      link.addEventListener('click', function(event) {
          slideout.close();
      });
  });

  // star icons

  var $favIcons = document.querySelectorAll('.js-ranking-toggle');
  if ($favIcons.length > 0) {
    $favIcons.forEach(function ($el) {
      $el.addEventListener('click', function () {
        $el.classList.toggle('is-active');
        $el.classList.toggle('animated');
        $el.classList.toggle('bounceIn');
      });
    });
  }
  var $teaserVotes = document.querySelectorAll('.js-post-teaser-vote');
  if ($teaserVotes.length > 0) {
    $teaserVotes.forEach(function ($el) {
      $el.addEventListener('click', function () {
        $el.classList.toggle('is-active');
        $el.classList.toggle('animated');
        if ($el.classList.contains('c-post-teaser__vote--up')) {
          $el.classList.toggle('fadeInUp');
        }
        else {
          $el.classList.toggle('fadeInDown');
        }
      });
    });
  }

  // Modals
  var rootEl = document.documentElement;
  var $modals = getAll('.modal');
  var $modalButtons = getAll('.modal-button');
  var $modalCloses = getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');

  if ($modalButtons.length > 0) {
    $modalButtons.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        rootEl.classList.add('is-clipped');
        $target.classList.add('is-active');
      });
    });
  }
  if ($modalCloses.length > 0) {
    $modalCloses.forEach(function ($el) {
      $el.addEventListener('click', function () {
        closeModals();
      });
    });
  }
  document.addEventListener('keydown', function (event) {
    var e = event || window.event;
    if (e.keyCode === 27) {
      closeModals();
    }
  });
  function closeModals() {
    rootEl.classList.remove('is-clipped');
    $modals.forEach(function ($el) {
      $el.classList.remove('is-active');
    });
  }
  function getAll(selector) {
    return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
  }

  // Create the chart
  Highcharts.setOptions({
    lang:{
        rangeSelectorZoom: ''
    },
    rangeSelector: {
      buttonTheme: { // styles for the buttons
          fill: 'none',
          stroke: 'none',
          'stroke-width': 0,
          style: {
              color: '#000',
              fontWeight: 'normal'
          },
          states: {
              hover: {
                fill: '#fff',
                style: {
                    color: '#80ce5e'
                }
              },
              select: {
                  fill: '#fff',
                  style: {
                      color: '#80ce5e'
                  }
              }
          }
      },
      selected: 0,
      inputEnabled: false,
      buttons: [
      //   {
      //     type: 'day',
      //     count: 1,
      //     text: '1d'
      // },
      {
          type: 'month',
          count: 1,
          text: '1M'
      }, {
          type: 'month',
          count: 3,
          text: '3M'
      }, {
          type: 'month',
          count: 6,
          text: '6M'
      }, {
          type: 'year',
          count: 1,
          text: '1Y'
      }]
    },
    title: {
      text: ''
    },
    scrollbar: {
      enabled: false
    },
    navigator: {
      enabled: false
    },
    exporting: {
      enabled: false
    },
  });
  Highcharts.stockChart('js-highcharts-container-1', {
    series: [{
      name: 'BTC',
      color: '#c1f5a9',
      data: jsonSampleData,
      tooltip: {
        valueDecimals: 2
      }
    }]
  });
  Highcharts.stockChart('js-highcharts-container-2', {
    series: [{
      name: 'ETH',
      color: '#c1f5a9',
      data: jsonSampleData,
      tooltip: {
        valueDecimals: 2
      }
    }]
  });
  Highcharts.stockChart('js-highcharts-container-3', {
    series: [{
      name: 'XRP',
      color: '#c1f5a9',
      data: jsonSampleData2,
      tooltip: {
        valueDecimals: 2
      }
    }]
  });

  // carousel flickity
  var flkty = new Flickity( '.js-cw-highcharts-carousel', {
    watchCSS: true,
    pageDots: false
  });
});
