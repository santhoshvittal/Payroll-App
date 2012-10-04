<div class="span10">
<ul class="nav nav-tabs">
      <li class="active"><a href="salary_manage">View File</a></li>
      <li><a href="upload_view">Upload File</a></li>     
  </ul> 
<div class="well">	
 <div class="tab-content">
	<form class="form-horizontal" action="salary_manage" method="post">
    <div class="tab-pane active">
      <table class = "table table-bordered">
        <tr class= "data_val">
          <th> SLNO </th>
          <th> UserName </th>
          <th> Designation </th>
          <th> Department </th>
        </tr>         
          <?php foreach($query as $row): ?>
        <tr>
          <td><a href="data_fetch"><?php echo $row->slno;?></a></td>
          <td><?php echo $row->name;?></td>
          <td><?php echo $row->designation;?></td>
          <td><?php echo $row->dept;?></td>
        </tr>
          <?php endforeach;?> 
      </table>

      <div class="control-group">
        <div class="controls">
          <?php 
              if ($this->session->flashdata('login_error1')){
                echo "Wrong Username or Password";
              }               
          ?>  
          <input class="btn" type="submit" value ="Email All Payslips" />
          <input class="btn" type="submit" value ="View PDF" />
        </div>
      </div>
    </div>
  </form>
 </div> 
</div>

<!-- Javascripts, Ajax  and other call are held here for this page -->

  <script>
   $('.fileupload').fileupload();
  </script>