jQuery(function ($) {
  // Hide the logo slide for 1 milisecond

  if ($('.header-logos-wrapper')) {
    setTimeout(function () {
      $('.header-logos-wrapper').css({ opacity: '1' });
    });
  }
  // Google Maps

  let map;

  function initMap() {
    const myLatLng = { lat: 53.742011, lng: -2.491245 };
    map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 18,
      styles: [
        {
          featureType: 'landscape.natural',
          elementType: 'geometry.fill',
          stylers: [
            {
              visibility: 'on',
            },
            {
              color: '#e0efef',
            },
          ],
        },
        {
          featureType: 'poi',
          elementType: 'geometry.fill',
          stylers: [
            {
              visibility: 'on',
            },
            {
              hue: '#1900ff',
            },
            {
              color: '#c0e8e8',
            },
          ],
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [
            {
              lightness: 100,
            },
            {
              visibility: 'simplified',
            },
          ],
        },
        {
          featureType: 'road',
          elementType: 'labels',
          stylers: [
            {
              visibility: 'off',
            },
          ],
        },
        {
          featureType: 'transit.line',
          elementType: 'geometry',
          stylers: [
            {
              visibility: 'on',
            },
            {
              lightness: 700,
            },
          ],
        },
        {
          featureType: 'water',
          elementType: 'all',
          stylers: [
            {
              color: '#7dcdcd',
            },
          ],
        },
      ],
    });
    new google.maps.Marker({
      position: myLatLng,
      map,
      title: 'Intertel',
    });
  }

  if ($('#map').length) {
    initMap();
  }

  // Reference to body data
  var baseDir = $('body').attr('data-base-dir');

  // ScrollTrigger
  gsap.registerPlugin(ScrollTrigger);

  // Nav Functionality
  $('.menu').on('click', function () {
    if ($('nav').hasClass('closed')) {
      gsap.to('nav', {
        right: 0,
        ease: 'power1.out',
      });
      gsap.to('.overlay', {
        opacity: 0.5,
      });
      gsap.from('nav li', {
        x: 75,
        opacity: 0,
        stagger: 0.3,
        delay: 0.4,
      });
      gsap.from('.nav-bottom', {
        x: 75,
        opacity: 0,
        delay: 1.5,
      });
      $('nav').removeClass('closed');
      $('.burger').addClass('open');
    } else {
      gsap.to('nav', {
        right: '-100%',
        ease: 'power1.out',
      });
      gsap.to('.overlay', {
        opacity: 0,
      });
      $('nav').addClass('closed');
      $('.burger').removeClass('open');
    }
  });

  // Header Logos Slider

  $('.header-logos').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  // Reviews Slider

  $('.review-slider').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
  });

  // Blobs
  lottie.loadAnimation({
    container: document.getElementById('hero-blob'),
    renderer: 'svg',
    loop: true,
    autoplay: true,

    rendererSettings: {
      preserveAspectRatio: 'xMidYMid slice',
    },
    path: baseDir + '/wp-content/themes/intertel/assets/img/blobheader.json',
  });

  lottie.loadAnimation({
    container: document.getElementById('blob1'),
    renderer: 'svg',
    loop: true,
    autoplay: true,

    rendererSettings: {
      preserveAspectRatio: 'xMidYMid slice',
    },
    path: baseDir + '/wp-content/themes/intertel/assets/img/blob1.json',
  });

  lottie.loadAnimation({
    container: document.getElementById('blob2'),
    renderer: 'svg',
    loop: true,
    autoplay: true,

    rendererSettings: {
      preserveAspectRatio: 'xMidYMid slice',
    },
    path: baseDir + '/wp-content/themes/intertel/assets/img/blob2.json',
  });

  lottie.loadAnimation({
    container: document.getElementById('blob3'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    rendererSettings: {
      preserveAspectRatio: 'xMidYMid slice',
    },
    path: baseDir + '/wp-content/themes/intertel/assets/img/blob2.json',
  });

  // SVG Animation

  if ($('#heading-svg').length > 0) {
    ScrollTrigger.create({
      trigger: '#heading-svg',
      start: 'top bottom-=25%',
      once: true,
      onEnter() {
        new Vivus('my-svg', {
          duration: 100,
          onReady: function (myVivus) {
            document.querySelector('#heading-svg').style.visibility = 'visible';
          },
        });
      },
    });
  }

  // Animations

  // ----- HEADER ----- //
  const heroTl = gsap.timeline();

  heroTl.from('.header-wrapper a', {
    scale: 0,
    opacity: 0,
    delay: 0.5,
  });

  heroTl.from('.header-wrapper .menu', {
    x: 55,
    opacity: 0,
    delay: 0.1,
  });

  heroTl.from('.hero-content h1', {
    y: 150,
    opacity: 0,
  });
  heroTl.from('.hero-content p', {
    y: 150,
    opacity: 0,
  });
  heroTl.from('.hero-content a', {
    x: 75,
    opacity: 0,
  });
  if ($('.hero-content .header-logos')) {
    heroTl.from('.hero-content .header-logos', {
      opacity: 0,
    });
  }

  // //   if ($('#hero h2').length > 0) {
  // //     heroTl.from('#hero h2', {
  // //       y: 150,
  // //       opacity: 0,
  // //     });
  // //   }

  if ($('#hero-blob').length) {
    heroTl.from('#hero-blob', {
      opacity: 0,
      scale: 50,
      ease: Elastic.easeOut.config(0.2, 0.15),
    });
  }

  // heroTl.from("#hero .scroll svg",{
  //     scale:0,
  //     ease: 'bounce'
  // })
  // heroTl.from("#hero .scroll p", {
  //     y:55,
  //     opacity:0,
  //     ease:"elastic"
  // })

  // ----- BLOB ----- //

  function blobText(i) {
    var tl = gsap.timeline();
    tl.from(
      $('#blob' + i)
        .parent()
        .find('h1'),
      {
        x: 95,
        opacity: 0,
        ease: Power1.easeOut,
        duration: 1,
      }
    );
    return tl;
  }

  // function blob(i) {
  //     var tl = gsap.timeline();
  //     tl.from($('#blob'+i).parent().find('.blob-shape'), {
  //         scale:0,
  //         opacity:0,
  //         ease: 'expo',
  //         duration:2,
  //         ease: Elastic.easeOut.config(0.5,0.3)
  //     })
  //     return tl
  // }

  function blobBtn(i) {
    var tl = gsap.timeline();
    tl.from(
      $('#blob' + i)
        .parent()
        .find('.btn'),
      {
        x: 95,
        opacity: 0,
      }
    );
    return tl;
  }

  function blobNews(i) {
    var tl = gsap.timeline();
    tl.from(
      $('#blob' + i)
        .parent()
        .find('.newsletter-wrapper input'),
      {
        x: 55,
        opacity: 0,
        stagger: 0.3,
      }
    );
    return tl;
  }

  for (i = 1; i < 4; i++) {
    if ($('#blob' + i).length > 0) {
      var master = gsap.timeline({
        scrollTrigger: {
          trigger: $('#blob' + i),
          start: 'top bottom-=15%',
          end: 'top center-=15%',
        },
      });
      master.add(blobText(i));
      //   .add(blob(i))
      if (
        $('#blob' + i)
          .parent()
          .find('.newsletter-wrapper').length > 0
      ) {
        master.add(blobNews(i), '<-1');
      }
      if (
        $('#blob' + i)
          .parent()
          .find('a').length > 0
      ) {
        master.add(blobBtn(i), '<0.5');
      }
    }
  }

  // Form

  function animForm() {
    var tl = gsap.timeline({
      scrollTrigger: {
        trigger: $('.header-section'),
        start: 'top bottom-=10%',
        end: 'top center',
      },
    });
    tl.from('form .wpcf7-form-control', {
      x: 55,
      opacity: 0,
      stagger: 0.3,
    });
  }
  // ----- SECTION HEADER ----- //

  $('.header-section').each(function () {
    var el = $(this);
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: el,
        start: 'top bottom-=10%',
        end: 'top center+=5%',
      },
    });
    tl.from(el.find('h1'), {
      x: 55,
      opacity: 0,
    });
    if (el.find('p').length > 0) {
      tl.from(el.find('p'), {
        y: 55,
        opacity: 0,
        stagger: 0.3,
      });
    }
    if (el.find('.btn').length > 0) {
      tl.from(el.find('.btn'), {
        x: -55,
        opacity: 0,
      });
    }
    if (el.find('form').length > 0) {
      tl.add(animForm(), '<-1');
    }
  });

  // ----- SERVICES ----- //

  if ($('#services').length > 0) {
    const serviceTl = gsap.timeline({
      scrollTrigger: {
        trigger: $('#services'),
        start: 'top bottom-=20%',
        end: 'top center-=25%',
      },
    });

    serviceTl.from('.service-single', {
      y: 55,
      opacity: 0,
      stagger: 0.3,
    });
    serviceTl.from('#services .btn', {
      x: -55,
      opacity: 0,
    });
  }

  // ----- NUMBERS ----- //

  if ($('#numbers').length > 0) {
    ScrollTrigger.create({
      trigger: '#numbers',
      start: 'top bottom-=25%',
      once: true,
      onEnter() {
        $('.counter').each(function () {
          var $this = $(this),
            countTo = $this.attr('data-count');

          $({ countNum: $this.text() }).animate(
            {
              countNum: countTo,
            },

            {
              duration: 1500,
              easing: 'linear',
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum);
              },
            }
          );
        });
      },
    });
  }

  // ----- BRANDS ----- //

  if ($('#brands').length > 0) {
    const brandsTl = gsap.timeline({
      scrollTrigger: {
        trigger: $('#brands'),
        start: 'top bottom-=20%',
        end: 'top center-=25%',
      },
    });

    brandsTl.from('.brand-image', {
      y: 55,
      opacity: 0,
      stagger: 0.3,
    });
    brandsTl.from('#brands .btn', {
      x: 55,
      opacity: 0,
    });
  }

  // ----- REVIEWS ----- //

  if ($('#reviews').length > 0) {
    const reviewTl = gsap.timeline({
      scrollTrigger: {
        trigger: $('.review-wrapper'),
        start: 'top bottom-=25%',
        end: 'top center',
      },
    });

    reviewTl.from($('.review-wrapper'), {
      x: 55,
      opacity: 0,
    });
  }
  // ----- FOOTER ----- //

  const footerTl = gsap.timeline({
    scrollTrigger: {
      trigger: $('footer'),
      start: 'top bottom-=20%',
      start: 'top bottom-=20%',
    },
  });

  footerTl.from($('footer .left h2, footer .right h2'), {
    y: 150,
    opacity: 0,
  });
  footerTl.staggerFrom(
    $('footer .left p'),
    0.5,
    {
      y: 55,
      opacity: 0,
    },
    0.25
  );
  footerTl.from('footer .left a', {
    y: 55,
    opacity: 0,
  });
  footerTl.staggerFrom(
    $('footer .right li'),
    0.5,
    {
      y: 55,
      opacity: 0,
      delay: -2.2,
    },
    0.25
  );
  footerTl.from($('footer .right p'), 0.5, {
    y: 55,
    opacity: 0,
  });
});
