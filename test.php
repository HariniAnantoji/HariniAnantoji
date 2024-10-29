<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Habits | Profile</title>
    <link rel="stylesheet" href="sidebar.css">
</head>
<body>
<div class="grid-container">
      <div class="aside">
          <ul>
            <li class="links"><img alt="logo" class="logo" src="../../images/BPA_LOGO.png"></li>
            <li class="links"><a href="dashboard.php"><img src="../../images/side_bar/Dashboard Icon.png" alt="icon" class="icon"> Dashboard</a></li>
            <li class="links"><img src="../../images/side_bar/leaderboard icon.png" alt="icon" class="icon"><a href="leaderboard.php">Leaderboard</a></li>
            <li class="links"><img src="../../images/side_bar/Goals Icon.png" alt="icon" class="icon"><a href="#">Goals</a></li>
            <li class="links"><img src="../../images/BPA_LOGO.png" alt="icon" class="icon"><a href="#">Team</a></li>
            <li class="links"><img src="../../images/side_bar/Badges icon.png" alt="icon" class="icon"><a href="badge.php">Badges</a></li>
          </ul>
        </div>
        <div class="nav">
            <nav>
              <img src="../../images/BPA_LOGO.png" alt="Notifications" class="notific">
              <img src="../../images/BPA_LOGO.png" alt="Messages" class="message">
              <img src="../../images/BPA_LOGO.png" alt="Profile Pic" class="profile">
              <p class="name"> First Last</p>
              <!--<p class="name"><?php /*echo "{$user->first_name} {$user->last_name}"; */?></p>-->
            </nav>
        </div>
        <div class="aside-two">
          <ul>
            <li class="resources">Resources</li>
            <li class="links"><img src="../../images/BPA_LOGO.png" alt="icon" class="icon"><a href="#">Help Center</a></li>
            <li class="links"><img src="../../images/BPA_LOGO.png" alt="icon" class="icon"><a href="#">Setting</a></li>
            <li class="links"><a href="#" class="resources">Log out</a></li>
          </ul>
        </div>
        <div class="info">
            <div class="ch1">
                <img src="../../images/BPA_LOGO.png" class="big-pic" alt="Profile Picture">
                <p class="change-profile">Change Profile Picture</p>
            </div>
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
</body>
</html>