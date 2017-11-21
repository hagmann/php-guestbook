
  </div>

  <footer>
      <div class="grid-container">
          <div class="grid-x grid-padding-x">
              <div class="small-12 medium-4 cell">
                  <h3>Navigation</h3>
                  <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="guestbook.php">Gästebuch</a></li>
                      <?php if (!empty($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == true) { ?>
                          <li><a href="register.php">Registrieren</a></li>
                          <li><a href="logout.php">Logout</a></li>
                      <?php } else { ?>
                          <li><a href="login.php">Login</a></li>
                      <?php } ?>
                  </ul>
              </div>
              <div class="small-12 medium-4 cell">
                  <h3>Kontakt</h3>
                  <p>hagmann internet agentur gmbh<br>Muracher 5<br>6235 Winikon<br>info@hagmann.io</p>
              </div>
          </div>
      </div>
  </footer>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
  <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
