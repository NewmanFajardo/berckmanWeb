<?php
/*
    * Author: Newman Fajardo
    * Formulario para crear nuevos usuarios
*/
?>
<section>
    <?= $this->element('admin_menu') ?>
    <?= $this->element('admin_head') ?>
    <div class="col-xs-12">
        <div class="main-content main-content4">
            <div class="panel-body1">
                <h3 class='blank1'><?= __('Registrar Usuario') ?></h3>
                    <?= $this->Form->create($usuario) ?>
                <div class='form-group'>
                    <?= $this->Form->input('clave',['class'=>'form-control' , 'type' => 'text']) ?>
                </div>
                <div class='form-group'>
                    <?= $this->Form->input('nivel',['class'=>'form-control' , 'type' => 'text']) ?>
                </div>
                <div class='form-group'>
                    <?= $this->Form->input('personales_nombre', ['options' => $personales,'class'=>'form-control' ]) ?>
                </div>
                <div class='form-group'>
                    <?= $this->Form->button(__('Submit')) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

<!-- <div class="usuarios form large-9 medium-8 columns content">
    <fieldset>
        <legend><?= __('Add Usuario') ?></legend>
        <?php
            echo $this->Form->control('estatus');
            echo $this->Form->control('intentos');
            echo $this->Form->control('clientes._ids', ['options' => $clientes]);
        ?>
    </fieldset>
</div> -->
