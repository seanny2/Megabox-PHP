create table movie (
    id int not null auto_increment,
    title char(30) not null,
    reservation_rate float not null,
    release_date date not null,
    summary tinytext not null,
    like_num int not null,
    like_rate float not null,
    img_src char(30) not null,
    primary key(id)
);

insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src) 
    values ('닥터1', 83.7, '2022-05-04', '111', 260, '8.7', '/img/db_movie/m001.jpg');
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src) 
    values ('닥터2', 5.1, '2022-05-04', '223', 3100, '8.5', '/img/db_movie/m002.jpg');
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src) 
    values ('닥터3', 2.5, '2022-05-04', '3123', 1110, '8.5', '/img/db_movie/m003.jpg');
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src) 
    values ('닥터4', 1.9, '2022-05-04', '4124', 264, '8.1', '/img/db_movie/m004.jpg');
insert into movie (title, reservation_rate, release_date, summary, like_num, like_rate, img_src) 
    values ('닥터5', 1.6, '2022-05-04', '5124', 2600, '7.1', '/img/db_movie/m005.jpg');