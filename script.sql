create table train
(
  capacity int,
  arrivaltime int,
  purchasedate int,
  trainnumber int not null,
  engineer int,
  departuretime int,
  arrivalto varchar(50),
  departurefrom varchar(50),
  primary key(TrainNumber)
);

create table engineer
(
  address varchar(50),
  phonenumber int,
  datehired int,
  name varchar(20),
  trainnumber int,
  primary key(PhoneNumber),
  foreign key(TrainNumber) references Train(TrianNumber)
);

create table passenger
(
  fname varchar(20),
  lname varchar(20),
  address varchar(30),
  email varchar(20),
  bookingnumber int,
  primary key(passportNumber)
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
  primary key (reservationnumber, passportnumber),
  foreign key (reservationnumber) references reservation(reservationnumber),
  foreign key (passportnumber) references passenger(passportnumber)

);

insert into table passenger(passportnumber, address, phonenumber, name) values('1038300','BKK','0970677857','Julie Smith');
insert into train(capacity,arrivaltime,purchasedate,trainnumber,engineer,departuretime,arrivalto,departurefrom) VALUES
  ('300','11:20','12/09/2000','K107','2','14:15','HUAXIN','BKK');
insert into reservation(reservationnumber, seatnumber) values('09080','15');
insert into bookedinfo(reservationnumber,passportnumber) values('09080','1038300');
