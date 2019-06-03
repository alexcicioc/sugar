({
    extendsFrom: 'FilterQuicksearchView',

    /**
     * @override
     * @param {Object} opts
     */
    initialize: function(opts) {
        console.log('aaaa');
        this._super('initialize', [opts]);
    },

    /**
     * Fire quick search
     * @param {Event} e
     */
    throttledSearch: _.debounce(function(e) {
        console.log('aaaa');
        var newSearch = this.$el.val();
        if(this.currentSearch !== newSearch) {
            this.currentSearch = newSearch;
            this.layout.trigger('filter:apply', newSearch);
        }
    }, 3000),
})
