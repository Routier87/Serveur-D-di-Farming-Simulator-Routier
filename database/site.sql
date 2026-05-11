CREATE DATABASE fs25_site;

USE fs25_site;

CREATE TABLE utilisateurs (

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(255),

password VARCHAR(255),

role VARCHAR(255),

discord_id VARCHAR(255)

);

CREATE TABLE mods (

id INT AUTO_INCREMENT PRIMARY KEY,

nom VARCHAR(255),

image TEXT,

telechargement TEXT,

categorie VARCHAR(255),

auteur VARCHAR(255)

);
