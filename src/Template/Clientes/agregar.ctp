<?php
/*
    * Author: Newman Fajardo
    * Formulario para crear nuevos clientes
*/
?>
<section>
	<div class="col-xs-12">
		<div class="main-content main-content4">
			<div class="panel-body1">
				<h3 class='blank1'><?= __('Registrar Clientes') ?></h3>
				<?php
					echo $this->Form->create($cliente);
						echo"<div class='form-group'>".$this->Form->input('registro',['class'=>'form-control' , 'type' => 'text'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('razon_social',['class'=>'form-control' , 'type' => 'text'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('descripcion',['class'=>'form-control'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('pais',['options' => ['Venezuela' => 'Venezuela', 'Colombia' => 'Colombia'], 'class'=>'form-control'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('correo' , ['class'=>'form-control' , 'type' => 'text'])."</div>";		
						echo"<div class='form-group'>".$this->Form->input('img' , ['label' => 'Imagen','class'=>'form-control' , 'type' => 'text'])."</div>";		
						echo"<div class='form-group'>".$this->Form->button('Registrar')."</div>";		
					echo $this->Form->end();
				?>
			</div>
		</div>
	</div>
</section>

	