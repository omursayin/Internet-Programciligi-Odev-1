<!DOCTYPE html>
<html lang="tr">

<?php  $this->load->view("includes/header.php"); ?>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
		<form method="POST" action="<?php echo base_url("formApp/insert") ?> " class="contact100-form validate-form">
				<span class="contact100-form-title">
					İLETİŞİM FORMU
				</span>

				<label class="label-input100" for="first-name">Adınız</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="first-name" class="input100" type="text" name="name" placeholder="Adınız...">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="surname" placeholder="Soyadınız...">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Email Adresiniz</label>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="email" placeholder="example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Telefon Numaranız</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="telephone" placeholder=" 0555 000 0000">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Mesajınız</label>
				<div class="wrap-input100 validate-input">
					<textarea id="message" class="input100" name="message" placeholder="Lütfen mesajınızı yazınız..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							GÖNDER
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<?php  $this->load->view("includes/footer.php"); ?>

</body>
</html>
