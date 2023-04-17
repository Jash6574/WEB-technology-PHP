<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    

    <link rel="stylesheet" href="css/style.css">
<style>
      .modalsix {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  padding-bottom: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* modalsix Content */
.modalsix-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.image{
  height:300px;
  width: auto;
  display: block;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 5px 5px #cccccc;
}

 p {
  padding: 70px 10px 0px 10px;
  letter-spacing:1.5px;
  font-size: 14px;
  text-align:justify;
}

    </style>


<div class="tile" style="background-image: url('img/Seema-Darshan-Banner.jpg');" id="myBtnsix">
    <div class="textWrapper" ><h2>Seema Darshan</h2>
    </div>
  </div>


<!-- The modalsix -->
<div id="myModalsix" class="modalsix">

  <!-- modalsix content -->
  <div class="modalsix-content">    <a class="close" href="">&times;</a><br><br>

    <h1 style="font-size: 48px;">Seema Darshan - Nada Bet</h1>
    <img src="img/Seema-Darshan-Banner.jpg" class="image">
    <p>
    

    About the location: Travel to Nada Bet, a small slice of land jutting into a sprawling lake, where the Seema Darshan is held. It is an opportunity for travellers to see the workings of an army post on the border of India. Some of the activities and sights that will interest the traveller include the retreat ceremony against the backdrop of a glorious orange sunset where the Border Security Force (BSF) jawans put up a gallant show of marching with pride to end another day of guarding the borders. A weapon display and photo gallery at Nada Bet includes guns, tanks and other sophisticated devices that help in keeping the border and inland places secure. As an ode to the camels and to showcase their expertise and disciple, a camel show is presented for the visitors.


<br><br>
</p>
  </div>

</div>

<script>
// Get the modalsix
var modalsix = document.getElementById("myModalsix");
var btn = document.getElementById("myBtnsix");

// Get the <span> element that closes the modalsix
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modalsix 
btn.onclick = function() {
  modalsix.style.display = "block";
}

// When the user clicks on <span> (x), close the modalsix
span.onclick = function() {
  modalsix.style.display = "none";
}

// When the user clicks anywhere outside of the modalsix, close it
window.onclick = function(event) {
  if (event.target == modalsix) {
    modalsix.style.display = "none";
  }
}
</script>