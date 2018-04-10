CREATE TABLE users (
    UserID int,
    Username varchar(255),
    UserEmail varchar(255),
    UserPass varchar(255),
);

INSERT INTO users (UserID, Username, UserEmail, UserPass)
VALUES (0,'Caius','desertprince@hotmail.com','mfboom3');

CREATE TABLE games (
    GameID int,
    GameName varchar(255)
);

CREATE TABLE playing (
    UserID int,
    GameID int,
    TimeLogged int
);