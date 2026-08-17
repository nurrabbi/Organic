/**
 * GDScrollBar component.
 */
;(function ($) {
  'use strict';

  $.GDCore.components.GDMalihuScrollBar = {

    /**
     * Base configuration.
     *
     * @private
     */
    _baseConfig: {
      scrollInertia: 150,
      theme: 'minimal-dark'
    },

    /**
     * Collection of all initalized items on the page.
     *
     * @private
     */
    _pageCollection: $(),


    /**
     * Initialization of GDScrollBar component.
     *
     * @param {jQuery} collection
     * @param {Object} config 
     *
     * @return {jQuery}
     */
    init: function (collection, config) {

      if(!collection || !collection.length) return;

      var self = this;

      config = config && $.isPlainObject(config) ? $.extend(true, {}, config, this._baseConfig) : this._baseConfig;

      return collection.each(function(i, el){

        var $this = $(el),
            scrollBar,
            scrollBarThumb,
            itemConfig = $.extend(true, {}, config, $this.data());


        $this.mCustomScrollbar(itemConfig);

        scrollBar = $this.find('.mCSB_scrollTools');
        scrollBarThumb = $this.find('.mCSB_dragger_bar');

        if(scrollBar.length && $this.data('scroll-classes')) {
          scrollBar.addClass($this.data('scroll-classes'));
        }

        if(scrollBarThumb.length && $this.data('scroll-thumb-classes')) {
          scrollBarThumb.addClass($this.data('scroll-thumb-classes'));
        }

        self._pageCollection = self._pageCollection.add($this);

      });

    },

    /**
     * Destroys the component.
     * 
     * @param {jQuery} collection
     * 
     * @return {jQuery}
     */
    destroy: function( collection ) {

      if( !collection && !collection.length ) return $();

      var _self = this;

      return collection.each(function(i, el){

         var $this = $(el);

         $this.mCustomScrollbar('destroy');

         _self._pageCollection = _self._pageCollection.not( $this );

      });

    }

  }

})(jQuery);

/**
 * Side Nav.
 */
;(function ($) {
  'use strict';

  $.GDCore.components.GDSideNav = {
    _baseConfig: {
      touchDevicesMode: 'full',

      touchDevicesModeResolution: 992,

      closedClass: 'side-nav-closed',
      hiddenClass: 'side-nav-hidden',
      initializedClass: 'side-nav-initialized',
      minifiedClass: 'side-nav-minified',
      openedSubMenuClass: 'side-nav-opened',
      hasSubMenuClass: 'side-nav-has-menu',
      fullModeClass: 'side-nav-full-mode',
      miniModeClass: 'side-nav-mini-mode',
      transitionOnClass: 'side-nav-transition-on',
      topLevelMenuClass: 'side-nav-menu-top-level',
      secondLevelMenuClass: 'side-nav-menu-second-level',
      thirdLevelMenuClass: 'side-nav-menu-third-level',

      afterOpen: function () {},
      afterClose: function () {}
    },

    pageCollection: $(),

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
        $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initSidebar();

      return this.pageCollection;

    },

    initSidebar: function () {
      //Variables
      var $self = this,
        collection = $self.pageCollection,
        config = $self.config;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
          mode = $this.data('mode'),
          target = $this.data('target'),
          targetWrapper = $this.data('target-wrapper'),

          defaults = {
            openedItem: ''
          },

          flags = {
            isSubMenuCollapsed: false,
            isSidebarClosed: false,
            isSidebarHidden: true,
            isSidebarMinified: false,
            isMenuHeadingsHide: false,
            isTouchDevicesMode: false,
            isMiniMode: false,
            isFullMode: false,
            isTransitionOn: false
          },

          selectors = {
            mainContainer: targetWrapper,
            sidebar: target,
            menuHeadings: $(target).find('.sidebar-heading'),
            topLevelMenuItems: $(target).find('.side-nav-menu-top-level > .side-nav-menu-item'),
            menuInvoker: $(target).find('.side-nav-menu-link')
          };

        $self.pushOpenedItem($this, defaults, selectors);

        if (mode) {
          config.touchDevicesMode = mode;
        }

        switch (config.touchDevicesMode) {
          case 'mini':
            $self.miniMode(flags, selectors);
            break;

          default:
            $self.fullMode(flags, selectors);
            break;
        }

        $self.menuInvokerClickFunc(defaults, flags, selectors);

        $self.clickFunc($this, defaults, flags, selectors);

        $self.closeFunc($this, flags, selectors);

        $self.mouseEnterFunc(defaults, flags, selectors);

        $self.mouseLeaveFunc(defaults, flags, selectors);

        $self.documentOnClickCloseFunc($this, defaults, flags, selectors);

        $self.resizeFunc(defaults, flags, selectors);

        //Actions
        collection = collection.add($this);
      });
    },

    pushOpenedItem: function (el, defaults, selectors) {
      var $self = this,
        config = $self.config,
        _defaults = defaults,
        _selectors = selectors;

      el.each(function () {
        var $this = $(this);
        _selectors.sidebar = $this.data('target');

        $(_selectors.sidebar).find('[data-target]').each(function () {
          if ($(this).parent(_selectors.topLevelMenuItems).hasClass(config.openedSubMenuClass)) {
            _defaults.openedItem = $(this).data('target');
          }
        });
      });
    },

    clickFunc: function (el, defaults, flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _defaults = defaults,
        _selectors = selectors;

      el.stop().on('click', function (e) {
        e.preventDefault();

        if (_flags.isTouchDevicesMode === true) {
          if (_flags.isSidebarHidden === true) {
            $self.showSidebar(_flags, _selectors);
          } else {
            $self.hideSidebar(_flags, _selectors);
          }
        } else {
          if (_flags.isSidebarClosed === true) {
            $self.openTitles(false, _flags, _selectors);
            $self.openSidebar(_flags, _selectors);

            if (_defaults.openedItem !== '') {
              $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
                $self.openSubMenu(false, _defaults, _flags, _selectors);
              });
            }

            if (_flags.isTouchDevicesMode === false) {
              $(_selectors.mainContainer).one().removeClass(config.minifiedClass);

              _flags.isSidebarMinified = false;
            }
          } else {
            if (_defaults.openedItem !== '') {
              $self.closeTitles(false, _flags, _selectors);

              $self.closeSubMenu(function () {
                $self.closeSidebar(_flags, _selectors);
              }, _defaults, _flags, _selectors);
            } else {
              $self.closeTitles(function () {
                $self.closeSidebar(_flags, _selectors);
              }, _flags, _selectors);
            }

            if (_flags.isTouchDevicesMode === false) {
              $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
                $(_selectors.mainContainer).one().addClass(config.minifiedClass);

                _flags.isSidebarMinified = true;
              });
            }
          }
        }
      });
    },

    closeFunc: function (el, flags, selectors) {
      var $self = this,
        _flags = flags,
        _selectors = selectors,
        closeInvoker = el.data('close-invoker');

      $(closeInvoker).stop().on('click', function (e) {
        e.preventDefault();

        $self.hideSidebar(_flags, _selectors);
      });
    },

    documentOnClickCloseFunc: function (el, defaults, flags, selectors) {
      var $self = this,
        config = $self.config,
        _defaults = defaults,
        _flags = flags,
        _selectors = selectors;

      // $(document).stop().on('click touchstart', 'body', function (e) {
      //   if(e.target.id === el) return;

      //   if($(e.target).closest(el).length) return;

      //   if (_flags.isTouchDevicesMode === true) {
      //     $self.hideSidebar(_flags, _selectors);
      //   } else {
      //     if (_flags.isSidebarClosed === true) {
      //       $self.openTitles(false, _flags, _selectors);
      //       $self.openSidebar(_flags, _selectors);

      //       if (_defaults.openedItem !== '') {
      //         $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
      //           $self.openSubMenu(false, _defaults, _flags, _selectors);
      //         });
      //       }

      //       if (_flags.isTouchDevicesMode === false) {
      //         $(_selectors.mainContainer).one().removeClass(config.minifiedClass);

      //         _flags.isSidebarMinified = false;
      //       }
      //     }
      //   }
      // });
    },

    mouseEnterFunc: function (defaults, flags, selectors) {
      var $self = this,
        _defaults = defaults,
        _flags = flags,
        _selectors = selectors;

      $(_selectors.sidebar).stop().on('mouseenter', function () {
        if ((_flags.isSidebarClosed === true && _flags.isSidebarMinified === true) || (_flags.isMiniMode === true && _flags.isSidebarClosed === true && _flags.isTouchDevicesMode === true)) {
          $self.openTitles(false, _flags, _selectors);
          $self.openSidebar(_flags, _selectors);

          if (_defaults.openedItem !== '') {
            $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
              $self.openSubMenu(false, _defaults, _flags, _selectors);
            });
          }
        }
      });
    },

    mouseLeaveFunc: function (defaults, flags, selectors) {
      var $self = this,
        _defaults = defaults,
        _flags = flags,
        _selectors = selectors;

      $(_selectors.sidebar).stop().on('mouseleave', function () {
        if ((_flags.isSidebarClosed === false && _flags.isSidebarMinified === true) || (_flags.isMiniMode === true && _flags.isSidebarClosed === false && _flags.isTouchDevicesMode === true)) {
          if (_defaults.openedItem !== '') {
            $self.closeTitles(false, _flags, _selectors);
            $self.closeSubMenu(function () {
              $self.closeSidebar(_flags, _selectors);
            }, _defaults, _flags, _selectors);
          } else {
            $self.closeTitles(function () {
              $self.closeSidebar(_flags, _selectors);
            }, _flags, _selectors);
          }
        }
      });
    },

    menuInvokerClickFunc: function (defaults, flags, selectors) {
      var $self = this,
        config = $self.config,
        _defaults = defaults,
        _flags = flags,
        _selectors = selectors,
        menuInvoker = _selectors.menuInvoker;

      $(menuInvoker).stop().on('click', function (e) {
        var $this = $(this),
          parent = $this.parent(),
          parentSiblings = parent.siblings(),
          target = $this.data('target'),
          items = [];

        if (target) {
          e.preventDefault();
        }

        parentSiblings.children(menuInvoker).each(function () {
          if ($(this).data('target')) items.push($(this).data('target'));
        });

        $(items.toString()).parents().removeClass(config.openedSubMenuClass);
        $(items.toString()).slideUp(400);

        if ($(parent).hasClass(config.openedSubMenuClass)) {
          $(parent).removeClass(config.openedSubMenuClass);
          $(target).slideUp(400, function () {
            if ($(parent).parent().hasClass(config.topLevelMenuClass)) {
              _defaults.openedItem = '';
            }
          });
        } else {
          $(parent).addClass(config.openedSubMenuClass);
          $(target).slideDown(400, function () {
            if ($(parent).parent().hasClass(config.topLevelMenuClass)) {
              _defaults.openedItem = target;
            }
          });
        }
      });
    },

    openTitles: function (callback, flags, selectors) {
      var _flags = flags,
        _selectors = selectors;

      $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
        $(_selectors.sidebar).find(_selectors.menuHeadings).slideDown(400, function () {
          _flags.isMenuHeadingsHide = false;

          if (callback) callback();
        });
      });
    },

    closeTitles: function (callback, flags, selectors) {
      var _flags = flags,
        _selectors = selectors;

      $(_selectors.sidebar).find(_selectors.menuHeadings).slideUp(400, function () {
        _flags.isMenuHeadingsHide = true;

        if (callback) callback();
      });
    },

    openSubMenu: function (callback, defaults, flags, selectors) {
      var $self = this,
        config = $self.config,
        _defaults = defaults,
        _flags = flags,
        _selectors = selectors;

      $(_defaults.openedItem).parent(_selectors.topLevelMenuItems).addClass(config.openedSubMenuClass);

      $(_defaults.openedItem).slideDown(400, function () {
        _flags.isSubMenuCollapsed = false;

        if (callback) callback();
      });
    },

    closeSubMenu: function (callback, defaults, flags, selectors) {
      var $self = this,
        config = $self.config,
        _defaults = defaults,
        _flags = flags,
        _selectors = selectors;

      $(_defaults.openedItem).slideUp(400, function () {
        $(_defaults.openedItem).parent(_selectors.topLevelMenuItems).removeClass(config.openedSubMenuClass);

        _flags.isSubMenuCollapsed = true;

        if (callback) callback();
      });
    },

    openSidebar: function (flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _selectors = selectors;

      $(_selectors.mainContainer).stop().removeClass(config.closedClass);

      $self.transitionOn(_flags, _selectors);

      $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
        _flags.isSidebarClosed = false;

        $self.transitionOff(_flags, _selectors);
      });
    },

    closeSidebar: function (flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _selectors = selectors;

      $(_selectors.mainContainer).stop().addClass(config.closedClass);

      $self.transitionOn(_flags, _selectors);

      $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
        _flags.isSidebarClosed = true;

        setTimeout(function () {
          $self.transitionOff(_flags, _selectors);
        }, 200);
      });
    },

    showSidebar: function (flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _selectors = selectors;

      $self.transitionOn(_flags, _selectors);

      $(_selectors.mainContainer).stop().removeClass(config.hiddenClass);

      $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
        $self.transitionOff(_flags, _selectors);
      });

      _flags.isSidebarHidden = false;
    },

    hideSidebar: function (flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _selectors = selectors;

      $self.transitionOn(_flags, _selectors);

      $(_selectors.mainContainer).stop().addClass(config.hiddenClass);

      $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
        $self.transitionOff(_flags, _selectors);
      });

      _flags.isSidebarHidden = true;
    },

    fullMode: function (flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _selectors = selectors;

      $(_selectors.mainContainer).addClass(config.fullModeClass);

      _flags.isFullMode = true;
    },

    miniMode: function (flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _selectors = selectors;

      $(_selectors.mainContainer).addClass(config.miniModeClass);

      _flags.isMiniMode = true;
    },

    transitionOn: function (flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _selectors = selectors;

      $(_selectors.mainContainer).addClass(config.transitionOnClass);

      _flags.isTransitionOn = true;
    },

    transitionOff: function (flags, selectors) {
      var $self = this,
        config = $self.config,
        _flags = flags,
        _selectors = selectors;

      $(_selectors.mainContainer).removeClass(config.transitionOnClass);

      _flags.isTransitionOn = false;
    },

    resizeFunc: function (defaults, flags, selectors) {
      var $self = this,
        config = $self.config,
        _defaults = defaults,
        _flags = flags,
        _selectors = selectors;

      $(window).on('resize', function () {
        var windowWidth = window.innerWidth;

        $self.transitionOff(_flags, _selectors);

        if (windowWidth <= config.touchDevicesModeResolution) {
          if (_defaults.openedItem !== '') {
            $(_selectors.sidebar).one('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function () {
              $(_selectors.mainContainer).one().addClass(config.initializedClass);
            });
          } else {
            $(_selectors.mainContainer).one().addClass(config.initializedClass);
          }

          $(_selectors.mainContainer).one().addClass(config.hiddenClass);

          if (_flags.isFullMode === true) {
            if (_flags.isSidebarClosed === true) {
              $self.openSubMenu(false, _defaults, _flags, _selectors);
            }

            $(_selectors.mainContainer).one().removeClass(config.closedClass);

            _flags.isSidebarMinified = false;
          }

          if (_flags.isMiniMode === true) {
            $(_selectors.mainContainer).one().addClass(config.closedClass + ' ' + config.minifiedClass);

            $self.closeTitles(false, _flags, _selectors);
            $self.closeSubMenu(false, _defaults, _flags, _selectors);

            _flags.isSidebarClosed = true;
            _flags.isSidebarMinified = true;
          }

          _flags.isTouchDevicesMode = true;
        } else {
          if (_flags.isFullMode === true) {
            if (_flags.isSidebarClosed === true) {
              $(_defaults.openedItem).hide();
              $(_defaults.openedItem).parent(_selectors.topLevelMenuItems).removeClass(config.openedSubMenuClass);

              $(_selectors.mainContainer).one().addClass(config.closedClass);

              _flags.isSidebarMinified = true;
              _flags.isSubMenuCollapsed = true;
            }
          }

          $(_selectors.mainContainer).one().removeClass(config.initializedClass + ' ' + config.hiddenClass);

          _flags.isTouchDevicesMode = false;
        }
      });

      $(window).trigger('resize');
    }
  }
})(jQuery);
/**
 * Unfold component.
 */

;(function ($) {
  'use strict';

  $.GDCore.components.GDUnfold = {

    /**
     * Base configuration of the component.
     *
     * @private
     */
    _baseConfig: {
      unfoldEvent: 'click',
      unfoldType: 'simple',
      unfoldDuration: 300,
      unfoldEasing: 'linear',
      unfoldAnimationIn: 'fadeIn',
      unfoldAnimationOut: 'fadeOut',
      unfoldHideOnScroll: true,
      unfoldHideOnBlur: false,
      unfoldDelay: 350,
      afterOpen: function (invoker) {},
      afterClose: function (invoker) {}
    },

    /**
     * Collection of all initialized items on the page.
     *
     * @private
     */
    _pageCollection: $(),

    /**
     * Initialization.
     *
     * @param {jQuery} collection
     * @param {Object} config
     *
     * @public
     * @return {jQuery}
     */
    init: function (collection, config) {

      var self;

      if (!collection || !collection.length) return;

      self = this;

      var fieldsQty;

      collection.each(function (i, el) {

        var $this = $(el), itemConfig;

        if ($this.data('GDUnfold')) return;

        itemConfig = config && $.isPlainObject(config) ?
          $.extend(true, {}, self._baseConfig, config, $this.data()) :
          $.extend(true, {}, self._baseConfig, $this.data());

        switch (itemConfig.unfoldType) {

          case 'css-animation' :

            $this.data('GDUnfold', new UnfoldCSSAnimation($this, itemConfig));

            break;

          case 'jquery-slide' :

            $this.data('GDUnfold', new UnfoldJSlide($this, itemConfig));

            break;

          default :

            $this.data('GDUnfold', new UnfoldSimple($this, itemConfig));

        }

        self._pageCollection = self._pageCollection.add($this);
        self._bindEvents($this, itemConfig.unfoldEvent, itemConfig.unfoldDelay);
        var Unfold = $(el).data('GDUnfold');

        fieldsQty = $(Unfold.target).find('input, textarea').length;

      });

      var items,
        index = 0;

      $(document).on('keydown.GDUnfold', function (e) {

        // if (!$('[aria-expanded="true"]').length) return;

        if (e.keyCode && e.keyCode === 27) {

          self._pageCollection.each(function (i, el) {

            var windW = $(window).width(),
              optIsMobileOnly = Boolean($(el).data('is-mobile-only'));

            items = $($($(el).data('unfold-target')).children());

            if (!optIsMobileOnly) {
              $(el).data('GDUnfold').hide();
            } else if (optIsMobileOnly && windW < 769) {
              $(el).data('GDUnfold').hide();
            }

          });

        }

        self._pageCollection.each(function (i, el) {
          if (!$($(el).data('unfold-target')).hasClass('unfold-hidden')) {
            items = $($($(el).data('unfold-target')).children());
          }
        });

        if (e.keyCode && e.keyCode === 38 || e.keyCode && e.keyCode === 40) {
          e.preventDefault();
        }

        if (e.keyCode && e.keyCode === 38 && index > 0) {
          // up
          index--;
        }

        if (e.keyCode && e.keyCode === 40 && index < items.length - 1) {
          // down
          index++;
        }

        if (index < 0) {
          index = 0;
        }

        if (e.keyCode && e.keyCode === 38 || e.keyCode && e.keyCode === 40) {
          $(items[index]).focus();
        }
      });

      $(window).on('click', function (e) {

        self._pageCollection.each(function (i, el) {

          var windW = $(window).width(),
            optIsMobileOnly = Boolean($(el).data('is-mobile-only'));

          if (!optIsMobileOnly) {
            $(el).data('GDUnfold').hide();
          } else if (optIsMobileOnly && windW < 769) {
            $(el).data('GDUnfold').hide();
          }

        });

      });

      self._pageCollection.each(function (i, el) {

        var target = $(el).data('GDUnfold').config.unfoldTarget;

        $(target).on('click', function (e) {

          e.stopPropagation();

        });

      });

      $(window).on('scroll.GDUnfold', function (e) {

        self._pageCollection.each(function (i, el) {

          var Unfold = $(el).data('GDUnfold');

          if (Unfold.getOption('unfoldHideOnScroll') && fieldsQty === 0) {

            Unfold.hide();

          } else if (Unfold.getOption('unfoldHideOnScroll') && !(/iPhone|iPad|iPod/i.test(navigator.userAgent))) {

            Unfold.hide();

          }

        });

      });

      $(window).on('resize.GDUnfold', function (e) {

        if (self._resizeTimeOutId) clearTimeout(self._resizeTimeOutId);

        self._resizeTimeOutId = setTimeout(function () {

          self._pageCollection.each(function (i, el) {

            var Unfold = $(el).data('GDUnfold');

            Unfold.smartPosition(Unfold.target);

          });

        }, 50);

      });

      return collection;

    },

    /**
     * Binds necessary events.
     *
     * @param {jQuery} $invoker
     * @param {String} eventType
     * @param {Number} delay
     * @private
     */
    _bindEvents: function ($invoker, eventType, delay) {

      var $unfold = $($invoker.data('unfold-target'));

      if (eventType === 'hover' && !_isTouch()) {

        $invoker.on('mouseenter.GDUnfold', function (e) {

          var $invoker = $(this),
            GDUnfold = $invoker.data('GDUnfold');

          if (!GDUnfold) return;

          if (GDUnfold.unfoldTimeOut) clearTimeout(GDUnfold.unfoldTimeOut);
          GDUnfold.show();

        })
          .on('mouseleave.GDUnfold', function (e) {

            var $invoker = $(this),
              GDUnfold = $invoker.data('GDUnfold');

            if (!GDUnfold) return;

            GDUnfold.unfoldTimeOut = setTimeout(function () {

              GDUnfold.hide();

            }, delay);

          });

        if ($unfold.length) {

          $unfold.on('mouseenter.GDUnfold', function (e) {

            var GDUnfold = $invoker.data('GDUnfold');

            if (GDUnfold.unfoldTimeOut) clearTimeout(GDUnfold.unfoldTimeOut);
            GDUnfold.show();

          })
            .on('mouseleave.GDUnfold', function (e) {

              var GDUnfold = $invoker.data('GDUnfold');

              GDUnfold.unfoldTimeOut = setTimeout(function () {
                GDUnfold.hide();
              }, delay);

            });
        }

      }
      else {

        $invoker.on('click.GDUnfold', function (e) {

          var $curInvoker = $(this);

          if (!$curInvoker.data('GDUnfold')) return;

          if ($('[data-unfold-target].active').length) {
            $('[data-unfold-target].active').data('GDUnfold').toggle();
          }

          $curInvoker.data('GDUnfold').toggle();

          $($($curInvoker.data('unfold-target')).children()[0]).trigger('focus');

          e.stopPropagation();
          e.preventDefault();

        });

      }

    }
  };

  function _isTouch() {
    return 'ontouchstart' in window;
  }

  /**
   * Abstract Unfold class.
   *
   * @param {jQuery} element
   * @param {Object} config
   * @abstract
   */
  function AbstractUnfold(element, config) {

    if (!element.length) return false;

    this.element = element;
    this.config = config;

    this.target = $(this.element.data('unfold-target'));

    this.allInvokers = $('[data-unfold-target="' + this.element.data('unfold-target') + '"]');

    this.toggle = function () {
      if (!this.target.length) return this;

      if (this.defaultState) {
        this.show();
      }
      else {
        this.hide();
      }

      return this;
    };

    this.smartPosition = function (target) {

      if (target.data('baseDirection')) {
        target.css(
          target.data('baseDirection').direction,
          target.data('baseDirection').value
        );
      }

      target.removeClass('unfold-reverse-y');

      var $w = $(window),
        styles = getComputedStyle(target.get(0)),
        direction = Math.abs(parseInt(styles.left, 10)) < 40 ? 'left' : 'right',
        targetOuterGeometry = target.offset();

      // horizontal axis
      if (direction === 'right') {

        if (!target.data('baseDirection')) target.data('baseDirection', {
          direction: 'right',
          value: parseInt(styles.right, 10)
        });

        if (targetOuterGeometry.left < 0) {

          target.css(
            'right',
            (parseInt(target.css('right'), 10) - (targetOuterGeometry.left - 10 )) * -1
          );

        }

      }
      else {

        if (!target.data('baseDirection')) target.data('baseDirection', {
          direction: 'left',
          value: parseInt(styles.left, 10)
        });

        if (targetOuterGeometry.left + target.outerWidth() > $w.width()) {

          target.css(
            'left',
            (parseInt(target.css('left'), 10) - (targetOuterGeometry.left + target.outerWidth() + 10 - $w.width()))
          );

        }

      }

      // vertical axis
      if (targetOuterGeometry.top + target.outerHeight() - $w.scrollTop() > $w.height()) {
        target.addClass('unfold-reverse-y');
      }

    };

    this.getOption = function (option) {
      return this.config[option] ? this.config[option] : null;
    };

    return true;
  }


  /**
   * UnfoldSimple constructor.
   *
   * @param {jQuery} element
   * @param {Object} config
   * @constructor
   */
  function UnfoldSimple(element, config) {
    if (!AbstractUnfold.call(this, element, config)) return;

    Object.defineProperty(this, 'defaultState', {
      get: function () {
        return this.target.hasClass('unfold-hidden');
      }
    });

    this.target.addClass('unfold-simple');

    this.hide();
  }

  /**
   * Shows Unfold.
   *
   * @public
   * @return {UnfoldSimple}
   */
  UnfoldSimple.prototype.show = function () {

    var activeEls = $(this)[0].config.unfoldTarget;

    $('[data-unfold-target="' + activeEls + '"]').addClass('active');

    this.smartPosition(this.target);

    this.target.removeClass('unfold-hidden');
    if (this.allInvokers.length) this.allInvokers.attr('aria-expanded', 'true');
    this.config.afterOpen.call(this.target, this.element);

    return this;
  }

  /**
   * Hides Unfold.
   *
   * @public
   * @return {UnfoldSimple}
   */
  UnfoldSimple.prototype.hide = function () {

    var activeEls = $(this)[0].config.unfoldTarget;

    $('[data-unfold-target="' + activeEls + '"]').removeClass('active');

    this.target.addClass('unfold-hidden');
    if (this.allInvokers.length) this.allInvokers.attr('aria-expanded', 'false');
    this.config.afterClose.call(this.target, this.element);

    return this;
  }

  /**
   * UnfoldCSSAnimation constructor.
   *
   * @param {jQuery} element
   * @param {Object} config
   * @constructor
   */
  function UnfoldCSSAnimation(element, config) {
    if (!AbstractUnfold.call(this, element, config)) return;

    var self = this;

    this.target
      .addClass('unfold-css-animation unfold-hidden')
      .css('animation-duration', self.config.unfoldDuration + 'ms');

    Object.defineProperty(this, 'defaultState', {
      get: function () {
        return this.target.hasClass('unfold-hidden');
      }
    });

    if (this.target.length) {

      this.target.on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (e) {

        if (self.target.hasClass(self.config.unfoldAnimationOut)) {
          self.target.removeClass(self.config.unfoldAnimationOut)
            .addClass('unfold-hidden');


          if (self.allInvokers.length) self.allInvokers.attr('aria-expanded', 'false');

          self.config.afterClose.call(self.target, self.element);
        }

        if (self.target.hasClass(self.config.unfoldAnimationIn)) {

          if (self.allInvokers.length) self.allInvokers.attr('aria-expanded', 'true');

          self.config.afterOpen.call(self.target, self.element);
        }

        e.preventDefault();
        e.stopPropagation();
      });

    }
  }

  /**
   * Shows Unfold.
   *
   * @public
   * @return {UnfoldCSSAnimation}
   */
  UnfoldCSSAnimation.prototype.show = function () {

    var activeEls = $(this)[0].config.unfoldTarget;

    $('[data-unfold-target="' + activeEls + '"]').addClass('active');

    this.smartPosition(this.target);

    this.target.removeClass('unfold-hidden')
      .removeClass(this.config.unfoldAnimationOut)
      .addClass(this.config.unfoldAnimationIn);

  }

  /**
   * Hides Unfold.
   *
   * @public
   * @return {UnfoldCSSAnimation}
   */
  UnfoldCSSAnimation.prototype.hide = function () {

    var activeEls = $(this)[0].config.unfoldTarget;

    $('[data-unfold-target="' + activeEls + '"]').removeClass('active');

    this.target.removeClass(this.config.unfoldAnimationIn)
      .addClass(this.config.unfoldAnimationOut);

  }

  /**
   * UnfoldSlide constructor.
   *
   * @param {jQuery} element
   * @param {Object} config
   * @constructor
   */
  function UnfoldJSlide(element, config) {
    if (!AbstractUnfold.call(this, element, config)) return;

    this.target.addClass('unfold-jquery-slide unfold-hidden').hide();

    Object.defineProperty(this, 'defaultState', {
      get: function () {
        return this.target.hasClass('unfold-hidden');
      }
    });
  }

  /**
   * Shows Unfold.
   *
   * @public
   * @return {UnfoldJSlide}
   */
  UnfoldJSlide.prototype.show = function () {

    var self = this;

    var activeEls = $(this)[0].config.unfoldTarget;

    $('[data-unfold-target="' + activeEls + '"]').addClass('active');

    this.smartPosition(this.target);

    this.target.removeClass('unfold-hidden').stop().slideDown({
      duration: self.config.unfoldDuration,
      easing: self.config.unfoldEasing,
      complete: function () {
        self.config.afterOpen.call(self.target, self.element);
      }
    });

  }

  /**
   * Hides Unfold.
   *
   * @public
   * @return {UnfoldJSlide}
   */
  UnfoldJSlide.prototype.hide = function () {

    var self = this;

    var activeEls = $(this)[0].config.unfoldTarget;

    $('[data-unfold-target="' + activeEls + '"]').removeClass('active');

    this.target.stop().slideUp({
      duration: self.config.unfoldDuration,
      easing: self.config.unfoldEasing,
      complete: function () {
        self.config.afterClose.call(self.target, self.element);
        self.target.addClass('unfold-hidden');
      }
    });

  }

})(jQuery);

$(window).on('load', function () {
	// initialization of custom scroll
	$.GDCore.components.GDMalihuScrollBar.init($('.js-custom-scroll'));

	// initialization of sidebar navigation component
	$.GDCore.components.GDSideNav.init('.js-side-nav');

	// initialization of dropdown component
	$.GDCore.components.GDUnfold.init($('[data-unfold-target]'));
});