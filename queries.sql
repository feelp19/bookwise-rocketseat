select * from livros;

delete from livros where id >= 1;

alter table livros drop column ano_lancamento;

alter table livros rename nro_paginas to qtd_paginas;

alter table livros add ano_lancamento integer;

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

-- testes de caso de update
update livros set ano_lancamento = 2001 where titulo like '%harry potter%';
update livros set qtd_paginas = 432 where titulo like '%harry potter%';
update livros set qtd_paginas = 390 where titulo like '%camara secreta%';
update livros set ano_lancamento = 1999 where titulo like '%pedra%';
update livros set ano_lancamento = 2002 where id = 5 or id =6;

-- testes de caso de select

select titulo as titulo_livro from livros as l where l.titulo like '%an%' or '%in%';
select id from livros where titulo like '%ui%';

-- or para somar os valores e and para limitar os valores

-- para garantir que o filtro sera executado com and, as validacoes com or devem retornar true, como abaixo

select titulo as titulo_livro from livros as l where (
    l.titulo like '%sa%' or l.titulo like '%pe%' or l.titulo like '%um%' or l.titulo like '%am%'
    ) and l.ano_lancamento <= 2002;