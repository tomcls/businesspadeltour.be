import _ from 'lodash';
window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import { Carousel } from 'flowbite';
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
function buildThresholdList() {
    var thresholds = [];
    var numSteps = 20.0;
    for (var i = 1.0; i <= numSteps; i++) {
        var ratio = i / numSteps;
        thresholds.push(ratio);
    }

    thresholds.push(0);
    return thresholds;
}
export function loadImages() {
    //var lazyImages = [].slice.call(document.querySelectorAll(".animate-pulse"));
    var observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (!hasClass(img, 'loaded') && img.dataset.src) {
                        img.setAttribute('src', img.dataset.src);
                        img.className += ' loaded';
                        img.classList.remove("animate-pulse");
                        img.classList.remove("scale-125");
                        img.classList.add("scale-100");
                        observer.unobserve(img);
                    }
                } 
            });
        }, {
            root: null,
            rootMargin: "0px",
            threshold: buildThresholdList(),
        })
    for (let img of document.getElementsByTagName('img')) {
        observer.observe(img);
    }
};
export function animate() {
    console.log('animate')
    //var lazyImages = [].slice.call(document.querySelectorAll(".animate-pulse"));
    var observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    
                    const fadinAnimation = entry.target;
                    if (!hasClass(fadinAnimation, 'animated') ) {
                        fadinAnimation.className += ' animated';
                        fadinAnimation.classList.add("animate-fadein");
                        setTimeout(function() {
                            fadinAnimation.classList.remove("opacity-0");
                        },1000)
                        observer.unobserve(fadinAnimation);
                    }
                } 

            });
        }, {
            root: null,
            rootMargin: "0px",
            threshold: buildThresholdList(),
        })
   
    for (let fadinAnimation of document.getElementsByClassName('fadinAnimation')) {
        observer.observe(fadinAnimation);
    }
};
window.loadImages = loadImages;
window.animate = animate;

export function hasClass(element, className) {
    return (' ' + element.className + ' ').indexOf(' ' + className + ' ') > -1;
}
window.hasClass = hasClass;

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start();