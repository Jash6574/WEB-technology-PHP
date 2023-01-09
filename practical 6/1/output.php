<link rel="stylesheet" href="style.css" />

<style>
  label {
    font-weight: 650;
  }
</style>

<section class="container">
  <header>User Details</header><br>

  <label>First Name: </label>
  <?php echo $_POST["fName"];?><br>

  <label>Middel Name: </label>
  <?php echo $_POST["mName"];?><br>

  <label>Last Name: </label>
  <?php echo $_POST["lName"];?><br>

  <label>Phone Number: </label>
  <?php echo $_POST["phoneNo"];?><br>

  <label>Email Address: </label>
  <?php echo $_POST["emailAddress"];?><br>

  <label>Birth Date: </label>
  <?php echo $_POST["birthDate"];?><br>

  <label>Gender: </label>
  <?php echo $_POST["gender"];?><br>

  <label>Address: </label>
  <?php echo $_POST["address"];?><br>

  <label>Hobby: </label>
  <?php echo $_POST["hobby"];?><br>

</section>