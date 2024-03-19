console.log("My JavaScript file (user/index.js) is being read!");

$(function () {

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
});
