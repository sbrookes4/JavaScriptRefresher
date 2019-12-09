<!DOCTYPE html>

<!-- HEAD COMPONENT -->
<?php require 'COMPONENTS/HEAD/head.php'; ?>

<body>

<!-- HEADER COMPONENT -->
<?php require 'COMPONENTS/HEADER/header.php'; ?>

<!-- NAVBAR COMPONENT -->
<?php require 'COMPONENTS/NAVBAR/navbar.php'; ?>

<div class="container-fluid p-0 mt-5">

  <div class="row">

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
      
       <h1 class="titleA"> Sign Up Page Demo </h1>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">

		<h1 class="titleA"> Leslie Jordan Portal Sign Up</h1>

		<form class="ml-5" action="" method="POST">

			<label class="labelStyle">First Name</label><br>
			<input class="inputBox" type="text" name="firstName"><br>
			<br>
			<label class="labelStyle">Last Name</label><br>
			<input class="inputBox" type="text" name="lastName"><br>
			<br>
			<label class="labelStyle">Email</label><br>
			<input class="inputBox" type="email" name="email"><br>
			<br>
			<label class="labelStyle">Password</label><br>
			<input class="inputBox" type="password" name="password"><br>
			<br>
			<label class="labelStyle">Retype Password</label><br>
			<input class="inputBox" type="passwordRetype" name=""><br>
			<br>
			<button type="submit" value="RegisterSubmit">Submit</button>			

		</form>

    </div>

  </div><!-- ROW CLOSER -->

</div><!-- CONTAINER CLOSER -->

<!-- FOOTER COMPONENT -->
<?php require 'COMPONENTS/FOOTER/footer.php'; ?>

<script src="JS/index.js"></script>

</body>

</html>