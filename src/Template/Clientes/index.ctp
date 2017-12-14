<!--Author: Newman Fajardo-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Index</title>
		<?= $this->Html->charset() ?>
	    <?= $this->element('admin_link') ?>
	</head> 
	 <body class="sticky-header left-side-collapsed">
	    <section>
	    	<?= $this->element('admin_menu') ?>
	    	<?= $this->element('admin_head') ?>
			<div class="col-xs-12 " style='margin-top:20px !important;'>
			    <h3><?= __('Clientes') ?></h3>
			    <table class="table table-striped" cellpadding="0" cellspacing="0">
			        <thead>
			            <tr>
			                <th scope="col"><?= $this->Paginator->sort('registro',['Registro']) ?></th>
			                <th scope="col"><?= $this->Paginator->sort('razon_socail',['Razon Social']) ?></th>
			                <th scope="col"><?= $this->Paginator->sort('pais',['Pais']) ?></th>
			                <th scope="col"><?= $this->Paginator->sort('correo',['Correo']) ?></th>
			                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
			                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
			                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
			                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
			                </td>
			            </tr>
			            <?php endforeach; ?>
			        </tbody>
			    </table>
			    <div class="paginator">
			        <ul class="pagination">
			            <?= $this->Paginator->first('<< ' . __('first')) ?>
			            <?= $this->Paginator->prev('< ' . __('previous')) ?>
			            <?= $this->Paginator->numbers() ?>
			            <?= $this->Paginator->next(__('next') . ' >') ?>
			            <?= $this->Paginator->last(__('last') . ' >>') ?>
			        </ul>
			        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
			    </div>
			</div>
	   </section>
	</body>
    <?= $this->element('admin_foot') ?>
</html>