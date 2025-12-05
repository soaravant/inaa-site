(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var nav = document.getElementById('g-navigation');
    if (!nav) {
      return;
    }

    if (document.body) {
      document.body.classList.add('has-sticky-nav');
    }

    var sectionMap = {
      '': null,
      '/': null,
      fotografies: 'fotografies',
      drastiriotites: 'drastiriotites',
      programma: 'programma',
      dieythynsi: 'map',
      online: 'online',
      epikoinonia: 'contact'
    };

    var links = nav.querySelectorAll('a.g-menu-item-container[href]');
    if (!links.length) {
      return;
    }

    var closeOffcanvas = function () {
      var html = document.documentElement;
      if (html.classList.contains('g-offcanvas-open')) {
        html.classList.remove('g-offcanvas-open');
      }
      if (document.body.classList.contains('g-offcanvas-open')) {
        document.body.classList.remove('g-offcanvas-open');
      }
      var toggle = document.querySelector('[data-offcanvas-toggle]');
      if (toggle && toggle.getAttribute('aria-expanded') === 'true') {
        toggle.click();
      }
    };

    var scrollToTarget = function (target) {
      var navHeight = nav.offsetHeight || 0;
      var y = target === document.body ? 0 : target.getBoundingClientRect().top + window.pageYOffset - navHeight;
      window.scrollTo({
        top: y < 0 ? 0 : y,
        behavior: 'smooth'
      });
    };

    Array.prototype.forEach.call(links, function (link) {
      var href = link.getAttribute('href');
      if (!href) {
        return;
      }

      var url;
      try {
        url = new URL(href, window.location.origin);
      } catch (err) {
        return;
      }

      if (url.origin !== window.location.origin) {
        return;
      }

      var targetId = '';
      if (url.hash) {
        targetId = url.hash.slice(1);
      } else {
        var path = url.pathname.replace(/^\/+|\/+$/g, '').toLowerCase();
        if (Object.prototype.hasOwnProperty.call(sectionMap, path)) {
          targetId = sectionMap[path];
        } else {
          targetId = path;
        }
      }

      var targetElement = targetId ? document.getElementById(targetId) : document.body;
      if (!targetElement) {
        return;
      }

      link.addEventListener('click', function (event) {
        event.preventDefault();
        scrollToTarget(targetElement);
        closeOffcanvas();
        if (history.replaceState) {
          var newUrl = targetElement === document.body ? '/' : '/#' + targetId;
          history.replaceState(null, '', newUrl);
        }
      });
    });
  });
})();
