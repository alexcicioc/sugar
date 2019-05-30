({
    extendsFrom: 'SubpanelsLayout',

    _hiddenSubpanels: [],

    initialize: function (options) {
        this._super('initialize', [options]);
        this.registerModelEvents();
    },

    /**
     * Add the model change events for fields that determine when a subpanel should be hidden
     */
    registerModelEvents: function () {
        var link = 'calls';
        this.model.on('change:phone_mobile', function (model) {
            console.log(model.get('phone_mobile'));
            if (model.get('phone_mobile')) {
                this.unhideSubpanel(link);
            } else {
                this.hideSubpanel(link);
            }
        }, this);
    },

    /**
     * Override showSubpanel to re-hide subpanels when outside changes occur, like reordering subpanel
     * @inheritdoc
     */
    showSubpanel: function (linkName) {
        this._super('showSubpanel', [linkName]);

        _.each(this._hiddenSubpanels, function (link) {
            this.hideSubpanel(link);
        }, this);
    },

    /**
     * Helper for getting the Subpanel View for a specific link
     */
    getSubpanelByLink: function (link) {
        return this._components.find(function (component) {
            console.log(component.context.get('link'));
            return component.context.get('link') === link;
        });
    },

    /**
     * Add to the _hiddenSubpanels array, and hide the subpanel
     */
    hideSubpanel: function (link) {
        console.log(link);

        this._hiddenSubpanels.push(link);
        var component = this.getSubpanelByLink(link);
        if (!_.isUndefined(component)) {
            component.hide();
        }
        this._hiddenSubpanels = _.unique(this._hiddenSubpanels);
    },

    /**
     * Unhide the Subpanel and remove from _hiddenSubpanels array
     */
    unhideSubpanel: function (link) {
        var index = this._hiddenSubpanels.findIndex(function (l) {
            return l == link;
        });
        if (_.isUndefined(index)) {
            delete this._hiddenSubpanels[index];
        }
        var component = this.getSubpanelByLink(link);
        if (!_.isUndefined(component)) {
            component.show();
        }
    }
})
