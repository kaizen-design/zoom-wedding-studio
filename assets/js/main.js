window.onload = () => {  
  initHelpers(); 
  initMasonry();
  initPortfolioSlider();
  initOffCanvasNav();
  initProjectSlider();
  AOS.init();
  initPricingTabs();
  initPhotoSlider();
  //initTabs();
  //initAccordion();
  //initSmoothScroll();
};

function initPhotoSlider() {
  const $slider = document.querySelector('.about-photo-slider');
  if (!$slider) return;
  const swiper = new Swiper($slider, {
    loop: true,
    spaceBetween: 30,
    //effect: "fade",
    //fadeEffect: { crossFade: true },
    pagination: {
      el: '.about-photo-slider + .swiper-pagination',
      clickable: true,
    }
  });
}

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

function initPricingTabs() {
  const $tabLinks = document.querySelectorAll('.pricing-tabs-section input[name="pricing"]');
  const $tabContents = document.querySelectorAll('.pricing-tabs-section .tab-pane');

  if (!$tabLinks && !$tabContents) return;
  
  $tabLinks.forEach(link => {
    link.addEventListener('change', function (e) {
      $tabContents.forEach(content => {
        content.classList.remove('active')
        content.classList.remove('show');
        content.querySelectorAll('.aos-animate').forEach(i => i.classList.remove('aos-animate'));
      });
      const $tab = document.getElementById(`${e.target.id}-tab`);
      $tab.classList.add('active');
      $tab.classList.add('show');
      setTimeout(() => {
        $tab.querySelectorAll('.aos-init').forEach(i => i.classList.add('aos-animate'));
      }, 150);
      //AOS.refresh();
    }, false)
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