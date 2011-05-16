<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>Form Helpers</h1><?php
           echo $this->Form->create('User', array(
    'inputDefaults' => array(
    'label' => false,
    'div' => false,
    # define error defaults for the form
    'error' => array(
    'wrap' => 'span',
    'class' => 'my-error-class'
    )
   )
   ));
 echo $this->Form->input('password',array('label'=>'Password')); // No div, no label
 echo $this->Form->input('username', array('label' => 'Username')); // has a label element

   ?>
 <?php echo $this->Form->end('Submit'); ?>


   <?php 
echo $this->Form->create('User',array('type'=>'file')); ?>

    <?php
    echo $this->Form->input('username'); //text
    echo $this->Form->input('password'); //password
    echo $this->Form->input('approved'); //day, month, year, hour, minute, meridian
    echo $this->Form->input('quote'); //textarea
    echo $this->Form->input('birth_dt', array( 'label' => 'Date of birth'
   , 'dateFormat' => 'DMY'
   , 'minYear' => date('Y') - 70
   , 'maxYear' => date('Y') - 18 ));
 echo $this->Form->checkbox('done');
 echo $this->Form->checkbox('done', array('value' => 555));
echo $this->Form->button('A Button');
echo $this->Form->button('Another Button', array('type'=>'button'));
echo $this->Form->button('Reset the Form', array('type'=>'reset'));
echo $this->Form->button('Submit Form', array('type'=>'submit'));
echo $this->Form->year('purchased',2000,date('Y'));
echo $this->Form->month('mob');
echo $this->Form->day('created');
echo $this->Form->file('avatar');
$options=array('M'=>'Male','F'=>'Female');
$attributes=array('legend'=>false);
echo $this->Form->radio('gender',$options,$attributes);
 $options = array('M' => 'Male', 'F' => 'Female');
 echo $this->Form->select('gender', $options);
 echo $this->Form->textarea('notes');
 if ($this->Form->isFieldError('gender')){
 echo $this->Form->error('gender');
 }



   ?>

   <?php echo $this->Form->end('Add'); ?>

