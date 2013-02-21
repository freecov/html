(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else {
        factory(window.jQuery);
    }
}(function ($) {

    var Clock = function(el) {
        this.el = $(el);
        this.init();
    }

    Clock.prototype = {
        constructor: Clock,

        monthNames: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ],
        dayNames: [
            "Sun",
            "Mon",
            "Tue",
            "Wed",
            "Thu",
            "Fri",
            "Sat"
        ],

        tpl: [
            '<div class="clock-date">%date%</div>',
            '<ul>',
                '<li class="clock-hours"></li>',
                '<li class="clock-point">:</li>',
                '<li class="clock-min"></li>',
                '<li class="clock-point">:</li>',
                '<li class="clock-sec"></li>',
            '</ul>'
        ],

        init: function() {
            this.initMarkup();
            this.initEvents();
            this.el.fadeIn();
        },

        _setTime: function() {
            var date = new Date(),
                s = date.getSeconds(),
                m = date.getMinutes(),
                h = date.getHours();

            this.seconds.html(( s < 10 ? "0" : "" ) + s);
            this.minutes.html(( m < 10 ? "0" : "" ) + m);
            this.hours.html(( h < 10 ? "0" : "" ) + h);
        },

        initMarkup: function() {
            var me = this,
                el = me.el,
                html = me.tpl.join(''),
                date = new Date(),
                dateStr = [
                    me.dayNames[date.getDay()],
                    date.getDate(),
                    me.monthNames[date.getMonth()],
                    date.getFullYear()
                ].join(' ');

            el.html(html.replace('%date%', dateStr));

            /* cache DOM nodes */
            me.seconds  = $('.clock-sec', el);
            me.minutes  = $('.clock-min', el);
            me.hours    = $('.clock-hours', el);

            me._setTime();
        },

        initEvents: function() {
            var me = this;
            setInterval(function() {
                me._setTime.call(me)
            }, 1000);
        }
    };

    $.fn.clock = function() {
        return this.each(function() {
            new Clock(this);
        });
    }
}));
