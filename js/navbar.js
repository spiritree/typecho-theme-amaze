    // Drop Bootstarp low-performance Navbar
    // Use customize navbar with high-quality material design animation
    // in high-perf jank-free CSS3 implementation
    var $body   = document.body;
    var $toggle = document.querySelector('.navbar-toggle');
    var $navbar = document.querySelector('#huxblog_navbar');
    var $collapse = document.querySelector('.navbar-collapse');

    var __HuxNav__ = {
        close: function(){
            $navbar.className = " ";
            // wait until animation end.
            setTimeout(function(){
                // prevent frequently toggle
                if($navbar.className.indexOf('in') < 0) {
                    $collapse.style.height = "0px"
                }
            },400)
        },
        open: function(){
            $collapse.style.height = "auto"
            $navbar.className += " in";
        }
    }

    // Bind Event
    $toggle.addEventListener('click', function(e){
        if ($navbar.className.indexOf('in') > 0) {
            __HuxNav__.close()
        }else{
            __HuxNav__.open()
        }
    })

    /**
     * Since Fastclick is used to delegate 'touchstart' globally
     * to hack 300ms delay in iOS by performing a fake 'click',
     * Using 'e.stopPropagation' to stop 'touchstart' event from 
     * $toggle/$collapse will break global delegation.
     * 
     * Instead, we use a 'e.target' filter to prevent handler
     * added to document close HuxNav.  
     *
     * Also, we use 'click' instead of 'touchstart' as compromise
     */
    document.addEventListener('click', function(e){
        if(e.target == $toggle) return;
        if(e.target.className == 'icon-bar') return;
        __HuxNav__.close();
    })

// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function($) {
  var MQL = 1170;

  //primary navigation slide-in effect
  if ($(window).width() > MQL) {
      var headerHeight = $('.navbar-custom').height(),
          bannerHeight  = $('.intro-header .container').height();     
      $(window).on('scroll', {
              previousTop: 0
          },
          function() {
              var currentTop = $(window).scrollTop(),
                  $catalog = $('.side-catalog');

              //check if user is scrolling up by mouse or keyborad
              if (currentTop < this.previousTop) {
                  //if scrolling up...
                  if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')) {
                      $('.navbar-custom').addClass('is-visible');
                  } else {
                      $('.navbar-custom').removeClass('is-visible is-fixed');
                  }
              } else {
                  //if scrolling down...
                  $('.navbar-custom').removeClass('is-visible');
                  if (currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed')) $('.navbar-custom').addClass('is-fixed');
              }
              this.previousTop = currentTop;


              //adjust the appearance of side-catalog
              $catalog.show()
              if (currentTop > (bannerHeight + 41)) {
                  $catalog.addClass('fixed')
              } else {
                  $catalog.removeClass('fixed')
              }
          });
  }
});