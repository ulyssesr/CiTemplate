<?php foreach ($query as $row): ?>
<?php $field1 = array('name'=>'field1','value'=>$row->field1,'size'=>'60'); ?>
<?php $field2 = array('name'=>'field2','value'=>$row->field2,'size'=>'60'); ?>
<?php $field3 = array('name'=>'field3','value'=>$row->field3,'size'=>'60'); ?>
<?php endforeach ?>
<?=form_open('contacts/update/'.$row->id);?>
<p><label for="field1">Field: </label><?=form_input($field1);?></p>
<p><label for="field2">Field: </label><?=form_input($field2);?></p>
<p><label for="field3">Field: </label><?=form_input($field3);?></p>
<p><label for="field4">Field: </label><?=form_textarea('field4',$row->field4);?></p>
<div class="submit">
<div class="errors"><?php echo validation_errors(); ?></div>
<p><input id="submit" type=submit value='Submit' /></p>
</div>
<?=form_close();?>
