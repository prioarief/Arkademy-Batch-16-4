$(document).ready(function () {
	let url = $("#url").val();
	$("a#btnDelete").on("click", function (e) {
		e.preventDefault();

		const href = $(this).attr("href");
		Swal.fire({
			title: "Data akan di hapus!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Hapus!",
		}).then((result) => {
			if (result.value) {
				document.location.href = href;
			}
		});
	});

	// Event Edit
	$(".EditProduct").on("show.bs.modal", function (e) {
		let button = $(e.relatedTarget);
		let id = button.data("id");

		$.ajax({
			url: url + "Product/Detail/" + id,
			data: {
				id: id,
			},
			method: "post",
			success: function (response) {
				const result = JSON.parse(response);

				$("div.EditCashier select").val(result.id_cashier);
				$("div.EditCategory select").val(result.id_category);
				$("input#id").val(result.id);
				$("input#product").val(result.name);
				$("input#price").val(`Rp. ${result.price}`);
			},
		});
	});

	const flashdata = $(".flashdata").data("alert");
	if (flashdata) {
		Swal.fire({
			icon: "success",
			title: `${flashdata}`,
			showConfirmButton: true,
		});
	}
});
