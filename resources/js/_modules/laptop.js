/*
 Dependencies
 */
import { Module } from "wrapper6";
var $ = jQuery;
export default class Laptop extends Module {
    ready(app) {

        $(document).ready(function () {
            console.log('Loaded laptop.js');

            /*$(".color-picker input").click(function(){
                console.log("this is working");
            });*/
        });

    }
}