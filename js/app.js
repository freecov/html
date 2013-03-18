require.config({
    paths: {
        bootstrap: 'plugins/bootstrap/all',
        covide: 'plugins/covide',
        jui: 'lib/jquery-ui/package',
        locale: 'plugins/locales'
    }
});

require(['utils', 'layout'], function(utils, layout) {

    var Covide = function() {
        this.layout = new layout();
    }

    Covide.prototype = {
        init: function () {

        }
    }

    window.Covide = new Covide();
});
