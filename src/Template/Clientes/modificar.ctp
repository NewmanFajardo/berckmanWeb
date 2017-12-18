<!--
	* Author: Newman Fajardo
	* Formulario para modificar un cliente
-->
<section>
	<div class="col-xs-12">
		<div class="main-content main-content4">
			<div class="panel-body1">
				<h3 class='blank1'><?= __('Modificar Clientes') ?></h3>
				<?php
					echo $this->Form->create($cliente);
						echo"<div class='form-group'>".$this->Form->input('registro',['class'=>'form-control' , 'type' => 'text'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('razon_social',['class'=>'form-control' , 'type' => 'text'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('descripcion',['class'=>'form-control'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('pais',['options' => ['Venezuela' => 'Venezuela', 'Colombia' => 'Colombia'], 'class'=>'form-control'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('correo' , ['class'=>'form-control' , 'type' => 'text'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('img' , ['label' => 'Imagen','class'=>'form-control' , 'type' => 'text'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('activador' , ['type' => 'hidden' ])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('posicion' , ['type' => 'hidden' ] )."</div>";		
						echo"<div class='form-group'>".$this->Form->input('estatus' , ['type' => 'hidden' ] )."</div>";		
						echo"<div class='row'><div class='col-xs-6 text-right'>".$this->Form->button('Modificar',['class' => 'btn btn-success padd'])."</div><div class='col-xs-6'>".$this->Html->link('Cancelar' , ['action' => 'index'],['class' => 'btn btn-danger '])."</div></div>";		
					echo $this->Form->end();
				?>
			</div>
		</div>
	</div>
</section>

	