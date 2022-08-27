create table gallery(
    idGallery int(11) Auto_increment primary key not null,
    titleGallery LONGTEXT not null,
    descGallery LONGTEXT not null,
    imgFullNameGallery LONGTEXT not null,
    orderGallery int(11) not null
);
INSERT INTO gallery values
(1, 'img1' , 'fic', 'a.5b529b86efa255.21163392.png', 123),
(2, 'img2' , 'fic2', 'deep.jpg', 23),
(3, 'img3' , 'fic3', 'cascade.jpg', 79);

select * FROM gallery;
drop table gallery