<!DOCTYPE html>
<html lang="en">
<head>
<title>Zahazni</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<?PHP
include "../entites/event.php";
include "../core/eventC.php";
if (isset($_GET['id_event'])){
	$eventC=new eventC();
    $result=$eventC->recupererEvent($_GET['id_event']);
	foreach($result as $row){
    $id_event=$row['id_event'];
    $title=$row['title'];
    $date=$row['date'];
		$prix=$row['prix'];
    $reduc=$row['reduc'];
?>
<!--Header-part-->
<div id="header">
  <h1><a href="#">Zahazni Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-file"></i>Addons</a>
  <ul>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Promotions</span> <span class="label label-important">2</span></a>
      <ul>
          <li><a href="afficherpromo.php">Aff Promotions</a></li>
        <li><a href="promo.html">Add Promotions</a></li>
      </ul>
    </li>
    <li class="submenu active"> <a href="#"><i class="icon icon-file"></i> <span>Events</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="event.html">Add Events</a></li>
        <li><a href="calendar.php">Calendar Events</a></li>
      </ul>
    </li>
  </ul>  
</div>

<!-- end here -->

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Promotion</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Promotion</h5>
        </div>
        <div class="widget-content nopadding">
          <form method="POST" name="f" class="form-horizontal" onsubmit="return verif()">
            <div class="control-group">

            <div class="control-group">
                    <label class="control-label">Id*</label>
                    <div class="controls">
                      <input type="number" value="<?PHP echo $id_event ?>"  placeholder=" --- " data-title="Juste a number for the Id Event…" class="span11 tip" data-original-title="" name="id_event" id="required">
                    </div>
                  </div>

                  <div class="control-group">
                        <label class="control-label">Title*</label>
                        <div class="controls">
                          <input type="text" name="title" value="<?PHP echo $title ?>"  id="title">
                        </div>
                      </div>

              <div class="control-group">
                <label class="control-label">Date* (mm-dd)</label>
                <div class="controls">
                  <div  data-date="" class="input-append date datepicker">
                    <input type="text"  data-date-format="mm-dd-yyyy" class="span11" name="date" value="<?PHP echo $date ?>" >
                    <span class="add-on"><i class="icon-th"></i></span> </div>
                </div>
              </div>

              <div class="control-group">
                  <label class="control-label">Prix*</label>
                  <div class="controls">
                    <input type="number" class="span11 tip" data-original-title="" name="prix" value="<?PHP echo $prix ?>"  id="required">
                  </div>
                </div>

          <div class="control-group">
            <label for="normal" class="control-label">Reduction</label>
            <div class="controls">
              <input type="number"  class="span8 mask text" name="reduc" value="<?PHP echo $reduc ?>"  >
              <span class="help-block blue span8">99%</span> </div>
          </div>

              <!-- lena -->

            
                <input type="submit" name="modifier" value="modifier" class="btn btn-success">

                <input type="hidden" name="id_event_ini" value="<?PHP echo $_GET['id_event'];?>">

            </div>
          </form>


        </div>
      </div>
      <!-- el fouk win naamel copy -->

</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> </div>
</div>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$event=new event($_POST['id_event'],$_POST['title'],$_POST['date'],$_POST['prix'],$_POST['reduc']);
	$eventC->modifierEvent($event,$_POST['id_event_ini']);
	echo $_POST['id_event_ini'];
	header('Location: afficherevent.php');
}
?>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script src="controle.js"></script>
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
