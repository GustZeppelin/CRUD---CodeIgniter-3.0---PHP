<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Jogos</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>index.php/games/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Jogo</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Preço</th>
					<th>Descrição</th>
					<th>Data de Lançamento</th>
					<th>Opções</th>
				</tr>
			</thead>
			<tbody>
            <?php foreach($games as $game):	?> 

				<?php

        			$data_formatada = explode("-", $game["release_date"]);
        			array_reverse($data_formatada);

					?>

						<tr>
							<td><?= $game['id']?></td>
							<td><?= $game['name']?></td>
							<td><?= "R$" .  $game['price']?></td>
							<td><?= $game['developer']?></td>
							<td><?= $data_formatada[2], "/", $data_formatada[1], "/", $data_formatada[0]?></td>
							<td>
								<a href="<?= base_url() ?>index.php/games/edit/<?= $game['id'] ?> " class="btn-sm btn-warning">Edit</a>
								<a href="<?= base_url() ?>index.php/games/delete/<?= $game['id'] ?> " class="btn-sm btn-danger">Delete</a>
							</td>
							
						</tr>
						<?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>