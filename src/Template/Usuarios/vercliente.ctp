<?php
/*
    * Author: Newman Fajardo
    * vista para ver los detalles de un cliente
*/
?>
<section>
	<?= $this->element('admin_menu') ?>
	<?= $this->element('admin_head') ?>
	<div class="col-xs-12">
		<div class="main-content main-content4">
			<div class="panel-body1">
			    <h3 class="blank1"><?= __('Detalles de Cliente') ?></h3>
			    <div class="row">
				    <div class="col-xs-12 col-md-3 text-right">
				    	<h4>Registro:</h4>
				    </div>
				    <div class="col-xs-12 col-md-9 text-justify">
				    	<?= h($cliente->registro) ?>
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-12 col-md-3 text-right">
				    	<h4>Razon social:</h4>
				    </div>
				    <div class="col-xs-12 col-md-9 text-justify">
				    	<?= h($cliente->razon_social) ?>
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-12 col-md-3 text-right">
				    	<h4>Descripci&oacute;n:</h4>
				    </div>
				    <div class="col-xs-12 col-md-9 text-justify">
				    	<?= h($cliente->descripcion) ?>
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-12 col-md-3 text-right">
				    	<h4>Pais:</h4>
				    </div>
				    <div class="col-xs-12 col-md-9 text-justify">
				    	<?= h($cliente->pais) ?>
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-12 col-md-3 text-right">
				    	<h4>Correo:</h4>
				    </div>
				    <div class="col-xs-12 col-md-9 text-justify">
				    	<?= h($cliente->correo) ?>
				    </div>
			    </div>
			    <div class="row">
				    <div class="col-xs-12 col-md-3 text-right">
				    	<h4>Estatus:</h4>
				    </div>
				    <div class="col-xs-12 col-md-9 text-justify">
				    	<?= h($cliente->estatus) ?>
				    </div>
			    </div>
			    <?php 
			    	if($cliente->estatus!="Pendiente"){ ?>
					    <h3 class="blank1"><?= __('Detalles de Usuario') ?></h3>
					    <div class="row">
						    <div class="col-xs-12 col-md-3 text-right">
						    	<h4>Usuario:</h4>
						    </div>
						    <div class="col-xs-12 col-md-9 text-justify">
						    	<?= h($cliente->correo) ?>
						    </div>
					    </div>
					    <div class="row">
						    <div class="col-xs-12 col-md-3 text-right">
						    	<h4>Clave:</h4>
						    </div>
						    <div class="col-xs-12 col-md-9 text-justify">
						    	<?= h($cliente->usuarios[0]->clave) ?>
						    </div>
					    </div>
					    <div class="row">
						    <div class="col-xs-12 col-md-3 text-right">
						    	<h4>Nivel:</h4>
						    </div>
						    <div class="col-xs-12 col-md-9 text-justify">
						    	<?= h($cliente->usuarios[0]->nivel) ?>
						    </div>
					    </div>
			    	<?php }
			    ?>
			    <div class="row">
				    <div class="col-xs-12">
						<?= $this->Html->link('Atras' , ['action' => 'index'] , ['class' => 'btn btn-info']) ?>
					</div>
			    </div>
			</div>
		</div>
	</div>
</section>

