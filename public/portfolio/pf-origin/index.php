<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--제이쿼리-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--부트스트랩-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!--스와이프 슬라이더-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <!--폰트어썸-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!--스크롤트리거-->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js?r=5426"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js?v=7"></script>
    <!--라이트박스-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
    <!--셔플-->
    <script src="https://unpkg.com/shufflejs@5"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/5.1.1/shuffle.js"></script>
    <title>PORTFOLIO</title>
    <link rel="stylesheet" href="/portfolio/pf-origin/index.css">
    <script src="/portfolio/pf-origin/index.js"></script>
  </head>
  <body>
    <div id="menu-tab">
      <nav class="menu-bar">
        <ul class="flex flex-jc-center flex-ai-center">
          <li><a href="#home" class="scroll">HOME</a></li>
          <li><a href="#info" class="scroll">INFORMATION</a></li>
          <li><a href="#port" class="scroll">PORTFOLIO</a></li>
          <!-- <li><a href="#art" class="scroll">ARTWORK</a></li> -->
          <li><a href="#cont" class="scroll">CONTACT</a></li>
        </ul>
      </nav>
    </div>
    <div id="wrap">
      <div class="top-bar"></div>
      <div id="home" class="main-visual">
        <div class="main-box">
          <div
            class="main-img parallax-bg"
            style="
              background-image: url(https://han-daeun.github.io/img1/pf/pf/b_moon.png);
            "
            data-speed="-.5"
          ></div>
          <div
            class="main-img parallax-bg"
            style="
              background-image: url(https://han-daeun.github.io/img1/pf/pf/b_02_02.png?dummy1234);
            "
            data-speed=".2"
          ></div>
          <div
            class="main-img parallax-bg"
            style="
              background-image: url(https://han-daeun.github.io/img1/pf/pf/b_ship.png);
            "
            data-speed=".0"
          ></div>
          <div
            class="main-img parallax-bg"
            style="
              background-image: url(https://han-daeun.github.io/img1/pf/pf/b_01_02.png);
            "
            data-speed=".0"
          ></div>
        </div>
        <div class="main-text flex flex-jc-center flex-ai-center">
          <div class="flex flex-wrap">
            <p>P</p>
            <p>O</p>
            <p>R</p>
            <p>T</p>
            <p>F</p>
            <p>O</p>
            <p>L</p>
            <p>I</p>
            <p>O</p>
          </div>
        </div>
      </div>
      <div id="info" class="info-box contents active-on-visible">
        <div class="main-info">
          <p>안녕하세요!</p>
          <p>새로운 꿈을 꾸고있는</p>
          <p>신입 웹 퍼블리셔 <strong>한다은</strong> 입니다.</p>
        </div>
        <div class="main-info-02 flex">
          <div class="left">
            <div class="about">About Me</div>
            <div class="photo"></div>
            <div class="text">
              <p>아직 화려한 기술과 완벽한 역량을 갖추고있진 않지만</p>
              <p>계속해서 새로운것을 배워나가며 잘 하고싶고,</p>
              <p>스스로 발전해나갈 수 있음을 확신할 수 있는 열정적인 신입입니다.</p>
            </div>
          </div>
          <div class="right">
            <div class="history">
              <span class="tit">History</span>
              <ul>
                <li class="flex"><p>2018. 02</p><p>경기과학기술대 미디어디자인과 졸업</p></li>
                <li class="flex"><p>2020. 10</p><p>SBS아카데미<br>[NCS]스마트기기 UXUI디자인 양성과정 수료</p></li>
              </ul>
            </div>
            <div class="license">
              <span class="tit">License</span>
              <ul>
                <li class="flex"><p>2020. 12</p><p>웹디자인 기능사</p></li>
                <li class="flex"><p>2020. 12</p><p>컴퓨터 그래픽스 운용기능사</p></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="graph-list active-on-visible">
          <div class="graph-main flex-jc-center flex-ai-center">
            <div>
            <p>SKILLS</p>
            <p>저는 <strong>이런것들을</strong></p>
            <p>할 수 있습니다.</p>
            </div>
          </div>
          <div class="graph-sub">
            <div class="one"><span>HTML</span></div>
            <div class="two"><span>CSS</span></div>
            <div class="three"><span>JS</span></div>
            <div class="four"><span>PS</span></div>
            <div class="five"><span>IL</span></div>
            <!-- <div class="more"><span>MORE</span></div> -->
          </div>
        </div>
      </div>
      <div id="port" class="port-box contents active-on-visible">
        <div class="title">PORTFOLIO</div>
        <div class="port-cate flex-jc-center">
          <ul class="flex shuffle-filter">
            <li class="selected" data-target="all"><span>All</span></li>
            <li data-target="web"><span>Web</span></li>
            <li data-target="responsive"><span>Responsive</span></li>
            <li data-target="redesign"><span>Design / Redesign</span></li>
          </ul>
        </div>
        <ul class="port-list shuffle-container">
          <!-- <li data-groups='["all","responsive"]'>
            <div>
              <div class="text-box">
                <h3>Yellow-Finger</h3>
                <p>반응형 웹페이지 / 모작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/yellow-finger/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-01.png"
                  alt=""
                />
              </div>
            </div>
          </li> -->
          <li data-groups='["all","web"]'>
            <div>
              <div class="text-box">
                <h3>Hazzys</h3>
                <p>스크롤 웹페이지 / 모작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/hazzys/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-02.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","web"]'>
            <div>
              <div class="text-box">
                <h3>round a'round</h3>
                <p>스크롤 웹페이지 / 모작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/rar/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-03.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","web"]'>
            <div>
              <div class="text-box">
                <h3>Clova</h3>
                <p>스크롤 풀페이지 / 모작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/clova/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-04.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","redesign"]'>
            <div>
              <div class="text-box">
                <h3>스킨푸드</h3>
                <p>스크롤 웹페이지 / 리디자인</p>
                <a
                  href="https://blog.march-hi.com/portfolio/skinfood-re/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-05.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","web"]'>
            <div>
              <div class="text-box">
                <h3>카카오뱅크</h3>
                <p>스크롤 웹페이지 / 모작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/kb/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-06.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","redesign"]'>
            <div>
              <div class="text-box">
                <h3>오설록</h3>
                <p>스크롤 웹페이지 / 리디자인</p>
                <a
                  href="https://blog.march-hi.com/portfolio/osulloc-re/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-07.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","responsive","redesign"]'>
            <div>
              <div class="text-box">
                <h3>모바일 퍼스트</h3>
                <p>반응형 웹페이지 / 창작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/mf/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-08.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","responsive"]'>
            <div>
              <div class="text-box">
                <h3>NS홈쇼핑</h3>
                <p>반응형 웹페이지 / 모작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/ns/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-09.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","responsive"]'>
            <div>
              <div class="text-box">
                <h3>돕다</h3>
                <p>반응형 웹페이지 / 모작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/dp/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-10.png"
                  alt=""
                />
              </div>
            </div>
          </li>
          <li data-groups='["all","responsive"]'>
            <div>
              <div class="text-box">
                <h3>울산 안전체험관</h3>
                <p>반응형 웹페이지 / 모작</p>
                <a
                  href="https://blog.march-hi.com/portfolio/us/"
                  target="_blank"
                  >MORE VIEW</a
                >
              </div>
              <div class="img-box">
                <img
                  src="https://han-daeun.github.io/img1/pf/pf/pro-11.png"
                  alt=""
                />
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- <div id="art" class="art-box contents active-on-visible">
        <div class="title">ARTWORK</div>
        <div class="artwork-box flex flex-jc-center">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div> -->
      <div id="cont" class="cont-box contents flex-jc-center flex-column active-on-visible">
        <div class="title">CONTACT</div>
        <div class="sub-title">"늘 새롭고싶고, 도전하고싶은 <strong>신입 퍼블리셔</strong> 입니다."<br>잘부탁드립니다!</div>
        <div class="info">
          <ul>
            <li><i class="fab fa-github"></i>https://github.com/Han-daeun</li>
            <li><i class="fas fa-envelope"></i>hged67904@naver.com</li>
            <li><i class="fas fa-mobile-alt"></i>010 - 4846 - 1904</li>
          </ul>
        </div>
        <span>Thank you!</span>
        <p>© 2021 daeun.Han All rights reserved.</p>
      </div>
    </div>
    <!-- <div class="more-box">
      <div class="inner">
        <span class="close-btn">CLOSE</span>
      </div>
    </div> -->
  </body>
</html>
