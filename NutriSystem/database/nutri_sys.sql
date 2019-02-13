/* Create a database if it is not exist */
CREATE DATABASE IF NOT EXISTS NUTRI_SYS;
USE NUTRI_SYS;

/* Create a table "MEMBER" if it is not exist */ 
CREATE TABLE IF NOT EXISTS MEMBER (
	memb_id INTEGER(15) AUTO_INCREMENT,
	memb_fname VARCHAR(20) NOT NULL,
	memb_mInitial CHAR(1) NOT NULL,
	memb_lname VARCHAR(20) NOT NULL,
	memb_gender VARCHAR(10) NOT NULL,
	memb_DOB DATE DEFAULT NULL,
	memb_phone VARCHAR(15) NOT NULL,
	memb_email VARCHAR(40) NOT NULL,
	memb_street VARCHAR(50) NOT NULL,
	memb_city VARCHAR(30) NOT NULL,
	memb_state VARCHAR(20) NOT NULL,
	memb_zipcode VARCHAR(10) NOT NULL,
	memb_country VARCHAR(20) NOT NULL,
	isActive BOOLEAN DEFAULT 0 NOT NULL,
	isDeleted BOOLEAN DEFAULT 0 NOT NULL,
	creation_date DATE DEFAULT NULL,
	last_update DATE DEFAULT NULL,
	memb_image BLOB DEFAULT NULL,
	PRIMARY KEY(memb_id));
	
/* Create a table "DELETE_MEMBER" if it is not exist */ 
CREATE TABLE IF NOT EXISTS DELETE_MEMBER (
	memb_id INTEGER(15) AUTO_INCREMENT,
	memb_fname VARCHAR(20) NOT NULL,
	memb_mInitial CHAR(1) NOT NULL,
	memb_lname VARCHAR(20) NOT NULL,
	memb_gender VARCHAR(10) NOT NULL,
	memb_DOB DATE DEFAULT NULL,
	memb_phone VARCHAR(15) NOT NULL,
	memb_email VARCHAR(40) NOT NULL,
	memb_street VARCHAR(50) NOT NULL,
	memb_city VARCHAR(30) NOT NULL,
	memb_state VARCHAR(20) NOT NULL,
	memb_zipcode VARCHAR(10) NOT NULL,
	memb_country VARCHAR(20) NOT NULL,
	isActive BOOLEAN DEFAULT 0 NOT NULL,
	isDeleted BOOLEAN DEFAULT 0 NOT NULL,
	creation_date DATE DEFAULT NULL,
	last_update DATE DEFAULT NULL,
	memb_image BLOB DEFAULT NULL,
	PRIMARY KEY(memb_id));

/* Create a table "USER" if it is not exist */ 
CREATE TABLE IF NOT EXISTS USER (
	user_id INTEGER(15) AUTO_INCREMENT,
	user_name VARCHAR(50) NOT NULL,
	user_pass VARCHAR(50) NOT NULL,
	acces_level VARCHAR(10) NOT NULL,
	status BOOLEAN DEFAULT 0 NOT NULL,
	last_login TIMESTAMP,
	creation_date DATE DEFAULT NULL,
	last_update DATE DEFAULT NULL,
	memb_id INTEGER(15) NOT NULL,
	FOREIGN KEY(memb_id) REFERENCES Member(memb_id),
	PRIMARY KEY(user_id));
	
/* Create a table "FOOD_DES" if it is not exist */ 	
CREATE TABLE IF NOT EXISTS FOOD_DES (
	food_id INTEGER(15) AUTO_INCREMENT,
	food_type VARCHAR(15) NOT NULL,
	serve_size INTEGER(15) NOT NULL,
	calories INTEGER(5) NOT NULL, 
	vitamin_type VARCHAR(15) NOT NULL,
	saturated_fat INTEGER(5) NOT NULL, 
	trans_fat INTEGER(5) NOT NULL, 
	total_fat INTEGER(5) NOT NULL, 
	cholesterol INTEGER(5) NOT NULL, 
	sodium INTEGER(5) NOT NULL, 
	carbohydrate INTEGER(5) NOT NULL, 
	sugars INTEGER(5) NOT NULL, 
	protein INTEGER(5) NOT NULL, 
	dietary_fiber INTEGER(5) NOT NULL,
	creation_date DATE DEFAULT NULL,
	last_update DATE DEFAULT NULL,
	PRIMARY KEY(food_id));
	
/* Create a table "DRINK_DES" if it is not exist */ 	
CREATE TABLE IF NOT EXISTS DRINK_DES (
	drink_id INTEGER(15) AUTO_INCREMENT,
	drink_type VARCHAR(255) NOT NULL,
	serve_size INTEGER(15) NOT NULL,
	calories INTEGER(5) NOT NULL, 
	vitamin_type VARCHAR(15) NOT NULL,
	saturated_fat INTEGER(5) NOT NULL, 
	trans_fat INTEGER(5) NOT NULL, 
	total_fat INTEGER(5) NOT NULL, 
	cholesterol INTEGER(5) NOT NULL, 
	sodium INTEGER(5) NOT NULL, 
	carbohydrate INTEGER(5) NOT NULL, 
	sugars INTEGER(5) NOT NULL, 
	protein INTEGER(5) NOT NULL, 
	dietary_fiber INTEGER(5) NOT NULL,
	creation_date DATE DEFAULT NULL,
	last_update DATE DEFAULT NULL,
	PRIMARY KEY(drink_id));
	
/* Create a table "RECOMMENDATION" if it is not exist */ 	
CREATE TABLE IF NOT EXISTS RECOMMENDATION (
	recomendation_id INTEGER(15) AUTO_INCREMENT,
	
	creation_date DATE DEFAULT NULL,
	last_update DATE DEFAULT NULL,
	PRIMARY KEY(feedback_id));

	
	