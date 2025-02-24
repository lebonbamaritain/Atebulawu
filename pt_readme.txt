



										####################
 										#				   #
 										#	 Portuguese    #
 										#				   #
 										####################




Nome do componente : ATEBULAWU

Linguagem de fabrico : PHP

Categoria : componente de utilizaçao

Data de criaçao : 02 - 2025

Autor : Mathieu Kabo Junior

Versao : 0.0.7

Detailhe : 

Este é um componente do usuário que permitirá que você execute as seguintes operações : 

1 - Você pode usar esse componente para carregar classes contidas em espaços para nome de uma maneira dinâmica. Basta fornecer 2 parâmetros para a classe AutoLoader. O primeiro parâmetro a ser fornecido à classe AutoLoader é o caminho absoluto do repertório do host de seus namespaces. NB: Se você usar um caminho relativo, o sistema automático de carregamento em sala de aula não poderá carregar suas classes. No segundo parâmetro, você deve fornecer à classe AutoLoader o código 111. Este código inicia o sistema de carregamento automático para suas classes. Se você deseja testar a primeira operação realizada não conta pelo componente, deduzir o Exemplo 1 no índice.

2 - Arquivo - O código 111 também permite iniciar um sistema de carregamento de classe, exceto que desta vez as classes não estão em namespaces . É um sistema que eu me uso para organizar melhor minhas aulas. Eu considerei útil compartilhar essa organização com o restante dos desenvolvedores da Web. Como faço para proceder? Começo colocando minhas aulas em primeiro lugar por categoria. Por exemplo, eu guardo todas as minhas aulas que contêm meu sistema de segurança em um arquivo que eu chamo de classe_security. Então eu faço o mesmo por todo o restante do sistema.
Então, não devemos esquecer a parte que mencionarei anteriormente, é essencial para o funcionamento adequado do sistema de carregamento automático para suas classes. Para que o sistema carregue efetivamente suas classes, você deve adicionar uma segunda extensão aos nomes de suas classes. Exemplo: [Security.Secure.php] Para que serve? Resposta: A segunda extensão adicionada aos nomes de suas classes permitirá que o componente [Atebulawu] carregue apenas as classes necessárias em parte de suas fontes. Outro esclarecimento, você deve garantir que o nome da sua segunda extensão tenha um número diferente de caracteres das outras partes do seu site. Eu tomo um exemplo: se a segunda extensão de todas as classes que contêm meu sistema de segurança (CTRL), devo garantir que a segunda extensão das classes que contenha meu sistema de boletins tenha um número maior de caracteres ou menor que 4. Por que é tão importante? Se a segunda extensão for a mesma em todos os nomes das classes do seu site, quando você usa o sistema de carregamento automático de suas classes em parte do seu código -fonte, o sistema carrega todas as suas classes, incluindo classes, incluindo classes que você não Precisa em uma parte específica do seu programa. Esse é o objetivo de selecionar apenas as classes que você precisa. Este componente foi pré -configurado para executar esta tarefa. Também leva em consideração as dependências quando carrega automaticamente várias classes na memória do sistema. NB: quando uma ou mais de suas classes usam outras classes para funcionar corretamente, é recomendável organizar seus arquivos para que o sistema automático de carregamento da sala de aula possa carregar as dependências antes de carregar todas as classes que usam dependências para funcionar corretamente; Caso contrário, o sistema poderá retornar um erro se as exclusões forem carregadas posteriormente. Especifiquei vários exemplos levando em consideração a herança no PHP. Faça testes para entender melhor como o componente funciona. Para fazer isso, deduzir o Exemplo 2. 

3 - O componente também permite que você recupere um arquivo específico em um diretório do seu site sem mencionar ou o caminho [Absolute | Parente] do arquivo, nem o nome do próprio arquivo. Isso pode ser útil ao lidar com arquivos sensíveis ou mesmo arquivos de configuração. Se você deseja testar o componente, inomine o Exemplo 3. 


4 - Finalmente, a última operação levada em consideração pelo componente. O componente permite que você recupere vários arquivos de suas extensões. Eu pré -configurei um conjunto de extensão suportado pelo sistema. Você pode modificar a tabela da classe Usof_Ban_Djamumodien. Para testar a última operação levada em consideração pelo componente, demitem o Exemplo 4. NB: Quando você deseja usar esse componente para recuperar um ou mais arquivos de suas extensões em seu (s) projeto (s) ou no seu site, você precisará efetuar uma atualização do método que executa a operação. 1 - Vá para a classe abstrata Usof_Ban_Djamumodien 2 - Encontre o método chamado utebulom_wanimagne 3 - Substitua o nome da base (arquivo$) pelo arquivo$. 


Você pode integrá -lo aos seus projetos atuais ou futuros, em seu site e onde quer que precisar carregar automaticamente uma ou mais classes ou recuperar um ou mais arquivos. Uso: recupere a pasta do sistema e a pasta ReadMe e também o arquivo init.php. Para o resto, faça os exemplos mencionados no arquivo index.php. Para seus teclados, o nerd!
