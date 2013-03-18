var depends = ['bootstrap', 'covide/clock'];

define("layout", depends, function () {

    var CovideLayout = function () {
        $($.proxy(this.init, this));
    }

    CovideLayout.prototype = {
        globalWidgets: {
            clock: function () {
                if (typeof $.fn.clock !== 'function') {
                    return
                }

                $('.clock-container').clock();
            },

            fontSizeChange: function () {
                $('.fontSizeChange').on('click', '.btn', function () {
                    var btn = $(this), size = btn.data('size');
                    $('body')
                    .removeClass(function (i, className) {
                        return className.replace(/fs-(small|normal|big)\s+?/ig, '');
                    })
                    .addClass('fs-' + size);

                    CovideUtils && CovideUtils.cookie.set('font', size);
                });
            },

            tooltip: function () {
                if (typeof $.fn.tooltip !== 'function') {
                    return
                }

                $("[title]").tooltip();
            },

            editable: function() {
                if (typeof $.fn.editable !== 'function') {
                    return
                }

                $('[data-toggle="editable"]').editable()
            },

            searchForm: function() {
                var widget = $('.search-widget');
                if (widget.length) {
                    widget.each(function() {
                        $(this).data('form', $('.search-form', this))
                    }).on('click', '[data-extra]', function() {
                        var el = $(this), widget = el.closest('.search-widget');
                        widget.data('form').toggleClass('show-extra', el.data('extra') === 'show');
                    });
                }
            },

            widgetsBoard: function() {
                var boards = $('.widgetsBoard');
                if (boards.length) {
                    require(['covide/widgetsBoard'], function() {
                        boards.widgetsBoard();
                    });
                }
            }
        },

        userSettings: {
            font: function () {
                if (CovideUtils) {
                    var fs = CovideUtils.cookie.get('font');

                    if (null !== fs) {
                        $('body').addClass('fs-' + fs);
                        $('.size-' + fs, '.fontSizeChange')
                            .addClass('active').siblings().removeClass('active')
                    }
                }
            }
        },

        init: function () {
            this.restoreUserSettings();
            this.initWidgets();
        },

        restoreUserSettings: function () {
            for (var us in this.userSettings) {
                this.userSettings[us].call(this);
            }
        },

        initWidgets: function () {
            for (var widget in this.globalWidgets) {
                this.globalWidgets[widget].call(this);
            }
        }
    }

    return CovideLayout;

});