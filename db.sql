# 언어 인코딩 설정
SET NAMES utf8mb4;

# DB 생성
DROP DATABASE IF EXISTS site3;
CREATE DATABASE site3;
USE site3;

# 게시물 테이블 생성
DROP TABLE IF EXISTS article;
CREATE TABLE article (
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    regDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL,
    displayStatut TINYINT(1) UNSIGNED NOT NULL, 
    cateItemId INT(10) UNSIGNED NOT NULL,
    title CHAR(250) CHARSET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `body` LONGTEXT CHARSET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
);

DESC article;

CREATE TABLE cateItem (
    id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    regDate DATETIME NOT NULL,
    `name` CHAR(100) NOT NULL UNIQUE
);

INSERT INTO cateItem SET regDate = NOW(), `name` = '일상';
INSERT INTO cateItem SET regDate = NOW(), `name` = 'IT/일반';
INSERT INTO cateItem SET regDate = NOW(), `name` = '디자인';
INSERT INTO cateItem SET regDate = NOW(), `name` = '프론트엔드';

DESC cateItem;

SELECT *
FROM article;

# 1번글 생성, 2번 카테고리 아이템으로 지정
INSERT INTO article
SET regDate = NOW(), 
updateDate = NOW(),
cateItemId = 2,
title = '제목',
`body` = '';

# 2번글 생성, 3번 카테고리 아이템으로 지정
INSERT INTO article
SET regDate = NOW(), 
updateDate = NOW(),
cateItemId = 3,
title = '제목',
`body` = '';