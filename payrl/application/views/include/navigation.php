<body data-target=".bs-docs-sidebar" data-spy="scroll" data-twttr-rendered="true" style="padding:60px;">
    
    <!-- Fixed Navigation bar
    ================================================== -->
      <div class="container"> 
         <div class="row">    
          <div class="navbar navbar-inverse navbar-fixed-top">
           <div class="navbar-inner">
            <div>
              <ul class="nav">
                <a class="brand" href="<?= site_url(array('user','data_fetch'));?>" >Payroll System </a>
              </ul>
            </div>
              <div class="nav pull-right">
                 <ul class="nav">
                  <li><a href="logout"><img src="<?= base_url('assets/img/Logout.png') ?>"/><span> </span>Logout</a></li>
                 </ul>
              </div>
          </div> 
        </div>
      </div> 

    <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
      <div class="span2 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
            <li id="color_change"><a class="active" href="<?= site_url(array('user','data_fetch'));?>">Users</a></li>
            <li id="color_change"><a  href="<?= site_url(array('registration','add_employee'));?>">Registrations</a></li>            
            <li id="color_change"><a  href="<?= site_url(array('salary','salary_manage'));?>">Salary Management</a></li>
            <li id="color_change"><a  href="<?= site_url(array('calculator','calc'));?>">Calculator</a></li>   
            <li id="color_change"><a  href="<?= site_url(array('upload','index'));?>">Upload</a></li>  
        </ul>
    </div>


   
