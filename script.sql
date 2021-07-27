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
  id int,
  fname varchar(20),
  lname varchar(20),
  address varchar(30),
  email varchar(20),
  bookingnumber int,
   primary key(id)
);

create table tickets
(
  tocity varchar (20),
  fromcity varchar(20),
  date int,
  email varchar(20),
  bookingnumber int
);
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

insert into table passenger(fname,lname,address,email,bookingnumber) values('Xiaoming','Wang','123/3 Oak','001');
insert into reservation(reservationnumber, seatnumber) values('09080','15');
insert into bookedinfo(reservationnumber,passportnumber) values('09080','1038300');
