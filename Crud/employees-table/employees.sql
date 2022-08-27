create table IF not exists `employees`(
    `id` int(11) not null auto_increment,
    `name` varchar(100) not null,
    `address` varchar(255) not null,
    `salary` int(10) not null,
    primary key (`id`)
    )engine = InnoDB default charset = latin1 Auto_increment = 4;

insert into `employees` (`id`, `name`, `address`, `salary`)
values (1, 'roland mendel', 'c/araquil, 67, madrid', 5000 ),
       (2, 'Victoria ashworth', '35 king george,  London', 65000 ),
       (3, 'Martin black', '25, Rue lauriston, Paris', 8000 );

select * from employees;