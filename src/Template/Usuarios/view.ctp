<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bitacoras'), ['controller' => 'Bitacoras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bitacora'), ['controller' => 'Bitacoras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recuperaciones'), ['controller' => 'Recuperaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recuperacione'), ['controller' => 'Recuperaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personales'), ['controller' => 'Personales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personale'), ['controller' => 'Personales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Clave') ?></th>
            <td><?= h($usuario->clave) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatus') ?></th>
            <td><?= h($usuario->estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Posicion') ?></th>
            <td><?= $this->Number->format($usuario->posicion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Intentos') ?></th>
            <td><?= $this->Number->format($usuario->intentos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Clientes') ?></h4>
        <?php if (!empty($usuario->clientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Registro') ?></th>
                <th scope="col"><?= __('Activador') ?></th>
                <th scope="col"><?= __('Posicion') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Estatus') ?></th>
                <th scope="col"><?= __('Img') ?></th>
                <th scope="col"><?= __('Razon Social') ?></th>
                <th scope="col"><?= __('Pais') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->clientes as $clientes): ?>
            <tr>
                <td><?= h($clientes->id) ?></td>
                <td><?= h($clientes->registro) ?></td>
                <td><?= h($clientes->activador) ?></td>
                <td><?= h($clientes->posicion) ?></td>
                <td><?= h($clientes->descripcion) ?></td>
                <td><?= h($clientes->estatus) ?></td>
                <td><?= h($clientes->img) ?></td>
                <td><?= h($clientes->razon_social) ?></td>
                <td><?= h($clientes->pais) ?></td>
                <td><?= h($clientes->correo) ?></td>
                <td><?= h($clientes->created) ?></td>
                <td><?= h($clientes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Personales') ?></h4>
        <?php if (!empty($usuario->personales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apellido') ?></th>
                <th scope="col"><?= __('Cargo') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Departamento') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->personales as $personales): ?>
            <tr>
                <td><?= h($personales->id) ?></td>
                <td><?= h($personales->nombre) ?></td>
                <td><?= h($personales->apellido) ?></td>
                <td><?= h($personales->cargo) ?></td>
                <td><?= h($personales->correo) ?></td>
                <td><?= h($personales->departamento) ?></td>
                <td><?= h($personales->created) ?></td>
                <td><?= h($personales->modified) ?></td>
                <td><?= h($personales->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Personales', 'action' => 'view', $personales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Personales', 'action' => 'edit', $personales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Personales', 'action' => 'delete', $personales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bitacoras') ?></h4>
        <?php if (!empty($usuario->bitacoras)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Accion') ?></th>
                <th scope="col"><?= __('Modulo') ?></th>
                <th scope="col"><?= __('Relacion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->bitacoras as $bitacoras): ?>
            <tr>
                <td><?= h($bitacoras->id) ?></td>
                <td><?= h($bitacoras->accion) ?></td>
                <td><?= h($bitacoras->modulo) ?></td>
                <td><?= h($bitacoras->relacion) ?></td>
                <td><?= h($bitacoras->created) ?></td>
                <td><?= h($bitacoras->modified) ?></td>
                <td><?= h($bitacoras->usuario_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bitacoras', 'action' => 'view', $bitacoras->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bitacoras', 'action' => 'edit', $bitacoras->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bitacoras', 'action' => 'delete', $bitacoras->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bitacoras->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Recuperaciones') ?></h4>
        <?php if (!empty($usuario->recuperaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pregunta') ?></th>
                <th scope="col"><?= __('Respuesta') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->recuperaciones as $recuperaciones): ?>
            <tr>
                <td><?= h($recuperaciones->id) ?></td>
                <td><?= h($recuperaciones->pregunta) ?></td>
                <td><?= h($recuperaciones->respuesta) ?></td>
                <td><?= h($recuperaciones->created) ?></td>
                <td><?= h($recuperaciones->modified) ?></td>
                <td><?= h($recuperaciones->usuario_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Recuperaciones', 'action' => 'view', $recuperaciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Recuperaciones', 'action' => 'edit', $recuperaciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recuperaciones', 'action' => 'delete', $recuperaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recuperaciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
