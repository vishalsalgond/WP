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