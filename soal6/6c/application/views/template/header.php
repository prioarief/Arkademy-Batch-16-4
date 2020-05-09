<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="<?= base_url() ?>assets/arkademy.png" type="image/x-icon">
	<title>Arkademy</title>
</head>

<body>
	<!-- Image and text -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
		<a class="navbar-brand" href="#">
			<img src="<?= base_url() ?>assets/arkademy.png" width="168" height="130" class="d-inline-block align-top" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2 search" type="search" placeholder="Search">
				<button class="btn btn-warning text-light border-light my-2 my-sm-0 buttonAdd" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Add</button>
			</form>
		</div>
	</nav>
	<input type="hidden" id="url" value="<?= base_url() ?>">
	<div class="flashdata" data-alert="<?= $this->session->flashdata('alert') ?>"></div>
	<div class="flashdata2" data-alert2="<?= $this->session->flashdata('alert2') ?>"></div>
