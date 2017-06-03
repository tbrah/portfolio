/* Dependencies
 ----------------------------------------------------------*/
import {Application} from "wrapper6";
/* Vendor
 ----------------------------------------------------------*/
/* Setup
 ----------------------------------------------------------*/
var app = window.app = new Application(window.options || {});
/* Services
 ----------------------------------------------------------*/
/* Register services
 ----------------------------------------------------------*/
/* Modules
 ----------------------------------------------------------*/
import Main from "../_modules/main.js";
/* Register modules
 ----------------------------------------------------------*/
app.use(Main);

import $ from "jquery";
window.jQuery = window.$ = $;
