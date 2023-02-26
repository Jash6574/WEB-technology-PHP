<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    

    <link rel="stylesheet" href="css/style.css">
<style>
      .modaleight {
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

/* modaleight Content */
.modaleight-content {
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


<div class="tile" style="background-image: url('img/vadnagar-banner.jpg');" id="myBtneight">
    <div class="textWrapper" ><h2>Vadnagar</h2>
    </div>
  </div>


<!-- The modaleight -->
<div id="myModaleight" class="modaleight">

  <!-- modaleight content -->
  <div class="modaleight-content">
    <span class="close">&times;</span>
    <h1 style="font-size: 48px;">Vadnagar</h1><br>
    <p style="letter-spacing:1.5px;font-size: 14px;text-align:justify">
    
    About The Location: As you wander through the streets of Vadnagar, your experience of time may no longer be linear, as eras merge and cycles connect. You may sense 4500 hundred years of history trapped in the pottery fragments, textiles, ornaments and tools left behind by the agricultural communities that had settled here.
    <br><br>

You may touch the traces of the 12th century, wedged between the interlocking stones of the step embankments around the lake or carved in the torans left behind by the Solanki dynasty. You may hear the echoes of glory of bhavai folk theater in the Government Museum, and if fortunate, even catch an impromptu performance in the streets. Also etched in Vadnagar's memory are two of Gujarat's greatest poets, Dayaram and Narsinh Mehta, famous novelists like Govardhanram Tripathi, foremost musicians like Kaumudi Munshi, and innumerable other artists and performers. Out of this soil that nurtured such creativity emerged the Tana Riri Music Festival, to pay homage to the Nagar Brahmin sisters Tana and Riri and their unforgettable sacrifice.
<br><br>

The presence Buddhist has also got surfaced with a sand stone broken head of Buddha. This should be belonging to 2nd century AD which is depicting a scene of a monkey offering honey to Buddha, black polished ware-shreds inscribed with Brahmi legends like Devshririshi, Shakasya and Dhamma. These have been founded from the Monastery at Vadnagar. The Buddhist Monastery which got surfaced within the fortified area of Vadnagar, had two votive stupas and open central courtyard around which initially nine cells were constructed. This arrangement of cells around the central courtyard makes a pattern like Swastika.
<br><br>

In its course, time has penetrated and gathered some fragments of history and lost some others. Welcome to Vadnagar, leave behind your own footsteps in the sands of time.
<br><br>
Background:Vadnagar is mentioned often in the Puranas and even in the travelogue of the great Chinese traveler, Hieu-en-Tsang (7th century), as a rich and flourishing town. The inscription on the Arjun Bari Gate shows that King Kumarpal fortified the city in 1152 AD. Some other names attributed to Vadnagar in history are Chamatkarpur, Anandpur, Snehpur and Vimalpur.
<br><br>

The Tana and Riri Samadhi, south of town, honors the courage of two sisters, Tana and Riri. Their story takes place in the 16th century, when Akbar’s court flourished with art and music. Tansen, considered to be a most remarkable musician, was once ordered by his King to sing the Deepak (meaning, sound of light) raga . Despite knowing that it would produce excessive heat and cause him to suffer an acute fever, Tansen followed the Emperor’s command. His guru Ramdas adviced him that the only way to heal him was to hear somebody sing Megh Malhar raga, which would produce rain and cure his fever. He heard of the sisters Tana and Riri who could sing this raga, and obtained permission from their father to do so and cure him. When Akbar heard of this he wanted the girls to perform in his court. As Brahmins, it was against their upbringing to do so, and they refused. When Akbar sent his forces to Vadnagar to convince them to sing, the sisters committed suicide to avert any hardship to their town or the emperor. Today there are two small temple-like structures that are built as their memorial, and a music festival is celebrated every year in the memory of these sisters.<br><br>

</p>
  </div>

</div>

<script>
// Get the modaleight
var modaleight = document.getElementById("myModaleight");
var btn = document.getElementById("myBtneight");

// Get the <span> element that closes the modaleight
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modaleight 
btn.onclick = function() {
  modaleight.style.display = "block";
}

// When the user clicks on <span> (x), close the modaleight
span.onclick = function() {
  modaleight.style.display = "none";
}

// When the user clicks anywhere outside of the modaleight, close it
window.onclick = function(event) {
  if (event.target == modaleight) {
    modaleight.style.display = "none";
  }
}
</script>