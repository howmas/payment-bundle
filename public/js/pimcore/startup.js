pimcore.registerNS("pimcore.plugin.HowMASPaymentBundle");

pimcore.plugin.HowMASPaymentBundle = Class.create({

    initialize: function () {
        document.addEventListener(pimcore.events.pimcoreReady, this.pimcoreReady.bind(this));
    },

    pimcoreReady: function (e) {
        // alert("HowMASPaymentBundle ready!");
    }
});

var HowMASPaymentBundlePlugin = new pimcore.plugin.HowMASPaymentBundle();
