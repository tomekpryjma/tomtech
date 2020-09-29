// === Nav animation (TODO: move to nav-animation.js) ===
(function() {
    var viewportWidth = document.body.clientWidth;
    var siteNav = document.getElementById('site-nav');
    var openNavTrigger = document.getElementById('open-nav');
    var closeNavTrigger = document.getElementById('close-nav');
    var menuItems = document.querySelectorAll('#primary-menu ul li');
    var tweenNavSlide = gsap.to(siteNav, {
        duration: 0.6,
        x: -viewportWidth,
        skewX: 0,
        ease: "expo.inOut"
    });
    var tweenMenuItemsAppearing = gsap.to(menuItems, {
        duration: 0.3,
        opacity: 1,
        ease: 'ease',
        stagger: 0.1,
        y: 5
    });
    var timeline = gsap.timeline({ paused: true });

    timeline
        .add(tweenNavSlide)
        .add(tweenMenuItemsAppearing);

    openNavTrigger.addEventListener('click', function() {
        timeline.play();
    });

    closeNavTrigger.addEventListener('click', function() {
        timeline.reverse();
    });
}());

// (function() {
//     var isMobile = window.matchMedia('only screen and (max-width: 1024px)');

//     if (! isMobile.matches) {
//         var anchorTags = document.querySelectorAll('a');

//         anchorTags.forEach(function(tag) {
//             tag.addEventListener('mouseenter', function() {
//                 tag.classList.add('animating');
//             });
//             tag.addEventListener('mouseleave', function() {
//                 // tag.classList.remove('animating');
//                 tag.style.animationIterationCount = 2;
//             });

//             // tag.addEventListener('webkitAnimationEnd mozAnimationEnd animationend', function() {
//             //     tag.classList.remove('animating');
//             // });
//         });
//     }
// }())