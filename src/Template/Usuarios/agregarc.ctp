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
                <h3 class='blank1'><?= __('Registrar Personal') ?></h3>

            </div>
        </div>
    </div>
</section>

<!-- <div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Add Usuario') ?></legend>
        <?php
            echo $this->Form->control('clave');
            echo $this->Form->control('estatus');
            echo $this->Form->control('posicion');
            echo $this->Form->control('intentos');
            echo $this->Form->control('clientes._ids', ['options' => $clientes]);
            echo $this->Form->control('personales._ids', ['options' => $personales]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
