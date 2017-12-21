<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bitacoras'), ['controller' => 'Bitacoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bitacora'), ['controller' => 'Bitacoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recuperaciones'), ['controller' => 'Recuperaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recuperacione'), ['controller' => 'Recuperaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personales'), ['controller' => 'Personales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personale'), ['controller' => 'Personales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Edit Usuario') ?></legend>
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
</div>
