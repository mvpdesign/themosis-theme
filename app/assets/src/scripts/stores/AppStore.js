var AppDispatcher = require('../dispatchers/AppDispatcher');
var AppConstants  = require('../constants/AppConstants');
var Backbone      = require('backbone');

AppModel = Backbone.Model.extend({});

AppCollection = Backbone.Collection.extend([], {
    model: AppModel,
    initialize: function() {
        AppDispatcher.register(function(payload) {
            switch(payload.actionType) {
              default:
                // do nothing
            }
        });
    }
});

AppStore = new AppCollection();
module.exports = AppStore;
