<!-- Modal Add -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">ADD</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?= base_url() ?>Product/Create">
					<div class="form-group">
						<select class="form-control" id="cashier" name="cashier">
							<?php foreach ($cashier as $cash) : ?>
								<option value="<?= $cash['id'] ?>"><?= $cash['name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="category" name="category">
							<?php foreach ($category as $cate) : ?>
								<option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" required name="product">
					</div>
					<div class="form-group">
						<input type="text" min="1" class="form-control" required name="price" value="Rp. ">
					</div>
					<div class="form-group">
						<button class="btn btn-warning float-right text-light">ADD</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<!-- Modal Edit -->
<div class="modal fade bd-example-modal-lg-edit EditProduct" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">EDIT</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?= base_url() ?>Product/Edit">
					<input type="hidden" required name="id" id="id">
					<div class="form-group EditCashier">
						<select class="form-control" id="cashier" required name="cashier">
							<?php foreach ($cashier as $cas) : ?>
								<option value="<?= $cas['id'] ?>"><?= $cas['name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group EditCategory">
						<select class="form-control" id="category" required name="category">
							<?php foreach ($category as $cat) : ?>
								<option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="product" required name="product">
					</div>
					<div class="form-group">
						<input type="text" min="1" class="form-control" id="price" required name="price">
					</div>
					<div class="form-group">
						<button class="btn btn-warning float-right text-light">EDIT</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
	function sweet() {
		swal("Data Raisa Andriani ID <p> #1</p>!", "Berhasil Di Hapus", "success");
	}
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/myJs.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</body>

</html>
