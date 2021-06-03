-- consultar dados com agregação; somar e ordemar a população
-- por região e ordenar em decrescente
SELECT
  regiao AS 'Região',
  SUM(populacao) AS Total
FROM `estados`
GROUP BY regiao
ORDER BY Total DESC;

-- mostrar a quantidade total de população sem filtro
SELECT
  SUM(populacao) as Total
FROM estados;

-- consultar a média de população por estado
SELECT
  AVG(populacao) AS Total
FROM `estados`;