import { Module } from "wrapper6";
var $ = jQuery;
export default class Showcase extends Module {
    ready(app) {

        var windowHeight = $(window).height();

        console.log(windowHeight);

        $(window).on('resize', function (event) {

            windowHeight = $(window).height();
            console.log(windowHeight);

        });

    }
}