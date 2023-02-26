<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    

    <link rel="stylesheet" href="css/style.css">
<style>
      .modalfour {
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

/* modalfour Content */
.modalfour-content {
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
    </style>


<div class="tile" style="background-image: url('img/Sasan-Banner.jpg');" id="myBtnfour">
    <div class="textWrapper" ><h2>Gir National Park</h2>
    </div>
  </div>


<!-- The modalfour -->
<div id="myModalfour" class="modalfour">

  <!-- modalfour content -->
  <div class="modalfour-content">
    <span class="close">&times;</span>
    <h1 style="font-size: 48px;">Gir National Park</h1><br>
    <p style="letter-spacing:1.5px;font-size: 14px;text-align:justify">
    
    About The Location: This forested, hilly, 1412-sq-km sanctuary about halfway between Veraval and Junagadh is the last refuge of the Asiatic lion (Panthera leopersica). Taking a safari through the thick, undisturbed forests is a joy – even without the added excitement of spotting lions, other wildlife and myriad bird species. Access to the sanctuary is by safari permit only, bookable in advance online.
    <br><br>

<a href="https://girlion.gujarat.gov.in/GirJungleTrailBooking.aspx">https://girlion.gujarat.gov.in/GirJungleTrailBooking.aspx</a>
<br><br>

If you miss out on a permit, your other option for lion encounters is at the Devalia Safari Park, a fenced-off part of the sanctuary where sightings are guaranteed but more stage-managed. The sanctuary’s 37 other mammal species, most of which have also increased in numbers, include dainty chital (spotted deer), sambar (large deer), nilgais (blue bull / large antelopes), chousinghas (four-horned antelopes), chinkaras (gazelles), crocodiles and rarely seen leopards. The park is a great destination for birders too, with more than 300 bird species, most of the residents. While the wildlife has been lucky, more than half the sanctuary’s human community of distinctively dressed maldhari (herders) have been resettled elsewhere, ostensibly because their cattle and buffalo were competing for food resources with the antelopes, deer, and gazelles, while also being preyed upon by the lions and leopards. About 1000 people still live in the park, however their livestock accounts for about a quarter of the lions diet.
<br><br>

Twelve kilometers west of Sasan Gir village at Devalia, within the sanctuary precincts, is the Gir Interpretation Zone, better known as simply Devalia. The 4.12-sq-km fenced-off compound is home to a cross-section of Gir wildlife. Chances of seeing lions and leopards here are guaranteed, with 45-minute bus tours departing along the trails hourly. You may also see foxes, mongoose, and blackbuck – the latter being lion fodder.
<br><br>

Brief History: The sanctuary was set up in 1965, and a 259-sq-km core area was declared as a national park in 1975. Since the late 1960s, lion numbers have increased from less than 200 to 674 (Census 2020).
<br><br>

Best time to visit:  in winter from November to March.


<br><br>
</p>
  </div>

</div>

<script>
// Get the modalfour
var modalfour = document.getElementById("myModalfour");
var btn = document.getElementById("myBtnfour");

// Get the <span> element that closes the modalfour
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modalfour 
btn.onclick = function() {
  modalfour.style.display = "block";
}

// When the user clicks on <span> (x), close the modalfour
span.onclick = function() {
  modalfour.style.display = "none";
}

// When the user clicks anywhere outside of the modalfour, close it
window.onclick = function(event) {
  if (event.target == modalfour) {
    modalfour.style.display = "none";
  }
}
</script>