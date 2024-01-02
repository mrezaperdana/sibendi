"use strict";
var KTFormRepeaterBasic = {
    init: function() {
        $("#kt_docs_repeater_basic").repeater({
            initEmpty: !1,
            defaultValues: {
                "text-input": "foo"
            },
            show: function() {
                $(this).slideDown()
                 // Initialize Select2 on the newly added dropdown
                 $(this).find('[data-control="selector_barang"]').select2();

                 
            },
            hide: function(t) {
                $(this).slideUp(t)
            }
        })
    }
};
KTUtil.onDOMContentLoaded((function() {
    KTFormRepeaterBasic.init()
}
));
