<?php

session_start();
include_once('head.php'); ?>

        <b>Eintrag schreiben:</b>
        <form action="comment.php" method="post">
        		<textarea type="text" name="message" ></textarea>
        		<input type="submit" name="comment" value="Senden" class="button"/>
        	</form>
        <?php

        $sql = 'SELECT id,message,postedAt,postedBy FROM comment ORDER BY postedAt DESC';


        foreach($db->query($sql) as $row) {
          ?>

          <div class="grid-x">
            <div class="large-12 cell">
              <div class="primary callout">

              <?php
              echo '<b>' . $row['postedBy'] . '</b>: ';
              echo $row['message'] . '<br><br>';
              echo $row['postedAt'];
              ?>
            </div>
            </div>
          </div>

          <?php
        }

        ?>


<?php include_once('footer.php'); ?>
