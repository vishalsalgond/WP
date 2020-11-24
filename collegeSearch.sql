CREATE TABLE users (
    id varchar(255) PRIMARY KEY NOT NULL,
    fname varchar(255) NOT NULL,
    lname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    phone bigint(15) NOT NULL,
    state varchar(255) NOT NULL,
    cet int(255) DEFAULT 0,
    jee_main int(255) DEFAULT 0,
    jee_adv int(255) DEFAULT 0,
    category varchar(255) NOT NULL,
    gender varchar(1) NOT NULL,
    password varchar(255) NOT NULL
);


CREATE TABLE college (
    id varchar(255) PRIMARY KEY NOT NULL,
    name varchar(255) NOT NULL,
    address varchar(255) NOT NULL,
    institute_fee varchar(255) NOT NULL,
    mode_of_admission varchar(255) NOT NULL,
    highest_package int(255) NOT NULL,
    average_package int(255) NOT NULL,
    computer_engineering int(255) NOT NULL,
    mechanical_engineering int(255) NOT NULL,
    electrical_engineering int(255) NOT NULL,
    electronics_engineering int(255) NOT NULL,
    chemical_engineering int(255) NOT NULL
);



