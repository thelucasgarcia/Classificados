<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Categorias

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
					<th>categoria</th>
					<th>icon</th>
				</thead>

				<tbody>
					<tr>
						<?php foreach ($categorias as $categoria): ?>
							<tr>
								<td><?php echo $categoria->id ?></td>
								<td><?php echo $categoria->nome ?></td>
								<td><img src="<?php $this->asset('storage/categorias/'.$categoria->icon) ?>" class="img-responsive" width="100px"></td>
							</tr>
						<?php endforeach ?>
					</tr>
					
				</tbody>
			</table>
	    </div>
	    <!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->

	