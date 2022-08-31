create database elektronik;
 
use elektronik;
 
create table hp (
  id int not null primary key auto_increment,
  nama_hp varchar(100) not null,
  tipe varchar(100) not null,
  stok int not null,
  harga int not null
);