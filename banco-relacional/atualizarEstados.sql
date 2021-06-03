-- atualizar o nome do estado Maranhão
UPDATE estados
SET nome = 'Maranhão'
WHERE sigla = 'MA'

-- atualizar o nome e a quantidade de população do estado do Paraná
UPDATE estados
SET nome = 'Paraná', populacao = 11.32
WHERE sigla = 'PR';
