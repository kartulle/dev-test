CREATE TABLE dogs (
    ID int NOT NULL AUTO_INCREMENT,
    nomes varchar(50) NOT NULL,
    PRIMARY KEY (ID)
);
CREATE TABLE cats (
    ID int NOT NULL AUTO_INCREMENT,
    nomes varchar(50) NOT NULL,
    PRIMARY KEY (ID)
);

insert into cats(nomes) values('Anya'), ('Mabel');
insert into dogs(nomes) values('Simba'), ('Duke');

SELECT nomes FROM dogs
UNION
SELECT nomes FROM cats
ORDER BY nomes;
