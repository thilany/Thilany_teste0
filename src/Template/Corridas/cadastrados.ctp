<div class="page-header">
	<h1>Corridas Cadastrados </h1>
</div>

<div class="row">
	<div class="col-md-10">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Motorista</th>
				<th>Passageiro</th>
				<th>Valor</th>
			</tr>
			<?php foreach ($corridas as $corrida): ?>
				<tr>
					<td><?= $corrida['id'] ?></td>
					<td><?= $corrida['motorista'] ?></td>
					<td><?= $corrida['passageiro'] ?></td>
					<td>R$ <?= $corrida['valor'] ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
