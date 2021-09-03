<div class="navContainer">
  <div class="logoContainer">
    <a href="/index.php">
      <img class="logo" src="../../img/icons/groceries.svg" alt="Home" />
    </a>

  </div>
  <div class="navigation">
    <a class="menuItem <?php echo $_SERVER['REQUEST_URI'] == '/public/test.php' ? 'active'  : ''; ?>" href="/public/test.php">
      <img class="menuIcon" src="../../img/icons/groceries.svg" alt="Rolling Bakery" />
      <span class="menuText">ROLLING BAKERY</span>
    </a>
    <a class="menuItem <?php echo $_SERVER['REQUEST_URI'] == '/public/recipe.php' ? 'active'  : ''; ?>" href="/public/recipe.php">
      <img class="menuIcon" src="../../img/icons/recipe.svg" alt="Rezepte" />
      <span class="menuText">REZEPTE</span>
    </a>
    <a class="menuItem <?php echo $_SERVER['REQUEST_URI'] == 'https://localhost/picknick.html' ? 'active'  : ''; ?>" href="./picknick.html">
      <img class="menuIcon" src="../../img/icons/wicker-basket.svg" alt="Der Korb" />
      <span class="menuText">DER KORB</span>
    </a>
    <a class="menuItem <?php echo $_SERVER['REQUEST_URI'] == 'https://localhost/geschichte.html' ? 'active'  : ''; ?>" href="./geschichte.html">
      <img class="menuIcon" src="../../img/icons/history.svg" alt="Geschichte" />
      <span class="menuText">GESCHICHTE</span>
    </a>
    <a class="menuItem <?php echo $_SERVER['REQUEST_URI'] == 'https://localhost/kontakt.html' ? 'active'  : ''; ?>" href="./kontakt.html">
      <img class="menuIcon" src="../../img/icons/letter.svg" alt="Kontakt" />
      <span class="menuText">KONTAKT</span>
    </a>
  </div>
</div>