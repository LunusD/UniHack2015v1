<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.css">
<link rel="stylesheet" href="styledrop.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<head>
  <title>Force for Good</title>
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
          <li><a href='index.html'>Homepage</a></li>
          <li><a href='volunteering.php'>Volunteering</a></li>
          <li class='active'><a href='opportunities.php'>Opportunities</a></li>
          <li><a href='contact.php'>Contact</a></li>
          <li><a href='events.php'>Events</a></li>
          <li><a href='register.php'>Register</a></li>
          <li><a href='userlogin.php'>Login</a></li>
        </ul>
      </div>
    </div>
    </nav>

    <span class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
        Opportunities In Force
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu dropdown-menu-opportunities" aria-labelledby="dropdownMenu1">
        <li><a href="opportunities.php?difficulty=1">Easy</a></li>
        <li><a href="opportunities.php?difficulty=2">Medium</a></li>
        <li><a href="opportunities.php?difficulty=3">Hard</a></li>
        <li role="separator" class="divider"></li>
        <li><a href='contact.php'>Create An Opportunity</a></li>
      </ul>
    </span>

      <span class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
        Something else
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu dropdown-menu-opportunities" aria-labelledby="dropdownMenu2">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </span>

      <span class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown">
        Location
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu dropdown-menu-opportunities" aria-labelledby="dropdownMenu3">
        <li><a href="opportunities.php?dist=5">0-5 miles</a></li>
        <li><a href="opportunities.php?dist=10">5-10 miles</a></li>
        <li><a href="opportunities.php?dist=15">10+ miles</a></li>
      </ul>

        </div>
      </span>

</body>
</html>
