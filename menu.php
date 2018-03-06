<div id="sidebar">
  <div class="inner">
    <!-- Menu -->
      <nav id="menu">
        <header class="major">
          <h2>Menu</h2>
        </header>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="company.php">Cyberone PT?</a></li>
          <li><a href="member.php">Member</a></li>
	  <!-- 2018.03.06 - Add Shop Menu -->
	  <li><a href="shop.php">Shop</a><li>
          <li>
            <span class="opener">Board</span>
            <ul>
              <li><a href="rboard.php">Notice</a></li>
              <li><a href="fboard.php">Free Board</a></li>
              <li><a href="qboard.php">Q/A Board</a></li>
            </ul>
          </li>
          <li><a href="document.php">Document</a></li>
          <?php
          if(isset($_SESSION["is_login"])){
            echo '<li><a href="logout.php">Logout</a></li>';
          }
          else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
          <li><a href="join.php">Join</a></li>
        </ul>
      </nav>

    <!-- Section -->
      <ul class="contact">
          <li class="fa-envelope-o"><a href="#">Cyberone PT Team</a></li>
          <li class="fa-phone">(010) 1234-1234</li>
          <li class="fa-home">Cyberone PT Team in Bangbae.<br /></li>
        </ul>
      </section>

    <!-- Footer -->
      <footer id="footer">
        <p class="copyright"></a></p>
      </footer>

  </div>
</div>
