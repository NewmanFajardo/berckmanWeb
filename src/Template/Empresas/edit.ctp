<!--Author: Joel Valencia
Archivo: Formulario de edición de empresas-->

<section>
	<?= $this->element('admin_menu') ?>
	<?= $this->element('admin_head') ?>
	<div id="col-xs-12">
		<div class="main-content main-content4">
			<h3 class="blank1">Empresas</h3>
			<?=  $this->Form->create($empresa,['noValidate']); ?>
				<div class="form-group">
				   <?= $this->Form->input('nombre',['class'=>'form-control','type'=>'text']); ?>
				</div>
				<div class="form-group">
				   <?= $this->Form->input('direccion',['class'=>'form-control']); ?>
				</div>
				<div class="form-group">
				   <?= $this->Form->input('telefono1',['label'=>'Telefóno móvil:', 'class'=>'form-control']); ?>
				</div>
				<div cl
				<div class="form-group">
				   <?= $this->Form->input('telefono2',['label'=>'Telefóno móvil:', 'class'=>'form-control']); ?>
				</div>
				<div class="form-group">
				   <?=  $this->Form->input('correo', ['label'=>'Correo electrónico:', 'class'=>'form-control']); ?>
				</div>

				<?= $this->Form->button('Actualizar', ['class'=>'btn btn-success pull-right']); ?>
				<?= $this->Form->end(); ?>
		</div>
	</div>
</section>
