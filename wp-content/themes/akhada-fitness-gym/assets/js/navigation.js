/* global akhada_fitness_gymScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,                            
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'                        
	});
});

function akhada_fitness_gym_open() {
	window.respNav = true;
	jQuery(".sidenav").addClass("open");
}
function akhada_fitness_gym_close() {
	window.respNav = false;
  	jQuery(".sidenav").removeClass("open");
}

jQuery(document).ready(function () {
	window.currentfocus = null;
  	akhada_fitness_gym_checkfocusdElement();
	var body = document.querySelector('body');
	body.addEventListener('keyup', akhada_fitness_gym_check_tab_press);
	var gotoHome = false;
	var gotoClose = false;
	window.respNav=false;
 	function akhada_fitness_gym_checkfocusdElement(){
	 	if(window.currentfocus=document.activeElement.className){
		 	window.currentfocus=document.activeElement.className;
	 	}
 	}
	function akhada_fitness_gym_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
			if (e.keyCode == 9) {
				if(window.respNav){
					if (!e.shiftKey) {
						if(gotoHome) {
							jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
						}
					}
					if (jQuery("a.closebtn").is(":focus")) {
						gotoHome = true;
					} else {
						gotoHome = false;
					}

				}
			}
		}
		if (e.shiftKey && e.keyCode == 9) {
			if(window.innerWidth < 999){
				if(window.currentfocus=="header-search"){
					jQuery(".mobiletoggle").focus();
				}else{
					if(window.respNav){
						if(gotoClose){
							jQuery("a.closebtn").focus();
						}
						if (jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
							gotoClose = true;
						} else {
							gotoClose = false;
						}
					
					}

				}
			}
		}
	 	akhada_fitness_gym_checkfocusdElement();
	}
});