<div class="tblUsers form">
<?php echo $this->Form->create('TblUser'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tbl User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('l_name');
		echo $this->Form->input('f_name');
		echo $this->Form->input('email');
		echo $this->Form->input('u_password');
		echo $this->Form->input('preference');
		echo $this->Form->input('job');
		echo $this->Form->input('address');
		echo $this->Form->input('motto');
		echo $this->Form->input('r_id');
		echo $this->Form->input('s_id');
		echo $this->Form->input('e_id');
		echo $this->Form->input('decen_id');
		echo $this->Form->input('workplace');
		echo $this->Form->input('birth');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TblUser.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TblUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tbl Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
