<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuários</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
			</div>
		</div>
	</div>

	

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Preço</th>
				
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user):	?>
						<tr>
							<td><?= $user['id']?></td>
							<td><?= $user['name']?></td>
							<td><?= $user['email']?></td>				
							
						</tr>
						<?php endforeach;?>
			</tbody>
		</table>
	</div>

	
</main>

</body>
</html>