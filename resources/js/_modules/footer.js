/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class Footer extends Module {
	ready(app) {
		
		$(document).ready(function(){

            //Vertical Phone
            $(".phone-screen .md-button").mouseenter(function(){
                $(".phone-screen .mail").css('bottom', '0px');
            });

            $(".phone-screen .md-button").mouseleave(function(){
                $(".phone-screen .mail").css('bottom', '-30px');
            });

            //Horizontal Phone
            $(".phone-screen-hori .md-button").mouseenter(function(){
                $(".phone-screen-hori .mail").css('bottom', '-15px');
            });

            $(".phone-screen-hori .md-button").mouseleave(function(){
                $(".phone-screen-hori .mail").css('bottom', '-30px');
            });

            $('.phone-screen-hori .md-button').click(function (event) {
                if($(this).attr("data-id") == 1){
                    var email = 'thomasmessell@gmail.com';
                    document.location = "mailto:"+email;
                }
            });

		});

	}
}