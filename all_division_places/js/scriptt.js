// search bar js start
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
// menubar js
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
// header js
let header = document.querySelector('.header');
//home er controls button
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () => {
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    // loginForm.classList.remove('active');

    if (window.scrollY > 150) {
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
}
//menubar js start
menu.addEventListener('click', () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});
//search bar js 
searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});


//home er controls button js
videoBtn.forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
        // autoplay: true;

    });
    // owlcarosal er ta
    // $('.home-slider').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     nav: true,
    //     items: 1
    // })

});


//popular place start
var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
        1000: {
            slidesPerView: 4,
        },

    },
});

//popular place end

// leatest post js start


var swiper = new Swiper(".blogs-slider", {
    slidesPerView: "auto",
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

var swiper = new Swiper(".blogs-slider", {
    loop: true,
    grabCursor: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});

// leatest post js end

// review js start

$(document).ready(function () {

    // $('#search, .fa-search').mouseenter(function () {
    //     $('.logo').hide();
    // });

    // $('#search, .fa-search').mouseleave(function () {
    //     $('.logo').show();
    // });

    // $('.fa-bars').click(function () {
    //     $('.navbar').toggle();
    //     $(this).toggleClass('fa-times');
    // });

    // $('.navbar, .navbar a').click(function () {
    //     $('.navbar').hide();
    //     $('.fa-bars').removeClass('fa-times');
    // });

    // $(window).on('scroll load', function () {

    //     if ($(window).scrollTop() > 20) {
    //         $('#header').css({
    //             'background': '#EB4D4B',
    //             'box-shadow': '0 .1rem .3rem #000'
    //         });
    //     } else {
    //         $('#header').css({
    //             'background': '#333',
    //             'box-shadow': 'none'
    //         });
    //     }

    // });

    // $('.home-slider').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     nav: true,
    //     items: 1,
    //     autoplay: true
    // });

    // $('.product-slider').owlCarousel({
    //     loop: true,
    //     nav: true,
    //     items: 3,
    //     autoplay: true,
    //     center: true,
    //     responsive: {
    //         0: {
    //             items: 1,
    //             nav: true
    //         },
    //         600: {
    //             items: 2
    //         },
    //         1000: {
    //             items: 3
    //         }
    //     }
    // });

    $('.review-slider').owlCarousel({
        loop: true,
        nav: true,
        items: 1,
        autoplay: true
    });

    $('.brand-slider').owlCarousel({
        loop: true,
        items: 4,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 2
            },
            550: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

});

// review js end








//emergency vitore start
// function search_animal() {
//     let input = document.getElementById('searchbar').value
//     input = input.toLowerCase();
//     let x = document.getElementsByClassName('animals');

//     for (i = 0; i < x.length; i++) {
//         if (!x[i].innerHTML.toLowerCase().includes(input)) {
//             x[i].style.display = "none";
//         } else {
//             x[i].style.display = "list-item";
//         }
//     }
// }





// search start


// // getting all required elements
// const searchWrapper = document.querySelector(".search_input");
// const inputBox = searchWrapper.querySelector("input");
// const suggBox = searchWrapper.querySelector(".autocom-box");
// const icon = searchWrapper.querySelector(".icon");
// let linkTag = searchWrapper.querySelector("a");
// let webLink;

// // if user press any key and release
// inputBox.onkeyup = (e) => {
//     let userData = e.target.value;
//     let emptyArray = [];
//     if (userData) {
//         icon.onclick = () => {
//             webLink = `https://www.google.com/search?q=${userData}`;
//             linkTag.setAttribute("href", webLink);
//             linkTag.click();
//         }
//         emptyArray = suggestions.filter((data) => {
//             return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
//         });
//         emptyArray = emptyArray.map((data) => {
//             return data = `<li>${data}</li>`;
//         });
//         searchWrapper.classList.add("active");
//         showSuggestions(emptyArray);
//         let allList = suggBox.querySelectorAll("li");
//         for (let i = 0; i < allList.length; i++) {

//             allList[i].setAttribute("onclick", "select(this)");
//         }
//     } else {
//         searchWrapper.classList.remove("active");
//     }
// }

// function select(element) {
//     let selectData = element.textContent;
//     inputBox.value = selectData;
//     icon.onclick = () => {
//         webLink = `https://www.google.com/search?q=${selectData}`;
//         linkTag.setAttribute("href", webLink);
//         linkTag.click();
//     }
//     searchWrapper.classList.remove("active");
// }

// function showSuggestions(list) {
//     let listData;
//     if (!list.length) {
//         userValue = inputBox.value;
//         listData = `<li>${userValue}</li>`;
//     } else {
//         listData = list.join('');
//     }
//     suggBox.innerHTML = listData;
// }

// search end

// emergency search start

// emergency search end

//letest post start

//letest post end