<?php
include '\db\init.php';

global $session;
$session = false;

if(isset($_SESSION['userID']))
{
    $session = true;
} else {
    $session = false;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Force for Good</title>
  <link rel="stylesheet" href="styledrop.css">
  <link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.css">
</head>
<body>
  <!-- Static navbar -->
  <nav class='navbar navbar-default'>
    <div class='container-fluid'>
      <div class='navbar-header'>
        <a class='navbar-brand' href='#'></a>
      </div>
	  <div id='navbar' class='navbar-collapse collapse'>
        <ul class='nav navbar-nav'>
          <li class='active'><a href='index.html'>Homepage</a></li>
          <li><a href='volunteering.php'>Volunteering</a></li>
          <li><a href='opportunities.php'>Opportunities</a></li>
          <li><a href='contact.php'>Contact</a></li>
          <li><a href='events.php'>Events</a></li>

          <?php if ($session===true) {
             echo "<li><a href='register.php'>Register</a></li>";
             echo "<li><a href='userlogin.php'>Login</a></li>";
          } else {
             echo "<li><a href='profile.php'>Profile</a></li>";
             echo "<li><a href='logout.php'>Logout</a></li>";
          } ?>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <div class='jumbotron'>
	<div class='container'>
		<h1>Force for Good</h1>
		<p>Here at Force for Good we believe that everyone should be contributing to their community wherever they can
	 and it is this belief that has driven us to do something proactive about it. Our objective is to get everyone involved
	 in community projects and initiatives to make their area a nicer place for everyone. But we're not only focused on the local area
	 our aim is to get a national, or even global, network of companies and organisations running volunteering events that users
	 of our site can sign up for, attend and make a real difference in their area.</p>
		<p><a class="btn btn-primary btn-lg" href="volunteering.php">Learn More</a></p>
    <p><a class="btn btn-primary btn-lg" href="rank.php">Feel The Force</a></p>
	</div>
  </div>
</body>
</html>
