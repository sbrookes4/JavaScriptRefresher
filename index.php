<!DOCTYPE html>

<!-- HEAD COMPONENT -->
<?php require 'COMPONENTS/HEAD/head.php'; ?>

<body>

<!-- HEADER COMPONENT -->
<?php require 'COMPONENTS/HEADER/header.php'; ?>

<!-- NAVBAR COMPONENT -->
<?php require 'COMPONENTS/NAVBAR/navbar.php'; ?>

<!-- for the sake of the JS review I just made one long php file; my standard practice is to component-ize everything as seen in the Portal.php and API.php page as well as my many other projects on brookesportfolio.com - Component-ization is the best way to do stuff -->
<div class="container-fluid p-0 mt-5">

  <div class="row">

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
      
       <h1 class="titleA"> JavaScript Refesher </h1>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3">Basic Reveal </h1>

	  <button class="ml-5 mb-3" onclick="Reveal()">Click to Reveal</button>

	  <p class="textA" id="textReveal"></p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3">Toggle Text </h1>

	  <button class="ml-5 mb-3" onclick="Toggle()">Click to Toggle</button>

	  <p class="textA" id="textToggle"></p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3">Defining let & const </h1>

	  <button class="ml-5 mb-3" onclick="LetConst()">Let and Const</button>

	  <p class="textA">
		<b>Let:</b> <span id="let"></span><br>
		<b>Const:</b> <span id="const"></span><br>
		<b>Const:</b> <span id="est"></span>
	  </p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3">Concatenations </h1>

	  <button class="ml-5 mb-3" onclick="OldMethod()">Old Concatenation</button>

	  <p id="concatOld" class="textA">

	  </p>

	  <button class="ml-5 mb-3" onclick="NewMethod()">New Concatenation</button>

	  <p id="concatNew" class="textA">

	  </p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3">String Methods </h1>

	  <button class="ml-5 mb-3" onclick="StringMethods()">String Methods</button>

	  <p class="textA">
		<b>Original Text:</b> <span id="string"></span><br>
		<b>Length:</b> <span id="length"></span><br>
		<b>Type:</b> <span id="type"></span><br>
		<b>Upper Case:</b> <span id="upper"></span><br>
		<b>Sub String [0 - 9]:</b> <span id="subString"></span><br>
		<b>Trimmed (for insertion):</b> <span id="trimmed"></span><br>

	  </p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3">Arrays </h1>

	  <button class="ml-5 mb-3" onclick="Arrays()">Arrays</button>

	  <p class="textA">
		<b>Array[2]:</b> <span id="index2"></span>
		<br>
		<br>

		<b><u>Available Colors</u></b><br>

		<span id="colorLister"></span><br>

		<b><u>Available Colors (after push method)</u></b><br>

		<span id="colorLister2"></span><br>

		<b><u>Colors Sorted:</u></b><br> <span id="sorted"></span><br>

	  </p>

	  <h1 class="titleA mb-3">Reverse String</h1>

	  <p class="textA">Alphabet</p>

	  <button class="ml-5 mb-3" onclick="Arrays2()">Reverse String</button>

	  <p id="reverseString" class="textA">

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3">Literals</h1>

	  <button class="ml-5 mb-3" onclick="Literals()">Get Product Info</button>

	  <p class="textA">

		<b><u>Product Information:</u></b>
		<br>
		<br>
		<b>Product Image:</b>

	  </p>

	  <div class="ml-5" id="prodImage"></div>

	  <p class="textA">

			<b>Year: </b></><span id="year"></span><br>
			<b>Product Type: </b></><span id="productType"></span><br>
			<b>Product Line: </b></><span id="productLine"></span><br>
			<b>Color: </b></><span id="color"></span><br>
			<b>Product Details: </b></><span id="details"></span><br>
			<b>Floor Location: </b></><span id="floor"></span><br>
			<b>Room Location: </b></><span id="room"></span><br>
			<b>Rack Location: </b></><span id="rack"></span><br>
	  </p>

    </div>

	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3">Constructors</h1>

	  <button class="ml-5 mb-3" onclick="Constructor()">Get Product Info (Constructor)</button>

	  <p class="textA">

		<b><u>Product Information:</u></b>
		<br>
		<br>
		<b>Product Image:</b>

	  </p>

	  <div class="ml-5" id="prodImageConstructor"></div>

	  <p class="textA">

			<b>Year: </b></><span id="yearConstructor"></span><br>
			<b>Product Type: </b></><span id="productTypeConstructor"></span><br>
			<b>Product Line: </b></><span id="productLineConstructor"></span><br>
			<b>Color: </b></><span id="colorConstructor"></span><br>
			<b>Product Details: </b></><span id="detailsConstructor"></span><br>
			<b>Floor Location: </b></><span id="floorConstructor"></span><br>
			<b>Room Location: </b></><span id="roomConstructor"></span><br>
			<b>Rack Location: </b></><span id="rackConstructor"></span><br>
	  </p>

	</div>




  </div><!-- ROW CLOSER -->

</div><!-- CONTAINER CLOSER -->

<!-- FOOTER COMPONENT -->
<?php require 'COMPONENTS/FOOTER/footer.php'; ?>

<script src="JS/index.js"></script>

</body>

</html>