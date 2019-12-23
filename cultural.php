
<!DOCTYPE html>

<head>
<title>Vesit</title>
<meta http-equiv="Cache-control" content="no-cache">
<link href="css/css1/styles.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script type="text/javascript" src="js/vendors/modernizr/modernizr.custom.js"></script>
</head>

<body>

<!--Smooth Scroll-->
<div class="smooth-overflow">
<!--Navigation-->
  <center><nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="#"><span class="text-blue">Registration</span></a></center> 
    
    
    
  <!--/Navigation--> 
  
  <!--MainWrapper-->
  <div class="main-wrap"> 
    <!--Main Menu-->
    <div class="responsive-admin-menu">
      <div class="responsive-menu">CMS
        <div class="menuicon"><i class="fa fa-angle-down"></i></div>
      </div>
      <ul id="menu">
        <li><a href="adminhome.html" title="Home">
    <i class="entypo-briefcase"></i><span>HOME</span></a></li>
    <li><a  href="gs.php" title="GS">
    <i class="entypo-briefcase"></i><span>GS</span></a></li>
        <li><a  href="sports.php" title="sports">
    <i class="entypo-briefcase"></i><span>Sports</span></a></li>
    <li><a class="submenu active" href="cultural.php" title="cultural">
    <i class="entypo-briefcase"></i><span>Cultural</span></a></li>
    <li><a href="music.php" title="music">
    <i class="entypo-briefcase"></i><span>Music</span></a></li>
      <li><a href="sout.php" title="sout">
    <i class="entypo-briefcase"></i><span>Sout</span></a></li>
        
    </ul>
        
    </div>
    <!--/MainMenu-->
    
    <div class="content-wrapper"> 
      <!--Content Wrapper--><!--Horisontal Dropdown-->
        <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
        </nav>
        
        
          <!--Breadcrumb-->
<div class="breadcrumb clearfix">
            <ul>
              <li><a href="adminhome.html"><i class="fa fa-home"></i></a></li>
              <li><a href="adminhome.html">HOME</a></li>
              <li class="active">Register Form</li>
            </ul>
          </div>
          <!--/Breadcrumb--> 
          
        
        <div class="page-header">
      <h1>Council<small>New Member</small></h1>
    </div>
    <!--Success Alert-->
    <!--<div class="panel panel-default">
      <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                <strong>Well done!</strong> You successfully <a href="#">read this important</a> alert message. 
      </div>
    </div>-->
    <!--/Success Alert-->
    
    <div class="col-md-12 bootstrap-grid">
            
            <!-- New widget -->
            
            <div class="powerwidget green" id="add-customer-form-validation-widget" data-widget-editbutton="false">
              <header>
                <h2>Council Member</h2>
              </header>
              <div class="inner-spacer">
                <form action="culturalregister.php" id="stud_form" name="stud_form" class="orb-form"  method="POST">
                  <header>Details</header>
                  <fieldset>
         

                    <div class="row">
          <section class="col col-2">
          <font size="5">Name</font>
          </section>
          <section class="col col-3">
                        <label class="input"> <i class="icon-prepend fa fa-user"></i>
                          <input type="text" id="surname" name="surname" placeholder="Surname" pattern="[a-zA-Z]{20}" >
                        </label>
                      </section>
                      <section class="col col-3">
                        <label class="input"> <i class="icon-prepend fa fa-user"></i>
                          <input type="text" id="firstname" name="firstname" placeholder="First name" >
                        </label>
                      </section>
                      <section class="col col-4">
                        <label class="input"> <i class="icon-prepend fa fa-user"></i>
                          <input type="text" id="middlename" name="middlename" placeholder="Middle name" >
                        </label>
                      </section>
                    </div>
          <div class="row">
        <section class="col col-2">
        <font size="5">Gender</font>
        </section>
          <section class="col col-10">
                      <label class="select">
                        <select id="sex" name="sex">
                          <option value="Male" name="sex">Male </option>
                          <option value="Female" name="sex">Female </option>
                        </select>
                        <i></i> </label>
                    </section>
          </div>
            <div class="row">
            <section class="col col-2">
            <font size="5">Date of Birth</font>
            </section>
                      <section class="col col-10">
                        <label class="input"> <i class="icon-prepend fa fa-calendar"></i>
                          <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Date of birth">
                        </label>
            </section>
            </div>
            
            
          <div class="row">
        <section class="col col-2">
        <font size="5">Class</font>
        </section>
        <section class="col col-10">
                      <label class="select">
                        <select id="class" name="class">
                          <option value="D6">D16</option>
                          
             
              

                        </select>
                        <i></i> </label>
                    </section>
          </div>
          <div class="row">
        <section class="col col-2">
        <font size="5">Division</font>
        </section>
        <section class="col col-10">
                      <label class="select">
                        <select id="division" name="division">
                          <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
             
             
                        </select>
                        <i></i> </label>
                    </section>
          </div>
          <div class="row">
          <section class="col col-2">
          <font size="5">Roll No</font>
          </section>
          <section class="col col-3">
                        <label class="input"> <i class="icon-prepend fa fa-user"></i>
                          <input type="number" id="rollno" name="rollno" placeholder="Roll No" pattern="[0-9]{20}" >
                        </label>
                      
                    </div>
                  
          <div class="row">
          <section class="col col-2">
          <font size="5">Phone No</font>
          </section>
          <section class="col col-10">
                        <label class="input"> <i class="icon-prepend fa fa-user"></i>
                          <input type="number" id="phone no" name="rollno" placeholder="Phone No" pattern="[1-9]" >
                        </label>
                        </section>
                        </div>
                      
                    
          <div class="row">
        <section class="col col-2">
        <font size="5">Post</font>
        </section>
        <section class="col col-10">
                      <label class="select">
                        <select id="post" name="post">
                         <option value="junior deputy secretary post 1">Junior Deputy Secretary Post 1</option>
                         <option value="junior deputy secretary post 2">Junior Deputy Secretary Post 2</option>
                         <option value="junior deputy secretary post 3">Junior Deputy Secretary Post 3</option>
                         <option value="junior deputy secretary post 4">Junior Deputy Secretary Post 4</option>
                         <option value="junior deputy secretary post 5">Junior Deputy Secretary Post 5</option>
                         <option value="senior deputy secretary post 1">Senior Deputy Secretary Post 1</option>
                         <option value="senior deputy secretary post 2">Senior Deputy Secretary Post 2</option>
                         <option value="senior deputy secretary post 3">Senior Deputy Secretary Post 3</option>
                         <option value="senior deputy secretary post 4">Senior Deputy Secretary Post 4</option>
                         <option value="senior deputy secretary post 5">Senior Deputy Secretary Post 5</option>
                         <option value="secretary">Secretary</option>
                        
             
                      </select>
                        <i></i> </label>
                    </section>
          </div>

          
          

        </fieldset>
        <footer>
                    <button type="submit" class="btn btn-default">Submit</button>
          </footer>
                 
       
                  
                  
                </form>
             

<!--Scripts--> 
<!--JQuery--> 
<script type="text/javascript" src="js/vendors/jquery/jquery.min.js"></script> 
<script type="text/javascript" src="js/vendors/jquery/jquery-ui.min.js"></script> 

<script>
$('.powerwidget > header').on('touchstart', function(event){});
</script>

<!--Forms--> 
<script type="text/javascript" src="js/vendors/forms/jquery.form.min.js"></script> 
<script type="text/javascript" src="js/vendors/forms/jquery.validate.min.js"></script> 
<script type="text/javascript" src="js/vendors/forms/jquery.maskedinput.min.js"></script> 
<script type="text/javascript" src="js/vendors/jquery-steps/jquery.steps.min.js"></script> 

<!--Fullscreen--> 
<script type="text/javascript" src="js/vendors/fullscreen/screenfull.min.js"></script> 


<!--Horizontal Dropdown--> 
<script type="text/javascript" src="js/vendors/horisontal/cbpHorizontalSlideOutMenu.js"></script> 
<script type="text/javascript" src="js/vendors/classie/classie.js"></script> 

<!--PowerWidgets--> 
<script type="text/javascript" src="js/vendors/powerwidgets/powerwidgets.min.js"></script> 

<!--Bootstrap--> 
<script type="text/javascript" src="js/vendors/bootstrap/bootstrap.min.js"></script> 

<!--Main App--> 
<script type="text/javascript" src="js/scripts.js"></script>

<!--Sparkline--> 
<script type="text/javascript" src="js/vendors/sparkline/jquery.sparkline.min.js"></script> 

<!--/Scripts-->

</body>
</html>