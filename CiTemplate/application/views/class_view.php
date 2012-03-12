<?php foreach ($query as $row): ?>
<?php $onclick = array('onClick'=>"return confirm('Are you sure you want to delete record?')"); ?>
<p><?=anchor('class/edit/'.$row->id,'Edit'); ?> &middot; <?=anchor('class/delete/'.$row->id, 'Del', $onclick); ?></p>
<?=$row->field1;?><br/>
<?=$row->field2;?><br/>
<?=$row->field3;?><br/>
<?=$row->field4;?><br/>
<?php endforeach; ?>
