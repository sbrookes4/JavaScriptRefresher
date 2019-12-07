﻿<!DOCTYPE html>

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
      
       <h1 class="titleA"> JavaScript Refesher </h1>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3"> Basic Reveal </h1>

	  <button class="ml-5 mb-3" onclick="Reveal()">Click to Reveal</button>

	  <p class="textA" id="textReveal"></p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3"> Toggle Text </h1>

	  <button class="ml-5 mb-3" onclick="Toggle()">Click to Toggle</button>

	  <p class="textA" id="textToggle"></p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3"> Defining let & const </h1>

	  <button class="ml-5 mb-3" onclick="LetConst()">Let and Const</button>

	  <p class="textA">
		<b>Let:</b> <span id="let"></span><br>
		<b>Const:</b> <span id="const"></span><br>
		<b>Const:</b> <span id="est"></span>
	  </p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3"> Concatenations </h1>

	  <button class="ml-5 mb-3" onclick="OldMethod()">Old Concatenation</button>

	  <p id="concatOld" class="textA">

	  </p>

	  <button class="ml-5 mb-3" onclick="NewMethod()">New Concatenation</button>

	  <p id="concatNew" class="textA">

	  </p>

    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
      
	  <h1 class="titleA mb-3"> String Methods </h1>

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
      
	  <h1 class="titleA mb-3"> Arrays </h1>

	  <button class="ml-5 mb-3" onclick="Arrays()">Arrays</button>

	  <p class="textA">
		<b>Array:</b> <span id="arrayOutput"></span><br>
	  </p>

    </div>






  </div><!-- ROW CLOSER -->

</div><!-- CONTAINER CLOSER -->

<!-- FOOTER COMPONENT -->
<?php require 'COMPONENTS/FOOTER/footer.php'; ?>

<script src="JS/index.js"></script>

</body>

</html>