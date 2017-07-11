import { Module } from "wrapper6";
var $ = jQuery;
export default class Showcase extends Module {
    ready(app) {

        var windowWidth = $(window).width();

        $(window).on('resize', function (event) {

            windowWidth = $(window).width();

            console.log(windowWidth);

        });

        //Check if the right-menu has been expanded
        var expandCheck = false;

        $(".expander").click(function(){


            //For mobile devices
            if(expandCheck == false && windowWidth < 400){

                $(".right-side").animate({ right: 0 });
                $(".expander").animate({ right: "310px" });
                $(".expander i").addClass("fa-angle-right");

                expandCheck = true;

            } else{

                $(".right-side").animate({ right: '-420px' });
                $(".expander").animate({ right: '0' });
                $(".expander i").removeClass("fa-angle-right");

                expandCheck = false;


            }

            //For desktop
            if(expandCheck == false && windowWidth > 400){

                $(".right-side").animate({right: 0});
                $(".expander").animate({right: "420px"});
                $(".expander i").addClass("fa-angle-right");

                expandCheck = true;


            } else if(expandCheck == true && windowWidth > 400) {

                $(".right-side").animate({right: '-420px'});
                $(".expander").animate({right: '0'});
                $(".expander i").removeClass("fa-angle-right");

                expandCheck = false;


            }


        });

    }
}