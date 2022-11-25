import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'
import Swup from 'swup';
import SwupPreloadPlugin from '@swup/preload-plugin';

Alpine.plugin(intersect)

window.Alpine = Alpine
 
Alpine.start()

const swup = new Swup({
    plugins: [new SwupPreloadPlugin()]
  });

// import Turbolinks from 'turbolinks';
// Turbolinks.start();