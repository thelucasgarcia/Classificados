<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Anuncios

		<button class="btn btn-sm btn-success pull-right " data-toggle="modal" data-target="#myModal">Cadastrar novo</button>
        </h1>
    </div>
    <!-- /.col-lg-12 -->

    <?php include 'create-modal.php'; ?>
</div>

<!-- /.row -->
	<div class="row">
	    <div class="col-lg-12">

	    	<table class="table table-bordered table-responsive table-hover">
				<thead>
					<th>id</th>
					<th>titulo</th>
					<th>categoria</th>
					<th>usuario</th>
					<th>valor</th>
					<th>estado</th>
				</thead>

				<tbody>
					<tr>
						<?php foreach ($anuncios as $anuncio): ?>
							<tr>
								<td><?php echo $anuncio->id ?></td>
								<td><?php echo $anuncio->titulo ?></td>
								<td><?php echo $anuncio->categoria ?></td>
								<td><?php echo $anuncio->usuario ?></td>
								<td>R$ <?php echo $anuncio->valor ?></td>
								<td><?php echo $anuncio->estado ?></td>
							</tr>
						<?php endforeach ?>
					</tr>
					
				</tbody>
			</table>
	    </div>
	    <!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->

	