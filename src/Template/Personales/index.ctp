<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personale[]|\Cake\Collection\CollectionInterface $personales
 */
?>
<section>
    <?= $this->element('admin_menu') ?>
    <?= $this->element('admin_head') ?>
    <div class="col-xs-12">
        <div class="main-content main-content4">
            <div class="panel-body1">
                <h3 class="blank1"><?= __('Personales') ?></h3>
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
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $personale->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $personale->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $personale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personale->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</section>