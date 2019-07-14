<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

<style >
          hr.ds1{
          border: 5px solid green;
            border-radius: 5px;
          }
          hr.ds2{
          border: 5px solid green;
            border-radius: 5px;
          }
          hr.ds3{
          border: 5px solid green;
            border-radius: 5px;
          }
    </style>

</style>
<body>
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide">DUCATI</a>

    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="p_newmodel.php" class="w3-bar-item w3-button">NEW MODEL</a>

      <a href="p_bike.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> BIKE</a>

      <a href="test_show.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>

      <a href="sing_in.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> SING IN</a>

      <a href="sing_up.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> REGISTER</a>

    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="p_newmodel.php" onclick="w3_close()" class="w3-bar-item w3-button">NEW MODEL</a>
  <a href="p_bike.php" onclick="w3_close()" class="w3-bar-item w3-button">BIKE</a>
  <a href="test_show.php" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="sing_in.php" onclick="w3_close()" class="w3-bar-item w3-button">SING IN</a>
  <a href="sing_up.php" onclick="w3_close()" class="w3-bar-item w3-button">REGISTER</a>
</nav>