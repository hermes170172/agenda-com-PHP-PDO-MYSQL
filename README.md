# agenda-com-PHP-PDO-MYSQL
Aplicação WEB de uma agenda feita com PHP com extensão PDO, Javascript, HTML, CSS e Bootstrap.

PDO(PHP Data Objects) é um módulo de PHP montado sob o paradigma Orientado a Objetos, cujo objetivo é prover uma padronização da forma com que PHP se comunica com um banco de dados relacional. Este módulo surgiu a partir da versão 5 de PHP. PDO, portanto, é uma interface que define um conjunto de classes e a assinatura dos métodos de comunicação com uma base de dados.

Por que usar PDO Antes da chegada do PDO, a linguagem PHP oferecia suporte à comunicação com diferentes modelos de SGBD através de módulos específicos. A maioria deles provia uma biblioteca de funções e utilizava um resource para representar a conexão e outro para representar um resultset (o resultado de uma consulta). As operações eram feitas sobre as variáveis de resource.

Cada driver implementava suas operações conforme imaginavam ser mais adequados. Embora alguns deles tivessem um funcionamento semelhante, a ordem dos parâmetros nem sempre era a mesma e podia causar uma certa confusão entre programadores.

FONTE: Localweb - https://ajuda.locaweb.com.br/wiki/pdo-php-data-object/

/INSTRUÇÕES/

Essas instruções pressopõe que você já tenha instalado em seu computador um dos servidores WEB "XAMPP" ou "WAMP".

Se estiver usando o WAMP SERVER, faça o download da pasta "agenda" para o diretório raiz do WAMP e a "pasta agenda_public" para o diretório "www" do WAMP SERVER. Caso esteja usando o XAMPP SERVER, faça o download da pasta "agenda" para o diretório raiz do XAMPP e a "pasta agenda_public" para o diretório "htdocs" do XAMPP SERVER.

Abra em seu navegador o PHPMyadmin (localhost/phpmyadmin), crie um novo banco de dados e depois clique em SQL para executar a criação das tabelas necessárias:

create table tb_status ( id int not null primary key auto_increment, status varchar(25) not null );

insert into tb_status(status)values('pendente'); insert into tb_status(status)values('realizado');

create table tb_tarefas ( id int not null primary key auto_increment, id_status int not null default 1, foreign key(id_status) references tb_status(id), tarefa text not null, data_cadastrado datetime not null default current_timestamp )

Por fim, abra seu navegador e digite "localhost/agenda_public".

Você pode acessar a aplicação original em "https://hrribeiro.com/agenda/"
