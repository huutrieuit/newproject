<div class="tblUsers index">
	<h2><?php echo __('Tbl Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('l_name'); ?></th>
			<th><?php echo $this->Paginator->sort('f_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('u_password'); ?></th>
			<th><?php echo $this->Paginator->sort('preference'); ?></th>
			<th><?php echo $this->Paginator->sort('job'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('motto'); ?></th>
			<th><?php echo $this->Paginator->sort('r_id'); ?></th>
			<th><?php echo $this->Paginator->sort('s_id'); ?></th>
			<th><?php echo $this->Paginator->sort('e_id'); ?></th>
			<th><?php echo $this->Paginator->sort('decen_id'); ?></th>
			<th><?php echo $this->Paginator->sort('workplace'); ?></th>
			<th><?php echo $this->Paginator->sort('birth'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tblUsers as $tblUser): ?>
	<tr>
		<td><?php echo h($tblUser['TblUser']['id']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['l_name']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['f_name']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['email']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['u_password']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['preference']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['job']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['address']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['motto']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['r_id']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['s_id']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['e_id']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['decen_id']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['workplace']); ?>&nbsp;</td>
		<td><?php echo h($tblUser['TblUser']['birth']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tblUser['TblUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tblUser['TblUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tblUser['TblUser']['id']), null, __('Are you sure you want to delete # %s?', $tblUser['TblUser']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tbl User'), array('action' => 'add')); ?></li>
	</ul>
</div>
