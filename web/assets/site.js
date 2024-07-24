import alpinejs from 'alpinejs'
import 'htmx'
import focus from '@alpinejs/focus'
import collapse from '@alpinejs/collapse'

// Start Alpine.js
window.Alpine = alpinejs
Alpine.plugin(focus)
Alpine.plugin(collapse)
alpinejs.start()
