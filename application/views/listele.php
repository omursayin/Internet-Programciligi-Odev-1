<!DOCTYPE html>
<html lang="tr">

<?php $this->load->view("includes/header.php"); ?>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Adı</th>
						<th scope="col">Soyadı</th>
						<th scope="col">Email</th>
						<th scope="col">Telefon</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($items as $item) {
					?>
						<tr>
							<th scope="row"><?php echo $item->id; ?></th>
							<td><?php echo $item->name; ?></td>
							<td><?php echo $item->surname; ?></td>
							<td><?php echo $item->email; ?></td>
							<td><?php echo $item->telephone; ?></td>
						</tr>
					<?php } ?>


				</tbody>
			</table>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<?php $this->load->view("includes/footer.php"); ?>

</body>

</html>