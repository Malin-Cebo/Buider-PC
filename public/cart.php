<!DOCTYPE html>
<html>
<?php
require "config.php";
require "header.php";
require "select-prod-cart.php";
if (!isset($_SESSION)) {
	session_start();
}
?>
<style type="text/css">
	html, body{
		background-image: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/03/22/16/istock-644053990.jpg);
		background-attachment: fixed;
		background-size: cover;

	}
</style>
<section class="sec-build">
	<h2 class="a-center whitecolor">Produsele selectate :</h2>
	<div class="container">
		<div class='row justify-content-center'>
			<div class='select-prod-cart col-12'>
				<?php
				selectprod();
				?>
			</div>
		</div>
	</div>
</section>
<?php
require_once "footer.php";
?>
<script>
	addev();
	function sfun() {
		swal({
			title: "Sunteți sigur?",
			text: "Că doriți să comandați acest produs",
			icon: "warning",
			buttons: ["Înapoi!", "Comandă!"],
		})
		.then((willDelete) => {
			if (willDelete) {
				$.post('save-cart.php',
				{
					id: $(this).data('prod'),
					pret: $(this).data('pret')
				}, 
				function(data, status){
					if (data){
						swal("Succes", "Totul sa adăugat în coș!", "success");
						$('.select-prod-cart').html(data);
						addev();
					} else{ 
						swal("Hopa", "Pare că ceva nu a mers bine!", "error");
					}
				});
			}
		});
	}
	function dfun(){
		swal({
			title: "Sunteți sigur?",
			text: "Că doriți să ștergeți acest produs din coș",
			icon: "warning",
			buttons: ["Înapoi!", "Șterge"],
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.post('drop-prod.php',
				{
					id: $(this).data('prod')
				}, 
				function(data, status){
					if (data){
						swal("Succes", "Datele au fost șterse!", "success");
						$('.select-prod-cart').html(data);
						addev();
					} else{ 
						swal("Hopa", "Pare că ceva nu a mers bine!", "error");
					}
				});
			}
		});
	}
	function efun(){
		$.post('edit.php',
		{
			id: $(this).data('prod')
		}, 
		function(data, status){
			if (data){
				swal("Succes", "Edit!", "success");
				window.open("builder.php","_self")
			} else{ 
				swal("Hopa", "Pare că ceva nu a mers bine la edit!", "error");
			}
		});
	}
	function addev(){
		$('.cart').click(sfun);
		$('.drop').click(dfun);
		$('.edit').click(efun);
	}
</script>
</body>
</html>