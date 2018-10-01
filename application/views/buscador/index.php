<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Reporte INEE</title>

	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" crossorigin="anonymous">
	<!-- Our Custom CSS -->
	<link href="<?= base_url('assets/css/login.css') ?>" rel="stylesheet">
	<!-- Fontawesome 5 -->
	<link href="<?= base_url('assets/fonts/fontawesome5/css/all.css') ?>" rel="stylesheet">
	<!-- Scrollbar Custom CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-dark">
		<div class="mx-auto">
			<img src="<?= base_url('assets/img/INEE-logo-white.png') ?>" alt="" height="60px">
			<img src="<?= base_url('assets/img/LOGO-SEP-BCO.png') ?>" alt="" style="height: 60px;margin-left: 40px;">
		</div>
	</nav>
	<div class="container-login" style="background-image: url('<?= base_url('assets/img/bg-02.jpg') ?>');">
		<div class="row">
			<div class="col-sm-6 mb-20">
				<div class="wrap-login">
					<div class="login-form validate-form">
						<div class="card" >
							<div class="card-body">
								<center>

									<h3 class="card-title">Busca por Escuela test</h3>
									<div class="line"></div>
								</center>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-school"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Clave del CT" aria-label="Username" aria-describedby="basic-addon1" maxlength="10">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<label class="input-group-text"><i class="fas fa-sun"></i></label>
									</div>
									<select class="custom-select" id="inputGroupSelect01">
										<option selected>Turno</option>
										<option value="1">MATUTINO</option>
										<option value="2">VESPERTINO</option>
										<option value="3">NOCTURNO</option>
									</select>
								</div>

								<div class="text-center">
									<a class="btn btn-primary mb-20" data-toggle="collapse" href="#buscaAvanzada" role="button" aria-expanded="false" aria-controls="buscaAvanzada">
										Búsqueda avanzada
									</a>
									<div class="collapse" id="buscaAvanzada">
										<div class="card smcard card-body">
											<div class="form-group">
												<select class="form-control">
													<option>Estado</option>
													<option value="0">Todo México</option>
												</select>
											</div>
											<div class="form-group">
												<select class="form-control">
													<option>Municipio</option>
													<option value="0">TODOS</option>
												</select>
											</div>
											<div class="form-group">
												<select class="form-control">
													<option>Nivel</option>
													<option>PRIMARIA</option>
													<option>SECUNDARIA</option>
													<option>MEDIA SUPERIOR</option>
												</select>
											</div>
											<div class="form-group">
												<select class="form-control">
													<option value="0">TODOS</option>
													<option value="1">PUBLICO</option>
													<option value="2">PRIVADO</option>
													<option value="3">AUTONOMO</option>
												</select>
											</div>
											<div class="form-group">
												<input type="input" class="form-control" placeholder="Parte del nombre">
												<small id="emailHelp" class="form-text text-muted">* Campo opcional.</small>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-block btn-login center">Acceder</button>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="wrap-login">
					<div class="login-form validate-form">
						<div class="card" >
							<div class="card-body">
								<center>

									<h3 class="card-title">Busca por Estado</h3>
									<div class="line"></div>
								</center>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<label class="input-group-text"><i class="fas fa-map-marker-alt"></i></label>
									</div>
									<select class="custom-select">
										<option selected>Estado</option>
										<option value="0">Todo México</option>
									</select>
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<label class="input-group-text"><i class="fas fa-book"></i></label>
									</div>
									<select class="custom-select">
										<option selected>Nivel</option>
										<option>PRIMARIA</option>
										<option>SECUNDARIA</option>
										<option>MEDIA SUPERIOR</option>
									</select>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-primary btn-block btn-login center">Acceder</button>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div><!-- /container -->

	<script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/popper.min.js') ?>" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" crossorigin="anonymous"></script>

</body>
</html>
