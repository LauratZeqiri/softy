CREATE TABLE klientat(
klientiid int(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
emri varchar(20) NOT NULL,
mbiemri varchar(20) NOT NULL,
telefoni varchar(20),
nrpersonal varchar(30),
datalindjes date,
email varchar(25) NOT NULL,
fjalekalimi varchar(20),
komuna varchar(20),
roli bit
);

CREATE TABLE pakot(
pakotid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
emri varchar(20) NOT NULL,
pershkrimi text
);

CREATE TABLE blerjet(
blerjaid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
klientiid int(11)NOT NULL,
pakotid int(11) NOT NULL,
datablerjes date,
komente text,
FOREIGN KEY (klientiid) REFERENCES klientat(klientiid)
       ON DELETE CASCADE
       ON UPDATE CASCADE,
FOREIGN KEY (pakotid) REFERENCES pakot(pakotid)
       ON DELETE CASCADE
       ON UPDATE CASCADE
);