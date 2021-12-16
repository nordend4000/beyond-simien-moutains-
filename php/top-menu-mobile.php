<style>
.topnav {
	overflow: hidden;
}

.topnav h1 {
	color: white;
	font-family: Roboto, Open Sans, sans-serif;
	font-size: 8px;
	letter-spacing: 2.6px;
	line-height: 5px;
	padding: 5px;
	text-align: left;
	margin-left: 5px;
	height: 30px;
	z-index: 2;
}

.topnav #myLinks {
	display: none;
	background: var(--grisBg);
	padding-top: 2vh;
	padding-bottom: 8vh;
	transition: 0.5s ease-in;
	z-index: 1;
	margin-top: 10%;

}

.topnav a {
	color: var(--orangeMain);
	padding: 10px 4px;
	text-decoration: none;
	text-align: center;
	font-size: 16px;
	display: block;
	font-family: Roboto, Open Sans, sans-serif;
	font-weight: 600;
	letter-spacing: 2px;
	line-height: 25px;
}

.topnav a.icon {
	display: block;
	position: absolute;
	right: 0;
	top: 5px;
}

i {
	font-size: 20px;
	color: var(--orangeMain);
	text-shadow: 0px 0px 0px var(--grisBg);
	padding-right: 2px;
}

.topnav a:hover {
	color: white;
}

.active {
	background-color: #4CAF50;
	color: white;
}


#burgerIcon {
	display: inline-block;
}

#closeIcon {
	display: none;
}

.open-menu-mobile {
	position: absolute;
	top: 8%;
	right: 0;
	width: 100%;
	z-index: 1;
	margin-top: 0;
	transition: 0.5s ease-in;
}
</style>
<!-- Top Navigation Menu -->
<div class="topnav">
	<h1 class="brand">The Book - BEYOND - Simien Mountains
	</h1>
	<div id="myLinks"
		 class="open-menu-mobile">
		<a href="index.php">Home</a>
		<a
		   href="authors-book-beyond-simien-mountains.php">Authors</a>
		<a
		   href="project-book-beyond-simien-mountains.php">Project</a>
		<a
		   href="itinerary-trek-simien-mountains.php">Itinerary</a>
		<a
		   href="gallery-best-pictures-book-beyond-simien-mountains.php">Gallery</a>
		<a
		   href="contact-book-beyond-simien-mountains.php">Contact</a>
	</div>
	<a href="javascript:void(0);"
	   class="icon"
	   onclick="myFunction()">
		<i class="fa fa-bars"
		   id="burgerIcon"></i>
		<i class="far fa-window-close"
		   id="closeIcon"></i>

	</a>
</div>

<script>
function myFunction() {
	var x = document.getElementById("myLinks");
	let burgerIcon = document.getElementById("burgerIcon");
	let closeIcon = document.getElementById("closeIcon");
	if (x.style.display === "block") {
		x.style.display = "none";
		burgerIcon.style.display = "inline-block";
		closeIcon.style.display = "none";
	} else {
		x.style.display = "block";
		burgerIcon.style.display = "none";
		closeIcon.style.display = "inline-block";
	}
}
</script>