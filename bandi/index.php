<? include_once $_SERVER["DOCUMENT_ROOT"]."/bandi/inc/start.html" ?>
    <link rel="stylesheet" href="/bandi/css/main.css">

       
</head>

<body>
        <!--s: 바로가기 메뉴(tap키로 하는 접근성)-->
        <ul class="skipMenu_list">
            <li><a class="hidden" href="#">메뉴바로가기</a></li>
            <li><a class="hidden" href="#">본문바로가기</a></li>
            <li><a class="hidden" href="#">하단바로가기</a></li>
        </ul>
        <!--e: 바로가기 메뉴-->
        <!--s: header영역-->
        <? include_once $_SERVER["DOCUMENT_ROOT"]."/bandi/inc/header.html" ?>
        <!--e: header영역-->
      
        <!--s: visual영역-->
        <div class="visual">
            <section class="wrap search">
                <div class="visual_title_search">
                    <h2 class="visual_title">어디가 아프신가요?
                        <span>증상별 병원 찾기</span>
                    </h2>
                    <div class="visual_search">
                        <input type="text"><a href="/bandi/hsptlRcmnd/hsptlRcmnd.php"><img src="/bandi/img/sub_1/Search.png" alt="찾기"></a>
                    </div>
                </div>
                <div class="visual_img">
                    <ul class="visualImg_list">
                        <li><img src="/bandi/img/a.visual/mobile_0.png" alt="미리보기"></li>
                        <li><img src="/bandi/img/a.visual/mobile_1.png" alt="미리보기"></li>
                        <li><img src="/bandi/img/a.visual/mobile_2.png" alt="미리보기"></li>
                    </ul>
                </div>
            </section>
        </div>
        <!--e: visual영역-->
        <!--s: 컨텐츠 영역-->
        <div class="contents_wrap">
            <!--s: 간편하게 예약하기 영역-->
            <div class="contents_rsrvt"> 
                <section class="wrap rsrvt">
                    <div class="rsrvt_title_wrap">
                        <h2 class="rsrvt_title">
                            진료 예약부터 <span>반디로 간편하게 -</span>                           
                        </h2>
                        <p class="rsrvt_text">
                            빠른 예약부터 진료센터 길 찾기까지<br>
                            복잡한 병원 방문, 반디로 간편하게 해결하세요.
                        </p>
                    </div>
                        <ul class="rsrvt_list">
                            <li>
                                <a href="#">
                                    <img src="/bandi/img/contents_1/icon1.png" alt="아이콘">
                                    <p>내 예약 확인하기<br><span>healthChk your reservation</span></p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/bandi/img/contents_1/icon2.png" alt="아이콘">
                                    <p>빠른 예약하기<br><span>Make a reservation faqly</span></p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/bandi/img/contents_1/icon3.png" alt="아이콘">
                                    <p>전문병원찾기<br><span>Finding a specialized hospital</span></p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/bandi/img/contents_1/icon4.png" alt="아이콘">
                                    <p>맞춤의료진 찾기<br><span>Finding medical staff</span></p>
                                </a>
                            </li>
                        </ul>
              </section>
            </div>
            <!--e: 간편하게 예약하기 영역-->
            <!--s: 앱 다운로드 영역-->
            <div class="constents_appDown">
                <section class="wrap appDown">
                    <div class="appDown_title_mobile">
                        <h2>진료센터위치,<br><span>이젠 물어보지 마세요</span></h2>
                        <div class="appDown_img">
                            <img src="/bandi/img/contents_2/down_m.png" alt="미리보기">
                        </div>
                    </div>
                    <div class="appDown_text">
                        <p class="appDownText_1">QR 하나로 진료센터부터 수납까지<br>
                            처음부터 끝까지 친절하게 알려주는 반디,</p>
                        <p class="appDownText_1 text2">편리한 병원 이용을 위해 지금 반디를 시작해 보세요</p>
                        <a href="#"><p class="appDownTest_2">앱 다운로드 하기</p></a>
                    </div>
                </section>
            </div>
            <!--e: 앱 다운로드 영역-->
            <!--s: 건강상태 확인 영역-->
          <div class="contents_healthChk">
                <section class="wrap healthChk">
                    <h2 class="healthChk_title">나의 건강상태를 <span>확인해보세요!</span></h2>
                    <div class="healthChkCenter_wrap">
                        <div class="healthChk_left"><!--지금 내 건강상태는?, 이명, 제대로 치료하자! 영역-->
                            <div class="healthChk_condition">
                                <a href="#">
                                    <div class="healthChk_condition_profile">
                                        <img src="/bandi/img/contents_3/profile.png" alt="프로필">
                                    </div>
                                    <p class="condition_userName">USER 님</p>
                                    <p class="condition_text1">지금 내 건강상태는?</p>
                                    <p class="condition_text2">최근 5일간 2회차 어깨통증으로 정형외과<br>
                                        방문을 하였으며 꾸준한 스트레칭이<br>
                                        필요한 상태입니다.</p>
                                    <div class="youtube_link">
                                        
                                            <p class="condition_text3">어깨통증에 좋은 스트레칭
                                            <img src="/bandi/img/contents_3/Youtube.png" alt="유튜브"></p>
                                       
                                    </div>
                                </a>
                            </div>
                            <div class="healthChk_condition2">
                                <a href="#">
                                    <i class="fa-solclass fa-plus"></i>
                                    <p>이명, 제대로 알고 치료하자!</p>
                                </a>
                            </div>
                        </div>
                        <div class="healthChk_right"><!--이유없이 저리는다리? 식후 약 복용법 영역-->
                            <div class="healthChk_right_top">
                                <a href="#">
                                    <i class="fa-solclass fa-plus"></i>
                                    <p>
                                        이유 없이 저리는 다리?<br>
                                        뜻밖의 이유 5가지
                                    </p>
                                </a>
                            </div>
                            <div class="healthChk_right_bottom">
                                <a href="#">
                                    <i class="fa-solclass fa-plus"></i>
                                    <p>
                                        식후 약 복용법,<br>
                                        집착하지 마세요
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="healthChk_condition_more">
                        <a href="#">
                            더보기
                        </a>
                    </div>
                </section>
           </div>
            <!--e: 건강상태 확인 영역-->
            <!--s: 방문후기 영역-->
           <div class="contents_review">
                <section class="wrap review">
                    <div class="review_wrap_div">
                        <h2>병원 방문 후기를 확인해 보세요<br>
                            <span>카테고리 별로 찾아보기</span>
                        </h2>
                        <ul class="review_list">
                            <li><a href="#">정형외과</a></li>
                            <li><a href="#">이비인후과</a></li>
                            <li><a href="#">척추측만증</a></li>
                            <li><a href="#">물리치료</a></li>
                        </ul>
                    </div>
                    <div class="reviewAll_wrap">
                            <ul class="reviewAll_list">
                                <li>
                                    <a href="#">
                                        <div class="review_profile">
                                            <img src="/bandi/img/contents_3/profile.png" alt="프로필">
                                        </div>
                                            <p class="review_userName">USER1 님</p>
                                            <p class="review_text1">“ 꼼꼼하게 진찰해 주셨어요 “</p>
                                            <p class="review_text2">저는 평소에 허리 통증이 심해서 여러 병원에 다녔었는데요<br>
                                                그래도 나아지지 않는 거 같고 진료 과정에서도 불만족스러워서<br>
                                                이번에 서울 아산 병원에 방문하게 되었습니다. <br>
                                                다른 병원과는 다르게 진료도 꼼꼼하게 봐주시고 어디가 왜<br>
                                                아픈지 상세하게 설명해 주셔서 만족스러웠어요.<br>
                                            </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="review_profile">
                                            <img src="/bandi/img/contents_3/profile.png" alt="프로필">
                                        </div>
                                            <p class="review_userName">USER2 님</p>
                                            <p class="review_text1">“ 꼼꼼하게 진찰해 주셨어요 “</p>
                                            <p class="review_text2">저는 평소에 허리 통증이 심해서 여러 병원에 다녔었는데요<br>
                                                그래도 나아지지 않는 거 같고 진료 과정에서도 불만족스러워서<br>
                                                이번에 서울 아산 병원에 방문하게 되었습니다. <br>
                                                다른 병원과는 다르게 진료도 꼼꼼하게 봐주시고 어디가 왜<br>
                                                아픈지 상세하게 설명해 주셔서 만족스러웠어요.
                                            </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="review_profile">
                                            <img src="/bandi/img/contents_3/profile.png" alt="프로필">
                                        </div>
                                            <p class="review_userName">USER3 님</p>
                                            <p class="review_text1">“ 꼼꼼하게 진찰해 주셨어요 “</p>
                                            <p class="review_text2">저는 평소에 허리 통증이 심해서 여러 병원에 다녔었는데요<br>
                                                그래도 나아지지 않는 거 같고 진료 과정에서도 불만족스러워서<br>
                                                이번에 서울 아산 병원에 방문하게 되었습니다. <br>
                                                다른 병원과는 다르게 진료도 꼼꼼하게 봐주시고 어디가 왜<br>
                                                아픈지 상세하게 설명해 주셔서 만족스러웠어요.<br>
                                            </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="review_profile">
                                            <img src="/bandi/img/contents_3/profile.png" alt="프로필">
                                        </div>
                                            <p class="review_userName">USER4 님</p>
                                            <p class="review_text1">“ 꼼꼼하게 진찰해 주셨어요 “</p>
                                            <p class="review_text2">저는 평소에 허리 통증이 심해서 여러 병원에 다녔었는데요<br>
                                                그래도 나아지지 않는 거 같고 진료 과정에서도 불만족스러워서<br>
                                                이번에 서울 아산 병원에 방문하게 되었습니다. <br>
                                                다른 병원과는 다르게 진료도 꼼꼼하게 봐주시고 어디가 왜<br>
                                                아픈지 상세하게 설명해 주셔서 만족스러웠어요.<br>
                                            </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="review_profile">
                                            <img src="/bandi/img/contents_3/profile.png" alt="프로필">
                                        </div>
                                            <p class="review_userName">USER5 님</p>
                                            <p class="review_text1">“ 꼼꼼하게 진찰해 주셨어요 “</p>
                                            <p class="review_text2">저는 평소에 허리 통증이 심해서 여러 병원에 다녔었는데요<br>
                                                그래도 나아지지 않는 거 같고 진료 과정에서도 불만족스러워서<br>
                                                이번에 서울 아산 병원에 방문하게 되었습니다. <br>
                                                다른 병원과는 다르게 진료도 꼼꼼하게 봐주시고 어디가 왜<br>
                                                아픈지 상세하게 설명해 주셔서 만족스러웠어요.<br>
                                            </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="review_profile">
                                            <img src="/bandi/img/contents_3/profile.png" alt="프로필">
                                        </div>
                                            <p class="review_userName">USER6 님</p>
                                            <p class="review_text1">“ 꼼꼼하게 진찰해 주셨어요 “</p>
                                            <p class="review_text2">저는 평소에 허리 통증이 심해서 여러 병원에 다녔었는데요<br>
                                                그래도 나아지지 않는 거 같고 진료 과정에서도 불만족스러워서<br>
                                                이번에 서울 아산 병원에 방문하게 되었습니다. <br>
                                                다른 병원과는 다르게 진료도 꼼꼼하게 봐주시고 어디가 왜<br>
                                                아픈지 상세하게 설명해 주셔서 만족스러웠어요.<br>
                                            </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <div class="review_more">
                        <a href="#">
                            더보기
                        </a>
                    </div>
                </section>
          </div>
            <!--e: 방문후기 영역-->
            <!--s: FAQ 영역-->
           <div class="contents_faq">
                <section class="wrap faq">
                    <div class="faq">
                        <div class="faq_title">
                            <h2>궁금하신 부분을<br>
                                쉽고 빠르게 해결하세요</h2>
                            <p>
                                <a href="#">자주 묻는 질문 전체보기 <i class="fa-solid fa-angle-right"></i></a>
                            </p>
                        </div>
                        <div class="faqAll_wrap">
                            <button id="faq_prevBtn" class="btn prev"><i class="fa-solid fa-angle-left"></i></button>
                            <button id="faq_nextBtn" class="btn next"><i class="fa-solid fa-angle-right"></i></button>
                            <div class="faqSlide_wrap">
                                <ul class="faqSlide_list">
                                    <li class="green">
                                        <a href="#">
                                            <img src="/bandi/img/contents_5/user_w.png" alt="프로필">
                                            <p>내 정보를<br>변경하고 싶어요1</p>
                                        </a>
                                    </li>
                                    <li class="orange">
                                        <a href="#">
                                            <img src="/bandi/img/contents_5/user_w.png" alt="프로필">
                                            <p>내 정보를<br>변경하고 싶어요2</p>
                                        </a>
                                    </li>
                                    <li class="blue">
                                        <a href="#">
                                            <img src="/bandi/img/contents_5/user_w.png" alt="프로필">
                                            <p>내 정보를<br>변경하고 싶어요3</p>
                                        </a>
                                    </li>
                                    <li  class="green">
                                        <a href="#">
                                            <img src="/bandi/img/contents_5/user_w.png" alt="프로필">
                                            <p>내 정보를<br>변경하고 싶어요4</p>
                                        </a>
                                    </li>
                                    <li class="orange">
                                        <a href="#">
                                            <img src="/bandi/img/contents_5/user_w.png" alt="프로필">
                                            <p>내 정보를<br>변경하고 싶어요5</p>
                                        </a>
                                    </li>
                                    <li  class="blue">
                                        <a href="#">
                                            <img src="/bandi/img/contents_5/user_w.png" alt="프로필">
                                            <p>내 정보를<br>변경하고 싶어요6</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
           </div>
            <!--e: FAQ 영역-->
        </div>
        <!--e: 컨텐츠 영역-->
        <!--s: footer 영역-->
        <? include_once $_SERVER["DOCUMENT_ROOT"]."/bandi/inc/footer.html" ?>
        <!--e: footer 영역-->
</body>
</html>