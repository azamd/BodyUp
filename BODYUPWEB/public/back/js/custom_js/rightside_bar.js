"use strict";
;(function(window) {
    var
      // Is Modernizr defined on the global scope
      Modernizr = typeof Modernizr !== "undefined" ? Modernizr : false,
      // whether or not is a touch device
      isTouchDevice = Modernizr ? Modernizr.touch : !!('ontouchstart' in window || 'onmsgesturechange' in window),
      // Are we expecting a touch or a click?
      buttonPressedEvent = (isTouchDevice) ? 'touchstart' : 'click',
      fitness = function() {
          this.init();
      };

    // Initialization method
    fitness.prototype.init = function() {
        this.isTouchDevice = isTouchDevice;
        this.buttonPressedEvent = buttonPressedEvent;
    };

    fitness.prototype.getViewportHeight = function() {

        var docElement = document.documentElement,
                client = docElement.clientHeight,
                inner = window.innerHeight;

        if (client < inner)
            return inner;
        else
            return client;
    };

    fitness.prototype.getViewportWidth = function() {

        var docElement = document.documentElement,
                client = docElement.clientWidth,
                inner = window.innerWidth;

        if (client < inner)
            return inner;
        else
            return client;
    };

    // Creates a fitness object.
    window.fitness = new fitness();
})(this);
;(function($, window, document, undefined) {

    var pluginName = "fitnessMenu",
            Modernizr = typeof Modernizr !== "undefined" ? Modernizr : false,
            isTouchDevice = Modernizr ? Modernizr.touch : !!('ontouchstart' in window || 'onmsgesturechange' in window),
            buttonPressedEvent = (isTouchDevice) ? 'touchstart' : 'click',
            defaults = {
                toggle: true,
                hidingClass: 'sr-only',
                breakpoints: 768
            };

    function Plugin(element, options) {
        this.element = element;
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.buttonPressedEvent = buttonPressedEvent;
        this.init();
    }

    Plugin.prototype = {
        init: function() {

            var $this = $(this.element),
                    resizeTimer,
                    self = this;

          
        },
        initCollapse: function(el) {
            var breakpoints = this.settings.breakpoints;
            if ($(window).width() < breakpoints) {
                this.addCollapse(el);
            } else {
                this.removeCollapse(el);
            }
        },
        addCollapse: function(el) {
            var $toggle = this.settings.toggle;
            $('body').removeClass('sidebar-left-mini');

            el.find('li.active').has('ul').children('ul').addClass('collapse in');
            el.find('li').not('.active').has('ul').children('ul').addClass('collapse');

            el.find('li').has('ul').children('a').on(this.buttonPressedEvent, function(e) {
                e.preventDefault();

                $(this).parent('li').toggleClass('opened').children('ul').collapse('toggle');

                if ($toggle) {
                    $(this).parent('li').siblings().removeClass('opened').children('ul.in').collapse('hide');
                }
            });
        },
       
    };

    $.fn[ pluginName ] = function(options) {
        return this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin(this, options));
            }
        });
    };

})(jQuery, window, document);
;(function($) {
    "use strict";

    var $navBar = $('nav.navbar'),
            $body = $('body'),
            $menu = $('#menu');

    function addPaddingTop(el, val) {
        el.css('padding-top', val);
    }
    function removePaddingTop(el) {
        el.css('padding-top', 'inherit');
    }
    function getHeight(el) {
        return el.outerHeight();
    }

    function init() {
        var isFixedNav = $navBar.hasClass('navbar-fixed-top');
        var bodyPadTop = isFixedNav ? $navBar.outerHeight(true) : 0;

        $body.css('padding-top', bodyPadTop);

       
    }

    fitness.navBar = function() {
        var resizeTimer;
        init();
        $(window).resize(function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(init(), 250);
        });
    };
    return fitness;
})(jQuery); 
;(function($, fitness){
  "use strict";
  // Define toggleFullScreen
    fitness.toggleFullScreen = function() {
    if ((window.screenfull !== undefined) && screenfull.enabled) {
            $('#toggleFullScreen').on(fitness.buttonPressedEvent, function(e) {
                screenfull.toggle(window.document[0]);
                $('body').toggleClass('fullScreen');
                e.preventDefault();
            });
        } else {
            $('#toggleFullScreen').addClass('hidden');
        }
  };
  // Define boxFullScreen
    fitness.boxFullScreen = function() {
    if ((window.screenfull !== undefined) && screenfull.enabled) {
            $('.full-box').on(fitness.buttonPressedEvent, function(e) {
              var $toggledPanel = $(this).parents('.box')[0];
                screenfull.toggle($toggledPanel);
                $(this).parents('.box').toggleClass('full-screen-box');
                $(this).parents('.box').children('.body').toggleClass('full-screen-box');
                $(this).children('i').toggleClass('fa-compress');
                e.preventDefault();
            });
        } else {
            $('.full-box').addClass('hidden');
        }
  };
    fitness.panelBodyCollapse = function() {
    var $collapseButton = $('.collapse-box'),
            $collapsedPanelBody = $collapseButton.closest('.box').children('.body');

        $collapsedPanelBody.collapse('show');
        
        $collapseButton.on(fitness.buttonPressedEvent, function (e) {
          var $collapsePanelBody = $(this).closest('.box').children('.body'),
              $toggleButtonImage = $(this).children('i');
            $collapsePanelBody.on('show.bs.collapse', function () {
              $toggleButtonImage.removeClass('fa-minus fa-plus').addClass('fa-spinner fa-spin');
            });
            $collapsePanelBody.on('shown.bs.collapse', function () {
              $toggleButtonImage.removeClass('fa-spinner fa-spin').addClass('fa-minus');
            });
            
            $collapsePanelBody.on('hide.bs.collapse', function () {
              $toggleButtonImage.removeClass('fa-minus fa-plus').addClass('fa-spinner fa-spin');
            });
            
            $collapsePanelBody.on('hidden.bs.collapse', function () {
              $toggleButtonImage.removeClass('fa-spinner fa-spin').addClass('fa-plus');
            });

            $collapsePanelBody.collapse('toggle');
          
          e.preventDefault();
        });
  };
    fitness.boxHiding = function() {
    $('.close-box').on(fitness.buttonPressedEvent, function () {
        $(this).closest('.box').hide('slow');
    });
  };
  return fitness;
})(jQuery, fitness || {});
;(function($, fitness) {
    var $body = $('body'),
            $leftToggle = $('.toggle-left'),
            $rightToggle = $('.toggle-right'),
            $count = 0;

    fitness.fitnessAnimatePanel = function() {
      
      if($('#left').length){
        $leftToggle.on(fitness.buttonPressedEvent, function(e) {

            if ($(window).width() < 768) {
                $body.toggleClass('sidebar-left-opened');
            } else {
                switch (true) {
                    case $body.hasClass("sidebar-left-hidden"):
                        $body.removeClass("sidebar-left-hidden sidebar-left-mini");
                        break;
                    case $body.hasClass("sidebar-left-mini"):
                        $body.removeClass("sidebar-left-mini").addClass("sidebar-left-hidden");
                        break;
                    default :
                        $body.addClass("sidebar-left-mini");
                }

                e.preventDefault();
            }
        });
      } else {
    $leftToggle.addClass('hidden');
      }
    if($('#right').length){
        $rightToggle.on(fitness.buttonPressedEvent, function(e) {
            switch (true) {
                // Close right panel
                case $body.hasClass("sidebar-right-opened"):
                    $body.removeClass("sidebar-right-opened");
                    break;
                default :
                    // Open right panel
                    $body.addClass("sidebar-right-opened");
                    if (!$body.hasClass("sidebar-left-mini") & !$body.hasClass("sidebar-left-hidden")) {
                        $body.addClass("sidebar-left-mini");
                    }
            }
            e.preventDefault();
        });
    } else {
    $rightToggle.addClass('hidden');
      }
    };
    return fitness;
})(jQuery, fitness || {});
;(function($) {
   $(document).ready(function() {
    
    $('[data-toggle="tooltip"]').tooltip();

       fitness.navBar();
       fitness.fitnessAnimatePanel();
       fitness.toggleFullScreen();
       fitness.boxFullScreen();
       fitness.panelBodyCollapse();
       fitness.boxHiding();
  });
})(jQuery);
