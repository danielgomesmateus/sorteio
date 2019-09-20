# sorteio

Foi desenvolvido o teste no padrão MVC. A classe solicitada nos pontos, foi implementada dentro do model.

1 - Desenvolva uma classe que possua 4 atributos privados que deverão conter os
seguintes dados:
- Quantidade de dezenas, que deverá permitir apenas as seguintes opções: 6, 7, 8,
9 ou 10.
- Resultado
- Total jogos
- Jogos

R: Classe implementada em SorteioModel.php

2 - Desenvolver na classe anterior 2 métodos públicos GET e SET para definir os
valores dos atributos.

R: Classe implementada em SorteioModel.php. Os métodos são: __get e __set.

3 - Desenvolver método de construção onde 2 parâmetros serão recebidos os atributos
e consequentemente suas definições de valor:
- Quantidade de dezenas
- Total de jogos.

R: Classe implementada em SorteioModel.php. O método é: __construct

4 - Desenvolver um método privado que retorne um array com dezenas entre 01 e 60
que respeite a cardinalidade definida pelo atributo “Quantidade de dezenas” onde as
dezenas nunca se repitam e estejam na ordem crescente.

R: Classe implementada em SorteioModel.php. O método é: sortear.

5 - Desenvolver um método público que selecione a quantidade de jogos que está
setado no atributo “Total jogos” obtendo assim um array multidimensional onde cada
posição deste array deverá conter outro array com um jogo. Use o método anterior
para gerar cada jogo e salve este array multidimensional no atributo “Jogos”.

R: Classe implementada em SorteioModel.php. O método é: quantidadeJogos.

6 - Desenvolver um método público que realize o sorteio de 6 dezenas aleatórias entre
01 e 60. Os números não podem se repetir e devem estar em ordem crescente. O
array resultante deverá ser armazenado no atributo “Resultado”.

R: Classe implementada em SorteioModel.php. O método é: gerarSorteio.

7 - Desenvolver um método que confere todos os jogos e retorna uma tabela HTML
que contem os jogos e quantas dezenas foram sorteadas em cada jogo.

R: Classe implementada em SorteioView.php. A template carrega o conteúdo html sorteio_index.php.