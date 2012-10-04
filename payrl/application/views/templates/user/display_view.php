<div class="span10">
<ul class="nav nav-tabs">
      <li class="active"><a href="data_fetch">List of Employee</a></li>
      <li><a href="search_employee">Search Employee</a></li>   
  	</ul>			

 	<div class="well">
  <div class="tab-content">
  
  	<!-- List of Employee navigation bar here-->
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
				
				<td><a href="update"><?php echo $row->slno;?></a></td>
				<td><?php echo $row->name;?></td>
				<td><?php echo $row->designation;?></td>
				<td><?php echo $row->dept;?></td>
			</tr>
				<?php endforeach;?>	
		</table>
	  </div>
	</div>						
	</div>	
	
 <!-- tab content closing here-->   
	</div>
</div>	

<script>
  $('#myTab a').click(function () {
  $(this).tab('show');
});	
</script>
