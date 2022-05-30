create table comment (
    num int not null auto_increment,
    movie_num int not null,
    score int not null,
    recommend char(10) not null, -- 연출, 스토리, 연출, 배우, 영상미
    id char(15) not null,
    content text not null,  
    regist_day char(20) not null,
    like_num int not null,
    primary key(num)
);
