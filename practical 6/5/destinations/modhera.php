<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    

    <link rel="stylesheet" href="css/style.css">
<style>
      .modalseven {
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

/* modalseven Content */
.modalseven-content {
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


<div class="tile" style="background-image: url('img/Modhera-Sun-Temple-Home-Page-Thumbnail.jpg');" id="myBtnseven">
    <div class="textWrapper" ><h2>Modhera Sun Temple</h2>
    </div>
  </div>


<!-- The modalseven -->
<div id="myModalseven" class="modalseven">

  <!-- modalseven content -->
  <div class="modalseven-content">    <a class="close" href="">&times;</a><br><br>

    <h1 style="font-size: 48px;">Modhera Sun Temple</h1><br>
    <img src="img/Modhera-Sun-Temple-Home-Page-Thumbnail.jpg" class="image" >
    <p>
    
    About Location: As one traverses the length and breadth of Gujarat, one constantly stumbles across architectural legacies of the 'Solanki' rule. You keep coming across living spaces and monuments of another time, offering an eclectic glimpse of the artistic and ingenious beauty that makes this exotically state vibrant.
<br><br>
A soothing drive amidst green farmlands almost 25 km away from Mehsana on the way to the temples of goddess Bahucharaji reposes the village of Modhera. Set along the backdrop of River Pushpavati, surrounded by a terra-formed garden of flowering trees and songs of birds, rests the famed Sun temple of Modhera.
<br><br>
The remains of the Sun Temples at Modhera dedicated to sun god are relics of times gone by when reverence of the natural elements fire, air, earth, water and sky were at their peak sharing space with myriad manifestations of Vedic gods. The ancient philosophy venerating natural elements and its association with humans was considered the prime force and energy of the life cycle. A walk around the serene temple campus makes you aware of the positively strong aura of energy which the place radiates and through it brings one closer to the environs.
<br><br>
Adding the beauty in this already famous popular Modhera Sun Temple. In October, 2022 Honorable Prime Minister Shri Narendrabhai Modi Inaugurated Solar powered 3-D Projection Mapping Show and Heritage Lighting at the Temple. Which is one of a kind experience. It has added another feather in the cap of this already well known temple.
<br><br>
Brief History: As per Archeological Survey of India Modhera Sun Temple was built in 1026-27 CE during the reign of Bhima I of the Chaulukya dynasty. As you enter the historical complex, you first come across the magnificent kund known as the Ramakund, built in rectangular shape containing 108 shrines to various gods and demi-gods. Check out the three main shrines positioned on the three sides of the kund, dedicated to Ganesh and Vishnu and an image of Lord Shiva dancing the ‘tandav’. 
<br><br>
Walk up the steps to the ‘Sabha Mandap’ or the assembly and convene with sculpted renderings of twelve ‘Adityas’ (another name for the sun god). The twelve representations carved on the pillars represent the sun according to the twelve months.
<br><br>
After witnessing the 'Sabha Mandap' a visit to the Garbhagruha will definitely feel as a spiritual experience. The statue of the sun god no longer exists and the Suryavanshi Solanki’s have been scattered into the dust of history since a thousand years but still on the day of the Equinox, one can almost hear the chanting of the prayers, the aroma of incense, the tinkling of bells as the sharp, linear rays of the sun illuminate the inner core of life and light.

<br><br>
</p>
  </div>

</div>

<script>
// Get the modalseven
var modalseven = document.getElementById("myModalseven");
var btn = document.getElementById("myBtnseven");

// Get the <span> element that closes the modalseven
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modalseven 
btn.onclick = function() {
  modalseven.style.display = "block";
}

// When the user clicks on <span> (x), close the modalseven
span.onclick = function() {
  modalseven.style.display = "none";
}

// When the user clicks anywhere outside of the modalseven, close it
window.onclick = function(event) {
  if (event.target == modalseven) {
    modalseven.style.display = "none";
  }
}
</script>