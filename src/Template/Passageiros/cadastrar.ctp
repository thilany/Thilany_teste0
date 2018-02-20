<div class="page-header">
	<h1>Formulário de Cadastro <small>- Passageiros</small></h1>
</div>

<div class="container">
	<?= $this->Form->create($passageiros, ['url' => ['controller' => 'Passageiros', 'action' => 'salvar']]); ?>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<!-- Input do nome do motorista -->
			<div class="form-group">
				<?= $this->Form->input('nome_p', ['label' => 'Nome', 'id' => 'nome_passageiro', 'class' => 'passageiros form-control']); ?>
			</div>
			<div id="nome_passageiroTexto"></div>
		</div>
	</div>

	<div class="row">
		<!-- Input do data de nascimento do passageiro -->
		<div class="col-md-4 col-sm-12">
			<label>Data de Nascimento</label>
			<div class="form-group">
				<input type='text' class="passageiros form-control" id='data_passageiro' name='data_nsc_p'>
			</div>
			<div id="data_passageiroTexto"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-12">
			<!-- Input do nome do motorista -->
			<div class="form-group">
				<?= $this->Form->input('cpf_p', ['label' => 'CPF', 'id' => 'cpf_passageiro', 'class' => 'passageiros form-control']); ?>
			</div>
			<div id="cpf_passageiroTexto"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2 col-sm-12">
			<!-- Input do sexo do passageiro -->
			<label>Sexo</label>
			<div class="form-group">
				<?php
					$options = [
					    ['text' => 'M', 'value' => 'M'],
					    ['text' => 'F', 'value' => 'F']
					];
					echo $this->Form->select(
						'sexo', 
						$options,
						[
						 	'empty' => ' - ', 'id' => 'sexo_passageiro', 'class' => 'passageiros form-control'
						]
					); 
				?>
			</div>
			<div id="sexo_passageiroTexto"></div>
		</div>
	</div>

	<?=  $this->Html->link('Cancelar Cadastro', ['controller' => 'Passageiros', 'action' => 'cadastrados'], ['class' => 'btn btn-danger']);?>



	<?=$this->Form->button('Cadastrar', array('id' => 'btnPassageiros', 'class' => 'btn btn-primary')); ?>
	<?=$this->Form->end();?>
</div>
<?= $this->Html->script('/webroot/js/validacoesPassageiros.js'); ?>
<?= $this->Html->script('/webroot/js/validacoes.js'); ?>
<?= $this->Html->script('/webroot/js/mask.js'); ?>

