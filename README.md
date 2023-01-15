# Sports-Management-System-Application
Fullstack project of a sports management application written in PHP and MySQL with a team of 4 people.

Please review the images and descriptions of the database model and application interface to get a better understanding of the project.
The PHP files for the frontend development may also be viewed.

## Backend
### Summary
Our data model utilizes third normal form to minimize data redundancy and allow for more flexibility.
It features 8 tables with 4 indices used for optimizing each field data type, and the expected volume of entries for each.
We also utilized multiple table joins for many of our selection statements to view data. To ensure reliability in our system we employed three methods of try and catch error trapping - insertion, deletion, and search.
### Database Design
![Screenshot (1)](https://user-images.githubusercontent.com/78614153/212554192-86347f04-3346-48ee-9f2b-96417bf3b3fe.png)
## Features
### Main Menu
Our interface contains a menu that has the options: Players, Teams, Contracts, Games, and Locations.  The user will be able to click the buttons on this menu in order to take them to different parts of the application where they can then add to tables and use selects and projections.
### Players 
This will show the players that they have active for any upcoming games as well as their injury status and if they are a starter.  The user will be able to use this information to decide what actions need to be taken before the next game.  This could be adding players from the free agency database, checking a starter’s stats, or reactivating an injured player, for example.
### Contract 
A manager would be able to use this to see how long they will have certain players on their team for and any contracts they may want to renew.  Also, they can use the contract information to manage team funds more efficiently because they will know how much they are spending on players.  The user will additionally be able to see any special conditions affecting player contracts that they are considering moving to the trade block table or free agency.
### Player Stats 
The stats are entered by users following each game.  This feature can also be used to view stat leaders on each team or in the entire league.  It can be useful when determining things like awards or which players should be allowed to play in an all-star game. The user will interact with this function by being able to search for stats for an individual player or see stat leaders for a team.  Also, they will be able to add stats to a player through the interface by typing them in.
### Conferences 
The conference ID keeps track of which team is in a certain conference.  The conference winner is also tracked within the conference table.  The user can filter by conferences in order to track playoff spots and other things.  The user can interact with this feature by searching for conferences by their name or winning team.
### Locations 
The locations feature allows a user to manage the different locations where their games may be played.  Additionally, they will be able to track whether the stadium is indoors or outdoors.  A manager will want this information for insight on what conditions they may be playing in.  The user can add cities, states, and a boolean which tracks if the stadium is indoors.
### Team Tracking 
Each team is given a unique ID, so that if a league is very large and two teams have the same name, they can still be tracked as individuals.  Additionally, teams can be put into different conferences by the user.  The user can also track a team’s record throughout the season.  The user can then add any team and give them a record and conference.
### Game Records 
The game records feature part of our database holds the scores of various games during the season.  Each game has an individual identification to keep track of it.  The database will track the total score of the game as well as which teams played.  The user can add games to the database through the interface and well as filter to find games played by certain teams.
### Game Date 
The game date feature in our interface holds times, days, weeks of the season, and locations of games that are played in the sport.  The user can add games as they are played during the season, which will in turn add them to the database.  They can also search for games in certain weeks or on certain days.
## Application View
### Main Menu:
![Screenshot (2)](https://user-images.githubusercontent.com/78614153/212555468-22e30b50-0dc2-439e-a400-5b655844039f.png)
### Players Menu:
![Screenshot (3)](https://user-images.githubusercontent.com/78614153/212555471-d96b4bc1-b79a-45b8-946a-b2be87a8e876.png)
### Teams menu:
![Screenshot (4)](https://user-images.githubusercontent.com/78614153/212555474-c744d03f-f9b7-452f-8b90-b9f601995560.png)
### Contracts menu:
![Screenshot (5)](https://user-images.githubusercontent.com/78614153/212555475-c45b8c9a-62e4-4ce4-aa13-7992857693fb.png)
### Games menu:
![Screenshot (6)](https://user-images.githubusercontent.com/78614153/212555477-5255e9fb-639d-4f99-9e37-90a644723d19.png)
### Locations menu:
![Screenshot (7)](https://user-images.githubusercontent.com/78614153/212555479-ca1431d4-6767-4af2-b791-251cc9829038.png)
### Conferences menu:
![Screenshot (8)](https://user-images.githubusercontent.com/78614153/212555481-bda12d4c-5b97-4df4-84e3-ccbf955d13fd.png)
*Note - Images were taken at different times of development* 
