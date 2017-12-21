<?php
/*
    * Author: Newman Fajardo
    * Formulario para crear nuevos personales
*/
?>
<!-- <div class="personales form large-9 medium-8 columns content">
    <?= $this->Form->create($personale) ?>
    <fieldset>
        <legend><?= __('Agregar Personal') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('cargo');
            echo $this->Form->control('correo');
            echo $this->Form->control('departamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
<section>
    <?= $this->element('admin_menu') ?>
    <?= $this->element('admin_head') ?>
    <div class="col-xs-12">
        <div class="main-content main-content4">
            <div class="panel-body1">
                <h3 class='blank1'><?= __('Registrar Personal') ?></h3>
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
