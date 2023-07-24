/*------------------------------------------------------------------
		File Name: Main Js
        Template Name: E-commerce Template
        Author Name:HR Venture
        Author Email:hrventurebd@gmail.com
-------------------------------------------------------------------*/
// home slider
$('.home-slider').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    items: 1,
    nav: false,
    smartSpeed: 900,
    autoplayTimeout: 10000,
    animateOut: 'fadeOut'
});

// new product
$('.product').owlCarousel({
    nav: true,
    margin: 8,
    loop: false,
    navText: ["<i class='la la-angle-left arrow'></i>", "<i class='la la-angle-right arrow'></i>"],
    smartSpeed: 900,
    responsive: {
        0: {
            items: 1
        },
        321: {
            items: 2
        },
        768: {
            items: 3
        },
        992: {
            items: 4
        },
        1200: {
            items: 6
        }
    }
});

// feature filter
$('.feature-filter').owlCarousel({
    nav: true,
    margin: 8,
    items: 1,
    loop: true,
    navText: ["<i class='la la-angle-left arrow'></i>", "<i class='la la-angle-right arrow'></i>"],
    smartSpeed: 900,
    autoplay: 2000,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 1
        },
        768: {
            items: 1
        },
        992: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
});

// hot product
$('.hot-deal').owlCarousel({
    nav: true,
    margin: 8,
    loop: true,
    dots: false,
    autoplay: 7000,
    navText: ["<i class='la la-angle-left arrow'></i>", "<i class='la la-angle-right arrow'></i>"],
    smartSpeed: 900,
    responsive: {
        0: {
            items: 1
        },
        321: {
            items: 2
        },
        768: {
            items: 3
        },
        992: {
            items: 4
        },
        1200: {
            items: 4
        }
    }
});

// partner
$('.partner').owlCarousel({
    nav: false,
    margin: 15,
    loop: true,
    smartSpeed: 900,
    responsive: {
        0: {
            items: 2
        },
        700: {
            items: 3
        },
        900: {
            items: 4
        },
        1200: {
            items: 6
        }
    }
});

// blog post
$('.blog-post').owlCarousel({
    nav: true,
    margin: 20,
    loop: true,
    navText: ["<i class='la la-angle-left arrow'></i>", "<i class='la la-angle-right arrow'></i>"],
    smartSpeed: 900,
    smartSpeed: 900,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        992: {
            items: 3
        },
        1200: {
            items: 3
        }
    }
});

// shop banner
$('.shop-banner').owlCarousel({
    margin: 20,
    items: 1,
    loop: false,
    smartSpeed: 1500,
});


// testmonial slider
$('.testmonial').owlCarousel({
    loop: true,
    margin: 15,
    autoplay: true,
    nav: true,
    navText: ["<i class='la la-angle-left arrow'></i>", "<i class='la la-angle-right arrow'></i>"],
    smartSpeed: 900,
    autoplayTimeout: 7000,
    animateOut: 'fadeOut',
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 2
        }
    }
});

/// quick view
function myFirst() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");
    var third = document.getElementById("third");
    var fourth = document.getElementById("fourth");
    var navFirst = document.getElementById("nav-first");
    var navsecond = document.getElementById("nav-second");
    var navthird = document.getElementById("nav-third");
    var navfourth = document.getElementById("nav-fourth");
    first.classList.add('d-block');
    first.classList.remove('d-none');
    second.classList.remove('d-block');
    second.classList.add('d-none');
    third.classList.remove('d-block');
    third.classList.add('d-none');
    fourth.classList.remove('d-block');
    fourth.classList.add('d-none');
    navFirst.classList.add('border-primary');
    navFirst.classList.remove('border-0');
    navsecond.classList.remove('border-primary');
    navsecond.classList.add('border-0');
    navthird.classList.remove('border-primary');
    navthird.classList.add('border-0');
    navfourth.classList.remove('border-primary');
    navfourth.classList.add('border-0');
}

function second() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");
    var third = document.getElementById("third");
    var fourth = document.getElementById("fourth");
    var navFirst = document.getElementById("nav-first");
    var navsecond = document.getElementById("nav-second");
    var navthird = document.getElementById("nav-third");
    var navfourth = document.getElementById("nav-fourth");
    second.classList.add('d-block');
    second.classList.remove('d-none');
    first.classList.remove('d-block');
    first.classList.add('d-none');
    third.classList.remove('d-block');
    third.classList.add('d-none');
    fourth.classList.remove('d-block');
    fourth.classList.add('d-none');
    navFirst.classList.remove('border-primary');
    navFirst.classList.add('border-0');
    navsecond.classList.add('border-primary');
    navsecond.classList.remove('border-0');
    navthird.classList.remove('border-primary');
    navthird.classList.add('border-0');
    navfourth.classList.remove('border-primary');
    navfourth.classList.add('border-0');
}

function third() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");
    var third = document.getElementById("third");
    var fourth = document.getElementById("fourth");
    var navFirst = document.getElementById("nav-first");
    var navsecond = document.getElementById("nav-second");
    var navthird = document.getElementById("nav-third");
    var navfourth = document.getElementById("nav-fourth");
    third.classList.add('d-block');
    third.classList.remove('d-none');
    first.classList.remove('d-block');
    first.classList.add('d-none');
    second.classList.remove('d-block');
    second.classList.add('d-none');
    fourth.classList.remove('d-block');
    fourth.classList.add('d-none');
    navFirst.classList.remove('border-primary');
    navFirst.classList.add('border-0');
    navsecond.classList.remove('border-primary');
    navsecond.classList.add('border-0');
    navthird.classList.add('border-primary');
    navthird.classList.remove('border-0');
    navfourth.classList.remove('border-primary');
    navfourth.classList.add('border-0');
}

function fourth() {
    var first = document.getElementById("first");
    var second = document.getElementById("second");
    var third = document.getElementById("third");
    var fourth = document.getElementById("fourth");
    var navFirst = document.getElementById("nav-first");
    var navsecond = document.getElementById("nav-second");
    var navthird = document.getElementById("nav-third");
    var navfourth = document.getElementById("nav-fourth");
    fourth.classList.add('d-block');
    fourth.classList.remove('d-none');
    first.classList.remove('d-block');
    first.classList.add('d-none');
    second.classList.remove('d-block');
    second.classList.add('d-none');
    third.classList.remove('d-block');
    third.classList.add('d-none');
    navFirst.classList.remove('border-primary');
    navFirst.classList.add('border-0');
    navsecond.classList.remove('border-primary');
    navsecond.classList.add('border-0');
    navthird.classList.remove('border-primary');
    navthird.classList.add('border-0');
    navfourth.classList.add('border-primary');
    navfourth.classList.remove('border-0');
}


function searchBtn() {
    var search = document.getElementById("search");
    var logo = document.getElementById("logo");
    var utility = document.getElementById("utility");
    search.classList.remove("mobile__search__bar");
    logo.classList.add("logo_utility");
    utility.classList.add("logo_utility");
}

function searchCloseBtn() {
    var search = document.getElementById("search");
    var logo = document.getElementById("logo");
    var utility = document.getElementById("utility");
    search.classList.add("mobile__search__bar");
    logo.classList.remove("logo_utility");
    utility.classList.remove("logo_utility");
}

/// large modern banner
$('.banner-lg').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    mouseDrag: true,
    touchDrag: true,
    smartSpeed: 900,
    responsive: {
        0: {
            items: 1
        },
        768: {
            stagePadding: 150,
            items: 1
        },
        1200: {
            stagePadding: 100,
            items: 2
        }
    }
})

//STICKY NAVBAR
window.onscroll = function () {
    mySticky();
    scrollFunction();
};

var navbar = document.getElementById("navbar");
var mainSticky = document.getElementById("mainSticky");
var sticky = 150;

function mySticky() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        mainSticky.classList.add("main-sticky");
    } else {
        navbar.classList.remove("sticky");
        mainSticky.classList.remove("main-sticky");
    }
}

//Get the button
var mybutton = document.getElementById("myBtn");

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        mybutton.style.transform = "translateY(0)";
    } else {
        mybutton.style.transform = "translateY(150px)";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function increment() {
    document.getElementById('demoInput').stepUp();
 }
 function decrement() {
    document.getElementById('demoInput').stepDown();
 }

 function myFunction(x) {
    if (x.matches) { // If media query matches
      document.getElementById("collapseOne").classList.remove("show");
    } else {
         document.getElementById("collapseOne").classList.add("show");
  
    }
  }
  
  var x = window.matchMedia("(max-width: 991px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes