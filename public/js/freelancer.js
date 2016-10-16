// Freelancer Theme JavaScript
(function($) {

    
    
    "use strict"; // Start of use strict

    //登录
    window.login = false;
    
    //订阅
    window.subscribe = false;
    

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Floating label headings for the contact form
    $(function() {
        $("body").on("input propertychange", ".floating-label-form-group", function(e) {
            $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
        }).on("focus", ".floating-label-form-group", function() {
            $(this).addClass("floating-label-form-group-with-focus");
        }).on("blur", ".floating-label-form-group", function() {
            $(this).removeClass("floating-label-form-group-with-focus");
        });
    });

    //登录按钮
    $("#loginBtn").click(function(){
        window.login = true;
        $("#login-modal").modal("hide");
        $("#login").hide();
        $("#register").hide();
        $("#user").show();
        $("#userIcon").show();
    });
    
    //订阅按钮
    $("#subscribeBtn").click(function(){
        window.subscribe = true;
        $("#subscribe-modal").modal("hide");
        alert("订阅成功！请观看教程");
    })

 

    $(".portfolio-link").click(function(){
   
        if(!window.login){
            $(".portfolio-link").attr("href",""); 
            $(".portfolio-link").attr("data-toggle","modal");
            $(".portfolio-link").attr("data-target","#login-modal");
     
        } else{
            if(window.subscribe){
                $(".portfolio-link").removeAttr("data-toggle");
                $(".portfolio-link").removeAttr("data-target");
                $(".portfolio-link").attr("href","item.html");
            }else{  
                $(".portfolio-link").attr("data-toggle","modal");
                $(".portfolio-link").attr("data-target","#subscribe-modal");
            }
        }
    })


    $(".list-group-item").click(function(){ 
        switch (this.id){
            case "all":
            $(".items").show();
            break;
            case "beginner":
            $(".items").hide();
            $("#item1").show();
            $("#item2").show();
            break;
            case "intermidiate":
            $(".items").hide();
            $("#item3").show();
            $("#item4").show();
            break;
            default:
            $(".items").hide();
            $("#item5").show();
            $("#item6").show();
            break;
        }
    })
})(jQuery); // End of use strict
