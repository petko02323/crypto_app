-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1:3306
-- Čas generovania: Po 03.Apr 2023, 16:26
-- Verzia serveru: 5.7.31
-- Verzia PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `crypto`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Do roku 2030 budú tokenizované aktíva za bilióny dolárov, tvrdí banka Citi', '<p>Investičn&aacute; banka&nbsp;<strong>Citi</strong>&nbsp;vs&aacute;dza na tokeniz&aacute;ciu akt&iacute;v v re&aacute;lnom svete založen&uacute; na blockchaine. Podľa nej by tak&aacute;to tokeniz&aacute;cia bola ďal&scaron;&iacute;m skvel&yacute;m pr&iacute;padom použ&iacute;vania kryptomien.</p>\r\n\r\n<p>Spoločnosť predpoved&aacute;, že tento trh dosiahne do roku 2030 hodnotu medzi&nbsp;<strong>4 až 5 bili&oacute;nmi USD</strong>. To by znamenalo 80-n&aacute;sobn&yacute; n&aacute;rast v porovnan&iacute; so s&uacute;časnou hodnotou akt&iacute;v v re&aacute;lnom svete uzamknut&yacute;ch na blockchainoch.</p>\r\n\r\n<blockquote>\r\n<p><strong>&bdquo;Predpoklad&aacute;me, že do roku 2030 bud&uacute; objemy tokenizovan&yacute;ch digit&aacute;lnych cenn&yacute;ch papierov vo v&yacute;&scaron;ke 4 až 5 bili&oacute;nov dol&aacute;rov a do roku 2030 objemy financovania obchodu založen&eacute;ho na technol&oacute;gii distribuovanej &uacute;čtovnej knihy (DLT) vo v&yacute;&scaron;ke 1 bili&oacute;n dol&aacute;rov,&ldquo;</strong>&nbsp;uviedli analytici firmy.</p>\r\n</blockquote>\r\n\r\n<p>Z tokenizovan&yacute;ch až 5 bili&oacute;nov USD banka odhaduje, že 1,9 bili&oacute;na pr&iacute;de vo forme dlhu a 1,5 bili&oacute;na z nehnuteľnost&iacute;. Men&scaron;ie čiastky ako 0,7 bili&oacute;na USD pr&iacute;du zo s&uacute;kromn&eacute;ho a rizikov&eacute;ho kapit&aacute;lu a 0,5 až 1 bili&oacute;na USD z cenn&yacute;ch papierov.</p>\r\n\r\n<h2>Budeme tokenizovať rizikov&yacute; kapit&aacute;l?</h2>\r\n\r\n<p>Prieskum naznačuje, že fondy s&uacute;kromn&eacute;ho a rizikov&eacute;ho kapit&aacute;lu sa stan&uacute; najviac tokenizovanou triedou akt&iacute;v.</p>\r\n\r\n<blockquote>\r\n<p><strong>&ldquo;Trhy so s&uacute;kromn&yacute;m kapit&aacute;lom pravdepodobne zaznamenaj&uacute; r&yacute;chlej&scaron;ie miery prijatia z d&ocirc;vodu ich priaznivej likvidity, transparentnosti a schopnosti rozdeľovania,&ldquo;</strong>&nbsp;uviedla banka.</p>\r\n</blockquote>\r\n\r\n<p><strong>KKR</strong>,&nbsp;<strong>Apollo</strong>&nbsp;a&nbsp;<strong>Hamilton</strong>&nbsp;<strong>Lane</strong>&nbsp;s&uacute; tri firmy so s&uacute;kromn&yacute;m kapit&aacute;lom, ktor&eacute; už vytvorili tokenizovan&eacute; verzie svojich fondov na platform&aacute;ch ako&nbsp;<strong>Securitize</strong>,&nbsp;<strong>Provenance</strong>&nbsp;<strong>Blockchain</strong>&nbsp;a&nbsp;<strong>ADDX</strong>.</p>\r\n\r\n<p>Citi uviedla, že tokeniz&aacute;cia blockchainu nahrad&iacute; star&uacute; finančn&uacute; infra&scaron;trukt&uacute;ru, pretože je technologicky lep&scaron;ia a poskytuje viac investičn&yacute;ch pr&iacute;ležitost&iacute; na s&uacute;kromn&yacute;ch trhoch. V spr&aacute;ve od Citi sa tiež uv&aacute;dza:</p>\r\n\r\n<blockquote>\r\n<p><strong>&bdquo;Tradičn&eacute; finančn&eacute; akt&iacute;va nie s&uacute; zl&eacute;, ale nie s&uacute; optim&aacute;lne, pretože s&uacute; obmedzen&eacute; tradičn&yacute;mi syst&eacute;mami a&nbsp;procesmi. Určit&eacute; finančn&eacute; akt&iacute;va, ako napr&iacute;klad fixn&yacute; pr&iacute;jem, s&uacute;kromn&yacute; kapit&aacute;l a in&eacute; alternat&iacute;vy, boli relat&iacute;vne obmedzen&eacute;, zatiaľ čo in&eacute; trhy, ako napr&iacute;klad verejn&eacute; akcie, s&uacute; efekt&iacute;vnej&scaron;ie.&ldquo;</strong></p>\r\n</blockquote>\r\n\r\n<h2>Tokeniz&aacute;cia m&aacute; zr&yacute;chliť finančn&eacute; oper&aacute;cie</h2>\r\n\r\n<p>Citi tvrd&iacute;, že blockchainov&aacute; tokeniz&aacute;cia neguje potrebu drah&eacute;ho zos&uacute;laďovania, predch&aacute;dza zlyhaniam a rob&iacute; finančn&eacute; oper&aacute;cie e&scaron;te efekt&iacute;vnej&scaron;ie. Investičn&aacute; banka v&scaron;ak uznala, že v s&uacute;časnosti existuj&uacute; aj nev&yacute;hody tokeniz&aacute;cie. Medzi ne patr&iacute; nedostatok pr&aacute;vneho a regulačn&eacute;ho r&aacute;mca, probl&eacute;my s budovan&iacute;m infra&scaron;trukt&uacute;ry a z&iacute;skanie &scaron;iroko dodržiavan&eacute;ho s&uacute;boru noriem.</p>\r\n\r\n<p>Citi tiež poznamenala, že niektor&iacute; hr&aacute;či v tomto odvetv&iacute; zost&aacute;vaj&uacute; tiež skeptick&iacute;, najm&auml; vzhľadom na to, že Austr&aacute;lska burza cenn&yacute;ch papierov (ASX) ned&aacute;vno zru&scaron;ila svoj ne&uacute;spe&scaron;n&yacute; projekt DLT v hodnote&nbsp;<strong>165 mili&oacute;nov USD</strong>. Banka v&scaron;ak zost&aacute;va presvedčen&aacute;, že ekosyst&eacute;m dospeje s v&yacute;vojom technol&oacute;gie.</p>\r\n\r\n<blockquote>\r\n<p><strong>&bdquo;Po prekročen&iacute; tohto stredn&eacute;ho stavu sa nov&aacute; technol&oacute;gia oslobod&iacute; od star&yacute;ch a ide&aacute;lne smerov&yacute;ch trendov smerom k predpokladan&eacute;mu konečn&eacute;mu stavu.&ldquo;</strong></p>\r\n</blockquote>\r\n\r\n<p>Citi si fin&aacute;lny produkt predstavuje ako digit&aacute;lne nat&iacute;vnu infra&scaron;trukt&uacute;ru finančn&yacute;ch akt&iacute;v, glob&aacute;lne dostupn&uacute;, prev&aacute;dzkovan&uacute; 24x7x365 a optimalizovan&uacute; pomocou smart kontraktov a automatizačn&yacute;ch funkci&iacute; s podporou DLT, ktor&eacute; neumožňuje tradičn&aacute; infra&scaron;trukt&uacute;ra.</p>\r\n\r\n<p>Zdroj:&nbsp;<a href=\"https://cointelegraph.com/news/killer-use-case-citi-says-trillions-in-assets-could-be-tokenized-by-2030\">CoinTelegraph</a></p>', '2023-03-24 15:37:31', '2023-04-01 09:38:41'),
(2, 'Dary v kryptomenách presiahnu v nasledujúcej dekáde 10 miliárd dolárov', '<p>Organiz&aacute;cia&nbsp;<strong>The Giving Block</strong>&nbsp;uviedla, že finančn&eacute; dary odovzdan&eacute; pomocou kryptomien presiahli v&nbsp;roku 2022 čiastku&nbsp;<strong>125 mili&oacute;nov dol&aacute;rov</strong>&nbsp;a&nbsp;že očak&aacute;va, že do roku 2027 presiahne&nbsp;<strong>prv&uacute; miliardu USD</strong>. N&aacute;sledne v&nbsp;novembri 2032 prekročia magick&uacute; hranicu&nbsp;<strong>10 mili&aacute;rd americk&yacute;ch dol&aacute;rov</strong>.</p>\r\n\r\n<p>Anal&yacute;za zohľadňuje aj v&yacute;voj ceny&nbsp;<strong>bitcoinu</strong>, ktor&eacute;mu odhaduje presiahnutie ceny&nbsp;<strong>100&nbsp;000 dol&aacute;rov&nbsp;</strong>v&nbsp;septembri 2026 a&nbsp;cenu&nbsp;<strong>250&nbsp;000 USD</strong>&nbsp;v&nbsp;okt&oacute;bri 2029.</p>\r\n\r\n<p>Doposiaľ najviac darov v&nbsp;kryptomen&aacute;ch i&scaron;lo cez kryptomenu stablecoinu&nbsp;<strong>USDC</strong>, ktor&eacute; tvorili 44% v&scaron;etkych darov. Nasledovali dary v&nbsp;<strong>Etheri</strong>&nbsp;(24%) a&nbsp;<strong>bitcoinoch</strong>&nbsp;(17%).</p>\r\n\r\n<p>Naj&scaron;tedrej&scaron;&iacute;m donorom m&aacute; byť zakladateľ kryptomeny Ethereum&nbsp;<strong>Vitalik Buterin</strong>, ktor&yacute; drž&iacute; rekord s 9,4 mili&oacute;nmi dol&aacute;rov v darovan&yacute;ch kryptomen&aacute;ch skrz jeho filantropick&yacute; fond&nbsp;<strong>Balvi</strong>.</p>\r\n\r\n<p>Organiz&aacute;cia tiež menovala r&ocirc;zne projekty, na ktor&eacute; tieto financie id&uacute;. S&uacute; nimi napr&iacute;klad&nbsp;<strong>Orangutan Outreach</strong>, ktor&yacute; sa star&aacute; o osirel&eacute; a pres&iacute;dlen&eacute; orangutany či&nbsp;<strong>Trees for the Future</strong>, ktorej sa vďaka kryptodarom podarilo vysadiť 2,3 mili&oacute;nov stromov.</p>\r\n\r\n<p>Zdroj:&nbsp;<a href=\"https://cointelegraph.com/news/crypto-donations-to-surpass-10b-in-a-decade-the-giving-block\">CoinTelegraph</a></p>', '2023-03-29 09:18:18', '2023-04-01 08:44:30');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `articles_images`
--

DROP TABLE IF EXISTS `articles_images`;
CREATE TABLE IF NOT EXISTS `articles_images` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`article_id`,`image_id`),
  KEY `articles_images_image_id_foreign` (`image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `articles_images`
--

INSERT INTO `articles_images` (`article_id`, `image_id`) VALUES
(1, 5),
(1, 6),
(2, 2),
(2, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `images`
--

INSERT INTO `images` (`id`, `path`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'gallery/article/1', '641dd75a95f4f.jpg', '2023-03-24 16:01:14', '2023-03-24 16:01:14'),
(4, 'gallery/article/2', '64253b83d4045.jpg', '2023-03-30 05:34:27', '2023-03-30 05:34:27');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Peter', 'mail@mail.sk', NULL, '$2y$10$MGZ/h4lqtyqhddXsCxAiV.Osr9eBHeA5q8xfJ6mIhLJ6b5c4AjQuS', NULL, '2023-03-13 15:51:49', '2023-03-24 14:00:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
