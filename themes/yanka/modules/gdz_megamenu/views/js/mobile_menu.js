/**
 * @package Godzilla MegaMenu
 * @version 1.0
 * @Copyright (C) 2009 - 2020 Prestawork.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @Website: https://www.prestawork.com
**/
jQuery(function ($) {
    "use strict";
    $("#off-canvas-menu .mega .caret").click(function (e) {
        e.preventDefault();
        var _parent = $(this).parent();
        var _dropdown = _parent.next('.dropdown-menu');
        var _grandparent = _parent.parent();
        if(_grandparent.hasClass('open')) {
            _grandparent.removeClass('open');
            _dropdown.slideUp("normal");
            // $(this).removeClass('fa-angle-down');
            // $(this).addClass('fa-angle-right');
        } else {
            _grandparent.addClass('open');
            _dropdown.slideDown("normal");
            // $(this).removeClass('fa-angle-right');
            // $(this).addClass('fa-angle-down');
        }
    })
    $(".mega .caret").mouseover(function (e) {
        e.preventDefault();
        return false;
    })
    $("#off-canvas-menu li a").mouseover(function (e) {
        e.preventDefault();
        return false;

    })
});
