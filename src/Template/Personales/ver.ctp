<?php
/*
    * Author: Newman Fajardo
    * vista para ver los detalles de un personal
*/
?>
<section>
    <?= $this->element('admin_menu') ?>
    <?= $this->element('admin_head') ?>
    <div class="col-xs-12">
        <div class="main-content main-content4">
            <div class="panel-body1">
                <h3 class="blank1"><?= __('Detalles de personal') ?></h3>
                <div class="row">
                    <div class="col-xs-12 col-md-3 text-right">
                        <h4>Nombre:</h4>
                    </div>
                    <div class="col-xs-12 col-md-9 text-justify">
                        <?= h($personale->nombre) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 text-right">
                        <h4>Apellido:</h4>
                    </div>
                    <div class="col-xs-12 col-md-9 text-justify">
                        <?= h($personale->apellido) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 text-right">
                        <h4>Correo:</h4>
                    </div>
                    <div class="col-xs-12 col-md-9 text-justify">
                        <?= h($personale->correo) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 text-right">
                        <h4>Cargo:</h4>
                    </div>
                    <div class="col-xs-12 col-md-9 text-justify">
                        <?= h($personale->cargo) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 text-right">
                        <h4>Departamento:</h4>
                    </div>
                    <div class="col-xs-12 col-md-9 text-justify">
                        <?= h($personale->departamento) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <?= $this->Html->link('Atras' , ['action' => 'index'] , ['class' => 'btn btn-info']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
