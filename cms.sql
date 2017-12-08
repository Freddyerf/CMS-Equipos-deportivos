-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 12:59 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clasificados`
--

CREATE TABLE `clasificados` (
  `id_clasificado` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clasificados`
--

INSERT INTO `clasificados` (`id_clasificado`, `titulo`, `descripcion`, `imagenes`, `fecha`, `usuario`, `contacto`, `estado`) VALUES
(1, 'Se venda jeepeta Chevrolet Trax 2011', 'Está nítida, pintura de fábrica, 100,000km y con seguro full para traspaso.', '', '2017-12-07 00:00:00', 'Freddy', '8297406341', 0),
(3, 'asdf', '<p>asdfas</p>', 'the-revolution-continues-in-mr-robot-season-2-teasers-release-date-set.png', '2017-12-07 04:31:00', 'Omar', '8092366770', 1),
(5, 'Te Lo Vendo Fiat Gucci 2015, 23 Mil Km, Interior Impecable.', '<p>Vendo de Oportunidad Fiat Gucci 2015</p>\r\n<p>Interior y exterior impecables. <br />Tan solo 23,000 km. <br />2 puertas</p>\r\n<p>Accesorios: <br />Bolsa de aire (chofer) <br />Bolsa de aire (pasajero) <br />Frenos ABS <br />Seguros el&eacute;ctricos <br />Aire acondicionado <br />Asientos el&eacute;ctricos <br />Asientos en piel <br />Bluetooth | <br />Gu&iacute;a multifunci&oacute;n <br />Limpia vidrios traseros <br />Pintura de f&aacute;brica <br />Radio AM/FM <br />Retrovisores el&eacute;ctricos <br />Vidrios el&eacute;ctricos</p>', '', '2017-12-07 04:32:00', 'Omar', '8092366770', 1),
(6, 'vendo carro', '<p>Combustible:<br />Gasolina<br />Cant. de puertas:<br />2</p>\r\n<p>Llama ahora: Darina Castillo <br />Cel: 849 875 5319</p>', 'the-revolution-continues-in-mr-robot-season-2-teasers-release-date-set.png', '2017-12-07 04:44:00', 'Omar', '8092366770', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `nombre`, `correo`, `mensaje`) VALUES
(1, 'Freddy', 'frondonfermin@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet neque quis turpis molestie eleifend in id felis. Nam pulvinar volutpat vestibulum. Vestibulum cursus arcu nec velit varius malesuada. Curabitur efficitur sagittis felis ut feugiat. Duis hendrerit elit a rutrum fringilla. Phasellus velit dolor, posuere sit amet consequat commodo, consectetur eu justo. Maecenas eu nibh vel orci posuere lobortis. Fusce porta ultrices laoreet.'),
(4, 'Freddy Rondon BM-189850', 'frondonfermin@yahoo.com', 'Esto debe funcionar?');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuerpo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id_evento`, `titulo`, `fecha`, `hora`, `foto`, `cuerpo`) VALUES
(2, 'Esto es un evento de prueba', '2017-12-20', '11:17:00', 'sinfoto.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a semper justo. Cras blandit mattis purus, ut vestibulum dolor laoreet a. Phasellus aliquam lorem et accumsan iaculis. Aliquam in pellentesque elit. Phasellus ac gravida nisl, quis condimentum risus. Proin aliquam lobortis orci in fermentum. Curabitur vitae nisl vitae tellus rutrum rutrum gravida id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `pregunta`, `respuesta`) VALUES
(1, '¿Lorem ipsum dolor sit amet?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, '¿Lorem ipsum dolor sit amet?', 'Donec quis orci a ipsum ullamcorper faucibus eget non felis. Duis ac molestie diam. Nam vitae sapien dui. In sed lacus aliquam, porttitor enim eget, vulputate dolor. Maecenas venenatis quis magna eget mattis. Phasellus quis ipsum vel justo interdum rutrum vitae vitae ligula. Vivamus dictum odio mollis purus suscipit faucibus. Ut tempor fermentum ante id posuere. Sed sit amet dui ex. Suspendisse sit amet orci sodales, molestie eros ac, pellentesque mi. Phasellus blandit velit nec libero pharetra tincidunt. Proin vitae venenatis nisl, eget pharetra erat. Sed cursus lacinia mauris a egestas. Nunc sodales vitae dui at facilisis. Maecenas ultrices diam condimentum ex posuere varius. Vestibulum placerat neque eu neque egestas ultrices.'),
(3, '¿KLK?', '<p>Donec quis orci a ipsum ullamcorper faucibus eget non felis. Duis ac molestie diam. Nam vitae sapien dui. In sed lacus aliquam, porttitor enim eget, vulputate dolor. Maecenas venenatis quis magna eget mattis. Phasellus quis ipsum vel justo interdum rutrum vitae vitae ligula. Vivamus dictum odio mollis purus suscipit faucibus. Ut tempor fermentum ante id posuere. Sed sit amet dui ex. Suspendisse sit amet orci sodales, molestie eros ac, pellentesque mi. Phasellus blandit velit nec libero pharetra tincidunt. Proin vitae venenatis nisl, eget pharetra erat. Sed cursus lacinia mauris a egestas. Nunc sodales vitae dui at facilisis. Maecenas ultrices diam condimentum ex posuere varius. Vestibulum placerat neque eu neque egestas ultrices.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `nombreCarpeta` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galerias`
--

INSERT INTO `galerias` (`id`, `nombre`, `descripcion`, `nombreCarpeta`) VALUES
(2, '2da', 'ninguna', '1512668822');

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resumen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuerpo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `resumen`, `foto`, `cuerpo`) VALUES
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Vestibulum at blandit neque. Suspendisse potenti. Etiam blandit convallis risus, id malesuada lorem pulvinar in. Aliquam eu dignissim velit. Duis interdum ex id enim ultricies, sed pretium lorem posuere. Integer posuere vel diam blandit vehicula. Curabitur vel nisi nec tortor congue iaculis nec vel est. Etiam arcu quam, maximus ut rhoncus non, faucibus eget magna. Donec id eros et dolor rutrum egestas. Morbi ac dictum velit.', 'mr__robot_wallpaper_by_floxido-d9cpwgr.png', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ex tortor, finibus a nisi rhoncus, aliquet mollis tortor. Proin sit amet efficitur justo. Phasellus neque justo, posuere at bibendum non, eleifend at elit. Nunc vehicula maximus massa. Vivamus sit amet sapien quis eros pulvinar mattis eu non metus. Donec erat felis, pharetra vel lorem sed, consectetur efficitur diam. Nullam vitae dolor nec mi varius lacinia. Ut in condimentum lacus. Proin pretium orci in metus feugiat, et rutrum ex porttitor. Phasellus vestibulum convallis tellus, eu aliquam lectus convallis ac.</p>\r\n<p style="text-align: justify;">Vestibulum at blandit neque. Suspendisse potenti. Etiam blandit convallis risus, id malesuada lorem pulvinar in. Aliquam eu dignissim velit. Duis interdum ex id enim ultricies, sed pretium lorem posuere. Integer posuere vel diam blandit vehicula. Curabitur vel nisi nec tortor congue iaculis nec vel est. Etiam arcu quam, maximus ut rhoncus non, faucibus eget magna. Donec id eros et dolor rutrum egestas. Morbi ac dictum velit.</p>\r\n<p style="text-align: justify;">Morbi interdum massa a malesuada auctor. Aenean vel nisi lorem. Fusce non massa eget metus consectetur mollis nec eget lorem. Nullam condimentum, magna ac tempus tempor, tellus massa maximus purus, posuere pretium magna orci eu turpis. Nam sed nulla suscipit, volutpat nisi et, pretium massa. In eu bibendum ligula. Donec in orci vel justo ullamcorper eleifend ac sed nunc. Praesent vestibulum vitae augue sed dapibus. Nullam cursus turpis non laoreet volutpat. Duis nec egestas est, sed interdum nibh. Donec vehicula porttitor arcu at fermentum. Curabitur et neque quis nibh imperdiet iaculis. Aenean non lorem nulla.</p>\r\n<p style="text-align: justify;">Etiam sit amet tortor a lectus laoreet lacinia. Donec sed dolor faucibus, sodales ligula eget, mattis est. Integer volutpat feugiat ipsum, eget hendrerit purus tristique id. Nulla mollis tellus eget felis sagittis, nec interdum nibh rutrum. Pellentesque sem elit, molestie a ante in, consequat laoreet lectus. Duis sem nunc, eleifend in viverra nec, dictum quis sapien. Suspendisse tempor viverra eros et lacinia. Duis ullamcorper diam quis eros semper, nec scelerisque magna pretium. Pellentesque id ligula felis. Nam dui metus, ullamcorper sit amet bibendum in, sollicitudin tincidunt justo.</p>\r\n<p style="text-align: justify;">Nam at diam a lacus tristique feugiat non et dolor. Curabitur tempus nunc quam, at malesuada dolor placerat sed. Nunc semper nec arcu vel fermentum. Mauris dui odio, eleifend ultricies condimentum sit amet, rhoncus a nunc. Sed dictum felis sed turpis porttitor euismod. Proin vehicula dolor vel augue accumsan, a viverra ligula molestie. Cras vulputate bibendum elit vel condimentum. Donec aliquet elementum purus, in finibus quam tristique eu. Mauris nisi augue, lobortis nec elit in, blandit elementum augue. Fusce vel quam at dolor vestibulum volutpat.</p>\r\n<p style="text-align: justify;">Phasellus et luctus ex. Sed id pulvinar sapien. In aliquet lectus non pretium condimentum. Aenean suscipit eu neque ullamcorper malesuada. Fusce augue dui, mollis nec magna eu, pellentesque molestie dui. Sed condimentum posuere efficitur. Duis eget tincidunt quam. Maecenas at sem et diam hendrerit ornare in sit amet ligula. Sed sem elit, congue eget nisi et, placerat accumsan risus. Pellentesque imperdiet ligula quis dolor faucibus, ut dapibus mauris tempus. Cras placerat, mi non dictum condimentum, dui urna consequat mi, ut ornare odio velit eu est. Cras eget vehicula nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ante magna, pellentesque id pellentesque sed, rutrum ac tortor. Duis ullamcorper tempor accumsan. Fusce id enim sagittis, venenatis eros at, fermentum nulla.</p>\r\n<p style="text-align: justify;">Morbi semper felis mattis odio semper, ut feugiat tortor fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis sodales ligula, id aliquet arcu aliquet sit amet. Phasellus convallis condimentum libero et tincidunt. Aliquam facilisis mauris vitae nunc volutpat blandit. Curabitur eu enim ac nisl scelerisque rhoncus eu et eros. Praesent lobortis ex ac nibh facilisis, a fringilla massa pellentesque.</p>\r\n<p style="text-align: justify;">Mauris in orci a tortor sollicitudin pellentesque in suscipit sapien. Sed et hendrerit nisl, eu vehicula nulla. Vestibulum tortor dolor, sodales at quam non, convallis condimentum magna. Mauris consectetur consequat imperdiet. Morbi sollicitudin lectus et arcu imperdiet facilisis. Pellentesque tempor nibh in ex vehicula, ac sagittis leo pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse tincidunt, tellus sit amet faucibus hendrerit, odio arcu laoreet urna, vel condimentum risus ex sit amet elit. Morbi rutrum, lacus sed cursus sagittis, purus purus ultrices quam, vitae scelerisque dolor ante vel felis. Sed euismod ullamcorper risus quis dignissim.</p>\r\n<p style="text-align: justify;">Morbi dictum gravida accumsan. Donec diam dui, tincidunt et mauris quis, sagittis imperdiet arcu. Vivamus rutrum pulvinar neque quis tempus. Nam dictum facilisis facilisis. Quisque sit amet enim diam. Phasellus congue sed eros quis viverra. Sed ultrices fermentum nisi eget eleifend. Proin quis iaculis dolor, sit amet iaculis nisl. Morbi sed semper ipsum, non porta sapien. In hac habitasse platea dictumst. Nullam nec quam felis. Nunc arcu ligula, rhoncus vel justo et, consequat pellentesque quam. Maecenas tempus velit at orci sagittis, a sollicitudin mauris elementum. Vestibulum euismod sapien sit amet tortor lacinia, id eleifend lacus scelerisque.</p>\r\n<p style="text-align: justify;">Duis auctor commodo ante id ultrices. Ut vitae metus finibus, dictum purus ut, auctor leo. Etiam malesuada leo vel molestie mollis. Ut eu nulla sit amet dolor pulvinar tempus eget sit amet lorem. Vivamus nec dui nec turpis accumsan commodo nec ac neque. Quisque diam augue, sollicitudin eu mauris id, tempor finibus nisi. In condimentum metus sit amet tellus tempus faucibus. Maecenas pretium pharetra eros, eu auctor nulla. Ut pellentesque sed ex nec commodo. Maecenas tincidunt nisl fringilla ligula sodales placerat. Etiam finibus risus nec bibendum egestas. Donec rutrum orci et eros egestas varius. Nullam ipsum urna, consequat sed congue id, finibus eget nibh. Morbi convallis mi ac molestie malesuada.</p>\r\n<p style="text-align: justify;">Nam metus ante, aliquet et purus eu, euismod gravida dolor. Nunc at nibh ac erat pellentesque accumsan. Quisque malesuada lectus eget ex lacinia gravida. Phasellus dictum sodales urna, quis egestas neque vehicula in. Curabitur ullamcorper neque eget mi feugiat eleifend. Mauris ac vestibulum odio, sed vulputate tortor. Ut efficitur neque sodales, interdum eros vel, gravida nulla.</p>\r\n<p style="text-align: justify;">Mauris in tortor pulvinar, tincidunt nisl eget, tincidunt libero. Fusce elementum elit et velit sodales tincidunt. Donec convallis ultrices felis sed maximus. Donec ut volutpat nisl. Ut semper erat vel eros ultrices, sit amet tincidunt tellus vehicula. Duis sit amet leo gravida, volutpat risus sed, lobortis quam. In in magna ac nunc suscipit lobortis sed vitae orci. Vivamus eget augue pellentesque, posuere odio quis, placerat augue. Curabitur id elit ultricies, elementum justo id, pharetra est. Maecenas eleifend, nunc tincidunt malesuada ultrices, justo orci scelerisque lectus, vitae facilisis dui mi a elit. Pellentesque vulputate dictum metus sed pulvinar. Proin at ex non metus finibus blandit ultricies a risus. Vivamus eget nisi sagittis, aliquet nisl at, porttitor lectus. Etiam sed sollicitudin lorem.</p>\r\n<p style="text-align: justify;">Sed eu nisi sed nibh tempus cursus quis ac neque. Nam maximus malesuada dolor, eu euismod tortor aliquet id. Donec dapibus porttitor quam, non condimentum risus. Donec gravida erat a magna tempus, sed aliquet diam rutrum. Maecenas aliquam congue maximus. In tristique augue eu felis tristique, quis mattis tellus accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris a tempor dui. Sed efficitur diam eu felis fermentum, id tincidunt sapien dictum. Vivamus vel mattis massa, eu faucibus arcu. Fusce et neque sapien. Donec ultrices mauris massa, eu tempus arcu molestie eu. Etiam at imperdiet mi. Donec porttitor mollis ornare. Integer interdum sed magna sed congue. Morbi quis lectus egestas, suscipit ipsum eu, sodales mauris.</p>\r\n<p style="text-align: justify;">Pellentesque iaculis massa nibh, vitae tristique ante egestas nec. Fusce sit amet tellus rhoncus, varius lectus et, consectetur ante. Maecenas sollicitudin luctus odio vehicula posuere. Sed sit amet urna ut enim tempus posuere a ut metus. Proin consequat justo quis ipsum euismod tristique. Aenean lectus turpis, feugiat in lacus sit amet, sodales sollicitudin est. Morbi a varius ex. Morbi hendrerit volutpat volutpat. Praesent vel tellus nec magna ultrices dignissim. Donec blandit sapien in eros ullamcorper convallis. Nullam eros justo, sollicitudin auctor mattis non, vehicula sed lacus.</p>\r\n<p style="text-align: justify;">Praesent imperdiet scelerisque scelerisque. Suspendisse eu blandit felis, ac bibendum mauris. Nunc sem sem, imperdiet nec ex at, scelerisque semper orci. Sed aliquam lorem nec luctus posuere. Sed et varius nisl, vitae accumsan libero. Donec urna felis, fermentum finibus diam eget, pretium congue quam. Nam sem libero, dictum ac mattis id, ultrices nec nisl. Suspendisse fringilla porttitor velit, a ornare arcu accumsan id. Nulla porttitor mauris mauris, a varius magna eleifend sed. Duis in sem commodo, venenatis urna at, scelerisque ante. Vestibulum nec sem vulputate tellus faucibus lobortis. Praesent mollis sed sem in gravida. Quisque fringilla mi a nisl dapibus vestibulum a ut nisi.</p>'),
(6, 'Una nueva', 'lol', '16603114_744513562374113_24334964543105811_n.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ex tortor, finibus a nisi rhoncus, aliquet mollis tortor.</p>'),
(2, '2da noticia', 'Un poquito dura', '17966697_1810243045962285_6461772726705654847_o.jpg', '<p><strong>Lorem ipsum dolor sit amet</strong>, <em>consectetur adipiscing elit.</em> Proin sit amet neque quis turpis molestie eleifend in id felis. Nam pulvinar volutpat vestibulum. Vestibulum cursus arcu nec velit varius malesuada. Curabitur efficitur sagittis felis ut feugiat. Duis hendrerit elit a rutrum fringilla. Phasellus velit dolor, posuere sit amet consequat commodo, consectetur eu justo. Maecenas eu nibh vel orci posuere lobortis. Fusce porta ultrices laoreet.</p>'),
(3, '3ra noticia', 'Noticia a prueba de escapes', 'Ed-Sheeran-pop-art-2016-PPcorn.jpg', '<p>Lorem ipsum dolor <strong>sit amet</strong>, consectetur adipiscing elit. Proin sit amet neque quis turpis molestie eleifend in id felis. Nam pulvinar volutpat vestibulum. Vestibulum cursus arcu nec velit varius malesuada. Curabitur efficitur sagittis felis ut feugiat. Duis hendrerit elit a rutrum fringilla. Phasellus velit dolor, posuere sit amet consequat commodo, consectetur eu justo. Maecenas eu nibh vel orci posuere lobortis. Fusce porta ultrices laoreet.</p>'),
(4, 'Noticia dura', 'Esta tiene que guardarse para probar si es verdad que funciona el ', 'mr__robot_wallpaper_by_floxido-d9cpwgr.png', '<p style="text-align: justify;"><strong>Lorem</strong> <em>ipsum</em> dolor <span style="background-color: #000080;">sit</span> <span style="color: #808000;">amet, consectetur</span> adipiscing elit.<img src="https://cloud.tinymce.com/stable/plugins/emoticons/img/smiley-foot-in-mouth.gif" alt="foot-in-mouth" /> <span style="text-decoration: line-through;">Proin sit amet neque quis turpis molestie eleifend in id felis. Nam pulvinar volutpat vestibulum.</span></p>\r\n<p style="text-align: justify;"><strong>Vestibulum</strong> cursus arcu nec velit varius malesuada. Curabitur efficitur sagittis felis ut feugiat. Duis hendrerit elit a rutrum fringilla. Phasellus velit dolor, posuere sit amet consequat commodo, consectetur eu justo. Maecenas eu nibh vel orci posuere lobortis. Fusce porta ultrices laoreet.</p>\r\n<ol>\r\n<li style="text-align: justify;">uno</li>\r\n<li style="text-align: justify;">dos</li>\r\n</ol>'),
(8, 'Adding Dropdowns via Data Attributes', 'Bootstrap provides an easy and elegant mechanism for adding the dropdown menu to an element via data attributes. The following example will show you the minimum markup required for adding a dropdown menu to the hyperlink via data attributes.', '', '<strong>Explanation of Code</strong>\r\nThe Bootstrap dropdown has basically two components — the dropdown trigger element which can be a hyperlink or button, and the dropdown menu itself.\r\n\r\nThe .dropdown class specifies a dropdown menu.\r\nThe .dropdown-toggle class defines the trigger element, which is a hyperlink in our case, whereas the attribute data-toggle="dropdown" is required on the trigger element to toggle the dropdown menu.\r\nThe .caret element inside the trigger anchor element creates a small down triangle icon which indicates that the link contains a dropdown menu.\r\nThe unordered list with the class .dropdown-menu is actually building the dropdown menu that typically contains the related links or actions.'),
(9, 'Prueba', 'con foto', 'maxresdefault.jpg', '<p>Ed sheeran es el mejor artista masculino de reino unido</p>'),
(10, 'Una noticia de adele', 'ADELE', 'adele-pop-art3.jpg', '<p>POPART</p>'),
(11, 'asdf', 'asdf', 'maxresdefault.jpg', '<p>asdf</p>'),
(12, 'dddd', 'ddddddd', 'the-revolution-continues-in-mr-robot-season-2-teasers-release-date-set.png', '<p>asdf</p>'),
(13, 'asdf', 'asdf', 'maxresdefault.jpg', '<p>asdf</p>'),
(14, 'd', 'd', 'the-revolution-continues-in-mr-robot-season-2-teasers-release-date-set.png', '<p>d</p>'),
(15, 'asdf', 'asdf', 'Ed-Sheeran-pop-art-2016-PPcorn.jpg', '<p>asdfasdf</p>'),
(16, 'asdf', 'asdf', 'the-revolution-continues-in-mr-robot-season-2-teasers-release-date-set.png', '<p>asdfasdf</p>'),
(20, 'dfdfdf', 'asdfasd', 'the-revolution-continues-in-mr-robot-season-2-teasers-release-date-set.png', '<p>asdfasdfa</p>');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cedula` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitud` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitud` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cedula`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `latitud`, `longitud`, `admin`, `password`) VALUES
(1, '402-1239070-8', 'Freddy', 'Rondon', '8297406341', 'frondonfermin@gmail.com', '8400 NW 25th Street, Suite 100', '18.93845', '-69.4345', 1, '912ec803b2ce49e4a541068d495ab570'),
(2, '001-0024300-5', 'Omar', 'Rodriguez', '8092366770', 'orodriguez@gmail.com', 'Calle rosa, residencial guadalupe', '18.9323', '-49.9903', 0, '912ec803b2ce49e4a541068d495ab570');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clasificados`
--
ALTER TABLE `clasificados`
  ADD PRIMARY KEY (`id_clasificado`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `correo_2` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clasificados`
--
ALTER TABLE `clasificados`
  MODIFY `id_clasificado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
