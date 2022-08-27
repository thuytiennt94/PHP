create table IF not exists `manager`(
    `id` int(11) not null auto_increment,
    `name` Nvarchar(100) not null,
    `address` Nvarchar(255) not null,
    `phone` int(11) not null,
    primary key (`id`)
)engine = InnoDB default charset = latin1 Auto_increment = 4;

insert into `manager` (`id`, `name`, `address`, `phone`)
values (1, N'Nguyễn VĂn A', N'TPHCM', 0123564885 ),
       (2, N'TRần Văn B', N'Hải Phòng', 0954263691 ),
       (3, N'Đỗ Thị M', N'Hà Nội', 0866123656 );

select * from manager;
drop table `manager`