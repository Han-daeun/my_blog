<?php
include "head.php"
?>

<div class="join-page-02">
    <div class="join-title-box title-box">
        <h1>회원가입</h1>
        <span></span>
        <p>SnaF에 방문해주신것을 환영합니다.<br>로그인 하시고 더 많은 혜택을 만나보세요!</p>
    </div>
    <div class="join-input-box input-box">
        <div class="email-box">
            <span>이메일</span>
            <div class="flex">
                <input type="text" placeholder="이메일을 입력해주세요">
                <a href="#" class="input-btn">중복확인</a>
            </div>
        </div>
        <div class="tell-box">
            <span>비밀번호</span>
            <input type="password" placeholder="비밀번호를 입력해주세요">
            <input type="password" placeholder="비밀번호를 한번 더  입력해주세요">
        </div>
    </div>
    <div class="check-menu-box">
        <div class="checkbox-container">
            <input type="checkbox" id="checkbox1"/>
            <label for="checkbox1">약관에 모두 동의</label>
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="checkbox2" name="chk"/>
            <label for="checkbox2">(필수) 만 14세 이상입니다</label>
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="checkbox3" name="chk"/>
            <label for="checkbox3">(필수) 서비스 이용약관에 동의</label>
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="checkbox4" name="chk"/>
            <label for="checkbox4">(필수) 개인정보 수집이용에 동의</label>
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="checkbox5" name="chk"/>
            <label for="checkbox5">(선택) 광고 수신 및 마케팅 이용에 동의</label>
        </div>
    </div>
    <div class="btn-box">
        <a href="#" class="all-btn">
            <span>가입 완료</span>
        </a>
    </div>
</div>

<?php
include "footer.php"
?>