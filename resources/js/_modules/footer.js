/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class Footer extends Module {
	ready(app) {
		
		$(document).ready(function(){
			console.log('Loaded footer.js');

            $(".phone-screen .md-button").mouseenter(function(){
                $(".phone-screen .mail").css('bottom', '0px');
            });

            $(".phone-screen .md-button").mouseleave(function(){
                $(".phone-screen .mail").css('bottom', '-30px');
            });

            $('.phone-screen .md-button').click(function (event) {
                if($(this).attr("data-id") == 1){
                    var email = 'thomasmessell@gmail.com';
                    document.location = "mailto:"+email;
                }
            });

            $('.popup-content').click(function(){
                event.stopPropagation();
            });

            $('.md-button').click(function(){
                $(this).blur();
            });

		});

	}
}