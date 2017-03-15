<?php session_start(); ?>
<?php include 'header.php' ?>
<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

<style>  

.container{
    background-color: #2980b9;  
}

body{
	min-width: 700px;
  background-repeat: no-repeat;
}

.elegantshadow{
  margin: 0 0 0 0;
  text-align: center;
  color:white;
  background-color: #2980b9;
  letter-spacing: .1em;
  text-shadow: -1px -1px 1px white 2px 2px 1px #2980b9;
  height: 13%;
}

h1 {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  font-size: 80px;
  padding: 20px 30px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
}

@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900);

h2{
  color: #333;
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 60px;
  font-weight: 900;
  margin: 25px 0px 30px 0px;
  text-align: center;
}

.trip1{
  margin-top: 15px;
  margin-left: 10px;
  float: left;
  width: 322px;
}

.trip2{
  margin-top: 15px;
  margin-left: 11.5%;
  float: left;
  width: 322px;
}

.trip3{
  margin-top: 15px;
  margin-left: 10px;
  float: right;
  width: 322px;
  margin-right: 10px;
}

.button{
  background: #2980b9;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 30;
  -moz-border-radius: 30;
  border-radius: 30px;
  text-shadow: 1px 1px 3px #666666;
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 13px;
  padding: 5px 10px 5px 10px;
  text-decoration: none;

}

.button :hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

</style>

<body>

<h1 class='elegantshadow'>Gallery</h1>

<?php include 'nav.php' ?>

<div class="row">

  <div class="col-md-4">

  <div class="trip1">
    
  <a data-flickr-embed="true" data-header="true"  href="https://www.flickr.com/gp/148131166@N03/C56tU9" title="Caribbean Christian Center for the Deaf" target="_blank"><img src="https://c1.staticflickr.com/1/674/33093900712_23ff002819_n.jpg" width="320" height="180" alt="Caribbean Christian Center for the Deaf"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
  <br>
  <br>
  <center><p>“I have found out that there ain’t no surer way to find out whether you like people or hate them than to travel with them.” - Mark Twain</p></center>
  <br>
  <center><a class="button" href="https://www.flickr.com/gp/148131166@N03/C56tU9" target="_blank">Click Here To See Full Album</a></center>
 
  </div>

  </div>

  <div class="col-md-4">

  <div class="trip2">
    
  <a data-flickr-embed="true" data-header="true"  href="https://www.flickr.com/photos/148131166@N03/albums/72157681081677405" title="Coming Soon"><img src="https://c1.staticflickr.com/3/2878/32429167904_3850737b69_n.jpg" width="320" height="240" alt="Coming Soon"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
  <br>
  <br>
  <center><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></center>
  <br>
  <center><a  class="button" href="https://www.flickr.com/photos/148131166@N03/albums/72157681081677405">Click Here To See Full Album</a></center>

  </div>

  </div>

  <div class="col-md-4">

  <div class ="trip3">

  <a data-flickr-embed="true" data-header="true"  href="https://www.flickr.com/photos/148131166@N03/albums/72157681081677405" title="Coming Soon"><img src="https://c1.staticflickr.com/3/2878/32429167904_3850737b69_n.jpg" width="320" height="240" alt="Coming Soon"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
  <br>
  <br>
  <center><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></center>
  <br>
  <center><a  class="button" href="https://www.flickr.com/photos/148131166@N03/albums/72157681081677405">Click Here To See Full Album</a></center>  
  
  </div>

  </div>

</div>

</body>