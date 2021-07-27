create table train
(
  purchasedate int,
  trainnumber int not null,
  engineer int,
  departuretime int,
  arrivalto varchar(50),
  departurefrom varchar(50),
  primary key(TrainNumber)
);

create table passenger
(
 
  fname varchar(20),
  lname varchar(20),
  address varchar(30),
  email varchar(20),
  bookingnumber int,
  primary key(bookingnumber)
);

create table tickets
(
	id int(11) NOT NULL AUTO_INCREMENT,
	title varchar(255) NOT NULL,
	msg text NOT NULL,
	email varchar(255) NOT NULL,
	created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	status enum('open','closed','resolved') NOT NULL DEFAULT 'open',
	PRIMARY KEY (`id`)
) 

create table tickets_comments
(
	id int(11) NOT NULL AUTO_INCREMENT,
	ticket_id int(11) NOT NULL,
	msg text NOT NULL,
	created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) 



create table reservation
(
  reservationnumber int,
  seatnumber int not null,
  primary key(reservationNumber)
);

create table bookedinfo
(
  reservationnumber int,
  passportnumber int,
  primary key (reservationnumber)
);

insert into table passenger(fname,lname,address,email,bookingnumber) values('Xiaoming','Wang','123/3 Oak','xiaoming@gmail.com',001);
insert into reservation(reservationnumber, seatnumber) values('09080','15');
insert into bookedinfo(reservationnumber,passportnumber) values('09080','1038300');
insert into tickets (id, title, msg, email, created, status) VALUES (1, 'Test Ticket', 'This is your first ticket.', 'support@codeshack.io', '2020-06-10 13:06:17', 'open');
insert into tickets_comments (id, ticket_id, msg, created) VALUES (1, 1, 'This is a test comment.', '2020-06-10 16:23:39');

