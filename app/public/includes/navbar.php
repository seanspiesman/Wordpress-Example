	<nav class="navbar navbar-dark bg-transparent navbar-expand-md fixed-top">
	    <div class="container-fluid">
	        <a class="navbar-brand" href="index.php"><img src="img/LittleDeli.png" style='height: 100px;'></a> <button
	            class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span
	                class="navbar-toggler-icon"></span></button>
	        <div class="collapse navbar-collapse" id="navbarResponsive">
	            <ul class="navbar-nav ml-auto" style='text-shadow: 0px 0px 1px black'>
	                <li class="nav-item">
	                    <a class="nav-link <?php if ($page=='home'){echo 'active';}?>" href="index.php">Home</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link <?php if ($page=='about'){echo 'active';}?>" href="about.php">About</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link  <?php if ($page=='menu'){echo 'active';}?> " href="menu.php">Menu</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link <?php if ($page=='locations'){echo 'active';}?>"
	                        href="location.php">Locations</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link <?php if ($page=='contact-us'){echo 'active';}?>" href="contact-us.php">Contact
	                        Us</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	</nav>