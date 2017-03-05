create detabase zhihu character set utf8;

set names gbk;

use zhihu;

create table denglu(
id int auto_increment comment 'id',
name varchar(30) not null comment '名字',
phone varchar(30) not null comment '手机号',
password varchar(30) not null comment '密码',
addtime varchar(30) not null comment '时间',
primary key(id)
)charset=utf8;


create table text(
id int auto_increment comment 'id',
image varchar(30) not null comment 'image',
title varchar(30) not null comment '标题',
text text not null comment '内容',
topic varchar(30) not null comment '话题',
primary key(id)
)charset=utf8;