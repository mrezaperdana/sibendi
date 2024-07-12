"use strict";

// Class definition
var KTAppEcommerceProducts = (function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Init datatable
        datatable = $(table).DataTable({
            info: false,
            order: [],
            pageLength: 10,
            columnDefs: [
                { render: DataTable.render.number(",", ".", 2), targets: 4 },
                { orderable: false, targets: [0, 6, 7] }, // Disable ordering on specific columns
            ],
        });

        // Re-init functions on datatable re-draws
        datatable.on("draw", function () {
            handleDeleteRows();
        });
    };

    // Search Datatable
    var handleSearchDatatable = function () {
        const filterSearch = document.querySelector(
            '[data-kt-ecommerce-product-filter="search"]'
        );
        filterSearch.addEventListener("keyup", function (e) {
            datatable.search(e.target.value).draw();
        });
    };

    // Handle status filter dropdown
    var handleStatusFilter = function () {
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

    // Verifikasi category
    var handleVerifikasiRows = function () {
        const verifikasiButtons = table.querySelectorAll(
            '[data-kt-ecommerce-product-filter="verifikasi_row"]'
        );

        verifikasiButtons.forEach((d) => {
            d.addEventListener("click", function (e) {
                e.preventDefault();
                const href = this.getAttribute("href");
                window.location.href = href;
            });
        });
    };

    // Delete category
    var handleDeleteRows = function () {
        const deleteButtons = table.querySelectorAll(
            '[data-kt-ecommerce-product-filter="delete_row"]'
        );

        deleteButtons.forEach((d) => {
            d.addEventListener("click", function (e) {
                e.preventDefault();
                const parent = e.target.closest("tr");
                const productName = parent.querySelector(
                    '[data-kt-ecommerce-product-filter="product_name"]'
                ).innerText;

                Swal.fire({
                    text:
                        "Are you sure you want to delete " + productName + "?",
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
                    if (result.value) {
                        Swal.fire({
                            text: "You have deleted " + productName + "!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        }).then(function () {
                            datatable.row($(parent)).remove().draw();
                        });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: productName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        });
                    }
                });
            });
        });
    };

    // Function to handle date filtering
    var filterTanggal = function () {
        const table = $("#kt_ecommerce_products_table").DataTable();

        $("#filterButton").on("click", function () {
            var startDate = moment(
                $("#kt_daterangepicker_4").data("daterangepicker").startDate
            ).format("YYYY-MM-DD");
            var endDate = moment(
                $("#kt_daterangepicker_4").data("daterangepicker").endDate
            ).format("YYYY-MM-DD");

            // Apply date filter
            $.fn.dataTable.ext.search.push(function (
                settings,
                data,
                dataIndex
            ) {
                var dateCell = data[3]; // Assuming the date column is at index 3 in DataTables
                var dateColumn = $(table.cell(dataIndex, 3).node())
                    .text()
                    .trim(); // Get the actual date shown in the table

                // Format dateColumn to match startDate and endDate format
                var formattedDate = moment(dateColumn, "D MMM YYYY").format(
                    "YYYY-MM-DD"
                );

                if (
                    (startDate === "" && endDate === "") ||
                    (startDate === "" && formattedDate <= endDate) ||
                    (startDate <= formattedDate && endDate === "") ||
                    (startDate <= formattedDate && formattedDate <= endDate)
                ) {
                    return true;
                }
                return false;
            });

            table.draw();
            $.fn.dataTable.ext.search.pop(); // Remove filter function after draw
        });
        // Reset date filter
        $("#resetFilterButton").on("click", function () {
            $("#startDate").val("");
            $("#endDate").val("");
            table.search("").draw(); // Clear search and redraw table
        });
    };

    // Public methods
    return {
        init: function () {
            table = document.querySelector("#kt_ecommerce_products_table");

            if (!table) {
                return;
            }

            initDatatable();
            handleVerifikasiRows();
            handleSearchDatatable();
            handleStatusFilter();
            handleDeleteRows();
            filterTanggal();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceProducts.init();
});
