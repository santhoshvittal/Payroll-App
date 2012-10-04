<div class="container"> 
      <div class="row">    
         <div style ="margin-bottom:20px;">        
           <img src="<?= base_url('assets/img/payrollSystem80FeatBanner.000.png') ?>">
		</div>
      </div>
   </div> 

<div style="width: 350px; margin: 0 auto;">
<div class='well'>
<h3 ><img hspace="15" src="<?= base_url('assets/img/lock.000.png')?>"/><span style="text-align:center;color:#537CA6;">Login Page</span></h3>

		<div class="exam" style="padding-top: 20px;">		
			<?php echo form_open('user/login')?>
			
			<div class="control-group">
              <div class="controls" >
                <input type="text" name="username" class="input-xlarge" id="username" placeholder="Username" value="<?php echo set_value('username'); ?>"/>
                <?php echo form_error('username'); ?> 
              </div>
            </div>

            <div class="control-group">
             <div class="controls" >
                <input type="password" style="margin-top: 9px;" name="password" class="input-xlarge" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/>
                <?php echo form_error('password'); ?> 
              </div>
            </div>

			<div style="color:red;margin-left: 12px;font-size:13px;">
				<?php 
					if ($this->session->flashdata('login_error'))
					{
						echo "Wrong Username or Password";
					}
				?>
			</div>
			<div style="padding-top:15px;margin-left: 12px;">
				<input class="btn" type="submit" value="Submit" />
				<input class="btn" type="reset" value="Reset" />
			</div>

			<?php echo form_close();?>
		</div>
    </div>
</div>
    </div>


