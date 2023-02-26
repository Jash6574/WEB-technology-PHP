<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    

    <link rel="stylesheet" href="css/style.css">
<style>
      .modalthree {
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

/* modalthree Content */
.modalthree-content {
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


<div class="tile" style="background-image: url('img/pavagadhtemplefrontview.jpg');" id="myBtnthree">
    <div class="textWrapper" ><h2>Pavagadh Hill Kalika Mata Temple</h2>
    </div>
  </div>


<!-- The modalthree -->
<div id="myModalthree" class="modalthree">

  <!-- modalthree content -->
  <div class="modalthree-content">
    <span class="close">&times;</span>
    <h1 style="font-size: 48px;">Pavagadh Hill Kalika Mata Temple</h1><br>
    <p style="letter-spacing:1.5px;font-size: 14px;text-align:justify">
    
About The Location: At the summit of Pavagadh hill, 800 m above sea level, is the temple to Mother Kali, which is the oldest in the area, dating from the 10th-11th centuries. Hindu pilgrims were coming to visit this temple from long before the development of Champaner as a major city, and they continued for hundreds of years after its decline, right up to the present day. To reach the temple at the summit is about a 5 km walk along a jungle footpath to the top of the hill; otherwise, there is a cable car that will haul you to the summit from about the midway point, which is the last place accessible by road. The temple has large fortifications and an open chowk in front, with two altars for sacrifices, and an array of lights for special occasions. The idol of Kalika Mata in the inner sanctum is only the head, the mukhwato, painted in red. Also present are full idols of Mahakali and the yantras of Bahuchara. The temple is open from very early to quite late, to accommodate pilgrims arriving at all hours. The Machi Haveli is a rest house available for pilgrims.

<br><br>
</p>
  </div>

</div>

<script>
// Get the modalthree
var modalthree = document.getElementById("myModalthree");
var btn = document.getElementById("myBtnthree");

// Get the <span> element that closes the modalthree
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modalthree 
btn.onclick = function() {
  modalthree.style.display = "block";
}

// When the user clicks on <span> (x), close the modalthree
span.onclick = function() {
  modalthree.style.display = "none";
}

// When the user clicks anywhere outside of the modalthree, close it
window.onclick = function(event) {
  if (event.target == modalthree) {
    modalthree.style.display = "none";
  }
}
</script>