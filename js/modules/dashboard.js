define('modules/dashboard', ['jui/sortable'], function () {
    var CovideDashboard = function() {
        $($.proxy(this.init, this));
    }

    CovideDashboard.prototype = {
        init: function() {
            this.initSortables();
        },

        _createRow: function(append, after) {
            var row = $('<div class="row-fluid" />');
            append && row.append(append);
            after && row.insertAfter(after);
            return row;
        },

        _makeSortable: function(target) {
            var me = this;
            target.sortable({
                connectWith: '.widgets > .row-fluid',
                handle: '.widget-title',
                helper: 'clone',
                forceHelperSize: true,
                tolerance: 'intersect',
                opacity: 0.7,
                receive: function(e, ui) {
                    var receiver = $(e.target),
                        sender = $(ui.sender),
                        newRow = null;

                    if (ui.item.hasClass('span12')) {
                        var receiverWidgets = receiver.children().not(ui.item),
                            rows = receiver.siblings().addBack(),
                            receiverIdx = rows.index(receiver),
                            senderIdx = rows.index(sender);

                        newRow = me._createRow(receiverWidgets)

                        if (receiverIdx > senderIdx) {
                            newRow.insertBefore(receiver);
                        } else {
                            newRow.insertAfter(receiver);
                        }
                    } else {
                        if (receiver.hasClass('row-fluid')) {
                            var children = receiver.children().not(ui.item),
                                fullWidthWidget = children.filter('.span12');

                            if (fullWidthWidget.length) {
                                newRow = me._createRow(fullWidthWidget, receiver);
                            } else if (children.length === 2) {
                                newRow = me._createRow(children.last(), receiver);
                            }
                        } else {
                            sender.sortable('cancel');
                        }
                    }

                    null !== newRow && me._makeSortable(newRow);

                    !sender.children().length && sender.remove();
                }
            }).disableSelection();
        },

        initSortables: function() {
            this._makeSortable($('.widgets > .row-fluid'));
        }

    }

    return CovideDashboard;
});