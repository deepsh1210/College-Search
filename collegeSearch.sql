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
    highest_package varchar(255) NOT NULL,
    average_package varchar(255) NOT NULL,
    computer_engineering int(255) NOT NULL,
    mechanical_engineering int(255) NOT NULL,
    electrical_engineering int(255) NOT NULL,
    electronics_engineering int(255) NOT NULL,
    chemical_engineering int(255) NOT NULL
);

INSERT INTO college VALUES ('C101', 'Indian Institute of Technology, Bhubaneswar',' Bhubaneswar', '₹1,15,259', 'JEE Advance', 'Rs. 43.30 Lakhs pa', 'Rs. 15.80 Lakhs pa', 2096, 5992, 4649, 3632,6952);
INSERT INTO college VALUES ('C102', 'Indian Institute of Technology, Bombay',' Mumbai', '₹1,13,800', 'JEE Advance', 'Rs. 43.30 Lakhs pa', 'Rs. 15.80 Lakhs pa', 63, 1110, 288, 432,1922);
INSERT INTO college VALUES ('C103', 'Indian Institute of Technology, Mandi',' Himachal Pradesh', '₹1,11,250', 'JEE Advance', 'Rs. 23.30 Lakhs pa', 'Rs. 9.06 lakhs pa', 2563, 6242, 4848, 6549,8004);
INSERT INTO college VALUES ('C104', 'Indian Institute of Technology, Delhi',' Delhi', '₹1,16,450', 'JEE Advance', 'Rs. 33.30 Lakhs pa', 'Rs. 14.80 Lakhs pa', 96, 1221, 468, 802,1875);
INSERT INTO college VALUES ('C105', 'Indian Institute of Technology, Indore',' Madhya Pradesh', '₹1,42,00', 'JEE Advance', 'Rs. 47.30 Lakhs pa', 'Rs. 18.80 Lakhs pa', 1020, 4801, 3295, 3932,4508);
INSERT INTO college VALUES ('C106', 'Indian Institute of Technology, Kharagpur',' West Bengal', '₹1,05,259', 'JEE Advance', 'Rs. 43.30 Lakhs pa', 'Rs. 17.80 Lakhs pa', 2096, 5992, 4649, 3632,6952);
INSERT INTO college VALUES ('C107', 'National Institute of Technology, Jalandhar', 'Punjab', '₹84,259', 'JEE Main', 'Rs. 30.30 Lakhs pa', 'Rs. 11.80 Lakhs pa', 10243, 26398, 21977, 16656,22429);
INSERT INTO college VALUES ('C108', 'National Institute of Technology, Jaipur', 'Rajasthan', '₹98,000', 'JEE Main', 'Rs. 30.80 Lakhs pa', 'Rs. 9.40 Lakhs pa', 3831, 11864, 9179, 7464,18036);
INSERT INTO college VALUES ('C109', 'National Institute of Technology, Bhopal', 'Madhya Pradesh', '₹96,000', 'JEE Main', 'Rs. 32.40 Lakhs pa', 'Rs. 11.40 Lakhs pa', 7154, 16944, 12488, 10045,19760);
INSERT INTO college VALUES ('C110', 'National Institute of Technology, Allahabad', 'Uttar Pradesh', '₹1,18,000', 'JEE Main', 'Rs. 20.80 Lakhs pa', 'Rs. 10.40 Lakhs pa', 4051, 11145, 8278, 8790,15181);
INSERT INTO college VALUES ('C111', 'National Institute of Technology, Agartala', 'Tripura', '₹77,700', 'JEE Main', 'Rs. 26.80 Lakhs pa', 'Rs. 12.40 Lakhs pa', 79419, 168371, 167441, 123335,28078);

INSERT INTO college VALUES ('C112', 'Institute of Chemical Technology, Mumbai', 'Mumbai', '₹87,700', 'MHT-CET', 'Rs. 20.80 Lakhs pa', 'Rs. 8.40 Lakhs pa', 7945, 6544, 111234, 12333,143);

INSERT INTO college VALUES ('C113', 'College of Engineering Pune', 'Pune', '₹97,700', 'MHT-CET', 'Rs. 36.80 Lakhs pa', 'Rs. 8.40 Lakhs pa', 119, 372, 450, 376,2131);

INSERT INTO college VALUES ('C114', 'Veermata Jijabai Technological University (VJTI)', 'Mumbai', '₹84,700', 'MHT-CET', 'Rs. 22.80 Lakhs pa', 'Rs. 12.40 Lakhs pa', 92, 630, 899, 814,833);

INSERT INTO college VALUES ('C115', 'K. J. Somaiya College of Engineering', 'Mumbai', '₹1,77,700', 'MHT-CET', 'Rs. 16.80 Lakhs pa', 'Rs. 7.40 Lakhs pa', 566, 1302, 1955, 3416,1225);
INSERT INTO college VALUES ('C116', 'D. J. Sanghvi College of Engineering', 'Mumbai', '₹1,82,700', 'MHT-CET', 'Rs. 18.50 Lakhs pa', 'Rs. 8.40 Lakhs pa', 257, 336, 988, 1743,2963);




