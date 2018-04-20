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

INSERT INTO games (GameID, GameName)
VALUES (0, "League of Legends"), (1, "Barbie and the Magic of Pegasus"), (2, "Hello Kitty Island Adventure"), (3, "Minesweeper");

CREATE TABLE playing (
    UserID int,
    GameID int,
    TimeLogged int
);
