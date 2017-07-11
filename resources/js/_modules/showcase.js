import { Module } from "wrapper6";
var $ = jQuery;
export default class Showcase extends Module {
    ready(app) {

        var windowHeight = $(window).height();

        $(window).on('resize', function (event) {

            windowHeight = $(window).height();

        });

        //Check if the right-menu has been expanded
        var expandCheck = false;

        $(".expander").click(function(){

            if(expandCheck == false){

                $(".right-side").animate({right: 0});
                $(".expander").animate({right: "420px"});
                $(".expander i").addClass("fa-angle-right");

                expandCheck = true;

            } else {

                $(".right-side").animate({right: '-420px'});
                $(".expander").animate({right: '0'});
                $(".expander i").removeClass("fa-angle-right");

                expandCheck = false;

            }


        });

    }
}