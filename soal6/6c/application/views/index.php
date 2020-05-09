<div class="container">
	<table class="table responsive">
		<thead class="text-center thead bg-warning rounded text-light ">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Cashier</th>
				<th scope="col">Product</th>
				<th scope="col">Category</th>
				<th scope="col">Price</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($product as $product) : ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $product['cashier'] ?></td>
					<td><?= $product['name'] ?></td>
					<td><?= $product['category'] ?></td>
					<td>Rp. <?= number_format($product['price']) ?></td>
					<td class="text-center"> 
						<a  data-id="<?= $product['id'] ?>" href="#" data-toggle="modal" data-target=".bd-example-modal-lg-edit" class="btn-lg text-success"><i class="fa fa-edit"></i></a>
						<a data-id="<?= $product['id'] ?>" href="<?= base_url('Product/Delete/'. $product['id']) ?>" class="btn-lg text-danger btnDelete" id="btnDelete"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>
