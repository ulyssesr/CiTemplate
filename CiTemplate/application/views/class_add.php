<?php $field1 = array('name'=>'field1','size'=>'60'); ?>
<?php $field2 = array('name'=>'field2','size'=>'60'); ?>
<?php $field3 = array('name'=>'field3','size'=>'60'); ?>
<?=form_open('Class/insert');?>
<?=form_hidden('id', $this->uri->segment(3));?>
<p><label for="field1">field1: </label><?=form_input($field1);?> * </p>
<p><label for="field2">field2: </label><?=form_input($field2);?> * </p>
<p><label for="field3">field3: </label><?=form_textarea('field3');?></p>
<div class="submit">
<div class="errors"><?php echo validation_errors(); ?></div>
<p><input id="submit" type=submit value='Submit' /></p>
</div>
<?=form_close();?>
