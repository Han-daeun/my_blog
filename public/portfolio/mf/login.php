<?php
include "head.php"
?>

<div class="login-page">
    <div class="login-title-box title-box">
        <h1>로그인</h1>
        <span></span>
        <p>SnaF에 방문해주신것을 환영합니다.<br>로그인 하시고 더 많은 혜택을 만나보세요!</p>
    </div>
    <div class="login-input-box input-box">
        <div class="email-box">
            <span>이메일</span>
            <input type="text">
        </div>
        <div class="pass-box">
            <span>비밀번호</span>
            <input type="password">
        </div>
        <div class="btn-box">
            <a href="#" class="all-btn">
                <span>로그인</span>
            </a>
            <div class="pass-find">
                <span>비밀번호가 기억나지 않으시나요?</span>
                <a href="#">비밀번호 찾기</a>
            </div>    
        </div>
    </div>
    <div class="login-join-box">
        <p>아직 회원이 아니세요?<br>
지금 회원가입 하시고 다양한 혜택과 소식을 만나보세요! </p>
        <div class="join-btn flex-jc-center">
            <a href="#">회원가입</a>
        </div>
    </div>
</div>

<?php
include "footer.php"
?>