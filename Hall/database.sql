nrc@ubuntu:~$ sudo -i -u postgres
[sudo] password for nrc: 
postgres@ubuntu:~$ createdb Hall
postgres@ubuntu:~$ psql Hall
psql (9.1.19)
Type "help" for help.

Hall=# create table Admin(Amob varchar(12) primary key, Aname varchar(30),dob date,email varchar(30),gender varchar(5),Auname varchar(30),Aupass varchar(30));
NOTICE:  CREATE TABLE / PRIMARY KEY will create implicit index "admin_pkey" for table "admin"
CREATE TABLE
Hall=# \d Admin;
            Table "public.admin"
 Column |         Type          | Modifiers 
--------+-----------------------+-----------
 amob   | character varying(12) | not null
 aname  | character varying(30) | 
 dob    | date                  | 
 email  | character varying(30) | 
 gender | character varying(5)  | 
 auname | character varying(30) | 
 aupass | character varying(30) | 
Indexes:
    "admin_pkey" PRIMARY KEY, btree (amob)

Hall=# select * from Admin;
 amob | aname | dob | email | gender | auname | aupass 
------+-------+-----+-------+--------+--------+--------
(0 rows)
	
Hall=# create table person(pname varchar(30),pmob varchar(12)primary key,padd varchar(50),pemail varchar(30),pgender varchar,securityque varchar(50),ans varchar(20));
NOTICE:  CREATE TABLE / PRIMARY KEY will create implicit index "person_pkey" for table "person"
CREATE TABLE
Hall=# \d person;
              Table "public.person"
   Column    |         Type          | Modifiers 
-------------+-----------------------+-----------
 pname       | character varying(30) | 
 pmob        | character varying(12) | not null
 padd        | character varying(50) | 
 pemail      | character varying(30) | 
 pgender     | character varying     | 
 securityque | character varying(50) | 
 ans         | character varying(20) | 
Indexes:
    "person_pkey" PRIMARY KEY, btree (pmob)


Hall=# create table booking(bid serial primary key,bdate date,entrytime time,exittime time,ename varchar(30),department varchar(50),status varchar(10),pmob varchar(10) references person on delete cascade on update cascade);
NOTICE:  CREATE TABLE will create implicit sequence "booking_bid_seq" for serial column "booking.bid"
NOTICE:  CREATE TABLE / PRIMARY KEY will create implicit index "booking_pkey" for table "booking"
CREATE TABLE
Hall=# \d booking;
                                   Table "public.booking"
   Column   |          Type          |                       Modifiers                       
------------+------------------------+-------------------------------------------------------
 bid        | integer                | not null default nextval('booking_bid_seq'::regclass)
 bdate      | date                   | 
 entrytime  | time without time zone | 
 exittime   | time without time zone | 
 ename      | character varying(30)  | 
 department | character varying(50)  | 
 status     | character varying(10)  | 
 pmob       | character varying(10)  | 
Indexes:
    "booking_pkey" PRIMARY KEY, btree (bid)
Foreign-key constraints:
    "booking_pmob_fkey" FOREIGN KEY (pmob) REFERENCES person(pmob) ON UPDATE CASCADE ON DELETE CASCADE

Hall=# create table college(name varchar(20),id varchar(20),mobno varchar(10));CREATE TABLE
Hall=# \d college;
           Table "public.college"
 Column |         Type          | Modifiers 
--------+-----------------------+-----------
 name   | character varying(20) | 
 id     | character varying(20) | 
 mobno  | character varying(10) | 

Hall=# create table college1(Name varchar(20),id varchar(10));
CREATE TABLE

Hall=# create table card(name varchar(30),cardno varchar(12),valid varchar(5),cvv varchar(3));
CREATE TABLE
Hall=# \d card;
            Table "public.card"
 Column |         Type          | Modifiers 
--------+-----------------------+-----------
 name   | character varying(30) | 
 cardno | character varying(12) | 
 valid  | character varying(5)  | 
 cvv    | character varying(3)  | 

