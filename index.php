<?php
// Include Lua script if required
$lua_output = shell_exec('lua lua/logic.lua'); // Ensure Lua is installed and accessible

// Dynamic content
$current_time = date("H:i:s"); // British time
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bio Site</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Landing Page -->
    <section id="landing">
        <div id="spinner"></div>
        <img id="background-image" src="images/your-image.jpg" alt="Background">
        <div id="intro-content">
            <h1>Your Name</h1>
            <div class="social-icons">
                <a href="https://bsky.app" target="_blank">BlueSky</a>
                <a href="https://youtube.com" target="_blank">YouTube</a>
                <a href="https://discord.com" target="_blank">Discord</a>
                <a href="https://tiktok.com" target="_blank">TikTok</a>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about">
        <div class="content">
            <div class="text">
                <h2>About Me</h2>
                <p><?php echo htmlspecialchars($lua_output); ?></p>
            </div>
            <div class="photo">
                <img src="images/your-photo.jpg" alt="Your Photo">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Me</h2>
        <div class="contact-links">
            <a href="mailto:your-email@example.com">Email</a>
            <a href="https://bsky.app" target="_blank">BlueSky</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="clock" id="clock"><?php echo $current_time; ?></div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
