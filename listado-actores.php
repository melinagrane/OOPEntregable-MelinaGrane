<?php
	require_once 'autoload.php';

	$actors = DB::getAllActors();

	$pageTitle = 'Listado de actores';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<table class="table table-borderless" style="background-color: #FDFDD9">
						<thead style="background-color:  #F914A5">
			    			<tr>
								<th scope="col">Id</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Rating</th>
								<th scope="col">Película favorita</th>
							  </tr>
			  			</thead>
			  			<tbody>
							<?php foreach ($actors as $actor): ?>
								<tr>
									<th scope="row"><?php echo $actor->getActorId(); ?></th>
									<td><?php echo $actor->getFirstName(); ?></td>
									<td><?php echo $actor->getLastName(); ?></td>
									<td><?php echo $actor->getRating(); ?></td>
									<td><?php echo $actor->getMovieTitle(); ?></td>
								</tr>
							<?php endforeach; ?>
			  			</tbody>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>
