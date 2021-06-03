-- consultar todos os dados da tabela
SELECT * FROM estados;

-- consultar as colunas siglas e nome
SELECT sigla, nome FROM estados;

-- consultar as colunas sigla e nome, porém a coluna nome terá um label 'Nome do Estado'
SELECT sigla, nome AS 'Nome do Estado' FROM estados;

-- consultar as colunas sigla e nome onde as regiões são iguas a 'Sul'
SELECT sigla, nome AS 'Nome do Estado' FROM estados
WHERE regiao = 'norte';

-- consultar as colunas nome, regiao e populacao onde a população é maior ou igual a 10M
SELECT nome, regiao, populacao from estados
where populacao >= 10;

-- consultar as colunas nome, regiao e populacao onde a populacao é maior ou igual a 10M em ordem decrescente
SELECT nome, regiao, populacao from estados
WHERE populacao >= 10
ORDER BY populacao DESC;