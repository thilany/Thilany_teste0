<div class="page-header">
	<h1>Formulário de Cadastro <small>- Corridas</small></h1>
</div>

<div class="container">
	<?= $this->Form->create($corridas, ['url' => ['controller' => 'Corridas', 'action' => 'salvar']]); ?>
	
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<!-- Input do nome do motorista -->
			<label>Motorista</label>
			<div class="form-group">
				<?php			
					echo $this->Form->select(
						'id_motorista', 
						$motoristas,
						[
						 	'empty' => ' - ', 'id' => 'id_motorista', 'class' => 'corridas form-control'
						]
					); 
				?>
			</div>
			<div id="id_motoristaTexto"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-12">
			<!-- Input do nome do motorista -->
			<label>Passageiro</label>
			<div class="form-group">
				<?php			
					echo $this->Form->select(
						'id_passageiro', 
						$passageiros,
						[
						 	'empty' => ' - ', 'id' => 'id_passageiro', 'class' => 'corridas form-control'
						]
					); 
				?>
			</div>
			<div id="id_passageiroTexto"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-sm-12">
			<!-- Input do nome do motorista -->
			<div class="form-group">
				<?= $this->Form->input('valor_corrida', ['label' => 'Valor da Corrida', 'id' => 'vr_corrida', 'class' => 'corridas form-control']); ?>
			</div>
			<div id="vr_corridaTexto"></div>
		</div>
	</div>

	<?=  $this->Html->link('Cancelar Cadastro', ['controller' => 'Corridas', 'action' => 'cadastrados'], ['class' => 'btn btn-danger']);?>



	<?=$this->Form->button('Cadastrar', array('id' => 'btnEstagiarios', 'class' => 'btn btn-primary')); ?>
	<?=$this->Form->end();?>

</div>
<?= $this->Html->script('/webroot/js/validacoesCorridas.js'); ?>
<?= $this->Html->script('/webroot/js/validacoes.js'); ?>
<?= $this->Html->script('/webroot/js/mask.js'); ?>
