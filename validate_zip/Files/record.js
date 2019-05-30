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
        this.context.on('button:zipcode_check:click', this.validatePostalCode, this);
    },

    hierarchybutton: function () {
        app.drawer.open({
            layout: 'hierarchy2',
            context: {
                model: this.model
            }
        });
    },

    validatePostalCode: function(evt) {
        console.log(this.model);
        var currentCity = this.model.get('billing_address_city');
        var currentZip = this.model.get('billing_address_postalcode');

        //jQuery AJAX call to Zippopotamus REST API
        $.ajax({
            url: 'https://api.zippopotam.us/us/' + currentZip,
            success: function(data) {
                this.zipJSON = data;
                var city = this.zipJSON.places[0]['place name'];

                if (city === currentCity)
                {
                    app.alert.show('address-ok', {
                        level: 'success',
                        messages: 'City and Zipcode match.',
                        autoClose: true
                    });
                }
                else
                {
                    app.alert.show('address-ok', {
                        level: 'error',
                        messages: 'City and Zipcode do not match.',
                        autoClose: false
                    });
                }
            }
        });
    }

})
