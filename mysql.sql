mysql --user=root --password=
show databases;
create database authorsandbooks;
use authorsandbooks;

CREATE TABLE Bøker
(
  id         INT          NOT NULL,
  title      VARCHAR(250) NULL    ,
  ISBN       INT          NULL    ,
  forfaterid INT          NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE Forfatter
(
  id        INT         NOT NULL,
  Fornavn   VARCHAR(60) NULL    ,
  Etternavn VARCHAR(60) NULL    ,
  Email     VARCHAR(60) NULL    ,
  PRIMARY KEY (id)
);

ALTER TABLE Bøker
  ADD CONSTRAINT FK_Forfatter_TO_Bøker
    FOREIGN KEY (forfaterid)
    REFERENCES Forfatter (id);

insert into Forfatter(Fornavn, Etternavn, Email)
VALUES("", "", "");
        
      