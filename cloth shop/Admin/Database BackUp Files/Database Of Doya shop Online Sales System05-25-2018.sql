DROP TABLE IF EXISTS category;

CREATE TABLE `category` (
  `Category_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(123) NOT NULL,
  `Discription` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Category_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

INSERT INTO category VALUES("42","jeans","Thailands","60.png");
INSERT INTO category VALUES("43","Dress","girls","dress (6).jpg");
INSERT INTO category VALUES("45","T-shirts","turkey shirt ","17.png");
INSERT INTO category VALUES("46","shoes","brand","brand-img1.jpg");


DROP TABLE IF EXISTS contact;

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(29) NOT NULL,
  `Phone` varchar(29) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO contact VALUES("7","Mustafa","muste1@gmail.com","0922702972"," i like this Shopping site ");
INSERT INTO contact VALUES("8","Abebe","abebe20@gmail.com","0936700885"," What a nice shopping site");
INSERT INTO contact VALUES("10","galo k yesus","geletabegna@gmail.com","0925922030"," nice look");


DROP TABLE IF EXISTS customer;

CREATE TABLE `customer` (
  `Cust_Id` int(15) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(25) NOT NULL DEFAULT '',
  `UserName` varchar(255) NOT NULL DEFAULT '',
  `Phone` varchar(25) NOT NULL DEFAULT '',
  `Email` varchar(55) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL DEFAULT '',
  `Re_Password` varchar(20) NOT NULL DEFAULT '',
  `Country` varchar(25) NOT NULL DEFAULT '',
  `City` varchar(25) NOT NULL DEFAULT '',
  `Adress` varchar(55) NOT NULL DEFAULT '',
  `PostalCode` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`Cust_Id`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("1","Abdi","abdo","0932216518","abdii@gmail.com","admin123","admin123","Ethiopia","Robe","MWU","247");
INSERT INTO customer VALUES("3","Ayantu","Ayee","0922521556","Ayuuu@gmail.com","aye123","aye123","Ethiopia","Robe","MWU","247");
INSERT INTO customer VALUES("21","usman","usmi","0955485458","usman@gmail.com","12345","12345","Ethiopia","Oromiya","robe","247");


DROP TABLE IF EXISTS employee;

CREATE TABLE `employee` (
  `Employee_ID` int(95) NOT NULL AUTO_INCREMENT,
  `Employee_Name` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("1","galo begna","galoo","success","29.png");


DROP TABLE IF EXISTS orders;

CREATE TABLE `orders` (
  `order_ID` int(255) NOT NULL,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Postal_Code` varchar(55) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `City` varchar(55) NOT NULL,
  `Kebele` varchar(55) NOT NULL,
  `Phone` varchar(55) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Dilivery_Address` varchar(75) NOT NULL,
  `Delivery_time` varchar(50) NOT NULL,
  `Delivery_date` varchar(10) NOT NULL,
  `Total_Amount` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO orders VALUES("1","Geleta begna","geletabegna@gmail.com","247","ET","Robe","03","0925922030","9","mwu","3:30pm","Thrusday","");
INSERT INTO orders VALUES("2","Oda Fayisa","odabebu@gmail.com","247","ET","robe","04","0925929009","7","mwu","2:30pm","saturday","");
INSERT INTO orders VALUES("0","great","love@wins.things","123","ET","robe","05","21545454218","10","mwu","3:00pm","thrusday","");


DROP TABLE IF EXISTS payments;

CREATE TABLE `payments` (
  `order_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Account_number` int(55) NOT NULL,
  `pin` int(55) NOT NULL,
  `Total_Amount` varchar(55) NOT NULL,
  PRIMARY KEY (`order_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO payments VALUES("17","","2147483647","1325","");
INSERT INTO payments VALUES("20","","444444444","4445","");
INSERT INTO payments VALUES("22","dfg","45465454","5655","");


DROP TABLE IF EXISTS product;

CREATE TABLE `product` (
  `Product_ID` int(255) NOT NULL,
  `productName` varchar(77) NOT NULL,
  `Category_ID` int(255) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `quantity` int(50) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("1","Thailand jeans","42","size 32","kara jeans","7","new brand, color grey","650","10","men jeans (17).jpg");
INSERT INTO product VALUES("2","China jeans","42","Size 31","kara","7","nice look, color black","600","10","10-jeans-png-image-thumb.png");
INSERT INTO product VALUES("3","Denim jeans","42","size 33","qara","7","color blue","450","12","men jeans (9).jpg");
INSERT INTO product VALUES("4","Body t-shirt","42","L","T-Shirt","8","best V shape body","300","20","16-t-shirt-png-image-thumb.png");
INSERT INTO product VALUES("6","Men T-shirt","43","tommy L","T-shirt","8","best o shape","320","10","1-t-shirt-png-image-thumb.png");
INSERT INTO product VALUES("11","Shoes","46","size 42","anbessa shul","10","color black","700","0","men shoe (7).jpg");
INSERT INTO product VALUES("12","dress","46","56","dressss","15","w dress","447","3","7-2-dress-transparent-thumb.png");
INSERT INTO product VALUES("13","dress","45","L","bashashi","15","for dinner dinner","1514","15","1-2-dress-png-file-thumb.png");
INSERT INTO product VALUES("14","dress","42","M","mens","9","nice look","1000","5","16-jacket-png-image-thumb.png");
INSERT INTO product VALUES("15","shirt","43","L","women shirt","13","nice body","250","0","women shirt (8).jpg");
INSERT INTO product VALUES("16","shoe","46","nike sb","shoes","17","nike","700","12","men shoe (13).jpg");
INSERT INTO product VALUES("17","dress","42","l","dress","12","nice","5000","0","child dress (9).jpg");
INSERT INTO product VALUES("0","shoe","46","42","low","10","anbessa cama","1000","100","12-men-shoes-png-image-thumb.png");


DROP TABLE IF EXISTS warehouse;

CREATE TABLE `warehouse` (
  `Warehouse_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Country` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `PostalCode` varchar(55) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Warehouse` varchar(55) NOT NULL,
  PRIMARY KEY (`Warehouse_ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `PostalCode` (`PostalCode`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO warehouse VALUES("7","ET","Robe","Robe","251","robestore@gmail.com","jean");
INSERT INTO warehouse VALUES("8","ET","Robe","Robe","254","robestore@store8.com","shirts");
INSERT INTO warehouse VALUES("9","ET","Robe","Robe","253","robestore@store.com","Dress");
INSERT INTO warehouse VALUES("10","ET","Robe","Robe","255","robestore@storee.com","Shoes");
INSERT INTO warehouse VALUES("11","ET","robe","robe","245","robsan@gmail.com","women jeans");
INSERT INTO warehouse VALUES("12","ET","robe","robe","855","gelo@gmail.com","child");
INSERT INTO warehouse VALUES("13","ET","robe","robe","247","galo@gvhg.com","women tshirt");
INSERT INTO warehouse VALUES("15","ET","robe","robe","215","gelee@gmail.com","women dress");
INSERT INTO warehouse VALUES("17","ET","robe","robe","248","galebebu@gmail.com","women shoes");


