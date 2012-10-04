  <div class="span10">
  <ul class="nav nav-tabs">
      <li class="active"><a href="calc">Calculate Salary</a></li>   
      <li><a href="modify_sal">Modify Salary</a></li>   
  </ul>
  <div class="well">
    <div class="tab-content">
    	<div class="tab-pane active" >
      	<div class="span4"> 
          <form class="form-horizontal" action="calc" method="post">
            <div class="control-group">
              <label for="inputFullname" class="control-label">No of Days in Month <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="month" id="inputMonth" value="<?php echo set_value('month');?>"/>
                <?php echo form_error('month'); ?> 
              </div>
            </div>  
            <div class="control-group">
              <label for="inputUsername" class="control-label" >No of Days Payable <span style="color:red;">*</span>:</label>
              <div class="controls" >
                <input type="text" name="payable" id="inputPayable" value="<?php echo set_value('payable'); ?>" />
                <?php echo form_error('payable'); ?>
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
    