var hellobar = new Swiper('.hellobar', {
    loop:true,
    autoplay: {
      delay: 5000, // 5 seconds delay between slides
    },
  });
  
  var heroslider = new Swiper('.heroslider', {
    loop:true,
    effect: "slide",
    slidesPerView: 1.5, 
    centeredSlides: true,
    speed: 2500,
    freeMode: true,
    autoplay:true,
    navigation: false,
    autoplay: {
      delay: 10000, 
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 8
      },
      640: {
        slidesPerView: 1.5,
        spaceBetween: 10
      }
    },
  });
  
  var login = new Swiper('.login', {
    loop:true,
    effect: "fade",
    slidesPerView: 1, 
    centeredSlides: true,
    speed: 2500,
    freeMode: true,
    navigation: false,
    autoplay:true,
    autoplay: {
      delay: 5000, 
    }
    
  });
  var categories = new Swiper('.categories', {
    loop:true,
    effect: "slide",
    autoplay:true,
    slidesPerView: 2, 
    freeMode: true,
    navigation: false,
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      0: {
        slidesPerView: 3,
        spaceBetween: 8
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 8
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 8
      },
      1366: {
        slidesPerView: 6,
        spaceBetween: 24
      }
    },
});  

  var productslider = new Swiper('.product-slider', {
    loop:true,
    effect: "slide",
    autoplay:true,
    slidesPerView: 5, 
    freeMode: true,
    navigation: false,
    autoplay: {
      delay: 3000, // 5 seconds delay between slides
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 8
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 8
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 8
      },
      1366: {
        slidesPerView: 6,
        spaceBetween: 24
      }
    },
});  

  var instaposts = new Swiper('.instaposts', {
    loop:true,
    effect: "slide",
    autoplay:true,
    freeMode: true,
    slidesPerView: 2, 
    navigation: false,
    autoplay: {
      delay: 3000, // 5 seconds delay between slides
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 8
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 8
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 8
      },
      1366: {
        slidesPerView: 6,
        spaceBetween: 24
      }
    },
});

 
var boughtwith = new Swiper('.bought-with', {
    loop:true,
    effect: "slide",
    autoplay:true,
    freeMode: true,
    slidesPerView: 3,
    spaceBetween: 10,
    autoplay: {
      delay: 3000, // 5 seconds delay between slides
    }
});