import { Module } from "wrapper6";
var $ = jQuery;
export default class Showcase extends Module {
    ready(app) {

        var windowHeight = $(window).height();

        console.log(windowHeight);

        if (windowHeight <= 895) {
            $(".next-view").hide();
            $(".more-image-view").hide();
            $(".description-view").css({
                'position': 'relative',
                'left': '875px',
                'top': '0',
            });
            $(".image-view").css('height', '100%');
            $(".technology-view").css({
                'position': 'relative',
                'right': '-875px',
                'margin-bottom': '20px',
                'flex': '1',
            });
        } else {
            $(".next-view").show();
            $(".more-image-view").show();
            $(".image-view").css('height', '82%');
            $(".description-view").css({
                'position': 'absolute',
                'right': '0',
                'top': '160px',
            });
            $(".technology-view").css({
                'position': 'absolute',
                'right': '0',
                'margin-bottom': '0',
                'flex': '0',
            });
        }

        $(window).on('resize', function (event) {

            windowHeight = $(window).height();
            console.log(windowHeight);

            if(windowHeight <= 895){
                $(".next-view").hide();
                $(".more-image-view").hide();
                $(".description-view").css({
                    'position':'relative',
                    'left':'875px',
                    'top':'0',
                });
                $(".image-view").css('height', '100%');
                $(".technology-view").css({
                    'position':'relative',
                    'right':'-875px',
                    'margin-bottom':'20px',
                    'flex':'1',
                });
            } else {
                $(".next-view").show();
                $(".more-image-view").show();
                $(".image-view").css('height', '82%');
                $(".description-view").css({
                    'position':'absolute',
                    'right':'0',
                    'top':'160px',
                });
                $(".technology-view").css({
                    'position': 'absolute',
                    'right': '0',
                    'margin-bottom': '0',
                    'flex': '0',
                });
            }

        });

    }
}