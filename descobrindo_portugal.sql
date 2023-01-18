-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jul-2021 às 03:22
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `descobrindo_portugal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `concelhos`
--

CREATE TABLE `concelhos` (
  `id` int(11) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `concelho` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text NOT NULL,
  `modificado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `concelhos`
--

INSERT INTO `concelhos` (`id`, `distrito`, `concelho`, `descricao`, `imagem`, `modificado`) VALUES
(5, 'Viana do Castelo', 'Arcos de Valdevez', 'distrito alo ta s avecos de Valdevez é uma vila raiana portuguesa no distrito de Viana do Castelo, região Norte e sub-região do Alto Minho, sendo sede do município de Arcos de Valdevez. O município de Arcos de Valdevez, com 447,60 km² de área e 22 847 habitantes, está subdividido em 36 freguesias.', 'https://www.mybesthotel.eu/pic/_03_5bd7b6711136d.jpg', NULL),
(9, 'Acores', 'Angra do Heroísmo', 'Angra do Heroísmo é uma cidade açoriana localizada na costa sul da ilha Terceira, com cerca de 10 800 habitantes na sua zona central e 21 300 habitantes na sua área urbana, sede de um município com 239 km² de área e 35 402 habitantes, subdividido em 19 freguesias.', 'https://discoverportugal2day.com/wp-content/uploads/Angra-do-Hero%C3%ADsmo.jpg', NULL),
(10, 'Acores', 'Calheta', 'O Município da Calheta é um município português na ilha da Madeira, Região Autónoma da Madeira, com sede na vila homónima da Calheta de que recebeu a designação. Tem 115,65 km² de área e 11 521 habitantes, subdividido em 8 freguesias.', 'https://www.intertours.com.pt/userfiles/image/loja/produtos/principal/mtour-5-madeira_calheta_12_07.jpg', NULL),
(11, 'Acores', 'Corvo', 'Vila do Corvo é uma vila portuguesa na Ilha do Corvo, na Região Autónoma dos Açores, sede de município com 17,13 km² de área e 430 habitantes. É a vila mais pequena da Região Autónoma e do país.', 'https://discoverportugal2day.com/wp-content/uploads/Ilha-do-Corvo.jpg', NULL),
(12, 'Acores', 'Horta', 'A Horta é uma cidade portuguesa com cerca de 8800 habitantes da Região Autónoma dos Açores, nela se encontrando a sede da Assembleia Legislativa da Região Autónoma dos Açores.', 'https://www.portugal-live.net/images/rotator/373-horta-a.jpg', NULL),
(13, 'Acores', 'Lagoa', 'Lagoa é uma cidade situada na costa sul da ilha de São Miguel, Açores, com cerca de 9 000 habitantes. É sede do pequeno município de Lagoa com 45,57 km² de área e 14 416 habitantes, subdividido em 5 freguesias.', 'https://smartcitiesnetwork.pt/wp-content/uploads/job-manager-uploads/featured_image/2018/10/Vista-Lagoa-01.jpg', NULL),
(14, 'Acores', 'Lajes das Flores', 'O município das Lajes das Flores é um município situado na metade sudoeste da Ilha das Flores, no Grupo Ocidental do arquipélago dos Açores.', 'https://www.allfromazores.pt/sites/default/files/styles/big_artigo/public/imagem_artigos/vila_das_lajes.jpg?itok=sZT6AuM0', NULL),
(15, 'Acores', 'Lajes do Pico', 'Lajes do Pico é uma vila portuguesa na ilha do Pico, Região Autónoma dos Açores, com cerca de 1 800 habitantes. Esta vila é sede do município das Lajes do Pico com 154,35 km² de área e 4 711 habitantes, subdividido em 6 freguesias.', 'https://byacores.com/wp-content/uploads/2020/09/lajes-pico-fb.png', NULL),
(16, 'Acores', 'Madalena', 'A Madalena é uma vila portuguesa na ilha do Pico, Região Autónoma dos Açores, com cerca de 2 500 habitantes. É sede do município da Madalena com 149,08 km² de área e 6 049 habitantes estando subdividido em 6 freguesias. O município é limitado a leste pelos concelhos de São Roque do Pico e das Lajes do Pico.', 'https://byacores.com/wp-content/uploads/2020/07/madalena-ilha-do-pico.jpg', NULL),
(17, 'Acores', 'Nordeste', 'Nordeste é uma vila portuguesa na ilha de São Miguel, Região Autónoma dos Açores. Esta vila é a sede do município de Nordeste com 101,51 km² de área e 4 937 habitantes, subdividido em 9 freguesias.', 'https://mb.web.sapo.io/feac4f50a5bb439096b5df0ebb53343f334272d5.png', NULL),
(18, 'Acores', 'Ponta Delgada', 'Ponta Delgada é uma cidade portuguesa localizada na ilha de São Miguel e pertencente à Região Autónoma dos Açores com uma população de 46 102 habitantes. Ponta Delgada é a capital económica da Região Autónoma dos Açores e a maior cidade desta região.', 'https://discoverportugal2day.com/wp-content/uploads/Ponta-Delgada-3.jpg', NULL),
(19, 'Acores', 'Povoação', 'A Povoação é uma vila portuguesa na ilha de São Miguel, Região Autónoma dos Açores, com cerca de 2 100 habitantes. É sede do município da Povoação com 110,30 km² de área e 6 327 habitantes, subdividido em 6 freguesias.', 'https://upload.wikimedia.org/wikipedia/commons/7/79/SMG_POV_Povoa%C3%A7%C3%A3o.JPG', NULL),
(20, 'Acores', 'Praia da Vitória', 'Praia da Vitória é uma cidade portuguesa localizada na parte leste da ilha Terceira, no grupo central do arquipélago dos Açores, na Região Autónoma dos Açores, contando com cerca de 6 600 habitantes. É sede do município da Praia da Vitória com 162,29 km² de área e 21 035 habitantes, subdividido em 11 freguesias.', 'https://discoverportugal2day.com/wp-content/uploads/Praia-da-Vit%C3%B3ria.jpg', NULL),
(21, 'Acores', 'Ribeira Grande', 'A Ribeira Grande é uma cidade portuguesa na ilha de São Miguel, Região Autónoma dos Açores, com uma população de 12 967 habitantes nas suas cinco freguesias urbanas. É sede do município da Ribeira Grande com 180,15 km² de área e 32 112 habitantes, subdividido em 14 freguesias.', 'https://media-cdn.tripadvisor.com/media/photo-s/0c/a2/6f/ae/rib-grande.jpg', NULL),
(22, 'Acores', 'Santa Cruz da Graciosa', 'O Município de Santa Cruz da Graciosa é um município açoriano sito na ilha Graciosa, no Grupo Central do arquipélago, na Região Autónoma dos Açores. Fundado em 1486, tem 60,89 km² de área e 4 391 habitantes.', 'https://cdn.visitportugal.com/sites/default/files/styles/encontre_detalhe_poi_destaque/public/mediateca/N4.MON5468d.jpg?itok=DfNcDGCI', NULL),
(23, 'Acores', 'Santa Cruz das Flores', 'O Município de Santa Cruz das Flores é um município sito na metade nordeste da ilha das Flores, no Grupo Ocidental do arquipélago dos Açores, na Região Autónoma dos Açores. O concelho que foi criado em 1548 tem uma área de 72,11 km².', 'http://www.cmscflores.pt/fotos/destaques/big1452256485.jpg', NULL),
(24, 'Acores', 'São Roque do Pico', 'São Roque do Pico é uma vila da ilha do Pico, Região Autónoma dos Açores, com cerca de 1 300 habitantes. É sede do município de São Roque do Pico com 144,31 km² de área e 3 388 habitantes, subdividido em 5 freguesias.', 'https://www.cm-saoroquedopico.pt/uploads/news/m.0099f2ba3b68c6e69c938e5fdc8d26e26d7d71be.jpg', NULL),
(25, 'Acores', 'Velas', 'Velas é uma vila portuguesa na ilha de São Jorge, Região Autónoma dos Açores, com cerca de 1 985 habitantes. É sede do município de Velas com 119,08 km² de área e 5 398 habitantes, subdividido em 6 freguesias.', 'https://upload.wikimedia.org/wikipedia/commons/1/19/Vista_parcial_das_Velas%2C_ilha_de_S%C3%A3o_Jorge%2C_A%C3%A7ores%2C_Portugal.jpg', NULL),
(26, 'Acores', 'Vila do Porto', 'Vila do Porto é uma freguesia semi-urbana do concelho da Vila do Porto, na ilha de Santa Maria, na Região Autónoma dos Açores. Tem uma superfície total de 26,04 km² e 3 119 habitantes, o que corresponde a uma densidade populacional de 119,8 hab./km².', 'https://photos.marinetraffic.com/ais/showphoto.aspx?mmsi=1270', NULL),
(27, 'Acores', 'Vila Franca do Campo', 'Vila Franca do Campo é uma vila portuguesa na ilha de São Miguel, Região Autónoma dos Açores, sede do pequeno município de Vila Franca do Campo com 78,00 km² de área e 11 229 habitantes, subdividido em 6 freguesias.', 'https://psdacores.pt/wp-content/uploads/2020/07/ILHEU-VILA-FRANCA-CAMPO-JUL20-1024x653.jpg', NULL),
(28, 'Aveiro', 'Águeda', 'Águeda é uma cidade portuguesa pertencente à comunidade intermunicipal da Região de Aveiro e à Região Centro. Com cerca de 14000 habitantes é a quarta maior cidade em população residente da Região de Aveiro, ultrapassada apenas pelas cidades de Aveiro, Ovar e Ílhavo.', 'https://d1bvpoagx8hqbg.cloudfront.net/originals/experiencia-agueda-aveiro-portugal-minocas-b300b192bc9403b538c49d27a1de49fe.jpg', NULL),
(29, 'Aveiro', 'Albergaria-a-Velha', 'Albergaria-a-Velha é uma cidade portuguesa pertencente à Região de Aveiro da zona Centro do país, com 8,528 habitantes. É sede de um município com 158,830 km² de área e 25 252 habitantes, subdividido em 6 freguesias.', 'https://st3.idealista.pt/news/arquivos/styles/news_detail/public/2015-04/95764158.jpg?sv=Zhpt-vUM&itok=9ddKK2Wo', NULL),
(30, 'Acores', 'Anadia', 'Anadia é uma cidade portuguesa pertencente ao distrito de Aveiro, região Centro e sub-região Região de Aveiro, com cerca de 6 000 habitantes. Anadia situa-se aproximadamente a meio caminho entre as cidades de Aveiro e Coimbra.', 'https://www.noticiasdeaveiro.pt/wp-content/uploads/2018/08/Nws_2018_183_0902_Cult_Folk_f2@MRolo.jpg', NULL),
(31, 'Aveiro', 'Arouca', 'Arouca é um município da Área Metropolitana do Porto, da Região do Norte e do distrito de Aveiro. O município, com 329,11 km² de área territorial e com 22 359 habitantes (2011), está subdividido em 16 freguesias e a sua sede, com cerca de 5 200 habitantes, é a vila de Arouca, que se situa na União das Freguesias de Arouca e Burgo, no vale do rio Arda, em plena bacia hidrográfica do Rio Douro, na Área Metropolitana do Porto, na Região do Norte.', 'https://lh3.googleusercontent.com/proxy/kyRF5uT6uh10_ecDfnBYFYjGVNcpMDYZO6DV5UVBBQQCAlnl5bdDBjrgZVg3wQT3wTIUtyU_8aqIlS2FlNPvbXsWPwJ29HSBdzMO_Q', NULL),
(32, 'Aveiro', 'Aveiro', 'Aveiro é uma cidade na costa oeste portuguesa fundada junto a uma laguna conhecida como Ria de Aveiro. Distingue-se pelos seus canais navegados por barcos coloridos (barcos moliceiros), tradicionalmente utilizados para a colheita de algas. Não muito longe do centro, conhecida pelos edifícios de estilo art nouveau, encontra-se a Sé de Aveiro, com o seu proeminente campanário.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Ilha_Dos_Puxadoiros_%2847261194681%29_%28cropped%29.jpg/1200px-Ilha_Dos_Puxadoiros_%2847261194681%29_%28cropped%29.jpg', NULL),
(33, 'Aveiro', 'Castelo de Paiva', 'Castelo de Paiva é uma vila portuguesa no distrito de Aveiro, região do Norte que em 2011 tinha cerca de 17 000 habitantes. É sede de um município com 115,01 km² de área e 16 733 habitantes, subdividido em 6 freguesias.', 'https://www.viaverde.pt/Portals/0/Imagens/Sugestoes/Artigos/PassadicoCasteloPaiva/PassadicoCasteloPaiva_Destaque.jpg?w=570&h=320', NULL),
(34, 'Aveiro', 'Espinho', 'Espinho é uma cidade portuguesa pertencente ao distrito de Aveiro, à Região Norte e à Área Metropolitana do Porto, com 9 832 habitantes no seu perímetro urbano. É sede de um pequeno município urbano, com 21,06 km² de área e 29 547 habitantes, subdividido em 4 freguesias', 'https://i1.wp.com/www.eurodicas.com.br/wp-content/uploads/2020/11/Espinho-Portugal-1.jpg?fit=1280%2C854&ssl=1', NULL),
(35, 'Aveiro', 'Estarreja', 'Estarreja é uma cidade portuguesa, localizada no distrito de Aveiro, na Região Centro e sub-região Região de Aveiro, com cerca de 7 500 habitantes. É sede de um município com 108,17 km² de área, 26 997 habitantes e densidade populacional de 249,58 habitantes/km², estando subdividido em 5 freguesias.', 'https://www.terranova.pt/sites/default/files/styles/node-detail/public/field/image/ilhavo_cidade_12.jpg?itok=ygT-cWXO', NULL),
(36, 'Aveiro', 'Ílhavo', 'Ílhavo é uma cidade portuguesa, localizada na Região Centro e sub-região Região de Aveiro. É sede de um município com o mesmo nome, com 73,48 km² de área e 38 598 habitantes, subdividido em 4 freguesias.', 'https://www.rotasturisticas.com/imagens/destinos/pt/large/IMGD1-274-9872-ilhavo_aveiro.jpg', NULL),
(37, 'Aveiro', 'Mealhada', 'Mealhada foi uma freguesia portuguesa do concelho da Mealhada, com 9,99 km² de área e 4 522 habitantes. Densidade: 452,7 hab/km². Foi criada a 24 de Junho de 1944 por desanexação da freguesia da Vacariça, à qual desde sempre tinha pertencido, mais de cem anos após a criação do concelho de Mealhada.', 'https://www.noticiasdeaveiro.pt/wp-content/uploads/2018/07/pacos_concelho_Mealhada.jpg', NULL),
(38, 'Aveiro', 'Murtosa', 'A Murtosa é uma vila portuguesa, situada no distrito de Aveiro, região Centro e sub-região Região de Aveiro, com cerca de 3 700 habitantes. É sede de um município com 73,09 km² de área[1] e 10 585 habitantes (2011),[2][3] subdividido em 4 freguesias.[4] O município é dividido em dois pelo Canal de Ovar (Ria de Aveiro). O território principal, onde se localiza a vila, é limitado a nordeste pelo município de Estarreja e a sul liga-se aos municípios de Albergaria-a-Velha e Aveiro através da ria de Aveiro', 'https://media-cdn.tripadvisor.com/media/photo-s/07/e3/2e/50/murtosa.jpg', NULL),
(39, 'Aveiro', 'Oliveira de Azeméis', 'Oliveira de Azeméis é uma cidade portuguesa, localizada e sede do município homónimo, no distrito de Aveiro, pertencente à unidade estatística Área Metropolitana do Porto da Região Norte, a cerca de 208 metros de altitude e com pouco mais de 20 000 habitantes.', 'https://www.cm-oaz.pt/getimage.php?file=imagens%2F130709164636.jpg&x=503&y=1000', NULL),
(40, 'Aveiro', 'Oliveira do Bairro', 'Oliveira do Bairro é uma freguesia portuguesa do município da Oliveira do Bairro, com 23,28 km² de área e 6 250 habitantes. A sua densidade populacional é de 268,5 hab/km².', 'https://media-manager.noticiasaominuto.com/1920/naom_5d2757bedf57e.jpg', NULL),
(41, 'Aveiro', 'Ovar', 'É sede do município homónimo de Ovar com 147,70 km² de área e 55 398 habitantes (2011), correspondendo a uma densidade populacional de 375,1 habitantes/km², estando subdividido em 5 freguesias. O município é limitado a norte pelo município de Espinho, a nordeste por Santa Maria da Feira, a leste por Oliveira de Azeméis, a sul por Estarreja e Murtosa e a oeste pelo Oceano Atlântico, que banha perto de 15 km da sua costa, contribuindo para um clima ameno e praias agradáveis.', 'https://media-cdn.tripadvisor.com/media/photo-s/06/65/43/8c/view-from-my-hotel.jpg', NULL),
(42, 'Aveiro', 'Santa Maria da Feira', 'Feira é uma antiga freguesia portuguesa do concelho de Santa Maria da Feira, com 8,40 km² de área e 12 511 habitantes. A sua densidade populacional é de 1 489,4 hab/km². Engloba a cidade de Santa Maria da Feira.', 'https://upload.wikimedia.org/wikipedia/commons/1/14/The_Feira_Castle.JPG', NULL),
(43, 'Aveiro', 'São João da Madeira', 'São João da Madeira é uma cidade portuguesa do Distrito de Aveiro, da Área Metropolitana do Porto e da Região Norte de Portugal, com 21 713 habitantes no seu perímetro urbano.', 'https://www.nit.pt/wp-content/uploads/2018/07/680dd4b3321986a4e0bc2aa7004ef180-754x394.jpg', NULL),
(44, 'Aveiro', 'Sever do Vouga', 'Sever do Vouga é uma vila portuguesa, pertencente ao distrito de Aveiro, situada na região Centro, sub-região Região de Aveiro, com cerca de 2 700 habitantes. É sede de um município com 129,88 km² de área e 12 356 habitantes, subdividido em 7 freguesias.', 'https://www.diarioaveiro.pt/api/assets/download/news/2020/09/2707e2f9-0dfe-45fb-89b1-6f1c71a8fa66.jpg', NULL),
(45, 'Aveiro', 'Vagos', 'Vagos é uma vila e antiga freguesia portuguesa e do concelho de Vagos, com 21,58 km² de área e 4 606 habitantes. A sua densidade populacional era 213,4 hab/km². Desde 2013, faz parte da nova União das Freguesias de Vagos e Santo António. Vagos também é sede de paróquia pertencente à Diocese de Aveiro.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Santu%C3%A1rio_de_Nossa_Senhora_de_Vagos.jpg/1200px-Santu%C3%A1rio_de_Nossa_Senhora_de_Vagos.jpg', NULL),
(46, 'Aveiro', 'Vale de Cambra', 'Vale de Cambra é uma cidade portuguesa sede do município homónimo de Vale de Cambra. Pertence à região Norte e sub-região de Entre Douro e Vouga, e ainda à Área Metropolitana do Porto e ao distrito de Aveiro. É um dos três únicos municípios da Beira Litoral que foi incluído na região Norte.', 'https://www.cm-valedecambra.pt/imgcrop/cmvalecambra/uploads/image_gallery_item/image/166/01_1_1200_640.jpg', NULL),
(47, 'Beja', 'Aljustrel', 'Aljustrel é um município português pertencente ao distrito de Beja, na região do Sul de Portugal. O Município de Aljustrel tem 458,47 km² de área e 9 257 habitantes, subdividido em 4 freguesias.', '../../images/aljustrel.jpg', NULL),
(48, 'Beja', 'Almodovar', 'Almodôvar é um município português pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com cerca de 7 449 habitantes. O município de Almodôvar, com sede na vila homónima, tem 777,88 km² de área e 7 449 habitantes, subdividido em 6 freguesias.', '../../images/almodovar.jpg', NULL),
(49, 'Beja', 'Alvito', 'Alvito é um município português pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com cerca de 2 504 habitantes.  Com sede na vila homónima de Alvito, o Município de Alvito tem 264,85 km² de área e 2 504 habitantes (2011), subdividido em 2 freguesias. O município é limitado a norte pelo município de Viana do Alentejo, a este por Cuba, a sul e oeste por Ferreira do Alentejo e a oeste por Alcácer do Sal.', '../../images/alvito.jpg', NULL),
(50, 'Beja', 'Barrancos', 'Barrancos é uma vila portuguesa raiana no distrito de Beja, região Alentejo e sub-região do Baixo Alentejo, com cerca de 1 800 habitantes. Esta vila é a sede do município homónimo e da freguesia homónima de Barrancos que têm 1 792 habitantes.', '../../images/barrancos.jpg', NULL),
(51, 'Beja', 'Beja', 'Beja é uma cidade portuguesa pertencente à região do Alentejo e sub-região do Baixo Alentejo, capital do distrito de Beja e capital do Baixo Alentejo com cerca de 23 400 habitantes no seu perímetro urbano, sendo também a sede da Diocese de Beja.', '../../images/beja.jpg', NULL),
(52, 'Beja', 'Castro Verde', 'Castro Verde é uma vila portuguesa pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com cerca de 5 200 habitantes. É sede do município homónimo de Castro Verde que tem 569,44 km² de área e 7 276 habitantes, subdividido em 4 freguesias.', '../../images/castro_verde.jpg', NULL),
(53, 'Beja', 'Cuba', 'Cuba é uma vila portuguesa pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com cerca de 3 200 habitantes. É sede do município homónimo de Cuba com 172,09 km² de área e 4 878 habitantes, subdividido em 4 freguesias.', '../../images/cuba.jpg', NULL),
(54, 'Beja', 'Ferreira do Alentejo', 'Ferreira do Alentejo, igualmente conhecida apenas como Ferreira, é uma vila portuguesa pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com cerca de 3 700 habitantes em 2013.', '../../images/ferreira.jpg', NULL),
(55, 'Beja', 'Mértola', 'Mértola é um município raiano português do distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo. É o sexto município mais extenso de Portugal, com 1 292,87 km² de área, tendo 7 274 habitantes e estando subdividido em 7 freguesias.', '../../images/mertola.jpg', NULL),
(56, 'Beja', 'Moura', 'Moura é uma cidade raiana portuguesa pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com cerca de 11.000 habitantes É sede do município homónimo de Moura que tem 958,46 km² de área e 15 167 habitantes, subdividido em 5 freguesias.', '../../images/moura.jpg', NULL),
(57, 'Beja', 'Odemira', 'Odemira é uma vila portuguesa pertencente à região do Alentejo e sub-região do Alentejo Litoral, com cerca de 22 536 habitantes. É sede do maior município português em extensão territorial, o município de Odemira, que tem 1 720,60 km² de área e 22 536 habitantes, subdividido em 13 freguesias.', '../../images/odemira.jpg', NULL),
(58, 'Beja', 'Ourique', 'Ourique é uma vila portuguesa pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com menos de 2 000 habitantes. É sede do município homónimo de Ourique com 663,31 km² de área e 5 389 habitantes, subdividido em 4 freguesias.', '../../images/ourique.jpg', NULL),
(59, 'Beja', 'Serpa', 'Serpa é uma cidade portuguesa pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com cerca de 14 000 habitantes. É sede de um dos mais extensos municípios de Portugal, o município homónimo de Serpa, com 1 105,63 km² de área e 15 623 habitantes, subdividido em 5 freguesias.', '../../images/serpa.jpg', NULL),
(60, 'Beja', 'Vidigueira', 'A Vidigueira é uma vila portuguesa pertencente ao distrito de Beja, região do Alentejo e sub-região do Baixo Alentejo, com cerca de 2 750 habitantes. É sede do município homónimo da Vidigueira com 316,61 km² de área e 5 932 habitantes, subdividido em 4 freguesias.', '../../images/vidigueira.jpg', NULL),
(61, 'Braga', 'Amares', 'O Município de Amares é um município português pertencente ao distrito de Braga, região do Norte e sub-região do Cávado.  Com sede na vila de Amares, o município de Amares tem 81,95 km² de área e 18 889 habitantes (2011), subdividido em 16 freguesias. O município é limitado a norte e nordeste pelo município de Terras de Bouro, a sueste por Vieira do Minho e Póvoa de Lanhoso, a sul por Braga e a noroeste por Vila Verde.', 'https://www.mybesthotel.eu/pic/_15_5d4a16bbca2ce.jpg', NULL),
(62, 'Braga', 'Barcelos', 'Barcelos é uma antiga cidade portuguesa do século XII, no distrito de Braga, região do Norte e sub-região do Cávado, com uma grande história, que conta com diversos monumentos medievais, como a Igreja Matriz Santa Maria de Barcelos, Torre do Cimo da Vila e o Monumento Castrejo, sendo também imprescindível visitar a zona histórica, onde se destaca a famosa Ponte de Barcelos.', 'https://1.bp.blogspot.com/-wde6WqY0xQY/T5aw1AwR6_I/AAAAAAAADAg/k1VUzQyvh9k/s1600/P5102158.JPG', NULL),
(63, 'Braga', 'Cabeceiras de Basto', 'Cabeceiras de Basto é uma vila portuguesa no distrito de Braga, região Norte e sub-região do Ave, com cerca de 16 064 habitantes. É sede do município de Cabeceiras de Basto com 241,82 km² de área e 16 064 habitantes, subdividido em 12 freguesias.', 'https://i.ytimg.com/vi/2Qw-QUHc0jQ/maxresdefault.jpg', NULL),
(64, 'Braga', 'Celorico de Basto', 'Celorico de Basto, antigamente designada Vila Nova do Freixieiro, é uma vila portuguesa no distrito de Braga, região Norte e subregião do Tâmega e Sousa. É sede do município de Celorico de Basto com 181,07 km² de área e 20 098 habitantes, subdividido em 15 freguesias.', 'https://www.mybesthotel.eu/pic/_02_5d09ff1a520ff.jpg', NULL),
(65, 'Braga', 'Esposende', 'Esposende é uma cidade portuguesa no distrito de Braga, região Norte e sub-região do Cávado, com cerca de 10 000 habitantes. É sede do município de Esposende com 95,41 km² de área e 34 254 habitantes, subdividido em 9 freguesias.', 'https://www.vozdapovoa.com/imagens/27/esposende_ME.jpg', NULL),
(66, 'Braga', 'Fafe', 'Fafe é uma cidade portuguesa, situada no distrito de Braga, Região do Norte e sub-região do Ave, com uma população de 15 703 habitantes, com uma área urbana de 7,50km², correspondente à freguesia com o mesmo nome, e com uma densidade populacional de 2093,7 hab/km².', 'https://afcentros.pt/wp-content/uploads/2019/09/fafe.jpg', NULL),
(67, 'Braga', 'Guimarães', 'Guimarães é uma cidade portuguesa situada no Distrito de Braga, região do Norte e sub-região do Ave e ainda à antiga província do Minho, com uma população de 54 097 habitantes, repartidos por uma malha urbana de 23,5 km², em 20 freguesias e com uma densidade populacional de 2 223,9 hab./km².', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Guimaraes_Portugal_Paço-dos-Duques-de-Bragança-02_%28cropped%29.jpg/1920px-Guimaraes_Portugal_Paço-dos-Duques-de-Bragança-02_%28cropped%29.jpg', NULL),
(68, 'Braga', 'Póvoa de Lanhoso', 'A Póvoa de Lanhoso é uma vila portuguesa no distrito de Braga, região do Norte e sub-região do Ave, com cerca de 5 000 habitantes. É sede do município de Póvoa de Lanhoso com 134,65 km² de área e 21 886 habitantes, subdividido em 22 freguesias.', 'https://www.povoadelanhoso.pt/wp-content/uploads/2019/11/Vila-da-Po%CC%81voa-de-Lanhoso-2019.jpg', NULL),
(69, 'Braga', 'Terras de Bouro', 'Terras de Bouro é uma vila portuguesa no distrito de Braga, região do Norte e sub-região do Cávado, com cerca de 7000 habitantes. É sede do município de Terras de Bouro com 277,46 km² de área e 7 253 habitantes, subdividido em 14 freguesias.', 'https://www.mybesthotel.eu/pic/_01_5d07aef514c0e.jpg', NULL),
(70, 'Braga', 'Vieira do Minho', 'Vieira do Minho é uma vila portuguesa localizada no distrito de Braga, Região do Norte e sub-região do Ave, com cerca de 2 200 habitantes. É sede do município de Vieira do Minho com 218,05 km² de área e 12 997 habitantes, subdividido em 16 freguesias.', 'https://www.mybesthotel.eu/pic/6308_3_5bae4246657db.jpg', NULL),
(71, 'Braga', 'Vila Nova de Famalicão', 'Vila Nova de Famalicão é uma cidade portuguesa, sede do município de Vila Nova de Famalicão, município com cerca de 140 000 habitantes, com uma área de 201,59 km², subdividida em 34 freguesias. Integrada no distrito de Braga, Região do Norte de Portugal e sub-região do Vale do Ave.', 'https://cdn.thecrazytourist.com/wp-content/uploads/2017/07/Braga-.jpg', NULL),
(72, 'Braga', 'Vila Verde', 'Vila Verde é uma vila portuguesa pertencente ao distrito de Braga, região do Norte e sub-região do Cávado, com cerca de 5 786 habitantes. É sede do município de Vila Verde com 228,67 km² de área e 47 888 habitantes, subdividido em 33 freguesias.', 'https://www.publiturishotelaria.pt/wp-content/uploads/2019/12/Vila_Verde_biblioteca.jpg', NULL),
(73, 'Braga', 'Vizela', 'São João das Caldas de Vizela foi uma freguesia portuguesa do município de Vizela, com 3,54 km² de área e 3 411 habitantes. Densidade: 963,6 hab/km². Foi uma das cinco freguesias que transitaram do município de Guimarães para o de Vizela, aquando a criação deste último em 1998.', 'https://images.impresa.pt/bcbm/2018-11-20-parquevizela2.jpg-1', NULL),
(74, 'Braganca', 'Alfândega da Fé', 'Alfândega da Fé é um município português pertencente ao distrito de Bragança, Região Norte e sub-região de Terras de Trás-os-Montes, com 5 104 habitantes. O município de Alfândega da Fé, com sede na vila homónima, tem 321,95 km² de área e 5 104 habitantes, estando subdividido em 12 freguesias.', 'https://www.cm-alfandegadafe.pt/thumbs/cmalfandegadafe/uploads/news/image/291/General_photo-Alf_ndega_da_F__1_1_1024_2500.jpg', NULL),
(75, 'Braganca', 'Bragança', 'Bragança OTE é uma cidade raiana portuguesa, capital do distrito de Bragança, na Região Norte e sub-região de Terras de Trás-os-Montes, no Nordeste de Portugal, com 21 853 habitantes no perímetro urbano.', 'https://cdn.visitportugal.com/sites/www.visitportugal.com/files/mediateca/CidadelaBraganca_TurismoPortoNorte-d.jpg', NULL),
(76, 'Braganca', 'Carrazeda de Ansiães', 'a', 'a', NULL),
(77, 'Braganca', 'Freixa de Espada à Cinta', 'a', 'a', NULL),
(78, 'Braganca', 'Macedo de Cavaleiros', 'a', 'a', NULL),
(79, 'Braganca', 'Miranda do Douro', 'a', 'a', NULL),
(80, 'Braganca', 'Mirandela', 'a', 'a', NULL),
(81, 'Braganca', 'Mogadouro', 'a', 'a', NULL),
(82, 'Braganca', 'Torre de Moncorvo', 'a', 'a', NULL),
(83, 'Braganca', 'Vila Flor', 'a', 'a', NULL),
(84, 'Braganca', 'Vimioso', 'a', 'a', NULL),
(85, 'Braganca', 'Vinhais', 'a', 'a', NULL),
(86, 'Castelo Branco', 'Belmonte', 'Belmonte é uma vila portuguesa do distrito de Castelo Branco, na província da Beira Baixa, região do Centro e sub-região das Beiras e Serra da Estrela, com cerca de 3 500 habitantes. É sede do município de Belmonte com 118,76 km² de área e 6 859 habitantes, subdividido em 4 freguesias.', 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Nt-castelo-belmonte0.jpg', NULL),
(87, 'Castelo Branco', 'Castelo Branco', 'Castelo Branco é uma cidade portuguesa, capital do distrito de Castelo Branco e, situada na região estatística do Centro, na sub-região da Beira Baixa e na antiga província com o mesmo nome, com cerca de 34 000 habitantes no seu perímetro urbano.', 'https://www.roteiro-campista.pt/wp-content/uploads/castelo-branco-cidade.jpg', NULL),
(88, 'Castelo Branco', 'Covilhã', 'a', 'a', NULL),
(89, 'Castelo Branco', 'Fundão', 'a', 'a', NULL),
(90, 'Castelo Branco', 'Idanha-a-Nova', 'a', 'a', NULL),
(91, 'Castelo Branco', 'Oleiros', 'a', 'a', NULL),
(92, 'Castelo Branco', 'Penamacor', 'a', 'a', NULL),
(93, 'Castelo Branco', 'Proença-a-Nova', 'a', 'a', NULL),
(94, 'Castelo Branco', 'Sertã', 'a', 'a', NULL),
(95, 'Castelo Branco', 'Vila de Rei', 'a', 'a', NULL),
(96, 'Castelo Branco', 'Vila Velha de Ródão', 'a', 'a', NULL),
(97, 'Coimbra', 'Arganil', 'a', 'a', NULL),
(98, 'Coimbra', 'Castanhede', 'a', 'a', NULL),
(99, 'Coimbra', 'Coimbra', 'a', 'a', NULL),
(100, 'Coimbra', 'Condeixa-a-Nova', 'a', 'a', NULL),
(101, 'Coimbra', 'Figueira da Foz', 'a', 'a', NULL),
(102, 'Coimbra', 'Góis', 'a', 'a', NULL),
(103, 'Coimbra', 'Lousã', 'a', 'a', NULL),
(104, 'Coimbra', 'Mira', 'a', 'a', NULL),
(105, 'Coimbra', 'Miranda do Corvo', 'a', 'a', NULL),
(106, 'Coimbra', 'Montemor-o-Velho', 'a', 'a', NULL),
(107, 'Coimbra', 'Oliveira do Hospital', 'a', 'a', NULL),
(108, 'Coimbra', 'Pampilhosa da Serra', 'a', 'a', NULL),
(109, 'Coimbra', 'Penacova', 'a', 'a', NULL),
(110, 'Coimbra', 'Penela', 'a', 'a', NULL),
(111, 'Coimbra', 'Soure', 'a', 'a', NULL),
(112, 'Coimbra', 'Tábua', 'a', 'a', NULL),
(113, 'Coimbra', 'Vila Nova de Poiares', 'a', 'a', NULL),
(114, 'Evora', 'Alandroal', 'a', 'a', NULL),
(115, 'Evora', 'Arraiolos', 'a', 'a', NULL),
(116, 'Evora', 'Borba', 'a', 'a', NULL),
(117, 'Evora', 'Estremoz', 'a', 'a', NULL),
(118, 'Evora', 'Évora', 'a', 'a', NULL),
(119, 'Evora', 'Montemor-o-Novo', 'a', 'a', NULL),
(120, 'Evora', 'Mora', 'a', 'a', NULL),
(121, 'Evora', 'Mourão', 'a', 'a', NULL),
(122, 'Evora', 'Olivença', 'a', 'a', NULL),
(123, 'Evora', 'Portel', 'a', 'a', NULL),
(124, 'Evora', 'Redondo', 'a', 'a', NULL),
(125, 'Evora', 'Reguengos de Monsaraz', 'a', 'a', NULL),
(126, 'Evora', 'Vendas Novas', 'a', 'a', NULL),
(127, 'Evora', 'Viana do Alentejo', 'a', 'a', NULL),
(128, 'Evora', 'Vila Viçosa', 'a', 'a', NULL),
(129, 'Faro', 'Albufeira', 'a', 'a', NULL),
(130, 'Faro', 'Alcoutim', 'a', 'a', NULL),
(131, 'Faro', 'Aljezur', 'a', 'a', NULL),
(132, 'Faro', 'Castro Marim', 'a', 'a', NULL),
(133, 'Faro', 'Faro', 'a', 'a', NULL),
(134, 'Faro', 'Lagoa', 'a', 'a', NULL),
(135, 'Faro', 'Lagos', 'a', 'a', NULL),
(136, 'Faro', 'Loulé', 'a', 'a', NULL),
(137, 'Faro', 'Monchique', 'a', 'a', NULL),
(138, 'Faro', 'Olhão', 'a', 'a', NULL),
(139, 'Faro', 'Portimão', 'a', 'a', NULL),
(140, 'Faro', 'São Brás de Alportel', 'a', 'a', NULL),
(141, 'Faro', 'Silves', 'a', 'a', NULL),
(142, 'Faro', 'Tavira', 'a', 'a', NULL),
(143, 'Faro', 'Vila do Bispo', 'a', 'a', NULL),
(144, 'Faro', 'Vila Real de Santo António', 'a', 'a', NULL),
(145, 'Guarda', 'Aguiar da Beira', 'a', 'a', NULL),
(146, 'Guarda', 'Almeida', 'a', 'a', NULL),
(147, 'Guarda', 'Celorico da Beira', 'a', 'a', NULL),
(148, 'Guarda', 'Figueira de Castelo Rodrigo', 'a', 'a', NULL),
(149, 'Guarda', 'Fornos de Algodres', 'a', 'a', NULL),
(150, 'Guarda', 'Gouveia', 'a', 'a', NULL),
(151, 'Guarda', 'Guarda', 'a', 'a', NULL),
(152, 'Guarda', 'Manteigas', 'a', 'a', NULL),
(153, 'Guarda', 'Mêda', 'a', 'a', NULL),
(154, 'Guarda', 'Pinhel', 'a', 'a', NULL),
(155, 'Guarda', 'Sabugal', 'a', 'a', NULL),
(156, 'Guarda', 'Seia', 'a', 'a', NULL),
(157, 'Guarda', 'Trancoso', 'a', 'a', NULL),
(158, 'Guarda', 'Vila Nova de Foz Côa', 'a', 'a', NULL),
(159, 'Leiria', 'Alcobaça', 'a', 'a', NULL),
(160, 'Leiria', 'Alvaiázere', 'a', 'a', NULL),
(161, 'Leiria', 'Ansião', 'a', 'a', NULL),
(162, 'Leiria', 'Batalha', 'a', 'a', NULL),
(163, 'Leiria', 'Bombarral', 'a', 'a', NULL),
(164, 'Leiria', 'Caldas da Rainha', 'a', 'a', NULL),
(165, 'Leiria', 'Castanheira de Pera', 'a', 'a', NULL),
(166, 'Leiria', 'Figueiró dos Vinhos', 'a', 'a', NULL),
(167, 'Leiria', 'Leiria', 'a', 'a', NULL),
(168, 'Leiria', 'Marinha Grande', 'a', 'a', NULL),
(169, 'Leiria', 'Nazaré', 'a', 'a', NULL),
(170, 'Leiria', 'Óbidos', 'a', 'a', NULL),
(171, 'Leiria', 'Pedrógão Grande', 'a', 'a', NULL),
(172, 'Leiria', 'Peniche', 'a', 'a', NULL),
(173, 'Leiria', 'Pombal', 'a', 'a', NULL),
(174, 'Leiria', 'Porto de Mós', 'a', 'a', NULL),
(175, 'Lisboa', 'Alenquer', 'a', 'a', NULL),
(176, 'Lisboa', 'Amadora', 'a', 'a', NULL),
(177, 'Lisboa', 'Arruda dos Vinhos', 'a', 'a', NULL),
(178, 'Lisboa', 'Azambuja', 'a', 'a', NULL),
(179, 'Lisboa', 'Cadaval', 'a', 'a', NULL),
(180, 'Lisboa', 'Cascais', 'a', 'a', NULL),
(181, 'Lisboa', 'Lisboa', 'a', 'a', NULL),
(182, 'Lisboa', 'Loures', 'a', 'a', NULL),
(183, 'Lisboa', 'Lourinhã', 'a', 'a', NULL),
(184, 'Lisboa', 'Mafra', 'a', 'a', NULL),
(185, 'Lisboa', 'Odivelas', 'a', 'a', NULL),
(186, 'Lisboa', 'Oeiras', 'a', 'a', NULL),
(187, 'Lisboa', 'Sintra', 'a', 'a', NULL),
(188, 'Lisboa', 'Sobral de Monte Agraço', 'a', 'a', NULL),
(189, 'Lisboa', 'Torres Vedras', 'a', 'a', NULL),
(190, 'Lisboa', 'Vila Franca de Xira', 'a', 'a', NULL),
(191, 'Portalegre', 'Alter do Chão', 'a', 'a', NULL),
(192, 'Portalegre', 'Arronches', 'a', 'a', NULL),
(193, 'Portalegre', 'Avis', 'a', 'a', NULL),
(194, 'Portalegre', 'Campo Maior', 'a', 'a', NULL),
(195, 'Portalegre', 'Castelo de Vide', 'a', 'a', NULL),
(196, 'Portalegre', 'Crato', 'a', 'a', NULL),
(197, 'Portalegre', 'Elvas', 'a', 'a', NULL),
(198, 'Portalegre', 'Fronteira', 'a', 'a', NULL),
(199, 'Portalegre', 'Gavião', 'a', 'a', NULL),
(200, 'Portalegre', 'Marvão', 'a', 'a', NULL),
(201, 'Portalegre', 'Monforte', 'a', 'a', NULL),
(202, 'Portalegre', 'Nisa', 'a', 'a', NULL),
(203, 'Portalegre', 'Ponte de Sor', 'a', 'a', NULL),
(204, 'Portalegre', 'Portalegre', 'a', 'a', NULL),
(205, 'Portalegre', 'Sousel', 'a', 'a', NULL),
(206, 'Porto', 'Amarante', 'a', 'a', NULL),
(207, 'Porto', 'Baião', 'a', 'a', NULL),
(208, 'Porto', 'Felgueiras', 'a', 'a', NULL),
(209, 'Porto', 'Gondomar', 'a', 'a', NULL),
(210, 'Porto', 'Lousada', 'a', 'a', NULL),
(211, 'Porto', 'Maia', 'a', 'a', NULL),
(212, 'Porto', 'Marco de Canaveses', 'a', 'a', NULL),
(213, 'Porto', 'Matosinhos', 'a', 'a', NULL),
(214, 'Porto', 'Paços de Ferreira', 'a', 'a', NULL),
(215, 'Porto', 'Paredes', 'a', 'a', NULL),
(216, 'Porto', 'Penafiel', 'a', 'a', NULL),
(217, 'Porto', 'Porto', 'Porto é uma cidade costeira no noroeste de Portugal conhecida pelas pontes imponentes e pela produção de vinho do Porto. No distrito medieval de Ribeira, às margens do rio, ruas estreitas de paralelepípedos passam pelas casas e pelos restaurantes dos comerciantes.', '../../images/Porto-shot-of-the-city.jpg', NULL),
(218, 'Porto', 'Póvoa de Varzim', 'a', 'a', NULL),
(219, 'Porto', 'Santo Tirso', 'a', 'a', NULL),
(220, 'Porto', 'Trofa', 'a', 'a', NULL),
(221, 'Porto', 'Valongo', 'a', 'a', NULL),
(222, 'Porto', 'Vila do Conde', 'a', 'a', NULL),
(223, 'Porto', 'Vila Nova de Gaia', 'Centro da indústria do vinho do Porto, Vila Nova de Gaia está repleta de caves com visitas e provas. Também conhecida pelas praias de areia, como a Praia da Madalena, e pelo Cais de Gaia, uma via cénica junto ao rio, com cafés com esplanadas e vistas panorâmicas do Douro. Pequenos restaurantes servem peixe grelhado e marisco na antiga vila piscatória da Afurada, onde pitorescas casas em azulejo ladeiam ruas estreitas.', 'https://www.globalcitizensolutions.com/wp-content/uploads/2018/12/praia-de-miramar.jpg', NULL),
(224, 'Santarem', 'Abrantes', 'a', 'a', NULL),
(225, 'Santarem', 'Alcanena', 'a', 'a', NULL),
(226, 'Santarem', 'Almeirim', 'a', 'a', NULL),
(227, 'Santarem', 'Alpiarça', 'a', 'a', NULL),
(228, 'Santarem', 'Benavente', 'a', 'a', NULL),
(229, 'Santarem', 'Cartaxo', 'a', 'a', NULL),
(230, 'Santarem', 'Chamusca', 'a', 'a', NULL),
(231, 'Santarem', 'Constância', 'a', 'a', NULL),
(232, 'Santarem', 'Coruche', 'a', 'a', NULL),
(233, 'Santarem', 'Entroncamente', 'a', 'a', NULL),
(234, 'Santarem', 'Ferreira do Zêzere', 'a', 'a', NULL),
(235, 'Santarem', 'Golegã', 'a', 'a', NULL),
(236, 'Santarem', 'Mação', 'a', 'a', NULL),
(237, 'Santarem', 'Ourém', 'a', 'a', NULL),
(238, 'Santarem', 'Rio Maior', 'a', 'a', NULL),
(239, 'Santarem', 'Salvaterra de Magos', 'a', 'a', NULL),
(240, 'Santarem', 'Santarém', 'a', 'a', NULL),
(241, 'Santarem', 'Sardoal', 'a', 'a', NULL),
(242, 'Santarem', 'Tomar', 'a', 'a', NULL),
(243, 'Santarem', 'Torres Vedras', 'a', 'a', NULL),
(244, 'Santarem', 'Vila Nova de Barquinha', 'a', 'a', NULL),
(245, 'Setubal', 'Alcácer do Sal', 'a', 'a', NULL),
(246, 'Setubal', 'Alcochete', 'a', 'a', NULL),
(247, 'Setubal', 'Almada', 'a', 'a', NULL),
(248, 'Setubal', 'Barreiro', 'a', 'a', NULL),
(249, 'Setubal', 'Grândola', 'a', 'a', NULL),
(250, 'Setubal', 'Moita', 'a', 'a', NULL),
(251, 'Setubal', 'Montijo', 'a', 'a', NULL),
(252, 'Setubal', 'Palmela', 'a', 'a', NULL),
(253, 'Setubal', 'Santiago do Cacém', 'a', 'a', NULL),
(254, 'Setubal', 'Seixal', 'a', 'a', NULL),
(255, 'Setubal', 'Sesimbra', 'a', 'a', NULL),
(256, 'Setubal', 'Setúbal', 'a', 'a', NULL),
(257, 'Setubal', 'Sines', 'a', 'a', NULL),
(258, 'Viana do Castelo', 'Caminha', 'a', 'a', NULL),
(259, 'Viana do Castelo', 'Melgaço', 'a', 'a', NULL),
(260, 'Viana do Castelo', 'Monção', 'a', 'a', NULL),
(261, 'Viana do Castelo', 'Paredes de Coura', 'a', 'a', NULL),
(262, 'Viana do Castelo', 'Ponte da Barca', 'a', 'a', NULL),
(263, 'Viana do Castelo', 'Ponte de Lima', 'a', 'a', NULL),
(264, 'Viana do Castelo', 'Valença', 'a', 'a', NULL),
(265, 'Viana do Castelo', 'Viana do Castelo', 'a', 'a', NULL),
(266, 'Viana do Castelo', 'Vila Nova de Cerveira', 'a', 'a', NULL),
(267, 'Vila Real', 'Alijó', 'a', 'a', NULL),
(268, 'Vila Real', 'Boticas', 'a', 'a', NULL),
(269, 'Vila Real', 'Chaves', 'a', 'a', NULL),
(270, 'Vila Real', 'Mesão Frio', 'a', 'a', NULL),
(271, 'Vila Real', 'Mondim de Basto', 'a', 'a', NULL),
(272, 'Vila Real', 'Montalegre', 'a', 'a', NULL),
(273, 'Vila Real', 'Murça', 'a', 'a', NULL),
(274, 'Vila Real', 'Peso da Régua', 'a', 'a', NULL),
(275, 'Vila Real', 'Ribeira de Pena', 'a', 'a', NULL),
(276, 'Vila Real', 'Sabrosa', 'a', 'a', NULL),
(277, 'Vila Real', 'Santa Marta de Penaguião', 'a', 'a', NULL),
(278, 'Vila Real', 'Valpaços', 'a', 'a', NULL),
(279, 'Vila Real', 'Vila Pouca de Aguiar', 'a', 'a', NULL),
(280, 'Vila Real', 'Vila Real', 'a', 'a', NULL),
(281, 'Viseu', 'Armamar', 'a', 'a', NULL),
(282, 'Viseu', 'Carregal do Sal', 'a', 'a', NULL),
(283, 'Viseu', 'Castro Daire', 'a', 'a', NULL),
(284, 'Viseu', 'Cinfães', 'a', 'a', NULL),
(285, 'Viseu', 'Lamego', 'a', 'a', NULL),
(286, 'Viseu', 'Mangualde', 'a', 'a', NULL),
(287, 'Viseu', 'Moimenta da Beira', 'a', 'a', NULL),
(288, 'Viseu', 'Mortágua', 'a', 'a', NULL),
(289, 'Viseu', 'Nelas', 'a', 'a', NULL),
(290, 'Viseu', 'Oliveira de Frades', 'a', 'a', NULL),
(291, 'Viseu', 'Penalva do Castelo', 'a', 'a', NULL),
(292, 'Viseu', 'Penedono', 'a', 'a', NULL),
(293, 'Viseu', 'Resende', 'a', 'a', NULL),
(294, 'Viseu', 'Santa Comba Dão', 'a', 'a', NULL),
(295, 'Viseu', 'São João da Pesqueira', 'a', 'a', NULL),
(296, 'Viseu', 'São Pedro do Sul', 'a', 'a', NULL),
(297, 'Viseu', 'Sátão', 'a', 'a', NULL),
(298, 'Viseu', 'Sernancelhe', 'a', 'a', NULL),
(299, 'Viseu', 'Tabuaço', 'a', 'a', NULL),
(300, 'Viseu', 'Tarouca', 'a', 'a', NULL),
(301, 'Viseu', 'Tondela', 'a', 'a', NULL),
(302, 'Viseu', 'Vila Nova de Paiva', 'a', 'a', NULL),
(303, 'Viseu', 'Viseu', 'a', 'a', NULL),
(304, 'Viseu', 'Vouzela', 'a', 'a', NULL),
(305, 'Madeira', 'Calheta', 'a', 'a', NULL),
(306, 'Madeira', 'Câmara de Lobos', 'a', 'a', NULL),
(307, 'Madeira', 'Funchal', 'a', 'a', NULL),
(308, 'Madeira', 'Machico', 'a', 'a', NULL),
(309, 'Madeira', 'Ponta do Sol', 'a', 'a', NULL),
(310, 'Madeira', 'Porto Moniz', 'a', 'a', NULL),
(311, 'Madeira', 'Porto Santo', 'a', 'a', NULL),
(312, 'Madeira', 'Ribeira Brava', 'a', 'a', NULL),
(313, 'Madeira', 'Santa Cruz', 'a', 'a', NULL),
(314, 'Madeira', 'Santana', 'a', 'a', NULL),
(315, 'Madeira', 'São Vicente', 'a', 'a', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_login`
--

CREATE TABLE `dados_login` (
  `id` int(255) NOT NULL,
  `utilizador` tinytext NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_login`
--

INSERT INTO `dados_login` (`id`, `utilizador`, `password`, `email`, `admin`) VALUES
(1, 'admin', '123', 'davidsantos2807@gmail.com', 1),
(15, 'david', '123', 'ds280702@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `distritos`
--

CREATE TABLE `distritos` (
  `id` int(11) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text NOT NULL,
  `modificado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `distritos`
--

INSERT INTO `distritos` (`id`, `distrito`, `descricao`, `imagem`, `modificado`) VALUES
(1, 'Viana do Castelo', 'Viana do Castelo é uma cidade portuguesa, capital do distrito com o mesmo nome, na região do Norte, e integrada na sub-região NUT III do Alto Minho.  É sede do município de Viana do Castelo — com 319,02 km² de área e 85 445 habitantes (2011) — que está subdividido em 27 freguesias. O município é limitado a norte pelo município de Caminha, a leste por Ponte de Lima, a sul por Barcelos e Esposende, e a oeste pelo Oceano Atlântico', 'https://destinosvividos.com/wp-content/uploads/visitar-viana-do-castelo-1.jpg', NULL),
(4, 'Porto', 'O distrito do Porto é um distrito de Portugal que correspondente ao núcleo da província tradicional do Douro Litoral. Limita a norte com o distrito de Braga, a leste com o distrito de Vila Real, a sul com o distrito de Viseu e com o distrito de Aveiro e a oeste com o Oceano Atlântico. Tem uma área de 2 395 km² (14.º maior distrito português) e uma população residente de 1 778 146 habitantes (2018). A sede do distrito é a cidade com o mesmo nome..', 'https://cdn.getyourguide.com/img/location/533595ad9306e.jpeg/88.jpg', NULL),
(6, 'Acores', 'Os Açores, um território autônomo de Portugal, são um arquipélago no meio do Oceano Atlântico. As ilhas se caracterizam pelas paisagens impressionantes, pelas vilas de pescadores, pelos campos verdes e pelas sebes de hortênsias azuis. São Miguel, a maior delas, tem caldeiras vulcânicas que viraram rios e a Fábrica de Chá Gorreana.', 'https://www.constancezahn.com/wp-content/uploads/2019/07/destaque-lua-de-mel-teresa-perez-tours-portugal-ilha-de-sao-miguel.jpg', NULL),
(7, 'Aveiro', 'Aveiro é uma cidade portuguesa, situada na Região Centro, sub-região da Região de Aveiro, capital do distrito de Aveiro, com cerca de 55 000 habitantes.  É sede de um município com 78 450 habitantes (2011) e 197,58 km² de área, subdividido em 10 freguesias. O município é limitado a norte pelo município da Murtosa (seja através da Ria de Aveiro, seja por terra), a nordeste por Albergaria-a-Velha, a leste por Águeda, a sul por Oliveira do Bairro, a sudeste por Vagos e por Ílhavo (sendo os limites com este último município também feitos por terra e através da ria), e com uma faixa relativamente estreita de litoral no Oceano Atlântico, a oeste, através da freguesia de São Jacinto. É um importante centro urbano, portuário, ferroviário, universitário e turístico.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Ilha_Dos_Puxadoiros_%2847261194681%29_%28cropped%29.jpg/1200px-Ilha_Dos_Puxadoiros_%2847261194681%29_%28cropped%29.jpg', NULL),
(8, 'Beja', 'Beja é uma cidade portuguesa pertencente à região do Alentejo e sub-região do Baixo Alentejo, capital do distrito de Beja e capital do Baixo Alentejo com cerca de 23 400 habitantes no seu perímetro urbano, sendo também a sede da Diocese de Beja.', 'Beja.JPG', NULL),
(9, 'Braga', 'aBraga é uma cidade no extremo norte de Portugal, a nordeste do Porto. É conhecida pela herança e eventos religiosos. A este, o complexo de Bom Jesus do Monte possui uma igreja neoclássica no cimo de uma elaborada escadaria de 17 patamares. No centro da cidade, a Sé de Braga, de estilo medieval, alberga um museu de arte sacra e a Capela dos Reis, de estilo gótico.', 'https://www.dicasdeviagem.com/wp-content/uploads/2019/01/avenida-liberdade-braga-1200x839.jpg', NULL),
(10, 'Braganca', 'Bragança é uma cidade raiana portuguesa, capital do distrito de Bragança, na Região Norte e sub-região de Terras de Trás-os-Montes, no Nordeste de Portugal (Nordeste Transmontano), com 21 853 habitantes no perímetro urbano.  É a sede do Município de Bragança que é o oitavo maior município português em área, com 1 173,57 km² de área, 35 341 habitantes (2011) e 39 freguesias.', 'https://espreitaromundo.com/wp-content/uploads/2020/07/Bragan%C3%A7a-home.jpg', NULL),
(11, 'Castelo Branco', 'O distrito de Castelo Branco é um distrito português pertencente à província histórica da Beira Baixa, atual região do Centro (Região das Beiras). Limita a norte com o distrito da Guarda, a leste com a Espanha, a sul com Espanha, com o distrito de Portalegre e com o distrito de Santarém e a oeste com o distrito de Leiria e com o distrito de Coimbra. Compreende as sub-regiões da Beira Interior Sul, Pinhal Interior Sul e Cova da Beira.', 'https://agencia.ecclesia.pt/portal/wp-content/uploads/2020/07/JM_Se_Catedral_Portalegre_018.jpg', NULL),
(12, 'Coimbra', 'O distrito de Coimbra é um distrito português da região do Centro (Região das Beiras, Norte da Estremadura e Norte do Ribatejo), pertencente na sua maior parte à província histórica da Beira Litoral, exceto os concelhos de Tábua e Oliveira do Hospital da província da Beira Alta e Pampilhosa da Serra da Beira Baixa. Limita a norte com o distrito de Aveiro e com o distrito de Viseu, a leste com o distrito da Guarda e com o distrito de Castelo Branco, a sul com o distrito de Leiria e a oeste com o oceano Atlântico.', 'https://www.bestereistijd.nl/uploads/2018/04/beste-reistijd-coimbra-portugal-1200x675.jpg', NULL),
(13, 'Evora', 'O distrito de Évora é um distrito português, pertencente à subregião do Alentejo Central. Limita a norte com o distrito de Santarém e com o distrito de Portalegre, a leste com Espanha, a sul com o distrito de Beja e a oeste com o distrito de Setúbal. Tem uma área de 7 393 km² (2.º maior distrito português) e uma população residente de 168 034 habitantes (2009). A sede do distrito é a cidade com o mesmo nome.', 'https://2.bp.blogspot.com/-LEHI7im69dE/UqPHGi23LEI/AAAAAAAAae8/AYHa5P5rDa0/s1600/%C3%89vora+-+Vista+Geral.jpg', NULL),
(14, 'Faro', 'O distrito de Faro é um distrito português coincidente com o território da província do Algarve. Limita a norte com o distrito de Beja, a leste com Espanha, e a sul e a oeste com o oceano Atlântico. Tem uma área de 4960 km² (10.º maior distrito português) e uma população residente de 434 023 habitantes (2009). A capital do distrito é a cidade com o mesmo nome.', 'https://www.nit.pt/wp-content/uploads/2021/05/9c360bd71f558c97a6556ca82d827b28.jpg', NULL),
(15, 'Guarda', 'O distrito da Guarda é um distrito de Portugal pertencente à província tradicional da Beira Alta. Limita a norte com o distrito de Bragança, a leste com Espanha, a sul com o distrito de Castelo Branco e a oeste com o distrito de Coimbra e com o distrito de Viseu. Tem uma área de 5 518 km² (7.º maior distrito português) e uma população residente de 168 898 habitantes (2009). A sede do distrito é a cidade com o mesmo nome.', 'https://www.mundoportugues.pt/wp-content/uploads/sites/3/2018/11/guarda-centro-890x547.jpg', NULL),
(16, 'Leiria', 'O distrito de Leiria é um distrito português situado na região do Centro, dividido entre as províncias tradicionais da Beira Litoral e da Estremadura. Limita a norte com o distrito de Coimbra, a leste com o distrito de Castelo Branco e com o distrito de Santarém, a sul com o distrito de Lisboa e a oeste com o oceano Atlântico. Tem uma área de 3 506 km² (13.º maior distrito português) e uma população residente de 470 895 habitantes (2011). A sede do distrito é a cidade com o mesmo nome e inclui a sede administrativa da Diocese de Leiria-Fátima.', 'https://eurotrip.com.br/wp-content/uploads/2020/04/leiria-portugal.jpg', NULL),
(17, 'Lisboa', 'O distrito de Lisboa é um distrito português, que limita a norte com o distrito de Leiria, a leste com o distrito de Santarém, a sul com o distrito de Setúbal e a oeste com o oceano Atlântico. O distrito tem uma área de 2 761 km² e é assim o 16.º maior distrito português. A população residente era de 2 963 272 habitantes (Pordata, 2019). A capital deste distrito é a cidade de Lisboa, que é também a capital do país..', 'https://offloadmedia.feverup.com/lisboasecreta.co/wp-content/uploads/2019/02/16105118/2222-1024x618.jpg', NULL),
(18, 'Madeira', 'A Madeira, oficialmente Região Autónoma da Madeira, constitui uma das regiões autónomas da República Portuguesa, correspondendo territorialmente ao Arquipélago da Madeira sendo o seu vizinho marítimo mais próximo o arquipélago espanhol das Canárias, situado ao largo de Marrocos, na África. A Região é dotada de autonomia política e administrativa através do Estatuto Político Administrativo da Região Autónoma da Madeira, previsto na Constituição da República Portuguesa.', 'https://www.nit.pt/wp-content/uploads/2020/04/419b15d7a08e509c228471308ab72939.jpg', NULL),
(19, 'Portalegre', 'O Distrito de Portalegre é um distrito português, pertencente integralmente à sub-região e Comunidade Intermunicipal do Alto Alentejo. Limita a norte com o distrito de Castelo Branco, a leste com a Espanha, a sul com o distrito de Évora e a oeste com o distrito de Santarém. Tem uma área de 6 065 km² (6.º maior distrito português) e uma população residente de 118 506 habitantes (AERA-INE 2012). A sede do distrito é a cidade homónima.', 'https://www.portugal-live.net/images/rotator/353-portalegre-a.jpg', NULL),
(20, 'Santarem', 'Santarém é um distrito de Portugal, pertencente à região histórica do Ribatejo, exceto Ourém que fica situada na região histórica da Beira Litoral e Mação, na região histórica da Beira Baixa. Parte do seu território está incluído na região estatística NUTII do Alentejo, sub-região da Lezíria do Tejo, e na região estatística NUTSII do Centro, sub-região do Médio Tejo. Limita a norte com o Distrito de Leiria e com o Distrito de Castelo Branco, a leste com o Distrito de Portalegre, a sul com o Distrito de Évora e com o Distrito de Setúbal e a oeste com o Distrito de Lisboa e com o Distrito de Leiria. Tem uma área de 6 747 km² (3.º maior distrito português) e uma população residente de 465 701 habitantes (2009). A sede do distrito é a cidade com o mesmo nome.', 'https://s2.glbimg.com/nXrDY94Ni-L6A0MKoWiamN_CGf0=/0x0:1300x731/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/k/V/BC6nhXRIyIKfUbREXGLg/up-ag-10697-00f1386e-2557-4364-39cd-2b25319d329e-1-.jpg', NULL),
(21, 'Setubal', 'Distrito de Setúbal é um distrito de Portugal. Está dividido entre as províncias tradicionais da Estremadura e do Baixo Alentejo. Limita a norte com o Distrito de Lisboa e com o Distrito de Santarém, a leste com o Distrito de Évora e com o Distrito de Beja, a sul com o Distrito de Beja e a oeste com o Oceano Atlântico. Tem uma área de 5 064 km² (8.º maior distrito português) e uma população residente de 911 794 habitantes (2009). A sede do distrito é a cidade com o mesmo nome. Actualmente, é o distrito com maior propensão ao desenvolvimento nas áreas da saúde, trabalho, economia, turismo, demografia e educação, devido à proximidade ao mar, à eficiente rede de escolas existentes e à fácil captação de investimentos no distrito.', 'https://newinsetubal.nit.pt/wp-content/uploads/2019/03/6196a49ada62ea0b2f57b75cea24868a.jpg', NULL),
(22, 'Vila Real', 'O distrito de Vila Real é um distrito de Portugal pertencente à antiga província de Trás-os-Montes e Alto Douro. Limita a norte com a Espanha, a leste com o Distrito de Bragança, a sul com o Distrito de Viseu e a oeste com o Distrito do Porto e com o Distrito de Braga. A sua área soma 4 328 km² (sendo o 11.º maior distrito português) e a sua população residente é de 213 775 habitantes (2009). A sede do distrito é a cidade com o mesmo nome.', 'https://images.turismoenportugal.org/Vila-Real.jpg', NULL),
(23, 'Viseu', 'O distrito de Viseu é um distrito português pertencente à tradicional província da Beira Alta. Limita a norte com o distrito do Porto, o distrito de Vila Real e o distrito de Bragança, a leste com o distrito da Guarda, a sul com o distrito de Coimbra e a oeste com o distrito de Aveiro. Tem uma área de 5 007 km² (9° maior distrito português) e uma população residente de 391 215 habitantes (2009). A sede do distrito é a cidade com o mesmo nome.', 'https://www.cm-viseu.pt/fotos/noticias/50b324aa_d42b_4c7f_a6aa_4deab13708ba_6578427655ffb19896bc43_14836398206087f0c497b89.jpeg', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `locais`
--

CREATE TABLE `locais` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `concelho` varchar(75) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` text NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `locais`
--

INSERT INTO `locais` (`id`, `nome`, `distrito`, `concelho`, `descricao`, `imagem`, `modificado`) VALUES
(1, 'Casa do Terreiro', 'Viana do Castelo', 'Arcos de Valdevez', 'Situada na parte mais alta da vila, a Casa do Terreiro rodeia, com a Igreja Matriz e a do Espírito Santo, a beleza do Jardim dos Centenários.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmAY1V47ysm_GBtN4YUT4ofHKrHwakAV8KhrsjpTOqbXhPhLS6naE7svEXsOcniHpUsHk&usqp=CAU', '2021-07-23 01:06:19'),
(6, 'Parque da Cidade', 'Porto', 'Porto', 'Parque, casa de várias espécies de aves e animais aquáticos.', 'images/parque_da_cidade.jpeg', '2021-07-22 23:52:29'),
(7, 'Castelo de Moura e Convento das Dominicanas', 'Beja', 'Moura', 'Edificado sobre uma elevação calcária, num castro pré-romano, o Castelo de Moura foi reconstruído em 1295 a mando de D. Dinis.', 'https://fortalezasdefronteira.turismodeportugal.pt/sites/default/files/styles/imagem_grande__1200x600_/public/Castelo%20de%20Moura.JPG?itok=mQIOqih8', '2021-07-23 00:54:36'),
(8, 'Casa-Museu Quinta da Esperança', 'Beja', 'Cuba', 'A Quinta da Esperança situa-se em Cuba, Distrito de Beja, Baixo Alentejo, Portugal. É uma casa senhorial datada do final do Século XVI. Há registos de sua existência já em meados de 1595. Com quatro pisos e mais de 200 divisões, foi erguida pela família Sebolinhos de Barahona, influente família da região que transformou toda a área a seu redor num dos maiores campos de cultivo de trigo de Portugal, criando o Morgado da Esperança a partir de 1750.', 'https://cdn.visitportugal.com/sites/default/files/styles/encontre_detalhe_poi_destaque/public/mediateca/Casa-MuseuQuintaEsperanca-d.jpg?itok=1fgS4wMi', '2021-07-23 01:02:13'),
(9, 'Convento de São Francisco', 'Beja', 'Beja', 'O início da construção do Convento de São Francisco aconteceu oitenta anos depois do início do projeto, mais concretamente em 1348, com o apoio da nobreza local e do rei D. Dinis.', 'https://images.turismoenportugal.org/Convento-de-Sao-Francisco-Beja.jpg', '2021-07-23 01:09:13'),
(10, 'Capela do Senhor da Pedra', 'Porto', 'Vila Nova de Gaia', 'A origem desta capela deve-se a um antigo culto pagão de caráter naturalista dos povos pré cristãos, sendo posteriormente convertida ao Cristianismo.', 'https://upload.wikimedia.org/wikipedia/commons/1/1f/Capela_Senhor_da_Pedra.JPG', '2021-07-23 01:13:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestoes`
--

CREATE TABLE `sugestoes` (
  `id` int(11) NOT NULL,
  `utilizador` tinytext NOT NULL,
  `local` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sugestoes`
--

INSERT INTO `sugestoes` (`id`, `utilizador`, `local`, `descricao`, `data`) VALUES
(3, 'André', 'Parque da cidade', 'Parque regional no distrito do Porto, famoso por ser palco de diversas atrações desportivas ou espetáculos.', '2021-07-21 16:24:44');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `concelhos`
--
ALTER TABLE `concelhos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dados_login`
--
ALTER TABLE `dados_login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `locais`
--
ALTER TABLE `locais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sugestoes`
--
ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `concelhos`
--
ALTER TABLE `concelhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT de tabela `dados_login`
--
ALTER TABLE `dados_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `locais`
--
ALTER TABLE `locais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `sugestoes`
--
ALTER TABLE `sugestoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
