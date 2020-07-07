<?php
include "../part/head.php"
?>

<div class="main-index">
  <div class="index-pic">
    <div class="index-pic-front" style="background: linear-gradient(to left, #FC354C, #0ABFBC);"></div>
    <div class="index-pic-back" style="background-color:white;"></div>
    <ul class="index-text">
      <li><span class="welcome">Welcome</span></li>
      <li><span class="to">To</span></li>
      <li><span class="myblog">MY BLoG</span></li>
    </ul>
  </div>
</div>
<!--
<div class="new-article-box flex con">
  <div class="list-01 flex flex-wrap flex-jc-center">
    <?php for ($i = 3; $i >= 1; $i--) { ?>
    <div class="post-list">
      <div>
        <ul class="flex">
          <li class="article-look">
            <div>
              <span style="color:#5A5A5A;">조회</span>
              <span style="color:#CC8C8C;">3</span>
            </div>
            <div>
              <span style="color:#D6D6D6;">♥</span>
              <span style="color:#D6D6D6;">2</span>
            </div>
          </li>
          <li class="article-cont flex-grow-1">
            <a href="#" style="color:#5a5a5a; margin-left:18px; margin-top:33px; font-size:18px; font-weight:500;"
              class="block">제목이 들어갈 부분</a>
            <a href="#" class="article-long"><span>나는 사랑을 찾아 헤매었다. 첫째는 그것이 황홀을 가져다 주기 때문이다. 그 황홀은 너무나 찬란해서 몇 시간의 이 즐거움을
                위해서는 남은 생애를 전부 희생해도 좋다고 생각하는 일도 가끔 있었다. 둘째로는 그것이 고독감- 하나의 떨리는 의식이 이 세상 너머로 차고 생명없는 끝없는 심연을 바라보는 미래의
                어쩌구</span></a>
          </li>
          <li class="article-prev">
            <div class="prev-img"></div>
          </li>
        </ul>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<?php
include "../part/foot.php"
?>