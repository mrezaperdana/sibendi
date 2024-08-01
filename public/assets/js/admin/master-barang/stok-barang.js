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
                { orderable: false, targets: 6 }, // Disable ordering on column 6 (Actions)
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
            datatable.column(3).search(value).draw();
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

    // Define columns to export
    const exportColumns = [1, 2, 3, 4, 5, 6]; // Specify the column indexes you want to export
    // Hook export buttons
    var exportButtons = () => {
        const documentTitle = "Laporan Stok Barang";

        var buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: "copyHtml5",
                    title: documentTitle,
                    exportOptions: {
                        columns: exportColumns,
                    },
                },
                {
                    extend: "excelHtml5",
                    title: documentTitle,
                    exportOptions: {
                        columns: exportColumns,
                    },
                },
                {
                    extend: "csvHtml5",
                    title: documentTitle,
                    exportOptions: {
                        columns: exportColumns,
                    },
                },
                {
                    extend: "pdfHtml5",
                    title: documentTitle,
                    orientation: "landscape",
                    exportOptions: {
                        columns: exportColumns,
                    },
                    customize: function (doc) {
                        // Add header to each page
                        doc["header"] = function () {
                            return {
                                columns: [
                                    {
                                        text: "Laporan Stok Barang",
                                        alignment: "left",
                                        fontSize: 12,
                                        margin: [20, 10],
                                    },
                                ],
                            };
                        };

                        // Add footer to each page
                        doc["footer"] = function (page, pages) {
                            return {
                                columns: [
                                    {
                                        alignment: "left",
                                        text: [
                                            "Page ",
                                            { text: page.toString() },
                                            " of ",
                                            { text: pages.toString() },
                                        ],
                                        fontSize: 10,
                                        margin: [20, 0],
                                    },
                                    {
                                        alignment: "right",
                                        text:
                                            "Generated on " +
                                            new Date().toLocaleDateString(),
                                        fontSize: 10,
                                        margin: [0, 0, 20, 0],
                                    },
                                ],
                            };
                        };

                        // Customize the layout and styling
                        doc.content[1].table.widths = [
                            "20%",
                            "20%",
                            "20%",
                            "20%",
                            "10%",
                            "10%",
                        ]; // Adjust column widths
                        var rowCount = doc.content[1].table.body.length;

                        for (var i = 1; i < rowCount; i++) {
                            // Apply alternating row colors
                            if (i % 2 === 0) {
                                doc.content[1].table.body[i].forEach(function (
                                    cell
                                ) {
                                    cell.fillColor = "#f3f3f3";
                                });
                            }
                        }

                        // Add a title to the PDF document
                        doc.styles.tableHeader.fontSize = 12;
                        doc.styles.tableHeader.bold = true;
                        doc.styles.tableHeader.color = "white";
                        doc.styles.tableHeader.fillColor = "#1a73e8";
                        doc.content[0].text = "Laporan Stok Barang";
                        doc.content[0].alignment = "center";
                        doc.content[0].fontSize = 16;
                        doc.content[0].bold = true;
                        doc.content[0].margin = [0, 0, 0, 20];
                    },
                },
            ],
        })
            .container()
            .appendTo($("#kt_datatable_example_buttons"));

        // Hook dropdown menu click event to datatable export buttons
        const exportButtons = document.querySelectorAll(
            "#kt_datatable_example_export_menu [data-kt-export]"
        );
        exportButtons.forEach((exportButton) => {
            exportButton.addEventListener("click", (e) => {
                e.preventDefault();

                // Get clicked export value
                const exportValue = e.target.getAttribute("data-kt-export");
                const target = document.querySelector(
                    ".dt-buttons .buttons-" + exportValue
                );

                // Trigger click event on hidden datatable export buttons
                target.click();
            });
        });
    };

    // Delete cateogry
    var handleDeleteRows = () => {
        // Select all delete buttons
        const deleteButtons = table.querySelectorAll(
            '[data-kt-ecommerce-product-filter="delete_row"]'
        );

        deleteButtons.forEach((d) => {
            // Delete button on click
            d.addEventListener("click", function (e) {
                e.preventDefault();

                // Select parent row
                const parent = e.target.closest("tr");

                // Get category name
                const productName = parent.querySelector(
                    '[data-kt-ecommerce-product-filter="product_name"]'
                ).innerText;

                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
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
                            text: "You have deleted " + productName + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            },
                        }).then(function () {
                            // Remove current row
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
    var filterTanggal = () => {
        const table = $("#myTable").DataTable();

        $("#filterButton").on("click", function () {
            var startDate = $("#startDate").val();
            var endDate = $("#endDate").val();

            // Apply date filter
            $.fn.dataTable.ext.search.push(function (
                settings,
                data,
                dataIndex
            ) {
                var date = data[3]; // Use data for the date column (index 3)
                if (
                    (startDate === "" && endDate === "") ||
                    (startDate === "" && date <= endDate) ||
                    (startDate <= date && endDate === "") ||
                    (startDate <= date && date <= endDate)
                ) {
                    return true;
                }
                return false;
            });

            table.draw();
            $.fn.dataTable.ext.search.pop(); // Remove filter function after draw
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
            exportButtons();
            handleverifikasiRows();
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
