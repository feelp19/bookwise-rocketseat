-- consulta de dados
select * from livros;

-- exclusao de dados com filtro
delete from livros where id >= 1;

-- alteracao de tabela com exclusao de colunas
alter table livros drop column ano_lancamento;

-- alteracao de tabela trocando nome de colunas
alter table livros rename nro_paginas to qtd_paginas;

-- alteracao de tabela adicionando coluna
alter table livros add ano_lancamento integer;

-- criacao de tabelas com foreign key
create table livros(
    id integer primary key,
    titulo varchar(255),
    autor varchar(255),
    descricao text,
    ano_lancamento integer,
    usuario_id integer,
    foreign key(usuario_id) references usuario(id)
);

-- -----------------------------------------------------------------------------------------------------------------------------------------------------
-- ** Convencoes
    -- nomes de tabelas sempre no plural (livro -> livros) *notacao: singular -> plural
    -- colunas sempre no singular (autores -> autor) *notacao: plural -> singular
    -- colunas de referencia (usuario_id) *notacao: tabelaReferencia_colunaReferencia *no singular
-- -----------------------------------------------------------------------------------------------------------------------------------------------------
-- insercao de dados
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Senhor dos Aneis', 'J.R.R. Tolkien', 'lorem ipsum', 988, 1989);
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Suits', 'Patrick J. Adamns', 'lorem ipsum', 312, 2002);
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Harry Potter e a Pedra Filosofal', 'J.K Rolling', 'lorem ipsum', 988, 1989);
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Harry Potter e a Camara Secreta', 'J.K Rolling', 'lorem ipsum', 988, 1989);
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Harry Potter e o Prisioneiro de Azkaban', 'J.K Rolling', 'lorem ipsum', 988, 1989);
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Harry Potter e o Calice de Fogo', 'J.K Rolling', 'lorem ipsum', 988, 1989);
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Harry Potter e a Ordem da Fenix', 'J.K Rolling', 'lorem ipsum', 988, 1989);
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Harry Potter e o Enigma do Principe', 'J.K Rolling', 'lorem ipsum', 988, 1989);
insert into livros(titulo, autor, descricao, qtd_paginas, ano_lancamento) values ('Harry Potter e as Reliquias da Morte', 'J. K Rolling', 'lorem ipsum', 512, 2004);
-- -----------------------------------------------------------------------------------------------------------------------------------------------------
-- testes de caso de update
update livros set ano_lancamento = 2001 where titulo like '%harry potter%';
update livros set qtd_paginas = 432 where titulo like '%harry potter%';
update livros set qtd_paginas = 390 where titulo like '%camara secreta%';
update livros set ano_lancamento = 1999 where titulo like '%pedra%';
update livros set ano_lancamento = 2002 where id = 5 or id =6;
update livros set usuario_id = 2 where titulo like '%potter%';
update livros set usuario_id = 1 where usuario_id is null; -- atribui o usuario_id = 1 para todos os registros que forem null na tabela *caso nao tenha inserido nenhum valor*
-- -----------------------------------------------------------------------------------------------------------------------------------------------------
-- testes de caso de select
select titulo as titulo_livro from livros as l where l.titulo like '%an%' or '%in%';
select id from livros where titulo like '%ui%';
-- -----------------------------------------------------------------------------------------------------------------------------------------------------
-- testes de caso usando select em 2 tabelas sem correlacao ate o momento
select l.titulo, l.autor, l.descricao, u.nome from livros as l, usuarios as u where
    (l.titulo like '%or%' or l.autor like '%to%') and u.nome like '%an%';

select titulo as titulo_livro from livros as l where (
    l.titulo like '%sa%' or l.titulo like '%pe%' or l.titulo like '%um%' or l.titulo like '%am%'
    ) and l.ano_lancamento <= 2002;
-- -------------------------------------------------------------------------------------------------------------------------------------------------------
-- or para somar os valores e and para limitar os valores
-- para garantir que o filtro sera executado com and, as validacoes com or devem retornar true, como abaixo
-- -------------------------------------------------------------------------------------------------------------------------------------------------------

-- relacao entre tabelas utilizando join
select
    l.titulo
     , l.autor
     , l.descricao
     , l.ano_lancamento
     , l.usuario_id
     , u.nome
     , u.id as usuarios_id
from
    livros as l
join
    usuarios as u on u.id = l.usuario_id
where
    (
        l.titulo like '%it%' or l.descricao like '%an%' or l.autor like '%rol%'
    )
and
    l.ano_lancamento >= 2001;
-- -------------------------------------------------------------------------------------------------------------------------------------------------------

-- relacao entre tabelas utilizando left join
select
    l.titulo
     , l.autor
     , l.descricao
     , l.ano_lancamento
     , l.usuario_id
     , u.nome
     , u.id as usuarios_id
from
    livros as l
left join
    usuarios as u on u.id = l.usuario_id;
-- -------------------------------------------------------------------------------------------------------------------------------------------------------

-- relacao entre tabelas utilizando right join
select
    l.titulo,
    l.autor,
    l.usuario_id,
    u.nome
from livros as l
         right join
     usuarios as u on u.id = l.usuario_id;