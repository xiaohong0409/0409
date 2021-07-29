create table train
(
  trainno int not null,
  tname varchar(20),
  sp varchar(50),
  st time,
  dp varchar(50),
  dt time,
  dd varchar(10),
  distance int,
  insert_into_train varchar(50),
  primary key(trainno)
);

create table passenger
(
  fname varchar(20),
  lname varchar(20),
  address varchar(30),
  email varchar(20),
  bookingnumber int,
  insert_into_passenger varchar(50),
  primary key(bookingnumber)
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



insert into reservation(reservationnumber, seatnumber) values('09080','15');
insert into bookedinfo(reservationnumber,passportnumber) values('09080','1038300');
INSERT INTO `train` (`trainno`, `tname`, `sp`, `st`, `dp`, `dt`, `dd`, `distance`, `insert_into_train`) VALUES ('17', 'Haijian Express', 'Chandigarh', '10:00:00', 'Lucknow', '21:30:00', 'Day1', '700', '');
INSERT INTO `passenger` (`fname`, `lname`, `address`, `email`, `bookingnumber`, `insert_into_passenger`) VALUES ('Xiao', 'Li', '123/ Manhattan Condo', 'xiao@gmail.com', '123', '');

