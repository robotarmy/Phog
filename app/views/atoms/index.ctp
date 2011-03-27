<div class="atoms index">
   <pre>
Abstract:

For A Free Digital Society

    Activities directed at ``including'' more people in the use of digital
    technology are predicated on the assumption that such inclusion is
    invariably a good thing.  It appears so, when judged solely by
    immediate practical convenience.  However, if we also judge in terms
    of human rights, whether digital inclusion is good or bad depends on
    what kind of digital world we are to be included in.  If we wish to
    work towards digital inclusion as a goal, it behooves us to make sure
    it is the good kind.

    
Where:  

    Twitter.com Headquarters
    795 Folsom Street, San Francisco, CA

When:   

    2pm, April 16th , 2011

Who:  

    Richard Stallman launched the development of the GNU operating system
    (see www.gnu.org) in 1984.  GNU is free software: everyone has the
    freedom to copy it and redistribute it, as well as to make changes
    either large or small.  The GNU/Linux system, basically the GNU
    operating system with Linux added, is used on tens of millions of
    computers today.  Stallman has received the ACM Grace Hopper Award, a
    MacArthur Foundation fellowship, the Electronic Frontier Foundation's
    Pioneer Award, and the the Takeda Award for Social/Economic
    Betterment, as well as several honorary doctorates.
    
    
Length:  2 hours


      </pre>

	<h2><?php echo __('Registered Attendees');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ip');?></th>
			<th><?php echo $this->Paginator->sort('Full Name');?></th>
			<th><?php echo $this->Paginator->sort('Number of Seats');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($atoms as $atom):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($atom['Atom']['ip']); ?>&nbsp;</td>
		<td><?php echo h($atom['Atom']['string']); ?>&nbsp;</td>
		<td><?php echo h($atom['Atom']['value']); ?>&nbsp;</td>
		<td><?php echo h($atom['Atom']['created']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Register Attendance'), array('action' => 'add')); ?></li>
	</ul>
</div>
