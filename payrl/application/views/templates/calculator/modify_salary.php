<div class="span10">
  <ul class="nav nav-tabs">
      <li><a href="calc">Calculate Salary</a></li>   
      <li class="active"><a href="modify_sal">Modify Salary</a></li>    
  </ul>
  <div class="well">
  	<div class="tab-content">
    	<div class="tab-pane active" >
      	<div class="span4"> 
          <form class="form-horizontal" action="modify_sal" method="post">
            <div class="control-group">
              <label for="inputBasicsalary" class="control-label">Basic Salary <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="basicsalary" id="inputBasicsalary" value="<?php echo set_value('basicsalary');?>"/>
                <?php echo form_error('basicsalary'); ?> 
              </div>
            </div>  
            <div class="control-group">
              <label for="inputProvidentfund" class="control-label" >Provident Fund <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="providentfund" id="inputProvidentfund" value="<?php echo set_value('providentfund'); ?>" />
                <?php echo form_error('providentfund'); ?>
              </div>
            </div>
            <div class="control-group">
              <label for="inputVda" class="control-label" >VDA <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="vda" id="inputVda" value="<?php echo set_value('vda'); ?>" />
                <?php echo form_error('vda'); ?>
              </div>
            </div>
            <div class="control-group">
              <label for="inputEsi" class="control-label" >ESI <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="esi" id="inputEsi" value="<?php echo set_value('esi'); ?>" />
                <?php echo form_error('esi'); ?>
              </div>
            </div>
            <div class="row">
              <div class="control-group">
			         <div class="controls">
		 		         <input class="btn" type="submit" value ="Create" />
		 		         <input class="btn" type="reset" value ="Reset" />
		 	         </div>
		          </div>
		        </div>		
	        </form>
  	    </div>
      </div>
    </div>
  </div>
    </div>