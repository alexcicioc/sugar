/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
({
    extendsFrom: 'RecordView',

    initialize: function(options) {
        this.plugins = _.union(this.plugins || [], ['HistoricalSummary']);
        this._super('initialize', [options]);

        this.context.on('button:hierarchy_button:click', this.hierarchybutton, this);
        //add listeners for custom buttons
        this.context.on('button:refresh_specific_subpanel:click', this.refresh_specific_subpanel, this);
        this.context.on('button:refresh_all_subpanels:click', this.refresh_all_subpanels, this);

    },

    hierarchybutton: function () {
        app.drawer.open({
            layout: 'hierarchy2',
            context: {
                model: this.model
            }
        });
    },

    /**
     * Refreshes a specific subpanel given a link
     */
    refresh_specific_subpanel: function() {
        var linkName = 'contacts';
        var subpanelCollection = this.model.getRelatedCollection(linkName);
        subpanelCollection.fetch({relate: true});
    },

    /**
     * Refreshes all subpanels
     */
    refresh_all_subpanels: function() {
        _.each(this.model._relatedCollections, function(collection){
            collection.fetch({relate: true});
        });
    }

})
