<?php 
include_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Resume</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
background-color: black;
color:white;
		}
		div{
			
            width:900px;
            border:2x solid white;
            margin: auto;
           
              width: fit-content;
            width:90%;
		}
		h1, h2, h3, h4, h5, h6 {
			margin: 0;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 30px;
		}
		.header {
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			margin-bottom: 30px;
		}
		.header h1 {
			flex: 1;
			margin: 0;
		}
		.contact-info {
			flex: 1;
			text-align: right;
		}
		.contact-info p {
			margin: 0;
		}
		.section {
			margin-bottom: 30px;
		}
		.section h2 {
			margin-bottom: 10px;
		}
		.section h3 {
			margin-bottom: 5px;
		}
		.section ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}
		.section ul li {
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>John Doe</h1>
			<div class="contact-info">
				<p>john.doe@example.com</p>
				<p>555-555-5555</p>
			</div>
		</div>
		<div class="section">
			<h2>Summary</h2>
			<p>A highly motivated and detail-oriented software developer with over 5 years of experience in designing and implementing web applications using various technologies.</p>
		</div>
		<div class="section">
			<h2>Experience</h2>
			<h3>Software Developer</h3>
			<p>XYZ Corporation</p>
			<p>Jan 2018 - Present</p>
			<ul>
				<li>Designed and developed a web-based project management tool using PHP, MySQL, and jQuery.</li>
				<li>Implemented RESTful APIs for various features of the project management tool.</li>
				<li>Integrated various third-party APIs such as Google Maps and Dropbox for additional functionality.</li>
			</ul>
			<h3>Web Developer</h3>
			<p>ABC Company</p>
			<p>Jun 2015 - Dec 2017</p>
			<ul>
				<li>Developed and maintained various client websites using HTML, CSS, and JavaScript.</li>
				<li>Implemented responsive design for all client websites to ensure compatibility with mobile devices.</li>
				<li>Managed the company's web hosting and domain registration services.</li>
			</ul>
		</div>
		<div class="section">
			<h2>Skills</h2>
			<ul>
				<li>PHP</li>
				<li>MySQL</li>
				<li>JavaScript</li>
				<li>HTML/CSS</li>
				<li>jQuery</li>
				<li>RESTful APIs</li>
			</ul>
		</div>
	</div>
</body>
</html>
