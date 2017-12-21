<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio $servicio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Servicio'), ['action' => 'edit', $servicio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Servicio'), ['action' => 'delete', $servicio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Servicios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servicio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="servicios view large-9 medium-8 columns content">
    <h3><?= h($servicio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Box') ?></th>
            <td><?= h($servicio->box) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatus') ?></th>
            <td><?= h($servicio->estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $servicio->has('empresa') ? $this->Html->link($servicio->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $servicio->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($servicio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Posicion') ?></th>
            <td><?= $this->Number->format($servicio->posicion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activador') ?></th>
            <td><?= $this->Number->format($servicio->activador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= $this->Number->format($servicio->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($servicio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($servicio->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nombre') ?></h4>
        <?= $this->Text->autoParagraph(h($servicio->nombre)); ?>
    </div>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($servicio->descripcion)); ?>
    </div>
    <div class="row">
        <h4><?= __('Img') ?></h4>
        <?= $this->Text->autoParagraph(h($servicio->img)); ?>
    </div>
</div>
