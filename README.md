
# IS601-Final Project (Kalpit Khamar)" 

Heroku Link: 
https://is601faqfinalprog.herokuapp.com/ 

Github link: 
https://github.com/kkk0482/FAQfinal1  

#EPIC:
Dashboard page displaying the below three new features.
1.	User can see everyone’s questions on their home page instead of seeing only their own questions. User can edit or delete their own question and answers but user cannot edit or delete other’s question and answers
2.	User can like answers and like count will increment for each like it will receive. User can unlike question if they change their mind
3.	Can see their own question under My account drop down. Since home page shows all questions, it is hard to short user’s their own question ( this function is under development while submit final project)
In this feature, users can login in the system and view the list of all questions. User can open a question, and see the list of answers. Then they can open one of the answers and user can provide like for the answer. Later on, they can unlike if the answer will not be useful. Under my profile page, user can see email address along with the profile details. Last feature is to find a link in dropdown under My Account to see only MY question option to see My questions only (this last feature is under development while I am submitting final project on 8/7/2019

#User stories:
**Userstory#1.**
As a user when I visit FAQ website, I want to see a Dashboard page displaying questions instead of their own questions

Test: To test, please login to FAQ application and will show all questions on the home page. You can add more questions and answers and you should be able to see other’s questions and answers

**Userstory#2.**
As a login user when I go to my home page, I should see all question. I can edit and delete my own questions but I can not edit or delete other’s questions and answers

Test: To test, please login to FAQ application, verify you can see edit and delete button for your own question and answers but you can not see that for other’s question and answers

**Userstory#3.**
As a user when I go to FAQ website, I want to see own email ID for my own account

Test: To test, please login to FAQ application, go to My account and under My account you can see Email address associate with my Profile

**Userstory#4.**
As a user when I go to FAQ website, I want to give like to answer answers that are useful and rating on more likes will help others to read that answer first. I should be ale to Unlike for the likes I have created

Test: To test, please login to FAQ application, go to any answers and you can click on like to add one more account of like for that answer. You can change your mind to unlike the answer to decrees like count

**Userstory#5.**
As a user, I want to see my own question since I do see everyone’s question after login (functionality is under development when I am submitting project)

Test: To test, please login to FAQ application, My account and you will see My question dropdown. Once you click My question dropdown, you should be able to see my own questions and all answers given for that questions


**# FAQfinal Project - How to run"** 
"# FAQfinal1" 

To run the FAQfinal1 project:

git clone https://github.com/kkk0482/FAQfinal1.git

CD into FAQfinal1 and run: composer install

cp .env.example to .env

run: php artisan key:generate

setup database (with sqlite or other https://laravel.com/docs/5.6/database)

run: php artisan migrate

run: phpunit

run: php artisan migrate:refresh --seed
