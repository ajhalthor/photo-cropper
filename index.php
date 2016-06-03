<!-- 
Author : Ajay Halthor
Title : Navigation Bar 
Description:
  - This is the index page
  - Contains the "profile picture" in a circle towards the to right.
  - If no Image is specified, the default image is loaded

USAGE :This mainly consists of markup, so you can change that as you like
-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
  /*username = '<?php //echo $log_username; ?>';*/
</script>
<link rel="stylesheet" type="text/css" href="style.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.img-structure{
  width:32px;
  height: 32px;
}

.img-rounded{
  border-radius: 50%;
}

.navbar{
  border-radius:0px;
  margin-bottom: 0px;
  height:60px;
}

.modal-header, h4, .close {
    color:white !important;
    text-align: center;
    font-size: 30px;
}


@media(min-width: 992px){
    nav.navbar{
        top:0px;
    }

    #photo-upload-modal .modal-dialog {
      width: 900px;
      margin: 30px auto;
    }
}

.nav>li>a{
    height:60px;
}


@media (min-width:768px){
  .mobile{
    display: none;
  }

  .desktop{
    display: inline;
  }
}
@media (max-width:767px){
  .mobile{
    display: inline;
  }

  .desktop{
    display: none !important; /*important, as the image would display on the collapse dropdown as well*/
  }
}

@media (min-width:768px) and (max-width:991px){
    #photo-upload-modal .modal-dialog {
      width: 700px;
      margin: 30px auto;
    }
}

</style>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Ajay Halthor</a>
      <ul>
        <li class="navbar-brand mobile"><a href="#">
              <img src="images/logo.jpg" alt="profile photo" class="profile-photo img-structure img-rounded"/>
          </a></li>
        </ul>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right navbar-inverse">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="glyphicon glyphicon-cog"></span>  &nbsp;
            Settings <span class="caret"></span></a>
            <ul class="dropdown-menu animated fadeInDown">
              <li><a href="#" id="change-password-button">Change Password</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
          <li class="desktop"><a href="#">
              <?php 
                /* Load the profile.jpg/png if present. otherwise, load the logo*/
                if(file_exists('images/profile.jpg')){
                    $image = 'images/profile.jpg';
                }else if(file_exists('images/profile.png')){
                    $image = 'images/profile.png';
                }else{
                    #Load Default Logo
                  $image = "images/logo.jpg";
                }
              ?>
              <img src=<?php echo $image ?> id="profile-photo" alt="profile photo" class="profile-photo img-structure img-rounded"/>
          </a></li>
      </ul>
    </div>
  </div>
</nav> 


  <!-- Photo upload Modal -->
  <div class="modal fade" id="photo-upload-modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header background-maroon" style="padding:35px 50px;color:white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-camera"></span> Upload Photo</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
              <?php include 'cropper/photo_crop.html';?>
        </div>
      </div>
      
    </div>
  </div>

</div>
 

 <script>
$(document).ready(function(){

    $("#profile-photo").on('click',function(){
      $('#photo-upload-modal').modal();
    });
});
</script> 


