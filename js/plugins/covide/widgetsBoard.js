(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define(['jquery', 'jui/sortable'], factory);
    } else {
        factory(window.jQuery);
    }
}(function ($) {
    var widgetsBoard = function(el) {
        this.makeSortable($('.row-fluid', el));
    }

    widgetsBoard.prototype = {
        createRow: function(append, after) {
            var row = $('<div class="row-fluid" />');
            append && row.append(append);
            after && row.insertAfter(after);
            return row;
        },

        makeSortable: function(target) {
            var me = this;
            target.sortable({
                connectWith: '.widgetsBoard > .row-fluid',
                handle: '.widget-title',
                helper: 'clone',
                forceHelperSize: true,
                opacity: 0.7,
                revert: true,
                receive: function(e, ui) {
                    var receiver = $(e.target),
                        sender = $(ui.sender),
                        newRow = null;

                    if (ui.item.hasClass('span12')) {
                        var children = receiver.children().not(ui.item),
                            rows = receiver.siblings().addBack(),
                            receiverIdx = rows.index(receiver),
                            senderIdx = rows.index(sender);

                        newRow = me.createRow(children);

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
                                newRow = me.createRow(fullWidthWidget, receiver);
                            } else if (children.length === 2) {
                                newRow = me.createRow(children.last(), receiver);
                            }
                        } else {
                            sender.sortable('cancel');
                        }
                    }

                    null !== newRow && me.makeSortable(newRow);

                    !sender.children().length && sender.remove();
                }
            }).disableSelection();
        }
    }

    $.fn.widgetsBoard = function() {
        return this.each(function() {
            new widgetsBoard(this);
        });
    }
}));
