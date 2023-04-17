<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    

    <link rel="stylesheet" href="css/style.css">
<style>
      .modalfive {
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

/* modalfive Content */
.modalfive-content {
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
}.image{
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


<div class="tile" style="background-image: url('img/Rani\ Ki\ Vav29.jpg');" id="myBtnfive">
    <div class="textWrapper" ><h2>Rani Ki Vav</h2>
    </div>
  </div>


<!-- The modalfive -->
<div id="myModalfive" class="modalfive">

  <!-- modalfive content -->
  <div class="modalfive-content">    <a class="close" href="">&times;</a><br><br>

    <h1 style="font-size: 48px;">Rani Ki Vav</h1>
    <img src="img/pavagadhtemplefrontview.jpg"  class="image"/>
    <p>
    
    About the location: The only real sign of Patan’s former glory is this astoundingly beautiful step-well. Located on the banks of the Saraswati River, this is one of the oldest and finest stepwells in Gujarat and is remarkably preserved. Steps lead down through multiple levels with lines of carved pillars and more than 800 sculptures, mostly on Vishnu-avatar themes, as well as striking geometric patterns. The stepwell is made in the form of an inverted temple. It showcases superior craftsmanship of the era, and the unique Maru-Gurjara architectural style and houses sculptures similar to the Vimalavasahi temple in Mount Abu and Sun temple at Modhera.
    <br><br>

Brief History: The stepwell was built in 1063 by Rani Udayamati of the Chaulukya Dynasty to commemorate her husband, Bhimdev I. A 1304 composition of Jain monk, Merutunga, mentions that Udayamati, the daughter of Naravaraha Khangara, built this stepwell at Patan. The same composition also mentions that the stepwell was commissioned in 1063 and was completed after 20 years. Archeologists Henry Cousens and James Burgess visited it in 1890s when it was completely buried under silt and only the shaft and few pillars were visible. The stepwell was rediscovered in 1940s, and the Archeological Survey of India restored it in 1980s. The stepwell has been listed as one of UNESCO's World Heritage Sites since 2014.

<br><br>
</p>
  </div>

</div>

<script>
// Get the modalfive
var modalfive = document.getElementById("myModalfive");
var btn = document.getElementById("myBtnfive");

// Get the <span> element that closes the modalfive
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modalfive 
btn.onclick = function() {
  modalfive.style.display = "block";
}

// When the user clicks on <span> (x), close the modalfive
span.onclick = function() {
  modalfive.style.display = "none";
}

// When the user clicks anywhere outside of the modalfive, close it
window.onclick = function(event) {
  if (event.target == modalfive) {
    modalfive.style.display = "none";
  }
}
</script>