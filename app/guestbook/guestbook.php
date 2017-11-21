<?php

session_start();
include_once('head.php'); ?>

<h2>Gästebuch</h2>
<form action="comment.php" method="post" data-abide novalidate>
    <label>
        Eintrag schreiben:
        <div class="input-group">
            <textarea type="text" name="message" required></textarea>
        </div>
        <span class="form-error" data-form-error-for="exampleNumberInput">Amount is required.</span>
    </label>
    <button class="button" type="submit" value="Submit">Submit</button>
</form>

<?php

$sql = 'SELECT id,message,postedAt,postedBy FROM comment ORDER BY postedAt DESC';

foreach ($db->query($sql) as $row) {
    ?>

    <div class="grid-x">
        <div class="large-12 cell">
            <div class="box box-padding">
                <?php
                echo '<b>' . $row['postedBy'] . '</b>: ';
                echo $row['message'] . '<br><br>';
                echo $row['postedAt'];
                ?>
            </div>
        </div>
    </div>

<?php } ?>


<?php include_once('footer.php'); ?>
