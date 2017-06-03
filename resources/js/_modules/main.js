/*
 Dependencies
 */
import {Module} from "wrapper6";
var $ = jQuery;
export default class Main extends Module {
	ready(app) {
		
		$(document).ready(function(){
			console.log('Loaded main.js');
		});

	}
}