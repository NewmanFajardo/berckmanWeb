<?php
/**
    * Author: Newman Fajardo
    * Archivo para mostrar los personales registrados
*/
?>
<section>
    <?= $this->element('admin_menu') ?>
    <?= $this->element('admin_head') ?>
    <div class="col-xs-12">
        <div class="main-content main-content4">
            <div class="panel-body1">
                <h3 class="blank1"><?= __('Registros de Personales') ?></h3>
                <table class="table table-striped" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">Correo</th>
                                <th scope="col" class="actions"><?= __('Acciones') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($personales as $personale): ?>
                                <tr>
                                    <!-- <td><?= $this->Number->format($personale->id) ?></td> -->
                                    <td><?= h($personale->nombre) ?></td>
                                    <td><?= h($personale->apellido) ?></td>
                                    <td><?= h($personale->cargo) ?></td>
                                    <td><?= h($personale->correo) ?></td>
                                    <!-- <td><?= $personale->has('empresa') ? $this->Html->link($personale->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $personale->empresa->id]) : '' ?></td> -->
                                    <td class="actions">
                                        <?= $this->Html->link(__('Ver'), ['action' => 'ver', $personale->id] , ['class' => 'btn btn-info' , 'title' => 'Ver detalles']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'modificar', $personale->id] , ['class' => 'btn btn-primary' , 'title' => 'Modificar']) ?>
                                        <?= $this->Form->postLink(__('Elimiar'), ['action' => 'eliminar', $personale->id], ['confirm' => __('Desea eliminar el personal '.$personale->nombre.' ?', $personale->id) , 'class' => 'btn btn-danger' , 'title' => 'Eliminar']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</section>