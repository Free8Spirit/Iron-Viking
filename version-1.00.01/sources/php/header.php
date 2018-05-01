<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/styles.css" />
        <title> Iron Viking </title>
    </head>
    <body>
	<?php
		session_start();
	?>
        <header>
            <nav>
                <div class="main-wrapper">
                    <ul>
                        <li>
                            <a href="index.php"> Home </a>
                        </li>
                    </ul>
                    <div class="nav-login">
						<?php
							if (isset($_SESSION['u_uid'])) {
								echo '<form action="logout.inc.php" method="POST">
									<button type="submit" name="submit"> Logout </button>
									</form>';
							} else {
								echo {
									<form action="login.inc.php" method="POST">
										<input type="text" name="uid" placeholder="Username/e-mail" />
										<input type="password" name="pwd" placeholder="password" />
										<button type="submit" name="submit"> Login </button>
									</form>
									<a href="signup.php"> Sign up </a>
								}
							}
						?>
                    </div>
                </div>
            </nav>
        </header>