create table staffinfo (
	id int(50) AUTO_INCREMENT primary key,
    staff_id int(20) not null,
    fname_thai varchar(255) not null,
    lname_thai varchar(255) not null,
    fname_eng varchar(255) not null,
    lname_eng varchar(255) not null,
    nickname varchar(255) not null,
    sex varchar(50) not null,
    floor_ varchar(100) not null,
    extn int(20) not null,
    usermail varchar(255) not null,
    phonenumber varchar(50) not null,
    workgroup_emp varchar(255) not null,
    workline_emp varchar(255) not null,
    department_thai varchar(255) not null,
    department_eng varchar(255) not null,
    status_staff varchar(255) not null,
    station varchar(255) not null

)ENGINE=INNODB DEFAULT charset=utf8;