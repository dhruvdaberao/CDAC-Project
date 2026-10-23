/**
* Template Name: OnePage
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle with ARIA and keyboard support (GIGW 5.2.21, 5.2.49)
   */
  const toggleMobileNav = () => {
    let navbar = select('#navbar')
    if (!navbar) return
    let isMobile = navbar.classList.toggle('navbar-mobile')
    let toggleBtn = select('.mobile-nav-toggle')
    if (toggleBtn) {
      toggleBtn.setAttribute('aria-expanded', isMobile ? 'true' : 'false')
      let icon = toggleBtn.querySelector('i') || toggleBtn
      icon.classList.toggle('bi-list')
      icon.classList.toggle('bi-x')
      if (isMobile) {
        let firstLink = navbar.querySelector('a, button')
        if (firstLink) firstLink.focus()
      }
    }
  }

  on('click', '.mobile-nav-toggle', function(e) {
    toggleMobileNav()
  })

  on('keydown', '.mobile-nav-toggle', function(e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault()
      toggleMobileNav()
    }
  })

  // Escape key closes mobile navigation
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      let navbar = select('#navbar')
      if (navbar && navbar.classList.contains('navbar-mobile')) {
        toggleMobileNav()
        let toggleBtn = select('.mobile-nav-toggle')
        if (toggleBtn) toggleBtn.focus()
      }
    }
  })

  /**
   * Mobile nav and keyboard dropdowns activate (GIGW 5.2.21, 5.2.49)
   */
  const toggleDropdown = (linkEl) => {
    let submenu = linkEl.nextElementSibling
    if (!submenu) return
    let isMobile = select('#navbar').classList.contains('navbar-mobile')
    if (isMobile) {
      submenu.classList.toggle('dropdown-active')
      let expanded = submenu.classList.contains('dropdown-active')
      linkEl.setAttribute('aria-expanded', expanded ? 'true' : 'false')
    } else {
      let firstSub = submenu.querySelector('a')
      if (firstSub) firstSub.focus()
    }
  }

  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      toggleDropdown(this)
    }
  }, true)

  on('keydown', '.navbar .dropdown > a', function(e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault()
      toggleDropdown(this)
    } else if (e.key === 'ArrowDown') {
      e.preventDefault()
      let submenu = this.nextElementSibling
      if (submenu) {
        let firstLink = submenu.querySelector('a')
        if (firstLink) firstLink.focus()
      }
    }
  }, true)

  // Escape key closes submenu and returns focus to toggle
  on('keydown', '.navbar .dropdown ul a', function(e) {
    if (e.key === 'Escape') {
      let parentDropdown = this.closest('.dropdown')
      if (parentDropdown) {
        let toggle = parentDropdown.querySelector('> a')
        if (toggle) {
          toggle.focus()
          let submenu = parentDropdown.querySelector('> ul')
          if (submenu && submenu.classList.contains('dropdown-active')) {
            submenu.classList.remove('dropdown-active')
            toggle.setAttribute('aria-expanded', 'false')
          }
        }
      }
    }
  }, true)

  /**
   * Scroll with offset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        if (navbarToggle) {
          navbarToggle.setAttribute('aria-expanded', 'false')
          let icon = navbarToggle.querySelector('i') || navbarToggle
          icon.classList.remove('bi-x')
          icon.classList.add('bi-list')
        }
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Initiate glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Accessible Carousel Autoplay Pause/Play Controller (GIGW 5.2.25 / WCAG 2.2.2)
   */
  const initCarouselController = () => {
    const carouselEl = document.getElementById('carouselExampleAutoplaying');
    const pauseBtn = document.getElementById('carouselPauseBtn');
    if (!carouselEl || !pauseBtn || pauseBtn.dataset.carouselInit) return;
    pauseBtn.dataset.carouselInit = 'true';

    const getCarousel = () => {
      if (window.bootstrap && window.bootstrap.Carousel) {
        return bootstrap.Carousel.getOrCreateInstance(carouselEl, {
          interval: 8000,
          pause: 'hover'
        });
      }
      return null;
    };

    let bsCarousel = getCarousel();

    // Auto-pause if user prefers reduced motion
    const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) {
      if (bsCarousel) bsCarousel.pause();
      pauseBtn.setAttribute('aria-pressed', 'true');
      pauseBtn.setAttribute('aria-label', 'Resume carousel autoplay');
      pauseBtn.setAttribute('title', 'Play autoplay');
      const icon = pauseBtn.querySelector('i');
      if (icon) icon.className = 'bi bi-play-fill';
    }

    pauseBtn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      bsCarousel = getCarousel();
      const isCurrentlyPaused = pauseBtn.getAttribute('aria-pressed') === 'true';
      const icon = pauseBtn.querySelector('i');

      if (isCurrentlyPaused) {
        // Resume autoplay
        if (bsCarousel) bsCarousel.cycle();
        else if (window.jQuery) $(carouselEl).carousel('cycle');
        pauseBtn.setAttribute('aria-pressed', 'false');
        pauseBtn.setAttribute('aria-label', 'Pause carousel autoplay');
        pauseBtn.setAttribute('title', 'Pause autoplay');
        if (icon) icon.className = 'bi bi-pause-fill';
      } else {
        // Pause autoplay
        if (bsCarousel) bsCarousel.pause();
        else if (window.jQuery) $(carouselEl).carousel('pause');
        pauseBtn.setAttribute('aria-pressed', 'true');
        pauseBtn.setAttribute('aria-label', 'Resume carousel autoplay');
        pauseBtn.setAttribute('title', 'Play autoplay');
        if (icon) icon.className = 'bi bi-play-fill';
      }
    });
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCarouselController);
  } else {
    initCarouselController();
  }
  window.addEventListener('load', initCarouselController);

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})()
function changeText(value) {
  var div = document.getElementById("div");
  var text = "";

  if (value == 1) text += "this is one";
  if (value == 2) text += "this is two";
  if (value == 3) text += "this is tree";

  div.innerHTML = text;
}