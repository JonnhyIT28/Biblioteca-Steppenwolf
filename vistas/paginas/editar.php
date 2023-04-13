<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];
	require_once "controladores/formularios.controlador.php";
	$libros = ControladorFormularios::ctrSeleccionarLibros($item, $valor);

}

?>


<div>

	<form method="post">

				<input type="text" value="<?php echo $libros["nombre"]; ?>" placeholder="Escriba el nombre del libro" id="nombre" name="actualizarLibro">
				<input type="text" value="<?php echo $libros["autor"]; ?>" placeholder="Escriba el autor" id="autor" name="actualizarAutor">			
				<input type="text" value="<?php echo $libros["anio"]; ?>" placeholder="Escriba el año" id="anio" name="actualizarAnio">
				<input type="hidden" name="anioActual" value="<?php echo $libros["anio"]; ?>">
				<input type="hidden" name="idLibro" value="<?php echo $libros["id"]; ?>">


		<?php
		require_once "controladores/formularios.controlador.php";
		$actualizar = ControladorFormularios::ctrActualizarLibro();

		if($actualizar == "ok"){

			echo '<script>

			if ( window.history.replaceState ) {

				window.history.replaceState( null, null, window.location.href );

			}

			</script>';

			echo '<div class="alerta alerta-actulizar">El usuario ha sido actualizado</div>


			<script>

				setTimeout(function(){
				
					window.location = "index.php?pagina=biblioteca";

				},3000);

			</script>

			';

		}

		?>
		
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>

</div>