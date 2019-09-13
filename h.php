<header>

	<!---	<nav class="navbar-expand-lg">
			<a class="navbar-brand" href="#">OPS</a>--->
		<ul class="nav justify-content-around">
			<img class="img" src="logo.png" class="rounded-circle" width="50em">
		  <li class="nav-item">
		    <a class="nav-link active" style="color: #FFFFFF" href="index.php">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" style="color: #FFFFFF" href="ssc.php">SSC</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" style="color: #FFFFFF" href="upsc.php">UPSC</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" style="color: #FFFFFF" href="bank.php">Bank</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" style="color: #FFFFFF" href="login.php"><?php echo "<b>"."user:"."</b>"."&nbsp;". htmlspecialchars($_SESSION["username"]); ?></a>
		  </li>
		  <li>
		  	<a href="logout.php"><input style="margin-top: .4em;" class="btn btn-danger" type="button" name="" value="Sign Out"></a>
		  </li>
		</ul>  
</header>