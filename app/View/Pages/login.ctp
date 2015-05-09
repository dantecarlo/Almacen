<html lang="es" ng-app="app">

	<head>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
		<link rel="stylesheet" href="css/angular-material.css">
		<link rel="stylesheet" href="modules/login/app/main.css">
	</head>

	<body layout="column" style="background: #eee;">

		<div flex="25"></div>
		<div flex="33" layout="row">
			<div flex="33"></div>
			<div flex="33">
				<md-card style="background: #fff; ">
					<md-card-content layout="column">

						
						<md-subheader class="md-primary">Inicio sesión</md-subheader>
						<md-input-container>
							<label>Email</label>
							<input ng-model="email">
						</md-input-container>
						<md-input-container>
							<label>Contraseña</label>
							<input type="password" ng-model="sdfs">
						</md-input-container>
						<md-button class="md-raised md-primary">Ingresar</md-button>

					</md-card-content>
				</md-card>
			</div>
		</div>

		<script src="js/angular.js"></script>
		<script src="js/angular-animate.js"></script>
		<script src="js/angular-aria.js"></script>
		<script src="js/angular-material.js"></script>
		<script src="modules/login/app/main.js"></script>
		<script src="modules/login/app/main.config.js"></script>
	</body>

</html>