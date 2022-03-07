mysql --user=root --password=
show databases;
 create database authorsandbooks;
use authorsandbooks;

CREATE TABLE Forfatter
(
  id        INT  PRIMARY KEY AUTO_INCREMENT NOT NULL,
  Fornavn   VARCHAR(60) NULL    ,
  Etternavn VARCHAR(60) NULL    ,
  Email     VARCHAR(60) NULL    
);
CREATE TABLE Bøker
(
  id         INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  title      VARCHAR(250) NULL    ,
  ISBN       INT          NULL    ,
  forfatterid INT          NOT NULL,
  FOREIGN KEY (forfatterid) references Forfatter(id)
);


insert into Forfatter (Fornavn,Etternavn, Email) values ("*Anderes","Andersen","anders@andersen.no");
insert into Forfatter (Fornavn,Etternavn, Email) values ("*Baldor","Balto","balle@ballesen.no");
insert into Forfatter (Fornavn,Etternavn, Email) values ("*Cedrik","Andersen","anders@andersen.no");
insert into Forfatter (Fornavn,Etternavn, Email) values ("*Anderes","Andersen","anders@andersen.no");

 insert into bøker (Title,ISBN, forfatterid) values ("hanesen", 347637, 3);        
      