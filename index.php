<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso de PHP 7</title>
</head>
<body>

    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo - Básico</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=basico&file=ola">Olá PHP</a></li>
                
                        <li><a href="exercicios.php?dir=basico&file=html">Integração HTML</a></li>
                
                        <li><a href="exercicios.php?dir=basico&file=css">Integração CSS</a></li>
            
                        <li><a href="exercicios.php?dir=basico&file=comentarios">Comentários PHP</a></li>
            
                        <li><a href="exercicios.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo - Tipos de Dados</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=tipos&file=int">Tipo inteiro</a></li>
                        
                        <li><a href="exercicios.php?dir=tipos&file=float">Tipo float</a></li>

                        <li><a href="exercicios.php?dir=tipos&file=aritmeticas">Op. aritimética</a></li>
                        
                        <li><a href="exercicios.php?dir=tipos&file=desafio">Desafio</a></li>

                        <li><a href="exercicios.php?dir=tipos&file=string">Tipo String</a></li>
                        
                        <li><a href="exercicios.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        
                        <li><a href="exercicios.php?dir=tipos&file=booleano">Tipo booleano</a></li>
                        
                        <li><a href="exercicios.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>14. Formulário</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=formulario&file=formulario">Formulário</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        developed with &hearts; by Adonis Cipriano - <?= date('Y'); ?>
    </footer>
    
</body>
</html>