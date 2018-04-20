/*
Usage
-----
This query is used to fetch the list of games in GameFrame, sorted by most popular.
This makes it so that the user does not have to spend as much time scrolling down to their desired game on average.
For example, instead of having to scroll down to L for League of Legends since it is likely to be #1 it would be listed first.
*/

SELECT GameName
FROM games
ORDER BY NumUsers DESC;
