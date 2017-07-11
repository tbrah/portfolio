import { Module } from "wrapper6";
var $ = jQuery;
export default class Header extends Module {
    ready(app) {

        $(document).ready(function () {

            setTimeout(function () {
                $(".title-box h3").css('opacity', 1);
            }, 1200);
            
        });

    }
}