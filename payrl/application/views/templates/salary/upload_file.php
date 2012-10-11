<!-- Upload file view page held here
    ================================================== -->

<div class="span10">
<ul class="nav nav-tabs">
      <li ><a href="salary_manage"> ViewFile</a></li>
      <li class="active"><a href="upload_view"> Upload File</a></li>     
  </ul> 
<div class="well">  
 <div class="tab-content">
  <div class="tab-pane active"> 		
  	<div class="span4 columns">
      <form class="form-horizontal" action="upload_view" method="post">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <div class="input-append">
            <label class="span1" style="float:left;color:#537CA6;">File :</label>
              <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
          </div>
        </div> 

        <div class="control-group">
          <div class="controls">             
            <input class="btn" type="Submit" value ="Save"/>
            <input class="btn" type="reset" value ="Reset" />             
          </div>
        </div>            
      </form>      
   	</div>  
  </div>
 </div>
</div>