<h2>Empresas</h2>
<?php
	echo $this->Form->create($empresa,['noValidate']);
	echo $this->Form->input('nombre');
	echo $this->Form->input('descripcion');
	echo $this->Form->input('direccion');
	echo $this->Form->input('telefono1',['label'=>'Telefóno local:']);
	echo $this->Form->input('telefono2',['label'=>'Telefóno móvil:']);
	echo $this->Form->input('correo', ['label'=>'Correo electrónico:']);
	echo $this->Form->button('Actualizar');
	echo $this->Form->end();
?>