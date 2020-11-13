<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TheEvent Bootstrap Template - Speaker Details</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url().'assets/img/favicon.png'?>" rel="icon">
  <link href="<?php echo base_url().'assets/img/apple-touch-icon.png'?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/animate.css/animate.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/venobox/venobox.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/vendor/owl.carousel/assets/owl.carousel.min.css'?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
  <style type="text/css">
    #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: left;
  display: block;
  width: 100%;
  max-width: 100%;
}

/* Caption of Modal Image */
.main-title {
  font-size: 36px;
  margin: center;
  display: block;
  width: 90%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  height: 80px;
}

.name{
  font-size: 36px;
  margin: center;
  display: block;
  width: 90%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  height: 80px;
}

/* Add Animation */
.modal-content, .top-content {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.custom-bar {
  -webkit-animation-name: spinning;
  -webkit-animation-duration: 0.6s;
  animation-name: spinning;
  animation-duration: 0.6s; 
}

@-webkit-keyframes spinning {
  from {-webkit-transform:rotateX(-90deg)}
  to {-webkit-transform:rotateY(30deg)} 
}

@keyframes spinning{
  from {transform:rotateX(-90deg)}
  to {transform:rotateY(30deg)}
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
  </style>

  <!-- =======================================================
  * Template Name: TheEvent - v2.0.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<h2>Image Modal</h2>
<p>In this example, we use CSS to create a modal (dialog box) that is hidden by default.</p>
<p>We use JavaScript to trigger the modal and to display the current image inside the modal when it is clicked on. Also note that we use the value from the image's "alt" attribute as an image caption text inside the modal.</p>

<img id="myImg" src="<?php echo base_url().'assets/img/speakers/1.jpg'?>" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <div class="row no-padding h-100" style="width: 100%;">
  <div class="col-md-auto logo-area order-sm-12 h-100">
  <img class="modal-content" id="img01">
  </div>
  <div class="col order-sm-1 h-100 detail-content">
    <div class="top-content">
      <div class="main-title">Speakers Detail</div>
      <div class="name">Nama</div>
              </div>
              <div class="text-area custom-bar">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
</div>
</div>
            

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/jquery.easing/jquery.easing.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/php-email-form/validate.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/wow/wow.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/venobox/venobox.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/owl.carousel/owl.carousel.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/superfish/superfish.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/hoverIntent/hoverIntent.js'?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
  <script>
// Get the modal
var modal = document.getElementById("myModal");


// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");

var modalHeader = document.getElementById("modalHeader");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

</body>

</html>