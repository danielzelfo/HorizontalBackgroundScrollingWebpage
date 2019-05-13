<!DOCTYPE html>
<html>
	<head>
		<title> Website </title>
		<link rel="stylesheet" type="text/css" href="styles/global.css">
		<link rel="stylesheet" type="text/css" href="styles/index.css">
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<br />
		<main>
			<div class="section" id="regularSection">
				<h1 class="und">First Section</h1>
				<br />
				<h2 class="und">Heading</h2>
				<br />
				<p>info</p>
				<br />
				<h2 class="und">Heading</h2>
				<br />
				<p>info</p>
				<br />
				<div class="expandcont">
					<h2 class="und">Heading</h2>
					<br />
					<p>info</p>
					<br />
					<h2 class="und">Heading</h2>
					<br />
					<p>info</p>
					<br />
				</div>
				<button class="expand">show more</button>
			</div>
			<br />
			<div class="section" id="subHeadings">
				<h1 class="und">Second Section</h1>
				<br />
				<h3>Heading</h3>
				<br />
				<h3>Heading</h3>
				<br />
				<div class="expandcont">
					<h3 class="und">Heading</h3>
						<br />
						<h4>Subheading</h4>
						<br />
						<h4>SubHeading</h4>
						<br />
						<h4>SubHeading</h4>
						<br />
						<h4>SubHeading</h4>
						<br />
					<h3 class="und">Heading</h3>
						<br />
						<h4>Subheading</h4>
						<br />
				</div>
				<button class="expand">show more</button>
			</div>
			<br />
			<div class="section">
				<h1 class="und" id="about">About Section</h1>
				<br />
				<p>info</p>
				<br />
				<h2 class="und">Heading</h2>
				<br />
				<p>info</p>
				<br />
				<h2 class="und">Heading</h2>
				<br />
				<p>info</p>
				<br />
			</div>
			<br />
			<div class="section" id="contact">
				<h1 class="und">Contact Section</h1>
				<br />
				<h2 class="und">Heading</h2>
				<br />
				<p>info</p>
				<br />
				<h2 class="und">Heading</h2>
				<br />
				<p>info</p>
				<br />
			</div>
		</main>
		<?php include 'includes/footer.php'; ?>
	</body>
	<?php include 'includes/global_scripts.php' ?>
	<script type="text/javascript" src="scripts/index.js"></script>
	<script type="text/javascript" src="scripts/horizSroll.js"></script>
</html>