"use strict";

// Class definition
var KTAppEcommerceProducts = (function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            info: false,
            order: [],
            pageLength: 10,
            columnDefs: [
                { orderable: false, targets: 0 }, // Disable ordering on column 0 (checkbox)
                { orderable: false, targets: 2 }, // Disable ordering on column 5 (Details)
                { orderable: false, targets: 3 }, // Disable ordering on column 6 (Actions)
            ],
        });

        // Re-init functions on datatable re-draws
        datatable.on("draw", function () {
            handleDeleteRows();
        });
    };

    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector(
            '[data-kt-ecommerce-product-filter="search"]'
        );
        filterSearch.addEventListener("keyup", function (e) {
            datatable.search(e.target.value).draw();
        });
    };

    // Handle status filter dropdown
    var handleStatusFilter = () => {
        const filterStatus = document.querySelector(
            '[data-kt-ecommerce-product-filter="status"]'
        );
        $(filterStatus).on("change", (e) => {
            let value = e.target.value;
            if (value === "all") {
                value = "";
            }
            datatable.column(5).search(value).draw();
        });
    };

    // Verifikasi cateogry
    var handleverifikasiRows = () => {
        // Select all Verifikasi buttons
        const verifikasiButtons = table.querySelectorAll(
            '[data-kt-ecommerce-product-filter="verifikasi_row"]'
        );

        verifikasiButtons.forEach((d) => {
            // Verifikasi button on click
            d.addEventListener("click", function (e) {
                e.preventDefault();

                // Get the href attribute of the link
                const href = this.getAttribute("href");

                // Redirect to the specified href
                window.location.href = href;
            });
        });
    };

    // Delete satuan
   // Function to handle deletion with SweetAlert2 confirmation
function deleteSatuan(kodeSatuan) {
    Swal.fire({
        text: "Are you sure you want to delete this item?",
        icon: "warning",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Yes, delete!",
        cancelButtonText: "No, cancel",
        customClass: {
            confirmButton: "btn fw-bold btn-danger",
            cancelButton: "btn fw-bold btn-active-light-primary",
        },
    }).then(function (result) {
        if (result.isConfirmed) {
            // Submit the corresponding form
            document.getElementById('delete-form-' + kodeSatuan).submit();
        }
    });
}

    
    

    // Public methods
    return {
        init: function () {
            table = document.querySelector("#kt_ecommerce_products_table");

            if (!table) {
                return;
            }

            initDatatable();
            handleverifikasiRows();
            handleSearchDatatable();
            handleStatusFilter();
            handleDeleteRows();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceProducts.init();
});
