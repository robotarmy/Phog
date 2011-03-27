<div class="atoms form">
<?php echo $this->Form->create('Atom');?>
	<fieldset>
		<legend><?php __('Register Attendance'); ?></legend>
	<?php
		echo $this->Form->input('string',array('label' =>'Full Name'));
		echo $this->Form->input('value',array('label' => 'Number of Seats'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Antendees'), array('action' => 'index'));?></li>
	</ul>
</div>
