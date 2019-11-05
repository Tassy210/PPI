use ppi;

create table usuarios (
fotoperfil varchar (400),
nome varchar(200),
id int(255) auto_increment,
email  varchar(500),
senha varchar (50), 
unique(email),
primary key(id)

);
select * from usuarios;

create table publicacoes(
descricao varchar (500),
documento varchar (500),
id_pub int (50)auto_increment primary key


);

create table comentarios(
camentario varchar(3000),
idcoment int (50),
 foreign key(idcoment) references publicacoes(id_pub) 

);
create table feedback (
likes int (254),
idpub int(100),
foreign key(idpub) references publicacoes(id_pub));



