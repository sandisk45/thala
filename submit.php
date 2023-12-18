
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's input
    $user_name = $_POST["username"];

    // Check if the name consists of 7 letters
    if (strlen($user_name) === 7) {
        // If the condition is met, print Thala and play the video
        echo '<h1 style="color: green; text-align: center;">CONGRATULATIONS YOUR NAME HAS 7 LETTER, THALA FOR A REASON</h1>';
        echo '<video width="100%" height="90%" loop id="autoplay">';
        echo '<source src="thala.mp4" type="video/mp4">';
        echo '</video>';
    } else {
        // If the condition is not met, print Go to the hell
        echo '<h1 style="color: red; text-align: center; display: grid; place-items: center; height: 100vh; margin: 0;">GO TO THE HELL. YOUR NAME DOESNOT HAS 7 LETTER</h1>';
    }
}
?>
<script>
    // JavaScript function to play the video
    
    window.onload=function(){
        document.getElementById("autoplay").play();
        
    }
</script>
