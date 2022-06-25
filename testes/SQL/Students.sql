create table students(
	id int auto_increment,
	firstName VARCHAR(30) NOT NULL,
	lastName VARCHAR(30) NOT NULL,
    primary key(id)
);

insert into students(firstName, lastName) values('John', 'Walker'), ('Fabiano', 'Silva'), ('John', 'Ni');
select firstName from students;

select count(*) from students where firstName = 'John';