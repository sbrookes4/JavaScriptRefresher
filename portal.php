<?php require 'PDO/PDO_Configs.php'; ?>

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
      
       <h1 class="titleA"> Demo User Portal </h1>

       <p class="textA" id="">A Demo User Portal using php PDO/ phpMyAdmin/ mySQL over the internet to display data. Static only. Responsive design. Website and database are deployed via my Hostagor account.</p>

    </div>

    <div class="col-sm-4 col-md-2 col-lg-2 col-xl-2 mt-5">
      
		<img width="80%;" class="ml-5" src="ASSETS/IMAGES/PORTAL/AVATARS/avatar.jpg">

    </div>

  </div><!-- Row Closer -->

</div><!-- Cointainer Closer -->

<div class="container-fluid mt-5">

  <div class="row">

    <div class="col-sm-8 col-md-10 col-lg-10 col-xl-10">
      
		<p class="textA ml-5" id="">

			<span id="UserName">Sally Davis</span><br>
			<span id="Title">Sales Director</span><br>
		</p>

    </div>

	<div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 mt-5 table-responsive">

		<h1 class="titleA"> Inventory </h1>

		<table class="table table-striped table-bordered table-hover ml-3">
		  <thead class="thead-light">
		    <tr>
		      <th class="w-5" scope="col">Image</th>
		      <th class="" scope="col">Type</th>
		      <th class="" scope="col">Line</th>
		      <th class="" scope="col">Color</th>	      
		      <th class="" scope="col">Details</th>
		      <th class="" scope="col">Floor</th>
		      <th class="" scope="col">Room</th>
		      <th class="" scope="col">Rack</th>
		      <th class="" scope="col">Qty</th>	      
		    </tr>
		  </thead>
		  <tbody>

			<?php require 'PDO/PDO_Queries.php'; ?>

		  </tbody>

		</table>		

	</div>

  </div><!-- Row Closer -->

</div><!-- Cointainer Closer -->

 



  </div><!-- ROW CLOSER -->

</div><!-- CONTAINER CLOSER -->

<!-- FOOTER COMPONENT -->
<?php require 'COMPONENTS/FOOTER/footer.php'; ?>

<script src="JS/index.js"></script>

</body>

</html>