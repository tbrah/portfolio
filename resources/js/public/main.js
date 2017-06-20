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
import Github from "../_modules/github.js";
import Controller from "../_modules/controller.js";
import Footer from "../_modules/footer.js";
import Laptop from "../_modules/laptop.js";
import Scroll from "../_modules/scroll.js";
/* Register modules
 ----------------------------------------------------------*/
app.use(Main);
app.use(Github);
app.use(Controller);
app.use(Footer);
app.use(Laptop);
app.use(Scroll);

import $ from "jquery";
window.jQuery = window.$ = $;
