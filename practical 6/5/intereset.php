<style>
  :root {
    --text-light: rgba(255, 255, 255, 0.6);
    --text-lighter: rgba(255, 255, 255, 0.9);
    --spacing-s: 8px;
    --spacing-m: 16px;
    --spacing-l: 24px;
    --spacing-xl: 32px;
    --spacing-xxl: 64px;
    --width-container: 1200px;
  }



  .hero-section {
    align-items: flex-start;
    display: flex;
    min-height: 100%;
    justify-content: center;
    padding: var(--spacing-xl) var(--spacing-l);
  }

  .card-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-column-gap: var(--spacing-l);
    grid-row-gap: var(--spacing-l);
    max-width: var(--width-container);
    width: 100%;
  }

  @media(min-width: 540px) {
    .card-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media(min-width: 960px) {
    .card-grid {
      grid-template-columns: repeat(4, 1fr);
    }
  }

  .card {
    list-style: none;
    position: relative;
  }

  .card:before {
    content: '';
    display: block;
    padding-bottom: 150%;
    width: 100%;
  }

  .card__background {
    background-size: cover;
    background-position: center;
    border-radius: var(--spacing-l);
    bottom: 0;
    filter: brightness(0.75) saturate(1.2) contrast(0.85);
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform-origin: center;
    /* trsnsform: scale(1) translateZ(0); */
    transition:
      filter 200ms linear,
      transform 200ms linear;
  }

  .card:hover .card__background {
    transform: scale(1.05) translateZ(0);
  }

  .card-grid:hover>.card:not(:hover) .card__background {
    filter: brightness(0.5) saturate(0) contrast(1.2) blur(0px);
  }

  .card__content {
    left: 0;
    padding: var(--spacing-l);
    position: absolute;
    top: 0;
  }

  .card__category {
    color: var(--text-light);
    font-size: 0.9rem;
    margin-bottom: var(--spacing-s);
    text-transform: uppercase;
  }

  .card__heading {
    color: var(--text-lighter);
    font-size: 1.9rem;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
    line-height: 1.4;
    word-spacing: 100vw;
  }




  /* pop up css   */


  .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    z-index: 1;
    overflow-y: auto;
  }

  .overlay:target {
    visibility: visible;
    opacity: 1;
  }

  .popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 90%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
  }

  .popup .close {
    position: absolute;
    top: 0px;
    right: 12px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }

  .popup .content {
    max-height: 30%;
    overflow: auto;
    color: #333;
    letter-spacing: 1.5px;
    font-size: 14px;
    text-align: justify;

  }

  @media screen and (max-width: 700px) {
    .box {
      width: 70%;
    }

    .popup {
      width: 70%;
    }
  }



  /* grid */

  .grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 10px;
    align-items: stretch;
    justify-items: center;
  }

  .grid img {
    height: auto;
    width: 100%;
    border-radius: 25px;
  }


  figcaption {
    margin-top: -52px;
    margin-left: 20px;
    color: white;
    background: rgba(241, 235, 235, 0.1);
    backdrop-filter: blur(10px);
    width: fit-content;
    padding: 2px;
    font-weight: bold;

  }
</style>

<section class="hero-section">
  <div class="card-grid">
    <a class="card" href="#popup4">
      <div class="card__background" style="background-image: url(img/top-attractions-2.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Religious Sites</h3>
      </div>
    </a>

    <div id="popup4" class="overlay">
      <div class="popup">
        <h1 style="font-size:34px">
        Religious Sites
        </h1>
        <a class="close" href="">&times;</a>
        <div class="content">



        The whole state of Gujarat is highly opulent with godly places of pilgrimage and holy temples Ambaji, Somnath, Dwarka, Palitana, Girnar, and Dakor are the chief holy places of Gujarat. Out of 51 "Aady Shakti Pith" the foremost "Aady Shakti Pith" of Ambaji, out of the 12 jyotirlings, the foremost jyotirling of Somnath, out of the "Sat puri", the foremost "Dwarka Puri", one of the "char dham", "Dwarka dham", the world renown biggest hindu temple, "Palitana" as well as Dakor, Girnar, and other religious places are situated in the state of Gujarat.<br><br>
          <br>



          <main class="grid">

            <img src="img/Somnath-Temple-Thumbnail.jpg">
            <img src="img/Dwarkadhish-Temple-Thumbnail.jpg">
            <img src="img/Nageshwar-Jyotirlinga-Thumbnail.jpg">
            <img src="img/pavagadhtempletopview.jpg">
            <img src="img/Ambaji-Temple-Thumbnail.jpg">
            <img src="img/Bahuchar-Mata-Thumbnail.jpg">
            <img src="img/Nishkalank-Mahadev-Thumbnail.jpg">
            <img src="img/Hutheesing-Jain-Temple-Thumbnail.jpg">
            <img src="img/Siddi-Sayed-Mosque-Thumbnail1.jpg">
            <img src="img/Palitana-And-Shatrunjaya-Hill-Thumbnail.jpg">
            <img src="img/Bhadreshwar-Thumbnail.jpg">
            <img src="img/Khodiyar-Mataji-Temple-Thumbnail.jpg">
            <img src="img/Koteshwar-Mahadev-Temple-Thumbnail.jpg">
            <img src="img/Rukmini-Temple-Thumbnail.jpg">
            <img src="img/Akshardham-Temple-Thumbnail.jpg">
            <img src="img/Narayan-Sarovar-Thumbnail.jpg">
            <img src="img/Ranchodrai-Temple,-Dakor-Thumbnail.jpg">
            <img src="img/Sudama-Mandir-Thumbnail.jpg">
            <img src="img/Taranga-hill-Thumbnail.jpg">
            <img src="img/Swaminarayan-Temple-Thumbnail.jpg">
            <img src="img/Adalaj-Trimandir-Thumbnail.jpg">
            <img src="img/Hastagiri-Jain-Tirth-Thumbnail.jpg">
            <img src="img/Tulsishyam-1.jpg">
            <img src="img/Takhteshwar-Temple-Thumbnail.jpg">
            <img src="img/Galteshwar-Temple-Thumbnail.jpg">
            <img src="img/Udvada-Parsi,-Udvada-Thumbnail.jpg">
            <img src="img/Shree-Kashtabhanjan-Dev-Hanumanji-Mandir-Thumbnail.jpg">
            <img src="img/BAPS-Sri-Swaminarayan-Mandir-Thumbnail.jpg">
            <img src="img/RamKrishna-Mission-Thumbnail.jpg">
            <img src="img/Triveni-Sangam-Thumbnail.jpg">
            <img src="img/Kabirvad-Thumbnail.jpg">
            <img src="img/Kalo-Dungar-Thumbnail.jpg">
            <img src="img/Damodar-Kund-Thumbnail.jpg">
            <img src="img/Panchasara-Parshwanath-Jain-Derasar-Thumbnail.jpg">
            <img src="img/Jama-(Jumma)-Masjid-Thumbnail.jpg">
            <img src="img/Sarkhej-Roza-Thumbnail.jpg">

          </main>
          <br><br>


          


        </div>
      </div>
    </div>

    <a class="card" href="#popup3">
      <div class="card__background" style="background-image: url(img/top-attractions-5.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Heritage Sites</h3>
      </div>
    </a>

    <div id="popup3" class="overlay">
      <div class="popup">
        <h1 style="font-size:34px">
        Heritage Sites
        </h1>
        <a class="close" href="">&times;</a>
        <div class="content">



        Terms like history, heritages and monuments are synonymous to Gujarat. The glorious Gujarat is home to many ancient city ruins, palaces, forts and tomb, which stands proudly bearing testimony to the golden era of dynasties. Since its inception, landscapes of Gujarat are ruled by rulers of many dynasties, invaders and sellers. Gujarat's past is a part of its current terrains, evidenced by the ancient and historical ruins scattered across the country. In Gujarat, one can see the massive forts, charmings havelis, stunning stepwells and many other historical sites that showcase some of the relics of the land.
          <br><br>
          <br>

         
          <h3>
            Fort
          </h3>

          <br>


          <main class="grid">

            <img src="img/Bhujiyo-Kotho1.jpg">
            <img src="img/Surat-Castle-Banner.jpg">
            <img src="img/Lakhpat-Fort-Thumbnail.jpg">
            <img src="img/Uparkot-Fort-Thumbnail.jpg">
            <img src="img/Idar-Fort-Thumbnail.jpg">
            <img src="img/Bhadra-Fort-Thumbnail.jpg">

          </main>
          <br><br>


          <h3>Palace
          </h3><br>
          <main class="grid">
            <img src="img/Vijay-Vilas-Palace-Kutch-Thumbnail.jpg">
            <img src="img/Laxmi-Vilas-Palace-Thumbnail.jpg">
            <img src="img/Nilambag-palace-Thumbnail.jpg">
            <img src="img/Royal-Oasis-Wankaner-Thumbnail.jpg">
            <img src="img/Riverside-Palace-Thumbnail.jpg">
            <img src="img/Khirasara-Palace-Thumbnail.jpg">
            <img src="img/Orchard-Palace-Thumbnail.jpg">
            <img src="img/Dowlat-Vilas-Palace-Thumbnail.jpg">
          </main>
          <br><br>

          <h3>
            Stepwell
          </h3>
          <br>
          <main class="grid">
            <img src="img/Rani-Ki-Vav-banner.jpg">
            <img src="img/Adalaj-ni-Vav-banner.jpg">
            <img src="img/Adi-Kadi-Vav-banner.jpg">
            <img src="img/Bai-Harir-ni-Vav-banner.jpg">
          </main>
          <br><br>

          <h3>
            Heritage Walk
          </h3>
          
          <br>
          <main class="grid">
            <img src="img/Heritage-Walk-Thumbnail1.jpg">
            <img src="img/Junagadh-Heritage-Thumbnail.png">
          </main>
          <br><br>

          <h3>
            Monuments
          </h3>
          
          <br>
          <main class="grid">
            <img src="img/Sun-Temple-Thumbnail.jpg">
            <img src="img/Mahabat-Maqbara-.jpg">
            <img src="img/Kirti-Mandir-Thumbnail.jpg">
            <img src="img/Badshah-no-Haziro-Thumbnail.jpg">
            <img src="img/Citadel-sat-kaman-banner.jpg">
            <img src="img/Hutheesing-Jain-Temple-Thumbnail.jpg">
            <img src="img/Siddi-Sayed-Mosque-Thumbnail1.jpg">
            <img src="img/Qutubuddin-Hajiro-Thumbnail.jpg">
            <img src="img/Bhadreshwar-Thumbnail.jpg">
            <img src="img/Aaina-Mahal-2.jpg">
            <img src="img/Prag-Mahal-Thumbnail.jpg">
            <img src="img/Rajkumar-College-Thumbnail.jpg">
            <img src="img/Khambalida-Caves-Thumbnail.jpg">
            <img src="img/Khambaliya-Gate-Thumbnail.jpg">
            <img src="img/Dutch-Cemetery-Thumbnail.jpg">
            <img src="img/English-Cemetery-Thumbnail.jpg">
            <img src="img/Royal-Chhatardis-Thumbnail.jpg">
            <img src="img/Ashoka-Rock-Edict.jpg">
            <img src="img/Baba-Pyare-Caves-Thumbnail.jpg">
            <img src="img/Buddhist-Caves-of-Khapra-Kodiya-Thumbnail.jpg">
            <img src="img/Uparkot-Fort-Thumbnail.jpg">
            <img src="img/Dev-ni-Mori-Thumbnail.jpg">
            <img src="img/Taranga-caves-Thumbnail.jpg">
            <img src="img/Kirti-Toran-Thumbnail.jpg">
            <img src="img/Jhulta-Minara-Thumbnail.jpg">
            <img src="img/Ahmad-Shah’s-Mosque-Thumbnail.jpg">
            <img src="img/Jama-(Jumma)-Masjid-Thumbnail.jpg">
            <img src="img/Sarkhej-Roza-Thumbnail.jpg">
          </main>
          <br><br>

          <br>


        </div>
      </div>
    </div>

    <a class="card" href="#popup2">
      <div class="card__background" style="background-image: url(img/beach.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Beaches</h3>
      </div>
    </a>

    <div id="popup2" class="overlay">
      <div class="popup">
        <h1 style="font-size:34px">
          Beaches
        </h1>
        <a class="close" href="">&times;</a>
        <div class="content">



        Boasting a 1600 km stretch, Gujarat's shoreline is the longest among India's nine seaside states' shores.If you have only been a witness to the intricate and historic landmarks of Gujarat, you are yet to explore the best through the expanse of Arabian Sea in the state.
          <br><br>
          What makes these beaches even more beautiful is the fragrance of incense sticks blended in the breeze,coming from across the temples situated on these. The Somnath temple and Koteshwar Temple are instances of such amazing shore-side temples. The wind blows through the trees onshore, tapping and clicking the leaves together, while the sound of chanting mantras float from the nearby pilgrimage destinations.
          <br><br>

          As happening as the onshore trails seem, the underwater adventures in Gujarat are nonetheless stunning! Home to the first National Marine Park of India on the Jamnagar coast, it takes its explorers on an unparalleled aqua tour. With about 53 coral species, it features 42 hard corals and 11 soft corals.Looking forward to exploring it?
          <br><br>

          The ideal time to visit them is between November to February. Not to miss are the yellow and white shades of sand by these beaches, and the adventurous experiences of Water Scooting, Para Sailing that stays with you long after you visit these. <br><br>
          
          So, if you're the one who'd like to discover Gujarat through the Diving Goggles, for a relaxing getaway, head to these beaches on your next vacay!
         
          <br>
          <br>

        


          <h3>
            Beaches
          </h3>

          <br>
          



          <main class="grid">

            <!-- <img src="img/shivrajpur-beac.jpg"> -->
            <img src="img/Madhavpur-Beach-Thumbnail.jpg">
            <img src="img/Tithal-Beach-1.jpg">
            <img src="img/Mandvi-Beach-thumbnail.jpg">
            <!-- <img src="img/Pingleshwar1.jpg"> -->
            <img src="img/Dumas-Beach-thumbnail.jpg">
            <img src="img/Suvali-Beach-thumbnail.jpg">
            <img src="img/dandi beach.jpg">
            <img src="img/Ahmedpur Mandvi.jpg">
            <img src="img/Okha-Madhi-Beach-thumbnail.jpg">

          </main>
          <br><br>


          
          <br>


        </div>
      </div>
    </div>


    <a class="card" href="#popup1">
      <div class="card__background" style="background-image: url(img/cuisine.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Cuisine</h3>
      </div>
    </a>

    <div id="popup1" class="overlay">
      <div class="popup">
        <h1 style="font-size:34px">
          Cuisine
        </h1>
        <a class="close" href="">&times;</a>
        <div class="content">



          “Surat Nu Jaman Ane Kashi Nu Maran” a popular saying in Gujarati which means dining at Surat and dying at Varanasi, is the way to heaven. One of the thrills of traveling to Gujarat is its multi cuisine. Perhaps the best way to know a state is to cut to the heart of the extraordinary culture of Gujarat is by exploring its cuisine.
          <br><br>
          The people of Gujarat have perfected the art of vegetarian cooking and their cuisine is a delectable and mouth watering. To taste the excellent vegetarian Gujarati cuisine, is to have a Thali Meal – the ultimate delightful vegetarian fare. The traditional Gujarati Thali is one of the best ways to know the Gujarati Cuisine. Saurashtra’s typical seasonings – mustard seed, turmeric, pounded red chillies, cumin and coriander – which flavour Gujarat’s distinctive vegetarian cuisine.
          <br><br>

          There are also seasonal specialties – Aamraas (Mango Pool) is commonly served in summer while Undhiyu which has roast vegetables and Muthias (veg kebabs) is characteristically had in January.
          <br><br>

          Besides vegetarian dishes, the Muslim community, the tribal groups like Bohras and Khojas offers special non-vegetarian cuisine. And also Saurashtra’s garlic spice mixture – a combination of garlic, red chillies and salt pounded together, which adds extra peps to lot of Gujarati foods. Many Gujarati dishes are distinctively sweet, salty and spicy at the same time.
          <br><br>
          <h3>
            Gujarati Thali:
          </h3>
          A Gujarati thali typically comprises of one or two steamed or fried snacks called farsans, a green vegetable, a tuber or a gourd shaak (shaaks are main courses with vegetables and spices mixed together into a curry or a spicy dry dish), a kathol (braised pulses like beans, chickpea or dry peas), one or more yogurt dishes like dahi, kadhi (yogurt and pulses soup), raita or sweet shrikhand, rice or khichdi, daal usually toor dal, and sweets like halwas, basundi or shrikhand. Accompaniments include sweet, sour and spicy chutneys, pickles, ghee and a salad of chopped vegetables served raw or may be steamed in spices. Much detailing goes into creating a balance of tastes and textures - you could have coarse, grainy, granular, smooth, uniform, dry and wet dishes on the same platter, the sweetness, bitterness, sourness and heat of each main course would vary between dishes, and the thali has more colours than a rainbow – the yellow of turmeric, the whiteness of dairy products, the redness of tomatos, the green of leafy vegetables, the brown of pulses, and the colours of various spices, relishes and salad vegetables, are harmoniously part of a single thali.
          <br><br>
          The breads eaten with a thali would include thick and coarse bajra rotla, thin unleavened wheat rotlis, thick and crisp whole wheat flour rotis called bakhris, parathas, savoury griddle bread called the thepla, deep-fried puris, among others. There are many variations like methi thepla or masala puri within these breads. As Gujaratis are globe-trotters, with a large Gujarati Diaspora overseas and around India as well as being great travellers on holiday or pilgrimage around the world, there are many Gujarati farsans, snacks and mini-meals that are designed to travel and keep well – for instance khakras are crisp wafer-like rotis made from wheat, cornflour or lentils that can be carried and eaten with vegetables or accompaniments or dhebras made from a mix of flours can travel better than rotlis.
          <br><br>
          <br>

          <img src="img/thali-banner.jpg" style="height:auto;width:50%;border-radius: 25px;">
          <figcaption style="
          margin-top:-32px;margin-left:20px;color:white;
            background: rgba(241, 235, 235, 0.1);
            backdrop-filter: blur(10px);width:fit-content;padding:2px;font-weight:bold
          ">Gujarati Thali</figcaption>
          <br><br>


          <h3>
            Farsan:
          </h3>
          Intrinsic to a traditional Gujarati meal, dal, shaak and kathol hold the promise of a bounty of flavours, aromas and a unique eating experience. The balance of colours and textures of the main course is richly enhanced by the side portions of the pickle and salad and some spiced buttermilk

          <br>
          <br>



          <main class="grid">

            <img src="img/Khandvi.jpg">
            <img src="img/Handhwo (2).png">
            <img src="img/Khaman (1).png">
            <img src="img/khakhra1.jpg">
            <img src="img/Fafda-1.jpg">
            <img src="img/gathiya-min.jpg">
            <img src="img/Patra-banner.jpg ">
            <img src="img/khichu-banner(1).jpg">

          </main>
          <br><br>


          <h3>Dal, Shak & Kathol
          </h3>
          Intrinsic to a traditional Gujarati meal, dal, shaak and kathol holds the promise of a bounty of flavours, aromas and a unique eating experience. The balance of colours and textures of the main course is richly enhanced by the side portions of the pickle and salad and some spiced buttermilk
          <br><br>
          <main class="grid">
            <img src="img/0099_DalFry_WEB.jpg">
            <img src="img/undhiyu2-min.jpeg">
          </main>
          <br><br>

          <h3>
            The Millets (Khichdi and Breads)
          </h3>From the many delightful avatars of the humble khichdi, that onepot tasty, wholesome, easy-to make meal — to the range of flours and stuffings that go into making those many variants of breads, the Gujarati kitchen is as versatile and creative as it can get for these daily staples for meals or snacks
          <br>
          <br>
          <main class="grid">
            <img src="img/thepla-banner.jpg">
            <img src="img/rotlo-banner.jpg">
            <img src="img/juwar-banner.jpg">
            <img src="img/Ragi-Bread-Banner.jpg">
          </main>
          <br><br>

          <h3>
            Festival & Seasonal Fare
          </h3>
          From the elaborately prepared Undhiyu and the five-veg medley Panchkutiyu Shaak, from the crunchy Cholafali to the festive Ghooghra — Gujarat’s culinary calendar is adorned with a fabulous range of seasonal and festive dishes that engage the palate and delight the heart
          <br>
          <br>
          <main class="grid">
            <img src="img/aamras-banner.jpg">
            <img src="img/ghughra-banner.jpg">
          </main>
          <br><br>

          <h3>
            Mishthaan
          </h3>
          Rather than wait impatiently for its arrival as the last course, the Gujarati palate has long become accustomed to savouring the delights of mishthaan or dessert as an integral part of its main meal on the thali. So, be it the light-as-air Shrikhand or summer favourite Keri no Ras… there’s no deserting the Gujarati mishthaan anytime soon
          <br>
          <br>
          <main class="grid">
            <img src="img/Basundi (1).png">
            <img src="img/shrikhand2-min.jpg">
            <img src="img/lapsi-banner.jpg">
          </main>
          <br><br>

          </p>
          <br>


        </div>
      </div>
    </div>

    <div>
</section>