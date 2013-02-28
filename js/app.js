require.config({
    paths: {
        bootstrap: 'plugins/bootstrap/all',
        jui: 'lib/jquery-ui/package'
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
