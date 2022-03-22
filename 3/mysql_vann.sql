create table firma(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    navn VARCHAR(120) NOT NULL,
    orgnummer VARCHAR(9) NOT NULL,
    adresse VARCHAR(120) NOT NULL,
    postnummer INT(11) NOT NULL,
    leverandor BOOLEAN NULL DEFAULT false
) ;

create table personer(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    firma_id INT NOT NULL,
    navn VARCHAR(60) NOT NULL,
    etternavn VARCHAR(60) NOT NULL,
    title VARCHAR(60) NOT NULL,
    epost VARCHAR(120) NULL,
    tlf INT(11) NOT NULL,
    FOREIGN KEY (firma_id) references firma(id) 
) ;

