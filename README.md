<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Sistema Web de Diário Escolar v2.0

## Usuários do Sistema
- Admin
- Professor
- Aluno

## Serviços por Usuário
- Secretária Acadêmica
    - Cadastro de alunos
    - Cadastro de turmas
    - Consultar turmas
    - Consultar notas
    - Consultar faltas
    - Consultar aulas
- Professor
    - Consultar turmas
    - Consultar aulas
    - Consultar notas
    - Consultar faltas
    - Registrar aula
    - Registrar faltas
    - Registrar notas
- Aluno
    - Solicitar informações sobre notas
    - Solicitar informações sobre faltas
    - Solicitar informações sobre datas de provas
    - Solicitar informações sobre cronograma das aulas

## Cenários
Ministrando aulas (Cenário Atual Normal)
- Ambiente
    - Sala de aula com 40 alunos.
- Atores
    - Alunos
    - Professor
- Roteiro
    - Professor entra na sala de aula e cumprimenta os alunos
    - Professor acessa o computador e loga no sistema
    - Professor acessa a função diário e faz chamada
    - Professor anota as faltas dos alunos no diário
    - Professor informa os alunos o assunto a ser dado
    - O professor ministra a aula
    - Alunos perguntam qual a data da avaliação
    - O professor lê em suas anotações do sistema e informa
    - O professor registra no diário a aula do dia, se despede dos alunos e retira-se da sala.

## Requisitos Funcionais:
- ``[RF01]`` Cadastrar alunos
- ``[RF02]`` Cadastrar turmas
- ``[RF03]`` Consultar turmas;
- ``[RF04]`` Disponibilizar consulta aulas;
- ``[RF05]`` Disponibilizar consulta de notas;
- ``[RF06]`` Disponibilizar consulta de faltas;
- ``[RF07]`` Registrar aulas;
- ``[RF08]`` Registrar notas;
- ``[RF09]`` Registrar faltas dos alunos;
- ``[RF10]`` Sincronizar dados.

## Requisitos não funcionais do sistema:
### ``[RNF01]`` Eficiência: 
O Sistema deve possuir um tempo máximo para a execução de
uma determinada transação, oferecendo um controle de time out, caso a operação
não tenha sido realizada por motivos independentes do sistema. Os avisos de
erros ocorridos devem ser dados num curto espaço de tempo oferecendo ao
usuário a possibilidade de correção o mais rapidamente possível.
### ``[RNF02]`` Usabilidade: 
O sistema deve possuir uma interface de fácil utilização e
aprendizado, de modo que o usuário possa interagir com o sistema, garantindo
eficiência e satisfação.
### ``[RNF03]`` Segurança: 
O sistema deve oferecer segurança, associando a cada
usuário uma senha que o identifique unicamente no sistema.
### ``[RNF04]`` Interoperabilidade: 
O sistema deverá interagir com o navegador web
(Browser), com menor esforço possível.
### ``[RNF05]`` Funcionalidade: 
O sistema web deve satisfazer a especificação dos
requisitos

#### ########################################

## Pocotes instalados no projeto
- https://github.com/lucascudo/laravel-pt-BR-localization
- https://github.com/LaravelLegends/pt-br-validator
- https://github.com/barryvdh/laravel-dompdf
- https://laravel-excel.com/
- https://laravel.com/docs/8.x/socialite
