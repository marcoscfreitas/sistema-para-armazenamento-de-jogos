#Desenvolvimento de um sistema com login

Prezados,

Considerando o exemplo anterior do uso de login, fazer um sistema interno, simples, para loja, em php/html/mysql, para armazenamento de cartuchos/cd vintage. (cartuchos/cd de video game dos anos 80/90/2000)

O sistema de login será o mesmo do exemplo mencionado em aula, no entanto, teremos uma outra tabela, que são cartuchos adicionados para cada usuário. A tabela terá id, nome do cartucho/cd, sistema, tela, ano (Atari, Nintendo, Mega-drive, Odyssey, Xbox, ps1, ps2, ps3, MSX)

(PARA PENSAR: Como armazeno uma tela no mysql?) BLOB ou string?   >sorriso   )

Neste sistema de login, depois que o login estiver correto, na tela HOME, terá um menu para cadastro de jogos para esse usuário. Terá um formulário com dados do cartucho a ser inserido para o usuário atual.  

No menu, terá um outro item que será mostrar cartuchos do usuário. Assim, o usuário poderá apresentar todos cartuchos do usuário que está logado.

finalmente, teremos menu pesquisa (só o administrador tem acesso).

Formas de criar e gerenciar um adm: 

i) criar um campo adicional na tabela administrador (verdadeiro ou falso)

ou ii) usuário administrador apenas já foi pré-inserido no sistema,

Faremos as pesquisas no nível da adm:

i)  Quem tem o cartucho XXXXX?

ii) Qual é o cartucho mais antigo? Quem é o dono ?

iii) número de games para uma dada plataforma/sistema.
