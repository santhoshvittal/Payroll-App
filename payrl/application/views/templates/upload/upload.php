<div class="span10">
<ul class="nav nav-tabs">
      <li class="active"><a href="index">Upload File</a></li>     
  </ul>
<div class="well">
	<div class="tab-content">
    	<div class="tab-pane active" >
    		<?php echo form_open_multipart('upload/do_upload');?>
    			<?php 
	    			if ($this->session->flashdata('upload_error'))
	    			{
						echo "The file is not uploaded";
					} 
				?>	
    		<label class="control-label"> FILE LOAD</label>	
    			
					<input type="file" name="userfile" size="20"/><br/><br/>
					<input class="btn" type="submit" value="upload" />
		<?php echo form_close();?>
		
	</div>
 </div>
 </div>
  </div>