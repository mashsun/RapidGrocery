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
  product_img		 VARCHAR(10),
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
   pointconsumed_id         INT             DEFAULT NULL,
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
  ship_date          DATETIME                    DEFAULT NULL,
  ship_address_id    INT            NOT NULL,  
  billing_address_id  INT           NOT NULL,  
  last_updated         DATETIME             DEFAULT NULL,
  
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

CREATE TABLE payment (
  payment_id         INT            PRIMARY KEY   AUTO_INCREMENT,
  order_id        INT            NOT NULL,
  amount       DECIMAL(10,2)    NOT NULL,
  tax_amount         DECIMAL(10,2)  NOT NULL,
  payment_date          DATETIME                    DEFAULT NULL,
  card_type          VARCHAR(50)    NOT NULL,
  card_number        CHAR(16)       NOT NULL,
  card_expires       CHAR(7)        NOT NULL,
  cardholder_name       VARCHAR(255)   NOT NULL,
  discount_percent   DECIMAL(10,2)  NOT NULL      DEFAULT 0.00,
  CONSTRAINT payment_fk_orders
    FOREIGN KEY (order_id)
    REFERENCES orders (order_id)
);

 CREATE TABLE pointconsumed(
	pointconsumed_id	INT		PRIMARY KEY		AUTO_INCREMENT,
	order_id		INT,  
    pointconsumed		INT
                                   
 );
  
CREATE TABLE administrators (
  admin_id           INT            PRIMARY KEY   AUTO_INCREMENT,
  email_address      VARCHAR(255)   NOT NULL,
  password           VARCHAR(255)   NOT NULL,
  first_name         VARCHAR(255)   NOT NULL,
  last_name          VARCHAR(255)   NOT NULL
);

INSERT INTO administrators (admin_id, email_address, password, first_name, last_name) VALUES
(1, 'Ychang0138@conestogac.on.ca', 'justin', 'Youngsun', 'Chang');
 
 INSERT INTO categories (category_id, category_name) VALUES
(default, 'Bakery'),
(default, 'Dairy'),
(default, 'Drinks'), 
(default, 'Fresh'), 
(default, 'Frozen'), 
(default, 'Meat'), 
(default, 'Seafood'), 
(default, 'Snacks');

INSERT INTO products (product_id, category_id, product_code, product_name, description, list_price, discount_percent, date_added, product_img) VALUES
(default, 1, 1, 'Donut', 'A sweet treat that is tasty from having a drink to having some with friends', '10.00', DEFAULT , '04-01-19','bakery1'),
(default, 1, 2,'Croissant', 'A french treat filled with jelly, or tart or honey making good day all the more sweeter','15.00',DEFAULT,'04-01-19','bakery2'),
(default, 1, 3,'Bread','Baguette - a french bread used in soups, pastas, and other saucy stuff','10.00',DEFAULT,'04-01-19','bakery3'),
(default, 1, 4,'Chocolate-Cake','Cake made with chocolate dough, sweet chocolate icing, and all so chocolate... ','20.00',DEFAULT,'04-01-19','bakery4'),
(default, 1, 5,'Egg-Tart', 'A custard tart filled with egg custard','5.00',DEFAULT,'04-01-19','Bakery5'),
(default, 1, 6,'Chocolate-Chip-Cookie', 'The simple, classic, and  yet..so timeless recipe filled with chocolate chips','10.00',DEFAULT,'04-01-19','bakery6'),
(default, 2, 7,'Milk', 'fresh, delicous milk who does not want to know one?','5.00',DEFAULT,'04-01-19','dairy1'),
(default, 2, 8,'Yogurt','Made from milk, usually enjoyed with a side of fruit','5.00',DEFAULT,'04-01-19','dairy2'),
(default, 2, 9,'Sour-Cream','Good thing for burritos and family fun','2.00',DEFAULT,'04-01-19','dairy3'),
(default, 2, 10,'Cream-Cheese', 'Cheesy filled filling for bagels, sandwich, and etc...','5.00',DEFAULT,'04-01-19','dairy4'),
(default, 2, 11,'Whipping-Cream', 'Made for toppings, and overall just good to eat','2.00',DEFAULT,'04-01-19','dairy5'),
(default, 2, 12,'Cheddar-Cheese', 'A hard cheese using for sauces, burgers, also for other application','15.00',DEFAULT,'04-01-19','dairy6'),
(default, 3, 13,'Coke-Cola','Quench conqueror','1.00',DEFAULT,'04-01-19','drink1'),
(default, 3, 14,'Bottled-Water','Fresh water to drink and use for everyday purpose','2.00',DEFAULT,'04-01-19','drink2'),
(default, 3, 15,'Ginger-Ale', 'A refreshing drink made out of ginger','5.00',DEFAULT,'04-01-19','drink3'),
(default, 3, 16,'Grape-Juice', 'A sweet beverage made out of grape, be careful it can be acidic','3.00',DEFAULT,'04-01-19','drink4'),
(default, 3, 17,'Cream-Soda', 'A vanilla based soda drink good for parties ','3.00',DEFAULT,'04-01-19','drink5'),
(default, 3, 18,'Apple-Juice','Sweet apple-based juice ','3.00',DEFAULT,'04-01-19','drink6'),
(default, 4, 19,'Pear','A delicous fruit, good to eat ','2.00',DEFAULT,'04-01-19','fresh1'),
(default, 4, 20,'Apple', 'Tart, but sweet to the bite','2.00',DEFAULT,'04-01-19','fresh2'),
(default, 4, 21,'Carrot', 'good for the eyes, keeps future sight','2.00',DEFAULT,'04-01-19','fresh3'),
(default, 4, 22,'Yams', 'Very to eat in the winter to eat','3.00',DEFAULT,'04-01-19','fresh4'),
(default, 4, 23,'Avacado','One giant inedible seed, but the outside is good to spread, or eat','3.00',DEFAULT,'04-01-19','fresh5'),
(default, 4, 24,'Parsley','Used as a topping to enhance flavor ','20.00',DEFAULT,'04-01-19','fresh6'),
(default, 5, 25,'Frozen-Pizza', 'Ready-to-cook Pizza whenever you are','5.00',DEFAULT,'04-01-19','frozen1'),
(default, 5, 26,'Frozen-Yogurt', 'The simple, classic, and  yet..so timeless treat','5.00',DEFAULT,'04-01-19','frozen2'),
(default, 5, 27,'Phyllo-Pastry', 'Used for delicous pies, and more...','2.00',DEFAULT,'04-01-19','frozen3'),
(default, 5, 28,'Frozen-Orange-Juice','Frozen orange juice in a can','1.00',DEFAULT,'04-01-19','frozen4'),
(default, 5, 29,'Chocolate-Ice-Cream-Bars','Frozen ice treats for sweet summer fun','2.00',DEFAULT,'04-01-19','frozen5'),
(default, 5, 30,'Pizza-Popper', 'A doughy treat filling with pizzay goodness','5.00',DEFAULT,'04-01-19','frozen6'),
(default, 6, 31,'Bacon', 'The delicous side for breakfast, and sandwichs','5.00',DEFAULT,'04-01-19','meat1'),
(default, 6, 32,'Steak', 'Juicy, tasty steak','15.00',DEFAULT,'04-01-19','meat2'),
(default, 6, 33,'Chicken','A delicous chicken for dinner','10.00',DEFAULT,'04-01-19','meat3'),
(default, 6, 34,'Pork','Big juicy pork made out of pig for everybody to enjoy','20.00',DEFAULT,'04-01-19','meat4'),
(default, 6, 35,'Duck', 'Duck is delicous for any occasion','5.00',DEFAULT,'04-01-19','meat5'),
(default, 6, 36,'Ham', 'From pork leg helps for big gathering','10.00',DEFAULT,'04-01-19','meat6'),
(default, 7, 37,'Salmon', 'The delicous fish for dinner','10.00',DEFAULT,'04-01-19','sea1'),
(default, 7, 38,'Pollock', 'A fresh fish that works for anything especially fish sticks','15.00',DEFAULT,'04-01-19','sea2'),
(default, 7, 39,'Squid','fresh squid for everyday purposes','10.00',DEFAULT,'04-01-19','sea3'),
(default, 7, 40,'Tuna','Classic fish for fish lovers ','20.00',DEFAULT,'04-01-19','sea4'),
(default, 7, 41,'Clams', 'Great for fish stews','5.00',DEFAULT,'04-01-19','sea5'),
(default, 7, 42,'Oysters', 'The simple, classic, and  yet..so timeless meal for stir-fries','10.00',DEFAULT,'04-01-19','sea6'),
(default, 8, 43,'Original Chips', 'Original Potato chip for everyday fun','2.00',DEFAULT,'04-01-19','snack1'),
(default, 8, 44,'Peanuts', 'Salted peanuts for the health focused person','2.00',DEFAULT,'04-01-19','snack2'),
(default, 8, 45,'Licorice','Delicous sweet snack','4.00',DEFAULT,'04-01-19','snack3'),
(default, 8, 46,'Snack-Pack','Full of 24-pack bars for parties','20.00',DEFAULT,'04-01-19','snack4'),
(default, 8, 47,'Taco-Chips', 'A mexican family fun','3.00',DEFAULT,'04-01-19','snack5'),
(default, 8, 48,'Taco-Kits', 'The kit helps prepare simple tacos for the whole family','5.00',DEFAULT,'04-01-19','snack6');

 INSERT INTO customers (customer_id, email_address, password, first_name, last_name, shipping_address_id, billing_address_id, membership_id) VALUES
(default, 'allan.sherwood@yahoo.com', '650215acec746f0e32bdfff387439eefc1358737', 'Allan', 'Sherwood', 1, 1, 1),
(default, 'barryz@gmail.com', '3f563468d42a448cb1e56924529f6e7bbe529cc7', 'Barry', 'Zimmer', 2, 2, 2);

INSERT INTO addresses (address_id, customer_id, line1, line2, city, state, zip_code, phone, disabled) VALUES
(default, 1, '100 East Ridgewood Ave.', '', 'Kitchener', 'ON', '07652', '201-653-4472', 0),
(default, 2, '21 Rosewood Rd.', '', 'Waterloo', 'ON', '07677', '201-653-4472', 0);


 INSERT INTO orders (order_id, customer_id, order_date, ship_amount, ship_date, ship_address_id, billing_address_id, last_updated) VALUES
(default, 1, '2019-03-28 09:40:28', '5.00', '2015-03-30 15:32:51', 1, 1, '2019-04-05 16:33:13'),
(default, 2, '2019-03-29 11:23:20', '5.00', '2015-03-29 12:52:14', 2, 2, '2019-04-05 11:33:13');

INSERT INTO order_items (item_id, order_id, product_id, item_price, discount_amount, quantity) VALUES
(default, 1, 1, '200.00', '10.70', 1),
(default, 1, 2, '300.00', '20.00', 2),
(default, 2, 1, '300.00', '20.00', 3),
(default, 2, 2, '150.99', '12.20', 1);

INSERT INTO payment (payment_id,order_id,amount,tax_amount,payment_date,card_type,card_number,card_expires,cardholder_name,discount_percent) VALUES
(default, 1, '839.30', '32.32','2015-03-29 09:40:28','Visa', '4111111111111111', '04/2020', 'Allan Sherwood', 10),
(default, 2, '303.79', '12.11','2015-05-29 09:40:28','MasterCard', '5555555555554444', '08/2019', 'Barry Zimmer', 5);
