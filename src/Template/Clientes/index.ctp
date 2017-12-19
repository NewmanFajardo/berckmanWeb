<?php
/*
    * Author: Newman Fajardo
    * Vista de clientes
*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Clientes | BERCKMAN c.a.</title>
		<?= $this->Html->charset() ?>
	    <?= $this->element('admin_link') ?>
	</head> 
	 <body class="sticky-header left-side-collapsed">
	    <section>
	    	<?= $this->element('admin_menu') ?>
	    	<?= $this->element('admin_head') ?>
			<div class="col-xs-12 " style='margin-top:20px !important;'>
				<div class="panel-body1">
				    <h3 class="blank1"><?= __('Registros de Clientes') ?></h3>
				    <table class="table table-striped" cellpadding="0" cellspacing="0">
				        <thead>
				            <tr>
				                <th scope="col">Registro</th>
				                <th scope="col">Razon social</th>
				                <th scope="col">Pais</th>
				                <th scope="col">Correo</th>
				                <th scope="col" class="actions"><?= __('Acciones') ?></th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php foreach ($clientes as $cliente): ?>
				            <tr>
				                <td><?= h($cliente->registro) ?></td>
				                <td><?= h($cliente->razon_social) ?></td>
				                <td><?= h($cliente->pais) ?></td>
				                <td><?= h($cliente->correo) ?></td>
				                <td class="actions">
				                    <?= $this->Html->link(__('Ver'), ['action' => 'ver', $cliente->id] , [ 'title' => 'Ver detalles del cliente '.$cliente->razon_social , 'class' => 'btn btn-info' ]) ?>
				                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], [ 'title' => 'Eliminacion del cliente '.$cliente->razon_social , 'class' => 'btn btn-danger' , 'confirm' => __('¿Desea eliminar el cliente '.$cliente->razon_social.'?', $cliente->id)]) ?>
				                </td>
				            </tr>
				            <?php endforeach; ?>
				        </tbody>
				    </table>
				    <!-- <div class="paginator">
				        <ul class="pagination">
				            <?= $this->Paginator->first('<< ' . __('first')) ?>
				            <?= $this->Paginator->prev('< ' . __('previous')) ?>
				            <?= $this->Paginator->numbers() ?>
				            <?= $this->Paginator->next(__('next') . ' >') ?>
				            <?= $this->Paginator->last(__('last') . ' >>') ?>
				        </ul>
				        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
				    </div> -->
				</div>
			</div>
	   </section>
	</body>
    <?= $this->element('admin_foot') ?>
</html>