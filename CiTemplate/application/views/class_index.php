<p><?=anchor('class/insert','New'); ?></p>
<?php echo $this->pagination->create_links();?>
<?php foreach ($query as $row): ?>
<?=anchor('class/view/'.$row->id,$row->field);?><br/>
<?php endforeach ?>
