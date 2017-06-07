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

		});

	}
}