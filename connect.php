<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <noscript><link rel="stylesheet" href="backendcode/css/noscript.css" /></noscript>
    <title>InterviewWithSheraz.ai</title>

    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            color: white;
        }
        nav {
            display: flex;
            justify-content: space-around;
            background-color: #343a40;
            width: 40%;
            float: left;
        }

        nav a {
            text-decoration: none;
		    color: #fff;
		    padding: 20px;
		    margin: 0px 0px 0px 30px;
        }

        nav a:hover {
            color: #7c9eaf;
            text-decoration: none;
        }

        .mainbody {
            margin: 30px;
            color: #fff;
            padding: 40px 0px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div id="page-wrapper">
        <header id="header">
            <div class="logo">
                <h1>
                	<a href="home.php">
                		InterviewWithSheraz.ai
                	</a>
                </h1>
            </div>
            <nav id="nav" class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Contact.php">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="UserData.php">USER DATA</a>
                            </li>
                            <li class="nav-item">
                				<a href="appointment.php" class="btn btn-danger">BOOK APPOINTMENT</a>  
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="mainbody">

        	<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
					$conn= mysqli_connect('localhost', 'root', '', 'phpweb_db')or die("Connection failed: " .mysqli_connect_error());
					if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
						$name = $_POST['name'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$message = $_POST['message'];

						$sql = "INSERT INTO `user` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";

						$query = mysqli_query($conn,$sql);
						if($query){
							echo "<p style='color: white; padding:50px;'>Thank you for contacting to <a href='home.php'>InterviewWithSheraz.ai</a>. We will be in touch with you shortly.</p>";
						}
						else{
							echo 'Error occoured';
						}
					}
				}
			?>

		</div>
        <footer id="footer">
            	<div class="logo">
	                <h1>
	                	<a href="home.php">
	                		InterviewWithSheraz.ai
	                	</a>
	                </h1>
	            </div>
	            <div id="nav" class="navi navbar-expand-lg">
	                <div class="container-fluid">
	                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                        <span class="navbar-toggler-icon"></span>
	                    </button>
	                    <div class="collapse navbar-collapse" id="navbarNav">
	                        <ul class="navbar-nav">
	                            <li class="nav-item">
	                                <a class="nav-link" href="works.php">HOW IT WORKS</a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" href="Contact.php">CONTACT</a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" href="UserData.php">USER DATA</a>
	                            </li>
	                            <li class="nav-item">
	                				<a class="nav-link" href="appointment.php">BOOK APPOINTMENT</a>  
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
                <div class="copyright">
                    <p>
                    	This website is built by <a href="https://sherazhussainoffic.wixsite.com/eportfolio" target="_blank">Sheraz Hussain</a>
                    </p>
                </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>