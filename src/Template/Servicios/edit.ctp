<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servicio $servicio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servicio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servicio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Servicios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servicios form large-9 medium-8 columns content">
    <?= $this->Form->create($servicio) ?>
    <fieldset>
        <legend><?= __('Edit Servicio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('img');
            echo $this->Form->control('box');
            echo $this->Form->control('posicion');
            echo $this->Form->control('activador');
            echo $this->Form->control('nivel');
            echo $this->Form->control('estatus');
            echo $this->Form->control('empresa_id', ['options' => $empresas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
