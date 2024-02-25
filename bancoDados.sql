
use bd_mercado_du_valle;



create table tb_funcionario(
	cpf_funcionario varchar(14) primary key,
    senha varchar(30) not null,
    nome_funcionario varchar(30) not null,
    setor varchar(30) not null
);

create table tb_produtos(
	id int primary key auto_increment,
    nome varchar(15) not null,
    descricao TEXT,
    preco int not null,
    codigo_barra varchar(50) unique,
    categoria varchar(25) not null
);


use bd_mercado_du_valle;
select * from tb_funcionario;
