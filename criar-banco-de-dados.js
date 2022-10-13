
// Criar banco de dados curso

/*

CREATE TABLE `curso`.`matriculados` ( `id` INT NOT NULL AUTO_INCREMENT , 
`nome` VARCHAR(220) NOT NULL , 
`email` VARCHAR(200) NOT NULL , 
`cidade` VARCHAR(200) NOT NULL , 
`telefone` VARCHAR(200) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;

*/ 



// criar banco de dados contatos

/*

CREATE TABLE `usuarios`.`contatos` ( `id` INT NOT NULL AUTO_INCREMENT , 
`nome` VARCHAR(220) NOT NULL , `email` VARCHAR(200) NOT NULL , 
`opcao` VARCHAR(2) NOT NULL , `mensagem` VARCHAR(220) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB;


*/ 