create table firma(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    navn VARCHAR(120) NOT NULL,
    orgnummer VARCHAR(9) NOT NULL,
    adresse VARCHAR(120) NOT NULL,
    tlf VARCHAR(25) NOT NULL,
    postnummer INT(11) NOT NULL  
);

create table personer(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    firma_id INT,
    navn VARCHAR(60) NOT NULL,
    etternavn VARCHAR(60) NOT NULL,
    title VARCHAR(60) NOT NULL,
    epost VARCHAR(120) NULL,
    tlf INT(11) NOT NULL,
    FOREIGN KEY (firma_id) references firma(id) 
) ;

