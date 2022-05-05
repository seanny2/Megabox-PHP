create table movie (
    id int not null auto_increment,
    title char(30) not null,
    reservation_rate float not null,
    release_date date not null,
    summary text not null,
    like_num int not null,
    like_rate float,
    img_src char(30) not null,
    playing boolean not null default 0,
    special boolean not null default 0,
    society char(10),
    primary key(id)
);

insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('닥터 스트레인지: 대혼돈의 멀티버스', 84.8, '2022-05-04', 
    '지금껏 본 적 없는 마블의 극한 상상력! 5월, 광기의 멀티버스가 깨어난다! 끝없이 균열되는 차원과 뒤엉킨 시공간의 멀티버스가 열리며 오랜 동료들, 그리고 차원을 넘어 들어온 새로운 존재들을 맞닥뜨리게 된 ‘닥터 스트레인지’. 대혼돈 속, 그는 예상치 못한 극한의 적과 맞서 싸워야만 하는데….'
    , 2600, 8.7, '/img/db_movie/m001.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('배드 가이즈', 4.7, '2022-05-04', 
    '드림웍스 최초의 범죄오락액션 블록버스터! 어디 착한 짓 좀 해볼까? 작전 설계부터 금고 해제, 해킹, 액션, 위장까지 완벽한 팀플레이를 펼치는 자타공인 최고의 나쁜 녀석들이 한순간의 실수로 체포된다. 하지만 그들도 착해질 수 있다는 ‘마멀레이드 박사’의 주장으로 나쁜 녀석들은 바른 생활 갓생 프로젝트에 투입되고, 이들은 다시 한번 자유의 몸을 위해 태어나 처음으로 바른 생활에 도전하게 되는데… 나쁜 녀석들의 사상 초유 바른 생활 갓생 프로젝트가 시작된다!'
    , 205, 8.6, '/img/db_movie/m002.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('니 부모 얼굴이 보고 싶다', 2.5, '2022-04-27', 
    '“누군가 잘못했겠지 하지만 내 아들은 절대 아니야” 명문 한음 국제중학교 학생 ‘김건우’가 같은 반 친구 4명의 이름이 적힌 편지를 남긴 채, 의식불명 상태로 호숫가에서 발견된다. 병원 이사장의 아들 ‘도윤재’ 전직 경찰청장의 손자 ‘박규범’ 한음 국제중학교 교사의 아들 ‘정이든’ 그리고, 변호사 ‘강호창’(설경구)의 아들 ‘강한결’. 가해자로 지목된 아이들의 부모들은 자신의 권력과 재력을 이용해 사건을 은폐하려고 한다. 하지만, 담임 교사 ‘송정욱’(천우희)의 양심 선언으로 건우 엄마(문소리) 또한 아들의 죽음에 관한 진실을 알게 된다. 세상의 이목이 한음 국제중학교로 향하고, 자신의 아이들을 지키기 위한 가해자 부모들의 추악한 민낯이 드러나는데… 자식이 괴물이 되면, 부모는 악마가 된다'
    , 285, 8.5, '/img/db_movie/m003.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('복지식당', 1.5, '2022-04-14', 
    '1년 내내 바람이 부는 ‘수플레 섬’에 괴도 유의 예고장이 도착했다! 그의 목표는 섬의 보물인 ‘바람의 길잡이’! 엉덩이 탐정과 브라운, 견공 경찰서 일행은 ‘수플레 섬’에 방문해 ‘루루’를 만난다. 늘 바깥 세상을 동경하는 ‘루루’는 하늘을 자유자재로 누비는 특별한 능력을 가지고 있다. 예고된 보름달이 뜨는 밤, 엉덩이 탐정 일행은 ‘바람의 길잡이’를 지키기 위해 나서는데… 엉덩이 탐정의 명추리가 빛나는 순간, 섬에 숨겨져 있던 비밀이 밝혀진다!'
    , 41, 7.9, '/img/db_movie/m004.jpg', true, false, "flim");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('신비한 동물들과 덤블도어의 비밀', 1.4, '2022-05-05',
    '가장 위험한 마법에 맞선, 세상을 구할 전쟁이 시작된다! 1930년대, 제2차 세계대전에 마법사들이 개입하게 되면서 강력한 어둠의 마법사 그린델왈드의 힘이 급속도로 커진다. 덤블도어는 뉴트 스캐맨더에게 위대한 마법사 가문 후손, 마법학교의 유능한 교사, 머글 등으로 이루어진 팀에게 임무를 맡긴다. 이에 뉴트와 친구들은 머글과의 전쟁을 선포한 그린델왈드와 추종자들, 그의 위험한 신비한 동물들에 맞서 세상을 구할 거대한 전쟁에 나선다. 한편 전쟁의 위기가 최고조로 달한 상황 속에서 덤블도어는 더 이상 방관자로 머물 수 없는 순간을 맞이하고, 서서히 숨겨진 비밀이 드러나는데…'
    , 1600, 8.1, '/img/db_movie/m005.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('서울괴담', 1.1, '2022-04-27', 
    '어두운 터널을 홀로 지날 때의 두려움 옆집에서 들려오는 의문의 소리 중고 가구에 얽힌 미스터리 다른 사람을 향한 그릇된 질투 복수, 저주, 욕망에서 시작된 죽음보다 더한 공포의 실체가 찾아온다!'
    , 398, 7.1, '/img/db_movie/m006.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('부기나이트', 0.5, '2022-04-28',
    '“살아있을 마지막 날, 오늘은 뭘 해도 되는 날이다” 북한의 핵폭탄 선전포고로 아수라장이 되어버린 세상, 몇 시간 전까지만 해도 지루하고 평범한 일상을 살던 ‘유빈’은 인생에 마지막이 될 하루를 즐기기 위해 친구들과 함께 나이트클럽으로 향한다. 남자 화장실에서 만난 ‘연주’부터 큰돈을 만지게 해 준다는 술집 마담, 나이트클럽에서 만난 ‘경아’, ‘경아’ 대신 약속 장소로 나온 ‘유라’, 그리고 뜻밖의 장소에서 우연히 만난 첫사랑 ‘수경’까지 살아생전 데이트 한 번 못해본 ‘유빈’은 살아있는 하룻밤 동안 다섯 여자가 줄줄이 꼬이기 시작하면서 예기치 못한 사건 사고들이 벌어지기 시작하는데…'
    , 32, 6.6, '/img/db_movie/m007.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('범죄도시 2', 0.5, '2022-05-18',
    '“느낌 오지? 이 놈 잡아야 하는 거” 가리봉동 소탕작전 후 4년 뒤, 금천서 강력반은 베트남으로 도주한 용의자를 인도받아 오라는 미션을 받는다. 괴물형사 ‘마석도’(마동석)와 ‘전일만’(최귀화) 반장은 현지 용의자에게서 수상함을 느끼고, 그의 뒤에 무자비한 악행을 벌이는 ‘강해상’(손석구)이 있음을 알게 된다. ‘마석도’와 금천서 강력반은 한국과 베트남을 오가며 역대급 범죄를 저지르는 ‘강해상’을 본격적으로 쫓기 시작하는데... 나쁜 놈들 잡는 데 국경 없다! 통쾌하고 화끈한 범죄 소탕 작전이 다시 펼쳐진다!'
    , 475, null, '/img/db_movie/m008.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('극장판 귀멸의 칼날: 무한열차편', 0.3, '2022-04-21',
    '혈귀로 변한 여동생 ‘네즈코’를 되돌리기 위해 귀살대가 된 ‘탄지로’! 어둠 속을 달리는 무한열차에서 승객들이 흔적 없이 사라진다는 소식에 ‘젠이츠’, ‘이노스케’와 함께 임무 수행을 위해 무한열차에 탑승한다. 그리고 그 곳에서 만난 귀살대 최강 검사 염주 ‘렌고쿠’! 이들은 무한열차에 숨어 있는 혈귀의 존재를 직감하고 모두를 구하기 위해 목숨을 건 혈전을 시작하는데… 그 칼로 악몽을 끊어라!'    
    , 8100, 9.5, '/img/db_movie/m009.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('중경삼림', 0.3, '2022-04-20',
    '1994년 홍콩, “내 사랑의 유통기한은 만 년으로 하고 싶다” 만우절의 이별 통보가 거짓말이길 바라며 술집을 찾은 경찰 223 고단한 하루를 보내고 술집에 들어온 금발머리의 마약밀매상 "그녀가 떠난 후 이 방의 모든 것들이 슬퍼한다" 여자친구가 남긴 이별 편지를 외면하고 있는 경찰 663 편지 속에 담긴 그의 아파트 열쇠를 손에 쥔 단골집 점원 페이 네 사람이 만들어낸 두 개의 로맨스 새로운 사랑을 만나는 방법에 대한 독특한 상상력'
    , 822, 9.2, '/img/db_movie/m010.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('극장판 주술회전 0',0.2 , '2022-02-17',
    '어린 시절, 소꿉친구인 오리모토 리카를 교통사고로 눈앞에서 잃은 옷코츠 유타. “약속해. 리카와 유타는 어른이 되면 결혼하기로.” 옷코츠는 원령으로 변한 리카의 저주에 괴로워한 나머지, 자신도 죽기를 바라지만 최강의 주술사인 고죠 사토루에 의해 주술고전에 들어가게 된다. 그리고 동급생인 젠인 마키, 이누마키 토게, 판다를 만나면서 굳은 결심을 한다. “살아도 된다는 자신감이 필요해.” “나는 주술고전에서 리카의 저주를 풀겠습니다.” 한편, 옷코츠와 친구들 앞에 과거에 일반인을 대량으로 학살해서 고전에서 추방된 최악의 주저사인 게토 스구루가 나타난다. “12월 24일, 우리는 백귀야행을 간다.” 주술사만의 낙원을 만들려는 게토는 비술사를 섬멸하겠다면서, 신주쿠와 교토에 천의 저주를 내리는데……. 과연 옷코츠는 게토를 막을 수 있을까? 그리고 리카의 저주를 풀 수 있을까?'
    , 1700, 9.4, '/img/db_movie/m011.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('우연과 상상', 0.2, '2022-05-04', 
    '“마법보다 더 불확실한 걸 믿어볼 생각 있어?” ‘메이코’는 집으로 돌아가는 택시 안에서 친구에게 새로운 연애 상대 이야기를 듣는다. 여대생 ‘나오’는 교수 앞에서 그가 쓴 소설의 일부를 낭독한다. 20년 만에 고향을 찾은 ‘나츠코’는 그토록 만나고 싶던 동창생과 재회한다. 우연이 만들어내는, 조용히 아주 크게 움직이는 인생의 순간들이 있다. 이 영화는 그에 대한 상상의 결과물이다.'
    , 105, 9.2, '/img/db_movie/m012.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('수퍼 소닉2', 0.1, '20220-04-06',
    '레벨 업! 초특급 히어로 소닉의 새로운 시대가 열린다 도시의 악당들을 물리치며 바쁘게 지구를 지키고 있는 초특급 히어로 ‘소닉’. 버섯 행성으로 쫓겨나 ‘소닉’에게 복수를 계획하던 천재 악당 ‘로보트닉’은 엄청난 힘을 지닌 신비의 에메랄드를 차지해 세상을 지배할 야망을 꿈꾸며 지구로 돌아온다! 최강 파워로 업그레이드된 ‘로보트닉’과 강력한 펀치 파워 ‘너클즈’의 공격에 속수무책으로 당하던 ‘소닉’은 하늘을 나는 꼬리를 가진 귀여운 파트너 ‘테일즈’의 도움으로 위기를 모면하게 되는데... 초특급 히어로 소닉과 테일즈 VS 너클즈와 천재 악당 로보트닉 새로운 질서로 세계를 정복하려는 최강 빌런에 맞선 거대한 대결이 시작된다'
    , 228, 8.6, '/img/db_movie/m013.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('토르: 마법 검의 전설', 0.1, '2022-05-04',
    '용감한 빅은 아빠를 따라 언젠가 바이킹이 되어 바다로 나가고 싶어한다. 어느 날 빅의 아빠이자 바이킹 족장인 할바는 라이벌로부터 ‘마법의 검’을 훔치게 되고 황금으로 바꾸는 마법을 가진 검을 서로 갖고자 바이킹족은 한바탕 소동에 빠진다. 마법의 검에 의해 황금으로 굳어버린 엄마를 되찾기 위해 빅은 모험을 떠나게 되고 아스가르드로 향하던 중 신화 속 영웅 ''토르''와 ''로키''를 만나게 되는데… 과연 빅은, 마법의 검을 둘러싼 비밀을 밝히고 엄마를 구할 수 있을까?'
    , 38, 10, '/img/db_movie/m014.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('공기살인', 0.1, '2022-04-22',
    '“알고 있었죠, 사람이 죽을 수도 있다는 거” 봄이 되면 나타났다 여름이 되면 사라지는 죽음의 병. 공기를 타고 대한민국에 죽음을 몰고 온 살인무기의 실체를 밝히기 위한 그들의 사투. 증발된 범인, 피해자는 증발되지 않았다!'
    , 242, 8.4, '/img/db_movie/m015.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('민스미트 작전', 0, '2022-05-11',
    '제2차 세계대전의 판도를 바꿀 단 한 번의 기회! 우리는 이 전쟁의 승기를 잡을 것이다! 사상 최대의 인명 피해를 낳은 제2차 세계대전, 연합군과 추축군은 전쟁을 승리로 이끌 교두보 시칠리아를 두고 팽팽한 대립을 펼친다. 하지만, 추축군 독일의 위세가 상당해 시칠리아에는 이미 추축군 병력 무려 23만 명이 주둔해 있던 상황! 연합군은 해군 정보장교 ‘이웬 몬태규’와 ‘찰스 첨리’를 주축으로 전쟁의 승기를 잡을 단 한 번의 ‘민스미트 작전’을 계획하는데… 2022, 예상을 뛰어 넘는 위대한 작전이 시작된다!'
    , 175, null, '/img/db_movie/m016.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('[오페라] 신데렐라 @The Met', 0, '2022-04-05',
    '믿고 보는 연출가 로랑 펠리의 천재적인 희극성. 강단 있고 개성 넘치는 저음의 신데렐라가 보여주는 매력! [상영 정보] 상영지점 : 센트럴 / 코엑스 / 상암월드컵경기장 / 성수 / 분당 / 킨텍스 / 대전신세계 아트앤사이언스 상영일정 : 2022년 4월 5일(화) ~ 5월 14일(토) / 화 19:00, 토 10:00 러닝타임 : 111분 *인터미션 없음 [공연정보] 제작년도 : 2022년 1월 1일 작곡 : 마스네 (Massenet) 지휘 : 에마뉘엘 비욤 (Emmanuel Villaume) 연출 : 로랑 펠리 (Laurent Pelly) 출연 : 이자벨 레너드(신데렐라), 제시카 프랫(요정 대모), 에밀리 단젤로(왕자) 등 Isabel Leonard (Cinderella), Jessica Pratt (Fairy Godmother), Emily D’Angelo(Prince Charming) [시놉시스] 신데렐라 이야기인 마스네의 &lt;상드리옹&gt;을 영어로 번역한 대본을 바탕으로 로랑 펠리가 연출하여 편집된 버전이다. 부엌데기 신세에서 왕비로 변신한 신데렐라 역은 메조소프라노 이자벨 레너드가 맡았다. 지휘자 에마뉘엘 비욤은 신데렐라의 상대인 왕자 역의 메조소프라노 에밀리 단젤로, 요정 대모인 제시카 프랫, 만나면 싸우는 신데렐라 부모 역의 메조 소프라노 스테파니 블라이스와 베이스 바리톤 로랑 나우리 등 화려한 출연진을 이끌어간다.'
    , 90, 8.7, '/img/db_movie/m017.jpg', true, false, "classic");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('앵커', 0, '2022-04-20',
    '“제 죽음이 정세라 앵커의 입을 통해 보도되면 너무 기쁠 것 같아요” 생방송 5분 전, 방송국 간판 앵커 ‘세라’(천우희)에게 자신이 살해될 것이라며 죽음을 예고하는 제보전화가 걸려온다. 장난전화로 치부하기에는 찝찝한 마음을 감출 수 없는 ‘세라’. 진짜 앵커가 될 기회라는 엄마 ‘소정’(이혜영)의 말에 ‘세라’는 제보자의 집으로 향하고 제보자인 ‘미소’와 그녀의 딸의 시체를 목격한다. 그날 이후, ‘세라’의 눈앞에 죽은 ‘미소’의 모습이 자꾸만 떠오르기 시작한다. 사건 현장에서 미소의 주치의였던 정신과 의사 ‘인호’(신하균)를 마주하게 되며 그에 대한 ‘세라’의 의심 또한 깊어지는데… 완벽했던 앵커를 뒤흔들 충격적인 진실을 확인하라!'
    , 285, 7.9, '/img/db_movie/m018.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('스프링 블라썸', 0, '2022-05-04',
    '“이번에 맞이한 봄은 어딘가 달라요” 반복되는 일상에 싫증이 난 수잔은 극장 앞에서 연극배우 라파엘을 만난다 함께 음악을 듣고 산책을 하며 조금씩 가까워지는 두 사람 모든 것이 따분했던 수잔에게 설렘과 함께 첫 번째 봄이 찾아오기 시작했다'
    , 69, 8.9, '/img/db_movie/m019.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('드라이브 마이 카', 0, '2021-12-23',
    '누가 봐도 아름다운 부부 가후쿠와 오토. 우연히 아내의 외도를 목격한 가후쿠는 이유를 묻지 못한 채 갑작스럽게 아내의 죽음을 맞이하게 된다. 2년 후 히로시마의 연극제에 초청되어 작품의 연출을 하게 된 가후쿠. 그는 그곳에서 자신의 전속 드라이버 미사키를 만나게 된다. 말없이 묵묵히 가후쿠의 차를 운전하는 미사키와 오래된 습관인 아내가 녹음한 테이프를 들으며 대사를 연습하는 가후쿠. 조용한 차 안에서 두 사람은 점점 마음을 열게 되고, 서로가 과거의 아픔에서 벗어나지 못한 것을 알게 된다. 그리고 눈 덮인 홋카이도에서 내면에 깊숙이 자리 잡은 서로의 슬픔을 들여다보게 되는데….'
    , 433, 8.9, '/img/db_movie/m020.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('파리의 피아니스트: 후지코 헤밍의 시간들', 0, '2022-04-27',
    '스웨덴인 아버지와 일본인 어머니 사이에서 태어난 후지코 헤밍이 뮤지션이 되기 위해 거쳐온 삶을 파리부터 뉴욕, 아르헨티나, 베를린, 도쿄까지 따라가면서 담은 다큐멘터리'
    , 140, 8.6, '/img/db_movie/m021.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('녹색광선', 0, '2022-05-01',
    '청순한 소녀 델핀느는 여름휴가를 맞이하지만 친구들로부터 함께 휴가를 보낼 기회를 거절당한다. 내성적이고 소심한 그녀는 휴가 기간을 혼자 보내야 하는 외로운 처지에 놓이게 된다. 남자 친구를 구할 수 있기를 내심 바라지만 자신의 성격탓으로 뜻대로 되질 않는다. 그러나 델핀느는 희망을 잃지 않고 있다. 얼마전 친구로부터 녹색은 그녀에게 행운을 가져다 줄거라는 이야기를 들었기 때문이다. 좋은 일이 생길지 모른다는 친구의 권유에 따라 노르망디에 있는 친구집에서 휴가를 보낸다. 거기에서 델핀느는 남자들 사귀기는 고사하고 그곳 사람들과 잘 어울리지 못하고 불편함을 느낀다. 실망 속에서 델핀느는 집으로 돌아간다. 우연히 비아리츠역에서 만난 한 남자와 몇마디의 대화로 서로가 쉽게 통할 수가 있게 된 델핀느는 그에게 호감을 갖게 된다. 해변에 대양이 바다 수평선 너머로 사라지고 있는 일몰때 둘이는 보기 힘들 정도로 녹색빛을 발하는 바닷가에 지는 태양을 응시하고 있다. 빛의 굴절로 인해 일시적으로 녹색광선을 발한다. 델핀느는 녹색의 빛을 향하여 감탄의 소리를 지른다. 결국 그는 꿈을 이룬 것인데...'
    , 42, 8.1, '/img/db_movie/m022.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('소설가의 영화', 0, '2022-04-21',
    '여소설가가 잠적한 후배의 책방으로 먼 길을 찾아옵니다. 그리고 혼자 타워를 오르고 영화감독 부부를 만나고 공원을 산책하다 여배우를 만나게 되고, 여배우에게 당신과 영화를 만들고 싶다 설득을 합니다. 둘이 분식집에서 뭘 먹고, 다시 찾게 되는 후배의 책방에서 술자리가 깊어지고 여배우는 취해 잠이 드는데…'
    , 48, 8.3, '/img/db_movie/m023.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('뱅드림! 팝핀’ 드림!', 0, '2022-03-24',
    '''BanG Dream! 3rd Season''에서 이어지는 완전 신작 오리지널 애니메이션 무도관 공연을 성공시킨 Poppin''Party 꿈의 무대에 선 여운이 남아 있는 카스미 일행 앞에 의문의 여성이 나타난다. 다음 무대는 해외?! Poppin''Party의 음악은 아직 멈추지 않는다!'
    , 603, 9.5, '/img/db_movie/m024.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('로스트 시티', 0, '2022-04-20',
    '전설의 트레저를 차지하기 위해 재벌 페어팩스(다니엘 래드클리프)는 유일한 단서를 알고 있는 베스트셀러 작가 로레타(산드라 블록)를 납치하게 된다. 어쩔 수 없는 비지니스 관계로 사라진 그녀를 찾아야만 하는 책 커버모델 앨런(채닝 테이텀)은 의문의 파트너(브래드 피트)와 함께 위험한 섬에서 그녀를 구하고 무사히 탈출해야만 하는데… 적과 자연의 위험이 도사리는 일촉즉발 화산섬 대환장 케미의 그들이 생존하여 섬을 탈출할 수 있을까?'
    , 458, 7.6, '/img/db_movie/m025.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('해변의 폴린', 0, '2022-05-01',
    '얼마 전 이혼한 마리온과 그녀의 사촌 동생 폴린이 늦여름 해변가를 찾는다. 마리온은 자신이 연애 전문가라고 자부하지만 정작 지금까지 진정한 사랑을 나눈 적은 없다. ‘희극과 격언’ 연작 중 세 번째 작품으로 “입소문 내기 좋아하다 자기가 다친다”는 격언으로 시작한다. 1983년 베를린영화제 은곰상(감독상) 수상.'
    , 37, 8.3, '/img/db_movie/m026.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('평평남녀', 0, '2022-04-28',
    '바쁜 회사일로 연애는 못하고 기막힌 아이디어는 까이기 일수 승진은 남의 이야기 열정만렙 33살 만년대리! 우리의 영블리 영진 어느 날, 능력은 없지만 빽은 있는 낙하산 준설이 그녀 앞에 떨어지고 하루도 평평할 날 없는 영진의 고달픈 일상이 시작되는데… 일도 사랑도 꼬여버린 할많하않 오피스 브이로그가 온다!'
    , 36, 8.1, '/img/db_movie/m027.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('봄날', 0, '2022-04-27',
    '제2의 전성기는 반드시 온다! 한때는 잘나가던 큰형님 ''호성''(손현주). 8년 만에 출소해 보니 남보다 못한 동생 ''종성''(박혁권)은 애물단지 취급이고, 결혼을 앞둔 맏딸 ''은옥''(박소진)과 오랜만에 만난 아들 ''동혁''(정지환)은 ''호성''이 부끄럽기만 하다. 아는 인맥 다 끌어 모은 아버지 장례식에서 부조금을 밑천삼아 기상천외한 비즈니스를 계획하며 제2의 전성기를 꿈꾸는데… 그런데…! 하필이면 세력 다툼을 하는 두 조직이 이곳에 함께 있는 것이 아닌가! 때마침 눈치라고는 1도 없는 ''호성''의 친구 ''양희''(정석용)가 술에 취해 오지랖을 부리는데... 일촉즉발! 수습불가! 과연 X버릇 남 못 준 ''호성''에게 봄날이 찾아올까?'
    , 71, 7.4, '/img/db_movie/m028.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('여름 이야기', 0, '2022-05-01',
    '가스파르는 여름을 즐기기 위해 프랑스의 여름 휴양지 생 뤼에르를 찾아온다. 수학을 전공하지만 음악에 관심 있는 그는 현재 뱃노래를 구상중이고, 그 곡을 레나에게 줄 생각이다. 레나에게 생 뤼에르에서 함께 며칠을 보내자고 얘기했지만 레나에겐 소식이 없고 오히려 마고라는 여학생이 접근해 온다. 남자 이외에는 여자 친구가 있어본 적이 없었던 가스파르는 마고의 적극적인 접근에 당황하지만 둘의 관계는 단지 대화를 주고받는 것 이상의 관계로는 발전하지 않는다.'
    , 29, 0, '/img/db_movie/m029.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('봄 이야기', 0, '2022-05-01',
    '고등학교 철학 선생인 잔느는 두 개의 집 열쇠를 가지고 있음에도 불구하고 주말에 딱히 머물 곳이 없다. 남자친구의 집은 온통 어질러져 있고, 자신의 집에는 이미 친구가 월요일까지 머물겠다며 남자친구와 함께 와 있다. 갑자기 머물 곳을 잃게 된 잔느는 충동적으로 친구의 파티에 갔다가 우연히 자신과 비슷한 처지의 나타샤를 만나 의기투합하고 그녀의 집에 머문다. 어머니와 별거 중인 아버지가 젊은 여자친구와 사귀는 것을 싫어하는 나타샤는 잔느에게 호감을 느끼고 잔느와 아버지를 맺어주려 애쓴다.'
    , 26, 9, '/img/db_movie/m030.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('코다', 0, '2021-08-31',
    '2021년, 음악의 마법에 빠질 시간! 가장 조용한 세상에서 시작된 여름의 노래! 24/7 함께 시간을 보내며 소리를 들을 수 없는 가족을 세상과 연결하는 코다 ''루비''는 짝사랑하는 ''마일스''를 따라간 합창단에서 노래하는 기쁨과 숨겨진 재능을 알게 된다. 합창단 선생님의 도움으로 마일스와의 듀엣 콘서트와 버클리 음대 오디션의 기회까지 얻지만 자신 없이는 어려움을 겪게 될 가족과 노래를 향한 꿈 사이에서 루비는 망설이는데…'
    , 599, 9.1, '/img/db_movie/m031.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('내가 처음으로 사랑한 소녀', 0, '2022-04-27',
    '“그 시절 사랑했던 너와 나” 12년 내내 여학교를 다니며 학생대표를 해오던 윙(담선언), 그리고 그녀의 유일한 친구 실비아(양시영). 두 사람은 어느 순간 친구 이상의 감정을 느끼고 특별한 시간들을 보내며 미래를 약속하지만, 곱지 않은 주변의 시선과 상황들로 결국 둘은 이별을 택한다. 몇 년의 시간이 흐른 어느 날, 각자의 삶을 살아가던 두 사람은 한 통의 전화로 다시 만나게 되는데.. 평생 함께하자던 소울메이트였던 그들, 그때 너도 나와 같은 마음이었을까?'
    , 181, 8.7, '/img/db_movie/m032.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('쿠폰의 여왕', 0, '2022-04-27',
    '쿠폰으로 돈 벌기? ㄴㄴ 쿠폰으로 백만장자되기? ㅇㅇ 에르X스부터 람보X기니까지 공짜 쿠폰으로 다 된다! 쿠폰 모으기를 삶의 낙으로 삼으며 마트 직원에게 ‘쿠폰으로 창조 경제’를 설파하던 주부 코니. 어느 날, 공짜 쿠폰으로 돈을 벌 수 있는 획기적인 아이디어를 떠올리고 이웃집 절친이자 유튜버 꿈나무인 조조를 설득해 실행에 착수, 대박을 터뜨린다. 비즈니스 대성공의 기쁨을 만끽하며 명품부터 슈퍼카, 최신 무기 쇼핑까지 돈세탁에 열중하던 그때, 수상함을 감지한 마트 손실 방지 전문가 켄이 본격 수사에 나서는데...! 역대 최고 규모! 쿠폰으로 백만장자 된 여자들의 쿠폰 실화! 골 때리는 범죄 코미디가 온다!'
    , 84, 7.5, '/img/db_movie/m033.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('어나더 라운드', 0, '2022-01-19',
    '각각 역사, 체육, 음악, 심리학을 가르치는 같은 고등학교 교사 니콜라이, 마르틴, 페테르, 톰뮈는 의욕 없는 학생들을 상대하며 열정마저 사라지고 매일이 우울하기만 하다. 니콜라이의 40번째 생일 축하 자리에서 “인간에게 결핍된 혈중 알코올 농도 0.05%를 유지하면 적당히 창의적이고 활발해진다”는 흥미로운 가설에 대한 이야기를 나누고, 마르틴이 실험에 들어간다. 인기 없던 수업에 웃음이 넘치고 가족들과의 관계에도 활기가 생긴 마르틴의 후일담에 친구들 모두 동참하면서 두 가지 조건을 정한다. [언제나 최소 0.05%의 혈중 알코올 농도 유지할 것! 밤 8시 이후엔 술에 손대지 않을 것!] 지루한 교사, 매력 없는 남편, 따분한 아빠, 최적의 직업적, 사회적 성과를 위해 점차 알코올 농도를 올리며 실험은 계속되는데… 과연 술은 인간을 더 나은 상태로 만들 수 있을지, 도전의 결말은?!'
    , 475, 8.8, '/img/db_movie/m034.jpg', true, false, "film");
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('더 컨트랙터', 0, '2022-04-28',
    '국가를 위해 극비 작전에 뛰어든 남자 특수부대 중사 출신 ‘제임스 하퍼’는 전역을 명 받고 법의 테두리 밖에서 국가에 충성하는 극비 조직에 합류한다. 그에게 주어진 첫번째 미션은 전세계를 혼란에 빠뜨릴 바이러스 테러를 막는 것. 그러나 미션 수행 도중 거대한 음모에 휘말리게 되고 충격과 위기를 겪게 되는데… 더 이상 물러설 곳은 없다. 모든 것을 건, 새로운 미션이 시작된다!'
    ,94 , 8, '/img/db_movie/m035.jpg', true, false, null);
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src, playing, special, society) 
    values ('극장판 엉덩이 탐정: 수플레 섬의 비밀', 1.5, '2022-05-05',
    '1년 내내 바람이 부는 ‘수플레 섬’에 괴도 유의 예고장이 도착했다! 그의 목표는 섬의 보물인 ‘바람의 길잡이’! 엉덩이 탐정과 브라운, 견공 경찰서 일행은 ‘수플레 섬’에 방문해 ‘루루’를 만난다. 늘 바깥 세상을 동경하는 ‘루루’는 하늘을 자유자재로 누비는 특별한 능력을 가지고 있다. 예고된 보름달이 뜨는 밤, 엉덩이 탐정 일행은 ‘바람의 길잡이’를 지키기 위해 나서는데… 엉덩이 탐정의 명추리가 빛나는 순간, 섬에 숨겨져 있던 비밀이 밝혀진다!'
    ,66 , 8.9, '/img/db_movie/m036.jpg', true, false, null);