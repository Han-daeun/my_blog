<?php
include "../part/head.php";

$dbHost = "site3.blog.oa.gg";
$dbPort = 3306;
$dbId = "site3";
$dbPw = "sbs123414";
$dbName = 'site3';

$dbConn = mysqli_connect($dbHost, $dbId, $dbPw, $dbName, $dbPort) or die("DB CONNECTION ERROR");


if ( isset($_GET['cateItemId']) == false ) {
    $_GET['cateItemId'] = 0;
}

$cateItemId = $_GET['cateItemId'];

$cateItemName = '전체';

if ( $cateItemId ) {
    $sql = "
    SELECT name
    FROM cateItem
    WHERE id = '{$cateItemId}'
    ";
    $rs = mysqli_query($dbConn, $sql);
    $row = mysqli_fetch_assoc($rs);
    $cateItemName = $row['name'];
}


$sql = "
SELECT *
FROM article
";

if ( $cateItemId ) {
    $sql .= "
    WHERE cateItemId = '{$cateItemId}'
    ";
}

$sql .= "
ORDER BY id DESC
";

$rs = mysqli_query($dbConn, $sql);
$rows = [];
while ( true ) {
    $row = mysqli_fetch_assoc($rs);
    if ( $row == null ) {
        break;
    }
    $rows[] = $row;
}

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
            <li><a href="/list.php" style="font-size:16px; font-weight:400;">All</a></li>
            <li><a href="/list.php?cateItemId=2">Category1</a></a></li>
            <li><a href="/list.php?cateItemId=3">Category2</a></li>
            <li><a href="/list.php?cateItemId=4">Category3</a></li>
        </ul>
        <div class="search-box"></div>
        <div class="writ-btn"><a href="#">+ writing</a></div>
    </div>
    
    <?php if ( empty($rows) ) { ?>
    <div class="con">
        게시물이 존재하지 않습니다.
    </div>
    <?php } else { ?>
        <div class="article-list">
        <ul class="flex">
            <?php foreach ( $rows as $row ) { ?>
            <li>
                <a href="/detail.php?id=<?=$row['id']?>">
                    <div class="article-list-det">
                        <div class="photo-pre">
                            <img src="<?=$row['thumbImgUrl']?>" alt="">
                        </div>
                        <div class="title-box">
                            <span class="title-text" style="font-size:18px; font-weight:500; color:#5a5a5a; padding-top:8px;"><?=$row['title']?></span>
                            <span class="contents-text" style="font-size:8px; font-weight:200; color:#5a5a5a; padding-top:3px; padding-left:17px; padding-right:17px;"><?=$row['summary']?></span>
                            <span class="date-text" style="font-size:8px; font-weight:200; color:#9e9e9e; text-align:right; padding-top:3px; padding-right:15px;"><?=$row['regDate']?></span>
                        </div>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
</div>

<div class="mobile-list-bar">

    <div class="mobile-sub-bar flex" style="padding:0 15px;">
        <div class="category-box">
            <span style="font-size:10px; color:#5a5a5a;">category</span>
            <span style="font-size:5px; color:#FF5959; margin-left:20px;">▼</span>
        </div>
        <div><a style="font-size:7px; font-weight:300; background-color:#FF5959; padding:2px 6px; padding-bottom:3px; border-radius:5px; color:white;" href="#">+ writing</a></div>
    </div>
    
    <?php if ( empty($rows) ) { ?>
    <div class="con">
        게시물이 존재하지 않습니다.
    </div>
    <?php } else { ?>
    <div class="mb-article-list">
        <ul>
            <?php foreach ( $rows as $row ) { ?>
            <li>
                <a href="/detail.php?id=<?=$row['id']?>">
                    <div class="relative">
                        <div style="padding-left:30px; padding-top:18px;">
                            <div class="mb-title-text block" style="font-size:20px; color:#5A5A5A; font-weight:500;"><?=$row['title']?></div>
                            <div class="mb-contents-text block" style="font-size:11px; color:#5A5A5A; height:35px;"><?=$row['summary']?></div>
                            <div class="flex mb-contents-text-s" style="font-size:7px; color:#9E9E9E;">
                                <span style="color:#FF5959;">category</span>
                                <span><?=$row['regDate']?></span>
                                <span>조회</span>
                            </div>
                        </div>
                        <div class="content-pic-pre absolute" style="width:70px; height:70px; background-image:url(<?=$row['thumbImgUrl']?>); top:0; right:0; margin-top:25px; margin-right:40px; background-size:contain;"></div>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
</div>




<?php
include "../part/foot.php"
?>