# Guia para o Sass
A pasta `sass` tem as subpastas: `framework` e `modules`; `framework` contém a [normalização do css](Phttps://github.com/necolas/normalize.css/), os `extends`, partes de outros csses (e.g.: font-awesome) e o arquivo com as variáveis globais; `sections` contém estruturas comuns do tema (e.g.: estilização da barra de navegação, a estrutura do _header_, _footer_, etc.); `modules` contém arquivos de estilização de elementos comuns e reutilizáveis (e.g.: `button`, `panels`, etc.).

## Variaveis
Variáveis são uma das grandes vantagens do sass, elas ajudam a manter a consistência e a sanidade do código. Como exemplo, se a `nav` tiver fixa, provavelmente será preciso um espaçamento entre ela e o próximo elemento (ou anterior), nesse momento, utiliza-se variáveis com o tamanho (`width` ou `height`), tornando assim mais cômodo a edição dessa medida, ou ainda a cor primaria do tema, ao invés de ter que mudar em todas as aparições dela, só trocar o valor no arquivo de variáveis globais.

### Globais
As variáveis globais tem um arquivo dedicado à elas, se encontra na pasta `sass/framework/`. Todas possuem um prefixo apropriado como `$header_` ou `$color_`.

### Locais
Diferente das globais, as locais são declaradas no topo do arquivo as quais são relevantes, geralmente contem um prefixo, como nas globais, mas não é regra, e quanto mais específica e mais profunda na "hierarquia de _tags_" menor a chance de ter um prefixo.
