<div class="tblUsers view">
<h2><?php echo __('Tbl User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('L Name'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['l_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Name'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['f_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('U Password'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['u_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preference'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['preference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motto'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['motto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('R Id'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['r_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Id'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['s_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('E Id'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['e_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Decen Id'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['decen_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Workplace'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['workplace']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth'); ?></dt>
		<dd>
			<?php echo h($tblUser['TblUser']['birth']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tbl User'), array('action' => 'edit', $tblUser['TblUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tbl User'), array('action' => 'delete', $tblUser['TblUser']['id']), null, __('Are you sure you want to delete # %s?', $tblUser['TblUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tbl Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tbl User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
