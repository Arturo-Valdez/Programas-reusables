<!DOCTYPE HTML>
<html>
<head>
	<title>Envio de informaci&oacute;n</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
	<style>
	#inicioo{
		font-size: 70px;
	}
	</style>
</head>
<body>

	<section class="hero is-primary">
	    <div class="hero-body">
	        <div class="container">
	          <h1 class="title">Universidad de Colima</h1>
	          <h2 class="subtitle">Facultad de Telemática</h2>
        	</div>
      	</div>
    </section>


	<div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-2">Bienvenidos al sistema</h1>
		<h2>Nombre: <?php echo $_POST["nombre"];?> </h2>
		<h2>Correo: <?php echo $_POST["email"];?> </h2>
			</div>
		</div>
	</div>

	
	


	<!-- pié de página -->
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>&copy;Desarrollado</strong> por <a href="#">Santiago Arturo Valdez Guardado</a>. 
        </p>
      </div>
    </footer>
<body>
</html>

