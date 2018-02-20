<div class="page-header">
	<h1>Motoristas Cadastrados </h1>
</div>

<div class="row">
	<div class="col-md-10">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Data de nascimento</th>
				<th>CPF</th>
				<th>Modelo do carro</th>
				<th>Status</th>
				<th>Mudar Status</th>
			</tr>
			<?php foreach ($motoristas as $motorista): ?>
				<tr>
					<td><?= $motorista['id_motorista'] ?></td>
					<td><?= $motorista['nome_m'] ?></td>
					<td>
						<?php
							$data = new DateTime($motorista['data_nsc_m']);
							echo $data->format('d/m/y');
						?>
					</td>
					<td><?= $motorista['cpf_m'] ?></td>
					<td><?= $motorista['mod_carro'] ?></td>
					<td>
						<?php 
						if($motorista['status'] == '1') echo "Ativo"; 
						else echo "Inativo";
						?>
					</td>
					<td><?= $this->Form->postLink('Mudar Status',
							['action' => 'mudarstatus', $motorista['id_motorista'],$motorista['status']],
							['confirm' => 'Você tem certeza?']); ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
