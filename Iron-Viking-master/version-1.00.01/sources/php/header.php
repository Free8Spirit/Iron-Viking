<?php
	session_start();
?>

<!DOCTYPE html>
    <!-- Shared File: Dakota Colton and David Vert Co-Owners/editors of index.html -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/styles.css" />
        <title> Iron Viking </title>
    </head>
    <body>
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
							if (isset($SESSION['u_uid'])) {
								echo '<form action="logout.inc.php" method="POST">
									<button type="submit" name="submit"> Logout </button>
									</form>';
							} else {
								<form action="login.inc.php" method="POST">
									<input type="text" name="uid" placeholder="Username/e-mail" />
									<input type="password" name="pwd" placeholder="password" />
									<button type="submit" name="submit"> Login </button>
								</form>
								<a href="signup.php"> Sign up </a>
							}
						?>
                    </div>
                </div>
            </nav>
        </header>