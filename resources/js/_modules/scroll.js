import { Module } from "wrapper6";
var $ = jQuery;
export default class Scroll extends Module {
    ready(app) {

        $('nav ul li a').click(function () {

            window.thisitem = $(this);

            $('html, body').animate({
                scrollTop: $($(thisitem).attr('href')).offset().top
            }, 1000);
            return false;

        });

    }
}