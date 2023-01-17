<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Poppins';

}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: grey;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 15px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 40px 30px;
  color:white;
  
  background: rgba(241, 235, 235, 0.07);
  backdrop-filter: blur(10px);
  position: relative;
  border-radius: 6px;
  
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 70%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
h1{
  letter-spacing: 5px;
}
</style>
</head>
<body style=" background: rgb(0,0,36);
background: linear-gradient(333deg, rgba(0,0,36,1) 0%, rgba(5,0,86,1) 28%, rgba(0,70,108,1) 53%, rgba(25,169,174,1) 100%);" no-repeat;>

<div class="timeline">
  <div class="container left">
    <div class="content">
      <h1 >Top Destinations in Gujarat</h1 >
      
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h1 >Fairs and Festivals of Gujarat</h1 >
      
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h1 >See Gujarat As Your Interest</h1 >
      
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h1 >Explore Gujarat</h1 >
      
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h1 >See, Hear and Visit</h1 >
      
    </div>
  </div>
  
</div>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
