create table authors (
                         authorid int(11) not null AUTO_INCREMENT,
                         name varchar(50) not null default '',
        primary key (authorid)
)   ENGINE = InnoDB default charset = utf8 auto_increment = 5;

insert into authors (authorid, name) values
                                         (1, 'j.r.r tolkien'),
                                         (2, 'alex haley'),
                                         (3, 'tom clancy'),
                                         (4, 'isaac asimov');

create table books (
                       bookid int(11) not null auto_increment,
                       authorid int(11) not null default '0',
                       title varchar(55) not null default '',
                       ISBN varchar(25) not null default '',
                       pub_year smallint(6) not null default '0',
                       available tinyint(4) not null ,
                       primary key (bookid)
) engine = InnoDB default charset = utf8 auto_increment = 19;

insert into books (bookid, authorid, title, ISBN, pub_year, available) values
(1, 1, 'the two towers ', '0-261-10236-2',1954,1),
(2, 1, 'the return of the king', '0-261-10237-0',1955,1),
(3, 2, 'Roots', '0-440-17464-3',1974,1),
(4, 2, 'Rainbow Six', '0-425-17034-9',1998,1),
(5, 2, 'Teeth of the tiger', '0-425-17034-9',1968,1),
(6, 1, 'executive orders', '0-425-17034-9',1991,1),
(7, 3, 'the hobbit', '0-425-17034-9',1937,1);

select * from books;