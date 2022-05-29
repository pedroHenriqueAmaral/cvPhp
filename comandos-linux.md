# Lista de Comandos Linux e MySQL

## Comandos Linux

### Exibir caminho do diretório atual
```bash
pwd
```

### Listar conteúdo do diretório atual ou informado
```bash
ls
ls /Documents/Trabalho
```

### "Entrar" em uma pasta ou volta "subindo o nível"
```bash
cd /Downloads
cd ..
```

### Listar as configurações com o Neofetch
```bash
sudo apt install neofetch -y
neofetch
```

### Listar as configurações de Hardware da máquina
```bash
lscpu 
cat /proc/meminfo  
df -h 
```

## Versão do SO
```bash
cat /etc/*-release
```

## Criar pasta
```bash
mkdir NOME-PASTA
```
"Entrar" na pasta
```bash
cd NOME-PASTA
```

## Criar um arquivo com o conteudo "olá mundo"
Instalar o VIM (Editor de texto para terminal)
```bash
sudo apt install vim 
```
Criar o arquivo
```bash
touch nome-arquivo.txt 
```
Abrir o arquivo com o VIM para escrever o conteudo
```bash
vim nome-arquivo.txt
```
*escreve o conteudo*
**esc** para sair do modo de edição do VIM
**Comando para Salvar e Sair do VIM (Write Quit)**
```vim
:wq 
```
Ver o conteudo do arquivo
```bash
cat NOME_ARQUIVO.txt
```
## Criar um pasta com o nome "testes"
```bash
mkdir testes
```
## Criar 3 arquivos de texto dentro da pasta "testes"
```bash
touch testes/arquivo-1.txt testes/arquivo-2.txt testes/arquivo-3.txt
```

## Excluir a pasta criada e os arquivos dentro dela
```bash
rm -r testes
```

## Criar Usuário
```bash
adduser nome-usuario
```

## Listar Usuários da Máquina
```bash
awk -F: '{ print $1 }' /etc/passwd
||
cut -d: -f1 /etc/passwd```bash
adduser nome-usuario
```
```

# Instalar MySQL (User Root)
Instalando e usando o Wget para adicionar no repositório
para o APT encontrar e instalar o MySQL
```bash
apt update && apt upgrade

apt install wget
wget https://dev.mysql.com/get/mysql-apt-config_0.8.22-1_all.deb

apt update && apt install mysql-server
```

### Controle do Serviço do MySQL
```bash
service mysql status
service mysql start
service mysql stop 
```

### Entrar como root no mysql
```bash
mysql -u root -p
```

# Comandos MySQL

## Gerênciando Usuário

### Criar novo usuário
```mysql
CREATE USER 'nome-usuario' IDENTIFIED BY 'senha-criada';
```

### Listar Usuários do MySql
```mysql
SHOW USER FROM mysql.user;
```

## Permissões de Acesso

### Dar **TODAS** permissão para o usuário no banco de dados informado
```mysql
GRANT ALL PRIVILEGES ON nome_banco.* TO 'nome-usuario';
```

### Atualizar as permissões alteradas
```mysql
FLUSH PRIVILEGES;
```

### Atualizar as permissões alteradas
```mysql
SHOW GRANTS FOR nome-usuario;
```

## Banco de Dados

### Criar Banco de Dados
```mysql
CREATE DATABASE nome_banco;
```

### Listar Banco de Dados Criados
```mysql
SHOW DATABASES;
```

### "Entrar" no Banco de Dados para utiliza-lo
```mysql
USE nome_banco;
```

## Tabelas

### Criar tabela
```mysql
CREATE TABLE Clientes(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(25) NOT NULL,
);
```

### Inserir dados na tabela
```mysql
INSERT INTO Clientes 
       (nome,email,endereco,bairro,numero) 
       VALUES ('teste','teste@gmail.com','rua etc','bairro etc', '123');
```

### Exibir dados da tabela
```mysql
SELECT * FROM Clientes;
```

### Criando **Chave Estrangeira** em uma tabela **já criada**
```mysql
ALTER TABLE cliente 
ADD FOREIGN KEY fk_cidade(id_cidade)
REFERENCES cidade(id) 
ON UPDATE NO ACTION
ON DELETE NO ACTION;
```

```
sudo apt install apache2 -y
service apache2 status
```

---

```
200.234.219.46 : 22

root| grupo3##

caminho do Firezilla

/var/www/html/index.html
```

# TERMINAL <-

```
cd ../var/www/html

mkdir nome-pasta

chmod 700 nome-pasta/
chown nome-usuario nome-pasta/
```
---
# Instalar PHP
```
sudo apt install php libapache2-mod-php php-mysql 
```

```
php -v   // versão
php -ini // inicializar
```

# Entrar no servidor
```
sudo ssh nome-usuario@ip-servidor

sudo ssh root@200.234.219.46
```

## Lista de Login Servidor
```
usr     | pwd
joao    | 123
lunna   | 123
rafaela | 123
peter   | toor
```

## Lista de Login MySQL
```
usr           | pwd
joao-pedro    | 123
lunna-roque   | 123
rafaela-hondo | 123
peter-amaral  | toor
```

