-- Active: 1734339169127@@127.0.0.1@3306@players
CREATE DATABASE players;
 USE players;
 CREATE TABLE Club (
    ClubID INT PRIMARY KEY AUTO_INCREMENT,
    ClubName VARCHAR(100),
    Logo VARCHAR(255)
);
CREATE TABLE Country (
    CountryID INT PRIMARY KEY AUTO_INCREMENT,
    CountryName VARCHAR(100),
    Flag VARCHAR(255)
);


 CREATE TABLE joueur(
    JoueurID INT PRIMARY KEY AUTO_INCREMENT,
    JoueureName VARCHAR(100),
    Photo VARCHAR(255),
    Position VARCHAR(50),
    Rating INT,
     Pace INT,
    Shooting INT,
    Passing INT,
    Dribbling INT,
    Defending INT,
    Physical INT,
    CountryID INT, 
    ClubID INT, 
    FOREIGN KEY (CountryID) REFERENCES Country(CountryID),
    FOREIGN KEY (ClubID) REFERENCES Club(ClubID)
 );
