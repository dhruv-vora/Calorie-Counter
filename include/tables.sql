
/*creating a table to store details of blogs*/
CREATE TABLE blogs (
	id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    body TEXT,
    author_first VARCHAR(50),
    author_last VARCHAR(50),
    created DATETIME
);
/*creating a table to store details of temporary blogs*/
CREATE TABLE tempblogs (
	id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    body TEXT,
    author_first VARCHAR(50),
    author_last VARCHAR(50),
    created DATETIME
);

/*creating a table to store entire blogs*/

CREATE TABLE blog_body (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    body TEXT
);

/*inserting initial articles for trial*/

INSERT INTO `blogs`(`title`, `body`, `author_first`, `author_last`, `created`) 
VALUES ('Kale Caesar Salad','I don’t have an issue eating healthy as long as it taste good! This Kale Caesar Salad is addictive!  The homemade garlic herb croutons and garlic caesar dressing might just make you eat a salad every','abc','def',now()),
('Lemon Blueberry Butter Cake','This lemon blueberry butter cake is melt in your mouth delicious! I don’t know if there is much else to say here because this dessert seriously had me speechless.  I topped mine with vanilla bean ice','qwe','rty',now()),
('Gouda and Cheddar Garlic Biscuits','I just took Red Lobster Cheddar Biscuits up a notch!  Smile – I LOVE Red Lobster Cheddar Biscuits so as I normally do when I eat food I love, I go home and try to not','hji','dgs',now()),
('Black Bean Summer Salad','This black bean salad is fresh and delicious.  My daughter said it reminded her of something that would come out of the Chipolte kitchen as she filled her plate with seconds.  It can be a light','utr','erg',now()),
('Strawberry Mango Lemonade Slushie','This strawberry mango lemonade slushie reminds me of the Frozen Iced Mango drink I order from Cheesecake Factory.  It is delicious and refreshing.  Since I use frozen fruit it can be enjoyed all year long! ','giy','zxc',now()),
('Creamy Crab Dip','I love all forms of crab but my favorite has got to be anything crab AND creamy!  This creamy crab dip just melts in your mouth and is full of delicious flavors that warms your heart!','hji','poi',now());

