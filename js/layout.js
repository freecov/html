var depends = ['bootstrap', 'plugins/clock/clock'];

define("layout", depends, function () {

    var CovideLayout = function () {
        $($.proxy(this.init, this));
    }

    CovideLayout.prototype = {
        globalWidgets: {
            clock: function () {
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
                $("[title]").tooltip();
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