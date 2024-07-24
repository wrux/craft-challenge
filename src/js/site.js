import '../css/site.css'
import alpinejs from 'alpinejs'
import 'htmx.org'
import focus from '@alpinejs/focus'
import collapse from '@alpinejs/collapse'

// Start Alpine.js
window.Alpine = alpinejs
Alpine.plugin(focus)
Alpine.plugin(collapse)
alpinejs.start()
