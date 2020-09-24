<?php
include "head.php"
?>

<div class="join-page">
    <div class="join-title-box title-box">
        <h1>회원가입</h1>
        <span></span>
        <p>SnaF에 방문해주신것을 환영합니다.<br>로그인 하시고 더 많은 혜택을 만나보세요!</p>
    </div>
    <div class="join-input-box input-box">
        <div class="name-box">
            <span>이름</span>
            <input type="text" placeholder="이름을 입력해주세요">
        </div>
        <div class="tell-box">
            <span>휴대폰번호</span>
            <div class="flex">
                <input type="text" placeholder="01012345678">
                <a href="#" class="input-btn">중복확인</a>
            </div>
            <input type="text" placeholder="발송된 인증번호 4자리를 입력해주세요">
        </div>
        <div class="btn-box">
            <a href="#" class="all-btn">
                <span>다음단계로</span>
            </a>   
        </div>
    </div>
</div>

<?php
include "footer.php"
?>