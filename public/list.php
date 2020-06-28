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
        <ul class="flex flex-wrap flex-jc-center">
            <?php for ($i = 6; $i >= 1; $i--) { ?>
            <li>
                <a href="/detail.php?id=<?=$i?>">
                    <div class="article-list-det">
                        <div class="photo-pre"></div>
                        <div class="title-box">
                            <span class="title-text" style="font-size:18px; font-weight:500; color:#5a5a5a; padding-top:8px;">제목이 들어갈 부분</span>
                            <span class="contents-text" style="font-size:8px; font-weight:200; color:#5a5a5a; padding-top:3px; padding-left:17px;">내용 미리보기</span>
                            <span class="date-text" style="font-size:8px; font-weight:200; color:#9e9e9e; text-align:right; padding-right:15px;">2020-00-00</span>
                        </div>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="mobile-list-bar">
    <div class="mobile-sub-bar flex" style="padding:0 15px;">
        <div class="category-box">
            <span style="font-size:10px; color:#5a5a5a;">category</span>
            <span style="font-size:5px; color:#FF5959; margin-left:20px;">▼</span>
        </div>
        <div><a style="font-size:7px; font-weight:300; background-color:#FF5959; padding:2px 6px; padding-bottom:3px; border-radius:5px; color:white;" href="#">+ writing</a></div>
    </div>
</div>

<div class="mb-article-list">
        <ul>
            <?php for ($i = 6; $i >= 1; $i--) { ?>
            <li>
                <a href="/detail.php?id=<?=$i?>">
                    <div>
                        <div style="padding-left:30px; padding-top:18px;">
                            <span class="mb-title-text block" style="font-size:20px; color:#5A5A5A;">제목이 들어갈 부분</span>
                            <span class="mb-contents-text block" style="font-size:11px; color:#5A5A5A; height:39px; box-sizing:border-box;">내용이 들어갈 부분입니다.</span>
                            <span class="mb-date-text block" style="font-size:7px; color:#9E9E9E;">2020-00-00</span>
                        </div>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
        <div class="mb-photo-pre"></div>
    </div>


<?php
include "../part/foot.php"
?>