<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="sidebar.css">
</head>

<body>
    <div class="grid-container">
        <div class="navbar">
            <ul class="nav-icons">
                <li><a href="destination.php"><img src="test.png" alt=""></a></li>
                <li><a href="destination.php"><img src="test.png" alt=""></a></li>
                <li><a href="destination.php"><img src="test.png" alt=""></a></li>
            </ul>
        </div>
        <div class="sidebar">
            <ul class="top">
                <li><a href="destination.php"><img src="test.png" alt="">Leaderboard</a></li>
                <li><a href="destination.php"><img src="test.png" alt="">Team</a></li>
                <li><a href="destination.php"><img src="test.png" alt="">Goals</a></li>
                <li><a href="destination.php"><img src="test.png" alt="">Dashboard</a></li>
                <li><a href="destination.php"><img src="test.png" alt="">Badges</a></li>
            </ul>
            <ul class="bottom">
                Resources
                <li><a href="destination.php"><img src="test.png" alt="">Leaderboard</a></li>
                <li><a href="destination.php"><img src="test.png" alt="">Leaderboard</a></li>
                <li><a href="destination.php"><img src="test.png" alt="">Leaderboard</a></li>
            </ul>
        </div>

        <div class="main">
            <div class="ch2">
                <h1 class="title">Profile</h1>
                <hr>
                <p class="text">The following will display on your profile</p>

                <h3>Display name</h3>
                <input type="text" class="per-info" name="dp-name">
                <h3>Pronouns</h3>
                <input type="text" class="per-info" name="pronouns">
                <h3>Birthday</h3>
                <!--Month, Day, Year-->
                <h3>Job Position</h3>
                <input type="text" class="per-info" name="position">
                <h3>Email</h3>
                <input type="text" class="per-info" name="email">
                <h3>Office address</h3>
                <input type="text" class="per-info" name="address">
                <h3>Bio</h3>
                <textarea name="bio" class="bio"></textarea>
            </div>
        </div>
        <div class="footer">
            Footer
        </div>
    </div>

</body>

</html>