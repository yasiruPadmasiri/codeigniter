 
<?php include_once('header.php');?>
<div class="container">
   
    <?php echo form_open('welcome/save',['class'=>'form-horizontal']);?>
  <fieldset>
    <legend>Add Post</legend>
    
    <div class="form-group">
      <label for="inputEmail">Title </label>
      <?php echo form_input(['name'=>'title','placeholder'=>'Title','class'=>'form-control']);?>
      </div>
    <?php echo form_error('title','<div class="text-danger">','</div>');?>
    
    <div class="form-group">
      <label for="exampleTextarea">Description </label>
      <?php echo form_textarea(['name'=>'description','placeholder'=>'Description','class'=>'form-control']);?>
      
    </div>
    <?php echo form_error('description','<div class="text-danger">','</div>');?>
    
   <div class="form-group">
    <div class="col-md-10 col-md-offset-2">
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);?>
    <?php echo anchor('welcome','Back',['class'=>'btn btn-primary']);?>
    </div>

  </fieldset>
 <?php echo form_close();?>
</div>









<?php include_once('footer.php');?>