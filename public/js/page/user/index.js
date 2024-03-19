$(function () {
    let this_id;

    let modal = $("#user-modal");

    let table = $("#usersTable").DataTable({
        autoWidth: false,
        responsive: true,
        processing: true,
        serverSide: true,
        searching: true,
        paging: true,
        ajax: {
            method: "GET",
            url: "/users/table",
            dataType: "json",
            // error: function (errors) {
            //     toast.fire({
            //         icon: "error",
            //         title: "Invalid Data Token.",
            //     });
            // },
        },
        language: {
            searchPlaceholder: "Search Records..",
        },
        columns: [
            { data: "name", name: "name" },
            { data: "email", name: "email" },
            // { data: "date_added", name: "date_added" },
            // { data: "date_updated", name: "date_updated" },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
            },
        ],
    });
    $("#custom-search-field").keyup(function () {
        table.search($(this).val()).draw();
    });

    $("#custom-page-length")
        .change(function () {
            table.page.len($(this).val()).draw();
        })
        .trigger("change");

    $("body").on("click", ".delete-user", function () {
        this_id = $(this).attr("data-id");
        modal.modal("show");
    });

    $("body").on("click", "#destroy-user", function () {
        $.ajax({
            type: "DELETE",
            url: "/users/" + this_id,
            dataType: "json",
            beforeSend: function () {
                buttons("destroy-user", "start");
            },
        })
            .done(function (response) {
                table.ajax.reload();
                toast.fire({
                    icon: "success",
                    title: response.message,
                });
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                toast.fire({
                    icon: "error",
                    title: jqXHR.responseJSON.message,
                });
            })
            .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
                buttons("destroy-user", "finish");
                modal.modal("hide");
            });
    });
});
