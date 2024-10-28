(function($) {
    'use strict';

    document.addEventListener("DOMContentLoaded", function() {

        let divc = document.querySelectorAll('div[style]');

        for (let i = 0, len = divc.length; i < len; i++) {

            let actdisplay = window.getComputedStyle(divc[i], null).display;

            let actclear = window.getComputedStyle(divc[i], null).clear;

            if (actdisplay == 'block' && actclear == 'both') {

                divc[i].remove();

            }
        }
    });


})(jQuery);