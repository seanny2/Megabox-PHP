create table event (
    num int not null auto_increment,
    division char(10) not null,
    title char(50) not null,
    startDate date not null,
    endDate date not null,
    img_src char(30) not null,
    primary key(num)
);

insert into event (division, title, startDate, endDate, img_src)
    values ('추천', '[알뜰교통카드 X 메가박스] 알뜰하게 영화보고 콤보 구매하는 방법', '2021-11-04', '2022-12-31', '/img/event/e001.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', '나도 영화 평론가! 관람평 쓰고 포인트 받자!', '2022-01-01', '2022-06-30', '/img/event/e002.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', '[메가박스 X 진에어] 영화 그리고 여행 REBOOT', '2022-04-25', '2022-05-31', '/img/event/e003.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', '신규 & 휴면회원 만반잘부! 모두 혜택 받아가세요', '2022-01-01', '2022-12-31', '/img/event/e004.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', 'WELCOM TO DOLBY CINEMA LAND', '2022-05-04', '2022-07-31', '/img/event/e005.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', 'U+멤버십 고객 영화 2,000원 할인', '2021-02-01', '2022-12-31', '/img/event/e006.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', '[메가박스 X 밀크] 영화로운 포인트 생활2 - 50% PAY-BACK', '2022-05-02', '2022-05-31', '/img/event/e007.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', '[KT멤버십 X 메가박스] 5월 나의 초이스', '2022-05-02', '2022-05-15', '/img/event/e008.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', '[신세계포인트 X 메가박스] Dolby 관람하고 경품 받는 방법!', '2022-05-04', '2022-05-17', '/img/event/e009.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('추천', '내 차 보험료 확인하고 영화 1만원 할인쿠폰 받으세요!', '2022-04-18', '2022-12-31', '/img/event/e010.jpg');

insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '메가박스 오리지널 티켓 No.51 <닥터 스트레인지: 대혼돈의 멀티버스>', '2022-05-11', '2022-05-25', '/img/event/e101.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '<닥터스트레인지: 대혼돈의 멀티버스> 프로모션 콤보 출시', '2022-05-09', '2022-05-31', '/img/event/e102.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', 'WELCOME TO DOLBY CINEMA LAND', '2022-05-04', '2022-07-31', '/img/event/e103.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '[5월 가정의달] MAY Be Happy! - 매일매일 50%', '2022-05-04', '2022-05-31', '/img/event/e104.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '[5월 가정의달] MAY Be Happy! - 많2많2 경품이벤트', '2022-05-04', '2022-05-31', '/img/event/e105.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '[메가박스x밀크] 영화로운 포인트 생활2 - 최대 50% PAY-BACK', '2022-05-02', '2022-05-31', '/img/event/e106.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '스프라이트 제로와 함께하는 100% 당첨 이벤트', '2022-05-02', '2022-05-31', '/img/event/e107.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '[사상지점] 오픈 이벤트!', '2022-04-27', '2022-05-31', '/img/event/e108.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '메가박스 오리지널 티켓북 시즌2', '2022-04-25', '2022-12-31', '/img/event/e109.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '[목동지점] 리뉴얼오픈 이벤트!', '2022-04-27', '2022-06-30', '/img/event/e110.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '2022년 VIP 회원 혜택 안내', '2022-03-02', '2023-02-28', '/img/event/e111.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '나도 영화 평론가! 관람평 쓰고 포인트 받자!', '2022-01-01', '2022-06-30', '/img/event/e112.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '[VIP제휴혜택] 2022 교보문고 & 핫트랙스 특별 제휴 안내', '2022-03-01', '2023-02-28', '/img/event/e113.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('메가Pick', '신규 & 휴면회원 만반잘부! 모두 혜택 받아가세요', '2022-01-01', '2022-12-31', '/img/event/e114.jpg');

insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<닥터 스트레인지: 대혼돈의 멀티버스> 스페셜 코믹북 증정 이벤트', '2022-05-14', '2022-05-17', '/img/event/e201.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<범죄도시 2> 프리미어 상영회 이벤트', '2022-05-14', '2022-05-15', '/img/event/e202.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<파리, 13구> 굿즈패키지 상영회', '2022-05-14', '2022-05-14', '/img/event/e203.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<매스> 이동진 평론가 GV', '2022-05-13', '2022-05-13', '/img/event/e204.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<파리, 13구> 개봉기념 현장증정 이벤트', '2022-05-12', '2022-05-26', '/img/event/e205.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<크로스 더 라인> 개봉기념 현장증정 이벤트', '2022-05-12', '2022-05-26', '/img/event/e206.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<극장판 주술회전 0> 13주차 현장증정 이벤트', '2022-05-12', '2022-05-17', '/img/event/e207.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<우연과 상상> 에피소드 2화 포스터 증정 이벤트', '2022-05-11', '2022-05-25', '/img/event/e208.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<어부바> 관람 인증 이벤트', '2022-05-04', '2022-05-22', '/img/event/e209.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<배드 가이즈> 개봉주 현장증정 이벤트', '2022-05-07', '2022-05-24', '/img/event/e210.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<극장판 귀멸의 칼날:무한열차편> 3주차 현장증정 이벤트', '2022-05-05', '2022-05-19', '/img/event/e211.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<극장판 주술회전 0> 60만 돌파 감사 특전 이벤트', '2022-05-05', '2022-05-11', '/img/event/e212.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<닥터 스트레인지: 대혼돈의 멀티버스> 3D 예매 스페셜 이벤트', '2022-05-04', '2022-05-22', '/img/event/e213.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<스프링 블라썸> 개봉기념 현장증정 이벤트', '2022-05-04', '2022-05-18', '/img/event/e214.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<우연과 상상>', '2022-05-04', '2022-05-18', '/img/event/e215.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<닥터 스트레인지: 대혼돈의 멀티버스> 돌비 포스터 증정 이벤트', '2022-05-04', '2022-05-18', '/img/event/e216.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<닥터 스트레인지: 대혼돈의 멀티버스> 오리지널 티켓북 렌티큘러 포스', '2022-05-04', '2022-05-18', '/img/event/e217.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '[복지식당] 선착순 빵원티킷', '2022-05-02', '2022-05-17', '/img/event/e218.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<내가 처음으로 사랑한 소녀> 개봉 기념 현장증정 이벤트', '2022-04-28', '2022-05-25', '/img/event/e219.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<극장판 귀멸의 칼날:무한열차편> 2주차 현자증정 이벤트', '2022-04-28', '2022-05-25', '/img/event/e220.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<신비한 동물들과 덤블도어의 비밀> 3주차 현장증정 이벤트', '2022-04-2', '2022-05-25', '/img/event/e221.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<중경삼림 리마스터링> 2주차 현장증정 이벤트', '2022-04-27', '2022-05-25', '/img/event/e222.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<서울괴담> 개봉기념 현장증정 이벤트', '2022-04-27', '2022-05-25', '/img/event/e223.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<파리의 피아니스트: 후지코 해밍의 시간들> 개보이념 현장증정 이벤트', '2022-04-27', '2022-05-18', '/img/event/e224.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<달빛 그림자> 개봉기념 현장증정 이벤트', '2022-04-27', '2022-05-18', '/img/event/e225.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '[배드 가이즈] 선착순 빵원티켓', '2022-04-26', '2022-05-11', '/img/event/e226.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '[부가나이트] 선착순 빵원티켓', '2022-04-25', '2022-05-11', '/img/event/e227.jpg');

insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<극장판 귀멸의 칼날 : 무한열차편> 렌코쿠 생일 축하 서프라이즈 상영회', '2022-05-10', '2022-05-10', '/img/event/e601.jpg');
insert into event (division, title, startDate, endDate, img_src)
    values ('영화', '<서울괴담> 관람인증 이벤트', '2022-04-27', '2022-05-10', '/img/event/e602.jpg');
