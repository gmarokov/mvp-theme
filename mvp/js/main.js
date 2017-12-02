jQuery(document).ready(function($) {


    /*======= Skillset *=======*/
    
    $('.level-bar-inner').css('width', '0');
    
    $(window).on('load', function() {

        $('.level-bar-inner').each(function() {
        
            var itemWidth = $(this).data('level');
            
            $(this).animate({
                width: itemWidth
            }, 800);
            
        });

    });
    
    /* Bootstrap Tooltip for Skillset */
    $('.level-label').tooltip();

    //Moving letters
    function switch_text(el,txt,delay,callback){
        setTimeout(function(){
          TweenLite.to(el,1,{text: {value:txt},onComplete:function(){
           if(callback && typeof(callback) === 'function' ){
               callback();
           }
          }}); 
      }, delay);
    }
    
    function init(){
        switch_text('#description-title span','HTML',0);
        switch_text('#description-title span','JAVASCRIPT',2000);
        switch_text('#description-title span','CSS',4000);
        switch_text('#description-title span','WORDPRESS',6000);
        switch_text('#description-title span','PHP',8000);
        switch_text('#description-title span','JUST CODE',10000,function(){
            // run again after 6s
            setTimeout(init,6000); 
        });
    }
    
    function blink(){
         $('#cursor').toggleClass('blink');
    }
    
    // Bink the cursor
    setInterval(blink,800); 
    
    // Init the magic
    init();


    //Ham button
    jQuery(document).ready(function ($) {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
           isClosed = false;
      
          trigger.click(function () {
            hamburger_cross();      
          });
      
          function hamburger_cross() {
      
            if (isClosed == true) {          
              overlay.hide();
              trigger.removeClass('is-open');
              trigger.addClass('is-closed');
              isClosed = false;
            } else {   
              overlay.show();
              trigger.removeClass('is-closed');
              trigger.addClass('is-open');
              isClosed = true;
            }
        }
        
    //  //Search button
    // var s = $('input'),
    // f  = $('form'),
    // a = $('.after');

    // s.focus(function(){
    // if( f.hasClass('open') ) return;
    // f.addClass('in');
    // setTimeout(function(){
    // f.addClass('open');
    // f.removeClass('in');
    // }, 1300);
    // });

    // a.on('click', function(e){
    //     e.preventDefault();
    //     if( !f.hasClass('open') ) return;
    //     s.val('');
    //     f.addClass('close');
    //     f.removeClass('open');
    //     setTimeout(function(){
    //         f.removeClass('close');
    //     }, 1300);
    // })

    // f.submit(function(e){
    // e.preventDefault();
    // f.addClass('explode');
    // setTimeout(function(){
    // s.val('');
    // f.removeClass('explode');
    // }, 3000);
    // })

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });  
    });
    
    
    /* jQuery RSS - https://github.com/sdepold/jquery-rss */
    
    // $("#rss-feeds").rss(
    
    //     //Change this to your own rss feeds
    //     "http://feeds.feedburner.com/TechCrunch/startups",
        
    //     {
    //     // how many entries do you want?
    //     // default: 4
    //     // valid values: any integer
    //     limit: 3,
        
    //     // the effect, which is used to let the entries appear
    //     // default: 'show'
    //     // valid values: 'show', 'slide', 'slideFast', 'slideSynced', 'slideFastSynced'
    //     effect: 'slideFastSynced',
        
    //     // outer template for the html transformation
    //     // default: "<ul>{entries}</ul>"
    //     // valid values: any string
    //     layoutTemplate: "<div class='item'>{entries}</div>",
        
    //     // inner template for each entry
    //     // default: '<li><a href="{url}">[{author}@{date}] {title}</a><br/>{shortBodyPlain}</li>'
    //     // valid values: any string
    //     entryTemplate: '<h3 class="title"><a href="{url}" target="_blank">{title}</a></h3><div><p>{shortBodyPlain}</p><a class="more-link" href="{url}" target="_blank"><i class="fa fa-external-link"></i>Read more</a></div>'
        
    //     }
    // );
    
    /* Github Calendar - https://github.com/IonicaBizau/github-calendar */
    //GitHubCalendar("#github-graph", "IonicaBizau");
    
    
    /* Github Activity Feed - https://github.com/caseyscarborough/github-activity */
    //GitHubActivity.feed({ username: "caseyscarborough", selector: "#ghfeed" });


});