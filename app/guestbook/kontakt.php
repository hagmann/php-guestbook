<?php

session_start();
include_once('head.php'); ?>

<h2>Kontaktformular</h2>
<form class="contact-us-form">
    <input type="text" placeholder="Full name">
    <input type="email" placeholder="Email">
    <textarea name="message" id="" rows="12" placeholder="Type your message here"></textarea>
    <div class="contact-us-form-actions">
        <input type="submit" class="button" value="Senden" />
    </div>
</form>

<?php include_once('footer.php'); ?>
