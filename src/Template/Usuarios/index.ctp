<?php
/**
    * Author: Newman Fajardo
    * Archivo para mostrar los usuarios registrados
*/
?>
<section>
    <?= $this->element('admin_menu') ?>
    <?= $this->element('admin_head') ?>
    <div class="col-xs-12">
        <div class="main-content main-content4">
            <div class="panel-body1">
                <h3 class="blank1"><?= __('Registros de Usuarios') ?></h3>
                <div>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#clientes" aria-controls="clientes" role="tab" data-toggle="tab">Clientes</a></li>
                    <li role="presentation"><a href="#personales" aria-controls="personales" role="tab" data-toggle="tab">Personal</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="clientes">
                        <table class="table table-striped" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Registro</th>
                                    <th scope="col">Razon social</th>
                                    <th scope="col">Pais</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($clientes as $cliente): ?>
                                <tr>
                                    <td><?= h($cliente->registro) ?></td>
                                    <td><?= h($cliente->razon_social) ?></td>
                                    <td><?= h($cliente->pais) ?></td>
                                    <td><?= h($cliente->estatus) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Ver'), ['action' => 'vercliente', $cliente->id] , [ 'title' => 'Ver detalles del cliente '.$cliente->razon_social , 'class' => 'btn btn-info' ]) ?>
                                        <?php 
                                            if($cliente->estatus=="Pendiente"){
                                                echo $this->Html->link(__('Activar'), ['action' => 'activarcliente', $cliente->id] , [ 'title' => 'Activar cliente '.$cliente->razon_social , 'class' => 'btn btn-success' ]);  
                                            }
                                        ?>
                                        <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], [ 'title' => 'Eliminacion del cliente '.$cliente->razon_social , 'class' => 'btn btn-danger' , 'confirm' => __('¿Desea eliminar el cliente '.$cliente->razon_social.'?', $cliente->id)]) ?> -->
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>




                    <div role="tabpanel" class="tab-pane" id="personales">
                        <div class="row">
                            <?= $this->Html->link('Agregar Personal',['action' => 'agregarp'],['class' => 'btn btn-success pull-right']) ?>
                        </div>
                        <div class="row">
                            <table class="table table-striped" cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre y Apellido</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Nivel</th>
                                        <th scope="col">Estatus</th>
                                        <th scope="col" class="actions"><?= __('Actiones') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($personales as $personal): ?>
                                    <tr>
                                        <td><?= h($personal->nombre) ?> <?= h($personal->apellido) ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
