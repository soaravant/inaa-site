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

    // --- Custom Mobile Menu (Rebuild) ---
    function initCustomMobileMenu() {
      // 1. Find the Logo Container (Blue Bar target)
      const logoLink = Array.from(document.querySelectorAll('.g-logo')).find(el => el.textContent.trim().includes('ΙΝΑΑΠΦ'));
      if (!logoLink) return;
      const logoContainer = logoLink.closest('.g-block');
      if (!logoContainer) return;

      // 2. Clear old hacks / setup container
      // Use CSS class for layout control (Responsive)
      logoContainer.classList.add('custom-mobile-logo-container');

      logoContainer.style.position = 'relative'; // Keep relative for toggle absolute positioning
      // REMOVED INLINE STYLES that forced full width/center everywhere
      // logoContainer.style.display = 'flex';
      // logoContainer.style.width = '100%';
      // logoContainer.style.flex = '1 0 100%';
      // logoContainer.style.alignItems = 'center';
      // logoContainer.style.justifyContent = 'center';

      // We still want to reset margins
      logoLink.style.marginLeft = '0';
      logoLink.style.marginRight = '0';

      // 3. Create & Inject Custom Toggle
      let toggle = document.querySelector('.custom-mobile-toggle');
      if (!toggle) {
        toggle = document.createElement('button');
        toggle.className = 'custom-mobile-toggle';
        toggle.innerHTML = '<svg viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>';
        toggle.style.position = 'absolute';
        toggle.style.left = '20px';
        toggle.style.top = '50%';
        toggle.style.transform = 'translateY(-50%)';
        logoContainer.appendChild(toggle);
      }

      // 4. Create & Inject Overlay (Drawer) & Backdrop
      let overlay = document.querySelector('.custom-mobile-overlay');
      let backdrop = document.querySelector('.custom-mobile-backdrop');

      if (!backdrop) {
        backdrop = document.createElement('div');
        backdrop.className = 'custom-mobile-backdrop';
        backdrop.style.position = 'fixed';
        backdrop.style.top = '0';
        backdrop.style.left = '0';
        backdrop.style.width = '100%';
        backdrop.style.height = '100%';
        backdrop.style.background = 'rgba(0,0,0,0.5)';
        backdrop.style.zIndex = '10000';
        backdrop.style.opacity = '0';
        backdrop.style.pointerEvents = 'none'; // Click through when hidden
        backdrop.style.transition = 'opacity 0.3s ease';
        document.body.appendChild(backdrop);

        backdrop.addEventListener('click', () => {
          closeMenu();
        });
      }

      if (!overlay) {
        overlay = document.createElement('div');
        overlay.className = 'custom-mobile-overlay';
        document.body.appendChild(overlay);

        // 5. Clone Links - Use broader selector to ensure we catch them
        // Target specifically the container links used by Gantry menu
        let desktopLinks = document.querySelectorAll('a.g-menu-item-container');

        // Filter out any that might be hidden or logo-related if necessary
        // But usually g-menu-item-container is specific to nav links.
        if (desktopLinks.length === 0) {
          // Absolute Fallback: All anchor tags in navigation area
          desktopLinks = document.querySelectorAll('#g-navigation a[href]:not(.g-logo)');
        }

        desktopLinks.forEach(link => {
          // Check if it's the logo or part of it
          if (link.classList.contains('g-logo') || link.closest('.g-logo')) return;

          // Get text. If it's empty (e.g. icon only), skip or find title
          let text = link.textContent.trim();
          const titleSpan = link.querySelector('.g-menu-item-title');
          if (titleSpan) text = titleSpan.textContent.trim();

          if (!text) return; // Skip matches with no text

          const clone = document.createElement('a');
          clone.className = 'custom-mobile-link';
          clone.href = link.getAttribute('href');
          clone.textContent = text;

          clone.addEventListener('click', () => {
            closeMenu();
            // Native scroll will handle href
          });
          overlay.appendChild(clone);
        });
      }

      function openMenu() {
        overlay.classList.add('active');
        backdrop.style.opacity = '1';
        backdrop.style.pointerEvents = 'all';
        document.body.style.overflow = 'hidden';
      }

      function closeMenu() {
        overlay.classList.remove('active');
        backdrop.style.opacity = '0';
        backdrop.style.pointerEvents = 'none';
        document.body.style.overflow = '';
      }

      // 6. Toggle Logic
      toggle.addEventListener('click', (e) => {
        e.stopPropagation();
        if (overlay.classList.contains('active')) {
          closeMenu();
        } else {
          openMenu();
        }
      });
    }

    // Run Initialization
    initCustomMobileMenu();

    // --- Mobile Menu Link Handling (Legacy Clean up) ---

    // --- Mobile Menu Link Handling ---
    // Select both desktop and mobile links
    var links = document.querySelectorAll('#g-navigation a.g-menu-item-container[href], #g-mobilemenu-container a[href]');
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
        // Allow default anchor navigation (native smooth scroll + URL hash update)
        // event.preventDefault(); 

        // Just close menu if open
        closeOffcanvas();

        // No manual scroll - CSS scroll-behavior handles it
      });
    });
  });
})();
