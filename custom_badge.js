({

/**
 * Desc: Create a custom_badge.js in /custom/modules/{Module}/clients/base/fields/custom_badge/
 * Written by: Mohammed Jhosawa
 */

    initialize: function(options) {
        options.def.readonly = true;
        app.view.Field.prototype.initialize.call(this, options);
    },


})
