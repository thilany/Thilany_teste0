<div class="page-header">
	<h1>Passageiros Cadastrados </h1>
</div>

<div class="row">
	<div class="col-md-10">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Data de Nascimento</th>
				<th>CPF</th>
				<th>Sexo</th>
			</tr>
			<?php foreach ($passageiros as $passageiro): ?>
				<tr>
					<td><?= $passageiro['id_passageiro'] ?></td>
					<td><?= $passageiro['nome_p'] ?></td>
					<td>
						<?php
							$data = new DateTime($passageiro['data_nsc_p']);
							echo $data->format('d/m/y');
						?>
					</td>
					<td><?= $passageiro['cpf_p'] ?></td>
					<td><?= $passageiro['sexo'] ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
