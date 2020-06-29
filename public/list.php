<?php
include "../part/head.php"
?>

<div class="md-category">
    <div class="md-sub-bar flex flex-jc-between con" style="background-color:white; height:30px; max-width:983px; border-bottom:1px solid #bdbdbd;">
        <div class="category-box" style="margin-left:15px">
            <span style="font-size:10px; color:#5a5a5a;">category</span>
            <span style="font-size:5px; color:#FF5959; margin-left:20px;">▼</span>
        </div>
        <div><a style="font-size:7px; font-weight:300; background-color:#FF5959; padding:2px 6px; padding-bottom:3px; border-radius:5px; color:white; margin-right:15px" href="#">+ writing</a></div>
    </div>
</div>

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
    <div class="mb-article-list">
        <ul>
            <?php for ($i = 6; $i >= 1; $i--) { ?>
            <li>
                <a href="/detail.php?id=<?=$i?>">
                    <div class="relative">
                        <div style="padding-left:30px; padding-top:18px;">
                            <div class="mb-title-text block" style="font-size:20px; color:#5A5A5A; font-weight:500;">제목이 들어갈 부분</div>
                            <div class="mb-contents-text block" style="font-size:11px; color:#5A5A5A;">나는 사랑을 찾아 헤매었다. 첫째는 그것이 황홀을 가져다 주기 때문이다. 그 황홀은 너무나 찬란해서 몇 시간의 이 즐거움을 위해서는 남은 생애를 전부 희생해도 좋다고 생각하는 일도 가끔 있었다. 둘째로는 그것이 고독감- 하나의 떨리는 의식이 이 세상 너머로 차고 생명없는 끝없는 심연을</div>
                            <div class="flex mb-contents-text-s" style="font-size:7px; color:#9E9E9E;">
                                <span style="color:#FF5959;">category</span>
                                <span>2020-00-00</span>
                                <span>조회</span>
                            </div>
                        </div>
                        <div class="content-pic-pre absolute" style="width:70px; height:70px; background-color:pink; top:0; right:0; margin-top:25px; margin-right:40px;"></div>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
        <div class="mb-photo-pre"></div>
    </div>
</div>




<?php
include "../part/foot.php"
?>