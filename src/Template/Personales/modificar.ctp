<?php
/*
    * Author: Newman Fajardo
    * Archivo para modificar los datos de los personales
*/
?>
<section>
    <?= $this->element('admin_menu') ?>
    <?= $this->element('admin_head') ?>
    <div class="col-xs-12">
        <div class="main-content main-content4">
            <div class="panel-body1">
                <h3 class='blank1'><?= __('Modificar Personal') ?></h3>
                <?php
                    echo $this->Form->create($personale)."
                    <div class='form-group'>
                        ".$this->Form->input('nombre',['class'=>'form-control' , 'type' => 'text'])."
                    </div>
                    <div class='form-group'>
                        ".$this->Form->input('apellido',['class'=>'form-control' , 'type' => 'text'])."
                    </div>
                    <div class='form-group'>
                        ".$this->Form->input('cargo',['class'=>'form-control'])."
                    </div>
                    <div class='form-group'>
                        ".$this->Form->input('correo' , ['class'=>'form-control' , 'type' => 'text'])."
                    </div>
                    <div class='form-group'>
                        ".$this->Form->input('departamento' , ['class'=>'form-control' , 'type' => 'text'])."
                    </div>
                    <div class='row'>
                        <div class='col-xs-6 text-right'>".
                            $this->Form->button('Registrar',['class' => 'btn btn-success'])
                        ."</div>
                        <div class='col-xs-6'>".
                            $this->Html->link('Cancelar' , ['action' => 'index'] , ['class' => 'btn btn-danger'])."
                        </div>
                    </div>";       
                    echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</section>
