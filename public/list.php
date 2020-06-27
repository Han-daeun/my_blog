<?php
include "../part/head.php"
?>

<div class="list-box con flex">
    <div class="category">
        <ul>
            <li><a href="#" style="font-size:16px; font-weight:400;">All (15)</a></li>
            <li><a href="#">HTML (3)</a></a></li>
            <li><a href="#">Photo Shop (2)</a></li>
            <li><a href="#">Java Script (10)</a></li>
        </ul>
        <div class="search-box"></div>
        <div class="writ-btn"><a href="#">+ writing</a></div>
    </div>
    <div class="article-list">
        <ul class="flex flex-wrap">
            <?php for ($i = 6; $i >= 1; $i--) { ?>
            <li>
                <a href="/detail.php?id=<?=$i?>">
                    <div class="article-list-det">
                        <div class="photo-pre"></div>
                        <div class="title-box">
                            <span style="font-size:18px; font-weight:500; color:#5a5a5a;">제목이 들어갈 부분</span>
                            <span style="font-size:8px; font-weight:200; color:#5a5a5a;">내용 미리보기</span>
                            <span style="font-size:8px; font-weight:200; color:#9e9e9e;">등록 날짜</span>
                        </div>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>



<?php
include "../part/foot.php"
?>