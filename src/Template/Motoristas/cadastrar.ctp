<div class="page-header">
	<h1>Formulário de Cadastro <small>- Motoristas</small></h1>
</div>

<div class="container">
	<?= $this->Form->create($motoristas, ['url' => ['controller' => 'Motoristas', 'action' => 'salvar']]); ?>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<!-- Input do nome do motorista -->
			<div class="form-group">
				<?= $this->Form->input('nome_m', ['label' => 'Nome', 'id' => 'nome_motorista', 'class' => 'motoristas form-control']); ?>
			</div>
			<div id="nome_motoristaTexto"></div>
		</div>
	</div>

	<div class="row">
		<!-- Input do data de nascimento do motorista -->
		<div class="col-md-4 col-sm-12">
			<label>Data de Nascimento</label>
			<div class="form-group">
				<input type='text' class="motoristas form-control" id='data_motorista' name='data_nsc_m'>
			</div>
			<div id="data_motoristaTexto"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-12">
			<!-- Input do nome do motorista -->
			<div class="form-group">
				<?= $this->Form->input('cpf_m', ['label' => 'CPF', 'id' => 'cpf_motorista', 'class' => 'motoristas form-control']); ?>
			</div>
			<div id="cpf_motoristaTexto"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-12">
			<!-- Input do nome do motorista -->
			<div class="form-group">
				<?= $this->Form->input('mod_carro', ['label' => 'Modelo do Carro', 'id' => 'carro_motorista', 'class' => 'motoristas form-control']); ?>
			</div>
			<div id="carro_motoristaTexto"></div>
		</div>
	</div>

	<?=  $this->Html->link('Cancelar Cadastro', ['controller' => 'Motoristas', 'action' => 'index'], ['class' => 'btn btn-danger']);?>



	<?=$this->Form->button('Cadastrar', array('id' => 'btnMotorista', 'class' => 'btn btn-primary')); ?>
	<?=$this->Form->end();?>
</div>
<?= $this->Html->script('/webroot/js/validacoesMotoristas.js'); ?>
<?= $this->Html->script('/webroot/js/validacoes.js'); ?>
<?= $this->Html->script('/webroot/js/mask.js'); ?>

