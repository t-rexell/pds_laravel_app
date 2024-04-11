$(function(){
    // holds the user id
    let this_id;

    // modal
    let deleteModal = $("#deletePersonalInfoModal");

	let table = $("#PersonalInfoTable").DataTable({
        autowidth: false,
		responsive: true,
		processing: true,
		serverSide: true,
		searching: true,
        paging: true,
		ajax: {
			method: "GET",
			url: "personal/info/table",
			dataType: "json",
			error: function (errors) {
				console.log(errors);
			},
		},
		columns: [
			{ data: "first_name", name: "first_name" },
			{ data: "middle_name", name: "middle_name" },
			{ data: "surname", name: "surname" },
			{ data: "created_at", name: "created_at" },
			{ data: "action", name: "action", orderable:false, searchable: false },
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
    $("body").on("click", ".delete-personalinfo", function () {
        this_id = $(this).attr("data-id");
        deleteModal.modal("show");
    });
    // end

    //start => modal button delete
    $("body").on("click", "#destroyPersonalInfo", function () {
        $.ajax({
            type: "DELETE",
            url: "/personalinfo/" + this_id,
            dataType: "json",
            beforeSend: function () {
                buttons("destroyPersonalInfo", "start");
            },
        })
            .done(function (response) {
                table.ajax.reload();
                toast.fire({
                    icon: "success",
                    title: response.message,
                    showCloseButton: true,
                    width: 500,
                    timer: 2000,
                    timerProgressBar: true,
                });
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                toast.fire({
                    icon: "error",
                    title: jqXHR.responseJSON.message,
                });
            })
            .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
                buttons("destroyPersonalInfo", "finish");
                deleteModal.modal("hide");
            });
    });
    // end
});

