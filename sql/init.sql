CREATE TABLE USER (
id INT AUTO_INCREMENT PRIMARY KEY,
lastname VARCHAR(100),
firstname VARCHAR(100),
email TEXT,
mdp VARCHAR(100),
birthdate DATE
);

CREATE TABLE STUDENT (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lastname VARCHAR(100) NOT NULL,
    firstname VARCHAR(100) NOT NULL,
    birthdate DATE,
    email VARCHAR(100)
);

INSERT INTO STUDENT (lastname, firstname, birthdate, email) VALUES
('Sassi', 'Dayssem', '2007-11-20', 'sassidayssem@gmail.com'),
('Sassi', 'Lina', '2015-01-24', 'sassilina@gmail.com'),
('Mousseron', 'Carole', '1979-01-19', 'mousseroncarole@gmail.com'),
('Sassi', 'Elyes', '1983-07-31', 'sassielyes@gmail.com'),
('Mathieu', 'Lise', '2007-11-20', 'mathieulise@gmail.com');