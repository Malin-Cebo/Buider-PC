{% extends "base.html.twig" %}
<?php
require_once "header.php";
require_once "build-mb.php";
require_once "build-pr.php";
require_once "build-cool.php";
require_once "build-ram.php";
require_once "build-hdd.php";
require_once "build-ssd.php";
require_once "build-pv.php";
require_once "build-cases.php";
require_once "build-sursa.php";
require_once "build-mon.php";
require_once "build-mouse.php";
require_once "build-tast.php";

?>
<style type="text/css">
	html, body{
		background-image: url(https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/03/22/16/istock-644053990.jpg);
		background-attachment: fixed;
		background-size: cover;

	}
</style>
<section class="sec-build">
	<div class="container">
		<h1 class="a-center">Alege singur componentele PC-ului dorit</h1>
		<h4 class="tip-prod">Placa de Bază :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod" data-toggle="modal" data-target="#ModalLong-mb">
					<div class="select-prod-mb">
						<?php
						if ($_SESSION['a']['mb'])
						{
							echo buildmb($_SESSION['a']['mb']);
						} else
						{
							$_GET['type'] = "mb"; require "alege-prod.php"; 
						}
						?>
					</div>
					<!-- Modallllllllllll -->
					<div class="modal fade" id="ModalLong-mb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Placa de Bază dorită:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='mb'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- Modal BOdyyyyyyyy -->
									<div class="container-fluid">
										<?php 
										require "list-mb.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddddddd -->
				</div>

			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Procesor :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod-pr" data-toggle="modal" data-target="#ModalLong-pr">
						<?php
						if ($_SESSION['a']['pr'])
						{
							echo buildpr($_SESSION['a']['pr']);
						} else
						{
							$_GET['type'] = "pr"; require "alege-prod.php"; 
						}
						?>
					</div>
					
					<!-- Modallll -->
					<div class="modal fade" id="ModalLong-pr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Procesorul dorit:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='pr'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- Modal BOdyyyyyyyyyyyyyyyy -->
									<div class="container-fluid">
										<?php 
										require "list-pr.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDdddddd -->
				</div>

			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Cooler :</h4>
		<div class="row">
			<div class="col-12">

				<div class="b-prod">
					<div class="select-prod-cool" data-toggle="modal" data-target="#ModalLong-cool">
						<?php
						if ($_SESSION['a']['cool'])
						{
							echo buildcool($_SESSION['a']['cool']);
						} else
						{
							$_GET['type'] = "cool"; require "alege-prod.php"; 
						}
						?>
					</div>
					
					<!-- Modalllllllll -->
					<div class="modal fade" id="ModalLong-cool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Coolerul dorit:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='cool'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyyyyyy -->
									<div class="container-fluid">
										<?php 
										require "list-cool.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddddd -->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Memorie RAM :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod-ram" data-toggle="modal" data-target="#ModalLong-ram">
						<?php
						if ($_SESSION['a']['ram'])
						{
							echo buildram($_SESSION['a']['ram']);
						} else
						{
							$_GET['type'] = "ram"; require "alege-prod.php"; 
						}
						?>
					</div>
					<!-- Modallllll -->
					<div class="modal fade" id="ModalLong-ram" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Memoria RAM dorita:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='ram'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyyyy -->
									<div class="container-fluid">
										<?php 
										require "list-ram.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDdddd -->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Memorie HDD :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod-hdd" data-toggle="modal" data-target="#ModalLong-hdd">
						<?php
						if ($_SESSION['a']['hdd'])
						{
							echo buildhdd($_SESSION['a']['hdd']);
						} else
						{
							$_GET['type'] = "hdd"; require "alege-prod.php"; 
						}
						?>
					</div>
					<!-- Modallllll-->
					<div class="modal fade" id="ModalLong-hdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Memoria HDD dorita:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='hdd'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyyyy -->
									<div class="container-fluid">
										<?php 
										require "list-hdd.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddddd-->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Memorie SSD :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod select-prod-ssd" data-toggle="modal" data-type='ssd' data-target="#ModalLong-ssd">
						<?php
						if ($_SESSION['a']['ssd'])
						{
							echo buildssd($_SESSION['a']['ssd']);
						} else
						{
							$_GET['type'] = "ssd"; require "alege-prod.php"; 
						}
						?>
					</div>
					<!-- Modallll-->
					<div class="modal fade" id="ModalLong-ssd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Memoria SSD dorita:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='ssd'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyy -->
									<div class="container-fluid">
										<?php 
										require "list-ssd.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddd-->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Placa Video :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					
					<div class="select-prod select-prod-pv" data-toggle="modal" data-type='pv' data-target="#ModalLong-pv">
						<?php

						if ($_SESSION['a']['pv'])
						{
							echo buildpv($_SESSION['a']['pv']);
						} else
						{
							$_GET['type'] = "pv"; require "alege-prod.php"; 
						}
						?>
					</div>
					<!-- Modallll-->
					<div class="modal fade" id="ModalLong-pv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Plaaca Video dorita:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='pv'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyy -->
									<div class="container-fluid">
										<?php 
										require "list-pv.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddd-->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Carcasa :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod select-prod-cases" data-toggle="modal" data-type='cases' data-target="#ModalLong-cases">
						<?php
						if ($_SESSION['a']['cases'])
						{
							echo buildcases($_SESSION['a']['cases']);
						} else
						{
							$_GET['type'] = "cases"; require "alege-prod.php"; 
						}
						?>
					</div>
					<!-- Modallll-->
					<div class="modal fade" id="ModalLong-cases" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Carcasa dorita:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='cases'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyy -->
									<div class="container-fluid">
										<?php 
										require "list-cases.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddd-->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Sursa de alimentare :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod select-prod-sursa" data-toggle="modal" data-type='sursa' data-target="#ModalLong-sursa">
						<?php
						if ($_SESSION['a']['sursa'])
						{
							echo buildsursa($_SESSION['a']['sursa']);
						} else
						{
							$_GET['type'] = "sursa"; require "alege-prod.php"; 
						}
						?>
					</div>
					<!-- Modallll-->
					<div class="modal fade" id="ModalLong-sursa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Sursa de alimentare dorita:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='sursa'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyy -->
									<div class="container-fluid">
										<?php 
										require "list-sursa.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddd-->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Monitor :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod select-prod-mon" data-toggle="modal" data-type='mon' data-target="#ModalLong-mon">
						<?php
						if ($_SESSION['a']['mon'])
						{
							echo buildmon($_SESSION['a']['mon']);
						} else
						{
							$_GET['type'] = "mon"; require "alege-prod.php"; 
						}
						?>
					</div>
					<!-- Modallll-->
					<div class="modal fade" id="ModalLong-mon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Monitorul dorit:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='mon'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyy -->
									<div class="container-fluid">
										<?php 
										require "list-mon.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddd-->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Maus :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod select-prod-mouse" data-toggle="modal" data-type='mouse' data-target="#ModalLong-mouse">
						<?php
						if ($_SESSION['a']['mouse'])
						{
							echo buildmouse($_SESSION['a']['mouse']);
						} else
						{
							$_GET['type'] = "mouse"; require "alege-prod.php"; 
						}
						?>

					</div>
					<!-- Modallll-->
					<div class="modal fade" id="ModalLong-mouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Mausul dorit:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='mouse'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyy -->
									<div class="container-fluid">
										<?php 
										require "list-mouse.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddd-->
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="tip-prod">Tastatura :</h4>
		<div class="row">
			<div class="col-12">
				<div class="b-prod">
					<div class="select-prod select-prod-tast" data-toggle="modal" data-type='tast' data-target="#ModalLong-tast">
						<?php
						// var_dump($_SESSION['a']);

						if ($_SESSION['a']['tast'])
						{
							echo buildtast($_SESSION['a']['tast']);
						} else
						{
							$_GET['type'] = "tast"; require "alege-prod.php"; 
						}

						?>
					</div>
					<!-- Modallll-->
					<div class="modal fade" id="ModalLong-tast" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog modal-xxl" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Selectează Tastatura dorita:</h5>
									<button type="button" class="btn btn-secondary ml-auto no-set-prod" id="no-set-prod" data-type='tast'>Nu seta Produs!</button>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body"><!-- 		Modal BOdyyy -->
									<div class="container-fluid">
										<?php
										require "list-tast.php";
										?>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
								</div>
							</div>
						</div>
					</div><!-- Modal ENDddd-->
				</div>
			</div>
		</div>
	</div>
</section>
<div class="pret-total a-center">
	<h4>Total</h4>
	<strong id="pret">
		<?php
		require "ftotal.php";
		echo prTotal();
		?>
	</strong><br>
	<b>lei</b><br>
	<div class="add-cart" title='Adaugă în coș!'>
		<i class="fas fa-cart-plus"></i>
	</div>
</div>

<?php
require_once "footer.php";
?>

<script>
	$('.one-prod').click(function(){
		$type=$(this).data('type');
		$('#ModalLong-'+ $type).modal("hide");
		$.post('getprod.php',
		{
			id: $(this).data('prod'),
			type: $type
		},
		function(data, status){
			$data = JSON.parse(data);
			$('.select-prod-'+$type).html($data.prod);
			$("#pret").text($data.l);
		});
	});
</script>
<script>
	$('.no-set-prod').click(function(){
		$type=$(this).data('type');
		$('#ModalLong-'+ $type).modal("hide");
		$.post('alege-prod-pret.php',
		{
			type: $type
		}, 
		function(data, status){
			$data = JSON.parse(data);
			$('.select-prod-'+$type).html($data.prod);
			$("#pret").text($data.l);
		});
	});
</script>
<script>
	$('.add-cart').click(function(){
		$.post('add-cart.php',
			function(data,status){
				if (data == 1){
					swal("Succes", "Totul sa adăugat în coș!", "success");
				} else if (data == 2){ 
					swal("Hopa", "Nu ati selectat nici un produs!", "warning");
				} else{ 
					swal("Hopa", "Pare că ceva nu a mers bine!", "error");
				}
			});
	});
</script>
</body>
</html>
