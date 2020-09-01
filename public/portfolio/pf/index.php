<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio</title>
    <!--제이쿼리-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--스크롤트리거-->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js?r=5426"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js?v=7"></script>
    <!--스와이프 슬라이더-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <!--라이트박스-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
    <!--chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="/portfolio/pf/index.js"></script>
    <link rel="stylesheet" href="/portfolio/pf/index.css">
</head>

<body>
    <section class="main-page">

        <div class="main-box">
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_moon.png);" data-speed="-.5"></div>
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_03.png);" data-speed=".5"></div>
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_02.png);" data-speed=".2"></div>
            
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_door.png);" data-speed=".15"></div>
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_ship.png);" data-speed=".0"></div>
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_01.png);" data-speed=".0"></div>
            <div class="title-box">
                <div class="title-text">
                    <div>
                        <img src="https://han-daeun.github.io/img1/pf/pf/main-logo.svg" alt="">
                    </div>
                    <span>Web designer Han Daeun</span>
                </div>
                <div class="title-bar"></div>
            </div>
        </div>

        <div class="circle-swap">
            <div class="circle-01"></div>
            <div class="circle-02"></div>
        </div>

        <div class="information flex">
            <div class="info-left">
                <div class="info-img">
                    <img src="https://han-daeun.github.io/img1/pf/pf/info.png" alt="">
                </div>
                <div>
                    <div class="photo-box active-on-visible"></div>
                    <div class="info-my active-on-visible">
                        <img src="https://han-daeun.github.io/img1/pf/pf/Asset_59.png" alt="">
                    </div>
                </div>
            </div>
            <div class="info-right active-on-visible">
                <div class="education active-on-visible">
                    <div class="info-title flex flex-ai-end">
                        <span class="title-bar"></span>
                        <span class="title-num">01</span>
                        <span class="title-text">EDUCATION</span>
                    </div>
                    <div class="info-text">
                        <div>
                            <span>2016.02</span>
                            <span>태안여자고등학교 졸업</span>
                        </div>
                        <div>
                            <span>2018.01</span>
                            <span>경기과학기술대학교 미디어디자인학과 졸업</span>
                        </div>
                        <div>
                            <span>2020.09</span>
                            <span>SBS아카데미 UI/UX디자인과정 수강</span>
                        </div>
                    </div>
                </div>
                <div class="skills active-on-visible">
                    <div class="info-title flex flex-ai-end">
                        <span class="title-bar"></span>
                        <span class="title-num">02</span>
                        <span class="title-text">SKILLS</span>
                    </div>
                    <div>
                        <div class="skill-box flex flex-ai-center">
                            <div class="radial-graph">
                                <canvas id="radar-chart" width="300" height="300"></canv>
                            </div>
                            <div class="bar-graph">
                                <div>
                                    <div class="gh-title">PS</div>
                                    <div class="gh-pe flex flex-ai-center">
                                        <span>90%</span>
                                        <div>
                                            <span class="active-on-visible"></span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="gh-title">Ai</div>
                                    <div class="gh-pe flex flex-ai-center">
                                        <span>70%</span>
                                        <div>
                                            <span class="active-on-visible"></span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="gh-title">HTML/CSS</div>
                                    <div class="gh-pe flex flex-ai-center">
                                        <span>85%</span>
                                        <div>
                                            <span class="active-on-visible"></span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="gh-title">JavaScript</div>
                                    <div class="gh-pe flex flex-ai-center">
                                        <span>65%</span>
                                        <div>
                                            <span class="active-on-visible"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pf-page">
            <div class="pf-img">
                <img src="https://han-daeun.github.io/img1/pf/pf/pf.png" alt="">
            </div>
            <div class="pf-slide">
                <div class="swiper-container active-on-visible">
                    <div class="swiper-wrapper" style="height:566px;">
                        <div class="swiper-slide"
                            style="margin-top:60px; background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-05.png);">
                            <div class="pf-bottom">
                                <div class="pf-title">SKIN FOOD</div>
                                <div class="pf-bar" style="background-color:#ffc300;"></div>
                                <div class="pf-cont">반응형페이지 모작</div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-05.png);">
                            <div class="pf-bottom">
                                <div class="pf-title">SKIN FOOD</div>
                                <div class="pf-bar" style="background-color:#ffc300;"></div>
                                <div class="pf-cont">반응형페이지 모작</div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="margin-top:60px; background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-04.png);">
                            <div class="pf-bottom">
                                <div class="pf-title">clova</div>
                                <div class="pf-bar" style="background-color:#21aabc;"></div>
                                <div class="pf-cont">반응형페이지 모작</div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-03.png);">
                            <div class="pf-bottom">
                                <div class="pf-title">round a'round</div>
                                <div class="pf-bar" style="background-color:#76887f;"></div>
                                <div class="pf-cont">반응형페이지 모작</div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="margin-top:60px; background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-02.png);">
                            <div class="pf-bottom">
                                <div class="pf-title">HAZZYS</div>
                                <div class="pf-bar" style="background-color:#a50d17;"></div>
                                <div class="pf-cont">반응형페이지 모작</div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-01.png);">
                            <div class="pf-bottom">
                                <div class="pf-title">Yellow Finger</div>
                                <div class="pf-bar" style="background-color:#f6c254;"></div>
                                <div class="pf-cont">반응형페이지 모작</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-btn">
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="artwork">
            <div class="aw-img">
                <img src="https://han-daeun.github.io/img1/pf/pf/aw.png" alt="">
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-01.png);" class="img-bg"></div>
                <div class="artwork-txt">
                    <span>웹사이트 리디자인</span>
                    <span>스킨푸드</span>
                    <a data-title="스킨푸드 리디자인" data-lightbox="example-set" href="https://han-daeun.github.io/img1/pf/pf/art-01.png">VIEW MORE</a>
                </div>
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-02.png);" class="img-bg"></div>
                <div class="artwork-txt">
                    <span>UI·UX 디자인</span>
                    <span>감성 일기어플 '한줄일기'</span>
                    <a data-title="어플 기획, 디자인" data-lightbox="example-set" href="https://han-daeun.github.io/img1/pf/pf/art-02.png">VIEW MORE</a>
                </div>
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-03.png);" class="img-bg"></div>
                <div class="artwork-txt">

                </div>
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-04.png);" class="img-bg"></div>
                <div class="artwork-txt">

                </div>
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-05.png);" class="img-bg"></div>
                <div class="artwork-txt">

                </div>
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-06.png);" class="img-bg"></div>
                <div class="artwork-txt">

                </div>
            </div>
        </div>

        <div class="contact">
            <div class="cont-title flex-jc-center">CONTACT</div>
            <div class="cont-box flex flex-jc-center flex-ai-center">
                <div class="cont-email">
                    <div class="icon" style="background-image:url(https://han-daeun.github.io/img1/pf/pf/icon-blog.png);"></div>
                    <span>https://marc-hi.blog.oa.gg</span>
                </div>
                <div class="cont-home">
                    <div class="icon" style="background-image:url(https://han-daeun.github.io/img1/pf/pf/icon-home.png);"></div>
                    <div class="cont-home-text">
                        <div class="home-text-01">대전 광역시 서구 갈마동</div>
                        <div class="home-text-02 flex flex-jc-center">
                            <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/Asset_57.png);"></div>
                            <span>010. 4846. 1904</span>
                        </div>
                        <div class="home-text-03 flex flex-jc-center">
                            <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/Asset_58.png);"></div>
                            <span>eun71044@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="cont-git">
                    <div class="icon" style="background-image:url(https://han-daeun.github.io/img1/pf/pf/icon-github.png);"></div>
                    <span>https://github.com/Han-daeun</span>
                </div>
            </div>
        </div>

        <div class="background-art">
            <div><img src="https://han-daeun.github.io/img1/pf/pf/bg-01.png" alt=""></div>
            <div><img src="https://han-daeun.github.io/img1/pf/pf/bg-02.png" alt=""></div>
            <div><img src="https://han-daeun.github.io/img1/pf/pf/bg-03.png" alt=""></div>
        </div>
    </section>
</body>

</html>