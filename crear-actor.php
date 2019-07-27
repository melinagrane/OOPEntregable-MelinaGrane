<?php
	require_once 'autoload.php';
  $movies = DB::getAllMovies();

  if ($_POST) {
    $actorToSave = new Actor($_POST['first_name'], $_POST['last_name'], $_POST['rating']);


    $actorToSave-> setFavoriteMovieId($_POST['favorite_movie_id']);

    $saved = DB::saveActor($actorToSave);
  }
	$pageTitle = 'Crear actor';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Crear actor</h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control" placeholder="Ej: Cameron" name="first_name">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Apellido:</label>
									<input type="text" class="form-control" placeholder="Ej: Díaz" name="last_name">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Ranking:</label>
									<input type="text" class="form-control" placeholder="Ej: 7.5" name="rating">
								</div>
							</div>
              <div class="col-6">
                <div class="form-group">
                  <label>Película:</label>
                  <select class="form-control" name="favorite_movie_id">
                    <option value="">Elegí una película favorita</option>
                    <?php foreach ($movies as $movie): ?>
                      <option value="<?php echo $movie->getMovieId() ?>"><?php echo $movie->getTitle() ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
							<div class="col-12 text-center">
									<button type="submit" class="btn" style="background-color:  #A5FF80">Guardar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($saved)): ?>
				<div
					class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $saved ? '¡Actor guardado con éxito!' : '¡No se pudo guardar el actor' ?>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>
