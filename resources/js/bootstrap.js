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


window.alpineLightbox = function () {
    return {
      src: '',
      alt: '',
      isOpen: false,
      // One transparent pixel, to prevent broken img src: 
      pixel: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=',
      open($event) {
        // Get the clicked-on thumbnail
        const img = $event.target
  
        // Set the lightbox image src to the fullsize image
        this.src = img.getAttribute('data-fullsize')
        // Set the lightbox image alt attribute
        this.alt = img.getAttribute('alt')
        
        this.isOpen = true
  
        // Prevent the window from scrolling
        const html = document.documentElement;
        html.classList.add('h-screen', 'overflow-hidden', 'scroll-none');
      },
      close() {
        // Close lightbox
        this.isOpen = false
        
        // Return lightbox img src to transparent pixel
        this.src = this.pixel
        // Remove lightbox img alt attribute
        this.alt = ''
  
        // Return window to its normal state
        const html = document.documentElement;
        html.classList.remove('h-screen', 'overflow-hidden', 'scroll-none');
      }
    }
  }
  
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
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start();