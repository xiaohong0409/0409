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
  insert_passenger int,
  primary key(bookingnumber)
);

create table tickets
(
	id int,
	title varchar(60),
	msg text,
	email varchar(50),
	created datetime,
	status enum('open','closed','resolved'),
	primary key (id)
);

create table tickets_comments
(
	id int,
	ticket_id int,
	msg text,
	created datetime,
	primary key (id)
);



create table reservation
(
  reservationnumber int,
  seatnumber int,
  primary key(reservationNumber)
);

create table bookedinfo
(
  reservationnumber int,
  passportnumber int,
  primary key (reservationnumber)
);

create table search
(
	id int,
	title varchar(200),
	blurb text(1000),
	url text(1000)
);

insert into reservation(reservationnumber, seatnumber) values('09080','15');
insert into bookedinfo(reservationnumber,passportnumber) values('09080','1038300');

