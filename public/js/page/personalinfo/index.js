$(function(){

	let table = $("#PersonalInfoTable").DataTable({
        autowidth: false,
		responsive: true,
		processing: true,
		serverSide: true,
		searching: true,
		// pageLength: 5,
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
			{ data: "action", name: "action", orderable:false },
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
