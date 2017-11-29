<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>

	<?php include "../My Website/navbar.php" ?>

	<style type="text/css" media="screen">


#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

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
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes zoom {
    from {transform: scale(0.1)} 
    to {transform: scale(1)}
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





.servicesitem img {
    margin-top: 60px;
    margin-left: 60px;
}
.servicesitem p {
    display: none;
}
.servicesitem {
    width: 145px;
    height: 150px;
    display: inline-block;
    cursor: pointer;
    margin-left: 30px;
}
.servicesitem .front, .servicesitem .back {
    width: 150px;
    height: 150px;
    border-radius: 150px;
    float: left;
    position: absolute;
}
.front {
    z-index: 2;
    opacity: 1;
    -webkit-transition: opacity 600ms ease;
    -moz-transition: opacity 600ms ease;
    -o-transition: opacity 600ms ease;
    -ms-transition: opacity 600ms ease;
    transition: opacity 600ms ease;
    background-color: black;
}
.servicesitem:hover .front {
    opacity: 0;
}
.back {
    background-color: #f6f6f6;
}
.back h3 {
    font-size: 30px;
    text-transform: uppercase;
    font-weight: 400;
    line-height: 115px;
    color: black;
    text-align: center;
}

.why
{
    font-size: 30px;
    text-transform: uppercase;
    line-height: 115px;
    color: white;
    text-align: center; 
    font-color: red;
}


		
	</style>
</head>
<body>
	
	<br> <br> <br> <br> <br>

<center>
	<div class="container-fluid">

        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
            
		<img src="images/My.jpg" class="img-circle" alt="Cinque Terre" width="304" height="280"> <br> <br>
		<h2 class="Info">Rommel A. Comiso</h2>
		<h3 class="Info">Bachelor of Science in Computer Science</h3>
		<h3 class="Info">19 yrs. old</h3>
		<h3 class="Info">May 17,1998</h3>
		<h3 class="Info">Silang, Cavite</h3>


        </div>

 
        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">


            <br> <br> <br>
            <h3 class="text-center font2">My Services</h3>

            <hr class="divider">

            <br> <br> <br>

            <div class="servicesitem">
            <div class="front">
                <h3 class="why">WHY</h3>
                
            </div>
            <div class="back">
                <h3>C#</h3>
            </div>
        </div>

            <div class="servicesitem">
            <div class="front why">

                <h3 class="why">SO</h3>
                
            </div>
            <div class="back">
                <h3>JS</h3>
            </div>
        </div>


        <div class="servicesitem">
            <div class="front">
                <h3 class="why">SERIOUS</h3>
                
            </div>
            <div class="back">
                <h3>HTML</h3>
            </div>
        </div>


        <div class="servicesitem">
            <div class="front">
                <h3 class="why">?</h3>
                
            </div>
            <div class="back">
                <h3>CSS</h3>
            </div>
        </div>

        <div class="servicesitem">
            <div class="front">
                <h3 class="why">?</h3>
                
            </div>
            <div class="back">
                <h3>PHP</h3>
            </div>
        </div>
           

</center>

     </div>

	</div>

<br> <br> <br>
	<hr>

	<br> <br> <br> <br> <br> <br> <br> <br> 

<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<div class="container">

	<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">

		<h1 style="font-family: myFirstFont; font-size: 35px; letter-spacing: 2px;" class="Info">See my projects here : </h1>

		<br> <br> <br>  <br>

		<img src="projects/project1.png" class="img-thumbnail" 	width="604" height="404" id="project1" alt="Cvsu-SC Tax Management System">

		<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('project1');
var captionText = document.getElementById("caption");
var modalImg = document.getElementById("img01");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
		
		
	</div>

	<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">

		<img src="projects/project2.png" class="img-thumbnail" width="604" height="404" id="project2" alt="Cvsu-SC Tax Management System">

			<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('project2');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
		
	</div>



	<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">

		<br> <br> <br> <br>

		<img src="projects/project3.png" class="img-thumbnail" 	width="604" height="404" id="project3" alt="Cvsu-SC Tax Management System">

			<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('project3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
		
	</div>

	<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
		<br> <br> <br> <br>

		<img src="projects/project4.png" class="img-thumbnail" width="604" height="404" id="project4" alt="Cvsu-SC Tax Management System">

			<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('project4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
		
	</div>


	<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">

		<br> <br> <br> <br>

		<img src="projects/project6.png" class="img-thumbnail" 	width="604" height="404" id="project6" alt="Dollar OS">

			<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('project6');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
		
	</div>

	<div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
		<br> <br> <br> <br>

		<img src="projects/project5.png" class="img-thumbnail" width="604" height="404" id="project5" alt="Dollar OS">

			<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('project5');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
		
	</div>
	
</div>
	
    <br> <br>
    <hr>


</body>
</html>