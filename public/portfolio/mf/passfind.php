<?php
include "head.php"
?>

<div class="pass-find-page">
    <div class="title-box">
        <h1>비밀번호 찾기</h1>
        <span></span>
        <p>기존에 SnaF에 가입하신 이메일을 입력해주시면<br>
            비밀번호 변경 메일을 발송해드립니다!</p>
    </div>
    <div class="join-input-box input-box">
        <div class="email-box">
        <input type="text" placeholder="이메일 주소를 입력해주세요" value="asdf1234@snafriebs.com">
        </div>
        <div class="btn-box">
            <a href="#" class="all-btn" onclick="popupOpen();">
                <span>메일 전송</span>
            </a>
        </div>
    </div>
</div>
<div class="popup-page">
    <div class="popup-bg"></div>
    <div class="popup-cont flex-column">
        <div class="popup-cont-title">
            <span>비밀번호 변경 메일 전송 완료</span>
            <span></span>
        </div>
        <div class="popup-cont-box">
            <h1>asdf1234@snafriebs.com</h1>
            <p>이메일 전송이 완료되었습니다.<br>
메일에 포함된 링크에 접속하셔서 비밀번호를 변경해주세요!</p>
        </div>
        <a href="#">확인</a>
    </div>
</div>

<?php
include "footer.php"
?>