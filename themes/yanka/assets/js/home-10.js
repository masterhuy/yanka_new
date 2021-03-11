/**
* 2007-2018 PrestaShop
*
* Joommasters Theme
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2018 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/
$(document).ready(function() {
	var imageUp = document.getElementsByClassName('js-init-parallax-up');
	var imageDown = document.getElementsByClassName('js-init-parallax-down');

	if (imageUp.length && imageDown.length){
		initParallax();
	};

	function initParallax(){
		new simpleParallax(imageUp, {
			orientation: 'up',
			overflow: 'true'
		});
	
		new simpleParallax(imageDown, {
			orientation: 'down',
			overflow: 'true'
		});
	};

});

