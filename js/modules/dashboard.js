define('modules/dashboard', ['jui/sortable'], function () {
    var CovideDashboard = function() {
        $($.proxy(this.init, this));
    }

    CovideDashboard.prototype = {
        init: function() {
            this.initSortables();
        }
    }

    return CovideDashboard;
});