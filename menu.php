<div id="sidebar">
  <div class="inner">
    <!-- Menu -->
      <nav id="menu">
        <header class="major">
          <h2>Menu</h2>
        </header>
        <ul>
          <li><a href="index.php">홈</a></li>
          <li><a href="company.php">회사 소개</a></li>
          <li><a href="product.php">상품 보기</a></li>
          <li>
            <span class="opener">게시판</span>
            <ul>
              <li><a href="fboard.php">자유 게시판</a></li>
              <li><a href="qboard.php">질문 게시판</a></li>
              <li><a href="rboard.php">요청 게시판</a></li>
            </ul>
          </li>
          <li><a href="#">Q/A</a></li>
          <li><a href="#">Contact</a></li>
          <?php
          if(isset($_SESSION["is_login"])){
            echo '<li><a href="logout.php">로그아웃</a></li>';
          }
          else{
            echo '<li><a href="login.php">로그인</a></li>';
          }
          ?>
          <li><a href="join.php">회원 가입</a></li>
        </ul>
      </nav>

    <!-- Section -->
      <ul class="contact">
          <li class="fa-envelope-o"><a href="#">None</a></li>
          <li class="fa-phone">(000) 000-0000</li>
          <li class="fa-home">Summoner's Rift Purple Team<br />
          00000-0000</li>
        </ul>
      </section>

    <!-- Footer -->
      <footer id="footer">
        <p class="copyright"></a></p>
      </footer>

  </div>
</div>
