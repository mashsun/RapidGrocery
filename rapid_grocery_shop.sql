DROP DATABASE IF EXISTS rapid_grocery_shop;
CREATE DATABASE rapid_grocery_shop;
USE rapid_grocery_shop;

-- create the tables for the database
CREATE TABLE categories (
  category_id        INT            PRIMARY KEY   AUTO_INCREMENT,
  category_name      VARCHAR(255)   NOT NULL      UNIQUE
);

CREATE TABLE products (
  product_id         INT            PRIMARY KEY   AUTO_INCREMENT,
  category_id        INT            NOT NULL,
  product_code       VARCHAR(10)    NOT NULL      UNIQUE,
  product_name       VARCHAR(255)   NOT NULL,
  description        TEXT           NOT NULL,
  list_price         DECIMAL(10,2)  NOT NULL,
  discount_percent   DECIMAL(10,2)  NOT NULL      DEFAULT 0.00,
  date_added         DATETIME                     DEFAULT NULL,
  CONSTRAINT products_fk_categories
    FOREIGN KEY (category_id)
    REFERENCES categories (category_id)
);

CREATE TABLE customers (
  customer_id           INT            PRIMARY KEY   AUTO_INCREMENT,
  email_address         VARCHAR(255)   NOT NULL      UNIQUE,
  password              VARCHAR(60)    NOT NULL,
  first_name            VARCHAR(60)    NOT NULL,
  last_name             VARCHAR(60)    NOT NULL,
  shipping_address_id   INT                          DEFAULT NULL,
  billing_address_id    INT                          DEFAULT NULL,
  membership_id			INT							 DEFAULT NULL
);

CREATE TABLE membership (
   membership_id         INT            PRIMARY KEY   AUTO_INCREMENT,
   customer_id        	 INT            NOT NULL,
   membership_point		 INT 						  DEFAULT 0,
   CONSTRAINT membership_fk_customers
    FOREIGN KEY (customer_id)
    REFERENCES customers (customer_id)
);

CREATE TABLE addresses (
  address_id         INT            PRIMARY KEY   AUTO_INCREMENT,
  customer_id        INT            NOT NULL,
  line1              VARCHAR(60)    NOT NULL,
  line2              VARCHAR(60)                  DEFAULT NULL,
  city               VARCHAR(40)    NOT NULL,
  state              VARCHAR(2)     NOT NULL,
  zip_code           VARCHAR(10)    NOT NULL,
  phone              VARCHAR(12)    NOT NULL,
  disabled           TINYINT(1)     NOT NULL      DEFAULT 0,
  CONSTRAINT addresses_fk_customers
    FOREIGN KEY (customer_id)
    REFERENCES customers (customer_id)
);

CREATE TABLE orders (
  order_id           INT            PRIMARY KEY  AUTO_INCREMENT,
  customer_id        INT            NOT NULL,
  order_date         DATETIME       NOT NULL,
  ship_amount        DECIMAL(10,2)  NOT NULL,
  tax_amount         DECIMAL(10,2)  NOT NULL,
  ship_date          DATETIME                    DEFAULT NULL,
  ship_address_id    INT            NOT NULL,
  card_type          VARCHAR(50)    NOT NULL,
  card_number        CHAR(16)       NOT NULL,
  card_expires       CHAR(7)        NOT NULL,
  billing_address_id  INT           NOT NULL,
  CONSTRAINT orders_fk_customers
    FOREIGN KEY (customer_id)
    REFERENCES customers (customer_id)
);

CREATE TABLE order_items (
  item_id            INT            PRIMARY KEY  AUTO_INCREMENT,
  order_id           INT            NOT NULL,
  product_id         INT            NOT NULL,
  item_price         DECIMAL(10,2)  NOT NULL,
  discount_amount    DECIMAL(10,2)  NOT NULL,
  quantity           INT            NOT NULL,
  CONSTRAINT items_fk_orders
    FOREIGN KEY (order_id)
    REFERENCES orders (order_id), 
  CONSTRAINT items_fk_products
    FOREIGN KEY (product_id)
    REFERENCES products (product_id)
);

CREATE TABLE administrators (
  admin_id           INT            PRIMARY KEY   AUTO_INCREMENT,
  email_address      VARCHAR(255)   NOT NULL,
  password           VARCHAR(255)   NOT NULL,
  first_name         VARCHAR(255)   NOT NULL,
  last_name          VARCHAR(255)   NOT NULL
);

INSERT INTO products (product_id, category_id, product_code, product_name, description, list_price, discount_percent, date_added, product_img) VALUES
(default, 1, 1, 'Donut', 'Donut', 'A sweet treat that is tasty from having a drink to having some with friends', 10.00, 0.20 , '04-01-19','bakery1');
(2,2,'Croissant','Croissant', 'A french treat filled with jelly, or tart or honey making good day all the more sweeter',15.00,0.20,'04-01-19','bakery2');
(3,3,'Bread','Bread','Baguette - a french bread used in soups, pastas, and other saucy stuff',10.00,0.20,'04-01-19','bakery3');
(4,4,'Chocolate','Chocolate-Cake','Cake made with chocolate dough, sweet chocolate icing, and all so chocolate... ',20.00,0.20,'04-01-19','bakery4');
(5,5,'Egg','Egg-Tart', 'A custard tart filled with egg custard',5.00,0.20,'04-01-19','Bakery5');
(6,6,'Chip','Chocolate-Chip-Cookie', 'The simple, classic, and  yet..so timeless recipe filled with chocolate chips',10.00,0.20,'04-01-19','bakery6');
(7,7,'Milk','Milk', 'fresh, delicous milk who does not want to know one?',5.00,0.20,'04-01-19','dairy1');
(8,8,'Yogurt','Yogurt','Made from milk, usually enjoyed with a side of fruit',5.00,0.20,'04-01-19','dairy2');
(9,9,'Sour','Sour-Cream','Good thing for burritos and family fun',2.00,0.20,'04-01-19','dairy3');
(10,10,'Cream','Cream-Cheese', 'Cheesy filled filling for bagels, sandwich, and etc...',5.00,0.20,'04-01-19','dairy4');
(11,11,'Whip','Whipping-Cream', 'Made for toppings, and overall just good to eat',2.00,0.20,'04-01-19','dairy5');
(12,12,'Cheddar','Cheddar-Cheese', 'A hard cheese using for sauces, burgers, also for other application',15.00,0.20,'04-01-19','dairy6');
(13,13,'Cola','Coke-Cola','Quench conqueror',1.00,0.20,'04-01-19','drink1');
(14,14,'Water','Bottled-Water','Fresh water to drink and use for everyday purpose',2.00,0.20,'04-01-19','drink2');
(15,15,'Ginger','Ginger-Ale', 'A refreshing drink made out of ginger',5.00,0.20,'04-01-19','drink3');
(16,16,'Grape','Grape-Juice', 'A sweet beverage made out of grape, be careful it can be acidic',3.00,0.20,'04-01-19','drink4');
(17,17,'Soda','Cream-Soda', 'A vanilla based soda drink good for parties ',3.00,0.20,'04-01-19','drink5');
(18,18,'Juice','Apple-Juice','Sweet apple-based juice ',3.00,0.20,'04-01-19','drink6');
(19,19,'Pear','Pear','A delicous fruit, good to eat ',2.00,0.20,'04-01-19','fresh1');
(20,20,'Apple','Apple', 'Tart, but sweet to the bite',2.00,0.20,'04-01-19','fresh2');
(21,21,'Carrot','Carrot', 'good for the eyes, keeps future sight',2.00,0.20,'04-01-19','fresh3');
(22,22,'Yams','Yams', 'Very to eat in the winter to eat',3.00,0.20,'04-01-19','fresh4');
(23,23,'Ava','Avacado','One giant inedible seed, but the outside is good to spread, or eat',3.00,0.20,'04-01-19','fresh5');
(24,24,'Parsley','Parsley','Used as a topping to enhance flavor ',20.00,0.20,'04-01-19','fresh6');
(25,25,'Pizza','Frozen-Pizza', 'Ready-to-cook Pizza whenever you are',5.00,0.20,'04-01-19','frozen1');
(26,26,'Sweet','Frozen-Yogurt', 'The simple, classic, and  yet..so timeless treat',5.00,0.20,'04-01-19','frozen2');
(27,27,'Phyllo','Phyllo-Pastry', 'Used for delicous pies, and more...',2.00,0.20,'04-01-19','frozen3');
(28,28,'Juic3','Frozen-Orange-Juice','Frozen orange juice in a can',1.00,0.20,'04-01-19','frozen4');
(29,29,'Ice','Chocolate-Ice-Cream-Bars','Frozen ice treats for sweet summer fun',2.00,0.20,'04-01-19','frozen5');
(30,30,'Poppers','Pizza-Popper', 'A doughy treat filling with pizzay goodness',5.00,0.20,'04-01-19','frozen6');
(31,31,'Bacon','Bacon', 'The delicous side for breakfast, and sandwichs',5.00,0.20,'04-01-19','meat1');
(32,32,'Steak','Steak', 'Juicy, tasty steak',15.00,0.20,'04-01-19','meat2');
(33,33,'Chicken','Chicken','A delicous chicken for dinner',10.00,0.20,'04-01-19','meat3');
(34,34,'Pork','Pork','Big juicy pork made out of pig for everybody to enjoy',20.00,0.20,'04-01-19','meat4');
(35,35,'Duck','Duck', 'Duck is delicous for any occasion',5.00,0.20,'04-01-19','meat5');
(36,36,'Ham','Ham', 'From pork leg helps for big gathering',10.00,0.20,'04-01-19','meat6');
(37,37,'Salmon','Salmon', 'The delicous fish for dinner',10.00,0.20,'04-01-19','sea1');
(38,38,'Pollock','Pollock', 'A fresh fish that works for anything especially fish sticks',15.00,0.20,'04-01-19','sea2');
(39,39,'Squid','Squid','fresh squid for everyday purposes',10.00,0.20,'04-01-19','sea3');
(40,40,'Tuna','Tuna','Classic fish for fish lovers ',20.00,0.20,'04-01-19','sea4');
(41,41,'Clams','Clams', 'Great for fish stews',5.00,0.20,'04-01-19','sea5');
(42,42,'Oysters','Oysters', 'The simple, classic, and  yet..so timeless meal for stir-fries',10.00,0.20,'04-01-19','sea6');
(43,43,'Chip2','Original Chips', 'Original Potato chip for everyday fun',2.00,0.20,'04-01-19','snack1');
(44,44,'Peanuts','Peanuts', 'Salted peanuts for the health focused person',2.00,0.20,'04-01-19','snack2');
(45,45,'Lico','Licorice','Delicous sweet snack',4.00,0.20,'04-01-19','snack3');
(46,46,'Pack','Snack-Pack','Full of 24-pack bars for parties',20.00,0.20,'04-01-19','snack4');
(47,47,'Taco','Taco-Chips', 'A mexican family fun',3.00,0.20,'04-01-19','snack5');
(48,48,'Kit','Taco-Kits', 'The kit helps prepare simple tacos for the whole family',5.00,0.20,'04-01-19','snack6');
