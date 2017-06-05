import {Module} from "wrapper6";
var $ = jQuery;
export default class Github extends Module {
	ready(app) {
		
		$(document).ready(function(){
			console.log('Loaded github.js');
        
            /*$('.part-github').mouseenter(function(){
                $(this).css('width', '55%');
                $('.part-treehouse').css('width', '45%');
            });

            $('.part-github').mouseleave(function(){
                $(this).css('width', '50%');
                $('.part-treehouse').css('width', '50%');
            });

            $('.part-treehouse').mouseenter(function(){
                $(this).css('width', '55%');
                $('.part-github').css('width', '45%');
            });

            $('.part-treehouse').mouseleave(function(){
                $(this).css('width', '50%');
                $('.part-github').css('width', '50%');
            });*/

		});

	}
}