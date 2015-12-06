<!doctype html>
<html>
<head>
  <title>Force for Good</title>
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
          <li><a href='index.html'>Homepage</a></li>
          <li><a href='volunteering.php'>Volunteering</a></li>
          <li><a href='opportunities.php'>Opportunities</a></li>
          <li><a href='contact.php'>Contact</a></li>
          <li><a href='events.php'>Events</a></li>
          <li class='active'><a href='register.php'>Register</a></li>
          <li><a href='userlogin.php'>Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <form method="post" class="form-horizontal" action="db/registercode.php">
        <div class="form-group">
        <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="username" />
            </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label">Password</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="UserPassword" />
            </div>
        </div>

		<div class="form-group">
        <label class="col-sm-3 control-label">E-Mail</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="UserEmail" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
				<button type="submit" class="btn btn-success" name="signup" value="Register">Register</button>
			</div>
        </div>
    </form>
</body>
</html>
