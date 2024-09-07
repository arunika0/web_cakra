<?php include_once 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 style="text-align: center;">Contact Us</h1>
    <div class="contact-us">
        <h2>Send us a message</h2>
        <p>Fill out the form below and we will get back to you as soon as possible.</p>
        <form action="kirim.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <?php if(isset($_GET['notif'])): 
            if($_GET['notif'] == 'kirimberhasil'): ?>
                <p>Your message has been sent. Thank you!</p>
            <?php elseif($_GET['notif'] == 'kirimgagal'): ?>
                <p>Failed to send your message. Please try again.</p>
            <?php endif;
        endif; ?>
    </div>
</html>
 