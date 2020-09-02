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
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_03.png);" data-speed=".4"></div>
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_02_02.png?dummy1234);" data-speed=".2"></div>
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_door.png);" data-speed=".15"></div>
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_ship.png);" data-speed=".0"></div>
            <div class="main-img parallax-bg"
                style="background-image:url(https://han-daeun.github.io/img1/pf/pf/b_01_02.png);" data-speed=".0"></div>
            <div class="title-box active-on-visible">
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
                        <div id="pg-06" class="swiper-slide"
                            style="margin-top:60px; background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-05.png);">
                            <a href="https://site3.blog.oa.gg/portfolio/kpr/" target="_blank">MORE</a>
                            <div class="pf-bottom">
                                <div class="pf-title">KPR</div>
                                <div class="pf-bar" style="background-color:#7e3985;"></div>
                                <div class="pf-cont flex flex-jc-between">
                                    <div>반응형페이지 모작</div>
                                    <div class="pf-cont-btn flex">
                                        <a href="http://www.kpr.co.kr/" class="page-icon" target="_blank">
                                            <span>ORIGINAL</span>
                                        </a>
                                        <a href="#" class="git-icon flex" target="_blank">
                                            <span></span>
                                            <span>GITHUB</span>
                                        </a>
                                    </div>            
                                </div>
                            </div>
                        </div>
                        <div id="pg-05" class="swiper-slide"
                            style="background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-05.png);">
                            <a href="https://site3.blog.oa.gg/portfolio/skinfood-re/" target="_blank">MORE</a>
                            <div class="pf-bottom">
                                <div class="pf-title">SKIN FOOD</div>
                                <div class="pf-bar" style="background-color:#ffc300;"></div>
                                <div class="pf-cont flex flex-jc-between">
                                    <div>반응형페이지 모작</div>
                                    <div class="pf-cont-btn flex">
                                        <a href="#" class="git-icon" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 64</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M42.74,9.57h-1v2h1c.95,0,1.5-.32,1.5-1S43.7,9.57,42.74,9.57Z"/><path class="cls-1" d="M43.93,8.2c0-.61-.45-.84-1.3-.84h-.85v1.7h.82C43.54,9.06,43.93,8.73,43.93,8.2Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM15.65,9.37c0,.15,0,.3-.05.44a4.43,4.43,0,0,1-.68,1.81,4.76,4.76,0,0,1-1.54,1.52,4.63,4.63,0,0,1-1.06.49.24.24,0,0,1-.35-.25V12.14a1.31,1.31,0,0,0-.17-.73l-.14-.19a5.67,5.67,0,0,0,.57-.1,2.08,2.08,0,0,0,1.25-.76,2.33,2.33,0,0,0,.37-1,2.82,2.82,0,0,0,0-.87,1.62,1.62,0,0,0-.39-.77.16.16,0,0,1,0-.17,1.55,1.55,0,0,0-.07-1.14.08.08,0,0,0-.07,0,.83.83,0,0,0-.49.09c-.25.11-.48.24-.73.36a.23.23,0,0,1-.14,0,5,5,0,0,0-2.3,0,.19.19,0,0,1-.15,0,3.32,3.32,0,0,0-1-.44h0c-.22,0-.26,0-.33.2a1.55,1.55,0,0,0,0,1,.14.14,0,0,1,0,.09,2,2,0,0,0-.45,1.55,2.62,2.62,0,0,0,.28,1A1.73,1.73,0,0,0,9,11a8.08,8.08,0,0,0,.88.22h0a1,1,0,0,0-.27.55.16.16,0,0,1-.05.08,1.14,1.14,0,0,1-1,0,1,1,0,0,1-.35-.37A1,1,0,0,0,7.53,11a1.08,1.08,0,0,0-.31,0c-.07,0-.09.06,0,.11a.53.53,0,0,0,.15.15,1.26,1.26,0,0,1,.52.62,1.14,1.14,0,0,0,.26.42,1.14,1.14,0,0,0,.73.26h.69s0,0,0,0c0,.25,0,.5,0,.75s-.15.35-.39.27a4.8,4.8,0,0,1-2.77-2.34,4.54,4.54,0,0,1-.5-2.7A4.5,4.5,0,0,1,7.07,6,4.71,4.71,0,0,1,9.7,4.46a4.88,4.88,0,0,1,4.14,1,4.66,4.66,0,0,1,1.79,3.29.44.44,0,0,1,0,.1Zm6.57,2.17A2.54,2.54,0,0,1,18,9.45a2.48,2.48,0,0,1,2.52-2.71,2.16,2.16,0,0,1,1.59.65l-.38.43a1.57,1.57,0,0,0-1.19-.5c-1.11,0-1.83.81-1.83,2.11s.66,2.14,1.84,2.14a1.56,1.56,0,0,0,1-.3V9.9H20.42V9.35h1.8Zm2,.52h-.7V6.84h.7Zm5-4.66H27.57v4.66h-.7V7.4H25.2V6.84h4Zm4.94,4.66h-.69V9.6H30.91v2.46h-.7V6.84h.7V9h2.57V6.84h.69ZM39.61,9.9c0,1.68-.86,2.25-2,2.25s-2-.57-2-2.25V6.84h.7V9.92c0,1.26.56,1.65,1.28,1.65s1.31-.39,1.31-1.65V6.84h.67Zm3.23,2.16H41.08V6.84h1.64c1.12,0,1.89.36,1.89,1.28a1.14,1.14,0,0,1-.81,1.13v0a1.23,1.23,0,0,1,1.12,1.25C44.92,11.55,44.07,12.06,42.84,12.06Z"/></g></g></svg></a>
                                    </div>            
                                </div>
                            </div>
                        </div>
                        <div id="pg-04" class="swiper-slide"
                            style="margin-top:60px; background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-04.png);">
                            <a href="https://site3.blog.oa.gg/portfolio/clova/" target="_blank">MORE</a>
                            <div class="pf-bottom">
                                <div class="pf-title">clova</div>
                                <div class="pf-bar" style="background-color:#21aabc;"></div>
                                <div class="pf-cont flex flex-jc-between">
                                    <div>반응형페이지 모작</div>
                                    <div class="pf-cont-btn flex">
                                        <a href="https://clova.ai/friends" class="page-icon" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 63</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M36.06,6.78c-.18.65-.36,1.26-.56,1.89l-.27.86h1.69l-.26-.86c-.21-.63-.38-1.25-.57-1.89Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM10.79,11.91C9.39,11.91,8.4,10.78,8.4,9s1-2.89,2.39-2.89,2.4,1.1,2.4,2.89S12.2,11.91,10.79,11.91Zm6.69-.1L16.12,9.43h-1v2.38H14.4V6.2h1.76c1.13,0,1.95.41,1.95,1.58a1.51,1.51,0,0,1-1.27,1.57l1.44,2.46Zm2.49,0h-.71V6.2H20Zm5.46-.56a2.37,2.37,0,0,1-1.73.66c-1.48,0-2.52-1.08-2.52-2.9s1.08-2.92,2.56-2.92a2.16,2.16,0,0,1,1.62.7L25,7.25a1.6,1.6,0,0,0-1.22-.54c-1.12,0-1.86.88-1.86,2.27s.67,2.31,1.87,2.31a1.57,1.57,0,0,0,1-.33V9.49H23.6V8.9h1.83Zm2.05.56h-.71V6.2h.71Zm5.52,0h-.73l-2-3.54-.6-1.16h0c0,.57.08,1.16.08,1.75v3H29V6.2h.73l2,3.53.6,1.16h0c0-.57-.09-1.19-.09-1.78V6.2H33Zm4.64,0-.54-1.72H35.05l-.54,1.72h-.72l1.9-5.61h.79l1.9,5.61Zm4.69,0H39.18V6.2h.71v5h2.44Z"/><path class="cls-1" d="M17.41,7.78c0-.74-.48-1-1.36-1h-.94V8.85h.94C16.93,8.85,17.41,8.5,17.41,7.78Z"/><path class="cls-1" d="M10.79,6.71c-1,0-1.66.87-1.66,2.27s.65,2.31,1.66,2.31,1.67-.91,1.67-2.31S11.79,6.71,10.79,6.71Z"/></g></g></svg></a>
                                        <a href="#" class="git-icon" target="_blank" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 64</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M42.74,9.57h-1v2h1c.95,0,1.5-.32,1.5-1S43.7,9.57,42.74,9.57Z"/><path class="cls-1" d="M43.93,8.2c0-.61-.45-.84-1.3-.84h-.85v1.7h.82C43.54,9.06,43.93,8.73,43.93,8.2Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM15.65,9.37c0,.15,0,.3-.05.44a4.43,4.43,0,0,1-.68,1.81,4.76,4.76,0,0,1-1.54,1.52,4.63,4.63,0,0,1-1.06.49.24.24,0,0,1-.35-.25V12.14a1.31,1.31,0,0,0-.17-.73l-.14-.19a5.67,5.67,0,0,0,.57-.1,2.08,2.08,0,0,0,1.25-.76,2.33,2.33,0,0,0,.37-1,2.82,2.82,0,0,0,0-.87,1.62,1.62,0,0,0-.39-.77.16.16,0,0,1,0-.17,1.55,1.55,0,0,0-.07-1.14.08.08,0,0,0-.07,0,.83.83,0,0,0-.49.09c-.25.11-.48.24-.73.36a.23.23,0,0,1-.14,0,5,5,0,0,0-2.3,0,.19.19,0,0,1-.15,0,3.32,3.32,0,0,0-1-.44h0c-.22,0-.26,0-.33.2a1.55,1.55,0,0,0,0,1,.14.14,0,0,1,0,.09,2,2,0,0,0-.45,1.55,2.62,2.62,0,0,0,.28,1A1.73,1.73,0,0,0,9,11a8.08,8.08,0,0,0,.88.22h0a1,1,0,0,0-.27.55.16.16,0,0,1-.05.08,1.14,1.14,0,0,1-1,0,1,1,0,0,1-.35-.37A1,1,0,0,0,7.53,11a1.08,1.08,0,0,0-.31,0c-.07,0-.09.06,0,.11a.53.53,0,0,0,.15.15,1.26,1.26,0,0,1,.52.62,1.14,1.14,0,0,0,.26.42,1.14,1.14,0,0,0,.73.26h.69s0,0,0,0c0,.25,0,.5,0,.75s-.15.35-.39.27a4.8,4.8,0,0,1-2.77-2.34,4.54,4.54,0,0,1-.5-2.7A4.5,4.5,0,0,1,7.07,6,4.71,4.71,0,0,1,9.7,4.46a4.88,4.88,0,0,1,4.14,1,4.66,4.66,0,0,1,1.79,3.29.44.44,0,0,1,0,.1Zm6.57,2.17A2.54,2.54,0,0,1,18,9.45a2.48,2.48,0,0,1,2.52-2.71,2.16,2.16,0,0,1,1.59.65l-.38.43a1.57,1.57,0,0,0-1.19-.5c-1.11,0-1.83.81-1.83,2.11s.66,2.14,1.84,2.14a1.56,1.56,0,0,0,1-.3V9.9H20.42V9.35h1.8Zm2,.52h-.7V6.84h.7Zm5-4.66H27.57v4.66h-.7V7.4H25.2V6.84h4Zm4.94,4.66h-.69V9.6H30.91v2.46h-.7V6.84h.7V9h2.57V6.84h.69ZM39.61,9.9c0,1.68-.86,2.25-2,2.25s-2-.57-2-2.25V6.84h.7V9.92c0,1.26.56,1.65,1.28,1.65s1.31-.39,1.31-1.65V6.84h.67Zm3.23,2.16H41.08V6.84h1.64c1.12,0,1.89.36,1.89,1.28a1.14,1.14,0,0,1-.81,1.13v0a1.23,1.23,0,0,1,1.12,1.25C44.92,11.55,44.07,12.06,42.84,12.06Z"/></g></g></svg></a>
                                    </div>            
                                </div>
                            </div>
                        </div>
                        <div id="pg-03" class="swiper-slide"
                            style="background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-03.png);">
                            <a href="https://site3.blog.oa.gg/portfolio/rar/" taret="_blank">MORE</a>
                            <div class="pf-bottom">
                                <div class="pf-title">round a'round</div>
                                <div class="pf-bar" style="background-color:#76887f;"></div>
                                <div class="pf-cont flex flex-jc-between">
                                    <div>반응형페이지 모작</div>
                                    <div class="pf-cont-btn flex">
                                        <a href="http://roundaround.co.kr/" class="page-icon" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 63</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M36.06,6.78c-.18.65-.36,1.26-.56,1.89l-.27.86h1.69l-.26-.86c-.21-.63-.38-1.25-.57-1.89Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM10.79,11.91C9.39,11.91,8.4,10.78,8.4,9s1-2.89,2.39-2.89,2.4,1.1,2.4,2.89S12.2,11.91,10.79,11.91Zm6.69-.1L16.12,9.43h-1v2.38H14.4V6.2h1.76c1.13,0,1.95.41,1.95,1.58a1.51,1.51,0,0,1-1.27,1.57l1.44,2.46Zm2.49,0h-.71V6.2H20Zm5.46-.56a2.37,2.37,0,0,1-1.73.66c-1.48,0-2.52-1.08-2.52-2.9s1.08-2.92,2.56-2.92a2.16,2.16,0,0,1,1.62.7L25,7.25a1.6,1.6,0,0,0-1.22-.54c-1.12,0-1.86.88-1.86,2.27s.67,2.31,1.87,2.31a1.57,1.57,0,0,0,1-.33V9.49H23.6V8.9h1.83Zm2.05.56h-.71V6.2h.71Zm5.52,0h-.73l-2-3.54-.6-1.16h0c0,.57.08,1.16.08,1.75v3H29V6.2h.73l2,3.53.6,1.16h0c0-.57-.09-1.19-.09-1.78V6.2H33Zm4.64,0-.54-1.72H35.05l-.54,1.72h-.72l1.9-5.61h.79l1.9,5.61Zm4.69,0H39.18V6.2h.71v5h2.44Z"/><path class="cls-1" d="M17.41,7.78c0-.74-.48-1-1.36-1h-.94V8.85h.94C16.93,8.85,17.41,8.5,17.41,7.78Z"/><path class="cls-1" d="M10.79,6.71c-1,0-1.66.87-1.66,2.27s.65,2.31,1.66,2.31,1.67-.91,1.67-2.31S11.79,6.71,10.79,6.71Z"/></g></g></svg></a>
                                        <a href="#" class="git-icon" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 64</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M42.74,9.57h-1v2h1c.95,0,1.5-.32,1.5-1S43.7,9.57,42.74,9.57Z"/><path class="cls-1" d="M43.93,8.2c0-.61-.45-.84-1.3-.84h-.85v1.7h.82C43.54,9.06,43.93,8.73,43.93,8.2Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM15.65,9.37c0,.15,0,.3-.05.44a4.43,4.43,0,0,1-.68,1.81,4.76,4.76,0,0,1-1.54,1.52,4.63,4.63,0,0,1-1.06.49.24.24,0,0,1-.35-.25V12.14a1.31,1.31,0,0,0-.17-.73l-.14-.19a5.67,5.67,0,0,0,.57-.1,2.08,2.08,0,0,0,1.25-.76,2.33,2.33,0,0,0,.37-1,2.82,2.82,0,0,0,0-.87,1.62,1.62,0,0,0-.39-.77.16.16,0,0,1,0-.17,1.55,1.55,0,0,0-.07-1.14.08.08,0,0,0-.07,0,.83.83,0,0,0-.49.09c-.25.11-.48.24-.73.36a.23.23,0,0,1-.14,0,5,5,0,0,0-2.3,0,.19.19,0,0,1-.15,0,3.32,3.32,0,0,0-1-.44h0c-.22,0-.26,0-.33.2a1.55,1.55,0,0,0,0,1,.14.14,0,0,1,0,.09,2,2,0,0,0-.45,1.55,2.62,2.62,0,0,0,.28,1A1.73,1.73,0,0,0,9,11a8.08,8.08,0,0,0,.88.22h0a1,1,0,0,0-.27.55.16.16,0,0,1-.05.08,1.14,1.14,0,0,1-1,0,1,1,0,0,1-.35-.37A1,1,0,0,0,7.53,11a1.08,1.08,0,0,0-.31,0c-.07,0-.09.06,0,.11a.53.53,0,0,0,.15.15,1.26,1.26,0,0,1,.52.62,1.14,1.14,0,0,0,.26.42,1.14,1.14,0,0,0,.73.26h.69s0,0,0,0c0,.25,0,.5,0,.75s-.15.35-.39.27a4.8,4.8,0,0,1-2.77-2.34,4.54,4.54,0,0,1-.5-2.7A4.5,4.5,0,0,1,7.07,6,4.71,4.71,0,0,1,9.7,4.46a4.88,4.88,0,0,1,4.14,1,4.66,4.66,0,0,1,1.79,3.29.44.44,0,0,1,0,.1Zm6.57,2.17A2.54,2.54,0,0,1,18,9.45a2.48,2.48,0,0,1,2.52-2.71,2.16,2.16,0,0,1,1.59.65l-.38.43a1.57,1.57,0,0,0-1.19-.5c-1.11,0-1.83.81-1.83,2.11s.66,2.14,1.84,2.14a1.56,1.56,0,0,0,1-.3V9.9H20.42V9.35h1.8Zm2,.52h-.7V6.84h.7Zm5-4.66H27.57v4.66h-.7V7.4H25.2V6.84h4Zm4.94,4.66h-.69V9.6H30.91v2.46h-.7V6.84h.7V9h2.57V6.84h.69ZM39.61,9.9c0,1.68-.86,2.25-2,2.25s-2-.57-2-2.25V6.84h.7V9.92c0,1.26.56,1.65,1.28,1.65s1.31-.39,1.31-1.65V6.84h.67Zm3.23,2.16H41.08V6.84h1.64c1.12,0,1.89.36,1.89,1.28a1.14,1.14,0,0,1-.81,1.13v0a1.23,1.23,0,0,1,1.12,1.25C44.92,11.55,44.07,12.06,42.84,12.06Z"/></g></g></svg></a>
                                    </div>            
                                </div>
                            </div>
                        </div>
                        <div id="pg-02" class="swiper-slide"
                            style="margin-top:60px; background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-02.png);">
                            <a href="https://site3.blog.oa.gg/portfolio/hazzys/" target="_blank">MORE</a>
                            <div class="pf-bottom">
                                <div class="pf-title">HAZZYS</div>
                                <div class="pf-bar" style="background-color:#a50d17;"></div>
                                <div class="pf-cont flex flex-jc-between">
                                    <div>반응형페이지 모작</div>
                                    <div class="pf-cont-btn flex">
                                        <a href="http://www.hazzys.com/index" class="page-icon" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 63</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M36.06,6.78c-.18.65-.36,1.26-.56,1.89l-.27.86h1.69l-.26-.86c-.21-.63-.38-1.25-.57-1.89Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM10.79,11.91C9.39,11.91,8.4,10.78,8.4,9s1-2.89,2.39-2.89,2.4,1.1,2.4,2.89S12.2,11.91,10.79,11.91Zm6.69-.1L16.12,9.43h-1v2.38H14.4V6.2h1.76c1.13,0,1.95.41,1.95,1.58a1.51,1.51,0,0,1-1.27,1.57l1.44,2.46Zm2.49,0h-.71V6.2H20Zm5.46-.56a2.37,2.37,0,0,1-1.73.66c-1.48,0-2.52-1.08-2.52-2.9s1.08-2.92,2.56-2.92a2.16,2.16,0,0,1,1.62.7L25,7.25a1.6,1.6,0,0,0-1.22-.54c-1.12,0-1.86.88-1.86,2.27s.67,2.31,1.87,2.31a1.57,1.57,0,0,0,1-.33V9.49H23.6V8.9h1.83Zm2.05.56h-.71V6.2h.71Zm5.52,0h-.73l-2-3.54-.6-1.16h0c0,.57.08,1.16.08,1.75v3H29V6.2h.73l2,3.53.6,1.16h0c0-.57-.09-1.19-.09-1.78V6.2H33Zm4.64,0-.54-1.72H35.05l-.54,1.72h-.72l1.9-5.61h.79l1.9,5.61Zm4.69,0H39.18V6.2h.71v5h2.44Z"/><path class="cls-1" d="M17.41,7.78c0-.74-.48-1-1.36-1h-.94V8.85h.94C16.93,8.85,17.41,8.5,17.41,7.78Z"/><path class="cls-1" d="M10.79,6.71c-1,0-1.66.87-1.66,2.27s.65,2.31,1.66,2.31,1.67-.91,1.67-2.31S11.79,6.71,10.79,6.71Z"/></g></g></svg></a>
                                        <a href="#" class="git-icon" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 64</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M42.74,9.57h-1v2h1c.95,0,1.5-.32,1.5-1S43.7,9.57,42.74,9.57Z"/><path class="cls-1" d="M43.93,8.2c0-.61-.45-.84-1.3-.84h-.85v1.7h.82C43.54,9.06,43.93,8.73,43.93,8.2Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM15.65,9.37c0,.15,0,.3-.05.44a4.43,4.43,0,0,1-.68,1.81,4.76,4.76,0,0,1-1.54,1.52,4.63,4.63,0,0,1-1.06.49.24.24,0,0,1-.35-.25V12.14a1.31,1.31,0,0,0-.17-.73l-.14-.19a5.67,5.67,0,0,0,.57-.1,2.08,2.08,0,0,0,1.25-.76,2.33,2.33,0,0,0,.37-1,2.82,2.82,0,0,0,0-.87,1.62,1.62,0,0,0-.39-.77.16.16,0,0,1,0-.17,1.55,1.55,0,0,0-.07-1.14.08.08,0,0,0-.07,0,.83.83,0,0,0-.49.09c-.25.11-.48.24-.73.36a.23.23,0,0,1-.14,0,5,5,0,0,0-2.3,0,.19.19,0,0,1-.15,0,3.32,3.32,0,0,0-1-.44h0c-.22,0-.26,0-.33.2a1.55,1.55,0,0,0,0,1,.14.14,0,0,1,0,.09,2,2,0,0,0-.45,1.55,2.62,2.62,0,0,0,.28,1A1.73,1.73,0,0,0,9,11a8.08,8.08,0,0,0,.88.22h0a1,1,0,0,0-.27.55.16.16,0,0,1-.05.08,1.14,1.14,0,0,1-1,0,1,1,0,0,1-.35-.37A1,1,0,0,0,7.53,11a1.08,1.08,0,0,0-.31,0c-.07,0-.09.06,0,.11a.53.53,0,0,0,.15.15,1.26,1.26,0,0,1,.52.62,1.14,1.14,0,0,0,.26.42,1.14,1.14,0,0,0,.73.26h.69s0,0,0,0c0,.25,0,.5,0,.75s-.15.35-.39.27a4.8,4.8,0,0,1-2.77-2.34,4.54,4.54,0,0,1-.5-2.7A4.5,4.5,0,0,1,7.07,6,4.71,4.71,0,0,1,9.7,4.46a4.88,4.88,0,0,1,4.14,1,4.66,4.66,0,0,1,1.79,3.29.44.44,0,0,1,0,.1Zm6.57,2.17A2.54,2.54,0,0,1,18,9.45a2.48,2.48,0,0,1,2.52-2.71,2.16,2.16,0,0,1,1.59.65l-.38.43a1.57,1.57,0,0,0-1.19-.5c-1.11,0-1.83.81-1.83,2.11s.66,2.14,1.84,2.14a1.56,1.56,0,0,0,1-.3V9.9H20.42V9.35h1.8Zm2,.52h-.7V6.84h.7Zm5-4.66H27.57v4.66h-.7V7.4H25.2V6.84h4Zm4.94,4.66h-.69V9.6H30.91v2.46h-.7V6.84h.7V9h2.57V6.84h.69ZM39.61,9.9c0,1.68-.86,2.25-2,2.25s-2-.57-2-2.25V6.84h.7V9.92c0,1.26.56,1.65,1.28,1.65s1.31-.39,1.31-1.65V6.84h.67Zm3.23,2.16H41.08V6.84h1.64c1.12,0,1.89.36,1.89,1.28a1.14,1.14,0,0,1-.81,1.13v0a1.23,1.23,0,0,1,1.12,1.25C44.92,11.55,44.07,12.06,42.84,12.06Z"/></g></g></svg></a>
                                    </div>            
                                </div>
                            </div>
                        </div>
                        <div id="pg-01" class="swiper-slide"
                            style="background-image:url(https://han-daeun.github.io/img1/pf/pf/pro-01.png);">
                            <a href="https://site3.blog.oa.gg/portfolio/yellow-finger/" target="_blank">MORE</a>
                            <div class="pf-bottom">
                                <div class="pf-title">Yellow Finger</div>
                                <div class="pf-bar" style="background-color:#f6c254;"></div>
                                <div class="pf-cont flex flex-jc-between">
                                    <div>반응형페이지 모작</div>
                                    <div class="pf-cont-btn flex">
                                        <a href="https://yellow-finger.com/" class="page-icon" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 63</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M36.06,6.78c-.18.65-.36,1.26-.56,1.89l-.27.86h1.69l-.26-.86c-.21-.63-.38-1.25-.57-1.89Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM10.79,11.91C9.39,11.91,8.4,10.78,8.4,9s1-2.89,2.39-2.89,2.4,1.1,2.4,2.89S12.2,11.91,10.79,11.91Zm6.69-.1L16.12,9.43h-1v2.38H14.4V6.2h1.76c1.13,0,1.95.41,1.95,1.58a1.51,1.51,0,0,1-1.27,1.57l1.44,2.46Zm2.49,0h-.71V6.2H20Zm5.46-.56a2.37,2.37,0,0,1-1.73.66c-1.48,0-2.52-1.08-2.52-2.9s1.08-2.92,2.56-2.92a2.16,2.16,0,0,1,1.62.7L25,7.25a1.6,1.6,0,0,0-1.22-.54c-1.12,0-1.86.88-1.86,2.27s.67,2.31,1.87,2.31a1.57,1.57,0,0,0,1-.33V9.49H23.6V8.9h1.83Zm2.05.56h-.71V6.2h.71Zm5.52,0h-.73l-2-3.54-.6-1.16h0c0,.57.08,1.16.08,1.75v3H29V6.2h.73l2,3.53.6,1.16h0c0-.57-.09-1.19-.09-1.78V6.2H33Zm4.64,0-.54-1.72H35.05l-.54,1.72h-.72l1.9-5.61h.79l1.9,5.61Zm4.69,0H39.18V6.2h.71v5h2.44Z"/><path class="cls-1" d="M17.41,7.78c0-.74-.48-1-1.36-1h-.94V8.85h.94C16.93,8.85,17.41,8.5,17.41,7.78Z"/><path class="cls-1" d="M10.79,6.71c-1,0-1.66.87-1.66,2.27s.65,2.31,1.66,2.31,1.67-.91,1.67-2.31S11.79,6.71,10.79,6.71Z"/></g></g></svg></a>
                                        <a href="#" class="git-icon" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 18"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Asset 64</title><g id="Layer_2" data-name="Layer 2"><g id="레이어_1" data-name="레이어 1"><path class="cls-1" d="M42.74,9.57h-1v2h1c.95,0,1.5-.32,1.5-1S43.7,9.57,42.74,9.57Z"/><path class="cls-1" d="M43.93,8.2c0-.61-.45-.84-1.3-.84h-.85v1.7h.82C43.54,9.06,43.93,8.73,43.93,8.2Z"/><path class="cls-1" d="M45,0H5A5,5,0,0,0,0,5v8a5,5,0,0,0,5,5H45a5,5,0,0,0,5-5V5A5,5,0,0,0,45,0ZM15.65,9.37c0,.15,0,.3-.05.44a4.43,4.43,0,0,1-.68,1.81,4.76,4.76,0,0,1-1.54,1.52,4.63,4.63,0,0,1-1.06.49.24.24,0,0,1-.35-.25V12.14a1.31,1.31,0,0,0-.17-.73l-.14-.19a5.67,5.67,0,0,0,.57-.1,2.08,2.08,0,0,0,1.25-.76,2.33,2.33,0,0,0,.37-1,2.82,2.82,0,0,0,0-.87,1.62,1.62,0,0,0-.39-.77.16.16,0,0,1,0-.17,1.55,1.55,0,0,0-.07-1.14.08.08,0,0,0-.07,0,.83.83,0,0,0-.49.09c-.25.11-.48.24-.73.36a.23.23,0,0,1-.14,0,5,5,0,0,0-2.3,0,.19.19,0,0,1-.15,0,3.32,3.32,0,0,0-1-.44h0c-.22,0-.26,0-.33.2a1.55,1.55,0,0,0,0,1,.14.14,0,0,1,0,.09,2,2,0,0,0-.45,1.55,2.62,2.62,0,0,0,.28,1A1.73,1.73,0,0,0,9,11a8.08,8.08,0,0,0,.88.22h0a1,1,0,0,0-.27.55.16.16,0,0,1-.05.08,1.14,1.14,0,0,1-1,0,1,1,0,0,1-.35-.37A1,1,0,0,0,7.53,11a1.08,1.08,0,0,0-.31,0c-.07,0-.09.06,0,.11a.53.53,0,0,0,.15.15,1.26,1.26,0,0,1,.52.62,1.14,1.14,0,0,0,.26.42,1.14,1.14,0,0,0,.73.26h.69s0,0,0,0c0,.25,0,.5,0,.75s-.15.35-.39.27a4.8,4.8,0,0,1-2.77-2.34,4.54,4.54,0,0,1-.5-2.7A4.5,4.5,0,0,1,7.07,6,4.71,4.71,0,0,1,9.7,4.46a4.88,4.88,0,0,1,4.14,1,4.66,4.66,0,0,1,1.79,3.29.44.44,0,0,1,0,.1Zm6.57,2.17A2.54,2.54,0,0,1,18,9.45a2.48,2.48,0,0,1,2.52-2.71,2.16,2.16,0,0,1,1.59.65l-.38.43a1.57,1.57,0,0,0-1.19-.5c-1.11,0-1.83.81-1.83,2.11s.66,2.14,1.84,2.14a1.56,1.56,0,0,0,1-.3V9.9H20.42V9.35h1.8Zm2,.52h-.7V6.84h.7Zm5-4.66H27.57v4.66h-.7V7.4H25.2V6.84h4Zm4.94,4.66h-.69V9.6H30.91v2.46h-.7V6.84h.7V9h2.57V6.84h.69ZM39.61,9.9c0,1.68-.86,2.25-2,2.25s-2-.57-2-2.25V6.84h.7V9.92c0,1.26.56,1.65,1.28,1.65s1.31-.39,1.31-1.65V6.84h.67Zm3.23,2.16H41.08V6.84h1.64c1.12,0,1.89.36,1.89,1.28a1.14,1.14,0,0,1-.81,1.13v0a1.23,1.23,0,0,1,1.12,1.25C44.92,11.55,44.07,12.06,42.84,12.06Z"/></g></g></svg></a>
                                    </div>            
                                </div>
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

        <div class="artwork active-on-visible">
            <div class="aw-img">
                <img src="https://han-daeun.github.io/img1/pf/pf/aw.png" alt="">
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-01.png);" class="img-bg"></div>
                <div class="artwork-txt">
                    <span>웹사이트 리디자인</span>
                    <span>스킨푸드</span>
                    <a data-title="스킨푸드 리디자인" data-lightbox="example-set" href="https://han-daeun.github.io/img1/pf/pf/artwork_01.jpg">VIEW MORE</a>
                </div>
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-02.png);" class="img-bg"></div>
                <div class="artwork-txt">
                    <span>UI·UX 디자인</span>
                    <span>감성 일기어플 '한줄일기'</span>
                    <a data-title="어플 기획, 디자인" data-lightbox="example-set" href="https://han-daeun.github.io/img1/pf/pf/artwork_02.jpg">VIEW MORE</a>
                </div>
            </div>
            <div class="artwork-img">
                <div style="background-image:url(https://han-daeun.github.io/img1/pf/pf/art-03.png);" class="img-bg"></div>
                <div class="artwork-txt">
                    <span>포스터 디자인</span>
                    <span>서울아프리카페스티벌</span>
                    <a data-title="어플 기획, 디자인" data-lightbox="example-set" href="https://han-daeun.github.io/img1/pf/pf/artwork_03.jpg">VIEW MORE</a>
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

        <div class="contact active-on-visible">
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
            <div class="active-on-visible"><img src="https://han-daeun.github.io/img1/pf/pf/bg-01.png" alt=""></div>
            <div class="active-on-visible"><img src="https://han-daeun.github.io/img1/pf/pf/bg-02.png" alt=""></div>
            <div class="active-on-visible"><img src="https://han-daeun.github.io/img1/pf/pf/bg-03.png" alt=""></div>
        </div>
    </section>
</body>

</html>