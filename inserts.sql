use scholarbase;

/*======================================================
=                  USUÁRIOS                           =
======================================================*/

INSERT INTO usuario (email,nome,senha) VALUES
('joao.silva@ifmg.edu.br','João Silva','$2y$10$senha01'),
('maria.oliveira@ifmg.edu.br','Maria Oliveira','$2y$10$senha02'),
('pedro.almeida@ifmg.edu.br','Pedro Almeida','$2y$10$senha03'),
('ana.souza@ifmg.edu.br','Ana Souza','$2y$10$senha04'),
('carlos.lima@ifmg.edu.br','Carlos Lima','$2y$10$senha05'),
('fernanda.rocha@ifmg.edu.br','Fernanda Rocha','$2y$10$senha06'),
('lucas.costa@ifmg.edu.br','Lucas Costa','$2y$10$senha07'),
('juliana.pereira@ifmg.edu.br','Juliana Pereira','$2y$10$senha08'),
('rafael.gomes@ifmg.edu.br','Rafael Gomes','$2y$10$senha09'),
('beatriz.alves@ifmg.edu.br','Beatriz Alves','$2y$10$senha10'),

('gabriel.martins@gmail.com','Gabriel Martins','$2y$10$senha11'),
('larissa.ribeiro@gmail.com','Larissa Ribeiro','$2y$10$senha12'),
('bruno.fernandes@gmail.com','Bruno Fernandes','$2y$10$senha13'),
('camila.melo@gmail.com','Camila Melo','$2y$10$senha14'),
('thiago.santos@gmail.com','Thiago Santos','$2y$10$senha15'),
('patricia.freitas@gmail.com','Patrícia Freitas','$2y$10$senha16'),
('henrique.teixeira@gmail.com','Henrique Teixeira','$2y$10$senha17'),
('aline.cardoso@gmail.com','Aline Cardoso','$2y$10$senha18'),
('victor.barbosa@gmail.com','Victor Barbosa','$2y$10$senha19'),
('isabela.araujo@gmail.com','Isabela Araújo','$2y$10$senha20'),

('marcos.dias@gmail.com','Marcos Dias','$2y$10$senha21'),
('renata.moreira@gmail.com','Renata Moreira','$2y$10$senha22'),
('felipe.nogueira@gmail.com','Felipe Nogueira','$2y$10$senha23'),
('luana.castro@gmail.com','Luana Castro','$2y$10$senha24'),
('eduardo.pinto@gmail.com','Eduardo Pinto','$2y$10$senha25'),
('sabrina.moura@gmail.com','Sabrina Moura','$2y$10$senha26'),
('gustavo.borges@gmail.com','Gustavo Borges','$2y$10$senha27'),
('carolina.torres@gmail.com','Carolina Torres','$2y$10$senha28'),
('daniel.ramos@gmail.com','Daniel Ramos','$2y$10$senha29'),
('leticia.campos@gmail.com','Letícia Campos','$2y$10$senha30'),

('paulo.vieira@gmail.com','Paulo Vieira','$2y$10$senha31'),
('natalia.fonseca@gmail.com','Natália Fonseca','$2y$10$senha32'),
('igor.cavalcante@gmail.com','Igor Cavalcante','$2y$10$senha33'),
('bianca.oliveira@gmail.com','Bianca Oliveira','$2y$10$senha34'),
('mateus.carvalho@gmail.com','Mateus Carvalho','$2y$10$senha35'),
('amanda.silveira@gmail.com','Amanda Silveira','$2y$10$senha36'),
('diego.machado@gmail.com','Diego Machado','$2y$10$senha37'),
('priscila.neves@gmail.com','Priscila Neves','$2y$10$senha38'),
('vinicius.andrade@gmail.com','Vinícius Andrade','$2y$10$senha39'),
('clara.souza@gmail.com','Clara Souza','$2y$10$senha40');


/*======================================================
=                PESQUISADORES                        =
======================================================*/

INSERT INTO pesquisador(biografia,lattes,instituicao,usuario_id) VALUES

('Professor da área de Inteligência Artificial e Ciência de Dados.',
'https://lattes.cnpq.br/1000000000000001',
'IFMG',
1),

('Pesquisadora em Visão Computacional.',
'https://lattes.cnpq.br/1000000000000002',
'UFMG',
2),

('Pesquisador em Banco de Dados Distribuídos.',
'https://lattes.cnpq.br/1000000000000003',
'USP',
3),

('Pesquisadora em Engenharia de Software.',
'https://lattes.cnpq.br/1000000000000004',
'UFOP',
4),

('Professor de Machine Learning.',
'https://lattes.cnpq.br/1000000000000005',
'UFV',
5),

('Pesquisadora em Processamento de Linguagem Natural.',
'https://lattes.cnpq.br/1000000000000006',
'PUC Minas',
6),

('Pesquisador em Segurança da Informação.',
'https://lattes.cnpq.br/1000000000000007',
'UFRJ',
7),

('Pesquisadora em Computação em Nuvem.',
'https://lattes.cnpq.br/1000000000000008',
'UFSC',
8),

('Pesquisador em Internet das Coisas.',
'https://lattes.cnpq.br/1000000000000009',
'UNICAMP',
9),

('Pesquisadora em Bioinformática.',
'https://lattes.cnpq.br/1000000000000010',
'UFPE',
10),

('Professor em Robótica.',
'https://lattes.cnpq.br/1000000000000011',
'ITA',
11),

('Pesquisadora em Computação Gráfica.',
'https://lattes.cnpq.br/1000000000000012',
'UFMG',
12),

('Professor em Sistemas Embarcados.',
'https://lattes.cnpq.br/1000000000000013',
'UFES',
13),

('Pesquisadora em Ciência de Dados.',
'https://lattes.cnpq.br/1000000000000014',
'UFPR',
14),

('Professor em Redes de Computadores.',
'https://lattes.cnpq.br/1000000000000015',
'UFBA',
15);

/*======================================================
=                  ARTIGOS                   =
======================================================*/

INSERT INTO artigo (titulo,resumo,data_publicacao,doi,link) VALUES

('Aplicações de Inteligência Artificial na Educação',
'Estudo sobre o uso de algoritmos inteligentes para personalização do ensino.',
'2025-01-10',
'10.1000/1001',
'https://doi.org/10.1000/1001'),

('Reconhecimento Facial com Redes Neurais Convolucionais',
'Comparação entre diferentes arquiteturas CNN para reconhecimento facial.',
'2024-11-12',
'10.1000/1002',
'https://doi.org/10.1000/1002'),

('Visão Computacional aplicada ao Diagnóstico Médico',
'Utilização de imagens médicas para auxílio ao diagnóstico.',
'2025-02-18',
'10.1000/1003',
'https://doi.org/10.1000/1003'),

('Processamento de Linguagem Natural em Português',
'Estudo sobre modelos de linguagem aplicados ao português brasileiro.',
'2025-03-05',
'10.1000/1004',
'https://doi.org/10.1000/1004'),

('Análise de Dados utilizando Python',
'Ferramentas para manipulação e visualização de grandes conjuntos de dados.',
'2023-09-15',
'10.1000/1005',
'https://doi.org/10.1000/1005'),

('Machine Learning aplicado à Previsão Climática',
'Modelos supervisionados para previsão meteorológica.',
'2024-07-08',
'10.1000/1006',
'https://doi.org/10.1000/1006'),

('Internet das Coisas na Agricultura Inteligente',
'Sensores IoT para monitoramento de plantações.',
'2025-01-30',
'10.1000/1007',
'https://doi.org/10.1000/1007'),

('Segurança em Aplicações Web Modernas',
'Principais vulnerabilidades e mecanismos de proteção.',
'2024-08-20',
'10.1000/1008',
'https://doi.org/10.1000/1008'),

('Banco de Dados Distribuídos em Ambientes Corporativos',
'Arquiteturas distribuídas para alta disponibilidade.',
'2023-06-14',
'10.1000/1009',
'https://doi.org/10.1000/1009'),

('Computação em Nuvem para Instituições de Ensino',
'Benefícios da computação em nuvem para universidades.',
'2025-02-14',
'10.1000/1010',
'https://doi.org/10.1000/1010'),

('Blockchain aplicado ao Controle de Documentos',
'Registro seguro de documentos acadêmicos.',
'2024-10-10',
'10.1000/1011',
'https://doi.org/10.1000/1011'),

('Deep Learning para Diagnóstico de Câncer',
'Redes neurais profundas para classificação de tumores.',
'2025-04-12',
'10.1000/1012',
'https://doi.org/10.1000/1012'),

('Robótica Educacional no Ensino Médio',
'Estudo do impacto da robótica no aprendizado.',
'2024-03-02',
'10.1000/1013',
'https://doi.org/10.1000/1013'),

('Sistemas Embarcados para Monitoramento Industrial',
'Aplicações industriais utilizando microcontroladores.',
'2023-12-01',
'10.1000/1014',
'https://doi.org/10.1000/1014'),

('Big Data na Saúde Pública',
'Análise de grandes bases de dados hospitalares.',
'2024-06-22',
'10.1000/1015',
'https://doi.org/10.1000/1015'),

('Redes de Computadores de Alta Velocidade',
'Técnicas para otimização do tráfego de dados.',
'2023-11-11',
'10.1000/1016',
'https://doi.org/10.1000/1016'),

('Bioinformática aplicada ao Sequenciamento Genético',
'Ferramentas computacionais para análise genética.',
'2025-05-10',
'10.1000/1017',
'https://doi.org/10.1000/1017'),

('Computação Verde em Data Centers',
'Redução do consumo energético em servidores.',
'2024-02-09',
'10.1000/1018',
'https://doi.org/10.1000/1018'),

('Mineração de Dados em Redes Sociais',
'Técnicas para descoberta de padrões em mídias sociais.',
'2024-09-01',
'10.1000/1019',
'https://doi.org/10.1000/1019'),

('Engenharia de Software Baseada em Componentes',
'Desenvolvimento de aplicações reutilizáveis.',
'2023-05-27',
'10.1000/1020',
'https://doi.org/10.1000/1020'),

('Realidade Virtual aplicada à Educação',
'Estudo do uso de ambientes imersivos no ensino.',
'2025-06-14',
'10.1000/1021',
'https://doi.org/10.1000/1021'),

('Aprendizado por Reforço em Jogos',
'Agentes inteligentes utilizando reinforcement learning.',
'2024-07-17',
'10.1000/1022',
'https://doi.org/10.1000/1022'),

('Chatbots Inteligentes para Atendimento',
'Modelos conversacionais aplicados ao suporte ao cliente.',
'2025-01-25',
'10.1000/1023',
'https://doi.org/10.1000/1023'),

('Análise de Sentimentos em Redes Sociais',
'Classificação automática de opiniões utilizando PLN.',
'2024-08-04',
'10.1000/1024',
'https://doi.org/10.1000/1024'),

('Edge Computing para Internet das Coisas',
'Processamento distribuído próximo aos dispositivos.',
'2025-03-19',
'10.1000/1025',
'https://doi.org/10.1000/1025'),

('Criptografia Pós-Quântica',
'Novos algoritmos resistentes à computação quântica.',
'2025-05-08',
'10.1000/1026',
'https://doi.org/10.1000/1026'),

('Ciência de Dados aplicada ao Mercado Financeiro',
'Modelos preditivos para investimentos.',
'2024-12-03',
'10.1000/1027',
'https://doi.org/10.1000/1027'),

('Reconhecimento de Objetos em Vídeos',
'Técnicas modernas de visão computacional.',
'2024-06-30',
'10.1000/1028',
'https://doi.org/10.1000/1028'),

('Sistemas Inteligentes para Cidades Inteligentes',
'Aplicações de IA em infraestrutura urbana.',
'2025-02-27',
'10.1000/1029',
'https://doi.org/10.1000/1029'),

('Otimização de Consultas em Bancos de Dados',
'Estudo sobre índices e desempenho em consultas SQL.',
'2023-10-16',
'10.1000/1030',
'https://doi.org/10.1000/1030');

/*======================================================
=              CATEGORIAS                     =
======================================================*/

INSERT INTO categoria (nome) VALUES
('Inteligência Artificial'),
('Machine Learning'),
('Deep Learning'),
('Visão Computacional'),
('Processamento de Linguagem Natural'),
('Ciência de Dados'),
('Big Data'),
('Banco de Dados'),
('Computação em Nuvem'),
('Internet das Coisas'),
('Segurança da Informação'),
('Blockchain'),
('Engenharia de Software'),
('Robótica'),
('Educação'),
('Saúde'),
('Bioinformática'),
('Redes de Computadores'),
('Computação Verde'),
('Sistemas Embarcados'),
('Realidade Virtual'),
('Computação Quântica'),
('Cidades Inteligentes'),
('Agricultura Inteligente'),
('Mercado Financeiro');

/*======================================================
=        ARTIGO × PESQUISADOR             =
======================================================*/

INSERT INTO artigo_pesquisador (artigo_id, pesquisador_id) VALUES
(1,1),(1,2),
(2,2),(2,5),
(3,1),(3,10),
(4,6),(4,2),
(5,1),(5,14),
(6,5),(6,14),
(7,9),(7,5),
(8,7),
(9,3),(9,8),
(10,8),(10,4),
(11,7),(11,3),
(12,5),(12,10),(12,1),
(13,11),(13,4),
(14,13),
(15,10),(15,14),
(16,15),(16,3),
(17,10),(17,1),
(18,8),(18,15),
(19,14),(19,6),
(20,4),(20,3),
(21,4),(21,11),
(22,5),(22,1),(22,6),
(23,6),(23,2),
(24,6),(24,14),
(25,9),(25,8),
(26,7),(26,3),
(27,14),(27,5),
(28,2),(28,1),
(29,1),(29,9),(29,8),
(30,3),(30,14),(30,15);

/*======================================================
=           ARTIGO × CATEGORIA              =
======================================================*/

INSERT INTO categoria_artigo (categoria_id, artigo_id) VALUES
(1,1),(15,1),
(1,2),(4,2),
(4,3),(16,3),
(5,4),(15,4),
(6,5),
(2,6),(6,6),
(10,7),(24,7),
(11,8),(13,8),
(8,9),
(9,10),(15,10),
(12,11),(11,11),
(3,12),(16,12),(1,12),
(14,13),(15,13),
(20,14),
(7,15),(16,15),
(18,16),
(17,17),(16,17),
(19,18),(9,18),
(6,19),(7,19),
(13,20),
(21,21),(15,21),
(2,22),(1,22),
(5,23),(1,23),
(5,24),(6,24),
(10,25),(9,25),
(22,26),(11,26),
(6,27),(25,27),
(4,28),(1,28),
(23,29),(1,29),(10,29),
(8,30),(6,30);


/*======================================================
=             PARTE  - FAVORITOS                    =
======================================================*/

INSERT INTO favorito (usuario_id, artigo_id) VALUES
(16,1),(16,2),(16,5),(16,12),(16,18),
(17,3),(17,7),(17,10),(17,15),(17,22),
(18,4),(18,8),(18,11),(18,19),
(19,2),(19,6),(19,9),(19,20),(19,24),
(20,1),(20,3),(20,5),(20,21),
(21,7),(21,8),(21,13),(21,27),
(22,4),(22,9),(22,15),(22,18),(22,30),
(23,2),(23,5),(23,11),(23,17),
(24,1),(24,6),(24,12),(24,25),
(25,8),(25,10),(25,14),(25,28),
(26,3),(26,7),(26,13),(26,22),
(27,2),(27,4),(27,9),(27,16),(27,29),
(28,5),(28,10),(28,15),(28,20),
(29,6),(29,12),(29,18),(29,24),
(30,1),(30,7),(30,11),(30,17),(30,23),
(31,2),(31,8),(31,14),(31,19),
(32,3),(32,9),(32,16),(32,26),
(33,4),(33,10),(33,15),(33,21),(33,30),
(34,5),(34,11),(34,18),(34,27),
(35,6),(35,12),(35,20),(35,28),
(36,7),(36,13),(36,22),(36,29),
(37,8),(37,14),(37,23),(37,30),
(38,9),(38,15),(38,21),(38,24),
(39,10),(39,16),(39,25),(39,27),
(40,1),(40,5),(40,12),(40,18),(40,30);