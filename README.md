# Ginder

## Names:
Prashanth Sivoththaman (8693247)  
Rafi Biouss (300018927)  
Gabrelle Duenas (300081950)  



# Deliverable 4

G-inder is an online gamer database where different players from different games can put up posts looking for other people to play with. In each of these posts players will discuss what kind of players they’re looking for whether it be purely to have fun with others, or it be skilled based if someone is looking for a person of similar ranks in their game.



# Implementation Features Server / Client / HTML / CSS


This project utilizes html and css to create the front end of this website.

Php is the server language used to communicate, write data, and fetch data from the databases on the backend

html is used in create_post.php, createprofile.php, find_gamers.php, homepage.html, report.php

css is used in: styles.css

php is used in : create_post.php, createprofile.php, find_gamers.php, report.php and post.php

The database langauages used are mysql and sql




# Software Documentation

## Server Installation

## PHP

This project requires php 8.1.3 to be installed
https://windows.php.net/download#php-8.1

The server technology we chose to integrate was php. 

Install XAMP so that website can be run from local host XAMP server
https://www.apachefriends.org/index.html

Install files for phpmyAdmin
https://www.phpmyadmin.net/

## Database Technology

The database technology we chose use was MySQL

MySQL was run using phpmyadmin

(instalation instructions for phpMyadmin)

Install files for phpmyAdmin
https://www.phpmyadmin.net/

the other databse  we used was pgAdmin

link to install

https://www.pgadmin.org/download/pgadmin-4-windows/




# Demployment Instructions

move GINDER project into XAMP\htdocs in your C directory

open XAMP, and click start for both APACHE and MySQL

![XAMPpicSTART](https://user-images.githubusercontent.com/55245271/156675587-f43486d0-b92c-4b69-b066-7b9d6b52fd10.JPG)

on your webbrowser type this link:  http://localhost/Ginder/homepage.html

Setup postgres database

1.open Pgadmin
2. Right click "Database"
3. Click Create..
4. Click Databse
5. Name the database GinderDB
6. right click on GinderDB
7. click restore
8. select "GinderDatabase"

# Adherance to UI Design System

## Colour Palette

Background gradient goes from top to bottom from dark blue to light blue

Letters are white with a dark grey background for easibility to read 

Grey background boxes are bordered with black for organizing and easier to distinguish sections

## Fonts and Type Scale

Font is Calibri in order to make the words very easy to read

Title of website is size h1 to draw your attention first

Subsections is size h2 to draw attention second

Paragraphs are wrriten with size 12 for easibility to read and not too big to take up too much space 

![ad1](https://user-images.githubusercontent.com/55245271/161641623-d34cc250-4e61-43f6-a82b-7a9b93c86d12.JPG)


## Icons/Images

Icons-REPORT A PROBLEM.png was used for the report a problem icon![ad2](https://user-images.githubusercontent.com/55245271/161641656-baa62dae-b574-4f52-a9f2-561cdf0dc7ef.JPG)




th.png was used in the homepage.html page in the website details section
![ad3](https://user-images.githubusercontent.com/55245271/161641675-408b9b82-3f16-4c9a-b9e5-2ca731d715db.JPG)

## UI Components

radio inputs, and drop downs inputs were used in createprofile.php and  create_post.php


The dropdown inputs allows for users to select their skill level
![ad4](https://user-images.githubusercontent.com/55245271/161641759-226f2de8-8318-43a4-b55d-90ebabb3d195.JPG)

A navigation bar is used to go from website section to another efficiently.![ad5](https://user-images.githubusercontent.com/55245271/161641772-f65a8772-8cf8-49e2-96c7-9c35133789b3.JPG)




# Seeding application with sample data

## screenshot from phpmyadmin

## screenshot from pgadmin

The table entitygamerposts contains the attributes gamertag, console, rank, skill, and descriptipn,  
the values are inputted by the create_post.php
![dbseed](https://user-images.githubusercontent.com/55245271/161630746-5fa01eba-2e4c-4c17-8b83-490082456c97.JPG)



# Screenshots of available features
## Feature 1: creating profile

## Feature 2: Report Problem

##  Feature 3: Create Post

This feature allows a user to create posts under their gamertag

first user navigates to create_post.php

next user inputs the required fields in the create post form and clicks submit

![post1](https://user-images.githubusercontent.com/55245271/161453505-8b664688-9f4a-475f-9d53-41dce6c3ac8c.JPG)

The form then posts to the database

![post2](https://user-images.githubusercontent.com/55245271/161453510-b0b2345e-4a4a-4573-ba2c-7b5cce6993f1.JPG)


## Feature 4: Find gamer

This feature allows the user to find the information and post of a desired game
once the user types in the gamertag ame, the webpage displays the information of the gamertag

user navigates to find gamer page (find_gamers.php)
![Search1](https://user-images.githubusercontent.com/55245271/161453517-d0851716-c656-4f1a-a2ff-8b1fc427e77a.JPG)


user inputs gamertag of desired gamer that the user wants infomation for and hits submit
![Search2](https://user-images.githubusercontent.com/55245271/161453521-705b91db-3efb-406c-acf9-220ef0596fda.JPG)

the webpage then displays the info of that specifc gamer  (fetching values from the database)

![Search3](https://user-images.githubusercontent.com/55245271/161453529-f1e95f85-4569-45a9-867b-0e52b449a234.JPG)



# Git usage (commit messages, all students involved)















# Deliverable 3

# Server Technology

## PHP

This project requires php 8.1.3 to be installed
https://windows.php.net/download#php-8.1

The server technology we chose to integrate was php. 

The php file name is called linking.php. This file was used to call to a query to the database and input into the database values that were retrieved from the html form in creatingprofile.html

the page createprofile.html uses form which calls the php file linker.php

![htmlphhp](https://user-images.githubusercontent.com/55245271/156678174-63f29b68-04c6-43eb-978a-7ce3b1649397.JPG)


The php file used was linker.php

This file made called a query to the database to insert select values into the database (firstname, last name, email, gamertag, console) 

# from Ginder\linker.php

![phpvar](https://user-images.githubusercontent.com/55245271/156678499-8b440e9b-89c8-4820-9864-50e5871571a1.JPG)


![querysnip](https://user-images.githubusercontent.com/55245271/156678504-ff4cc643-2165-4d3a-a77f-919d14e20618.JPG)


# DataBase Technology

The database technology we chose use was MySQL

MySQL was run using phpmyadmin

(instalation instructions for phpMyadmin)

Install XAMP so that website can be run from local host XAMP server
https://www.apachefriends.org/index.html

Install files for phpmyAdmin
https://www.phpmyadmin.net/

# Demployment Instructions

move GINDER project into XAMP\htdocs in your C directory

open XAMP, and click start for both APACHE and MySQL

![XAMPpicSTART](https://user-images.githubusercontent.com/55245271/156675587-f43486d0-b92c-4b69-b066-7b9d6b52fd10.JPG)


go to your web browser and enter http://localhost/Ginder/createprofile.html


# Screenshots for DataBase Demonstration

Inputting data

![input](https://user-images.githubusercontent.com/55245271/156673605-a621f8c8-fac2-4210-a871-80ec1eced563.JPG)

Confirmation Message

![confirmationMessage](https://user-images.githubusercontent.com/55245271/156673726-4c361078-55e8-4a36-9d73-ad21f1ce3cd4.JPG)


Newley added Vales in DataBase
![dbSUCCESS](https://user-images.githubusercontent.com/55245271/156673932-7f4d372b-2207-47ea-853e-5cf53ad76988.JPG)


## Refined HTML/CSS + UI Design System
Modified titles on all pages to a cleaner bordered look to make the visuals of the website sleeker

Old Titles

![image](https://user-images.githubusercontent.com/55254984/156866152-5ccffc84-c84b-4fa0-92c4-156293f9cf03.png)

Modified Titles for Delivarable 3

![image](https://user-images.githubusercontent.com/55254984/156866159-3bd3ce85-335b-4555-99e8-7f0a104bdc28.png)

Changed Nav Bar to Black While Hovering Over Page Titles

![image](https://user-images.githubusercontent.com/55254984/156866163-bb7d2050-d58d-4339-9b5c-e8566f861e7e.png)

Code Accomplishsing the Above Image

![image](https://user-images.githubusercontent.com/55254984/156866169-0637c6be-be4d-473d-9976-b48e7148e710.png)

## Front-end (mock) interactivity using JavaScript

We created a file Ginder\simulation.js to simulate the mock entry of files with predefined values

![CaptureJS](https://user-images.githubusercontent.com/55245271/156862848-9cfb2b22-c863-447c-a4eb-9fe7ebb3c29c.JPG)


## Testing

From the mock function, we ran test using predefined values

(screenshot taken after clicking the submit button and clicking the back button from the success message page)
![t1](https://user-images.githubusercontent.com/55245271/156863202-1152291e-275f-4a78-b672-d01e0995292e.JPG)

As seen in the below 2 diagrams the mock js test was able to succesfully add values to the database

![t2](https://user-images.githubusercontent.com/55245271/156863233-6dc5fa1d-7d4c-4894-8fa2-905876eca958.JPG)

![t3](https://user-images.githubusercontent.com/55245271/156863238-e57fdb40-5033-49aa-bd2b-61bd8ab70f80.JPG)


## Application Name:
G-Inder

## Description
Have you ever wanted to play your favorite game but couldn’t find the right person to play with? Struggling through random game lobbies with random people can feel like such a hassle when you just want to have a good time with the right people. This is where our project known as G-inder (Gamer Tinder) will help. G-inder is an online gamer database where different players from different games can put up posts looking for other people to play with. In each of these posts players will discuss what kind of players they’re looking for whether it be purely to have fun with others, or it be skilled based if someone is looking for a person of similar ranks in their game.

Once someone finds a post in our database that matches what they're looking for they can click on the user's post and comment to let the poster know that they're available. From here the poster can click on the commenters profile and decide if he wants to join up with this player and add him on their preferred gaming device. Profiles can include details such as preferred gaming device, preferred games, and skill level within the game.

## Technologies/Languages/Frameworks:

G-inder will utilize  HTML, CSS to structure the content and appearance. Currently we plan to use vanilla javascript for user interactions with the application, however in the future we may plan to use a Framework such as React. We will implement a DataBase that will store user profile information such as the gamer’s usernames, console device, experience level, and the games that the user plays. The database management system is still yet to be decided for our application.  
