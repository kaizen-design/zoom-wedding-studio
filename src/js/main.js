window.onload = () => {  
  initHelpers(); 
  initMasonry();
  initPortfolioSlider();
  initOffCanvasNav();
  initProjectSlider();
  AOS.init();
  //initTabs();
  //initAccordion();
  //initSmoothScroll();
};

function initProjectSlider() {
  const $slider = document.querySelector('.project-hero-slider .swiper');
  if (!$slider) return;
  const swiper = new Swiper($slider, {
    slidesPerView: 'auto',
    centeredSlides: true,
    centeredSlidesBounds: true,
    loop: true,
    navigation: {
      nextEl: '.project-hero-slider .slide-next',
      prevEl: '.project-hero-slider .slide-prev',
    },
    pagination: {
      type: 'fraction',
      el: '.single-project-hero .slides-counter',
      renderFraction: function (currentClass, totalClass) {
      return '<span class="' + currentClass + '"></span>' +
              ' / ' +
              '<span class="' + totalClass + '"></span>';
      },
    },
    breakpoints: {
      // when window width is >= 320px
      /* 576: {
        slidesPerView: 'auto',
        freeMode: true,
      }, */
    }
  });
}

function initMasonry() {
  const $grid = document.querySelector('.masonry-grid');
  if (!$grid) return;
  new Masonry($grid, {
    percentPosition: true
  });
}

function initPortfolioSlider() {
  const $slider = document.querySelector('.portfolio-slider');
  if (!$slider) return;
  const swiper = new Swiper($slider, {
    spaceBetween: 20,
    slidesPerView: 1,
    navigation: {
      nextEl: '.slide-next',
      prevEl: '.slide-prev',
    },
    pagination: {
      type: 'fraction',
      el: '.slides-counter',
      renderFraction: function (currentClass, totalClass) {
      return '<span class="' + currentClass + '"></span>' +
              ' / ' +
              '<span class="' + totalClass + '"></span>';
      },
    },
    breakpoints: {
      // when window width is >= 320px
      576: {
        slidesPerView: 'auto',
        freeMode: true,
      },
    }
  });
}

function initOffCanvasNav() {
  const handles = document.querySelectorAll(".off-canvas-toggle");
  if (handles) {
    handles.forEach(handle => {
      handle.addEventListener("click", function () {
        document.body.classList.toggle("off-canvas-open");
      });
    });
  }  
}

function initTabs() {
  const $tabLinks = document.querySelectorAll('.tab-link');
  const $tabContents = document.querySelectorAll('.tab-content');

  if (!$tabLinks && !$tabContents) return;
  
  $tabLinks.forEach(link => {
    ['click', 'mouseover'].forEach(evt => 
      link.addEventListener(evt, function () {
        if (this.classList.contains('active')) return;  
        
        $tabLinks.forEach(tab => tab.classList.remove('active'));
        $tabContents.forEach(content => content.classList.remove('active'));
        
        link.classList.add('active');
        document.getElementById(link.getAttribute('data-tab')).classList.add('active');
      }, false)
    );
  });
}

function initAccordion() {
  const accordions = document.querySelectorAll(".accordion");
  if (accordions) {
    accordions.forEach(accordion => {
      accordion.addEventListener("click", function () {
        const panel = this.nextElementSibling;
        if (panel) {
          this.classList.toggle("open");        
          panel.style.maxHeight = panel.style.maxHeight ? null : panel.scrollHeight + "px";
        }        
      });
    });
  }
}

function initSmoothScroll($el = document) {
  $el.querySelectorAll('.smoothScroll').forEach(link => {
    link.addEventListener("click", function(e) {
      e.preventDefault();
      const href = this.getAttribute("href").replace("/", ""), 
            el = document.querySelector(href); 
      try {
        el.scrollIntoView({ block: "start", behavior: "smooth" });
      } catch (e) {
        console.error(`Element with the ${href} ID not found`)
      }  
    });
  });
}

function initHelpers() {
  //  Prevent jump to top on "#" links
  document.querySelectorAll("a[href='#']").forEach(link => {
    link.addEventListener("click", e => e.preventDefault());
  });
}