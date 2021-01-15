$(document).ready(function() {
    $('.pb-instagram').each(function(){
        var pb_instagram = $(this);
        var options = JSON.parse(pb_instagram.attr('data-option'));
        var insta_urls = false;
        if(options.linked == 1)
          insta_urls = true;
        var insta_comments = false;
        if(options.comments == 1)
            insta_comments = true;
        var insta_date = false;
        if(options.date == 1)
            insta_date = true;
        var insta_likes = false;
        if(options.likes == 1)
            insta_likes = true;
        pb_instagram.find('.pb-instagram-images').instagramLite({
            accessToken: options.access_token,
            limit:options.limit,
            urls: insta_urls,
            comments: insta_comments,
            date: insta_date,
            likes: insta_likes,
            element_class : options.element_class,
            success: function() {
                if(options.view_type == 'carousel') {
                    var $carousel = pb_instagram.find('.pb-instagram-carousel');
                    if ( ! $carousel.length ) {
                        return;
                    }
                    $carousel.owlCarousel({
                        loop:true,
                        margin:parseInt(options.gutter),
                        nav:$carousel.attr('data-nav'),
                        dots:$carousel.attr('data-dots'),
                        autoplay:$carousel.attr('data-auto'),
                        rewind:$carousel.attr('data-rewind'),
                        slideBy:$carousel.attr('data-slidebypage'),
                        lazyLoad:true,
                        responsive:{
                            0:{
                                items:$carousel.attr('data-xs')
                            },
                            576:{
                                items:$carousel.attr('data-sm')
                            },
                            992:{
                                items:$carousel.attr('data-md')
                            }
                        }
                    });
                    $carousel.addClass('owl-carousel');
                }
            }
        });
    });
});
