/**
 * @param $ jQuery
 */
(function ($) {
    'use strict';

    /**
     *
     * @param el DomElement
     * @returns {Vivus}
     */
    function vsvgInitElement(el) {
        var $el = $(el);
        return new Vivus(el, $el.data() || {});
    }

    $(window).load(function () {
        $('.animate-svg').each(function (i, el) {
            vsvgInitElement(el);
        })
    })
})(jQuery);
