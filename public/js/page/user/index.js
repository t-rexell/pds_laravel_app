console.log("My JavaScript file (user/index.js) is being read!");

$(function () {
    // holds the user id
    let this_id;

    // modal
    let deleteModal = $("#delete-user-modal");

    let table = $("#userTable").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        searching: true,
        pageLength: 5,
        ajax: {
            method: "GET",
            url: "/users/table",
            dataType: "json",
            error: function (errors) {
                console.log(errors);
            },
        },
        columns: [
            { data: "first_name", name: "first_name" },
            { data: "middle_name", name: "middle_name" },
            { data: "last_name", name: "last_name" },
            { data: "email", name: "email" },
            { data: "action", name: "action", orderable: false },
        ],
    });

    // custom search
    $("#custom-search-field").keyup(function () {
        table.search($(this).val()).draw();
    });

    $("#custom-page-length").change(function () {
        table.page.len($(this).val()).draw();
    });

    // start => button delete
    $("body").on("click", ".delete-user", function () {
        this_id = $(this).attr("data-id");
        deleteModal.modal("show");
    });
    // end
    //start => modal button delete
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
                deleteModal.modal("hide");
            });
    });
    // end
});
