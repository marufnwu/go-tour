-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 02:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` bigint(20) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity_name`, `created_at`, `updated_at`) VALUES
(3, 'We depart from the international airport nearest to your city, on overnight flight to Tel Aviv.', '2023-08-25 10:32:50', '2023-08-25 10:32:50'),
(5, 'Overnight: Dinner and breakfast will be served. on board', '2023-08-25 10:33:30', '2023-08-25 10:33:30'),
(6, 'Afternoon arrival to Tel Aviv.', '2023-08-25 10:33:50', '2023-09-13 05:08:13'),
(8, 'Upon arrival, we will be met and transferred to our hotel. Check-in and accommodation in the hotel. Dinner at the hotel', '2023-08-25 10:34:17', '2023-08-25 10:34:17'),
(9, 'Breakfast at the hotel. Check-out of the hotel.', '2023-08-25 10:34:51', '2023-08-25 10:34:51'),
(10, 'We begin our journey northward by motor-coach along the Mediterranean Sea to Cesarea.', '2023-08-25 10:35:39', '2023-08-28 19:41:23'),
(11, 'Breakfast at the hotel', '2023-08-28 15:44:56', '2023-08-28 18:53:58'),
(12, 'We start our day, towards the south of Jerusalem, we will see the ruins of ancient Jericho', '2023-08-28 15:47:09', '2023-08-30 09:14:09'),
(13, 'We will drive through the modern city of Jericho and continue to the Dead Sea', '2023-08-28 15:47:34', '2023-08-28 18:53:02'),
(14, 'We will see the Qumran caves where the Dead Sea Scrolls were found', '2023-08-28 15:48:06', '2023-08-30 12:40:15'),
(15, 'We will ascend the mountain by cable car to the remarkable ruins of the fortress built by Herod the Great.', '2023-08-28 15:48:32', '2023-08-28 18:51:19'),
(16, 'We will return to the Jerusalem hotel for dinner and rest.', '2023-08-28 15:48:53', '2023-08-28 19:04:31'),
(18, 'Free day to visit the preferred places in Jerusalem.', '2023-08-28 15:56:02', '2023-08-28 18:54:26'),
(19, 'Let\'s explore some recent excavations and visit the bazaars of the ancient city.', '2023-08-28 15:57:13', '2023-08-28 18:55:01'),
(20, 'Departure from Israel. Groups will enjoy the morning in Jerusalem and then transfer to the airport in the mid-afternoon to catch their flight.', '2023-08-28 15:59:49', '2023-08-28 19:03:56'),
(21, 'Dinner at the hotel in Jerusalem.', '2023-08-28 16:00:30', '2023-08-28 18:51:49'),
(23, 'Breakfast during the flight.', '2023-08-28 16:00:41', '2023-08-28 18:53:31'),
(24, 'Groups with night flights from Tel Aviv will arrive in the US in the afternoon.', '2023-08-28 16:01:13', '2023-08-28 18:55:40'),
(25, 'Groups that had one night in a European city will be transferred to the airport for their return flight home.', '2023-08-28 16:01:33', '2023-08-28 18:59:25'),
(29, 'You will see the Crusader City, and the fantastic aquaduct before continuing to Haifa', '2023-08-28 21:11:15', '2023-08-28 21:11:15'),
(30, 'View the Ba\'hai Gardens', '2023-08-28 21:11:34', '2023-08-28 21:11:34'),
(31, 'We will drive to the crest of Mt. Carmel, through the Jezreel Valley and arrive at the site of Megiddo', '2023-08-28 21:12:00', '2023-08-28 21:12:00'),
(32, 'See Gideon\'s brook, the \"Well of Herod\" and continue on to Nazareth. Visit the Church of Annunciation', '2023-08-28 21:12:54', '2023-08-28 21:15:06'),
(34, 'Then to Cana', '2023-08-28 21:15:30', '2023-08-28 21:15:30'),
(35, 'Continue to Tiberias and to our hotel.Check into the Tiberias hotel. Dinner at the Tiberias hotel', '2023-08-28 21:16:30', '2023-08-28 21:16:30'),
(36, 'After breakfast, we return to Tiberias for a full day of sightseeing', '2023-08-29 13:44:02', '2023-08-29 13:44:02'),
(37, 'Visit the Mt. of Beatitudes', '2023-08-29 13:44:48', '2023-08-29 13:44:48'),
(38, 'Visit Tabgha', '2023-08-29 13:45:06', '2023-08-29 13:45:06'),
(39, 'Continue on to the ruins at Capernaum', '2023-08-29 13:45:43', '2023-08-29 13:45:43'),
(40, 'The Synagogue', '2023-08-29 13:46:57', '2023-08-29 13:46:57'),
(41, 'The house of Simon Peter', '2023-08-29 13:47:18', '2023-08-29 13:47:42'),
(42, 'Cross the sea of Galilee', '2023-08-29 13:48:09', '2023-08-29 13:48:09'),
(43, 'We end the day with a stop at the Jordan River', '2023-08-29 13:48:32', '2023-08-29 13:48:32'),
(44, 'Come back to our dinner at the Tiberias hotel', '2023-08-29 13:50:10', '2023-08-29 13:50:10'),
(45, 'This morning will begin with a stop at Gergesa', '2023-08-29 14:08:40', '2023-08-29 14:08:40'),
(46, 'Then to south through Beth-Shan, the Jordan Valley, past Shiloh and Bethel', '2023-08-29 14:09:43', '2023-08-29 14:09:43'),
(48, 'Visit the Church of Nativity and the Church of Visitation', '2023-08-29 14:10:39', '2023-08-29 14:10:39'),
(49, 'Take some time for shopping', '2023-08-29 14:11:37', '2023-08-29 14:11:37'),
(50, 'Check in and dinner at the jerusalem hotel', '2023-08-29 14:13:43', '2023-08-29 14:13:43'),
(51, 'Enter the Old City through the Damascus Gate', '2023-08-29 14:50:50', '2023-08-29 14:50:50'),
(53, 'The Pool of Bethesda and Saint Anne’s Church', '2023-08-29 14:52:02', '2023-08-29 14:52:02'),
(54, 'Continue to the Temple area of Mt. Moriah', '2023-08-29 14:53:03', '2023-08-29 14:53:03'),
(55, 'Visit the Dome of the Rock area and the \"Wailing Wall\"', '2023-08-29 15:38:58', '2023-08-29 15:38:58'),
(56, 'Visit the Dome of the Rock area and the Western Wall', '2023-08-29 15:42:56', '2023-08-29 15:42:56'),
(57, 'Walk through the Old City Bazaars to the church of the Holy Sepulchre', '2023-08-29 15:43:21', '2023-08-29 15:43:21'),
(59, 'View the Tower of David, the Citadel and King David\'s Tomb', '2023-08-29 15:43:34', '2023-08-29 15:43:34'),
(60, 'Visit the Jewish Quarter', '2023-08-29 15:44:50', '2023-08-29 15:44:50'),
(62, 'We visit Mt. Zion and the Upper Room', '2023-08-29 15:46:02', '2023-08-29 15:46:02'),
(63, 'Then onto the Garden Tomb and Golgotha', '2023-08-29 15:46:24', '2023-08-29 15:46:24'),
(65, 'Our evening ends with a visit to the Garden of Gethsemane', '2023-08-29 15:46:58', '2023-08-29 15:46:58'),
(68, 'Then we will stop at the inn of the good Samaritan.', '2023-08-29 16:26:39', '2023-08-29 16:26:39'),
(70, 'Then continue to Masada National Park.', '2023-08-29 16:31:19', '2023-08-29 16:31:19'),
(71, 'Arrival in the US', '2023-08-29 16:55:12', '2023-08-29 16:55:12'),
(72, 'Crossing the St Stephen\'s Gate', '2023-08-30 08:59:27', '2023-08-30 08:59:27'),
(73, 'Crossing the Jaffa Gate', '2023-08-30 09:04:15', '2023-08-30 09:04:15'),
(74, 'We will stop at the inn of the good Samaritan.', '2023-08-30 09:14:30', '2023-08-30 09:14:30'),
(75, 'We will enjoy a lazy morning in Jerusalem', '2023-08-30 11:06:09', '2023-08-30 11:06:09'),
(76, 'We will go to the airport to offer a \"Shalom\" to Israel and board our flight to Athens', '2023-08-30 11:09:16', '2023-08-30 11:09:16'),
(78, 'Once in Athens we will be received by our local representative and transferred to the hotel', '2023-08-30 11:12:55', '2023-08-30 11:12:55'),
(79, 'Check-in and dinner in Athens hotel', '2023-08-30 11:21:00', '2023-08-30 11:21:00'),
(80, 'Our day will begin with a visit to the Acropolis of Athens', '2023-08-30 11:53:16', '2023-08-30 11:53:16'),
(81, 'We will see the Parthenon, the Propylaea, the Temple of Athena Nike, the Erechtheion, the Odeon of Herodes Atticus, the Theatre of Dionysus and the Areopagus', '2023-08-30 11:58:48', '2023-08-30 12:00:43'),
(82, 'Then we will visit the Temple of Olympian Zeus', '2023-08-30 12:01:55', '2023-08-30 12:01:55'),
(83, 'Followed by our visit to the Kallimármaro', '2023-08-30 12:02:23', '2023-08-30 12:02:23'),
(84, 'We will go to Plaka, the oldest neighborhood in Greece, where we will have lunch', '2023-08-30 12:04:20', '2023-08-30 12:05:13'),
(85, 'Through the city center, we will go to the flea market to visit the Ancient Agora of Athens', '2023-08-30 12:07:30', '2023-08-30 12:07:30'),
(86, 'We will see the Temple of Hephaestus', '2023-08-30 12:08:42', '2023-08-30 12:08:42'),
(87, 'And finally we will see the restored Stoa of Attalos', '2023-08-30 12:09:13', '2023-08-30 12:09:13'),
(88, 'Dinner at the Athens hotel', '2023-08-30 12:14:38', '2023-08-30 12:14:38'),
(89, 'We will travel by hydrofoil to the small island Poros', '2023-08-30 12:18:57', '2023-08-30 12:18:57'),
(90, 'Then we will visit Hydra the island shaped like an amphitheater', '2023-08-30 12:21:22', '2023-08-30 12:21:22'),
(91, 'To finally reach the largest island, Aegina, where you can visit the Temple of Aphaea or walk through the city.', '2023-08-30 12:22:58', '2023-08-30 12:22:58'),
(92, 'We will return to the Athens hotel', '2023-08-30 12:24:15', '2023-08-30 12:24:15'),
(93, 'Early in the morning we will go back to Athens International Airport to return home', '2023-08-30 12:50:09', '2023-08-31 12:18:01'),
(94, 'Partimos desde Norte América en nuestro vuelo nocturno a Tel Aviv', '2023-08-31 08:45:06', '2023-08-31 08:45:06'),
(95, 'Una cena agradable y desayuno se servirá durante el vuelo', '2023-08-31 08:45:20', '2023-08-31 08:45:20'),
(96, 'Durante la tarde llegamos a Tel Aviv para ser recibidos y trasladados al hotel en Netanya', '2023-08-31 08:45:47', '2023-08-31 08:45:47'),
(97, 'Cena y alojamiento en el hotel', '2023-08-31 08:46:06', '2023-08-31 08:46:06'),
(98, 'Desayuno en el hotel', '2023-08-31 08:46:34', '2023-08-31 08:46:34'),
(99, 'Comenzamos nuestro viaje hacia el norte en autobús a lo largo del Mar Mediterráneo a Cesarea', '2023-08-31 08:47:00', '2023-08-31 08:47:00'),
(100, 'Veremos la Ciudad Cruzada y el fantástico acueducto', '2023-08-31 08:47:20', '2023-08-31 08:47:20'),
(101, 'Continuaremos hacia Haifa para ver los Jardines Bahaí', '2023-08-31 08:48:09', '2023-08-31 08:48:09'),
(102, 'Nos dirigiremos a la cresta del monte Carmel, a través del Valle de Jezreel', '2023-08-31 08:48:37', '2023-08-31 08:48:37'),
(103, 'Llegaremos a Megido', '2023-08-31 08:48:59', '2023-08-31 08:48:59'),
(104, 'Almuerzo en el camino para llegar al arrollo de Gedeón y el \"Pozo de Herodes\"', '2023-08-31 08:51:09', '2023-08-31 08:51:09'),
(105, 'Continuamos por Nazaret hasta llegar a la Iglesia de la Anunciación', '2023-08-31 08:51:40', '2023-08-31 08:51:40'),
(106, 'Posteriormente iremos a Caná', '2023-08-31 08:52:04', '2023-08-31 08:52:04'),
(107, 'Finalmente llegaremos a nuestro hotel en Tiberíades', '2023-08-31 08:52:31', '2023-08-31 08:52:31'),
(108, 'Presenciaremos el amanecer en el mar de Galilea', '2023-08-31 08:52:56', '2023-08-31 08:52:56'),
(109, 'Presenciaremos el amanecer en el mar de Galilea', '2023-08-31 08:52:56', '2023-08-31 08:52:56'),
(110, 'Visitaremos el Monte de las Bienaventuranzas', '2023-08-31 08:53:27', '2023-08-31 08:53:27'),
(111, 'Llegaremos a la capilla de Tabgha', '2023-08-31 08:54:39', '2023-08-31 08:54:39'),
(112, 'Continuaremos por las ruinas de Cafarnaún, para ver la Sinagoga y la Casa de Pedro', '2023-08-31 08:55:16', '2023-08-31 08:55:16'),
(113, 'Cruzaremos el Mar de Galilea en embarcaciones de la época de Jesús', '2023-08-31 08:56:00', '2023-08-31 08:56:00'),
(114, 'Nuestro día terminará con una parada en el Río Jordán', '2023-08-31 08:56:30', '2023-08-31 08:56:30'),
(115, 'Nuestra mañana comenzará con una parada en Gergesa', '2023-08-31 08:56:46', '2023-08-31 08:56:46'),
(116, 'Viajaremos a través del Sur de Beth Shan al Valle del Jordán', '2023-08-31 08:57:32', '2023-08-31 08:57:32'),
(117, 'Pasaremos por Silo y Bethel', '2023-08-31 08:57:54', '2023-08-31 08:57:54'),
(118, 'Llegaremos a la Iglesia de la Natividad en Belén', '2023-08-31 08:58:09', '2023-08-31 08:58:09'),
(119, 'Veremos también la Iglesia de la Visitación', '2023-08-31 08:58:39', '2023-08-31 08:58:39'),
(120, 'Tomaremos un tiempo para ir de compras y finalmente movilizarnos al hotel en Jerusalén', '2023-08-31 08:59:28', '2023-08-31 08:59:28'),
(121, 'Tomaremos un tiempo para ir de compras y finalmente movilizarnos al hotel en Jerusalén', '2023-08-31 08:59:34', '2023-08-31 08:59:34'),
(122, 'Disfrutaremos de una mañana de ocio en el hotel', '2023-08-31 09:18:10', '2023-08-31 09:18:10'),
(123, 'Seremos trasladados al aeropuerto para ofrecer un \"Shalom\" a Israel y abordar nuestro vuelo a Atenas', '2023-08-31 09:18:49', '2023-08-31 09:18:49'),
(124, 'Una vez lleguemos a Atenas seremos recibidos por nuestro representante local y trasladados al hotel', '2023-08-31 09:19:47', '2023-08-31 09:19:47'),
(125, 'Nuestro día de turismo comienza con una visita a la Acrópolis pra ver el Partenón, los Propileos, el Templo de Atenea Nike, el Erecteion, el Odeón de Herodes Aticus, las ruinas del Teatro de Dionisio y el Areópago', '2023-08-31 09:21:48', '2023-08-31 09:21:48'),
(126, 'Iremos al Templo de Zeus Olímpico', '2023-08-31 09:22:06', '2023-08-31 09:22:06'),
(127, 'Veremos el estadio Kallimármaro', '2023-08-31 09:22:36', '2023-08-31 09:22:36'),
(128, 'Nos dirigiremos al barrio más antiguo y pintoresco de Atenas, Plaka', '2023-08-31 09:22:49', '2023-08-31 09:22:49'),
(129, 'Nos dirigiremos al barrio más antiguo y pintoresco de Atenas, Plaka', '2023-08-31 09:22:49', '2023-08-31 09:22:49'),
(130, 'Después de almorzar, iremos por el centro de la ciudad hacia la antigua Ágora', '2023-08-31 09:23:40', '2023-08-31 09:23:40'),
(131, 'Veremos el templo de Hefesto, conocido también como Theseum', '2023-08-31 09:23:51', '2023-08-31 09:23:51'),
(132, 'Veremos el templo de Hefesto, conocido también como Theseum', '2023-08-31 09:23:51', '2023-08-31 09:23:51'),
(133, 'Visitaremos la renovada Estoa de Átalo', '2023-08-31 09:24:26', '2023-08-31 09:24:26'),
(134, 'Viajaremos en hidroala a la pequeña isla Poros', '2023-08-31 09:26:02', '2023-08-31 09:26:02'),
(135, 'Entraremos al puerto de la isla con forma de anfiteatro, Hidra', '2023-08-31 09:26:36', '2023-08-31 09:26:36'),
(136, 'Llegaremos a la gran isla Egina, donde podremos ver el Templo de Afaya o pasear por la ciudad', '2023-08-31 09:27:24', '2023-08-31 09:27:24'),
(137, 'Llegaremos a la gran isla Egina, donde podremos ver el Templo de Afaya o pasear por la ciudad', '2023-08-31 09:27:24', '2023-08-31 09:27:24'),
(138, 'Regresaremos en barco y llegaremos de vuelta al hotel', '2023-08-31 09:27:45', '2023-08-31 09:27:45'),
(139, 'Entraremos en la Ciudad Vieja por la Puerta de Damasco', '2023-08-31 09:29:33', '2023-08-31 09:29:33'),
(140, 'Comenzaremos un recorrido a pie que nos llevará a través de la Puerta de San Esteban', '2023-08-31 09:29:51', '2023-08-31 09:29:51'),
(141, 'Veremos la piscina de Betesda y la Iglesia de Santa Ana', '2023-08-31 09:30:11', '2023-08-31 09:30:11'),
(142, 'Continuaremos a la zona del Templo del Monte Moriah', '2023-08-31 09:30:36', '2023-08-31 09:30:36'),
(143, 'Visitaremos el Domo de la Roca', '2023-08-31 09:30:46', '2023-08-31 09:30:46'),
(144, 'Veremos el Muro de los Lamentos o, también llamado, de las Lamentaciones', '2023-08-31 09:31:15', '2023-08-31 09:31:15'),
(145, 'Caminaremos a través de los bazares de la ciudad antigua hacia la Iglesia del Santo Sepulcro', '2023-08-31 09:31:36', '2023-08-31 09:31:36'),
(146, 'Paremos por la Torre de David, la Ciudadela y la Tumba del Rey David', '2023-08-31 09:32:30', '2023-08-31 09:32:30'),
(147, 'Paremos por la Torre de David, la Ciudadela y la Tumba del Rey David', '2023-08-31 09:32:30', '2023-08-31 09:32:30'),
(148, 'Visitaremos el Barrio Judío antes de dejar la Ciudad VIeja', '2023-08-31 09:32:55', '2023-08-31 09:32:55'),
(149, 'Visitaremos el Barrio Judío antes de dejar la Ciudad VIeja', '2023-08-31 09:32:55', '2023-08-31 09:32:55'),
(150, 'Cruzaremos entonces la Puerta de Jaffa', '2023-08-31 09:33:07', '2023-08-31 09:33:07'),
(151, 'Visitaremos el Monte Sion y el Cenáculo', '2023-08-31 09:33:33', '2023-08-31 09:33:33'),
(152, 'Veremos la Tumba del Jardín y el Gólgota', '2023-08-31 09:34:04', '2023-08-31 09:34:04'),
(153, 'Nuestra noche termina con una visita al Jardín de Getsemaní', '2023-08-31 09:34:29', '2023-08-31 09:34:29'),
(154, 'Y subiremos el Monte de los Olivos para apreciar la vista de la ciudad', '2023-08-31 09:34:57', '2023-08-31 09:34:57'),
(155, 'Finalmente regresaremos al hotel', '2023-08-31 09:35:15', '2023-08-31 09:35:15'),
(156, 'Temprano nos dirigimos al sur de Jerusalén para ver las ruinas de la antigua Jericó', '2023-08-31 09:36:09', '2023-09-02 15:49:19'),
(157, 'Pararemos en la Posada del Buen Samaritano', '2023-08-31 09:36:50', '2023-08-31 09:36:50'),
(158, 'Conduciremos por la moderna ciudad de Jericó hasta el Mar Muerto para apreciar las cuevas de Qumrán', '2023-08-31 09:37:50', '2023-08-31 09:37:50'),
(159, 'Continuaremos a Masada para abordar el teleférico hacia las ruinas de la fortaleza de Herodes el Grande', '2023-08-31 09:38:33', '2023-08-31 09:38:33'),
(160, 'Tendremos tiempo libre para visitar nuestros lugares favoritos de Jerusalén', '2023-08-31 09:39:28', '2023-08-31 09:39:28'),
(161, 'Desayuno en el hotel y check-out', '2023-08-31 09:39:42', '2023-08-31 09:39:42'),
(162, 'Temprano volveremos al Aeropuerto Internacional de Atenas para nuestro vuelo a casa', '2023-08-31 09:40:07', '2023-08-31 09:40:07'),
(163, 'Temprano volveremos al Aeropuerto Internacional de Atenas para nuestro vuelo a casa', '2023-08-31 09:40:07', '2023-08-31 09:40:07'),
(164, 'Salimos del aeropuerto internacional más cercano a su ciudad, en vuelo nocturno con destino Tel Aviv.', '2023-08-31 09:50:43', '2023-08-31 09:50:43'),
(165, 'Comenzamos nuestro día, hacia el sur de Jerusalén, veremos las ruinas de la antigua Jericó.', '2023-08-31 10:37:28', '2023-08-31 10:37:28'),
(166, 'Regresaremos al hotel de Jerusalén para cenar y descansar.', '2023-08-31 10:39:05', '2023-08-31 10:39:05'),
(167, 'Exploremos algunas excavaciones recientes y visitemos los bazares de la ciudad antigua.', '2023-08-31 10:40:15', '2023-08-31 10:40:15'),
(168, 'Salida de Israel. Los grupos disfrutarán de la mañana en Jerusalén y luego se trasladarán al aeropuerto a media tarde para tomar su vuelo.', '2023-08-31 10:40:59', '2023-08-31 10:40:59'),
(169, 'Los grupos que hayan pernoctado en una ciudad europea serán trasladados al aeropuerto para tomar su vuelo de regreso a casa.', '2023-08-31 10:41:23', '2023-08-31 10:41:23'),
(170, 'Cena en el hotel de Jerusalén.', '2023-08-31 10:42:00', '2023-08-31 10:42:00'),
(171, 'Vuelo a casa durante las horas de la tarde.', '2023-08-31 10:42:12', '2023-08-31 10:42:12'),
(172, 'Desayuno durante el vuelo.', '2023-08-31 10:42:40', '2023-08-31 10:42:40'),
(173, 'Los grupos con vuelos nocturnos desde Tel Aviv llegarán a EE.UU. por la tarde.', '2023-08-31 10:43:13', '2023-08-31 10:43:13'),
(174, 'Llegada a EE.UU.', '2023-08-31 10:43:23', '2023-08-31 10:43:23'),
(175, 'Llegada a USA', '2023-08-31 12:24:40', '2023-08-31 12:24:40'),
(176, 'Llegada por la tarde al aeropuerto de Tel Aviv. Nos recibirán y nos trasladarán a nuestro hotel en Jerusalén.', '2023-09-02 14:01:04', '2023-09-02 14:01:04'),
(177, 'Continuamos hacia las ruinas de Capernaum', '2023-09-02 14:58:00', '2023-09-02 14:58:00'),
(178, 'Veremos la Sinagoga de Capernaum', '2023-09-02 14:58:39', '2023-09-02 14:58:39'),
(179, 'Seguimos hacia la casa de Simón Pedro', '2023-09-02 14:59:10', '2023-09-02 14:59:10'),
(180, 'Luego visitaremos Beth-Shan, uno de los anfiteatros romanos más importantes.', '2023-09-02 15:12:15', '2023-09-02 15:12:15'),
(181, 'Comenzamos el recorrido a pie que nos lleva a través de la puerta de St. Stephens (Puerta de los Leones)', '2023-09-02 15:27:05', '2023-09-02 15:27:05'),
(182, 'Veremos la piscina de Betesda (Estanque de Betesda)', '2023-09-02 15:30:49', '2023-09-02 15:30:49'),
(183, 'Veremos la piscina de Betesda (Estanque de Betesda)', '2023-09-02 15:30:49', '2023-09-02 15:30:49'),
(184, 'Nos dirigimos al aeropuerto de de Tel Aviv para partir hacia Turquía', '2023-09-02 16:01:23', '2023-09-02 16:01:23'),
(185, 'Al llegar a Estambul continuamos a Esmirna para una cena en el hotel.', '2023-09-02 16:02:18', '2023-09-02 16:02:18'),
(186, 'Comenzaremos nuestro tour de las 7 iglesias de la revelación visitando Esmirna', '2023-09-02 16:27:46', '2023-09-02 16:27:46'),
(187, 'Continuamos el tour con el monte pagus (hoy kadifekale, ciudadela) que domina la ciudad.', '2023-09-02 16:34:54', '2023-09-02 16:35:38'),
(188, 'La próxima parada será el ágora, una parte del antiguo smyrna.', '2023-09-02 16:48:23', '2023-09-02 16:48:23'),
(189, 'Caminaremos a través de los bazares de kemeralti', '2023-09-02 16:57:25', '2023-09-02 16:57:25'),
(190, 'Pasaremos por la calle de la antigua sinagoga, el bazar de pescado y verduras, y llegaremos a la mezquita Hisaronu.', '2023-09-02 17:00:51', '2023-09-02 17:00:51'),
(191, 'Nos dirigiremos a Éfeso, visitaremos los restos de la ciudad como la calle de mármol, el odeon, bouleterion, el templo de Adriano, la fuente de trabajo', '2023-09-02 17:23:52', '2023-09-03 21:39:07'),
(192, 'Continuamos recorriendo la calle de los mosaicos, el ágora, las termas, la casa, el gran teatro, calle del puerto y la tercera biblioteca más grande del mundo antiguo (La famosa biblioteca celsus).', '2023-09-02 17:24:26', '2023-09-02 17:24:26'),
(193, 'Nuestra segunda parada será la casa de la virgen María.', '2023-09-02 17:26:47', '2023-09-02 17:26:47'),
(194, 'Luego visitaremos el templo de Artemisa.', '2023-09-02 17:26:58', '2023-09-02 17:26:58'),
(195, 'Nuestra última parada es visitar la basílica de San Juan, durante la noche en Bodrum.', '2023-09-02 17:27:15', '2023-09-02 17:27:15'),
(197, 'Regreso y cena en el hotel de Bodrum.', '2023-09-02 17:28:17', '2023-09-02 17:28:17'),
(198, 'Partimos en un ferry a la isla de Patmos y comenzamos nuestro recorrido desde la ciudad portuaria de Scala.', '2023-09-02 19:22:37', '2023-09-02 19:22:37'),
(199, 'Haremos un recorrido panorámico por la isla por el encantador pueblo de Kambos.', '2023-09-02 19:24:08', '2023-09-02 19:24:08'),
(200, 'Veremos la hermosa playa de Lambi, la Gruta de St. John, la pequeña cueva convertida en una hermosa capilla, es donde vivió el Santo, el pueblo de Chora', '2023-09-02 19:30:27', '2023-09-02 19:30:27'),
(201, 'Tiempo libre para almorzar y explorar el pueblo por su cuenta.', '2023-09-02 19:30:42', '2023-09-02 19:30:42'),
(202, 'Luego regresamos en ferry a Turquía  y a nuestro hotel en Bodrum.', '2023-09-02 19:30:58', '2023-09-02 19:30:58'),
(203, 'Iniciamos nuestro viaje hacia el norte en autocar bordeando el mar del Mediterráneo a Haifa', '2023-09-02 20:25:23', '2023-09-02 20:25:23'),
(204, 'We start our journey north by coach along the sea Mediterranean to Haifa', '2023-09-02 20:29:13', '2023-09-02 20:29:13'),
(205, 'We will see the Ba\'hai Gardens', '2023-09-02 20:32:40', '2023-09-02 20:32:40'),
(206, 'Veremos los Jardines Ba\'hai', '2023-09-02 20:32:52', '2023-09-02 20:32:52'),
(207, 'Veremos los Jardines Ba\'hai', '2023-09-02 20:32:52', '2023-09-02 20:32:52'),
(208, 'Comenzaremos el recorrido visitando las ruinas de Laodisea', '2023-09-02 20:59:51', '2023-09-02 20:59:51'),
(209, 'Seguimos recorriendo la odisea y visitando la fuente monumental (Ninfeo de Antonio), el odeón, el gimnasio, el templo de Zeus.', '2023-09-02 21:01:41', '2023-09-02 21:01:41'),
(210, 'También veremos en el recorrido el culto Imperial, el estadio, la avenida Siria, la Iglesia del teatro, la caracella y el estadio.', '2023-09-02 21:08:05', '2023-09-02 21:08:05'),
(211, 'En Pamukkale, exploraremos las ruinas de la antigua ciudad de Hierápolis, la necrópolis, latrina, la puerta de Domiciano, la fuente de Tritón, el ágora, los baños romanos, la puerta de Bizancio, la fábrica de aceite y la piscina antigua', '2023-09-02 21:16:49', '2023-09-02 21:16:49'),
(212, 'También disfrutaremos de las vistas impresionantes de las terrazas blancas de Pamukkale.', '2023-09-02 21:17:28', '2023-09-02 21:17:28'),
(214, 'Al final del recorrido de un día, pase un tiempo caminando en las cálidas aguas de las piscinas de travertino.', '2023-09-02 21:17:42', '2023-09-04 01:41:37'),
(215, 'Continuaremos a Sardis y exploraremos la ciudad antigua de Sardis', '2023-09-02 21:18:02', '2023-09-02 21:18:02'),
(216, 'Nos dirigimos al hotel de Sardis para cena y descanso', '2023-09-02 21:18:16', '2023-09-02 21:29:23'),
(217, 'Nos dirigiremos a Pérgamo, visitaremos Aesculapius y continuaremos a la Acrópolis de Pérgamo', '2023-09-02 21:37:00', '2023-09-02 21:38:51'),
(218, 'Visitaremos los templos de Atenea, Troyano, Zeus y Dionisos, el gimnasio de la juventud, el odeón, la biblioteca, el ágora, el gran teatro y las termas romanas.', '2023-09-02 21:46:16', '2023-09-02 21:46:16'),
(219, 'Continuamos la visita hacia las ruinas de Tiatira..', '2023-09-02 21:47:47', '2023-09-02 21:52:32'),
(220, 'Culminamos el día con una cena en el hotel de Estambul', '2023-09-02 22:03:28', '2023-09-02 22:03:28'),
(221, 'Visitaremos a la Iglesia de Hagia Sophia.', '2023-09-02 22:05:35', '2023-09-02 22:05:35'),
(222, 'Continuamos hasta las cúpulas en cascada', '2023-09-02 22:08:03', '2023-09-02 22:08:03'),
(225, 'Seguimos el recorrido hasta la Mezquita del Sultán Ahmet', '2023-09-02 22:08:29', '2023-09-02 22:08:29'),
(226, 'Una salida temprana nos lleva de nuestro hotel al aeropuerto de Tel Aviv, para continuar nuestro vuelo de regreso a los Estados Unidos.', '2023-09-02 22:20:55', '2023-09-02 22:20:55'),
(227, 'Llegada al aeropuerto de Houston.', '2023-09-02 22:21:20', '2023-09-02 22:21:20'),
(228, 'We will see the Gideon stream, the \"Herod\'s Well\" and continue to Nazareth', '2023-09-03 00:33:02', '2023-09-03 00:33:02'),
(229, 'Veremos el arroyo de Gedeón, el \"Pozo de Herodes\" y continuaremos hasta Nazaret', '2023-09-03 00:33:24', '2023-09-03 00:33:24'),
(230, 'We will visit the Church of the Annunciation', '2023-09-03 00:45:29', '2023-09-03 00:45:29'),
(233, 'We will continue to Our Hotel In Nazareth', '2023-09-03 00:54:36', '2023-09-03 00:54:36'),
(234, 'Continuaremos hacia nuestro hotel en Nazaret', '2023-09-03 00:54:53', '2023-09-03 00:54:53'),
(235, 'We begin the tour visiting Mt. of the Beatitudes', '2023-09-03 01:04:33', '2023-09-03 01:04:33'),
(236, 'Comenzamos el recorrido visitando el Monte de las Bienaventuranzas', '2023-09-03 01:04:42', '2023-09-03 01:04:42'),
(237, 'Visitaremos la casa de Simón Pedro', '2023-09-03 01:16:34', '2023-09-03 01:16:34'),
(238, 'Then continue to Then to Beth-Shan, visit one of the most important Roman amphitheaters', '2023-09-03 01:22:57', '2023-09-03 01:22:57'),
(239, 'Early in Morning  we  drive  to  See the ruins of ancient Jericho, stop at the Inn of the Good Samaritan, drive through the modern city of Jericho and continue to the Dead Sea', '2023-09-03 12:01:05', '2023-09-03 12:01:05'),
(240, 'Temprano en la mañana nos dirigimos para ver las ruinas de la antigua Jericó, nos detenemos en la Posada del Buen Samaritano, atravesamos la moderna ciudad de Jericó y continuamos hasta el Mar Muerto.', '2023-09-03 12:01:38', '2023-09-03 12:01:38'),
(241, 'Veremos las cuevas de Qumran donde se encontraron los Rollos del Mar Muerto', '2023-09-03 12:25:04', '2023-09-03 12:25:04'),
(242, 'Today   early  in  the morning we will  visit  the  Holocaust museum    and  after   that  we will   have  free  day  to  roam  Jerusalem  on our  own', '2023-09-03 13:44:02', '2023-09-03 13:44:02'),
(243, 'Hoy temprano en la mañana visitaremos el museo del Holocausto y luego tendremos día libre para recorrer Jerusalén por nuestra cuenta', '2023-09-03 13:44:22', '2023-09-03 13:44:22'),
(244, 'Today  we  will  take a   flight  from Tel aviv airport ot   Izmir   via  Istanbul  upon  arrival    in  izmir  we  will  check  to  our  Hotel', '2023-09-03 14:17:36', '2023-09-03 14:17:36'),
(245, 'Hoy tomaremos un vuelo desde el aeropuerto de Tel Aviv o Izmir vía Estambul. Al llegar a Izmir nos registraremos en nuestro hotel', '2023-09-03 14:18:58', '2023-09-03 14:18:58'),
(246, 'Today we will start our tour of the 7 churches of revelation visiting Smyrna', '2023-09-03 14:31:55', '2023-09-03 14:31:55'),
(247, 'Hoy iniciaremos nuestro recorrido por las 7 iglesias del Apocalipsis visitando Esmirna', '2023-09-03 14:32:13', '2023-09-03 14:32:13'),
(248, 'We will start the tour with the mount pagus', '2023-09-03 14:32:51', '2023-09-03 14:32:51'),
(249, 'Comenzaremos el recorrido por el Monte Pagus', '2023-09-03 14:33:17', '2023-09-03 14:33:17'),
(250, 'The next stop will be Agora', '2023-09-03 14:36:30', '2023-09-03 14:36:30'),
(251, 'La siguiente parada será Ágora', '2023-09-03 14:36:44', '2023-09-03 14:36:44'),
(252, 'Caminaremos por Kemeralti', '2023-09-03 14:37:14', '2023-09-03 14:37:14'),
(254, 'La próxima parada será Ágora', '2023-09-03 21:19:06', '2023-09-03 21:19:06'),
(255, 'Drom there we will go to ephesus', '2023-09-03 21:21:19', '2023-09-03 21:21:19'),
(256, 'De allí iremos a Éfeso', '2023-09-03 21:21:51', '2023-09-03 21:21:51'),
(257, 'Our second stop will be the house of the Virgin Mary', '2023-09-03 21:23:05', '2023-09-03 21:23:05'),
(258, 'Nuestra segunda parada será la casa de la Virgen María', '2023-09-03 21:23:15', '2023-09-03 21:23:15'),
(259, 'We will visit the Temple of Artemis', '2023-09-03 21:26:51', '2023-09-03 21:26:51'),
(260, 'Pasaremos por la calle de la antigua sinagoga, el bazar de pescado y verduras, y llegaremos a la mezquita hisaronu', '2023-09-03 21:27:43', '2023-09-03 21:27:43'),
(261, 'We will pass through the street of the old synagogue, the fish and vegetable bazaar, and we will arrive at the hisaronu mosque', '2023-09-03 21:28:51', '2023-09-03 21:28:51'),
(262, 'Our last stop is to visit the Basilica of St John overnight in bodrum', '2023-09-03 21:37:43', '2023-09-03 21:37:43'),
(263, 'Visitaremos los restos de la ciudad como la Calle de Mármol, el Odeón, Bouleterion, el Templo de Adriano, la Fuente de Trabajo', '2023-09-03 22:51:03', '2023-09-03 22:51:03'),
(264, 'We will continue to the Street of the Mosaics, the Agora, the baths, the house, the great theater, the street of the port and the third largest library in the ancient world: the famous Library of Celsus', '2023-09-03 23:05:37', '2023-09-03 23:05:37'),
(265, 'Today we leave by ferry to the island of Patmos to start the tour from the port city from Scala', '2023-09-04 00:26:50', '2023-09-04 00:26:50'),
(267, 'We will see the beautiful Lambi beach, the Grotto of St. John, thesmall cave converted into a beautiful chapel, it is where the Saint lived, the town of Chora', '2023-09-04 00:38:07', '2023-09-04 00:38:07'),
(268, 'We will hit the Monastery of St. John the Theologian', '2023-09-04 00:45:32', '2023-09-04 00:45:32'),
(270, 'Llegaremos al Monasterio de San Juan el Teólogo', '2023-09-04 00:45:44', '2023-09-04 00:45:44'),
(271, 'We will Explore the Chora. Free time for lunch and to explore the town on your own', '2023-09-04 01:02:55', '2023-09-04 01:04:44'),
(273, 'Exploraremos Chora. Tiempo libre para almorzar y explorar el pueblo por su cuenta', '2023-09-04 01:04:01', '2023-09-04 01:04:01'),
(274, 'Then we return by ferry to Türkiye to our hotel in Bodrum', '2023-09-04 01:06:32', '2023-09-04 01:06:32'),
(275, 'Today we will start our tour visiting Laodicea', '2023-09-04 01:23:28', '2023-09-04 01:23:28'),
(276, 'First visiting the Source Monumental, Odeon, Gymnasium, Temple of Zeus', '2023-09-04 01:26:14', '2023-09-04 01:26:14'),
(277, 'Primero visitando la Fuente Monumental, Odeón, Gimnasio, Templo de Zeus', '2023-09-04 01:26:25', '2023-09-04 01:26:25'),
(278, 'Primero visitando la Fuente Monumental, Odeón, Gimnasio, Templo de Zeus', '2023-09-04 01:26:25', '2023-09-04 01:26:25'),
(279, 'Continuaremos al Culto Imperial, Estadio, Avenida Siria, Iglesia del Teatro, Caracella y el Estadio', '2023-09-04 01:31:31', '2023-09-04 01:31:31'),
(280, 'We will continue to the Imperial Cult, Stadium, Avenida Siria, Church of the Theater, Caracella and the Stadium', '2023-09-04 01:31:41', '2023-09-04 01:31:41'),
(281, 'In Pamukkale, explore the well-preserved ruins of the ancient city of Hierapolis, including the necropolis, Latrina, the gate of Domitian', '2023-09-04 01:37:52', '2023-09-04 01:37:52'),
(283, 'We will also visit the Triton fountain, the agora, the Roman baths, the Byzantium gate, the oil factory, the old pool and much more', '2023-09-04 01:38:42', '2023-09-04 01:38:42'),
(284, 'Enjoy breathtaking views. of the white terraces of Pamukkale', '2023-09-04 01:39:47', '2023-09-04 01:39:47'),
(285, 'At the end of your day tour, spend some time walking in the warm waters of the travertine pools', '2023-09-04 01:40:56', '2023-09-04 01:40:56'),
(286, 'We will continue to Sardis, we will explore the ancient city of Sardis', '2023-09-04 02:19:01', '2023-09-04 02:19:01'),
(287, 'Today we will go to Thyatira, the tour will include a visit to a temple ruins', '2023-09-04 11:33:06', '2023-09-04 11:33:06'),
(288, 'Hoy iremos a Tiatira, el tour incluirá una visita a las ruinas del templo', '2023-09-04 11:33:33', '2023-09-04 11:33:33'),
(289, 'Continuación a Pérgamo, visitaremos Aesculapium, un antiguo centro médico construido en nombre de Aesculapis', '2023-09-04 11:35:09', '2023-09-04 11:35:09'),
(290, 'Continue to  Pergamum, we will visit Aesculapium, an ancient medical center built in name of Aesculapis', '2023-09-04 11:35:24', '2023-09-04 11:35:24'),
(291, 'We will continue to the Acropolis of Pergamum. We will visit the temples of Athena and Trojan, the Temple of Zeus, the Temple of Dionysus, the Gymnasium of Youth', '2023-09-04 11:38:18', '2023-09-04 11:38:18'),
(292, 'Continuaremos a la Acrópolis de Pérgamo. Visitaremos los templos de Atenea y Troyano, el Templo de Zeus, el Templo de Dionisio, el Gimnasio de la Juventud', '2023-09-04 11:38:54', '2023-09-04 11:38:54'),
(293, 'Continuaremos a la Acrópolis de Pérgamo. Visitaremos los templos de Atenea y Troyano, el Templo de Zeus, el Templo de Dionisio, el Gimnasio de la Juventud', '2023-09-04 11:38:55', '2023-09-04 11:38:55'),
(294, 'Seguiremos a el Odeón, la Biblioteca, el Ágora, el Gran Teatro y las Termas Romanas. Durante la noche en Bergama', '2023-09-04 11:39:47', '2023-09-04 11:39:47'),
(295, 'We will continue to the Odeon, the Library, the Agora, the Great Theater and the Roman Baths. Overnight in Bergama', '2023-09-04 11:40:02', '2023-09-04 11:40:02'),
(296, 'Early we  will depart to Istanbul about 3 hours drive, upon arrival we will visit sites that we have not visited', '2023-09-04 12:11:44', '2023-09-04 12:11:44'),
(297, 'And conclude with Dinner and cruise on the ferry bosphorus overnight in Istanbul', '2023-09-04 12:12:18', '2023-09-04 12:12:18'),
(298, 'Temprano partiremos hacia Estambul alrededor de 3 horas en automóvil, al llegar visitaremos sitios que no hemos visitado', '2023-09-04 12:12:31', '2023-09-04 12:12:31'),
(299, 'Y concluimos con una cena y un crucero en el ferry Bósforo. Pasaremos la noche en Estambul', '2023-09-04 12:13:14', '2023-09-04 12:13:14'),
(300, 'Today we start with a visit to the Hagia Sophia Church, which is now a museum', '2023-09-04 12:27:41', '2023-09-04 12:27:41'),
(301, 'Hoy comenzamos con una visita a la Iglesia de Hagia Sophia, que ahora es un museo', '2023-09-04 12:27:53', '2023-09-04 12:27:53'),
(302, 'We will continue to the cascading domes and six slender minarets of the Sultan Ahmet Mosque', '2023-09-04 12:30:17', '2023-09-04 12:30:17'),
(304, 'Continuaremos hasta las cúpulas en cascada y los seis esbeltos minaretes de la Mezquita del Sultán Ahmet', '2023-09-04 12:32:53', '2023-09-04 12:32:53'),
(305, 'From Istanbul we conclude the day with a flight to Izmir upon arrival we will check in to our hotel', '2023-09-04 12:35:32', '2023-09-04 12:35:32'),
(306, 'Desde Estambul concluimos el día con un vuelo a Izmir a la llegada nos registraremos en nuestro hotel', '2023-09-04 12:35:52', '2023-09-04 12:35:52'),
(307, 'An early departure takes us from our hotel to the airport to continue our flight back to the USA. We returned home exhausted but excited for 14 days of exploring Israel and Türkiye', '2023-09-04 12:56:31', '2023-09-04 12:56:31'),
(308, 'Una salida temprano nos lleva de nuestro hotel al aeropuerto para continuar nuestro vuelo de regreso a USA. Regresamos a casa exhaustos pero emocionados por 14 días explorando Israel y Türkiye', '2023-09-04 12:56:40', '2023-09-04 12:56:40'),
(309, 'We depart from North America on our overnight flight to Tel Aviv', '2023-09-04 15:58:08', '2023-09-04 15:58:08'),
(310, 'Arrival in the afternoon at the Tel Aviv airport. They will receive us and transfer us to our hotel in Jerusalem.', '2023-09-04 16:03:16', '2023-09-04 16:03:16'),
(311, 'Dinner at the hotel in Jerusalem.', '2023-09-04 16:03:30', '2023-09-04 16:03:30'),
(312, 'We start our journey north by bus along the Mediterranean Sea to Caesarea', '2023-09-04 16:07:39', '2023-09-04 16:07:39'),
(313, 'We will see the Crusader City and the fantastic aqueduct', '2023-09-04 16:08:00', '2023-09-04 16:08:00'),
(314, 'We will see the Crusader City and the fantastic aqueduct', '2023-09-04 16:08:00', '2023-09-04 16:08:00'),
(315, 'We will continue to Haifa to see the Baha\'i Gardens', '2023-09-04 16:08:12', '2023-09-04 16:08:12'),
(316, 'We will go to the crest of Mount Carmel, through the Jezreel Valley', '2023-09-04 16:08:28', '2023-09-04 16:08:28'),
(317, 'We will arrive at Megiddo', '2023-09-04 16:08:43', '2023-09-04 16:08:43'),
(318, 'Lunch on the way to reach the stream of Gideon and the \"Herod\'s Well\"', '2023-09-04 16:08:58', '2023-09-04 16:08:58'),
(319, 'We continue through Nazareth until we reach the Church of the Annunciation', '2023-09-04 16:09:10', '2023-09-04 16:09:10'),
(320, 'Later we will go to Cana', '2023-09-04 16:11:26', '2023-09-04 16:11:26'),
(321, 'Later we will go to Cana', '2023-09-04 16:11:26', '2023-09-04 16:11:26'),
(322, 'Finally we will arrive at our hotel in Tiberias', '2023-09-04 16:11:40', '2023-09-04 16:11:40'),
(323, 'We will visit the Mount of Beatitudes', '2023-09-04 16:35:50', '2023-09-04 16:35:50'),
(324, 'We will arrive at the Tabgha chapel', '2023-09-04 16:36:10', '2023-09-04 16:36:10'),
(325, 'We continue to the ruins of Capernaum', '2023-09-04 16:37:53', '2023-09-04 16:37:53'),
(326, 'We will see the Synagogue of Capernaum', '2023-09-04 16:38:47', '2023-09-04 16:38:47'),
(327, 'We will cross the Sea of ​​Galilee in boats from the time of Jesus', '2023-09-04 16:38:58', '2023-09-04 16:38:58'),
(328, 'Then we will visit Beth-Shan, one of the most important Roman amphitheatres.', '2023-09-04 16:39:11', '2023-09-04 16:39:11'),
(329, 'We will return to the hotel in Jerusalem to have dinner and rest.', '2023-09-04 16:40:07', '2023-09-04 16:40:07'),
(330, 'We will enter the Old City through the Damascus Gate', '2023-09-04 17:03:56', '2023-09-04 17:03:56'),
(331, 'We start the walking tour that takes us through the gate of St. Stephens (Gate of the Lions)', '2023-09-04 17:04:08', '2023-09-04 17:04:08'),
(333, 'We will see the pool of Bethesda (Pond of Bethesda)', '2023-09-04 17:05:06', '2023-09-04 17:05:06'),
(334, 'We will continue to the area of ​​​​the Temple of Mount Moriah', '2023-09-04 17:05:17', '2023-09-04 17:05:17'),
(335, 'We will visit the Dome of Rock', '2023-09-04 17:05:27', '2023-09-04 17:05:27'),
(336, 'We will see the Wailing Wall or, also called, the Wailing Wall', '2023-09-04 17:05:45', '2023-09-04 17:05:45'),
(337, 'Let\'s stop by the Tower of David, the Citadel and the Tomb of King David', '2023-09-04 17:06:01', '2023-09-04 17:06:01'),
(338, 'We will visit the Jewish Quarter before leaving the Old City', '2023-09-04 17:06:14', '2023-09-04 17:06:14'),
(339, 'We will then cross the Jaffa Gate', '2023-09-04 17:06:34', '2023-09-04 17:06:34'),
(340, 'We will visit Mount Zion and the Cenacle', '2023-09-04 17:06:47', '2023-09-04 17:06:47'),
(341, 'We will see the Garden Tomb and Golgotha', '2023-09-04 17:07:04', '2023-09-04 17:07:04'),
(342, 'Our night ends with a visit to the Garden of Gethsemane', '2023-09-04 17:07:20', '2023-09-04 17:07:20'),
(343, 'Our night ends with a visit to the Garden of Gethsemane', '2023-09-04 17:07:20', '2023-09-04 17:07:20'),
(344, 'Appointment at the Mexico City airport to take a flight to Tel Aviv', '2023-09-04 17:10:34', '2023-09-04 17:10:34'),
(345, 'Cita en el aeropuerto de Ciudad de México para tomar vuelo con destino a Tel Aviv', '2023-09-04 17:10:45', '2023-09-04 17:10:45'),
(346, 'Llegada al Aeropuerto Internacional Ben Gurión', '2023-09-04 17:11:06', '2023-09-04 17:11:06'),
(347, 'Arrival at Ben Gurion International Airport', '2023-09-04 17:11:15', '2023-09-04 17:11:15'),
(348, 'Recepción y asistencia. Traslado al hotel de Heshel en Shomron. Cena y alojamiento.', '2023-09-04 17:11:33', '2023-09-04 17:11:33'),
(349, 'Reception and assistance. Transfer to Heshel ha Shomron hotel. Dinner and accommodation', '2023-09-04 17:11:47', '2023-09-04 17:11:47'),
(350, 'Desayuno y salida hacia el norte de Israel. Comenzaremos con el Monte Grisim y Silo', '2023-09-04 17:12:40', '2023-09-04 17:12:40'),
(351, 'Breakfast and departure to the north of Israel. We will start with Mount Grisim and Silo', '2023-09-04 17:14:47', '2023-09-04 17:14:47'),
(352, 'Continuamos viaje por el camino de la antigua carretera Vía Maris hacia Cesárea Marítima el lugar de la prisión de Paulo', '2023-09-04 17:15:05', '2023-09-04 17:15:05'),
(353, 'Continuamos viaje por el camino de la antigua carretera Vía Maris hacia Cesárea Marítima el lugar de la prisión de Paulo', '2023-09-04 17:15:05', '2023-09-04 17:15:05'),
(354, 'We continue our journey along the road of the old Via Maris highway towards Cesárea Marítima, the place of Paulo\'s prison', '2023-09-04 17:15:19', '2023-09-04 17:15:19'),
(355, 'We continue our journey along the road of the old Via Maris highway towards Cesárea Marítima, the place of Paulo\'s prison', '2023-09-04 17:15:19', '2023-09-04 17:15:19'),
(356, 'Seguiremos al Monte Carmelo. Aquí es la escena de la actuación del Profeta Elías en Muhraka.', '2023-09-04 17:16:02', '2023-09-04 17:16:02'),
(357, 'We will continue to Mount Carmel. Here is the scene of Prophet Elijah\'s performance in Muhraka', '2023-09-04 17:16:14', '2023-09-04 17:16:14'),
(358, 'Continuaremos a Tel Meguido, la colina arqueológica y el Valle del Armagedón, el lugar del Juicio Final', '2023-09-04 17:16:31', '2023-09-04 17:16:31'),
(360, 'Early in the morning we head south of Jerusalem to see the ruins of ancient Jericho', '2023-09-04 17:37:18', '2023-09-04 17:37:18'),
(361, 'We will stop at the Good Samaritan Inn.', '2023-09-04 17:37:37', '2023-09-04 17:37:37'),
(362, 'We will drive through the modern city of Jericho to the Dead Sea to appreciate the Qumran caves', '2023-09-04 17:38:41', '2023-09-04 17:38:41'),
(363, 'We will continue to Masada to board the cable car to the ruins of Herod the Great\'s fortress', '2023-09-04 17:38:54', '2023-09-04 17:38:54'),
(364, 'We go to the Tel Aviv airport to leave for Turkey', '2023-09-04 17:39:36', '2023-09-04 17:39:36'),
(365, 'Arriving in Istanbul we continue to Izmir for dinner at the hotel.', '2023-09-04 17:39:53', '2023-09-04 17:39:53'),
(366, 'We will start our tour of the 7 churches of revelation by visiting Izmir', '2023-09-04 17:58:53', '2023-09-04 17:58:53'),
(367, 'We continue the tour with Mount Pagus (today Kadifekale, citadel) that dominates the city.', '2023-09-04 17:59:03', '2023-09-04 17:59:03'),
(368, 'The next stop will be the agora, a part of ancient smyrna.', '2023-09-04 17:59:15', '2023-09-04 17:59:15'),
(369, 'The next stop will be the agora, a part of ancient smyrna.', '2023-09-04 17:59:15', '2023-09-04 17:59:15'),
(370, 'We will walk through the kemeralti bazaars', '2023-09-04 17:59:32', '2023-09-04 17:59:32'),
(371, 'We will pass through the street of the old synagogue, the fish and vegetable bazaar, and we will arrive at the hisaronu mosque.', '2023-09-04 17:59:52', '2023-09-04 17:59:52'),
(372, 'We will go to Ephesus, we will visit the remains of the city such as the marble street, the odeon, bouleterion, the temple of Hadrian, the fountain of trajan', '2023-09-04 18:00:05', '2023-09-04 18:00:05'),
(373, 'We continue touring the street of mosaics, the agora, the baths, the house, the great theater, port street and the third largest library in the ancient world (The famous Celsus library).', '2023-09-04 18:00:42', '2023-09-04 18:00:42'),
(374, 'Our second stop will be the house of the Virgin Mary', '2023-09-04 18:00:55', '2023-09-04 18:00:55'),
(375, 'Then we will visit the temple of Artemis.', '2023-09-04 18:01:07', '2023-09-04 18:01:07'),
(376, 'Our last stop is to visit the Basilica of St. John, overnight in Bodrum.', '2023-09-04 18:01:21', '2023-09-04 18:01:21'),
(377, 'Return and dinner at the hotel in Bodrum.', '2023-09-04 18:01:35', '2023-09-04 18:01:35'),
(378, 'We continue to Tel Megiddo, the archaeological hill and the Valley of Armageddon, the place of the Last Judgment', '2023-09-04 19:06:48', '2023-09-04 19:06:48'),
(379, 'Continuaremos a Tel Meguido, la colina arqueológica y el Valle del Armagedón, el lugar del Juicio Final', '2023-09-04 19:07:06', '2023-09-04 19:07:06'),
(380, 'Arriving at Tiberias, where we will spend the night. Dinner and accommodation', '2023-09-04 19:07:27', '2023-09-04 19:07:27'),
(381, 'Llegamos a Tiberíades, donde pasaremos la noche. Cena y alojamiento.', '2023-09-04 19:07:54', '2023-09-04 19:07:54'),
(382, 'Breakfast, departure for a boat ride across the lake to the Magdala Valley', '2023-09-04 20:33:57', '2023-09-04 20:33:57'),
(383, 'Desayuno, salida para un paseo de Barco cruzando el lago hasta el Valle de Magdala', '2023-09-04 20:34:17', '2023-09-04 20:34:17'),
(384, 'We continue the day with a service in the place of the Sermon on the Mount', '2023-09-04 20:36:35', '2023-09-04 20:36:35'),
(385, 'We continue the day with a service in the place of the Sermon on the Mount', '2023-09-04 20:36:35', '2023-09-04 20:36:35'),
(386, 'Seguimos el día con un culto en el lugar del Sermón de la Montaña', '2023-09-04 20:36:52', '2023-09-04 20:36:52'),
(387, 'Finalizaremos el día en Cana Da Galilea y seguiremos la ciudad donde Jesús pasó su infancia y adolescencia', '2023-09-04 20:37:29', '2023-09-04 20:37:29'),
(388, 'We will end the day in Cana Da Galilea and continue to the city where Jesus spent his childhood and adolescence', '2023-09-04 20:37:40', '2023-09-04 20:37:40'),
(389, 'Finalizaremos el día en Cana Da Galilea y seguiremos la ciudad donde Jesús pasó su infancia y adolescencia', '2023-09-04 21:14:19', '2023-09-04 21:14:19'),
(390, 'We will end the day in Cana Da Galilea and continue to the city where Jesus spent his childhood and adolescence', '2023-09-04 21:14:46', '2023-09-04 21:14:46'),
(391, 'Desayuno y salida a visitar Banias o Cesárea de Filipo, Ben-Tal y Tel-Dan', '2023-09-04 23:41:06', '2023-09-04 23:41:06'),
(392, 'Breakfast and departure to visit Banias or Caesarea Philippi, Ben-Tal and Tel-Dan', '2023-09-04 23:41:41', '2023-09-04 23:41:41'),
(393, 'Breakfast and departure to visit Banias or Caesarea Philippi, Ben-Tal and Tel-Dan', '2023-09-04 23:41:41', '2023-09-04 23:41:41'),
(394, 'Seguiremos a Nazaret y muy cerca de Safaris, para subir las Colinas como Abraham', '2023-09-04 23:42:39', '2023-09-04 23:42:39'),
(395, 'We will continue to Nazareth and very close to Safaris, to climb the Hills like Abraham', '2023-09-04 23:43:27', '2023-09-04 23:43:27'),
(396, 'Por último visitaremos la Fuente de Ein Harod', '2023-09-04 23:45:37', '2023-09-04 23:45:37'),
(397, 'Finally we will visit the Ein Harod Fountain', '2023-09-04 23:56:02', '2023-09-04 23:56:02'),
(398, 'hola', '2023-09-27 18:54:29', '2023-09-27 18:54:29'),
(399, 'awebo', '2023-09-27 18:54:34', '2023-09-27 18:54:34'),
(400, 'aaamsterdam to rome hikin', '2023-10-04 21:28:08', '2023-10-04 21:28:38'),
(402, 'operator operator', '2023-10-14 18:31:53', '2023-10-14 18:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `airline_ticket`
--

CREATE TABLE `airline_ticket` (
  `id` bigint(20) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `city_of_depart` varchar(255) NOT NULL,
  `city_of_arrival` varchar(255) NOT NULL,
  `departure_date_time` datetime NOT NULL,
  `arrival_date_time` datetime NOT NULL,
  `ticket_pnr` varchar(255) NOT NULL,
  `airline` varchar(255) NOT NULL,
  `ticket_price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `flight_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airline_ticket`
--

INSERT INTO `airline_ticket` (`id`, `passenger_id`, `city_of_depart`, `city_of_arrival`, `departure_date_time`, `arrival_date_time`, `ticket_pnr`, `airline`, `ticket_price`, `created_at`, `updated_at`, `flight_code`) VALUES
(16, 3, '8', '3', '4444-04-04 04:44:00', '5554-05-04 14:23:00', '4444', '19', 4444, '2023-10-13 11:14:51', '2023-10-13 11:14:51', '4444'),
(17, 1, '13', '11', '2311-10-20 00:12:00', '2334-10-20 00:12:00', '1234', '24', 1234, '2023-10-14 22:09:09', '2023-10-14 23:37:37', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `airline_ticket_provider`
--

CREATE TABLE `airline_ticket_provider` (
  `id` bigint(20) NOT NULL,
  `atp_first_name` varchar(255) NOT NULL,
  `atp_last_name` varchar(255) NOT NULL,
  `atp_company_name` varchar(255) NOT NULL,
  `atp_email` varchar(255) NOT NULL,
  `atp_phone` varchar(16) NOT NULL,
  `atp_cell_number` varchar(16) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airline_ticket_provider`
--

INSERT INTO `airline_ticket_provider` (`id`, `atp_first_name`, `atp_last_name`, `atp_company_name`, `atp_email`, `atp_phone`, `atp_cell_number`, `created_at`, `updated_at`) VALUES
(1, 'First Name1', 'Last Name1', 'Company Name1', 'mail@gmalil.com1', '1234567899871', '12345678998701', '2023-07-19 07:36:13', '2023-07-19 07:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` bigint(20) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `airport_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `country_id`, `city_id`, `airport_name`, `created_at`, `updated_at`) VALUES
(3, 11, 7, 'Tel aviv', '2023-08-28 20:11:21', '2023-08-28 20:11:21'),
(5, 15, 66, 'Aeropuerto de Estambul', '2023-09-02 16:17:55', '2023-09-02 16:17:55'),
(7, 14, 52, 'Istanbul Airport', '2023-09-02 16:18:36', '2023-09-02 16:18:36'),
(8, 11, 7, 'Aeropuerto Internacional Ben Gurión', '2023-09-04 14:59:07', '2023-09-04 14:59:07'),
(9, 11, 7, 'Ben Gurion Airport', '2023-09-04 14:59:42', '2023-09-04 14:59:42'),
(10, 16, 84, 'Aeropuerto Internacional de la Ciudad de México', '2023-09-04 19:13:51', '2023-09-04 19:13:51'),
(11, 16, 84, 'Mexico City International Airport', '2023-09-04 19:14:21', '2023-09-04 19:14:21'),
(12, 13, 10, 'moises s.a.', '2023-10-06 13:30:21', '2023-10-06 13:33:17'),
(13, 12, 86, 'Maiquetia', '2023-10-13 19:35:30', '2023-10-13 19:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE `car_type` (
  `id` bigint(20) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(2, 'van Israel', '2023-09-01 11:36:33', '2023-09-01 11:40:50'),
(3, 'Mini Bus Israel', '2023-09-01 11:36:56', '2023-09-01 11:40:38'),
(5, 'Bus Israel Airport  Transfer  To Jerusalem', '2023-09-01 11:37:36', '2023-09-01 11:44:01'),
(6, 'Large bus Israel', '2023-09-01 11:37:46', '2023-09-01 11:39:09'),
(7, 'Bus Israel Airport  half day Tour', '2023-09-01 11:45:07', '2023-10-04 21:01:07'),
(9, 'Bus Israel Airport  Transfer  To Jordan Border', '2023-09-01 11:45:40', '2023-09-01 11:45:40'),
(10, 'Bus Israel Airport  Transfer  To  Egypt Border', '2023-09-01 11:46:03', '2023-09-01 11:46:03'),
(11, 'bus from bolivar to puerto la cruz.', '2023-10-04 20:48:40', '2023-10-04 20:48:40'),
(12, 'spain to italy', '2023-10-04 20:49:34', '2023-10-04 20:49:34'),
(20, 'car from bolivar to puerto ordaz', '2023-10-13 20:15:32', '2023-10-13 20:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `country_id`, `created_at`, `updated_at`) VALUES
(7, 'Tel Aviv', 11, '2023-08-25 10:19:48', '2023-08-25 10:19:48'),
(8, 'Haifa', 11, '2023-08-25 10:20:03', '2023-08-25 10:20:03'),
(9, 'Tiberias', 11, '2023-08-25 10:20:35', '2023-08-25 10:20:35'),
(10, 'Houston', 4, '2023-08-25 10:23:10', '2023-08-25 10:23:10'),
(12, 'Beth Shan', 11, '2023-08-25 10:24:33', '2023-08-28 19:59:10'),
(19, 'Nazaret', 11, '2023-08-28 16:25:10', '2023-08-28 16:25:10'),
(21, 'Tabgha', 11, '2023-08-28 16:27:55', '2023-08-28 16:27:55'),
(26, 'Bethlehem', 11, '2023-08-28 16:56:07', '2023-08-28 16:57:52'),
(27, 'Jerusalem', 11, '2023-08-28 18:44:53', '2023-08-28 18:44:53'),
(28, 'Modern city of jericho', 11, '2023-08-28 18:45:40', '2023-08-28 20:07:27'),
(29, 'Caesarea', 11, '2023-08-28 20:02:17', '2023-08-28 20:02:17'),
(30, 'Galilee', 11, '2023-08-28 20:03:20', '2023-08-28 20:03:20'),
(31, 'Netanya', 11, '2023-08-28 20:46:25', '2023-08-28 20:46:25'),
(32, 'Cana', 11, '2023-08-28 22:14:35', '2023-08-28 22:14:35'),
(33, 'Tel Meggido', 11, '2023-08-29 09:07:41', '2023-08-29 09:07:41'),
(35, 'Hydra', 12, '2023-08-29 09:17:24', '2023-08-29 09:17:24'),
(36, 'Poros', 12, '2023-08-29 09:17:48', '2023-08-29 09:17:48'),
(37, 'Aegina', 12, '2023-08-29 09:18:16', '2023-08-29 09:18:16'),
(38, 'Jericó', 11, '2023-08-29 16:10:01', '2023-09-02 15:51:37'),
(39, 'Egina', 12, '2023-08-31 05:25:50', '2023-08-31 05:25:50'),
(40, 'Atenas', 16, '2023-08-31 05:25:56', '2023-09-13 04:44:17'),
(41, 'Beit Shean', 11, '2023-08-31 05:27:57', '2023-08-31 05:27:57'),
(42, 'Belén', 11, '2023-08-31 05:28:13', '2023-08-31 05:28:13'),
(43, 'Cesarea', 11, '2023-08-31 05:29:08', '2023-08-31 05:29:08'),
(44, 'Galilea', 11, '2023-08-31 05:30:40', '2023-08-31 05:30:40'),
(45, 'Hidra', 12, '2023-08-31 05:31:10', '2023-08-31 05:31:10'),
(46, 'Jerusalén', 11, '2023-08-31 05:31:35', '2023-08-31 05:31:35'),
(47, 'Ciudad Moderna de Jericó', 11, '2023-08-31 05:31:52', '2023-08-31 05:31:52'),
(48, 'Megido', 11, '2023-08-31 05:34:00', '2023-08-31 05:34:00'),
(49, 'Tiberíades', 11, '2023-08-31 05:34:25', '2023-08-31 05:34:25'),
(51, 'Esmirna', 15, '2023-09-02 00:19:30', '2023-09-02 00:19:30'),
(52, 'Istanbul', 14, '2023-09-02 00:20:05', '2023-09-02 00:20:05'),
(54, 'Smyrna', 14, '2023-09-02 00:20:34', '2023-09-02 00:20:34'),
(55, 'Patmos', 12, '2023-09-02 00:22:11', '2023-09-02 00:23:45'),
(56, 'Scala', 14, '2023-09-02 00:29:41', '2023-09-02 00:29:41'),
(57, 'Sardis', 14, '2023-09-02 00:31:43', '2023-09-02 00:31:43'),
(58, 'Sardis', 14, '2023-09-02 00:31:43', '2023-09-02 00:31:43'),
(59, 'Sardes', 15, '2023-09-02 00:31:52', '2023-09-02 00:31:52'),
(60, 'Thyatira', 14, '2023-09-02 00:34:15', '2023-09-02 00:34:15'),
(61, 'Tiatira', 15, '2023-09-02 00:34:29', '2023-09-02 00:34:29'),
(62, 'Pergamum', 14, '2023-09-02 00:34:56', '2023-09-02 00:34:56'),
(63, 'Pérgamo', 15, '2023-09-02 00:35:42', '2023-09-02 00:35:42'),
(64, 'Ephesus', 14, '2023-09-02 11:07:06', '2023-09-02 11:07:06'),
(65, 'Éfeso', 15, '2023-09-02 11:07:19', '2023-09-02 11:07:19'),
(66, 'Estambul', 15, '2023-09-02 15:59:38', '2023-09-02 15:59:38'),
(69, 'Izmir', 14, '2023-09-02 16:23:22', '2023-09-02 16:23:22'),
(72, 'Muğla', 15, '2023-09-02 19:00:32', '2023-09-02 19:04:37'),
(73, 'Ciudad Portuaria de Scala', 15, '2023-09-02 19:18:30', '2023-09-02 19:18:30'),
(74, 'Port City of Scala', 14, '2023-09-02 19:18:51', '2023-09-02 19:18:51'),
(75, 'Laodicea', 14, '2023-09-02 19:24:47', '2023-09-02 19:24:47'),
(76, 'Archipiélago del Dodecaneso', 12, '2023-09-02 19:58:02', '2023-09-02 19:58:02'),
(77, 'Dodecanese Archipelago', 12, '2023-09-02 20:13:28', '2023-09-02 20:13:28'),
(78, 'Denizli', 15, '2023-09-02 20:43:28', '2023-09-02 20:43:28'),
(79, 'Denizly', 14, '2023-09-02 20:43:39', '2023-09-02 20:43:39'),
(80, 'Manisa', 15, '2023-09-02 21:23:34', '2023-09-02 21:23:34'),
(82, 'We will see the Qumran caves', 11, '2023-09-03 12:06:57', '2023-09-03 12:06:57'),
(83, 'Veremos las cuevas de Qumran', 11, '2023-09-03 12:07:08', '2023-09-03 12:07:08'),
(84, 'Ciudad de Mexico', 16, '2023-09-04 14:57:08', '2023-09-04 14:57:08'),
(85, 'Lod', 11, '2023-09-04 14:57:46', '2023-09-04 14:57:46'),
(86, 'Shomron', 14, '2023-09-04 16:45:20', '2023-09-04 16:45:20'),
(87, 'Samaria', 15, '2023-09-04 16:45:30', '2023-09-04 16:45:30'),
(88, 'Cesárea Marítima', 15, '2023-09-04 16:53:45', '2023-09-04 16:53:45'),
(89, 'Maritime Caesarean section', 14, '2023-09-04 16:55:00', '2023-09-04 16:55:00'),
(90, 'Jericho', 11, '2023-09-04 17:45:45', '2023-09-04 17:45:45'),
(91, 'Magdala', 11, '2023-09-04 20:22:38', '2023-09-04 20:22:38'),
(93, 'Banias or Caesarea Philippi', 11, '2023-09-04 23:10:23', '2023-09-04 23:10:23'),
(94, 'Jezreel', 11, '2023-09-04 23:27:41', '2023-09-04 23:27:41'),
(95, 'california', 4, '2023-09-27 21:05:34', '2023-09-27 21:05:34'),
(96, 'barcelona', 18, '2023-10-14 18:07:14', '2023-10-14 18:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` bigint(20) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_time_zone` varchar(255) NOT NULL,
  `country_area_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`, `country_time_zone`, `country_area_code`, `created_at`, `updated_at`) VALUES
(11, 'Israel', '-0030', '+972', '2023-08-25 10:18:30', '2023-08-25 10:18:30'),
(12, 'Venezuela', 'UTC +4', '+58', '2023-08-29 08:53:41', '2023-10-03 19:25:01'),
(13, 'united states', 'UTC +2', '+30', '2023-08-31 05:34:58', '2023-10-03 19:18:32'),
(14, 'Turkey', 'GMT+03:00', '+90', '2023-09-02 00:16:39', '2023-09-02 16:00:18'),
(16, 'Mexic', 'GMT-06:00', '+52', '2023-09-04 14:56:00', '2023-10-03 19:24:25'),
(17, 'Antigua and Barbuda', '(UTC-04:00) Antigua', '1684', '2023-10-13 18:52:56', '2023-10-13 18:52:56'),
(18, 'Spain', '(UTC-03:00) Salta', '378', '2023-10-14 18:06:23', '2023-10-14 18:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `day_itinerary`
--

CREATE TABLE `day_itinerary` (
  `id` bigint(20) NOT NULL,
  `gti_id` int(11) NOT NULL,
  `day_itinerary` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `sight_id` int(11) NOT NULL,
  `sight_distant_id` int(11) NOT NULL,
  `airport_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day_itinerary`
--

INSERT INTO `day_itinerary` (`id`, `gti_id`, `day_itinerary`, `country_id`, `city_id`, `activity_id`, `sight_id`, `sight_distant_id`, `airport_id`, `created_at`, `updated_at`) VALUES
(7, 2, '1', 4, 14, 3, 4, 1, 2, '2023-08-25 10:42:36', '2023-08-25 10:42:36'),
(8, 2, '1', 11, 14, 5, 4, 1, 2, '2023-08-25 10:43:46', '2023-08-25 10:43:46'),
(9, 2, '2', 11, 7, 6, 6, 2, 3, '2023-08-28 21:00:19', '2023-08-28 21:00:19'),
(10, 2, '2', 11, 31, 8, 7, 3, 3, '2023-08-28 21:07:09', '2023-08-28 21:07:09'),
(11, 2, '3', 11, 31, 9, 7, 2, 3, '2023-08-28 22:03:02', '2023-08-28 22:03:02'),
(12, 2, '3', 11, 29, 10, 3, 2, 3, '2023-08-28 22:05:35', '2023-08-28 22:05:35'),
(13, 2, '3', 11, 29, 29, 3, 2, 3, '2023-08-28 22:06:50', '2023-08-28 22:06:50'),
(14, 2, '3', 11, 8, 30, 5, 2, 3, '2023-08-28 22:07:25', '2023-08-28 22:08:49'),
(15, 2, '3', 11, 8, 31, 5, 2, 3, '2023-08-28 22:09:59', '2023-08-28 22:09:59'),
(16, 2, '3', 11, 8, 32, 13, 2, 3, '2023-08-28 22:11:52', '2023-08-28 22:11:52'),
(17, 2, '3', 11, 8, 32, 13, 2, 3, '2023-08-28 22:11:52', '2023-08-28 22:11:52'),
(18, 2, '3', 11, 32, 34, 15, 2, 3, '2023-08-28 22:16:24', '2023-08-28 22:16:24'),
(19, 2, '3', 11, 32, 35, 15, 2, 3, '2023-08-28 22:18:05', '2023-08-28 22:18:05'),
(20, 2, '4', 11, 9, 11, 53, 2, 3, '2023-08-29 13:52:51', '2023-08-29 13:52:51'),
(21, 2, '4', 11, 9, 36, 53, 2, 3, '2023-08-29 13:53:55', '2023-08-29 13:53:55'),
(22, 2, '4', 11, 30, 37, 18, 2, 3, '2023-08-29 13:56:58', '2023-08-29 13:56:58'),
(23, 2, '4', 11, 30, 38, 19, 2, 3, '2023-08-29 13:58:01', '2023-08-29 13:58:01'),
(24, 2, '4', 11, 30, 39, 20, 2, 3, '2023-08-29 13:59:10', '2023-08-29 13:59:10'),
(25, 2, '4', 11, 30, 40, 21, 2, 3, '2023-08-29 14:00:03', '2023-08-29 14:00:03'),
(26, 2, '4', 11, 30, 41, 22, 2, 3, '2023-08-29 14:00:31', '2023-08-29 14:00:31'),
(27, 2, '4', 11, 30, 42, 17, 2, 3, '2023-08-29 14:01:13', '2023-08-29 14:01:13'),
(28, 2, '4', 11, 30, 43, 25, 2, 3, '2023-08-29 14:02:57', '2023-08-29 14:02:57'),
(29, 2, '4', 11, 9, 44, 53, 2, 3, '2023-08-29 14:04:12', '2023-08-29 14:04:12'),
(30, 2, '5', 11, 9, 9, 53, 2, 3, '2023-08-29 14:15:37', '2023-08-29 14:15:37'),
(32, 2, '5', 11, 30, 45, 24, 2, 3, '2023-08-29 14:17:31', '2023-08-29 14:17:31'),
(33, 2, '5', 11, 12, 46, 25, 2, 3, '2023-08-29 14:19:14', '2023-08-29 14:19:14'),
(34, 2, '5', 11, 26, 48, 28, 2, 3, '2023-08-29 14:21:09', '2023-08-29 14:21:09'),
(35, 2, '5', 11, 26, 48, 28, 2, 3, '2023-08-29 14:21:09', '2023-08-29 14:21:09'),
(36, 2, '5', 11, 26, 49, 28, 2, 3, '2023-08-29 14:22:18', '2023-08-29 14:22:18'),
(37, 2, '5', 11, 27, 21, 55, 2, 3, '2023-08-29 14:24:55', '2023-08-29 14:24:55'),
(39, 2, '6', 11, 27, 11, 55, 2, 3, '2023-08-29 15:48:33', '2023-08-29 15:48:33'),
(51, 2, '10', 11, 27, 11, 55, 2, 3, '2023-08-29 16:34:15', '2023-08-30 09:14:55'),
(57, 2, '11', 11, 27, 11, 55, 2, 3, '2023-08-29 16:42:02', '2023-08-30 09:37:08'),
(58, 2, '11', 11, 27, 18, 55, 2, 3, '2023-08-29 16:42:39', '2023-08-30 09:37:20'),
(60, 2, '11', 11, 27, 19, 48, 2, 3, '2023-08-29 16:43:56', '2023-08-30 09:38:08'),
(61, 2, '11', 11, 27, 16, 55, 2, 3, '2023-08-29 16:44:37', '2023-08-30 09:38:23'),
(62, 2, '9', 11, 27, 11, 55, 2, 3, '2023-08-29 16:46:19', '2023-08-29 16:46:19'),
(64, 2, '12', 11, 27, 9, 55, 3, 3, '2023-08-29 16:49:47', '2023-08-30 12:47:51'),
(69, 2, '12', 12, 34, 93, 73, 2, 4, '2023-08-29 16:57:24', '2023-08-30 12:50:33'),
(72, 2, '10', 11, 27, 12, 66, 3, 3, '2023-08-30 09:18:08', '2023-08-30 09:18:08'),
(75, 2, '6', 11, 27, 75, 55, 2, 3, '2023-08-30 11:22:04', '2023-08-30 11:22:04'),
(77, 2, '6', 11, 7, 76, 6, 3, 3, '2023-08-30 11:23:18', '2023-08-30 11:23:18'),
(78, 2, '6', 12, 34, 78, 73, 3, 4, '2023-08-30 11:41:09', '2023-08-30 11:41:09'),
(79, 2, '6', 12, 34, 79, 73, 3, 4, '2023-08-30 11:46:31', '2023-08-30 11:46:31'),
(80, 2, '7', 12, 34, 11, 73, 3, 4, '2023-08-30 12:10:15', '2023-08-30 12:10:15'),
(81, 2, '7', 12, 34, 80, 30, 3, 4, '2023-08-30 12:10:37', '2023-08-30 12:10:37'),
(82, 2, '7', 12, 34, 80, 30, 3, 4, '2023-08-30 12:10:37', '2023-08-30 12:10:37'),
(83, 2, '7', 12, 34, 81, 30, 3, 4, '2023-08-30 12:11:11', '2023-08-30 12:11:11'),
(84, 2, '7', 12, 34, 82, 38, 3, 4, '2023-08-30 12:11:44', '2023-08-30 12:11:44'),
(85, 2, '7', 12, 34, 83, 39, 2, 4, '2023-08-30 12:12:05', '2023-08-30 12:12:05'),
(86, 2, '7', 12, 34, 84, 40, 3, 4, '2023-08-30 12:12:39', '2023-08-30 12:12:39'),
(87, 2, '7', 12, 34, 85, 41, 3, 4, '2023-08-30 12:13:01', '2023-08-30 12:13:01'),
(88, 2, '7', 12, 34, 86, 42, 3, 4, '2023-08-30 12:13:23', '2023-08-30 12:13:23'),
(89, 2, '7', 12, 34, 87, 43, 3, 4, '2023-08-30 12:13:50', '2023-08-30 12:13:50'),
(90, 2, '7', 12, 34, 88, 73, 3, 4, '2023-08-30 12:15:09', '2023-08-30 12:15:09'),
(91, 2, '8', 12, 34, 11, 73, 3, 4, '2023-08-30 12:17:21', '2023-08-30 12:17:21'),
(92, 2, '8', 12, 36, 89, 45, 3, 4, '2023-08-30 12:25:21', '2023-08-30 12:25:21'),
(93, 2, '8', 12, 35, 90, 44, 3, 4, '2023-08-30 12:25:59', '2023-08-30 12:25:59'),
(94, 2, '8', 12, 37, 91, 46, 3, 4, '2023-08-30 12:26:20', '2023-08-30 12:26:20'),
(95, 2, '8', 12, 34, 92, 73, 3, 4, '2023-08-30 12:26:39', '2023-08-30 12:26:39'),
(96, 2, '8', 12, 34, 88, 73, 3, 4, '2023-08-30 12:27:06', '2023-08-30 12:27:06'),
(97, 2, '12', 4, 10, 71, 70, 3, 2, '2023-08-30 12:53:19', '2023-08-30 12:53:19'),
(98, 2, '9', 11, 27, 51, 49, 3, 3, '2023-08-30 13:07:58', '2023-08-30 13:07:58'),
(99, 2, '9', 11, 27, 72, 50, 3, 3, '2023-08-30 13:08:54', '2023-08-30 13:08:54'),
(100, 2, '9', 11, 27, 53, 51, 3, 3, '2023-08-30 13:09:50', '2023-08-30 13:09:50'),
(101, 2, '9', 11, 27, 54, 57, 3, 3, '2023-08-30 13:10:53', '2023-08-30 13:10:53'),
(102, 2, '9', 11, 27, 55, 58, 3, 3, '2023-08-30 13:11:56', '2023-08-30 13:11:56'),
(103, 2, '9', 11, 27, 57, 60, 3, 3, '2023-08-30 13:12:36', '2023-08-30 13:12:36'),
(104, 2, '9', 11, 27, 59, 61, 3, 3, '2023-08-30 13:13:02', '2023-08-30 13:13:02'),
(105, 2, '9', 11, 27, 60, 62, 3, 3, '2023-08-30 13:14:14', '2023-08-30 13:14:14'),
(106, 2, '9', 11, 27, 73, 72, 3, 3, '2023-08-30 13:14:54', '2023-08-30 13:14:54'),
(107, 2, '9', 11, 27, 62, 63, 3, 3, '2023-08-30 13:15:22', '2023-08-30 13:15:22'),
(108, 2, '9', 11, 27, 63, 64, 3, 3, '2023-08-30 13:16:29', '2023-08-30 13:16:29'),
(109, 2, '9', 11, 27, 63, 64, 3, 3, '2023-08-30 13:16:29', '2023-08-30 13:16:29'),
(110, 2, '9', 11, 27, 65, 65, 3, 3, '2023-08-30 13:17:29', '2023-08-30 13:17:29'),
(111, 2, '9', 11, 27, 21, 55, 3, 3, '2023-08-30 13:19:15', '2023-08-30 13:19:15'),
(112, 2, '10', 11, 27, 74, 67, 3, 3, '2023-08-30 13:23:06', '2023-08-30 13:23:06'),
(113, 2, '10', 11, 38, 13, 55, 3, 3, '2023-08-30 13:25:00', '2023-08-30 13:25:00'),
(114, 2, '10', 11, 27, 14, 68, 2, 3, '2023-08-30 13:27:44', '2023-08-30 13:27:44'),
(115, 2, '10', 11, 27, 70, 69, 3, 3, '2023-08-30 13:28:30', '2023-08-30 13:28:30'),
(116, 2, '10', 11, 27, 15, 69, 3, 3, '2023-08-30 13:29:47', '2023-08-30 13:29:47'),
(117, 2, '10', 11, 27, 21, 55, 3, 3, '2023-08-30 13:30:27', '2023-08-30 13:30:27'),
(118, 5, '1', 4, 10, 3, 70, 2, 2, '2023-08-31 09:37:01', '2023-08-31 09:37:01'),
(119, 5, '1', 4, 10, 5, 70, 2, 2, '2023-08-31 09:41:46', '2023-08-31 09:41:46'),
(120, 5, '2', 11, 7, 6, 6, 2, 3, '2023-08-31 09:42:47', '2023-08-31 09:42:47'),
(121, 5, '2', 11, 7, 8, 6, 2, 3, '2023-08-31 09:43:49', '2023-08-31 09:43:49'),
(122, 5, '3', 11, 31, 9, 7, 2, 3, '2023-08-31 09:48:16', '2023-08-31 09:48:16'),
(123, 4, '1', 4, 10, 164, 70, 3, 2, '2023-08-31 09:52:03', '2023-08-31 09:52:03'),
(124, 4, '1', 11, 7, 95, 6, 3, 3, '2023-08-31 09:53:02', '2023-08-31 09:53:02'),
(125, 4, '2', 11, 7, 96, 6, 3, 3, '2023-08-31 09:54:02', '2023-08-31 09:59:00'),
(126, 4, '2', 11, 7, 97, 6, 3, 3, '2023-08-31 09:54:36', '2023-08-31 09:59:18'),
(127, 4, '3', 11, 7, 98, 6, 3, 3, '2023-08-31 09:55:20', '2023-08-31 09:59:43'),
(128, 5, '3', 11, 31, 10, 7, 2, 3, '2023-08-31 09:57:16', '2023-08-31 09:57:16'),
(129, 5, '7', 11, 27, 11, 55, 2, 3, '2023-08-31 09:57:25', '2023-08-31 09:57:25'),
(130, 5, '3', 11, 29, 29, 9, 2, 3, '2023-08-31 09:59:10', '2023-08-31 09:59:10'),
(131, 5, '7', 11, 27, 12, 55, 2, 3, '2023-08-31 09:59:12', '2023-08-31 09:59:12'),
(132, 5, '7', 11, 27, 12, 55, 2, 3, '2023-08-31 09:59:12', '2023-08-31 09:59:12'),
(133, 5, '3', 11, 8, 30, 10, 2, 3, '2023-08-31 09:59:55', '2023-08-31 09:59:55'),
(134, 5, '3', 11, 8, 30, 10, 2, 3, '2023-08-31 09:59:55', '2023-08-31 09:59:55'),
(135, 5, '3', 11, 8, 15, 11, 2, 3, '2023-08-31 10:01:13', '2023-08-31 10:01:13'),
(136, 5, '7', 11, 27, 68, 67, 3, 3, '2023-08-31 10:01:14', '2023-08-31 10:01:14'),
(137, 4, '3', 11, 43, 99, 3, 3, 3, '2023-08-31 10:01:29', '2023-08-31 10:01:29'),
(138, 4, '3', 11, 43, 99, 3, 3, 3, '2023-08-31 10:01:29', '2023-08-31 10:01:29'),
(139, 4, '3', 11, 43, 100, 74, 3, 3, '2023-08-31 10:02:29', '2023-08-31 10:02:29'),
(140, 5, '7', 11, 38, 14, 68, 2, 3, '2023-08-31 10:03:15', '2023-08-31 10:03:15'),
(141, 5, '3', 11, 33, 32, 13, 2, 3, '2023-08-31 10:03:30', '2023-08-31 10:03:30'),
(142, 4, '3', 11, 8, 101, 75, 3, 3, '2023-08-31 10:03:47', '2023-08-31 10:03:47'),
(143, 5, '7', 11, 38, 70, 69, 2, 3, '2023-08-31 10:05:13', '2023-08-31 10:05:13'),
(144, 4, '3', 11, 8, 102, 76, 2, 3, '2023-08-31 10:05:29', '2023-08-31 10:05:29'),
(145, 4, '3', 11, 48, 103, 77, 3, 3, '2023-08-31 10:06:31', '2023-08-31 10:06:31'),
(146, 4, '3', 11, 48, 104, 78, 3, 3, '2023-08-31 10:07:24', '2023-08-31 10:07:24'),
(147, 4, '3', 11, 19, 105, 79, 3, 3, '2023-08-31 10:08:21', '2023-08-31 10:08:21'),
(148, 5, '3', 11, 32, 34, 15, 2, 3, '2023-08-31 10:08:40', '2023-08-31 10:08:40'),
(149, 5, '7', 11, 27, 16, 55, 2, 3, '2023-08-31 10:09:17', '2023-08-31 10:09:17'),
(150, 4, '3', 11, 32, 106, 80, 3, 3, '2023-08-31 10:10:19', '2023-08-31 10:10:19'),
(151, 5, '8', 11, 27, 11, 55, 2, 3, '2023-08-31 10:10:22', '2023-08-31 10:10:22'),
(152, 5, '8', 11, 27, 18, 55, 2, 3, '2023-08-31 10:10:58', '2023-08-31 10:10:58'),
(153, 4, '3', 11, 49, 107, 123, 3, 3, '2023-08-31 10:11:25', '2023-08-31 10:11:25'),
(154, 5, '3', 11, 32, 35, 15, 2, 3, '2023-08-31 10:11:35', '2023-08-31 10:11:35'),
(155, 4, '3', 11, 49, 97, 123, 3, 3, '2023-08-31 10:12:00', '2023-08-31 10:12:00'),
(156, 5, '8', 11, 27, 19, 48, 2, 3, '2023-08-31 10:12:15', '2023-08-31 10:12:15'),
(157, 5, '4', 11, 9, 11, 53, 2, 3, '2023-08-31 10:12:37', '2023-08-31 10:12:37'),
(158, 5, '8', 11, 27, 16, 55, 2, 3, '2023-08-31 10:12:45', '2023-08-31 10:12:45'),
(159, 5, '9', 11, 27, 11, 55, 2, 3, '2023-08-31 10:13:35', '2023-08-31 10:13:35'),
(160, 5, '4', 11, 9, 36, 53, 2, 3, '2023-08-31 10:14:08', '2023-08-31 10:14:08'),
(161, 5, '4', 11, 9, 37, 18, 2, 3, '2023-08-31 10:16:28', '2023-08-31 10:16:28'),
(162, 5, '4', 11, 21, 38, 19, 2, 3, '2023-08-31 10:17:04', '2023-08-31 10:17:04'),
(163, 5, '4', 11, 21, 38, 19, 2, 3, '2023-08-31 10:17:04', '2023-08-31 10:17:04'),
(164, 5, '9', 11, 27, 20, 55, 2, 3, '2023-08-31 10:20:31', '2023-08-31 10:20:31'),
(165, 5, '9', 11, 27, 25, 55, 2, 3, '2023-08-31 10:21:44', '2023-08-31 10:21:44'),
(166, 4, '4', 11, 49, 98, 123, 3, 3, '2023-08-31 10:21:54', '2023-08-31 10:21:54'),
(167, 5, '9', 11, 27, 21, 55, 2, 3, '2023-08-31 10:22:25', '2023-08-31 10:22:25'),
(168, 5, '4', 11, 30, 39, 21, 2, 3, '2023-08-31 10:22:34', '2023-08-31 10:22:34'),
(169, 4, '4', 11, 49, 108, 123, 3, 3, '2023-08-31 10:23:04', '2023-08-31 10:23:04'),
(170, 5, '4', 11, 30, 42, 17, 2, 3, '2023-08-31 10:23:13', '2023-08-31 10:23:13'),
(171, 4, '4', 11, 44, 110, 83, 3, 3, '2023-08-31 10:24:12', '2023-08-31 10:28:46'),
(172, 4, '4', 11, 21, 111, 19, 3, 3, '2023-08-31 10:25:24', '2023-08-31 10:25:24'),
(174, 5, '10', 11, 7, 23, 6, 2, 3, '2023-08-31 10:26:20', '2023-08-31 10:26:20'),
(175, 5, '4', 11, 30, 43, 25, 2, 3, '2023-08-31 10:26:38', '2023-08-31 10:26:38'),
(176, 4, '4', 11, 44, 112, 86, 3, 3, '2023-08-31 10:26:49', '2023-08-31 10:29:18'),
(177, 4, '4', 11, 44, 113, 82, 3, 3, '2023-08-31 10:27:45', '2023-08-31 10:27:45'),
(179, 5, '4', 11, 9, 44, 53, 2, 3, '2023-08-31 10:28:10', '2023-08-31 10:28:10'),
(180, 5, '10', 11, 7, 24, 6, 3, 3, '2023-08-31 10:29:01', '2023-08-31 10:29:01'),
(181, 5, '10', 4, 10, 71, 70, 2, 2, '2023-08-31 10:29:45', '2023-08-31 10:29:45'),
(182, 4, '4', 11, 44, 114, 88, 3, 3, '2023-08-31 10:31:00', '2023-08-31 10:31:00'),
(185, 5, '5', 11, 9, 9, 53, 2, 3, '2023-08-31 10:31:19', '2023-08-31 10:31:19'),
(186, 4, '4', 11, 49, 97, 123, 2, 3, '2023-08-31 10:33:03', '2023-08-31 10:33:03'),
(187, 5, '5', 11, 30, 45, 24, 2, 3, '2023-08-31 10:33:45', '2023-08-31 10:33:45'),
(188, 4, '5', 11, 49, 161, 123, 3, 3, '2023-08-31 10:33:55', '2023-08-31 10:33:55'),
(189, 5, '5', 11, 12, 46, 25, 2, 3, '2023-08-31 10:36:14', '2023-08-31 10:36:14'),
(190, 5, '5', 11, 26, 48, 28, 2, 3, '2023-08-31 10:37:26', '2023-08-31 10:37:26'),
(191, 5, '5', 11, 27, 50, 55, 2, 3, '2023-08-31 10:38:50', '2023-08-31 10:38:50'),
(192, 5, '6', 11, 27, 11, 55, 2, 3, '2023-08-31 10:40:25', '2023-08-31 10:40:25'),
(193, 4, '5', 11, 44, 115, 24, 3, 3, '2023-08-31 10:40:33', '2023-08-31 10:40:33'),
(194, 4, '5', 11, 12, 116, 91, 3, 3, '2023-08-31 10:41:29', '2023-08-31 10:41:29'),
(195, 5, '6', 11, 27, 51, 48, 2, 3, '2023-08-31 10:41:47', '2023-08-31 10:41:47'),
(196, 4, '5', 11, 41, 117, 92, 3, 3, '2023-08-31 10:42:28', '2023-08-31 10:42:28'),
(197, 4, '5', 11, 42, 118, 95, 3, 3, '2023-08-31 10:43:02', '2023-08-31 10:43:02'),
(198, 5, '6', 11, 27, 54, 57, 2, 3, '2023-08-31 10:43:23', '2023-08-31 10:43:23'),
(199, 5, '6', 11, 27, 55, 58, 2, 3, '2023-08-31 10:44:27', '2023-08-31 10:44:27'),
(200, 6, '7', 11, 46, 98, 98, 2, 3, '2023-08-31 10:46:18', '2023-08-31 10:46:18'),
(201, 4, '5', 11, 42, 119, 96, 3, 3, '2023-08-31 10:47:24', '2023-08-31 10:47:24'),
(202, 6, '7', 11, 38, 165, 137, 3, 3, '2023-08-31 10:47:45', '2023-08-31 13:33:44'),
(204, 6, '7', 11, 47, 165, 140, 3, 3, '2023-08-31 10:47:50', '2023-08-31 11:11:54'),
(205, 5, '6', 11, 27, 57, 60, 2, 3, '2023-08-31 10:47:54', '2023-08-31 10:47:54'),
(206, 6, '7', 11, 46, 157, 139, 2, 3, '2023-08-31 10:48:37', '2023-08-31 10:48:37'),
(207, 5, '6', 11, 27, 59, 61, 2, 3, '2023-08-31 10:48:51', '2023-08-31 10:48:51'),
(208, 5, '6', 11, 27, 60, 62, 2, 3, '2023-08-31 10:50:14', '2023-08-31 10:50:14'),
(209, 4, '5', 11, 46, 121, 98, 3, 3, '2023-08-31 10:50:44', '2023-08-31 10:50:44'),
(210, 4, '5', 11, 46, 97, 98, 3, 3, '2023-08-31 10:51:12', '2023-08-31 10:51:12'),
(211, 5, '6', 11, 27, 62, 63, 2, 3, '2023-08-31 10:51:14', '2023-08-31 10:51:14'),
(212, 6, '7', 11, 38, 158, 141, 2, 3, '2023-08-31 10:51:16', '2023-08-31 10:51:16'),
(213, 5, '6', 11, 27, 63, 64, 2, 3, '2023-08-31 10:52:13', '2023-08-31 10:52:13'),
(215, 5, '6', 11, 27, 65, 65, 2, 3, '2023-08-31 10:54:04', '2023-08-31 10:54:04'),
(216, 6, '7', 11, 46, 166, 98, 2, 3, '2023-08-31 10:55:13', '2023-08-31 10:55:13'),
(217, 5, '6', 11, 27, 50, 55, 2, 3, '2023-08-31 10:55:42', '2023-08-31 10:55:42'),
(218, 4, '6', 11, 46, 122, 98, 3, 3, '2023-08-31 10:59:37', '2023-08-31 10:59:37'),
(219, 6, '8', 11, 46, 98, 98, 2, 3, '2023-08-31 10:59:56', '2023-08-31 10:59:56'),
(220, 4, '6', 11, 7, 123, 6, 3, 3, '2023-08-31 11:01:00', '2023-08-31 11:01:00'),
(221, 4, '6', 13, 40, 124, 99, 3, 4, '2023-08-31 11:01:47', '2023-08-31 11:01:47'),
(222, 6, '8', 11, 46, 160, 98, 2, 3, '2023-08-31 11:02:26', '2023-08-31 11:02:26'),
(223, 4, '6', 13, 40, 97, 99, 3, 4, '2023-08-31 11:02:41', '2023-08-31 11:02:41'),
(224, 4, '7', 13, 40, 98, 99, 3, 4, '2023-08-31 11:03:35', '2023-08-31 11:03:35'),
(225, 6, '8', 11, 46, 167, 98, 2, 3, '2023-08-31 11:03:48', '2023-08-31 11:03:48'),
(226, 4, '7', 13, 40, 125, 100, 3, 4, '2023-08-31 11:04:20', '2023-08-31 11:04:20'),
(227, 6, '8', 11, 46, 166, 98, 2, 3, '2023-08-31 11:04:30', '2023-08-31 11:04:30'),
(228, 4, '7', 13, 40, 126, 101, 3, 4, '2023-08-31 11:05:08', '2023-08-31 11:05:08'),
(229, 6, '9', 11, 46, 98, 98, 2, 3, '2023-08-31 11:05:14', '2023-08-31 11:05:14'),
(230, 4, '7', 13, 40, 127, 39, 3, 4, '2023-08-31 11:05:36', '2023-08-31 11:05:36'),
(231, 6, '9', 11, 46, 168, 98, 2, 3, '2023-08-31 11:05:53', '2023-08-31 11:05:53'),
(232, 4, '7', 13, 40, 128, 40, 3, 4, '2023-08-31 11:06:04', '2023-08-31 11:06:04'),
(233, 6, '9', 11, 46, 169, 98, 2, 3, '2023-08-31 11:06:33', '2023-08-31 11:06:33'),
(234, 4, '7', 13, 40, 130, 105, 3, 4, '2023-08-31 11:06:56', '2023-08-31 11:06:56'),
(235, 6, '9', 11, 46, 170, 98, 2, 3, '2023-08-31 11:07:18', '2023-08-31 11:07:18'),
(236, 5, '6', 11, 27, 53, 51, 2, 3, '2023-08-31 11:07:22', '2023-08-31 11:07:22'),
(237, 4, '7', 13, 40, 131, 106, 3, 4, '2023-08-31 11:07:45', '2023-08-31 11:07:45'),
(238, 6, '9', 11, 7, 171, 6, 2, 3, '2023-08-31 11:08:07', '2023-08-31 11:08:07'),
(239, 4, '7', 13, 40, 133, 108, 3, 4, '2023-08-31 11:08:13', '2023-08-31 11:08:13'),
(240, 6, '10', 11, 7, 172, 6, 2, 3, '2023-08-31 11:08:39', '2023-08-31 11:08:39'),
(241, 4, '7', 13, 40, 97, 99, 3, 4, '2023-08-31 11:08:52', '2023-08-31 11:08:52'),
(242, 6, '10', 11, 7, 173, 6, 3, 3, '2023-08-31 11:09:06', '2023-08-31 11:09:06'),
(243, 6, '10', 4, 10, 174, 70, 2, 2, '2023-08-31 11:10:03', '2023-08-31 11:10:03'),
(244, 4, '8', 13, 40, 98, 99, 3, 4, '2023-08-31 11:21:02', '2023-08-31 11:21:02'),
(245, 4, '8', 13, 40, 134, 45, 3, 4, '2023-08-31 11:24:14', '2023-08-31 11:24:14'),
(246, 4, '8', 13, 45, 135, 109, 3, 4, '2023-08-31 11:24:53', '2023-08-31 11:24:53'),
(247, 4, '8', 13, 39, 136, 112, 3, 4, '2023-08-31 11:27:02', '2023-08-31 11:27:02'),
(248, 4, '8', 13, 40, 138, 99, 3, 4, '2023-08-31 11:28:02', '2023-08-31 11:28:02'),
(249, 4, '8', 13, 40, 97, 99, 3, 4, '2023-08-31 11:29:55', '2023-08-31 11:29:55'),
(250, 4, '9', 11, 46, 98, 98, 3, 3, '2023-08-31 11:30:57', '2023-08-31 11:30:57'),
(251, 4, '9', 11, 46, 139, 117, 3, 3, '2023-08-31 11:40:14', '2023-08-31 11:44:55'),
(252, 4, '9', 11, 46, 140, 119, 3, 3, '2023-08-31 11:46:51', '2023-08-31 11:46:51'),
(253, 4, '9', 11, 46, 141, 121, 3, 3, '2023-08-31 11:47:57', '2023-08-31 11:47:57'),
(254, 4, '9', 11, 46, 142, 124, 3, 3, '2023-08-31 11:48:41', '2023-08-31 11:48:41'),
(255, 4, '9', 11, 46, 143, 125, 3, 3, '2023-08-31 11:49:23', '2023-08-31 11:49:23'),
(256, 4, '9', 11, 46, 144, 126, 3, 3, '2023-08-31 11:50:12', '2023-08-31 11:50:12'),
(257, 4, '9', 11, 46, 145, 127, 3, 3, '2023-08-31 11:51:12', '2023-08-31 11:51:12'),
(258, 4, '9', 11, 46, 146, 128, 3, 3, '2023-08-31 11:51:45', '2023-08-31 11:51:45'),
(259, 4, '9', 11, 46, 148, 131, 3, 3, '2023-08-31 11:52:40', '2023-08-31 11:52:40'),
(260, 4, '9', 11, 46, 150, 130, 3, 3, '2023-08-31 11:53:22', '2023-08-31 11:53:22'),
(261, 4, '9', 11, 46, 151, 132, 3, 3, '2023-08-31 11:54:07', '2023-08-31 11:54:07'),
(262, 2, '9', 11, 46, 152, 133, 3, 3, '2023-08-31 11:54:54', '2023-08-31 11:54:54'),
(263, 4, '9', 11, 46, 153, 135, 3, 3, '2023-08-31 11:55:34', '2023-08-31 11:55:34'),
(264, 4, '9', 11, 46, 154, 136, 3, 3, '2023-08-31 11:56:25', '2023-08-31 11:56:25'),
(265, 4, '9', 11, 46, 155, 98, 3, 3, '2023-08-31 11:57:02', '2023-08-31 11:57:02'),
(266, 4, '9', 11, 46, 97, 98, 3, 3, '2023-08-31 11:57:45', '2023-08-31 11:57:45'),
(267, 4, '10', 11, 46, 98, 98, 3, 3, '2023-08-31 11:59:48', '2023-08-31 11:59:48'),
(268, 4, '10', 11, 38, 156, 137, 3, 3, '2023-08-31 12:00:27', '2023-08-31 12:00:27'),
(269, 6, '1', 4, 10, 94, 70, 2, 2, '2023-08-31 12:00:41', '2023-08-31 12:00:41'),
(270, 4, '10', 11, 47, 158, 139, 3, 3, '2023-08-31 12:01:02', '2023-08-31 12:01:02'),
(271, 6, '1', 4, 10, 95, 70, 2, 2, '2023-08-31 12:01:28', '2023-08-31 12:01:28'),
(272, 4, '10', 11, 47, 158, 141, 3, 3, '2023-08-31 12:01:37', '2023-08-31 12:01:37'),
(273, 6, '2', 11, 7, 96, 6, 2, 3, '2023-08-31 12:03:07', '2023-08-31 12:03:07'),
(274, 6, '3', 11, 31, 99, 7, 2, 3, '2023-08-31 12:05:03', '2023-08-31 12:05:03'),
(275, 6, '3', 11, 43, 100, 74, 2, 3, '2023-08-31 12:05:55', '2023-08-31 12:05:55'),
(276, 4, '10', 11, 46, 159, 143, 3, 3, '2023-08-31 12:07:18', '2023-08-31 12:07:18'),
(277, 6, '3', 11, 8, 101, 75, 2, 3, '2023-08-31 12:07:33', '2023-08-31 12:07:33'),
(278, 4, '10', 11, 46, 155, 98, 3, 3, '2023-08-31 12:08:31', '2023-08-31 12:08:31'),
(279, 4, '10', 11, 46, 97, 98, 2, 3, '2023-08-31 12:08:59', '2023-08-31 12:08:59'),
(280, 4, '11', 11, 46, 98, 98, 3, 3, '2023-08-31 12:09:53', '2023-08-31 12:09:53'),
(281, 6, '3', 11, 8, 102, 76, 2, 3, '2023-08-31 12:10:35', '2023-08-31 12:10:35'),
(282, 6, '3', 11, 8, 104, 78, 2, 3, '2023-08-31 12:13:01', '2023-08-31 12:13:01'),
(283, 6, '3', 11, 8, 105, 79, 2, 3, '2023-08-31 12:14:47', '2023-08-31 12:14:47'),
(284, 4, '11', 11, 46, 160, 98, 3, 3, '2023-08-31 12:15:02', '2023-08-31 12:15:02'),
(285, 4, '11', 11, 46, 155, 98, 3, 3, '2023-08-31 12:15:51', '2023-08-31 12:15:51'),
(286, 6, '3', 11, 32, 106, 15, 2, 3, '2023-08-31 12:15:52', '2023-08-31 12:15:52'),
(287, 4, '11', 11, 46, 97, 98, 3, 3, '2023-08-31 12:16:16', '2023-08-31 12:16:16'),
(288, 4, '12', 11, 46, 161, 98, 3, 3, '2023-08-31 12:16:55', '2023-08-31 12:16:55'),
(289, 4, '12', 11, 40, 162, 99, 3, 3, '2023-08-31 12:17:38', '2023-08-31 12:17:38'),
(290, 6, '3', 11, 9, 107, 53, 2, 3, '2023-08-31 12:17:59', '2023-08-31 12:17:59'),
(291, 6, '4', 11, 9, 98, 53, 2, 3, '2023-08-31 12:20:14', '2023-08-31 12:20:14'),
(292, 6, '4', 11, 9, 109, 53, 2, 3, '2023-08-31 12:21:31', '2023-08-31 12:21:31'),
(293, 6, '4', 11, 9, 110, 83, 2, 3, '2023-08-31 12:23:41', '2023-08-31 12:23:41'),
(294, 6, '4', 11, 9, 110, 83, 2, 3, '2023-08-31 12:23:41', '2023-08-31 12:23:41'),
(295, 6, '4', 11, 21, 111, 19, 2, 3, '2023-08-31 12:25:01', '2023-08-31 12:25:01'),
(296, 6, '4', 11, 21, 112, 85, 2, 3, '2023-08-31 12:32:22', '2023-08-31 12:32:22'),
(297, 6, '4', 11, 21, 113, 82, 2, 3, '2023-08-31 12:35:34', '2023-08-31 12:35:34'),
(298, 6, '4', 11, 30, 114, 91, 2, 3, '2023-08-31 12:40:38', '2023-08-31 12:40:38'),
(299, 6, '6', 11, 46, 98, 98, 2, 3, '2023-08-31 12:42:17', '2023-08-31 12:42:17'),
(300, 6, '4', 11, 9, 97, 53, 2, 3, '2023-08-31 12:43:02', '2023-08-31 12:43:02'),
(301, 6, '6', 11, 46, 139, 115, 3, 3, '2023-08-31 12:44:02', '2023-08-31 12:44:02'),
(302, 6, '5', 11, 9, 98, 53, 2, 3, '2023-08-31 12:44:41', '2023-08-31 12:44:41'),
(303, 6, '6', 11, 46, 141, 121, 3, 3, '2023-08-31 12:45:19', '2023-08-31 12:45:19'),
(304, 6, '5', 11, 9, 115, 24, 2, 3, '2023-08-31 12:46:26', '2023-08-31 12:46:26'),
(305, 6, '6', 11, 27, 142, 124, 2, 3, '2023-08-31 12:46:57', '2023-08-31 12:46:57'),
(306, 6, '6', 11, 27, 143, 125, 2, 3, '2023-08-31 12:48:43', '2023-08-31 12:48:43'),
(308, 6, '5', 11, 12, 116, 91, 2, 3, '2023-08-31 12:51:44', '2023-08-31 12:51:44'),
(309, 6, '6', 11, 46, 144, 126, 2, 3, '2023-08-31 12:52:11', '2023-08-31 12:52:11'),
(310, 6, '6', 11, 46, 145, 127, 2, 3, '2023-08-31 12:53:16', '2023-08-31 12:53:16'),
(311, 6, '5', 11, 42, 118, 95, 2, 3, '2023-08-31 12:54:06', '2023-08-31 12:54:06'),
(312, 6, '6', 11, 46, 146, 129, 2, 3, '2023-08-31 12:54:09', '2023-08-31 12:54:09'),
(313, 6, '6', 11, 46, 148, 131, 2, 3, '2023-08-31 12:54:48', '2023-08-31 12:54:48'),
(314, 6, '6', 11, 46, 151, 132, 2, 3, '2023-08-31 12:55:31', '2023-08-31 12:55:31'),
(315, 6, '6', 11, 46, 152, 134, 2, 3, '2023-08-31 12:56:15', '2023-08-31 12:56:15'),
(316, 6, '5', 11, 42, 121, 96, 2, 3, '2023-08-31 12:56:41', '2023-08-31 12:56:41'),
(317, 6, '6', 11, 46, 153, 135, 2, 3, '2023-08-31 12:57:21', '2023-08-31 12:57:21'),
(318, 6, '5', 11, 46, 170, 98, 2, 3, '2023-08-31 12:57:33', '2023-08-31 12:57:33'),
(319, 6, '6', 11, 46, 154, 136, 2, 3, '2023-08-31 12:59:11', '2023-08-31 12:59:11'),
(320, 6, '6', 11, 46, 155, 98, 2, 3, '2023-08-31 12:59:43', '2023-08-31 12:59:43'),
(321, 6, '6', 11, 46, 170, 98, 3, 3, '2023-08-31 13:00:25', '2023-08-31 13:00:25'),
(322, 8, '1', 4, 10, 94, 70, 2, 2, '2023-09-02 13:55:11', '2023-09-02 13:55:11'),
(323, 8, '1', 4, 10, 172, 70, 2, 2, '2023-09-02 13:57:29', '2023-09-02 13:57:29'),
(324, 8, '2', 11, 7, 176, 6, 2, 3, '2023-09-02 14:01:51', '2023-09-02 14:01:51'),
(325, 8, '2', 11, 46, 170, 98, 2, 3, '2023-09-02 14:03:05', '2023-09-02 14:03:05'),
(326, 8, '3', 11, 46, 98, 98, 2, 3, '2023-09-02 14:04:55', '2023-09-02 14:04:55'),
(327, 8, '3', 11, 43, 99, 3, 2, 3, '2023-09-02 14:06:38', '2023-09-02 14:06:38'),
(328, 8, '3', 11, 8, 100, 5, 2, 3, '2023-09-02 14:08:38', '2023-09-02 14:08:38'),
(329, 8, '3', 11, 8, 101, 75, 2, 3, '2023-09-02 14:10:25', '2023-09-02 14:10:25'),
(330, 8, '3', 11, 8, 102, 76, 2, 3, '2023-09-02 14:14:32', '2023-09-02 14:14:32'),
(331, 8, '3', 11, 48, 103, 81, 2, 3, '2023-09-02 14:19:57', '2023-09-02 14:36:06'),
(332, 8, '3', 11, 8, 104, 78, 2, 3, '2023-09-02 14:22:04', '2023-09-02 14:22:04'),
(333, 8, '3', 11, 19, 105, 79, 2, 3, '2023-09-02 14:24:36', '2023-09-02 14:24:36'),
(335, 8, '3', 11, 32, 106, 80, 3, 3, '2023-09-02 14:26:04', '2023-09-02 14:26:04'),
(336, 8, '3', 11, 49, 107, 123, 2, 3, '2023-09-02 14:31:18', '2023-09-02 14:31:18'),
(337, 8, '4', 11, 49, 98, 123, 2, 3, '2023-09-02 14:45:54', '2023-09-02 14:49:07'),
(338, 8, '4', 11, 21, 110, 83, 2, 3, '2023-09-02 14:52:28', '2023-09-02 14:52:28'),
(339, 8, '4', 11, 21, 111, 84, 2, 3, '2023-09-02 14:54:47', '2023-09-02 14:54:47'),
(340, 8, '4', 11, 44, 177, 85, 2, 3, '2023-09-02 15:03:22', '2023-09-02 15:03:22'),
(341, 8, '4', 11, 44, 178, 86, 2, 3, '2023-09-02 15:04:04', '2023-09-02 15:04:04'),
(343, 8, '4', 11, 44, 179, 87, 2, 3, '2023-09-02 15:04:47', '2023-09-02 15:04:47'),
(344, 8, '4', 11, 44, 113, 154, 2, 3, '2023-09-02 15:08:16', '2023-09-02 15:08:16'),
(345, 8, '4', 11, 12, 180, 155, 2, 3, '2023-09-02 15:15:22', '2023-09-02 15:15:22'),
(346, 8, '4', 11, 27, 166, 115, 2, 3, '2023-09-02 15:18:28', '2023-09-02 15:18:28'),
(347, 8, '5', 11, 46, 98, 116, 2, 3, '2023-09-02 15:21:00', '2023-09-02 15:21:00'),
(348, 8, '5', 11, 46, 139, 117, 2, 3, '2023-09-02 15:23:04', '2023-09-02 15:23:04'),
(349, 8, '5', 11, 46, 181, 156, 2, 3, '2023-09-02 15:29:07', '2023-09-02 15:29:07'),
(350, 8, '5', 11, 27, 182, 121, 2, 3, '2023-09-02 15:32:09', '2023-09-02 15:32:09'),
(351, 8, '5', 11, 46, 142, 124, 3, 3, '2023-09-02 15:34:31', '2023-09-02 15:34:31'),
(352, 8, '5', 11, 46, 143, 125, 2, 3, '2023-09-02 15:35:48', '2023-09-02 15:35:48'),
(353, 8, '5', 11, 46, 144, 126, 2, 3, '2023-09-02 15:36:53', '2023-09-02 15:36:53'),
(354, 8, '5', 11, 46, 146, 129, 2, 3, '2023-09-02 15:38:35', '2023-09-02 15:38:35'),
(355, 8, '5', 11, 27, 149, 131, 2, 3, '2023-09-02 15:39:31', '2023-09-02 15:39:31'),
(356, 8, '5', 11, 46, 150, 130, 3, 3, '2023-09-02 15:40:57', '2023-09-02 15:40:57'),
(357, 8, '5', 11, 46, 151, 132, 2, 3, '2023-09-02 15:42:31', '2023-09-02 15:42:31'),
(358, 8, '5', 11, 27, 152, 134, 2, 3, '2023-09-02 15:44:14', '2023-09-02 15:44:14'),
(359, 8, '5', 11, 46, 153, 135, 2, 3, '2023-09-02 15:45:45', '2023-09-02 15:45:45'),
(360, 8, '5', 11, 46, 166, 98, 2, 3, '2023-09-02 15:47:10', '2023-09-02 15:47:10'),
(361, 8, '6', 11, 46, 98, 98, 2, 3, '2023-09-02 15:47:59', '2023-09-02 15:47:59'),
(362, 8, '6', 11, 38, 156, 138, 2, 3, '2023-09-02 15:52:46', '2023-09-02 15:52:46'),
(363, 8, '6', 11, 38, 157, 139, 2, 3, '2023-09-02 15:53:45', '2023-09-02 15:53:45'),
(364, 8, '6', 11, 47, 158, 141, 2, 3, '2023-09-02 15:55:21', '2023-09-02 15:55:21'),
(365, 8, '6', 11, 46, 159, 143, 2, 3, '2023-09-02 15:58:14', '2023-09-02 15:58:14'),
(366, 8, '6', 11, 7, 184, 6, 2, 3, '2023-09-02 16:04:45', '2023-09-02 16:04:45'),
(367, 8, '6', 15, 66, 185, 157, 2, 5, '2023-09-02 16:19:35', '2023-09-02 16:19:35'),
(368, 8, '7', 15, 51, 98, 159, 2, 5, '2023-09-02 16:26:53', '2023-09-02 16:26:53'),
(369, 8, '7', 15, 51, 186, 159, 2, 5, '2023-09-02 16:28:16', '2023-09-02 16:28:16'),
(370, 8, '7', 15, 51, 187, 161, 2, 5, '2023-09-02 16:36:11', '2023-09-02 16:36:11'),
(371, 8, '7', 15, 51, 188, 164, 2, 5, '2023-09-02 16:51:54', '2023-09-02 16:51:54'),
(372, 8, '7', 15, 51, 189, 166, 2, 5, '2023-09-02 16:57:59', '2023-09-02 16:57:59'),
(374, 8, '7', 15, 51, 190, 168, 2, 5, '2023-09-02 17:05:59', '2023-09-02 17:05:59'),
(375, 8, '7', 15, 51, 191, 171, 2, 5, '2023-09-02 17:25:03', '2023-09-02 17:25:03'),
(376, 8, '7', 15, 51, 192, 171, 2, 5, '2023-09-02 17:25:30', '2023-09-02 17:25:30'),
(377, 8, '7', 15, 51, 193, 173, 2, 5, '2023-09-02 17:32:48', '2023-09-02 17:32:48'),
(378, 8, '7', 15, 51, 194, 175, 2, 5, '2023-09-02 18:55:26', '2023-09-02 18:55:26'),
(379, 8, '7', 15, 51, 195, 177, 3, 5, '2023-09-02 18:57:26', '2023-09-02 18:57:26'),
(380, 8, '7', 15, 72, 197, 185, 2, 5, '2023-09-02 19:10:47', '2023-09-02 19:10:47'),
(381, 8, '8', 15, 72, 98, 185, 2, 5, '2023-09-02 19:11:50', '2023-09-02 19:11:50'),
(382, 8, '8', 15, 73, 198, 190, 2, 5, '2023-09-02 19:23:24', '2023-09-02 19:23:24'),
(383, 9, '1', 4, 10, 3, 70, 2, 2, '2023-09-02 20:07:37', '2023-09-02 20:07:37'),
(384, 10, '1', 4, 10, 164, 70, 2, 2, '2023-09-02 20:10:14', '2023-09-02 20:10:14'),
(385, 9, '2', 11, 7, 6, 6, 2, 3, '2023-09-02 20:11:35', '2023-09-02 20:22:03'),
(386, 10, '2', 11, 7, 176, 6, 2, 3, '2023-09-02 20:13:02', '2023-09-02 20:22:39'),
(387, 8, '8', 15, 76, 199, 196, 2, 5, '2023-09-02 20:15:51', '2023-09-02 20:15:51'),
(388, 9, '3', 11, 8, 204, 5, 2, 3, '2023-09-02 20:17:35', '2023-09-02 20:30:11'),
(389, 10, '3', 11, 8, 203, 5, 2, 3, '2023-09-02 20:19:45', '2023-09-02 20:30:41'),
(390, 8, '8', 15, 76, 200, 192, 2, 5, '2023-09-02 20:23:05', '2023-09-02 20:31:22'),
(391, 8, '8', 12, 76, 201, 192, 2, 5, '2023-09-02 20:27:16', '2023-09-02 20:27:16'),
(392, 8, '8', 15, 72, 202, 185, 2, 5, '2023-09-02 20:33:43', '2023-09-02 20:34:14'),
(393, 9, '3', 11, 8, 205, 10, 2, 3, '2023-09-02 20:34:49', '2023-09-02 20:39:09'),
(394, 8, '9', 15, 72, 98, 185, 2, 5, '2023-09-02 20:35:43', '2023-09-02 20:35:43'),
(395, 10, '3', 11, 8, 207, 75, 2, 3, '2023-09-02 20:37:36', '2023-09-02 20:37:36'),
(396, 8, '9', 15, 78, 208, 198, 2, 5, '2023-09-02 21:05:22', '2023-09-02 21:05:22'),
(397, 8, '9', 15, 78, 209, 198, 2, 5, '2023-09-02 21:06:03', '2023-09-02 21:06:03'),
(398, 8, '9', 15, 78, 210, 198, 2, 5, '2023-09-02 21:08:43', '2023-09-02 21:08:43'),
(399, 8, '9', 15, 78, 211, 199, 3, 5, '2023-09-02 21:19:55', '2023-09-02 21:19:55'),
(400, 8, '9', 15, 78, 212, 199, 2, 5, '2023-09-02 21:20:32', '2023-09-02 21:20:32'),
(401, 8, '9', 15, 78, 214, 199, 2, 5, '2023-09-02 21:22:07', '2023-09-02 21:22:07'),
(402, 8, '9', 15, 80, 215, 200, 3, 5, '2023-09-02 21:27:01', '2023-09-02 21:27:01'),
(403, 8, '9', 15, 80, 216, 200, 2, 5, '2023-09-02 21:30:11', '2023-09-02 21:30:11'),
(404, 8, '10', 15, 80, 98, 200, 3, 5, '2023-09-02 21:31:25', '2023-09-02 21:31:25'),
(405, 7, '10', 15, 81, 217, 202, 2, 5, '2023-09-02 21:39:30', '2023-09-02 21:39:30'),
(406, 8, '10', 15, 81, 218, 202, 2, 5, '2023-09-02 22:02:07', '2023-09-02 22:02:07'),
(407, 8, '10', 15, 80, 219, 204, 2, 5, '2023-09-02 22:02:44', '2023-09-02 22:02:44'),
(408, 8, '10', 15, 66, 220, 157, 2, 5, '2023-09-02 22:04:17', '2023-09-02 22:04:17'),
(409, 8, '11', 15, 66, 98, 157, 2, 5, '2023-09-02 22:04:58', '2023-09-02 22:04:58'),
(410, 8, '11', 15, 66, 222, 206, 2, 5, '2023-09-02 22:17:11', '2023-09-02 22:17:11'),
(411, 8, '11', 15, 66, 225, 208, 2, 5, '2023-09-02 22:17:43', '2023-09-02 22:17:43'),
(412, 8, '11', 15, 66, 220, 157, 2, 5, '2023-09-02 22:18:39', '2023-09-02 22:18:39'),
(413, 8, '12', 15, 66, 98, 157, 2, 5, '2023-09-02 22:19:45', '2023-09-02 22:19:45'),
(414, 8, '12', 11, 7, 226, 6, 2, 3, '2023-09-02 22:22:36', '2023-09-02 22:22:36'),
(415, 8, '12', 4, 10, 227, 70, 2, 2, '2023-09-02 22:23:16', '2023-09-02 22:23:16'),
(416, 9, '3', 11, 33, 31, 11, 2, 3, '2023-09-03 00:28:22', '2023-09-03 00:37:31'),
(418, 10, '3', 15, 48, 102, 76, 2, 3, '2023-09-03 00:29:23', '2023-09-03 00:29:23'),
(419, 9, '3', 11, 8, 228, 13, 2, 3, '2023-09-03 00:41:56', '2023-09-03 00:41:56'),
(420, 10, '3', 11, 8, 229, 78, 2, 3, '2023-09-03 00:42:37', '2023-09-03 00:42:37'),
(421, 9, '3', 11, 19, 230, 14, 2, 3, '2023-09-03 00:46:24', '2023-09-03 00:46:24'),
(422, 10, '3', 11, 19, 105, 79, 2, 3, '2023-09-03 00:49:06', '2023-09-03 00:49:06'),
(423, 9, '3', 11, 32, 34, 15, 2, 3, '2023-09-03 00:50:00', '2023-09-03 00:50:00'),
(424, 10, '3', 11, 32, 106, 15, 2, 3, '2023-09-03 00:51:57', '2023-09-03 00:51:57'),
(425, 9, '3', 11, 19, 233, 210, 2, 3, '2023-09-03 01:01:06', '2023-09-03 01:01:06'),
(426, 10, '3', 11, 19, 234, 210, 2, 3, '2023-09-03 01:01:53', '2023-09-03 01:01:53'),
(427, 9, '4', 11, 19, 235, 18, 2, 3, '2023-09-03 01:05:47', '2023-09-03 01:05:47'),
(428, 10, '4', 11, 19, 236, 83, 2, 3, '2023-09-03 01:06:57', '2023-09-03 01:06:57'),
(429, 10, '4', 11, 19, 236, 83, 2, 3, '2023-09-03 01:06:57', '2023-09-03 01:06:57'),
(430, 9, '4', 11, 21, 38, 19, 2, 3, '2023-09-03 01:07:48', '2023-09-03 01:07:48'),
(431, 10, '4', 11, 21, 111, 19, 2, 3, '2023-09-03 01:09:27', '2023-09-03 01:09:27'),
(432, 9, '4', 11, 21, 39, 21, 2, 3, '2023-09-03 01:10:57', '2023-09-03 01:10:57'),
(433, 10, '4', 11, 21, 112, 86, 2, 3, '2023-09-03 01:12:03', '2023-09-03 01:12:03'),
(434, 10, '4', 11, 21, 112, 86, 2, 3, '2023-09-03 01:12:03', '2023-09-03 01:12:03'),
(435, 9, '4', 11, 21, 41, 22, 2, 3, '2023-09-03 01:14:18', '2023-09-03 01:14:18'),
(436, 10, '4', 11, 21, 237, 87, 2, 3, '2023-09-03 01:17:33', '2023-09-03 01:17:33'),
(437, 9, '4', 11, 30, 42, 17, 2, 3, '2023-09-03 01:19:42', '2023-09-03 01:19:42'),
(438, 10, '4', 11, 30, 113, 82, 2, 3, '2023-09-03 01:20:33', '2023-09-03 01:20:33'),
(439, 10, '4', 11, 12, 180, 155, 2, 3, '2023-09-03 01:24:55', '2023-09-03 01:24:55'),
(440, 9, '4', 11, 12, 46, 211, 2, 3, '2023-09-03 01:31:24', '2023-09-03 01:31:24'),
(441, 9, '4', 11, 19, 233, 210, 2, 3, '2023-09-03 01:32:18', '2023-09-03 01:32:18'),
(442, 10, '4', 11, 19, 234, 210, 2, 3, '2023-09-03 01:32:46', '2023-09-03 01:32:46'),
(443, 9, '5', 11, 38, 239, 66, 3, 3, '2023-09-03 12:17:54', '2023-09-03 12:17:54'),
(444, 10, '5', 11, 38, 240, 137, 2, 3, '2023-09-03 12:19:52', '2023-09-03 12:19:52'),
(445, 9, '5', 14, 38, 14, 68, 2, 3, '2023-09-03 12:24:50', '2023-09-03 12:24:50'),
(446, 10, '5', 15, 38, 241, 141, 2, 3, '2023-09-03 12:26:50', '2023-09-03 12:26:50'),
(447, 9, '5', 14, 38, 70, 69, 2, 3, '2023-09-03 12:29:12', '2023-09-03 12:29:12'),
(448, 10, '5', 15, 38, 159, 143, 2, 3, '2023-09-03 12:30:33', '2023-09-03 12:30:33'),
(449, 9, '5', 11, 27, 16, 55, 2, 3, '2023-09-03 12:32:52', '2023-09-03 12:32:52'),
(450, 10, '5', 11, 46, 166, 98, 2, 3, '2023-09-03 12:34:02', '2023-09-03 12:34:02'),
(451, 9, '6', 11, 27, 51, 48, 2, 3, '2023-09-03 12:47:25', '2023-09-03 12:47:25'),
(452, 10, '6', 11, 46, 139, 116, 2, 3, '2023-09-03 12:48:56', '2023-09-03 12:48:56'),
(453, 10, '6', 11, 46, 139, 116, 2, 3, '2023-09-03 12:48:56', '2023-09-03 12:48:56'),
(454, 10, '6', 11, 46, 139, 116, 2, 3, '2023-09-03 12:50:34', '2023-09-03 12:50:34'),
(455, 9, '6', 11, 27, 72, 50, 2, 3, '2023-09-03 12:56:23', '2023-09-03 12:56:23'),
(456, 10, '6', 11, 27, 140, 120, 2, 3, '2023-09-03 12:57:31', '2023-09-03 12:57:31'),
(457, 9, '6', 11, 27, 53, 51, 2, 3, '2023-09-03 12:58:56', '2023-09-03 12:58:56'),
(458, 10, '6', 11, 27, 141, 121, 2, 3, '2023-09-03 12:59:52', '2023-09-03 12:59:52'),
(459, 9, '6', 11, 27, 54, 57, 2, 3, '2023-09-03 13:03:21', '2023-09-03 13:03:21'),
(460, 10, '6', 11, 46, 142, 124, 2, 3, '2023-09-03 13:13:15', '2023-09-03 13:13:15'),
(461, 9, '6', 11, 27, 55, 58, 2, 3, '2023-09-03 13:18:06', '2023-09-03 13:18:06'),
(462, 10, '6', 11, 46, 143, 125, 2, 3, '2023-09-03 13:19:57', '2023-09-03 13:19:57'),
(463, 10, '6', 11, 27, 144, 126, 2, 3, '2023-09-03 13:23:26', '2023-09-03 13:23:26'),
(464, 9, '6', 11, 27, 59, 61, 2, 3, '2023-09-03 13:25:07', '2023-09-03 13:25:07'),
(465, 10, '6', 11, 46, 146, 129, 2, 3, '2023-09-03 13:26:49', '2023-09-03 13:26:49'),
(466, 9, '6', 11, 27, 60, 62, 2, 3, '2023-09-03 13:28:02', '2023-09-03 13:28:02'),
(467, 10, '6', 11, 46, 148, 131, 2, 3, '2023-09-03 13:29:32', '2023-09-03 13:29:32'),
(468, 9, '6', 11, 27, 62, 63, 2, 3, '2023-09-03 13:32:10', '2023-09-03 13:32:10'),
(469, 9, '6', 11, 27, 62, 63, 2, 3, '2023-09-03 13:32:10', '2023-09-03 13:32:10'),
(470, 10, '6', 11, 46, 151, 132, 2, 3, '2023-09-03 13:33:42', '2023-09-03 13:33:42'),
(471, 9, '6', 11, 27, 63, 64, 2, 3, '2023-09-03 13:35:16', '2023-09-03 13:35:16'),
(472, 10, '6', 11, 46, 152, 133, 2, 3, '2023-09-03 13:37:19', '2023-09-03 13:37:19'),
(473, 9, '6', 11, 27, 65, 65, 2, 3, '2023-09-03 13:40:01', '2023-09-03 13:40:01'),
(474, 10, '6', 11, 46, 153, 135, 2, 3, '2023-09-03 13:41:27', '2023-09-03 13:41:27'),
(475, 9, '7', 11, 27, 242, 213, 2, 3, '2023-09-03 14:14:16', '2023-09-03 14:14:16'),
(476, 10, '7', 11, 46, 243, 212, 2, 3, '2023-09-03 14:14:56', '2023-09-03 14:14:56'),
(477, 9, '8', 11, 27, 244, 55, 2, 3, '2023-09-03 14:20:20', '2023-09-03 14:20:20'),
(478, 10, '8', 11, 46, 245, 98, 2, 3, '2023-09-03 14:21:32', '2023-09-03 14:21:32'),
(479, 9, '9', 14, 54, 246, 160, 2, 7, '2023-09-03 22:07:33', '2023-09-03 22:20:42'),
(480, 10, '9', 15, 51, 247, 160, 2, 5, '2023-09-03 22:09:47', '2023-09-03 22:21:20'),
(481, 9, '9', 14, 54, 248, 144, 2, 7, '2023-09-03 22:13:47', '2023-09-03 22:13:47'),
(482, 10, '9', 15, 51, 249, 148, 2, 5, '2023-09-03 22:19:00', '2023-09-03 22:19:00'),
(483, 9, '9', 14, 54, 250, 146, 2, 7, '2023-09-03 22:25:15', '2023-09-03 22:25:15'),
(484, 10, '9', 15, 54, 254, 146, 2, 5, '2023-09-03 22:26:17', '2023-09-03 22:26:17'),
(485, 9, '9', 14, 54, 253, 149, 2, 7, '2023-09-03 22:29:06', '2023-09-03 22:29:06'),
(486, 10, '9', 15, 51, 252, 149, 2, 5, '2023-09-03 22:30:20', '2023-09-03 22:30:20'),
(487, 9, '9', 14, 54, 261, 168, 2, 7, '2023-09-03 22:36:44', '2023-09-03 22:36:44'),
(488, 10, '9', 15, 51, 260, 168, 2, 5, '2023-09-03 22:37:44', '2023-09-03 22:37:44'),
(489, 9, '9', 14, 64, 255, 151, 2, 7, '2023-09-03 22:40:09', '2023-09-03 22:40:09'),
(490, 10, '9', 15, 65, 256, 150, 2, 5, '2023-09-03 22:41:15', '2023-09-03 22:41:15'),
(491, 9, '9', 14, 64, 81, 31, 2, 7, '2023-09-03 22:49:31', '2023-09-03 22:49:31'),
(493, 10, '9', 15, 65, 263, 171, 2, 5, '2023-09-03 22:55:00', '2023-09-03 22:55:00'),
(494, 10, '9', 15, 65, 192, 150, 2, 5, '2023-09-03 23:03:12', '2023-09-03 23:03:12'),
(495, 9, '9', 14, 64, 264, 172, 2, 7, '2023-09-03 23:09:54', '2023-09-03 23:09:54'),
(496, 9, '9', 14, 64, 257, 28, 2, 7, '2023-09-03 23:16:10', '2023-09-03 23:16:10'),
(497, 10, '9', 15, 65, 193, 153, 2, 5, '2023-09-03 23:18:57', '2023-09-03 23:18:57'),
(498, 9, '9', 14, 64, 259, 176, 2, 7, '2023-09-03 23:22:50', '2023-09-03 23:22:50'),
(499, 10, '9', 15, 65, 194, 175, 2, 5, '2023-09-03 23:31:38', '2023-09-03 23:31:38'),
(500, 9, '9', 14, 64, 262, 178, 2, 7, '2023-09-03 23:35:09', '2023-09-03 23:35:09'),
(501, 10, '9', 15, 65, 195, 177, 2, 5, '2023-09-03 23:37:26', '2023-09-03 23:37:26'),
(502, 10, '10', 13, 55, 198, 190, 2, 5, '2023-09-04 00:29:31', '2023-09-04 01:09:02'),
(503, 9, '10', 12, 55, 265, 193, 2, 7, '2023-09-04 00:32:11', '2023-09-04 01:11:31'),
(504, 10, '10', 13, 56, 200, 187, 2, 5, '2023-09-04 00:42:15', '2023-09-04 01:10:58'),
(505, 9, '10', 12, 56, 267, 186, 2, 7, '2023-09-04 00:43:44', '2023-09-04 01:10:29'),
(506, 9, '10', 12, 56, 268, 188, 2, 7, '2023-09-04 00:54:30', '2023-09-04 01:10:01'),
(507, 10, '10', 13, 56, 270, 189, 2, 5, '2023-09-04 00:55:47', '2023-09-04 01:09:34'),
(508, 9, '10', 12, 55, 271, 191, 2, 7, '2023-09-04 01:14:58', '2023-09-04 01:14:58'),
(509, 10, '10', 13, 55, 273, 192, 2, 5, '2023-09-04 01:16:08', '2023-09-04 01:16:08'),
(510, 10, '10', 13, 55, 273, 192, 2, 5, '2023-09-04 01:16:08', '2023-09-04 01:16:08'),
(511, 9, '10', 14, 54, 274, 185, 2, 7, '2023-09-04 01:19:53', '2023-09-04 01:19:53'),
(512, 10, '10', 15, 51, 202, 185, 2, 5, '2023-09-04 01:21:16', '2023-09-04 01:21:16'),
(513, 9, '11', 14, 75, 275, 194, 2, 7, '2023-09-04 01:45:15', '2023-09-04 01:45:15'),
(514, 10, '11', 15, 75, 208, 195, 2, 5, '2023-09-04 01:48:30', '2023-09-04 01:48:30'),
(515, 9, '11', 14, 75, 276, 38, 2, 7, '2023-09-04 01:52:52', '2023-09-04 01:52:52'),
(516, 10, '11', 15, 75, 277, 101, 2, 5, '2023-09-04 01:55:39', '2023-09-04 01:55:39'),
(517, 9, '11', 14, 75, 280, 194, 2, 7, '2023-09-04 01:58:31', '2023-09-04 01:58:31'),
(518, 9, '11', 14, 75, 280, 194, 2, 7, '2023-09-04 01:58:31', '2023-09-04 01:58:31'),
(519, 10, '11', 15, 75, 279, 194, 2, 5, '2023-09-04 02:01:07', '2023-09-04 02:01:07'),
(520, 9, '11', 14, 78, 281, 199, 2, 7, '2023-09-04 02:09:46', '2023-09-04 02:09:46'),
(521, 10, '11', 15, 78, 211, 199, 2, 5, '2023-09-04 02:10:30', '2023-09-04 02:10:30'),
(522, 10, '11', 15, 78, 211, 199, 2, 5, '2023-09-04 02:10:30', '2023-09-04 02:10:30'),
(523, 10, '11', 15, 78, 211, 199, 2, 5, '2023-09-04 02:11:21', '2023-09-04 02:11:21'),
(524, 9, '11', 14, 78, 283, 199, 2, 7, '2023-09-04 02:12:51', '2023-09-04 02:12:51'),
(525, 9, '11', 14, 78, 284, 199, 2, 7, '2023-09-04 02:13:46', '2023-09-04 02:13:46'),
(526, 10, '11', 15, 78, 212, 199, 2, 5, '2023-09-04 02:15:49', '2023-09-04 02:15:49'),
(527, 9, '11', 14, 78, 285, 199, 2, 7, '2023-09-04 02:16:57', '2023-09-04 02:16:57'),
(528, 10, '11', 15, 78, 214, 199, 2, 5, '2023-09-04 02:17:54', '2023-09-04 02:17:54'),
(529, 10, '11', 15, 57, 215, 200, 2, 5, '2023-09-04 02:20:30', '2023-09-04 02:20:30'),
(530, 9, '11', 14, 57, 286, 201, 2, 7, '2023-09-04 02:21:52', '2023-09-04 02:21:52'),
(531, 9, '12', 14, 60, 287, 205, 2, 7, '2023-09-04 11:48:06', '2023-09-04 11:48:06'),
(532, 10, '12', 15, 61, 288, 204, 2, 5, '2023-09-04 11:49:03', '2023-09-04 11:49:03'),
(533, 9, '12', 14, 62, 290, 203, 2, 7, '2023-09-04 11:52:38', '2023-09-04 11:52:38'),
(534, 10, '12', 15, 63, 289, 202, 2, 5, '2023-09-04 11:55:46', '2023-09-04 11:55:46'),
(535, 9, '12', 15, 62, 291, 203, 2, 7, '2023-09-04 11:58:24', '2023-09-04 11:58:24'),
(536, 10, '12', 15, 63, 292, 202, 2, 5, '2023-09-04 12:00:26', '2023-09-04 12:00:26'),
(537, 9, '12', 14, 62, 295, 203, 2, 7, '2023-09-04 12:03:43', '2023-09-04 12:03:43'),
(538, 10, '12', 15, 63, 294, 202, 2, 5, '2023-09-04 12:06:53', '2023-09-04 12:06:53'),
(539, 9, '13', 14, 54, 296, 214, 2, 7, '2023-09-04 12:21:48', '2023-09-04 12:21:48'),
(540, 10, '13', 15, 51, 298, 159, 2, 5, '2023-09-04 12:22:30', '2023-09-04 12:22:30'),
(541, 9, '13', 14, 52, 297, 158, 2, 7, '2023-09-04 12:23:09', '2023-09-04 12:24:44'),
(542, 10, '13', 15, 66, 299, 157, 2, 7, '2023-09-04 12:23:56', '2023-09-04 12:23:56'),
(543, 9, '14', 14, 52, 300, 216, 2, 7, '2023-09-04 12:58:31', '2023-09-04 12:58:31'),
(544, 9, '14', 14, 52, 302, 219, 2, 7, '2023-09-04 13:00:25', '2023-09-04 13:00:25'),
(545, 9, '14', 14, 52, 305, 158, 2, 7, '2023-09-04 13:01:03', '2023-09-04 13:01:03'),
(546, 10, '14', 15, 66, 301, 217, 2, 5, '2023-09-04 13:01:50', '2023-09-04 13:01:50'),
(547, 10, '14', 15, 66, 304, 218, 2, 5, '2023-09-04 13:02:45', '2023-09-04 13:02:45'),
(548, 10, '14', 15, 66, 306, 157, 2, 5, '2023-09-04 13:03:26', '2023-09-04 13:03:26'),
(549, 9, '15', 14, 52, 307, 158, 2, 7, '2023-09-04 13:04:26', '2023-09-04 13:04:26'),
(550, 10, '15', 15, 66, 308, 157, 2, 5, '2023-09-04 13:07:14', '2023-09-04 13:07:14'),
(551, 7, '1', 4, 10, 309, 70, 2, 2, '2023-09-04 15:59:44', '2023-09-04 15:59:44'),
(552, 7, '1', 4, 10, 23, 70, 2, 2, '2023-09-04 16:00:55', '2023-09-04 16:00:55'),
(553, 7, '2', 11, 7, 310, 6, 2, 3, '2023-09-04 16:04:50', '2023-09-04 16:04:50'),
(554, 7, '2', 11, 27, 311, 55, 2, 3, '2023-09-04 16:05:34', '2023-09-04 16:05:34'),
(555, 7, '3', 11, 27, 11, 55, 2, 3, '2023-09-04 16:06:57', '2023-09-04 16:06:57'),
(556, 7, '3', 11, 29, 312, 8, 2, 3, '2023-09-04 16:15:02', '2023-09-04 16:15:02'),
(557, 7, '3', 11, 8, 313, 9, 2, 3, '2023-09-04 16:16:25', '2023-09-04 16:16:25'),
(558, 7, '3', 11, 8, 315, 10, 2, 3, '2023-09-04 16:18:30', '2023-09-04 16:18:30'),
(559, 7, '3', 11, 27, 316, 12, 2, 3, '2023-09-04 16:23:02', '2023-09-04 16:23:02'),
(560, 7, '3', 11, 8, 317, 16, 2, 3, '2023-09-04 16:25:49', '2023-09-04 16:25:49'),
(561, 7, '3', 11, 8, 318, 13, 2, 3, '2023-09-04 16:28:05', '2023-09-04 16:28:05'),
(562, 7, '3', 11, 19, 319, 14, 2, 3, '2023-09-04 16:28:45', '2023-09-04 16:28:45'),
(563, 7, '3', 11, 30, 320, 15, 2, 3, '2023-09-04 16:32:00', '2023-09-04 16:32:00'),
(564, 7, '3', 11, 9, 322, 53, 2, 3, '2023-09-04 16:33:58', '2023-09-04 16:33:58'),
(565, 7, '4', 11, 9, 11, 53, 2, 3, '2023-09-04 16:35:07', '2023-09-04 16:35:07'),
(566, 7, '4', 11, 9, 323, 18, 2, 3, '2023-09-04 16:45:59', '2023-09-04 16:45:59'),
(568, 7, '4', 11, 30, 324, 19, 2, 3, '2023-09-04 16:47:16', '2023-09-04 16:47:16'),
(569, 7, '4', 11, 30, 325, 20, 2, 3, '2023-09-04 16:49:59', '2023-09-04 16:49:59'),
(570, 7, '4', 11, 30, 326, 21, 2, 3, '2023-09-04 16:50:34', '2023-09-04 16:50:34'),
(571, 7, '4', 11, 30, 327, 223, 2, 3, '2023-09-04 16:55:29', '2023-09-04 16:55:29'),
(572, 7, '4', 11, 12, 328, 225, 2, 3, '2023-09-04 17:01:36', '2023-09-04 17:01:36'),
(573, 7, '4', 11, 27, 329, 55, 2, 3, '2023-09-04 17:02:38', '2023-09-04 17:02:38'),
(574, 7, '5', 11, 27, 11, 55, 2, 3, '2023-09-04 17:03:11', '2023-09-04 17:03:11'),
(576, 7, '5', 11, 27, 330, 49, 2, 3, '2023-09-04 17:11:27', '2023-09-04 17:11:27'),
(577, 7, '5', 11, 27, 331, 50, 2, 3, '2023-09-04 17:13:38', '2023-09-04 17:13:38'),
(578, 7, '5', 11, 27, 333, 51, 2, 3, '2023-09-04 17:18:04', '2023-09-04 17:18:04'),
(579, 7, '5', 11, 27, 334, 57, 2, 3, '2023-09-04 17:19:48', '2023-09-04 17:19:48'),
(580, 7, '5', 11, 27, 335, 58, 2, 3, '2023-09-04 17:20:30', '2023-09-04 17:20:30'),
(581, 7, '5', 11, 27, 336, 59, 2, 3, '2023-09-04 17:21:54', '2023-09-04 17:21:54'),
(582, 7, '5', 11, 27, 336, 59, 2, 3, '2023-09-04 17:21:54', '2023-09-04 17:21:54'),
(583, 7, '5', 11, 27, 337, 61, 2, 3, '2023-09-04 17:22:56', '2023-09-04 17:22:56'),
(584, 7, '5', 11, 27, 338, 62, 2, 3, '2023-09-04 17:24:04', '2023-09-04 17:24:04'),
(585, 7, '5', 11, 27, 339, 72, 2, 3, '2023-09-04 17:24:51', '2023-09-04 17:24:51'),
(586, 7, '5', 11, 27, 340, 63, 2, 3, '2023-09-04 17:25:44', '2023-09-04 17:25:44'),
(587, 7, '5', 11, 27, 341, 64, 2, 3, '2023-09-04 17:26:21', '2023-09-04 17:26:21'),
(588, 7, '5', 11, 27, 342, 65, 2, 3, '2023-09-04 17:27:08', '2023-09-04 17:27:08'),
(589, 7, '5', 11, 27, 329, 55, 2, 3, '2023-09-04 17:28:53', '2023-09-04 17:28:53'),
(591, 7, '6', 11, 27, 11, 55, 2, 3, '2023-09-04 17:29:43', '2023-09-04 17:29:43'),
(593, 7, '6', 11, 90, 360, 66, 2, 3, '2023-09-04 17:46:22', '2023-09-04 17:46:22'),
(594, 7, '6', 11, 90, 361, 67, 2, 3, '2023-09-04 17:47:04', '2023-09-04 17:47:04'),
(595, 7, '6', 11, 28, 362, 68, 2, 3, '2023-09-04 17:52:00', '2023-09-04 17:52:00'),
(597, 7, '6', 11, 28, 363, 69, 2, 3, '2023-09-04 17:53:21', '2023-09-04 17:53:21'),
(598, 7, '6', 11, 7, 364, 6, 2, 3, '2023-09-04 17:54:22', '2023-09-04 17:54:22'),
(599, 7, '6', 14, 52, 365, 158, 2, 7, '2023-09-04 17:55:24', '2023-09-04 17:55:24'),
(600, 7, '7', 14, 69, 11, 160, 2, 7, '2023-09-04 17:56:20', '2023-09-04 17:56:20'),
(601, 7, '7', 11, 69, 366, 160, 2, 7, '2023-09-04 18:06:51', '2023-09-04 18:06:51'),
(602, 7, '7', 14, 51, 367, 144, 2, 7, '2023-09-04 18:08:07', '2023-09-04 18:08:07'),
(604, 7, '7', 14, 69, 368, 162, 2, 7, '2023-09-04 18:09:41', '2023-09-04 18:09:41'),
(605, 7, '7', 14, 69, 370, 167, 2, 7, '2023-09-04 18:12:50', '2023-09-04 18:12:50'),
(606, 7, '7', 14, 69, 371, 165, 2, 7, '2023-09-04 18:15:00', '2023-09-04 18:15:00'),
(607, 7, '7', 14, 69, 372, 172, 2, 7, '2023-09-04 18:16:34', '2023-09-04 18:16:34'),
(609, 7, '7', 14, 69, 373, 172, 3, 7, '2023-09-04 18:20:05', '2023-09-04 18:20:05'),
(612, 7, '7', 14, 69, 374, 174, 2, 7, '2023-09-04 18:22:33', '2023-09-04 18:22:33'),
(613, 7, '7', 14, 69, 375, 176, 2, 7, '2023-09-04 18:23:42', '2023-09-04 18:23:42'),
(614, 7, '7', 14, 72, 376, 178, 2, 7, '2023-09-04 18:25:26', '2023-09-04 18:25:26'),
(615, 7, '7', 14, 72, 377, 185, 2, 7, '2023-09-04 18:26:19', '2023-09-04 18:26:19'),
(616, 11, '1', 16, 84, 344, 229, 2, 11, '2023-09-04 19:16:01', '2023-09-04 19:16:01'),
(617, 12, '1', 16, 84, 345, 229, 2, 10, '2023-09-04 19:17:02', '2023-09-04 19:17:02'),
(618, 11, '2', 11, 85, 347, 6, 2, 8, '2023-09-04 19:19:44', '2023-09-04 19:19:44'),
(619, 12, '2', 11, 85, 346, 6, 2, 8, '2023-09-04 19:20:40', '2023-09-04 19:20:40'),
(620, 11, '2', 11, 86, 349, 231, 2, 8, '2023-09-04 19:25:47', '2023-09-04 19:25:47'),
(621, 12, '2', 11, 87, 348, 230, 2, 8, '2023-09-04 19:26:38', '2023-09-04 19:26:38'),
(622, 11, '3', 11, 86, 351, 221, 2, 8, '2023-09-04 19:28:15', '2023-09-04 19:28:15'),
(623, 12, '3', 11, 87, 350, 220, 2, 8, '2023-09-04 19:29:05', '2023-09-04 19:29:05'),
(624, 11, '3', 11, 89, 354, 228, 2, 9, '2023-09-04 19:32:41', '2023-09-04 19:32:41'),
(625, 12, '3', 11, 88, 352, 227, 2, 8, '2023-09-04 19:34:35', '2023-09-04 19:34:35'),
(626, 11, '3', 11, 8, 357, 226, 2, 9, '2023-09-04 19:36:54', '2023-09-04 19:36:54'),
(627, 12, '3', 11, 8, 356, 224, 2, 8, '2023-09-04 19:37:53', '2023-09-04 19:37:53'),
(628, 11, '3', 11, 33, 378, 12, 2, 9, '2023-09-04 20:06:16', '2023-09-04 20:06:16'),
(629, 12, '3', 11, 33, 379, 77, 2, 8, '2023-09-04 20:07:30', '2023-09-04 20:07:30'),
(630, 11, '3', 11, 9, 380, 53, 2, 9, '2023-09-04 20:10:13', '2023-09-04 20:10:13'),
(631, 12, '3', 11, 49, 381, 123, 2, 8, '2023-09-04 20:11:51', '2023-09-04 20:11:51'),
(632, 11, '4', 11, 91, 382, 233, 2, 9, '2023-09-04 20:41:16', '2023-09-04 20:41:16'),
(633, 12, '4', 11, 91, 383, 232, 2, 8, '2023-09-04 20:42:08', '2023-09-04 20:42:08'),
(634, 12, '4', 11, 91, 383, 232, 2, 8, '2023-09-04 20:42:09', '2023-09-04 20:42:09'),
(635, 11, '4', 11, 30, 325, 20, 2, 9, '2023-09-04 20:47:31', '2023-09-04 20:47:31'),
(636, 12, '4', 11, 44, 177, 85, 2, 8, '2023-09-04 20:49:38', '2023-09-04 20:49:38'),
(637, 11, '4', 11, 21, 324, 19, 2, 9, '2023-09-04 20:54:13', '2023-09-04 20:54:13'),
(638, 12, '4', 11, 21, 111, 19, 2, 8, '2023-09-04 20:55:21', '2023-09-04 20:55:21'),
(639, 11, '4', 11, 30, 384, 18, 2, 9, '2023-09-04 21:03:04', '2023-09-04 21:03:04'),
(640, 12, '4', 11, 44, 386, 83, 2, 8, '2023-09-04 21:03:51', '2023-09-04 21:03:51'),
(641, 11, '4', 11, 30, 390, 15, 2, 9, '2023-09-04 21:16:16', '2023-09-04 21:16:16'),
(642, 12, '4', 11, 44, 389, 15, 2, 8, '2023-09-04 21:17:28', '2023-09-04 21:17:28'),
(643, 11, '4', 11, 9, 380, 53, 2, 9, '2023-09-04 21:20:15', '2023-09-04 21:20:15'),
(644, 12, '4', 11, 49, 381, 123, 2, 8, '2023-09-04 21:21:17', '2023-09-04 21:21:17'),
(645, 11, '5', 11, 93, 392, 235, 2, 9, '2023-09-04 23:51:41', '2023-09-04 23:51:41'),
(646, 12, '5', 11, 92, 391, 234, 2, 8, '2023-09-04 23:52:41', '2023-09-04 23:52:41'),
(647, 11, '5', 11, 19, 395, 210, 2, 9, '2023-09-04 23:53:46', '2023-09-04 23:53:46'),
(648, 12, '5', 11, 19, 394, 210, 2, 8, '2023-09-04 23:54:18', '2023-09-04 23:54:18'),
(649, 12, '5', 11, 94, 396, 237, 2, 8, '2023-09-04 23:56:50', '2023-09-04 23:56:50'),
(650, 11, '5', 11, 94, 397, 238, 2, 9, '2023-09-04 23:57:48', '2023-09-04 23:57:48'),
(651, 11, '5', 11, 9, 380, 53, 2, 9, '2023-09-04 23:59:32', '2023-09-04 23:59:32'),
(652, 12, '5', 11, 49, 381, 123, 2, 8, '2023-09-05 00:00:32', '2023-09-05 00:00:32'),
(654, 14, '6', 18, 33, 19, 22, 4, 14, '2023-10-14 22:04:51', '2023-10-14 22:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `digital_payment`
--

CREATE TABLE `digital_payment` (
  `id` bigint(20) NOT NULL,
  `gti_id` int(11) NOT NULL,
  `gti_name` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `gti_total_days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneurs`
--

CREATE TABLE `entrepreneurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flight_arrangement`
--

CREATE TABLE `flight_arrangement` (
  `id` bigint(20) NOT NULL,
  `departure_date` datetime NOT NULL,
  `departure_city` varchar(255) NOT NULL,
  `arrival_city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ground_transportation_activity_fees`
--

CREATE TABLE `ground_transportation_activity_fees` (
  `id` bigint(20) NOT NULL,
  `gt_id` int(11) NOT NULL,
  `gt_activity_name` varchar(255) NOT NULL,
  `fee` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gti`
--

CREATE TABLE `gti` (
  `id` bigint(20) NOT NULL,
  `gti_name` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `gti_total_days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gti`
--

INSERT INTO `gti` (`id`, `gti_name`, `hotel_address`, `gti_total_days`, `created_at`, `updated_at`) VALUES
(2, '12 Days Holy Land and Greece Tours', 'xxxxxxx', 12, '2023-08-25 10:17:18', '2023-08-31 09:06:06'),
(4, 'Tour de 12 días por Tierra Santa y Grecia', 'Netanya', 12, '2023-08-31 05:24:25', '2023-08-31 09:06:37'),
(5, '10 Days Holy Land Tours', 'xxx', 10, '2023-08-31 09:28:51', '2023-08-31 09:28:51'),
(6, 'Tour de 10 dias a Tierra Santa', 'xxx', 10, '2023-08-31 09:31:14', '2023-08-31 09:31:14'),
(7, '12 Days Holy Land and Turkey Tours', 'xxxx', 12, '2023-09-01 15:05:12', '2023-09-01 15:05:12'),
(8, 'Tour de 12 días por Tierra Santa y Turquía', 'xxx', 12, '2023-09-01 15:05:50', '2023-09-01 15:05:50'),
(9, '14 Days Tour of Israel and Türkiye', 'xxx', 14, '2023-09-01 23:01:10', '2023-09-02 00:01:30'),
(10, 'Tour de 14 días por Israel y Turquia', 'xxx', 14, '2023-09-02 20:02:46', '2023-09-02 20:02:46'),
(11, '12 Days Holy Land Tours', 'xxx', 12, '2023-09-04 17:07:15', '2023-09-04 17:07:15'),
(12, 'Tour de 12 días por Tierra Santa', 'xxx', 12, '2023-09-04 17:08:23', '2023-09-04 17:08:23'),
(13, '10 por venezuela y colombia', 'av. abc 123 perimetral', 10, '2023-10-03 18:46:22', '2023-10-03 18:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` bigint(20) NOT NULL,
  `guide_first_n` varchar(255) NOT NULL,
  `guide_m_name` varchar(255) NOT NULL,
  `guide_l_name` varchar(255) NOT NULL,
  `guide_address` varchar(255) NOT NULL,
  `guide_city` varchar(255) NOT NULL,
  `guide_country` varchar(255) NOT NULL,
  `guide_phone` varchar(16) NOT NULL,
  `guide_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `guide_fees_per_day` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `guide_first_n`, `guide_m_name`, `guide_l_name`, `guide_address`, `guide_city`, `guide_country`, `guide_phone`, `guide_email`, `password`, `guide_fees_per_day`, `created_at`, `updated_at`) VALUES
(3, 'Enrique', 'juan', 'reyes', 'down st 123', 'rome', 'Aruba', '04249102323', 'hola@gmail.es', '$2y$10$D0Pj66L7v6uI4CEIoKgku.fHzalILMGgoJ8fJSd6VuW.6qlWWdT.2', 35, '2023-10-05 14:13:24', '2023-10-14 21:09:22'),
(6, 'jose', 'andres', 'lozada', 'sand avenue 123', 'egypt', 'Finland', '03331251', 'jose@gmail.com', '$2y$10$ElKLLXGsX8vSBTa33DEkCO9sYOzHDglWajn2zixKv4kw577gO8zoW', 25, '2023-10-13 19:09:20', '2023-10-14 23:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `guide_reservation`
--

CREATE TABLE `guide_reservation` (
  `id` bigint(20) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `tourleader_tour` varchar(255) NOT NULL,
  `reservation_date` datetime NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `confirm_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guide_reservation`
--

INSERT INTO `guide_reservation` (`id`, `guide_id`, `tourleader_tour`, `reservation_date`, `from_date`, `to_date`, `confirm_date`, `created_at`, `updated_at`) VALUES
(30, 6, '4', '2023-10-20 00:00:00', '2023-10-20 00:00:00', '2023-10-20 00:00:00', NULL, '2023-10-14 23:06:09', '2023-10-14 23:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` bigint(20) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `hotel_city` varchar(255) NOT NULL,
  `hotel_country` varchar(255) NOT NULL,
  `hotel_phone` varchar(16) NOT NULL,
  `hotel_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `hotel_address`, `hotel_city`, `hotel_country`, `hotel_phone`, `hotel_email`, `password`, `created_at`, `updated_at`) VALUES
(8, 'Sea Gul', 'sadsad', 'dfds', 'dsfds', '32432', 'sea@gmail.com', '$2y$10$2xF8.K7oWOf2oI.bPcrIC.z4PbZhe3FZQJOeQ.VTpF56HUpA4MMuC', '2023-08-08 05:03:15', '2023-10-09 21:08:19'),
(9, 'laja real', 'av mariño 134', 'Ciudad bolivar', 'Venezuela', '34634343', 'lajareal@gmail.com', '$2y$10$LlAR/LyzGcpAwNPnrUWJhekhiwfGwyRRc/HHGSc0K9IC6xG7BNc1m', '2023-10-06 13:45:06', '2023-10-06 13:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_accommodation_type`
--

CREATE TABLE `hotel_accommodation_type` (
  `id` bigint(20) NOT NULL,
  `accommodation_type_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_accommodation_type`
--

INSERT INTO `hotel_accommodation_type` (`id`, `accommodation_type_name`, `created_at`, `updated_at`) VALUES
(1, 'single bed room.', '2023-07-20 07:32:41', '2023-10-06 14:02:50'),
(5, 'two bed room', '2023-10-06 13:59:28', '2023-10-06 14:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_arrangement`
--

CREATE TABLE `hotel_arrangement` (
  `id` bigint(20) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_arrangement`
--

INSERT INTO `hotel_arrangement` (`id`, `from_date`, `to_date`, `hotel_name`, `created_at`, `updated_at`) VALUES
(1, '2023-07-01 17:48:00', '2023-09-07 17:48:00', 'Hotel', '2023-07-30 05:48:37', '2023-07-30 05:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_fees`
--

CREATE TABLE `hotel_fees` (
  `id` bigint(20) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `accommodation_type_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_fees`
--

INSERT INTO `hotel_fees` (`id`, `hotel_id`, `from_date`, `to_date`, `accommodation_type_id`, `price`, `created_at`, `updated_at`) VALUES
(3, 8, '1010-10-10 00:00:00', '2020-02-02 00:00:00', 6, 60, '2023-10-06 14:05:15', '2023-10-06 14:52:39'),
(6, 9, '2023-10-20 00:00:00', '2023-10-21 00:00:00', 1, 40, '2023-10-14 23:13:22', '2023-10-14 23:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_reservation`
--

CREATE TABLE `hotel_reservation` (
  `id` bigint(20) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `tourleader_tour_id` int(11) NOT NULL,
  `total_passenger` varchar(255) NOT NULL,
  `double_room` varchar(255) NOT NULL,
  `single_room` varchar(255) NOT NULL,
  `triple_room` varchar(255) NOT NULL,
  `reservation_date` datetime NOT NULL,
  `confirmation_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `single_room_price` float DEFAULT NULL,
  `double_room_price` float DEFAULT NULL,
  `triple_room_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_reservation`
--

INSERT INTO `hotel_reservation` (`id`, `hotel_id`, `from_date`, `to_date`, `tourleader_tour_id`, `total_passenger`, `double_room`, `single_room`, `triple_room`, `reservation_date`, `confirmation_date`, `created_at`, `updated_at`, `single_room_price`, `double_room_price`, `triple_room_price`) VALUES
(5, 8, '2023-09-19 08:42:00', '2023-09-22 08:42:00', 4, '20', '10', '0', '0', '2023-09-04 08:42:00', '2023-09-04 08:43:00', '2023-09-03 09:43:18', '2023-09-03 09:43:18', 0, 100, 0),
(7, 8, '1111-11-11 00:00:00', '3333-03-31 00:00:00', 11, '34', '10', '2', '6', '4444-04-04 00:00:00', '5555-05-05 00:00:00', '2023-10-06 15:37:13', '2023-10-06 15:37:13', 1, 2, 3),
(9, 8, '3030-10-20 00:00:00', '1111-11-11 00:00:00', 11, '23', '234', '2344', '4324', '2222-11-22 00:00:00', NULL, '2023-10-12 14:59:58', '2023-10-12 14:59:58', 234324, 324324, 2343240);

-- --------------------------------------------------------

--
-- Table structure for table `leader_flight`
--

CREATE TABLE `leader_flight` (
  `id` bigint(20) NOT NULL,
  `tourleader_tour_id` int(11) NOT NULL,
  `departure_city` varchar(255) NOT NULL,
  `departure_date` datetime NOT NULL,
  `arrival_city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leader_flight`
--

INSERT INTO `leader_flight` (`id`, `tourleader_tour_id`, `departure_city`, `departure_date`, `arrival_city`, `created_at`, `updated_at`) VALUES
(19, 11, '5', '2023-10-20 00:00:00', '8', '2023-10-14 22:57:31', '2023-10-14 22:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) NOT NULL,
  `media_type_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `media_type_name`, `created_at`, `updated_at`) VALUES
(1, 'Audio1', '2023-07-24 05:59:38', '2023-07-24 06:01:11'),
(3, 'Video', '2023-07-24 06:00:37', '2023-07-24 06:00:37'),
(4, 'Audio', '2023-07-24 13:33:03', '2023-09-13 04:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(36, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(37, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(38, '2016_06_01_000004_create_oauth_clients_table', 1),
(39, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(42, '2023_01_22_112945_create_diseases_table', 1),
(44, '2023_01_22_121748_create_mothers_table', 2),
(45, '2023_01_26_065259_create_child_welfares_table', 3),
(46, '2023_01_26_075527_create_doctors_table', 3),
(47, '2023_01_26_075557_create_ambulances_table', 3),
(48, '2023_01_26_075640_create_pharmacies_table', 3),
(49, '2023_02_11_061734_create_entrepreneurs_table', 4),
(50, '2023_02_11_063403_create_settings_table', 4),
(51, '2023_10_02_152037_countries_states_cities_table', 4),
(52, '2023_10_02_170909_drop_status_column_on_tour_leader_info_table', 5),
(53, '2023_10_02_172302_drop_status_column_on_tour_leader_info_table', 6),
(56, '2023_10_05_160516_modify_status_column_on_guide_reservation_table', 7),
(57, '2023_10_05_160631_modify_status_column_on_guide_reservation_table', 7),
(58, '2023_10_05_165121_modify_status_column_on_guide_reservation_table', 8),
(60, '2023_10_06_233048_create_passenger_informations_table', 9),
(61, '2023_10_07_020223_drop_status_column_on_sight_table', 10),
(62, '2023_10_10_152802_add_status_column_on_sights_reservation_table', 11),
(63, '2023_10_12_234415_add_status_column_on_airline_ticket_table', 12),
(64, '2023_10_13_091156_add_status_column_on_supplier_type_table', 13),
(66, '2023_10_13_154941_add_status_column_on_transport_reservation_table', 14),
(67, '2023_10_13_164131_create_operators_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0103445f665016bab5ead6a507c252e6266f17dc43363f0f781eedab5e54c44666cdcc1e9a2e98dd', 49, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 22:44:26', '2023-03-18 22:44:26', '2023-04-18 22:44:26'),
('019a2fc68d096c22225d893baba3d1d91205e24524c8f56eceaf27d0cf08887ab00d411f9d38c386', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-08 15:22:52', '2023-03-08 15:22:52', '2023-04-08 15:22:52'),
('01b0664b01c206960d02a834ef14a4cae4f9a44c95460e348247468f96d665b23442e49acf2392b4', 30, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 14:31:21', '2023-03-07 14:31:21', '2023-04-07 14:31:21'),
('026357bcdee86523e8095b9e0dcabe5b00221ba7805b74a12e81cec7414778edcd34b0afc349e6a2', 54, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-21 05:47:59', '2023-03-21 05:47:59', '2023-04-21 05:47:59'),
('07afa6aa6d5f28597dc3ef496de92ae8c4ee8bb5358da78e7d6ebba1ae9f88997ba11e51d86275ce', 49, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 19:29:48', '2023-03-18 19:29:48', '2023-04-18 19:29:48'),
('09119fe9bd887f98f6a9055269cc9867e938669531b1aef37b8ef21a475680cb159983b751b11cf3', 26, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 09:17:36', '2023-03-07 09:17:36', '2023-04-07 09:17:36'),
('0caf7f6032ad629b16f918f05d9f104313130d5115aae8aa4a44249176f3b8c938b595c890e59338', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-19 08:33:53', '2023-03-19 08:33:53', '2023-04-19 08:33:53'),
('0e178b3d2f6774e837e944299a19c1972092a1a19f1361ef6f396956c10e3b386ea5385c0e064044', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-10 19:30:01', '2023-03-10 19:30:01', '2023-04-10 19:30:01'),
('11f62e7bbce0ec2d132982cf8894cdd4936c770a7f01f56e213ef1761abf699d74492983f74cd81b', 19, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-12 00:29:40', '2023-02-12 00:29:40', '2023-03-11 18:29:40'),
('11ffdbdd0ee50137aa09cd2d8def30f78e276c6dc1354dedd42e998ca2461cdeb06d64f1d40c83c3', 13, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 17:21:26', '2023-02-11 17:21:26', '2023-03-11 11:21:26'),
('13b802a63a155ea27060bdafc2ce819f938be2a70793bd88e7e1e818dcc444ef08d9a5acb78863c2', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-19 08:37:40', '2023-03-19 08:37:40', '2023-04-19 08:37:40'),
('15be372559a6dd58f439f16bce98f6fee51cac9988ae935f8aaaf38299f50ddd949473e3761d872b', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-04-05 22:02:45', '2023-04-05 22:02:45', '2024-04-06 04:02:45'),
('19f3e6381214f669a451539f11b039513e2d39f6264dd393e33289fdca4d379bf12fa2f97895bb85', 49, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 13:16:06', '2023-03-18 13:16:06', '2023-04-18 13:16:06'),
('1bc66d84a5458ae8f495e96684461888e96a7c34bde9d93116a583409a455d54b79835451dce57b4', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-08 16:00:43', '2023-03-08 16:00:43', '2023-04-08 16:00:43'),
('1f3bc1f46fb52a3bbe225f1a46db9bd48ddb294d6e5d5132166889d5e6d22c759d636a2416adba87', 12, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 17:19:34', '2023-02-11 17:19:34', '2023-03-11 11:19:34'),
('1f91c7e6dcc56cc26bf56fc681478b57f0ca951e51fafce59c9f4eff15777e9c6d1102acecefae7e', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-19 02:31:48', '2023-03-19 02:31:48', '2023-04-19 02:31:48'),
('1fc17d68549f50d67c39e2be41c8a6696711a54d88fe47b6b244e0d481c0e4dd766884eb98e745fb', 12, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-25 19:29:06', '2023-02-25 19:29:06', '2023-03-25 13:29:06'),
('263564d0228c180ee238cb3d2c33171287893c6f76f137b888e3ad89327e6e04a8b3fa3b98e3ebdf', 14, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 17:39:30', '2023-02-11 17:39:30', '2023-03-11 11:39:30'),
('29ea5fd56dc3d6c8df85f8723f48272913d53dad0fdc519373b50f79af41bfa4790dd50b20cae088', 16, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 18:33:02', '2023-02-11 18:33:02', '2023-03-11 12:33:02'),
('2ab39e09ca6cfd4ab1e3fa76de39358afaf4ae93f46d5c02d1705f86db2be039b2f56393cb1f366e', 49, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 22:28:44', '2023-03-18 22:28:44', '2023-04-18 22:28:44'),
('2b5f4b31ac6468b4df616c150573a99bead72a184fa601c1407b919e927aed7f49ee6353dfbddcd0', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-01-26 19:36:26', '2023-01-26 19:36:26', '2024-01-26 13:36:26'),
('34d17d1f95457db675785d584d884c59d1dcac5d4aef676b71cd076f5ee0ba47167bbeb6a197eb70', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-06 15:59:37', '2023-02-06 15:59:37', '2023-03-06 09:59:37'),
('35dfa0903bd165602d53be428e7ad8b8827de6f0ab9124fc2531ba9137c37d30f1f51e609be58ff4', 12, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-05 08:15:06', '2023-03-05 08:15:06', '2024-03-05 08:15:06'),
('384698422d8bbcbb90700c4b5dab4f6b4c42acceb723efdb140e08acf2eca1e087062c5dea33d591', 33, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-12 02:36:25', '2023-03-12 02:36:25', '2023-04-12 02:36:25'),
('3be30e4d75c9d0b9efdf94a01891c6963aef31b79afd1abd2e82eeed92715005ae18a47e3ffb9a4a', 18, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 18:36:10', '2023-02-11 18:36:10', '2023-03-11 12:36:10'),
('3c97ad038919e75c3654632215bfb88448cd06f8e9a909fdbb4e7174d2ed5317fcd2a120ea1efb56', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-31 10:19:15', '2023-03-31 10:19:15', '2023-05-01 10:19:15'),
('3fd9a8f253240240affed251e7014f3bffe337aa843a835edef09fc04fc68bdd15d4c0ee7060c2fa', 53, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-20 07:06:28', '2023-03-20 07:06:28', '2023-04-20 07:06:28'),
('41cba60c8aaca59386bcada128d0ae8af702d7bb65c3eb4813f4e09e7c63357a5425e637b0d08640', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-10 18:37:03', '2023-03-10 18:37:03', '2023-04-10 18:37:03'),
('43fe2505f3781a9c03e05d07c1805cba6f94f103689d9d3c80e7099dab614420322024c7c686bd15', 24, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-05 08:14:58', '2023-03-05 08:14:58', '2024-03-05 08:14:58'),
('47cc40859fcbdf39fe021546094bbf8e7223f310a518a74039524cbb3f3fe43a7a4931c23fcf0138', 45, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-12 06:46:53', '2023-03-12 06:46:53', '2023-04-12 06:46:53'),
('48b6bdec4625f00cc58b1737ed4655a843f0e05ea856cde7b39fb4dc5cc53bea11966f069403358a', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-05 08:24:08', '2023-03-05 08:24:08', '2024-03-05 08:24:08'),
('48e032eefcf61ce52d45b2a658682d2e76618fedac4e12752acf35055c31c3b0a9b6bc094491f115', 27, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 11:33:20', '2023-03-07 11:33:20', '2023-04-07 11:33:20'),
('4ceb4177f1e64ecd07e856951b8e83326d426aaeba225660786422b1a821b5417c1ddb51f7e2b018', 30, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 12:42:50', '2023-03-07 12:42:50', '2023-04-07 12:42:50'),
('4e1ef2c05a2180b60f0ba3a286d783c3197a65cfb6818664829bcd5703f4fb8576d2553d32647970', 50, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 14:27:21', '2023-03-18 14:27:21', '2023-04-18 14:27:21'),
('4f8ffa82791a406bcc070077f45b230dcd7c99ce1409a61fc079467bdd75e2092639d5a33293ae25', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-01-26 12:06:33', '2023-01-26 12:06:33', '2023-02-26 06:06:33'),
('5126d7a2506080ea899217d676e239d3e84039e1e5b9097f308576b5934cd27189bb7cdce02d83ab', 31, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-08 05:43:23', '2023-03-08 05:43:23', '2023-04-08 05:43:23'),
('51f17a909448c054a25ce752f86c9d7f3f6b9d831fc6e7950753a668ca438c69703dcd82be2fa836', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-11 00:43:44', '2023-03-11 00:43:44', '2023-04-11 00:43:44'),
('5211d390ff4d3c9bfe255e00ac9864d142e239d36c0836d73a89f36eddedf05eca8d1b8c096cabed', 20, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-14 17:20:48', '2023-02-14 17:20:48', '2023-03-14 11:20:48'),
('53dda578e48730d86dd97309d88537b10a50e55c22d4b9498dfe83278356e1f983a7dcbc8b238568', 12, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-25 19:27:28', '2023-02-25 19:27:28', '2023-03-25 13:27:28'),
('54204eb404e13ae8f062261b2d8c62f8ffd0cb87a40d428e3e690dc35c9a72c48933a0c775c9ea41', 12, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-25 19:19:26', '2023-02-25 19:19:26', '2023-03-25 13:19:26'),
('597fad47a8bda45a5dc1a31cca0ee74868897eeeee6fa55790814d94ec7029a14bf437d7f4cc973a', 49, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 16:49:09', '2023-03-18 16:49:09', '2023-04-18 16:49:09'),
('5983c03dbe4e0bd6b3defc77db4a3c182ea8366f19dee185e0338483731aad045af3fe1567c6ff98', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-19 09:03:26', '2023-03-19 09:03:26', '2023-04-19 09:03:26'),
('5f46ec236aaad4ae9384d204a55282cf2543ae4260ed0053bf200a93486bee1936f1fdd9931ff177', 11, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 16:35:43', '2023-02-11 16:35:43', '2023-03-11 10:35:43'),
('5fc34a66cd562bf5a3acdaf823cf163177fb2ca7c3f856fd10dde8f32c0c8240a2f62481a03210b3', 30, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 12:45:33', '2023-03-07 12:45:33', '2023-04-07 12:45:33'),
('63d346527ec73479347418e878457a1e01abb2c714555d31dcac7a066147a57fd44b11153db0548f', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-06 17:56:17', '2023-02-06 17:56:17', '2023-03-06 11:56:17'),
('659b5323d2fc1cbf42ee0b3cec6b4147fd44944c18a90d0ca68ffc1c8c6e608afce2e685a8a02e12', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-08 04:09:30', '2023-03-08 04:09:30', '2023-04-08 04:09:30'),
('65ab6db568338f22ca28e3d2f518253c7c4eab701195cd7cb83448e89df17448be50e5eab5f8a0e7', 36, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-12 06:40:38', '2023-03-12 06:40:38', '2023-04-12 06:40:38'),
('65e2fb590d7eea7515abfcf30648c5f4184d13cb7a0acf6c2263cef0d5f6f41bc2632f63eb7bb8ef', 12, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 10:59:40', '2023-03-18 10:59:40', '2023-04-18 10:59:40'),
('6a245a5886579052d65bc55306aa9b288e365e63ec42e0410bd03add0899e174224967a1ca8cb101', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-08 15:56:54', '2023-03-08 15:56:54', '2023-04-08 15:56:54'),
('6cb32173642d90b13f0bb3548b7ae725648cff35fff39b502ba3c1d1b23f0bd5b81785edbb0f4ed7', 49, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 13:29:41', '2023-03-18 13:29:41', '2023-04-18 13:29:41'),
('6f2553ba22933c3ebd54eded62de10d2b6e3009a1740793a408f8faf6805c7427b4aab0e2da54dcf', 15, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 18:20:37', '2023-02-11 18:20:37', '2023-03-11 12:20:37'),
('75919a729cf9e06871ab786b6b3d41e5a232933236fb1b8d7d20fa9b7bd433031c56916c56cd3007', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-10 19:36:25', '2023-03-10 19:36:25', '2023-04-10 19:36:25'),
('75ef7a9b7de6dde968f5a43501ccd156145bade09d00fe91666e18d58b713d1b36b0b5c3d420abcf', 47, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-13 05:45:37', '2023-03-13 05:45:37', '2023-04-13 05:45:37'),
('77c16f7331aa056fcaa6ee2428a14468a7b07172cb4f1608f7cff984ddcc933ce0591e3cdba198a0', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 12:39:54', '2023-02-11 12:39:54', '2023-03-11 06:39:54'),
('7ab6f334bada370e1966bf5ea40a23e616ab5cb7a91280a6fe211e6416d0159aec1bd870e055684a', 12, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-25 18:32:55', '2023-02-25 18:32:55', '2023-03-25 12:32:55'),
('7b0fdda661648eaf0a56ebe6dec3256adad107df6ff8c5e86527616aca01ee59e7be4eb4388872b6', 34, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-12 06:45:15', '2023-03-12 06:45:15', '2023-04-12 06:45:15'),
('7c43c9cb230ef9ee9080e82bb0223b37aa3940433c1fa5624d386a0c62b35cbb22d2adf63ddbf1e9', 50, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 14:27:41', '2023-03-18 14:27:41', '2023-04-18 14:27:41'),
('7d413c21e6c4fa0d33d517ba6b71bc7eabfaa039ecd19e86ad9e9030cbf65d234de6fe70c67a00f3', 30, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 13:05:30', '2023-03-07 13:05:30', '2023-04-07 13:05:30'),
('83de626aa2f2b6fe6192759e706fb339c95571ec9956cb0d866a69e7d3b0b34bc0ae338dca974c05', 12, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 11:25:08', '2023-03-18 11:25:08', '2023-04-18 11:25:08'),
('8446b5f569dac026b7573453da1901a50c71aad1ffa502327b5eb1eb403bc08720840781c409d3c5', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-10 17:51:58', '2023-03-10 17:51:58', '2023-04-10 17:51:58'),
('84fa621a1c4af27f588d575b72d7d2b7217cb394786b5b1f4e2c3f5dde61dc02defc819b803ade24', 10, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-06 17:55:08', '2023-02-06 17:55:08', '2023-03-06 11:55:08'),
('853042764b30505b2cd9ccfe076d71395ea24ab918b1debf34ba143cad2ba455a547f8a07afa1b8b', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-10 19:28:55', '2023-03-10 19:28:55', '2023-04-10 19:28:55'),
('85a0afb352755147a026f0ed0d51594b064b511c8dbd159f860a200a9b699adad80898c2c309d887', 8, 1, 'Laravel9PassportAuth', '[]', 0, '2023-01-26 11:53:39', '2023-01-26 11:53:39', '2023-02-26 05:53:39'),
('85eb70c6aee42ed107b71694b92ce4397a81ff482295d470173dbe838c687488b718a458621e91b0', 34, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-13 04:40:28', '2023-03-13 04:40:28', '2023-04-13 04:40:28'),
('8625eb5139ea4edf19cd492b7b61895a75c33002407e072b0a603d6cfe21ed814055f1c8f3c28055', 30, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-11 06:24:44', '2023-03-11 06:24:44', '2023-04-11 06:24:44'),
('877091d13d0484f585df72dcff3806f96e577cc8d5d5826cce09d6eeca94d9c030da0a916d89cbd1', 25, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 08:08:26', '2023-03-07 08:08:26', '2024-03-07 08:08:26'),
('8a722993672711d176cba1a9137c9b288fda0a94b4f33f4e938254c34df1ed09e9d68406fd56f564', 13, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 19:02:43', '2023-02-11 19:02:43', '2023-03-11 13:02:43'),
('8ccfe6eddad9c71c9868dddc0f4cf2e9efbce2f851f67be1524e2aacfdc2be763924be2b5d2103a9', 9, 1, 'Laravel9PassportAuth', '[]', 0, '2023-01-26 12:01:45', '2023-01-26 12:01:45', '2023-02-26 06:01:45'),
('8de9e10af2dfc31526a32db9c87a41910d7e88d3250ff45988d89d56c69cf1d890bcb14d6826c407', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-10 18:24:03', '2023-03-10 18:24:03', '2023-04-10 18:24:03'),
('8f281059b0d1068e312864c9d00086d2dde34bc6008dd30cace2202297917879d95ea550fe3f0143', 34, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-12 06:39:08', '2023-03-12 06:39:08', '2023-04-12 06:39:08'),
('9321afd2b43f3cb29a4fb40d68582ada1a517b34c9b956108dfc60cfa094b77b2cdc47e3e7099659', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-24 11:12:51', '2023-03-24 11:12:51', '2023-04-24 11:12:51'),
('968828e3bd79f2dc1f3df5e0fc168bc5d2293d337503da6c29d07aef0b80d9337894f0e9b4f2f893', 30, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-11 02:16:54', '2023-03-11 02:16:54', '2023-04-11 02:16:54'),
('96b8271f168474c4c17ad6f4b86f6723d2406a9ce93bba455237562dbd8667353edf6e607e8d478d', 49, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 19:12:12', '2023-03-18 19:12:12', '2023-04-18 19:12:12'),
('96d006c41567b953345f22436a1dc5d3c632f715a6a262a83834e367f8a2020b06175cdb8cacdc43', 34, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-12 06:37:04', '2023-03-12 06:37:04', '2023-04-12 06:37:04'),
('9bd0a7322e8a4a2dc5af65e19e9f18c47ec3745bfd167765b408b1d9f5895db2b0e44bfbbf8bacaf', 47, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-13 05:46:20', '2023-03-13 05:46:20', '2023-04-13 05:46:20'),
('9c3c020716a3c918051511adc63705a78ed97ceee0666b8abcc9e506d9605685075f452937fb1c2d', 52, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-20 08:41:07', '2023-03-20 08:41:07', '2023-04-20 08:41:07'),
('9ef634ce5caae3ea5f12a305fc5d0e49b433f7f6e655e6966b488b96b3127e1d0af59f5a1de8a348', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-10 18:29:23', '2023-03-10 18:29:23', '2023-04-10 18:29:23'),
('a23c0c6747ec86cec5f7b60106399290257340e7f040ebc9dfac236014a36125691fd0d62aaa7255', 12, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 17:20:56', '2023-02-11 17:20:56', '2023-03-11 11:20:56'),
('a7eac2cc63ec833677c2aea7e259d61b313571f01e92808465598d200c9e60e8d806a7cbc38c60a9', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-05 08:55:47', '2023-03-05 08:55:47', '2024-03-05 08:55:47'),
('aa70c502f7094188e147ee6e4d3939f58b0b1403b5ca20aaa502cf5904931f6e121269a567450117', 12, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-25 19:25:58', '2023-02-25 19:25:58', '2023-03-25 13:25:58'),
('aaa4423b765dd731843199aa28469b9d7c32b35b247f80b21b20afa2f76695d6286668d08f474a90', 13, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 19:00:24', '2023-02-11 19:00:24', '2023-03-11 13:00:24'),
('aaa87f2ac60b5d8209de347498cb86cc5f7e638fb31c79ef7018468e179f9ceec657ddde9fe7a009', 12, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-25 19:29:34', '2023-02-25 19:29:34', '2023-03-25 13:29:34'),
('ad9f71b4e4d0d5367cfb914cc6e8afce7571fb1bd3489abba5fcebcf0a893ae43552a1a58477d0a9', 32, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-10 20:35:39', '2023-03-10 20:35:39', '2023-04-10 20:35:39'),
('adebbac986fdccb92cab30ea3869f56ba6ad0e09d33f7094622997602bc3311b7ac3f874806f9ac4', 34, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-13 04:40:59', '2023-03-13 04:40:59', '2023-04-13 04:40:59'),
('ae1dd9fa75bc681e774f337ffb73faac901e62dff2eb7574ed438cdbcb65149527be5767bb817178', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-19 08:52:00', '2023-03-19 08:52:00', '2023-04-19 08:52:00'),
('afc50cf9eb76a8e1ed01d5cf509289d17480679770d385770ebac6f99c02a5da0ad9da3f82df84fc', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-08 13:47:37', '2023-03-08 13:47:37', '2023-04-08 13:47:37'),
('b57509f8aa58e103f573fe1a869c2672fdfd4c37586089bbfb54bf3c9742a464a647e484d24dfa5f', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-08 13:47:49', '2023-03-08 13:47:49', '2023-04-08 13:47:49'),
('bfa59d0a33aacabb6064dcd5c7917ecd6aeeaf36f1bc0dd89c971ee7ccfdc63d21e15fcc9086c094', 20, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-14 17:21:25', '2023-02-14 17:21:25', '2023-03-14 11:21:25'),
('c5dfdf57ed40cf97f8f651e03c559918245e854600a8444c43fe3b8e796d2713c1a639b111a52795', 48, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 11:37:02', '2023-03-18 11:37:02', '2023-04-18 11:37:02'),
('c6e510162e8c5e44bbf9f6303aa9d6d87d0c3e4c13044aabd8fa661ef68e33c9d58ba3bda30ac3f7', 52, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-19 08:55:07', '2023-03-19 08:55:07', '2023-04-19 08:55:07'),
('c8821aaa658414c1bc38d428228f206befb3cb929255efa5c7562f701bbd1727e23ad0647a49f810', 47, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 12:09:54', '2023-03-18 12:09:54', '2023-04-18 12:09:54'),
('ca591341cfe926eb2f170f2c512f65c2cc0b137c3bd9a06a4e24d2e145de505895e71426abdbef36', 46, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-12 06:48:52', '2023-03-12 06:48:52', '2023-04-12 06:48:52'),
('cb7dfaaa9640dfd8611eef0be124cc6a239f81e9d2fbed66e4f709e5c123add4f11cba53969c915c', 13, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 19:01:26', '2023-02-11 19:01:26', '2023-03-11 13:01:26'),
('cbfe5725f1bae85df2fae49724bb12b9f457c28514fbce17db3bd8a78eef6874865038e7acda7003', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-11 00:40:54', '2023-03-11 00:40:54', '2023-04-11 00:40:54'),
('cc4103b3e9e3f17d0d512818cf7afc54ff1b538eae9bc2111d76114c318c208d0393123165be6940', 13, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 18:59:43', '2023-02-11 18:59:43', '2023-03-11 12:59:43'),
('cd2e279a61586eff5c16a560cf4cee238fa797aa2687cdd15d2de2e4e536e49ad1944e9b5bc2586b', 49, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-18 22:26:02', '2023-03-18 22:26:02', '2023-04-18 22:26:02'),
('ce1b7f788232938d73712a680463d43484246589a52e38a545836e9b19499186c382363e87861eeb', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-31 04:17:54', '2023-03-31 04:17:54', '2023-05-01 04:17:54'),
('d02ca837a0d935b6560579a112d5b066ca491c9f45217665a5d2a729013beba8b7af1331a8c25457', 13, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 19:02:06', '2023-02-11 19:02:06', '2023-03-11 13:02:06'),
('d28fb2c11c31d83b789a4055e6b980db587da99d76ddd195247d3dbdbe2519b00625f0085a23fe5f', 22, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-11 02:15:30', '2023-03-11 02:15:30', '2023-04-11 02:15:30'),
('dca9e306f7fd4adaadc966fcdc6345950c70697a1297dc02fcd151231c7f9e00cfabfb3d67fbde0f', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-01-26 11:28:17', '2023-01-26 11:28:17', '2023-02-26 05:28:17'),
('e019b822bc67dfc7831948771de61c14c18f8ec95223ed9f96715068c68b93cc4ea2b365b5013878', 19, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-12 00:30:42', '2023-02-12 00:30:42', '2023-03-11 18:30:42'),
('e2102a98181a5a5315705b454c5000085708d2f23e2c399643aa58d674433b7714e02ccd2eeb67de', 29, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 12:18:38', '2023-03-07 12:18:38', '2023-04-07 12:18:38'),
('e9e73f484f8c902552230b95ebb180049352aa3c541d46a7a64648fd41e512471d6cb73dee3173c9', 28, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-07 11:38:13', '2023-03-07 11:38:13', '2023-04-07 11:38:13'),
('eea00c2a1e30241567d6ca3e237c767954e911fcd3a9157dd22e0212e50fc6f619e804df57be106d', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-01-26 12:32:20', '2023-01-26 12:32:20', '2023-02-26 06:32:20'),
('efd8a94f030542ddd9f561d21aea7d43295f37c8f2a7db2af4064b96dc25e56a00aa17a9ebc0b6a5', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-01-22 21:36:11', '2023-01-22 21:36:11', '2023-02-22 15:36:11'),
('f0688f5124e65c46a4a9fce3d92fedf1766fb7fd29b2895e6082da829255e378aeb71e4e38d5372b', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-24 11:05:33', '2023-03-24 11:05:33', '2023-04-24 11:05:33'),
('f11e34a6fdc7730f747310317d5d65e791f58d58887014ea7bf2244fa4f4e852d35ed7a52485757c', 17, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 18:35:45', '2023-02-11 18:35:45', '2023-03-11 12:35:45'),
('fc5c419dcf153c41fa001cca2b110feb14f0c60b2ba666e3ae8f43174740d4903f79ed904fbb7e14', 51, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-19 08:03:30', '2023-03-19 08:03:30', '2023-04-19 08:03:30'),
('fcea199ea255e64083ae5a00bd2e356b66507a8e4fb8e965752a98e4ed95a803cafc5f5f80f99b49', 55, 3, 'Laravel9PassportAuth', '[]', 0, '2023-03-21 06:35:59', '2023-03-21 06:35:59', '2023-04-21 06:35:59'),
('fdda13ab9d93905cfb9d7197757f49a4c5605e4f7db32264fe033476e4e38a28514179ba86a2c3c9', 1, 1, 'Laravel9PassportAuth', '[]', 0, '2023-02-11 16:33:13', '2023-02-11 16:33:13', '2023-03-11 10:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'BQl7rdNUyWVj8azmgLGKTWcOVNBxx9vaZQMgiUUK', NULL, 'http://localhost', 1, 0, 0, '2023-01-22 21:36:01', '2023-01-22 21:36:01'),
(2, NULL, 'Laravel Password Grant Client', 'd7BaumGSfwTxpUs99VJUcydlO0nuCYYwN7MaNtTN', 'users', 'http://localhost', 0, 1, 0, '2023-01-22 21:36:01', '2023-01-22 21:36:01'),
(3, NULL, 'Laravel Personal Access Client', 'Si5FsTsEGvuwWncqFsm4AntvL8TKZpPPW97FWmfz', NULL, 'http://localhost', 1, 0, 0, '2023-03-05 08:14:46', '2023-03-05 08:14:46'),
(4, NULL, 'Laravel Password Grant Client', '51ZOVDGbxbZr67Igh8SNcuVu8Ss7CnKq1z5aCVSA', 'users', 'http://localhost', 0, 1, 0, '2023-03-05 08:14:46', '2023-03-05 08:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-01-22 21:36:01', '2023-01-22 21:36:01'),
(2, 3, '2023-03-05 08:14:46', '2023-03-05 08:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passenger_information`
--

CREATE TABLE `passenger_information` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `citizenship_country` varchar(255) NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `phone_number` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tour_code` varchar(255) NOT NULL,
  `tourleader_tour_id` int(11) NOT NULL,
  `supplement_cost` float NOT NULL,
  `departure_city_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `accomodation_id` int(11) NOT NULL,
  `sharing_room` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger_information`
--

INSERT INTO `passenger_information` (`id`, `first_name`, `middle_name`, `last_name`, `citizenship_country`, `date_of_birth`, `phone_number`, `email`, `tour_code`, `tourleader_tour_id`, `supplement_cost`, `departure_city_id`, `payment_id`, `accomodation_id`, `sharing_room`, `image`, `password`, `created_at`, `updated_at`) VALUES
(8, 'lory', 'xxxx', 'nima', 'usa', '2023-09-11 00:00:00', 'xxxxx', 'lory1@gmail.com', '1051', 6, 0, 2, 1, 3, NULL, NULL, '$2y$10$hj.9yGVNoErdilsYo3eK1u9riPoxeLS5RkBOkDp5pMcPPkuO1RkQ2', '2023-09-03 10:00:39', '2023-09-03 10:00:39'),
(9, 'Lula', 'xxxxx', 'mora', 'USA', '2023-09-25 00:00:00', '22222222', 'lula@gmail.com', '1050', 4, 0, 2, 1, 1, 6, NULL, '$2y$10$tvSu41LOhI69J16yrgoID.xMjtN66g9/jQyoD4eEfp6U9rewkV6Lu', '2023-09-08 15:54:52', '2023-09-08 15:54:52'),
(10, 'Lula', 'xxxxx', 'mora', 'USA', NULL, '22222222', 'lula@gmail.com', '1050', 4, 0, 2, 1, 1, 6, '/passengers/64fc7be91df05.jpeg', '$2y$10$rMr/fwk2fKQrLz6APFOcnuL0LiIgsSANifCoDAKLt3kof2p5TgfPK', '2023-09-08 15:54:52', '2023-09-09 10:06:33'),
(11, 'Mr', 'Riley', 'Swift', 'BD', '2023-09-04 00:00:00', '+8801724160299', 'raz.abcoder@gmail.com', '21321', 4, 123, 8, 1, 1, 6, '/passengers/64fc7c3330f67.png', '$2y$10$aZZ0tLpzEg9yAppw5v1JWe.ll.mS85BLxiXuVpCvYjVwJHb9L11Ha', '2023-09-09 10:07:47', '2023-09-09 10:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_informations`
--

CREATE TABLE `passenger_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tour_code` varchar(255) NOT NULL,
  `supplement_cost` int(11) NOT NULL,
  `departure_city_id` varchar(255) NOT NULL,
  `accomodation_id` varchar(255) NOT NULL,
  `tourleader_tour_id` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sharing_room` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passenger_informations`
--

INSERT INTO `passenger_informations` (`id`, `first_name`, `middle_name`, `last_name`, `nationality`, `birth_date`, `phone_number`, `email`, `tour_code`, `supplement_cost`, `departure_city_id`, `accomodation_id`, `tourleader_tour_id`, `payment_id`, `password`, `sharing_room`, `image`, `created_at`, `updated_at`) VALUES
(1, 'jonas', 'enrique', 'zurita', 'peruvian', '1310-12-31', '04148932333', 'jonaszurita@gmail.com', '2010', 300, '7', '5', '10', '1', '$2y$10$G54h5DUzzll9ythDu0ZBV.HnDuFSYfG7XKd5fUICvX0mS9YxY9J46', '1', 'hola', '2023-10-07 04:32:20', '2023-10-09 17:08:40'),
(2, 'juanch', 'enrique', 'zurita', 'Venezuelan', '1212-12-12', '254232353', 'hola@gmail.com', '1020', 1000, '9', '5', '4', '1', '$2y$10$xOoa.dV0MmxbNvsjiJcQSOO9l/aU0d2xh5OTpHRWzuBgvn8vT2JeS', '1', 'there is not', '2023-10-07 19:59:58', '2023-10-14 23:49:58'),
(3, 'maria', 'carmen', 'rosa', 'Australian', '1010-10-10', '1123124321', 'maria@maria.com', '1234', 1234, '8', '1', '11', '1', '$2y$10$yLFzgwtcazCtMIFWzjpafuB9EYDWKsw6Hf0JfHnvh0nWRlR066zDi', '1', 'there is not', '2023-10-07 20:11:04', '2023-10-15 00:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_payment`
--

CREATE TABLE `passenger_payment` (
  `id` bigint(20) NOT NULL,
  `date_of_payment` datetime NOT NULL,
  `type_id` int(11) NOT NULL,
  `tourleader_tour_id` int(11) NOT NULL,
  `passenger_id` varchar(256) NOT NULL,
  `amount` float NOT NULL,
  `payment_references` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger_payment`
--

INSERT INTO `passenger_payment` (`id`, `date_of_payment`, `type_id`, `tourleader_tour_id`, `passenger_id`, `amount`, `payment_references`, `created_at`, `updated_at`) VALUES
(10, '2023-10-20 00:00:00', 1, 11, '3', 256, 'eer643', '2023-10-11 19:16:50', '2023-10-15 00:11:22'),
(20, '2023-10-20 00:00:00', 1, 4, '2', 100, '328g8f', '2023-10-14 23:44:21', '2023-10-14 23:52:56'),
(21, '2023-10-20 00:00:00', 4, 11, '3', 120, '234vb34b5v43', '2023-10-15 00:17:26', '2023-10-15 00:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 'cash', '2023-07-19 23:31:08', '2023-10-07 05:10:56'),
(3, 'credit card', '2023-10-07 05:09:24', '2023-10-07 05:09:24'),
(4, 'crypto', '2023-10-14 22:49:11', '2023-10-14 22:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sight`
--

CREATE TABLE `sight` (
  `id` bigint(20) NOT NULL,
  `sight_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `sights_description` varchar(255) NOT NULL,
  `sight_entrance_fees` float NOT NULL,
  `sight_national_pass` varchar(255) NOT NULL,
  `sight_email` varchar(255) NOT NULL,
  `sight_phone_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sight`
--

INSERT INTO `sight` (`id`, `sight_name`, `country_id`, `city_id`, `sights_description`, `sight_entrance_fees`, `sight_national_pass`, `sight_email`, `sight_phone_number`, `created_at`, `updated_at`) VALUES
(3, 'Cesarea', 11, 11, 'Cesaria', 0, 'yes', 'na@gmail.com', '000000000000', '2023-08-25 10:30:06', '2023-08-25 10:30:06'),
(5, 'Haifa', 11, 8, 'la ciudad de haifa', 0, '00', 'gd@gmail.ccom', '72333333', '2023-08-28 12:48:20', '2023-08-28 12:48:20'),
(6, 'Tel aviv', 11, 7, 'Tel aviv', 0, '000', 'tl@gmail.com', '00000', '2023-08-28 20:53:22', '2023-08-28 20:53:22'),
(7, 'Nentaya', 11, 31, 'Nentaya', 0, '000', 'ne@gmail.com', '00000', '2023-08-28 21:04:49', '2023-08-28 21:04:49'),
(8, 'Mediterranean Sea to Caesarea', 11, 29, 'This ancient city was built in honor of Caesar by Herod the great, and was the capital of the Romans in the Holy Land for nearly 500 years.', 0, '000', 'md@gmail.com', '00000', '2023-08-28 21:25:40', '2023-08-28 21:25:40'),
(9, 'Crusader City, and the fantastic aquaduct', 11, 29, 'It is one of the oldest cities in the world, located north of Haifa along Israel\'s Mediterranean coast.', 0, '000', 'cr@gmail.com', '00000', '2023-08-28 21:32:14', '2023-08-28 21:32:14'),
(10, 'Ba\'hai Gardens', 11, 8, 'one of the holiest sites of the Ba\'hai religion.', 0, '000', 'ba@gmail.com', '00000', '2023-08-28 21:33:34', '2023-08-28 21:33:34'),
(11, 'Mt. Carmel', 11, 8, 'Mt. Carmel', 0, '000', 'md@gmail.com', '00000', '2023-08-28 21:39:23', '2023-08-28 21:39:23'),
(12, 'The Jezreel Valley', 11, 8, 'Megiddo', 0, '000', 'md@gmail.com', '00000', '2023-08-28 21:50:58', '2023-08-28 21:50:58'),
(13, 'Gideon\'s brook', 11, 8, 'Gideon\'s brook', 0, '000', 'md@gmail.com', '00000', '2023-08-28 21:55:10', '2023-08-28 21:55:10'),
(14, 'The Church of Annunciation', 11, 19, 'Jesus\' boyhood home', 0, '000', 'md@gmail.com', '00000', '2023-08-28 21:57:22', '2023-08-28 21:57:22'),
(15, 'Cana', 11, 32, 'Cana', 0, '000', 'em@gmail.com', '0000', '2023-08-28 22:15:54', '2023-08-28 22:15:54'),
(16, 'Solomon\'s chariot city of Megiddo', 11, 33, 'The place of the last battle in history, according to the scriptures', 0, '000', 'me@gmail.com', '0000000000', '2023-08-29 09:33:29', '2023-08-29 09:33:29'),
(17, 'Sea of Galilee', 11, 9, 'Sights of the sunrise over the coasts Jesus walked', 0, '000', 'se@gmail.com', '0000000000', '2023-08-29 09:48:33', '2023-08-29 09:48:33'),
(18, 'Mt of Beatitudes', 11, 9, 'Traditional site of Jesus\' Sermon on the Mount.', 0, '000', 'Mt@gmail.com', '0000000000', '2023-08-29 09:52:50', '2023-08-29 09:52:50'),
(19, 'Tabgha', 11, 21, 'The place of the miracle of the multiplication of the loaves and fishes', 0, '000', 'ta@gmail.com', '0000000000', '2023-08-29 10:07:36', '2023-08-29 10:07:36'),
(20, 'The ruins of the ancient city of Capernaum', 11, 30, 'Archaeological excavations have revealed two ancient synagogues built one over the other.', 0, '000', 'ca@gmail.com', '0000000000', '2023-08-29 10:11:54', '2023-08-29 10:11:54'),
(21, 'Capernaum Synagogue', 11, 30, 'Also known as the White Synagogue is a fourth century CE Jewish temple', 0, '000', 'cs@gmail.com', '0000000000', '2023-08-29 10:15:45', '2023-08-29 10:15:45'),
(22, 'The House of Peter', 11, 30, 'The remains of this house rests below The church of St. Peter\'s House', 0, '000', 'pe@gmail.com', '0000000000', '2023-08-29 10:22:26', '2023-08-29 10:22:26'),
(23, 'Jordan River', 11, 30, 'Here a baptismal service is possible', 0, '000', 'jo@gmail.com', '0000000000', '2023-08-29 10:24:03', '2023-08-29 10:24:03'),
(24, 'Gergesa', 11, 30, 'It is mentioned in some ancient manuscripts of the Gospel of Matthew as the place where the Miracle of the Swine took place', 0, '000', 'ge@gmail.com', '0000000000', '2023-08-29 10:27:16', '2023-08-29 10:27:16'),
(25, 'Jordan Valley', 11, 12, 'The area\'s fertile lands were chronicled in the Hebrew Bible, where it was the site of several miracles for the people of Israel', 0, '000', 'jv@gmail.com', '0000000000', '2023-08-29 10:35:31', '2023-08-29 10:35:31'),
(26, 'Shiloh', 11, 12, 'One of the main centers of Israelite worship during the pre-monarchic period', 0, '000', 'sh@gmail.com', '0000000000', '2023-08-29 10:38:57', '2023-08-29 10:38:57'),
(27, 'Bethel', 11, 26, 'The location of Jacob dreaming of a ladder leading to heaven', 0, '000', 'be@gmail.com', '0000000000', '2023-08-29 10:40:34', '2023-08-29 10:40:34'),
(28, 'The Church of the Nativity', 11, 26, 'Built over the cave where Jesus was born', 0, '000', 'na@gmail.com', '0000000000', '2023-08-29 10:45:16', '2023-08-29 10:45:16'),
(29, 'The Church of the Visitation', 11, 27, 'Honors the visit paid by the Virgin Mary, the mother of Jesus, to Elizabeth, the mother of John the Baptist', 0, '000', 'vi@gmail.com', '0000000000', '2023-08-29 10:50:46', '2023-08-29 10:50:46'),
(30, 'Acropolis of Athens', 12, 34, 'Contains the remains of 2.5 ancient buildings of great architectural and historical significance', 0, '000', 'aa@gmail.com', '0000000000', '2023-08-29 10:57:31', '2023-08-29 10:57:31'),
(31, 'Parthenon', 12, 34, 'Former temple that was dedicated to the goddess Athena during the fifth century BC', 0, '000', 'pa@gmail.com', '0000000000', '2023-08-29 11:01:44', '2023-08-29 11:01:44'),
(32, 'Propylaea', 12, 34, 'It serves as a partition, separating the secular and religious parts of the city', 0, '000', 'pr@gmail.com', '0000000000', '2023-08-29 11:03:48', '2023-08-29 11:03:48'),
(33, 'Temple of Athena Nike', 12, 34, 'Dedicated to the goddesses Athena and Nike, it was built araound 420 BC', 0, '000', 'te@gmail.com', '0000000000', '2023-08-29 11:06:14', '2023-08-29 11:06:14'),
(34, 'Erechtheion', 12, 34, 'Made to house the statue of Athena Polias', 0, '000', 'er@gmial.com', '0000000000', '2023-08-29 11:10:32', '2023-08-29 11:10:32'),
(35, 'Odeon of Herodes Atticus', 12, 34, 'Built in AD 161 by Herodes Atticus in memory of his Roman wife, Aspasia Annia Regilla', 0, '000', 'oh@gmail.com', '0000000000', '2023-08-29 11:12:12', '2023-08-29 11:12:12'),
(36, 'Theatre of Dionysus', 12, 34, 'World\'s first theatre. It was restored in the 19th century', 0, '000', 'td@gmail.com', '0000000000', '2023-08-29 11:15:25', '2023-08-29 11:15:25'),
(37, 'Areopagus', 12, 34, 'The name Areopagus also referred, in classical times, to the Athenian governing council', 0, '000', 'ar@gmail.com', '0000000000', '2023-08-29 12:00:31', '2023-08-29 12:00:31'),
(38, 'Temple of Olympian Zeus', 12, 34, 'Former colossal temple at the centre of the Greek capital', 0, '000', 'tz@gmail.com', '0000000000', '2023-08-29 12:05:24', '2023-08-29 12:05:24'),
(39, 'Kallimármaro', 12, 34, 'It hosted the Panathenaic Games, a religious and athletic festival celebrated every four years in honour of the goddess Athena', 0, '000', 'ka@gmail.com', '0000000000', '2023-08-29 12:10:07', '2023-08-29 12:10:07'),
(40, 'Plaka', 12, 34, 'Old historical neighborhood of Athens that incorporates labyrinthine streets and neoclassical architecture', 0, '000', 'pl@gmail.com', '0000000000', '2023-08-29 12:18:27', '2023-08-29 12:18:27'),
(41, 'Ancient Agora of Athens', 12, 34, 'The Agora\'s initial use was for a commercial, assembly, or residential gathering place', 0, '000', 'aaa@gmail.com', '0000000000', '2023-08-29 12:23:03', '2023-08-29 12:23:03'),
(42, 'Temple of Hephaestus', 12, 34, 'It is a well-preserved Greek temple dedicated to Hephaestus; it remains standing largely intact today', 0, '000', 'th@gmail.com', '0000000000', '2023-08-29 12:25:23', '2023-08-29 12:25:23'),
(43, 'Stoa of Attalos', 12, 34, 'It was built by and named after King Attalos II of Pergamon, who ruled between 159 BC and 138 BC', 0, '000', 'sa@gmail.com', '0000000000', '2023-08-29 12:27:22', '2023-08-29 12:27:22'),
(44, 'Hydra', 12, 35, 'The name Hydra comes from ancient Greek, derived from the Greek word for \"water\", a reference to the natural springs on the island', 0, '000', 'h@gmail.com', '0000000000', '2023-08-29 12:29:47', '2023-08-29 12:29:47'),
(45, 'Poros', 12, 36, 'Poros consists of two islands: Sphaeria, the southern part, which is of volcanic origin, where today\'s city is located, and Kalaureia, the northern and largest part. A bridge connects the two islands over a narrow strait', 0, '000', 'p@gmail.com', '0000000000', '2023-08-29 12:32:02', '2023-08-29 12:32:02'),
(46, 'Aegina', 12, 37, 'Tradition derives the name from Aegina, the mother of the hero Aeacus, who was born on the island and became its king', 0, '000', 'ae@gmail.com', '0000000000', '2023-08-29 12:33:28', '2023-08-29 12:33:28'),
(47, 'Temple of Aphaea', 12, 37, 'Located within a sanctuary complex dedicated to the goddess Aphaia', 0, '000', 'toa@gmail.com', '0000000000', '2023-08-29 12:35:45', '2023-08-29 12:35:45'),
(48, 'Old City of Jerusalem', 11, 27, 'It is today divided into four uneven quarters: Muslim, Christian, Armenian and Jewish', 0, '000', 'ocj@gmail.com', '0000000000', '2023-08-29 12:39:10', '2023-08-29 12:39:10'),
(49, 'Damascus Gate', 11, 27, 'It is located in the wall on the Old City of Jerusalem\'s northwest side and connects to a highway leading out to Nablus', 0, '000', 'dg@gmail.com', '0000000000', '2023-08-29 12:43:15', '2023-08-29 12:43:15'),
(50, 'St Stephen\'s Gate', 11, 27, 'Also known as Lions\' Gate. It leads into the Muslim Quarter of the Old City', 0, '000', 'ssg@gmail.com', '0000000000', '2023-08-29 12:45:15', '2023-08-29 12:45:15'),
(51, 'Pool of Bethesda', 11, 27, 'The Pool of Bethesda is from the Christian Bible\'s New Testament, John 5:2 account of Jesus healing a paralyzed man at a pool in Jerusalem', 0, '000', 'pb@gmail.com', '0000000000', '2023-08-29 12:47:20', '2023-08-29 12:47:20'),
(52, 'Church of Saint Anne', 11, 27, 'It is a French Roman Catholic church located in the Muslim quarter of the Old City.', 0, '000', 'csa@gmail.com', '0000000000', '2023-08-29 12:49:57', '2023-08-29 12:49:57'),
(53, 'Tiberias', 11, 9, 'Tiberias', 0, '000', 'tl@gmail.com', '00000', '2023-08-29 13:52:13', '2023-08-29 13:52:13'),
(54, 'Temple Mount', 11, 27, 'It is believed to be the location of Abraham\'s binding of Isaac', 0, '000', 'tm@gmail.com', '0000000000', '2023-08-29 14:13:08', '2023-08-29 14:13:08'),
(55, 'Jerusalem', 11, 27, 'Jerusalem', 0, '000', 'dg@gmail.com', '000', '2023-08-29 14:24:20', '2023-08-29 14:24:20'),
(57, 'Temple area of Mt. Moriah', 11, 27, 'Temple area of Mt. Moriah', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:35:00', '2023-08-29 14:35:00'),
(58, 'Visit the Dome of the Rock', 11, 27, 'Visit the Dome of the Rock', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:36:20', '2023-08-29 14:36:20'),
(59, 'The Western Wall', 11, 27, 'also know as the \"Wailing Wall\" which is the only remaining portion of the original temple built by Solomon', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:37:21', '2023-08-29 14:37:21'),
(60, 'The church of the Holy Sepulchre', 11, 27, 'Walk through the Old City Bazaars to the church of the Holy Sepulchre', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:39:06', '2023-08-29 14:39:06'),
(61, 'Tower of David', 11, 27, 'Walk through the Old City Bazaars to the church of the Holy Sepulchre', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:40:45', '2023-08-29 14:40:45'),
(62, 'The Jewish Quarter', 11, 27, 'Visitaremos el barrio judío antes de que dejemos la ciudad antigua a través de la Puerta de Jaffa', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:43:10', '2023-08-29 14:43:10'),
(63, 'Mt. Zion and the Upper Room', 11, 27, 'Mt. Zion and the Upper Room', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:46:16', '2023-08-29 14:46:16'),
(64, 'The Garden Tomb and Golgotha', 11, 27, 'place of the skull, where a worship service is possible', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:47:18', '2023-08-29 14:47:18'),
(65, 'The Garden of Gethsemane', 11, 27, 'and with a trip to the Mt. of Olives for a spectacular view of the city', 0, '000', 'em@gmail.com', '00000', '2023-08-29 14:48:45', '2023-08-29 14:48:45'),
(66, 'Ruins of the ancient city of Jericho', 11, 38, 'Jerico', 0, '00', 'dh@gmail.com', '00', '2023-08-29 16:10:31', '2023-08-29 16:10:31'),
(67, 'Inn of the Good Samaritan', 11, 38, 'We will drive through the modern city of Jericho and continue to the Dead Sea, at 396.24 meters below sea level, the lowest point on Earth.', 0, '00', 'dg@gmail.com', '00', '2023-08-29 16:12:17', '2023-08-29 16:27:33'),
(68, 'The Qumran caves', 11, 38, 'Where the Dead Sea Scrolls were found.', 0, '00', 'jh@gmail.com', '00', '2023-08-29 16:17:56', '2023-08-29 16:17:56'),
(69, 'Masada national park', 11, 38, 'We will ascend the mountain by cable car to the remarkable ruins of the fortress built by Herod the Great.', 0, '00', 'dg@gmail.com', '00', '2023-08-29 16:19:44', '2023-08-29 16:19:44'),
(70, 'Houston', 4, 10, 'Houston', 0, '00', 'dh@gmail.com', '00', '2023-08-29 16:56:40', '2023-08-29 16:56:40'),
(71, 'David\'s Tomb', 11, 27, 'According to an early-medieval tradition, is associated with the burial of the biblical King David', 0, '000', 'dt@gmail.com', '0000000000', '2023-08-30 08:24:11', '2023-08-30 08:24:11'),
(72, 'Jaffa Gate', 11, 27, 'Named after the port of Jaffa, from which the Prophet Jonah embarked on his sea journey', 0, '000', 'jg@gmail.com', '0000000000', '2023-08-30 08:27:27', '2023-08-30 08:27:27'),
(73, 'Athens', 12, 34, 'The capital and largest city of Greece', 0, '000', 'at@gmail.com', '0000000000', '2023-08-30 11:26:03', '2023-08-30 11:26:03'),
(74, 'La Ciudad Cruzada y el fantástico acueducto', 11, 43, 'Una de las ciudades más viejas del mundo, ubicada al norte de Haifa junto a la costa mediterránea de Israel', 0, '000', 'cr@gmail.com', '0000000000', '2023-08-31 05:51:31', '2023-08-31 05:51:31'),
(75, 'Jardines Bahai', 11, 8, 'Uno de los lugares más sagrados de la fe bahaí', 0, '000', 'ba@gmail.com', '0000000000', '2023-08-31 05:53:40', '2023-08-31 05:53:40'),
(76, 'Monte Carmelo', 11, 8, 'Monte Carmelo', 0, '000', 'md@gmail.com', '0000000000', '2023-08-31 05:55:24', '2023-08-31 05:55:24'),
(77, 'Valle de Jezreel', 11, 8, 'El valle alguna vez conectó el Mar Muerto con el Mar Mediterráneo', 0, '000', 'md@gmail.com', '0000000000', '2023-08-31 05:57:54', '2023-08-31 05:57:54'),
(78, 'Arroyo de Gedeón', 11, 8, 'Arroyo de Gedeón', 0, '000', 'md@gmail.com', '0000000000', '2023-08-31 05:59:50', '2023-08-31 05:59:50'),
(79, 'Iglesia de la Anunciación', 11, 19, 'Se estableció donde la Anunciación tuvo lugar', 0, '000', 'md@gmail.com', '0000000000', '2023-08-31 06:05:25', '2023-08-31 06:05:25'),
(80, 'Caná', 11, 32, 'Lugar donde ocurrió el primer milagro de Jesús: convertir el agua en vino', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 06:07:13', '2023-08-31 06:07:13'),
(81, 'Megido, ciudad de carros de Salomón', 11, 48, 'El lugar de la última batalla de la historia, según las escrituras', 0, '000', 'me@gmail.com', '0000000000', '2023-08-31 06:19:17', '2023-08-31 06:19:17'),
(82, 'Mar de Galilea', 11, 49, 'Vista del amanecer sobre las costas donde Jesús caminó', 0, '000', 'se@gmail.com', '0000000000', '2023-08-31 06:21:23', '2023-08-31 06:21:23'),
(83, 'Monte de las Bienaventuranzas', 11, 49, 'Según la tradición, es el lugar donde Jesús dio el Sermón de la Montaña', 0, '000', 'mt@gmail.com', '0000000000', '2023-08-31 06:23:26', '2023-08-31 06:23:26'),
(84, 'Tabgha', 11, 21, 'Considerado el lugar donde ocurrió el milagro de la multiplicación de los panes y los peces', 0, '000', 'ta@gmail.com', '0000000000', '2023-08-31 06:24:58', '2023-08-31 06:24:58'),
(85, 'Ruinas de Cafarnaún', 11, 30, 'Es conocido como la ciudad de Jesús, nombrada en el Nuevo Testamento', 0, '000', 'ca@gmail.com', '0000000000', '2023-08-31 06:28:51', '2023-08-31 06:28:51'),
(86, 'Sinagoga de Cafarnaún', 11, 30, 'También conocida como Sinagoga Blanca, construída en el siglo IV sobre otra sinagoga del siglo I', 0, '000', 'cs@gmail.com', '0000000000', '2023-08-31 06:32:18', '2023-08-31 06:32:18'),
(87, 'La Casa de Pedro', 11, 30, 'Los restos de la casa se encuentran bajo la Iglesia de San Pedro', 0, '000', 'pe@gmail.com', '0000000000', '2023-08-31 06:37:48', '2023-08-31 06:37:48'),
(88, 'Río Jordán', 11, 30, 'Aquí es posible un servicio bautismal', 0, '000', 'jo@gmail.com', '0000000000', '2023-08-31 06:39:52', '2023-08-31 06:39:52'),
(89, 'Río Jordán', 11, 30, 'Aquí es posible un servicio bautismal', 0, '000', 'jo@gmail.com', '0000000000', '2023-08-31 06:39:52', '2023-08-31 06:39:52'),
(90, 'Gergesa', 11, 30, 'El lugar donde ocurrió el milagro del exorcismo del demonio de Gerasa', 0, '000', 'ge@gmail.com', '0000000000', '2023-08-31 06:50:25', '2023-08-31 06:50:25'),
(91, 'Valle del Jordán', 11, 41, 'Las tierras fértiles de la zona aparecen registradas en la Biblia hebrea, donde fue lugar de varios milagros para el pueblo de Israel.', 0, '000', 'jv@gmail.com', '0000000000', '2023-08-31 06:54:07', '2023-08-31 06:54:07'),
(92, 'Silo', 11, 41, 'Uno de los principales centros de culto israelita durante el período premonárquico', 0, '000', 'sh@gmail.com', '0000000000', '2023-08-31 06:56:27', '2023-08-31 06:56:27'),
(93, 'Silo', 11, 41, 'Uno de los principales centros de culto israelita durante el período premonárquico', 0, '000', 'sh@gmail.com', '0000000000', '2023-08-31 06:56:27', '2023-08-31 06:56:27'),
(94, 'Bethel', 11, 41, 'La ubicación donde Jacob soñó con una escalera que llevaba al cielo', 0, '000', 'be@gmail.com', '0000000000', '2023-08-31 07:03:28', '2023-08-31 07:03:28'),
(95, 'Iglesia de la Natividad', 11, 42, 'Construida sobre la cueva donde nació Jesús', 0, '000', 'na@gmail.com', '0000000000', '2023-08-31 07:05:35', '2023-08-31 07:05:35'),
(96, 'Iglesia de la Visitación', 11, 46, 'Honra la visita que realizó la Virgen María, madre de Jesús, a Isabel, madre de Juan Bautista', 0, '000', 'vi@gmail.com', '0000000000', '2023-08-31 07:06:50', '2023-08-31 07:31:53'),
(98, 'Jerusalén', 11, 46, 'Jerusalén', 0, '000', 'je@gmail.com', '0000000000', '2023-08-31 07:08:05', '2023-08-31 07:08:05'),
(99, 'Atenas', 13, 40, 'Capital y ciudad más grande de Grecia', 0, '000', 'at@gmail.com', '0000000000', '2023-08-31 07:08:51', '2023-08-31 07:08:51'),
(100, 'Acrópolis de Atenas', 13, 40, 'Contiene los restos de varios edificios antiguos de gran importancia arquitectónica e histórica.', 0, '000', 'aa@gmail.com', '0000000000', '2023-08-31 07:10:34', '2023-08-31 07:10:34'),
(101, 'Templo de Zeus Olímpico', 13, 40, 'Antiguo templo colosal en el centro de la capital griega', 0, '000', 'tz@gmail.com', '0000000000', '2023-08-31 07:11:57', '2023-08-31 07:11:57'),
(102, 'Kallimármaro', 13, 40, 'Fue sede de los Juegos Panatenaicos, un festival religioso y atlético que se celebra cada cuatro años en honor a la diosa Atenea', 0, '000', 'ka@gmail.com', '0000000000', '2023-08-31 07:13:06', '2023-08-31 07:13:06'),
(103, 'Plaka', 13, 40, 'Antiguo barrio histórico de Atenas que incorpora calles laberínticas y arquitectura neoclásica', 0, '000', 'pl@gmail.com', '0000000000', '2023-08-31 07:14:13', '2023-08-31 07:14:13'),
(104, 'Plaka', 13, 40, 'Antiguo barrio histórico de Atenas que incorpora calles laberínticas y arquitectura neoclásica', 0, '000', 'pl@gmail.com', '0000000000', '2023-08-31 07:14:13', '2023-08-31 07:14:13'),
(105, 'Ágora de Atenas', 13, 40, 'El uso inicial del Ágora fue como lugar comercial, de reunión o residencial.', 0, '000', 'aaa@gmail.com', '0000000000', '2023-08-31 07:16:09', '2023-08-31 07:16:09'),
(106, 'Templo de Hefesto', 13, 40, 'Se trata de un templo griego bien conservado dedicado a Hefesto; permanece en gran parte intacto hoy', 0, '000', 'th@gmail.com', '0000000000', '2023-08-31 07:17:28', '2023-08-31 07:17:28'),
(107, 'Templo de Hefesto', 13, 40, 'Se trata de un templo griego bien conservado dedicado a Hefesto; permanece en gran parte intacto hoy', 0, '000', 'th@gmail.com', '0000000000', '2023-08-31 07:17:28', '2023-08-31 07:17:28'),
(108, 'Estoa de Átalo', 13, 40, 'Fue construido por el Rey Atalo II de Pérgamo, que gobernó entre el 159 a. C. y el 138 a. C. y recibió su nombre.', 0, '000', 'sa@gmail.com', '0000000000', '2023-08-31 07:19:02', '2023-08-31 07:19:02'),
(109, 'Hidra', 13, 45, 'El nombre Hidra proviene del griego antiguo, derivado de la palabra griega que significa \"agua\", una referencia a los manantiales naturales de la isla', 0, '000', 'h@gmail.com', '0000000000', '2023-08-31 07:20:14', '2023-08-31 07:20:14'),
(110, 'Poros', 13, 36, 'Poros se compone de dos islas: Sphaeria, la parte sur, de origen volcánico, donde se encuentra la actual ciudad, y Kalaureia, la parte norte y más grande. Un puente conecta las dos islas a través de un estrecho', 0, '000', 'p@gmail.com', '0000000000', '2023-08-31 07:21:26', '2023-08-31 07:21:26'),
(111, 'Poros', 13, 36, 'Poros se compone de dos islas: Sphaeria, la parte sur, de origen volcánico, donde se encuentra la actual ciudad, y Kalaureia, la parte norte y más grande. Un puente conecta las dos islas a través de un estrecho', 0, '000', 'p@gmail.com', '0000000000', '2023-08-31 07:21:26', '2023-08-31 07:21:26'),
(112, 'Egina', 13, 39, 'La tradición deriva el nombre de Egina, la madre del héroe Éaco, que nació en la isla y se convirtió en su rey', 0, '000', 'ae@gmail.com', '0000000000', '2023-08-31 07:22:53', '2023-08-31 07:22:53'),
(113, 'Templo de Afaya', 13, 39, 'Ubicado dentro de un complejo de santuarios dedicado a la diosa Afaya', 0, '000', 'toa@gmail.com', '0000000000', '2023-08-31 07:29:28', '2023-08-31 07:30:21'),
(115, 'Ciudad Vieja de Jerusalén', 11, 46, 'Hoy está dividido en cuatro barrios desiguales: musulmán, cristiano, armenio y judío', 0, '000', 'ocj@gmail.com', '0000000000', '2023-08-31 07:33:18', '2023-08-31 07:33:18'),
(116, 'Ciudad Vieja de Jerusalén', 11, 46, 'Hoy está dividido en cuatro barrios desiguales: musulmán, cristiano, armenio y judío', 0, '000', 'ocj@gmail.com', '0000000000', '2023-08-31 07:33:18', '2023-08-31 07:33:18'),
(117, 'Puerta de Damasco', 11, 46, 'Está ubicado en la muralla en el lado noroeste de la Ciudad Vieja de Jerusalén y conecta con una carretera que conduce a Nablus', 0, '000', 'dg@gmail.com', '0000000000', '2023-08-31 07:34:22', '2023-08-31 07:34:22'),
(118, 'Puerta de Damasco', 11, 46, 'Está ubicado en la muralla en el lado noroeste de la Ciudad Vieja de Jerusalén y conecta con una carretera que conduce a Nablus', 0, '000', 'dg@gmail.com', '0000000000', '2023-08-31 07:34:22', '2023-08-31 07:34:22'),
(119, 'Puerta de San Esteban', 11, 46, 'También conocida como Puerta de los Leones. Conduce al Barrio Musulmán de la Ciudad Vieja', 0, '000', 'ssg@gmail.com', '0000000000', '2023-08-31 07:36:04', '2023-08-31 07:36:04'),
(120, 'Puerta de San Esteban', 11, 46, 'También conocida como Puerta de los Leones. Conduce al Barrio Musulmán de la Ciudad Vieja', 0, '000', 'ssg@gmail.com', '0000000000', '2023-08-31 07:36:04', '2023-08-31 07:36:04'),
(121, 'Piscina de Betesda', 11, 46, 'La piscina de Betesda es del Nuevo Testamento de la Biblia cristiana, Juan 5:2, relato de Jesús sanando a un hombre paralítico en una piscina en Jerusalén.', 0, '000', 'pb@gmail.com', '0000000000', '2023-08-31 07:38:00', '2023-08-31 07:38:00'),
(122, 'Iglesia de Santa Ana', 11, 46, 'Es una iglesia católica romana francesa ubicada en el barrio musulmán de la Ciudad Vieja', 0, '000', 'sa@gmail.com', '0000000000', '2023-08-31 07:39:28', '2023-08-31 07:39:28'),
(123, 'Tiberíades', 11, 49, 'Tiberíadaes', 0, '000', 'ti@gmail.com', '0000000000', '2023-08-31 07:40:25', '2023-08-31 07:40:25'),
(124, 'El Monte del Templo', 11, 46, 'Se cree que es el lugar donde Abraham ató a Isaac', 0, '000', 'tm@gmail.com', '0000000000', '2023-08-31 07:43:59', '2023-08-31 07:43:59'),
(125, 'El Domo de la Roca', 11, 46, 'La Piedra Fundacional sobre la que está construido el templo tiene gran significación en las religiones abrahámicas, como el lugar en que Dios creó el mundo y al primer humano, Adán', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 07:49:34', '2023-08-31 07:49:34'),
(126, 'Muro de las Lamentaciones', 11, 46, 'Es el lugar más sagrado del judaísmo, vestigio del Templo de Jerusalén', 0, '000', 'ml@gmail.com', '0000000000', '2023-08-31 07:51:12', '2023-08-31 07:51:12'),
(127, 'Iglesia del Santo Sepulcro', 11, 46, 'Dentro resguarda el Calvario y la Tumba de Cristo', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 07:54:52', '2023-08-31 07:54:52'),
(128, 'Torre de David', 11, 46, 'Antigua ciudadela en el Barrio Armenio de la Ciudad Vieja', 0, '000', 'td@gmail.com', '0000000000', '2023-08-31 07:57:15', '2023-08-31 07:57:15'),
(129, 'Torre de David', 11, 46, 'Antigua ciudadela en el Barrio Armenio de la Ciudad Vieja', 0, '000', 'td@gmail.com', '0000000000', '2023-08-31 07:57:15', '2023-08-31 07:57:15'),
(130, 'Puerta de Jaffa', 11, 46, 'Debe su nombre al puerto de Jaffa, desde donde el profeta Jonás emprendió su viaje por mar', 0, '000', 'jg@gmail.com', '0000000000', '2023-08-31 07:58:52', '2023-08-31 07:58:52'),
(131, 'Barrio Judío', 11, 46, 'Parte judía de la Ciudad Vieja', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:07:50', '2023-08-31 08:07:50'),
(132, 'Monte Sion y el Cenáculo', 11, 46, 'Los habitantes de Jerusalén del siglo I d.C. consideraron que era la localización del palacio del rey David. El Cenáculo ed donde Jesús celebró la Eucaristía con los apóstoles', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:12:38', '2023-08-31 08:12:38'),
(133, 'Tumba del Jardín', 11, 46, 'Es una sepultura en Jerusalén que se cree es la tumba vacía de Jesús de Nazaret por los protestantes y evangélicos', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:14:38', '2023-08-31 08:14:38'),
(134, 'Gólgota', 11, 46, 'También conocido como El Calvario, es donde fue crucificado Jesús', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:26:19', '2023-08-31 08:26:19'),
(135, 'Jardín de Getsemaní', 11, 46, 'Fue el jardín donde Jesús oró la última noche antes de ser arrestado', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:28:11', '2023-08-31 08:28:11'),
(136, 'Monte de los Olivos', 11, 46, 'Considerado uno de los lugares más sagrados de Tierra Santa, donde Jesús realizaba sus oraciones', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:30:05', '2023-08-31 08:30:05'),
(137, 'Ruinas de la antigua ciudad de Jericó', 11, 38, 'Habitada desde hace 11.000 años', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:32:10', '2023-08-31 08:32:10'),
(138, 'Ruinas de la antigua ciudad de Jericó', 11, 38, 'Habitada desde hace 11.000 años', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:32:10', '2023-08-31 08:32:10'),
(139, 'Posada del Buen Samaritano', 11, 46, 'De acuerdo con la tradición cristiana, pudo haber sido la ubicación de los hechos narrados en la Parábola del buen samaritano del Evangelio de Lucas', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:34:00', '2023-08-31 08:34:00'),
(140, 'Ciudad moderna de Jericó', 11, 47, 'Ciudad moderna de Jericó', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:35:13', '2023-08-31 08:35:13'),
(141, 'Cuevas Qumrán', 11, 38, 'Donde se encontraron los Rollos del Mar Muerto', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:38:24', '2023-08-31 08:38:24'),
(142, 'Cuevas Qumrán', 11, 38, 'Donde se encontraron los Rollos del Mar Muerto', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:38:24', '2023-08-31 08:38:24'),
(143, 'Masada', 11, 38, 'Patrimonio de la Humanidad donde se encuentran las ruinas de la fortaleza de Herodes', 0, '000', 'em@gmail.com', '0000000000', '2023-08-31 08:41:23', '2023-08-31 08:41:23'),
(144, 'The mount pagus', 14, 54, '(today kadifekale, citadel) that dominates the city', 0, '000', 'em@gmail.com', '00000', '2023-09-02 00:39:20', '2023-09-02 00:39:20'),
(145, 'Agora', 14, 54, 'A part of the old ancient site, smyrna.', 0, '000', 'em@gmail.com', '00000', '2023-09-02 00:41:01', '2023-09-02 00:41:01'),
(146, 'Agora', 15, 51, 'Una parte del antiguo sitio antiguo, esmirna', 0, '000', 'em@gmail.com', '00000', '2023-09-02 00:42:09', '2023-09-02 00:42:09'),
(148, 'El monte pago', 15, 51, '(hoy kadifekale, ciudadela) que domina la ciudad.', 0, '000', 'em@gmail.com', '00000', '2023-09-02 00:45:18', '2023-09-02 00:45:18'),
(149, 'Kemeralti', 14, 54, '(which is one of the biggest open bazaars in turkey) passing down the street of the old synagogue, the fish and vegetable bazaar, and we will arrive at the hisaronu mosque.', 0, '000', 'em@gmail.com', '00000', '2023-09-02 10:24:04', '2023-09-02 10:24:04'),
(150, 'Éfeso', 15, 65, 'Era una ciudad de la antigua Grecia en la costa de Jonia, a 3 kilómetros (1,9 millas) al suroeste de la actual Selçuk en la provincia de Esmirna, Turquía.', 0, '000', 'em@gmail.com', '00000', '2023-09-02 11:13:08', '2023-09-02 11:13:08'),
(151, 'Ephesus', 14, 64, 'Was a city in Ancient Greece on the coast of Ionia, 3 kilometres (1.9 mi) southwest of present-day Selçuk in İzmir Province, Turkey.', 0, '000', 'em@gmail.com', '00000', '2023-09-02 11:15:10', '2023-09-02 11:15:10'),
(152, 'House of the Virgin Mary', 14, 54, 'Where she spent her last days, she preferred to live in this remote place than in a crowded place', 0, '000', 'em@gmail.com', '00000', '2023-09-02 11:17:06', '2023-09-02 11:17:06'),
(153, 'Casa de la Virgen Maria', 15, 51, 'Donde pasó sus últimos días, prefería vivir en este lugar remoto que en un lugar lleno de gente', 0, '000', 'em@gmail.com', '00000', '2023-09-02 11:18:55', '2023-09-02 11:18:55'),
(154, 'Mar de Galilea', 11, 44, 'El mar de Galilea alimenta el Acueducto Nacional de Israel', 0, '00', 'dk@gmail.co', '00', '2023-09-02 15:07:32', '2023-09-02 15:07:32'),
(155, 'Anfiteatro de Beth Shan', 11, 12, 'Teatro romano antiguo de Bet Shean', 0, '00', 'admin@gmail.com', '00', '2023-09-02 15:14:29', '2023-09-02 15:14:29'),
(156, 'Las 8 puertas de Jerusalén', 11, 46, 'Hay ocho puertas, siete abiertas y una sellada, a lo largo de las murallas de la Ciudad Vieja de Jerusalén', 0, '00', 'dh@gmail.com', '00', '2023-09-02 15:28:22', '2023-09-02 15:28:22'),
(157, 'Estambul', 15, 66, 'Ciudad de Estambul', 0, '000', 'dh@gmail.com', '000', '2023-09-02 16:14:30', '2023-09-02 16:14:30'),
(158, 'Istanbul', 14, 52, 'Istanbul city', 0, '000', 'dg@gmail.com', '000', '2023-09-02 16:16:12', '2023-09-02 16:16:12'),
(159, 'Esmirna', 15, 51, 'Esmirna', 0, '000', 'dh@gmail.com', '000', '2023-09-02 16:24:57', '2023-09-02 16:24:57'),
(160, 'Izmir', 14, 69, 'Izmir', 0, '000', 'dg@gmail.com', '000', '2023-09-02 16:25:24', '2023-09-02 16:25:24'),
(161, 'Monte pagus o Arroyo Meles', 15, 51, 'Hoy llamada Kadifekale, es un castillo en lo alto de una colina en Esmirna.', 0, '00', 'dh@gmail.com', '000', '2023-09-02 16:34:14', '2023-09-02 16:34:14'),
(162, 'Ancient city of Smýrnē', 14, 69, 'is one of the experiences that Izmir offers', 0, '000', 's', '000', '2023-09-02 16:45:20', '2023-09-02 16:45:20'),
(163, 'Antigua ciudad de Smýrne', 15, 51, 'Es una de las experiencias que ofrece Esmirna', 0, '000', 'dh@gmail.com', '000', '2023-09-02 16:46:29', '2023-09-02 16:46:29'),
(164, 'El ágora de Esmirna', 15, 51, 'era una plaza con dos áreas comerciales y una basílica, lo que podemos visitar hoy son los restos de la reconstrucción', 0, '000', 'dg@gmail.com', '000', '2023-09-02 16:49:48', '2023-09-02 16:49:48'),
(165, 'The agora of smyrna', 14, 69, 'It was a square with two commercial areas and a basilica, what we can visit today are the remains of the reconstruction', 0, '000', 'dg@gmail.com', '00', '2023-09-02 16:50:56', '2023-09-02 16:50:56'),
(166, 'Bazares de kemeralti', 15, 51, 'Es uno de los bazares abiertos más grandes de Turquía. Se pueden hacer compras, comer y ver algunos monumentos de Esmirna.', 0, '00', 'dh@gmail.com', '000', '2023-09-02 16:55:22', '2023-09-02 16:55:22'),
(167, 'kemeralti bazaars', 14, 69, 'It is one of the largest open bazaars in Türkiye. You can shop, eat and see some of Izmir\'s monuments.', 0, '000', 'dg@gmail.com', '00', '2023-09-02 16:56:20', '2023-09-02 16:56:20'),
(168, 'Mezquita hisaronu o mezquita de hisar', 15, 51, 'Es uno de los lugares sagrados de los musulmanes en Esminar.', 0, '00', 'dh@gmail.com', '00', '2023-09-02 17:02:28', '2023-09-02 17:02:28'),
(169, 'Hisaronu Mosque or Hisar Mosque', 14, 69, 'It is one of the holy places of Muslims in Izmir', 0, '000', 'dh@gmail.com', '000', '2023-09-02 17:05:09', '2023-09-02 17:05:09'),
(171, 'Ciudad Antigua de Éfeso', 15, 51, 'Fue una de las doce ciudades jónicas a orillas del mar Egeo.', 0, '00', 'dg@gmail.com', '000', '2023-09-02 17:20:55', '2023-09-02 17:20:55'),
(172, 'Ancient City of Ephesus', 14, 69, 'It was one of the twelve Ionian cities on the shores of the Aegean Sea.', 0, '000', 'dh@gmail.com', '000', '2023-09-02 17:21:37', '2023-09-02 17:21:37'),
(173, 'La Casa de la Virgen María', 15, 51, 'Se ubica a las afueras de Éfeso, un importante centro cultural y religioso.', 0, '00', 'dg@gmail.com', '00', '2023-09-02 17:31:28', '2023-09-02 17:31:28'),
(174, 'The House of the Virgin Mary', 14, 69, 'It is located on the outskirts of Ephesus, an important cultural and religious center.', 0, '000', 'dh@gmail.com', '000', '2023-09-02 17:32:09', '2023-09-02 17:32:09'),
(175, 'Templo de Artemisa', 15, 51, 'Era un templo ubicado en la ciudad de Éfeso, dedicado a la diosa Artemisa, denominada Diana por los romanos.', 0, '00', 'dg@gmail.com', '00', '2023-09-02 18:37:52', '2023-09-02 18:37:52'),
(176, 'Temple of Artemis', 14, 69, 'It was a temple located in the city of Ephesus, dedicated to the goddess Artemis, called Diana by the Romans.', 0, '000', 'dh@gmail.com', '000', '2023-09-02 18:40:08', '2023-09-02 18:52:58'),
(177, 'Basílica de San Juan de Éfeso', 15, 51, 'Es una basílica de estilo bizantino situada en la antigua ciudad de Éfeso', 0, '00', 'dg@gmail.com', '00', '2023-09-02 18:43:35', '2023-09-02 18:43:35'),
(178, 'Basilica of Saint John of Ephesus', 14, 51, 'It is a Byzantine-style basilica located in the ancient city of Ephesus', 0, '000', 'dh@gmail.com', '000', '2023-09-02 18:44:57', '2023-09-02 18:44:57'),
(179, 'Basilica of st john', 14, 65, 'Was a basilica in Ephesus. It was constructed by Justinian I in the 6th century', 0, '00', 'em@gmail.com', '000000', '2023-09-02 18:47:23', '2023-09-02 18:47:23'),
(180, 'San Juan de Éfeso', 15, 65, 'Es una basílica de estilo bizantino situada en la antigua ciudad de Éfeso. Fue construida en 548 por orden del emperador Justiniano para honrar al apóstol Juan. Actualmente solo se conservan sus ruinas', 0, '000', 'em@gmail.com', '00000', '2023-09-02 18:48:32', '2023-09-02 18:48:32'),
(181, 'The port city', 14, 56, 'From Scala, a panoramic tour of the island', 0, '000', 'em@gmail.com', '00000', '2023-09-02 18:50:27', '2023-09-02 18:50:27'),
(182, 'La ciudad portuaria', 15, 56, 'Desde Scala, un recorrido panorámico por la isla', 0, '000', 'em@gmail.com', '0000', '2023-09-02 18:52:05', '2023-09-02 18:52:05'),
(183, 'Lambi beach', 14, 54, 'Beautiful beach of the charming town of Kambos', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:06:44', '2023-09-02 19:06:44'),
(184, 'Playa de Lambiel', 15, 51, 'Hermosa playa del encantador pueblo de Kambos', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:07:44', '2023-09-02 19:07:44'),
(185, 'Bodrum', 15, 72, 'Muğla es una ciudad situada al suroeste de Turquía, incluye las ciudades turísticas de Bodrum, Marmaris y Fethiye', 0, '00', 'dg@gmail.com', '00', '2023-09-02 19:09:24', '2023-09-02 19:09:24'),
(186, 'The Grotto of St. John,', 14, 55, 'Thesmall cave converted into a beautiful chapel, it is where the Saint lived, the town of Chora, with its simple houses and churches Byzantine', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:12:07', '2023-09-02 19:12:07'),
(187, 'Las Grutas de San Juan', 15, 55, 'La pequeña cueva convertida en una hermosa capilla, es donde vivió el Santo, el pueblo de Chora, con sus casas sencillas e iglesias bizantinas', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:13:00', '2023-09-02 19:13:00'),
(188, 'Monastery of St. John the Theologian', 14, 55, 'The museum\'s ancient treasury displaying an impressive collection of chalices jewellery, crowns, crucifixes, vestments and ancient manuscripts dating back to 1073', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:16:47', '2023-09-02 19:16:47'),
(189, 'Monasterio de San Juan el Teólogo', 15, 55, 'El encantador pueblo de Kambos, ver la hermosa playa de Lambi, (veremos la hermosa playa de Lambiel en el encantador pueblo de Kambos)', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:18:02', '2023-09-02 19:18:02'),
(190, 'La Isla de Patmos', 12, 73, 'Es un importante centro de atracción turística, de las más célebres y hermosas de Grecia.', 0, '00', 'dh@gmail.com', '00', '2023-09-02 19:21:12', '2023-09-02 19:21:12'),
(191, 'Chora Village', 13, 77, 'Through the ancient streets winding roads and enjoy the beautiful ancient architecture of Patmos. Free time for lunch and to explore the town on your own', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:21:29', '2023-09-02 20:19:19'),
(192, 'Pueblo de Chora', 12, 76, 'A través de las calles antiguas, caminos sinuosos y disfrute de la hermosa arquitectura antigua de Patmos. Tiempo libre para almorzar y explorar el pueblo por su cuenta', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:22:02', '2023-09-02 20:20:30'),
(193, 'The island of patmos', 12, 73, 'It is an important center of tourist attraction, one of the most famous and beautiful in Greece.', 0, '000', 'dg@gmail.com', '00', '2023-09-02 19:22:05', '2023-09-02 19:22:05'),
(194, 'Laodicea', 14, 75, 'It is the first archaeological site in Turkey where excavation and restoration work began for twelve months without interruption', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:31:25', '2023-09-02 19:31:25'),
(195, 'La Ciudad Antigua de Laodicea', 15, 75, 'Es el primer sitio arqueológico en Turquía donde se iniciaron trabajos de excavación y restauración durante doce meses sin interrupción', 0, '000', 'em@gmail.com', '00000', '2023-09-02 19:32:10', '2023-09-02 19:32:10'),
(196, 'Pueblo de Kámbos', 13, 76, 'Kámbos está situada circa de la villa Skála y del pueblo Pátmos', 0, '000', 'dh@gmail.com', '000', '2023-09-02 20:12:12', '2023-09-02 20:16:46'),
(197, 'Village Kámbos', 12, 77, 'Kámbos is situated close to the village Skála and the town Pátmos', 0, '000', 'dg@gmail.com', '00', '2023-09-02 20:14:30', '2023-09-02 20:25:21'),
(198, 'Laodisea', 15, 78, 'Fue una próspera ciudad comercial, ubicada en la intersección de dos importantes rutas, y famosa por sus textiles de lana y algodón', 0, '000', 'dh@gmail.com', '000', '2023-09-02 20:58:09', '2023-09-02 20:58:09'),
(199, 'Pamukkale', 15, 78, 'Es un área en la provincia de Denizli en el suroeste de Turquía', 0, '00', 'dg@gmail.com', '00', '2023-09-02 21:14:41', '2023-09-02 21:14:41'),
(200, 'Ciudad Antigua de Sardis', 15, 80, 'Ciudad antigua que tiene gimnasio y ruinas sinagogas y columnas en Manisa', 0, '00', 'dh@gmail.com', '000', '2023-09-02 21:25:44', '2023-09-02 21:25:44'),
(201, 'Sardis ancient city', 14, 80, 'Ancient city which has gymnasium and synagogue ruins and columns in Manisa', 0, '00', 'dg@gmail.com', '000', '2023-09-02 21:27:54', '2023-09-02 21:27:54'),
(202, 'Antigua ciudad griega de Pérgamo', 15, 81, 'Sus ruinas rodean a la actual ciudad de Bergama, construida sobre los cimientos de lo que fue la parte baja de Pérgamo', 0, '000', 'dh@gmail.com', '000', '2023-09-02 21:34:42', '2023-09-02 21:34:42'),
(203, 'Ancient city of Pergamum', 14, 81, 'Its ruins surround the current city of Bergama, built on the foundations of what was the lower part of Pergamon.', 0, '000', 'dh@gmail.com', '00', '2023-09-02 21:35:40', '2023-09-02 21:35:40'),
(204, 'Templo de Tiatira', 15, 80, 'Las antiguas ruinas de Tiatira no se tocaron hasta que Rustem Duyuran comenzó a excavar el sitio entre 1968 y 1971. Se encontraron numerosas inscripciones (21 enviadas al Museo de Manisa)', 0, '000', 'admin@gmail.com', '00', '2023-09-02 21:58:54', '2023-09-02 22:00:12'),
(205, 'Thyatira temple', 14, 80, 'The ancient ruins of Thyatira were not touched until Rustem Duyuran began excavating the site between 1968 and 1971. Numerous inscriptions were found (21 sent to the Museum of Manisa)', 0, '00', 'dg@gmail.com', '00', '2023-09-02 21:59:42', '2023-09-02 21:59:42'),
(206, 'Cascada de cúpulas de la Mezquita Azul', 15, 66, 'Son las diversas cúpulas y medias cúpulas que caen en cascada, con su característico color grisáceo, enmarcadas por sus seis minaretes', 0, '000', 'dg@gmail.com', '00', '2023-09-02 22:10:54', '2023-09-02 22:10:54'),
(207, 'Cascade of domes of the Blue Mosque', 14, 66, 'They are the various domes and half domes that cascade down, with their characteristic greyish color, framed by their six minarets.', 0, '00', 'dh@gmail.com', '00', '2023-09-02 22:11:40', '2023-09-02 22:11:40'),
(208, 'Mezquita del Sultán Ahmet', 15, 66, 'Más conocida como la \"Mezquita Azul\", que domina el horizonte de Estambul.', 0, '00', 'dg@gmail.com', '00', '2023-09-02 22:13:32', '2023-09-02 22:13:32'),
(209, 'Sultan Ahmet Mosque', 15, 66, 'Better known as the \"Blue Mosque\", it dominates the Istanbul skyline.', 0, '000', 'dg@gmail.com', '00', '2023-09-02 22:14:30', '2023-09-02 22:14:30'),
(210, 'Nazareth', 11, 19, 'The childhood home of Jesus', 0, '000', 'em@gmail.com', '00000', '2023-09-03 00:59:00', '2023-09-03 00:59:00'),
(211, 'Beth-Shan', 11, 12, 'The most important Roman amphitheaters', 0, '000', 'em@gmail.com', '00000', '2023-09-03 01:29:16', '2023-09-03 01:29:16'),
(212, 'El museo del Holocausto', 11, 46, 'Escondido en una calle arbolada del barrio de Hadar, es probablemente el más pequeño de su tipo en el pais', 0, '000', 'em@gmail.com', '00000', '2023-09-03 14:07:31', '2023-09-03 14:07:31'),
(213, 'Holocaust museum', 11, 27, 'Tucked away on a tree-lined street in the Hadar neighborhood, it is probably the smallest of its kind in the country', 0, '000', 'em@gmail.com', '00000', '2023-09-03 14:08:09', '2023-09-03 14:08:09'),
(214, 'Smyrna', 14, 54, 'Was a Greek city located at a strategic point on the Aegean coast of Anatolia', 0, '000', 'em@gmail.com', '00000', '2023-09-04 12:19:15', '2023-09-04 12:19:15'),
(215, 'Esmirna', 15, 51, 'Era una ciudad griega situada en un punto estratégico de la costa egea de Anatolia', 0, '000', 'em@gmail.com', '00000', '2023-09-04 12:19:53', '2023-09-04 12:19:53'),
(216, 'Hagia Sophia Church', 14, 52, 'Now it is a museum, it was built by Emperor Justinianos', 0, '000', 'em@gmail.com', '00000', '2023-09-04 12:45:21', '2023-09-04 12:45:21'),
(217, 'Iglesia de Santa Sofia', 15, 66, 'Ahora es un museo, fue construido por el emperador Justinianos', 0, '000', 'em@gmail.com', '00000', '2023-09-04 12:47:27', '2023-09-04 12:47:27'),
(218, 'Mezquita del Sultán Ahmet o Mezquita Azul', 15, 66, 'Domina el horizonte de Estambul', 0, '000', 'em@gmail.com', '00000', '2023-09-04 12:49:04', '2023-09-04 12:49:04'),
(219, 'Sultan Ahmet Mosque better known as the \"Blue Mosque\"', 14, 52, 'Dominates the Istanbul skyline', 0, '000', 'em@gmail.com', '00000', '2023-09-04 12:50:37', '2023-09-04 12:50:37'),
(220, 'Monte Grisim y Silo', 15, 87, 'Es el lugar más sagrado para los samaritanos Aseguran que es aquí donde aparecerá el Mesías, y no en Jerusalén', 0, '000', 'em@gmail.com', '00000', '2023-09-04 16:49:30', '2023-09-04 16:49:30'),
(221, 'Mount Grisim and Silo', 14, 86, 'It is the most sacred place for the Samaritans They assure that it is here where the Messiah will appear, and not in Jerusalem', 0, '000', 'em@gmail.com', '00000', '2023-09-04 16:51:23', '2023-09-04 16:51:23'),
(222, 'Mount Grisim and Silo', 14, 86, 'It is the most sacred place for the Samaritans They assure that it is here where the Messiah will appear, and not in Jerusalem', 0, '000', 'em@gmail.com', '00000', '2023-09-04 16:51:23', '2023-09-04 16:51:23'),
(223, 'Sea ​​of ​​galilee', 11, 30, 'The Sea of ​​Galilee feeds Israel\'s National Aqueduct', 0, '000', 'dh@gmail.com', '00', '2023-09-04 16:54:33', '2023-09-04 16:54:33'),
(224, 'Monasterio de Muhraka', 15, 8, 'Aquí es la escena de la actuación del Profeta Elías', 0, '000', 'em@gmail.com', '00000', '2023-09-04 16:58:46', '2023-09-04 16:58:46'),
(225, 'Beth Shan Amphitheater', 11, 12, 'In Beth-Shan the remains of the theater and amphitheater have been discovered', 0, '000', 'dg@gmail.com', '00', '2023-09-04 17:00:21', '2023-09-04 17:00:21'),
(226, 'Muhraqa Monastery', 14, 8, 'Here is the scene of the performance of the Prophet Elijah', 0, '000', 'em@gmail.com', '00000', '2023-09-04 17:00:44', '2023-09-04 17:00:44'),
(227, 'Cesárea Marítima', 15, 43, 'Lugar de la prisión de Paulo', 0, '000', 'em@gmail.com', '00000', '2023-09-04 17:01:36', '2023-09-04 17:01:36'),
(228, 'Maritime Caesarean section', 14, 29, 'The place of Paulo\'s prison', 0, '000', 'em@gmail.com', '00000', '2023-09-04 17:02:36', '2023-09-04 17:02:36'),
(229, 'Ciudad de Mexico', 16, 84, 'Ciudad de Mexico', 0, '000', 'em@gmail.com', '00000', '2023-09-04 19:12:31', '2023-09-04 19:12:31'),
(230, 'Samaria', 11, 87, 'Es una región montañosa de la antigua Palestina, ​ ubicada en la parte central de los territorios habitados por las Tribus de Israel', 0, '000', 'em@gmail.com', '00000', '2023-09-04 19:23:32', '2023-09-04 19:23:32'),
(231, 'Shomron', 11, 86, 'It is a mountainous region of ancient Palestine, located in the central part of the territories inhabited by the Tribes of Israel', 0, '000', 'em@gmail.com', '00000', '2023-09-04 19:24:17', '2023-09-04 19:24:17'),
(232, 'Valle de Magdala', 11, 91, 'Era un pueblo de la era Bíblica en la costa occidental del Mar de Galilea en el norte de Israel y un importante puerto comercial', 0, '000', 'em@gmail.com', '00000', '2023-09-04 20:29:46', '2023-09-04 20:29:46'),
(233, 'The Magdala Valley', 11, 91, 'It was a Biblical-era town on the western shore of the Sea of ​​Galilee in northern Israel and a major trading port.', 0, '000', 'em@gmail.com', '00000', '2023-09-04 20:31:10', '2023-09-04 20:31:10'),
(234, 'Altos del Golán', 11, 92, 'Meseta ubicada en la frontera entre Israel, Líbano, Jordania y Siria', 0, '000', 'em@gmail.com', '00000', '2023-09-04 23:16:46', '2023-09-04 23:16:46'),
(235, 'Golan Heights', 11, 93, 'Plateau located on the border between Israel, Lebanon, Jordan and Syria', 0, '000', 'em@gmail.com', '00000', '2023-09-04 23:17:54', '2023-09-04 23:17:54'),
(236, 'Golan Heights', 11, 93, 'Plateau located on the border between Israel, Lebanon, Jordan and Syria', 0, '000', 'em@gmail.com', '00000', '2023-09-04 23:17:54', '2023-09-04 23:17:54'),
(237, 'Fuente de Ein Harod', 11, 94, 'Donde Gedeón derrotó a los medianitas', 0, '000', 'em@gmail.com', '00000', '2023-09-04 23:33:48', '2023-09-04 23:33:48'),
(238, 'Ein Harod Fountain', 11, 94, 'Where Gideon defeated the Midianites', 0, '000', 'em@gmail.com', '00000', '2023-09-04 23:35:01', '2023-09-04 23:35:01'),
(239, 'antigua beach', 17, 81, 'sight of a beach', 10, 'no', 'antigua@gmail.com', '4123242144124', '2023-10-13 18:55:08', '2023-10-13 18:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `sights_distant`
--

CREATE TABLE `sights_distant` (
  `id` bigint(20) NOT NULL,
  `distant_sight_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `first_site` varchar(255) NOT NULL,
  `second_site` varchar(255) NOT NULL,
  `sight_distant` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sights_distant`
--

INSERT INTO `sights_distant` (`id`, `distant_sight_name`, `country_id`, `city_id`, `first_site`, `second_site`, `sight_distant`, `created_at`, `updated_at`) VALUES
(4, 'Cesaria    to  Hifea', 11, 8, 'Cesarea', 'Haifa', '30', '2023-09-24 14:36:09', '2023-09-24 14:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `sights_reservation`
--

CREATE TABLE `sights_reservation` (
  `id` bigint(20) NOT NULL,
  `sight_reservation` varchar(255) NOT NULL,
  `sight_id` int(11) NOT NULL,
  `tour_leader_tour_id` int(11) NOT NULL,
  `reservation_date` datetime NOT NULL,
  `confirmation_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sight_visit_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sights_reservation`
--

INSERT INTO `sights_reservation` (`id`, `sight_reservation`, `sight_id`, `tour_leader_tour_id`, `reservation_date`, `confirmation_date`, `created_at`, `updated_at`, `sight_visit_date`) VALUES
(5, 'paris to france', 19, 4, '2023-12-12 00:00:00', '1234-02-02 00:00:00', '2023-10-07 18:44:54', '2023-10-14 23:02:23', '3033-10-20'),
(7, 'merida', 62, 11, '2023-10-20 00:00:00', NULL, '2023-10-12 19:09:39', '2023-10-14 23:01:38', '23234-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `sight_media`
--

CREATE TABLE `sight_media` (
  `id` bigint(20) NOT NULL,
  `sight_id` int(11) NOT NULL,
  `media_type_id` int(11) NOT NULL,
  `media_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sight_media`
--

INSERT INTO `sight_media` (`id`, `sight_id`, `media_type_id`, `media_link`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'link.net', '2023-07-30 02:28:36', '2023-07-30 02:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `special_request`
--

CREATE TABLE `special_request` (
  `id` bigint(20) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `special_request` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special_request`
--

INSERT INTO `special_request` (`id`, `passenger_id`, `special_request`, `created_at`, `updated_at`) VALUES
(3, 4, 'qwertyuiopdfghjkl qwertyuiopdfghjkl  qwertyuiopdfghjkl', '2023-09-07 06:30:21', '2023-09-07 06:30:21'),
(5, 6, 'Hello, Test', '2023-09-08 09:57:44', '2023-09-08 09:57:44'),
(6, 9, 'hello     testing', '2023-09-08 16:03:54', '2023-09-08 16:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `s_first_name` varchar(255) NOT NULL,
  `s_last_name` varchar(255) NOT NULL,
  `s_city` varchar(255) NOT NULL,
  `s_country` varchar(255) NOT NULL,
  `s_phone` varchar(16) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `type`, `s_first_name`, `s_last_name`, `s_city`, `s_country`, `s_phone`, `s_email`, `s_password`, `created_at`, `updated_at`) VALUES
(14, 'ATP', 'Airline', 'Supplier', 'NJ', 'USA', '12345678985', 'satp@gmail.com', '$2y$10$pWLzJ5S8HNCXTjf9DPRz7OMaIlg0zA8WlMgAk9jnVPjpo553NmDiq', '2023-08-06 09:47:30', '2023-08-06 09:47:30'),
(15, 'BC', 'Ground', 'Transportation', 'NJ', 'USA', '12345678985', 'sbc@gmail.com', '$2y$10$oxf4junVsJFeD.YqrvwwKuVrapV/NaKL71F5Ft98.JhtmBT7QXGF6', '2023-08-06 09:53:51', '2023-08-06 09:53:51'),
(16, 'ATP', 'Raz', 'Suplier Trans', 'dsad', 'sadas', '3432', 'tp@gmail.com', '$2y$10$4OT6plkW/1mR4.dmZJUQyOLy3nppTg7AZTaDA2gqQTX7YRJdKHChS', '2023-08-08 04:17:40', '2023-08-08 04:22:20'),
(22, 'BC', 'Daniel bus', 'Daniel malka', 'Jerusalem', 'Israel 1234', '123456789', 'daniel@gmail.com', '$2y$10$KvA0p0tn4Ur6vk.1rxD.nuAWqH.CqxHjp1LVGE0n0gakbFPpdsqXe', '2023-10-12 16:25:24', '2023-10-12 16:25:24'),
(24, 'ATP', 'emirates', 'airline', 'dubai', 'arab emirates', '1234567', 'emirates@gmail.com', '$2y$10$lmYzuWe.zhn6E0tBWerh/evVGynKqRASYOoL.IH6KtEW/VWf/ct.O', '2023-10-14 21:32:15', '2023-10-14 21:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_type`
--

CREATE TABLE `supplier_type` (
  `id` bigint(20) NOT NULL,
  `supplier_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier_type`
--

INSERT INTO `supplier_type` (`id`, `supplier_type`, `created_at`, `updated_at`, `user_type`) VALUES
(8, 'Airline', '2023-10-13 13:27:42', '2023-10-13 13:44:25', 'ATP'),
(9, 'Bus services', '2023-10-13 15:05:21', '2023-10-13 15:05:21', 'BC'),
(10, 'boat services', '2023-10-14 21:42:22', '2023-10-14 21:42:22', 'BC');

-- --------------------------------------------------------

--
-- Table structure for table `tourleader_tour`
--

CREATE TABLE `tourleader_tour` (
  `id` bigint(20) NOT NULL,
  `tourleader_id` int(11) NOT NULL,
  `gti_id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `athens_departure_date` datetime NOT NULL,
  `tour_cost` float NOT NULL,
  `language` varchar(255) DEFAULT NULL,
  `tour_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourleader_tour`
--

INSERT INTO `tourleader_tour` (`id`, `tourleader_id`, `gti_id`, `tour_name`, `athens_departure_date`, `tour_cost`, `language`, `tour_code`, `created_at`, `updated_at`) VALUES
(4, 10, 2, 'Daniel Malka  12 days holy land  and  Greece    march 2024', '2024-03-04 10:18:00', 3500, 'English', 105, '2023-09-01 11:18:59', '2023-10-03 16:14:47'),
(11, 10, 9, '14 days israel daniel', '2032-10-20 00:00:00', 2490, 'English (United Kingdom)', 1994, '2023-10-05 16:19:49', '2023-10-14 22:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `tour_bookings`
--

CREATE TABLE `tour_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `gti_id` int(11) DEFAULT NULL,
  `deparature_city` int(11) DEFAULT NULL,
  `deparature_date` datetime DEFAULT NULL,
  `group_size` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tour_bookings`
--

INSERT INTO `tour_bookings` (`id`, `gti_id`, `deparature_city`, `deparature_date`, `group_size`, `price`, `created_at`, `updated_at`) VALUES
(4, 2, 7, '2023-09-05 22:37:00', 23, 323, '2023-09-03 12:37:42', '2023-09-03 12:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `tour_leader_info`
--

CREATE TABLE `tour_leader_info` (
  `id` bigint(20) NOT NULL,
  `tlfirst_n` varchar(255) NOT NULL,
  `tl_m_name` varchar(255) NOT NULL,
  `ti_l_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `church_name` varchar(255) NOT NULL,
  `church_denomination` varchar(255) NOT NULL,
  `church_members` varchar(255) NOT NULL,
  `church_phone` varchar(16) NOT NULL,
  `church_email` varchar(255) NOT NULL,
  `th_email` varchar(255) NOT NULL,
  `th_phone` varchar(16) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `th_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_leader_info`
--

INSERT INTO `tour_leader_info` (`id`, `tlfirst_n`, `tl_m_name`, `ti_l_name`, `address`, `city`, `state`, `zip`, `church_name`, `church_denomination`, `church_members`, `church_phone`, `church_email`, `th_email`, `th_phone`, `user`, `password`, `th_id`, `created_at`, `updated_at`) VALUES
(10, 'Daniel', 'hola', 'malka', '212   Wyndemere', 'Princeton', 'TX', '75407', 'my  own', 'Baptist', '200', '16824336813', 'danielmalka@live.com', 'danielmalka@live.com', '16824336813', 'danielmalka@live.com', '$2y$10$mbXKV0Nj/ch0QniozZjAye5whA3ybvtWlmTIzJWswiAUkHs1rTuF6', NULL, '2023-09-01 11:12:59', '2023-10-03 15:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `transport_cost`
--

CREATE TABLE `transport_cost` (
  `id` bigint(20) NOT NULL,
  `car_type_id` int(11) NOT NULL,
  `transport_type_id` int(11) NOT NULL,
  `cost` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport_cost`
--

INSERT INTO `transport_cost` (`id`, `car_type_id`, `transport_type_id`, `cost`, `created_at`, `updated_at`) VALUES
(2, 5, 1, 280, '2023-09-01 11:48:05', '2023-09-01 11:48:05'),
(5, 7, 1, 120, '2023-10-14 23:03:55', '2023-10-14 23:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `transport_reservation`
--

CREATE TABLE `transport_reservation` (
  `id` bigint(20) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `tourleader_tour_id` int(11) NOT NULL,
  `tour_code` varchar(255) NOT NULL,
  `transport_cost` float NOT NULL,
  `service_date` datetime NOT NULL,
  `confirm_date` datetime DEFAULT NULL,
  `confirm_price` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transport_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport_reservation`
--

INSERT INTO `transport_reservation` (`id`, `supplier_id`, `tourleader_tour_id`, `tour_code`, `transport_cost`, `service_date`, `confirm_date`, `confirm_price`, `created_at`, `updated_at`, `transport_type`) VALUES
(17, 23, 4, '105', 200, '2032-10-20 00:00:00', '2023-10-20 00:00:00', 200, '2023-10-13 20:10:03', '2023-10-14 23:03:02', 6),
(18, 23, 16, '1234', 1234, '2032-10-20 00:00:00', NULL, NULL, '2023-10-14 18:30:05', '2023-10-14 18:30:05', 12);

-- --------------------------------------------------------

--
-- Table structure for table `transport_type`
--

CREATE TABLE `transport_type` (
  `id` bigint(20) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport_type`
--

INSERT INTO `transport_type` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Car Service', '2023-07-30 00:03:25', '2023-07-30 00:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `last_period_date` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('Admin','Host','Hotel','Guide','User','Passenger','Leader','ATP','BC','OP') NOT NULL DEFAULT 'User',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `push_sent` int(11) DEFAULT NULL COMMENT 'value will be the fetus value'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `last_period_date`, `password`, `type`, `remember_token`, `created_at`, `updated_at`, `push_sent`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-01-22 19:26:06', '01958457547', '12/11/2021', '$2y$10$hp5H3iYBUcIBWFVSu3mh3.003xrET7/LtC3lfm3keJU9e3endyaC.', 'Admin', 'bZoI1aSdwGDG4PyQc5cJEOgHxiLT89uAyNo76GXfHKK6qjxJekPULcYkFAJp', '2023-01-22 19:26:06', '2023-09-05 18:51:16', NULL),
(85, 'Passenger', 'p@gmail.com', NULL, '3432432', NULL, '$2y$10$ehiFIsbq5OSm3fin43IBSeQYxqM//olQjV0IWinBhXODqp/evlkMu', 'Passenger', NULL, '2023-07-29 23:10:02', '2023-07-29 23:10:02', NULL),
(86, 'Tour Leader', 'l@gmail.com', NULL, '32432432', NULL, '$2y$10$AswhIoFtfiEuP.w0dl3TVOSxKZ3LoAwObBuVQ/r5MN2lGiRm2fYwm', 'Leader', NULL, '2023-07-29 23:11:19', '2023-07-29 23:11:19', NULL),
(87, 'Supplier', 's@gmail.com', NULL, '543543', NULL, '$2y$10$1rBIwk5kecsosVjd9.gZweE9LGST7V9Yge1SbKvIWMTGp5TEQoCWm', 'ATP', NULL, '2023-07-29 23:11:39', '2023-07-29 23:11:39', NULL),
(92, 'Hotel Name', 'h@gmail.com', NULL, '12345678911', NULL, '$2y$10$3QAmJFMCaiNa61m6OtcXpuZIMkh05WU3I.RhYHLSHBVe3QECZvpm2', 'Hotel', NULL, '2023-08-05 00:41:03', '2023-08-05 00:41:03', NULL),
(94, 'First Name', 'gg@gmail.com', NULL, '123456789987', NULL, '$2y$10$s58663pcBkEFpqEbPpkVv.TYLPSrYXzmoNbkSNlXqJ49uhCfhbsRW', 'Guide', NULL, '2023-08-05 11:45:15', '2023-08-05 11:45:15', NULL),
(97, 'Airline', 'satp@gmail.com', NULL, '12345678985', NULL, '$2y$10$nRirArdnDRaTvpNCbYDI2u16/ZYEDi70KYINCJX2DaA17mB.eFSAe', 'ATP', NULL, '2023-08-06 09:47:30', '2023-08-06 09:47:30', NULL),
(98, 'Ground', 'sbc@gmail.com', NULL, '12345678985', NULL, '$2y$10$A9ZthyuxYnq2D3Fo/70shOfO8h91D/hJS5TfSX1nqCj6Hv/2/8opW', 'BC', NULL, '2023-08-06 09:53:51', '2023-08-06 09:53:51', NULL),
(99, 'test3', 'ldr@gmail.com', NULL, '11223344556', NULL, '$2y$10$9ZkisFIOZe2e4//6095HM.tlMqmtOt8X6WhbQ0tqIBdom55x5lfWC', 'Leader', NULL, '2023-08-07 01:13:31', '2023-08-07 01:13:31', NULL),
(100, 'A', 'psgr@gmail.com', NULL, '123456789987', NULL, '$2y$10$u9vD.T3uYdg3NsixSOE76e4f62Vz.BiXcBGpIipN0fkUA36tjTHK.', 'Passenger', NULL, '2023-08-07 01:16:09', '2023-08-07 01:16:09', NULL),
(101, 'aaaaaaaaaaaaaa', 'p1@gmail.com', NULL, '123456789987', NULL, '$2y$10$9x5YnSvM./1T6rM0VoEN/e6sgcqnZSPhlikIpr6LFub/HCJQi4v5u', 'Passenger', NULL, '2023-08-07 13:00:23', '2023-10-14 16:11:26', NULL),
(102, 'test4', 'l444@gmail.com', NULL, '1122334455655', NULL, '$2y$10$qY/gkxpL1BbwGDcdHM.XrOqLQhtxrg3wt8eAaSEjDeB3gUWconyB6', 'Leader', NULL, '2023-08-07 13:09:03', '2023-08-07 13:09:03', NULL),
(103, 'Raz', 'raz_tl@gmail.com', NULL, '687687', NULL, '$2y$10$pqyp2DJMudr48BspGKpBGezQnNO51MNyEe7t4fX97b7.wMx.C8jnG', 'Leader', NULL, '2023-08-08 02:21:23', '2023-08-08 02:28:12', NULL),
(104, 'Raz', 'r_tl@gmail.com', NULL, 'dsd', NULL, '$2y$10$jHblaHqe5QXor0/qhnog/OCQT3FCeMJpDJ9WqakXp9f7Nry4D996a', 'Leader', NULL, '2023-08-08 04:29:10', '2023-08-08 04:29:10', NULL),
(105, 'Sea Gul', 'sea@g.com', NULL, '32432', NULL, '$2y$10$8IDQP9nERoirDno/yAbdL.ad0zzayziFGuselgyNj9NkNwN/e8m1G', 'Hotel', NULL, '2023-08-08 05:03:15', '2023-08-08 05:03:15', NULL),
(106, 'sdsa', 'tp@gmail.com', NULL, '3432', NULL, '$2y$10$vD.M1QAjPM/JdcFFnb4w/uqMNu1305H0vnqKNTD.EwBWwJS2bYRtC', 'ATP', NULL, '2023-08-08 04:17:40', '2023-08-08 04:17:40', NULL),
(107, 'dfcds', 'bus@gmail.com', NULL, '4543', NULL, '$2y$10$JI/809.qYo2EFOPafWyIC.vviJng/L2QnwKxKNU6kSkR3snfYDkfS', 'BC', NULL, '2023-08-08 04:20:54', '2023-08-08 04:20:54', NULL),
(108, 'Joribel', 'aaa@gmail.com', NULL, '2222222', NULL, '$2y$10$qx44YYFNVNlA.7bajdmPFOnhAMcu52CvOz0mrg3D2e7Lxq2Bw2ftO', 'Leader', NULL, '2023-08-25 10:48:17', '2023-08-25 10:48:17', NULL),
(109, 'Alejandra', 'na@gmail.com', NULL, '00', NULL, '$2y$10$sTPBJV4tHOeer/Pn9/4SWurKMwAma.eyD2CIUniikmIcmh.KLTKR.', 'Leader', NULL, '2023-08-31 12:18:46', '2023-08-31 12:18:46', NULL),
(110, 'Daniel', 'danielmalka@live.com', NULL, '16824336813', NULL, '$2y$10$0BSrVtjbVuFx7S5GA0wZE.fgPBU46L31ULwp95QtJ6zqua1WU357i', 'Leader', NULL, '2023-09-01 11:12:59', '2023-09-01 11:12:59', NULL),
(111, 'Roman', 'roman@gmail.com', NULL, '+52xxxxxx', NULL, '$2y$10$HtipQsYXIAubFhjLwIdoCeFp.44f2lr4PpaysQIBPrzm1isBlSJ0q', 'ATP', NULL, '2023-09-01 11:25:36', '2023-09-01 11:25:36', NULL),
(112, 'david dempo', 'daviddampo@gmail.com', NULL, '3333333333', NULL, '$2y$10$PnKE.NhF2.3Ed7EtCjFIEOuodMiwY5h3OthypHsLSrGbLdEQqrFpC', 'Passenger', NULL, '2023-09-02 12:18:15', '2023-09-02 12:18:15', NULL),
(113, 'raz', 'raz@gmail.com', NULL, 'xxxxxxxxxx', NULL, '$2y$10$NLO8AX68Km2g05/1g9NiMOXU3PbQf6Fq6Mf/VwzcbkXF/Bd4NOukq', 'Leader', NULL, '2023-09-03 09:40:29', '2023-09-03 09:40:29', NULL),
(114, 'lory', 'lory@gmail.com', NULL, 'xxxxxxx', NULL, '$2y$10$6egUxd9qdna94X9QJOGpt.HBQxF5OqLSNmR5w/abt7UY0Rfx68Qty', 'Passenger', NULL, '2023-09-03 09:57:55', '2023-09-03 09:57:55', NULL),
(115, 'lory', 'lory1@gmail.com', NULL, 'xxxxx', NULL, '$2y$10$h5lv35OEurJ7Khy5RWRE/.vR.B.rlAHPHmo7X8a5lS7Qa9AysdlY6', 'Passenger', NULL, '2023-09-03 10:00:39', '2023-09-03 10:00:39', NULL),
(116, 'lory', 'lory1@gmail.com', NULL, 'xxxxx', NULL, '$2y$10$nL4nV1HAd6gBtFMgzfveaeCYL0vR1MVMItGdzHJkkMAux8tR4xVZm', 'Passenger', NULL, '2023-09-03 10:00:39', '2023-09-03 10:00:39', NULL),
(117, 'Lula', 'lula@gmail.com', NULL, '22222222', NULL, '$2y$10$uxHmd5zgnG2c1sxeJvRXLeEa.wa1aN0HBDdknUbd7WcNcK80NDfUa', 'Passenger', NULL, '2023-09-08 15:54:51', '2023-09-08 16:02:51', NULL),
(118, 'Lula', 'lula@gmail.com', NULL, '22222222', NULL, '$2y$10$jgeyDq/j09S5NT8D//vjWOCrDDzwpjh/wnB68XB2eY30Ul6V02oPi', 'Passenger', NULL, '2023-09-08 15:54:51', '2023-09-08 15:54:51', NULL),
(119, 'nora', 'nora@gmail.com', NULL, '2222', NULL, '$2y$10$MYuAt74Hkk6uVP2Tn.CSPOVN3BeWjoLouMMLSx/5JagX8qKlzBjIu', 'Passenger', NULL, '2023-09-08 23:55:27', '2023-09-08 23:55:27', NULL),
(120, 'nora', 'nora@gmail.com', NULL, '2222', NULL, '$2y$10$IfhLTOmKcNl79pRWEFzr/eR8rlb.cEOH8WQOKBpEYWP1LdsUrtIR6', 'Passenger', NULL, '2023-09-08 23:55:27', '2023-09-08 23:55:27', NULL),
(121, 'Mr', 'raz.abcoder@gmail.com', NULL, '+8801724160299', NULL, '$2y$10$F64YV1bNX16wsRDV5DZSse8wvfatpBVE42oywKzvtxdvDQ7Tp5FCi', 'Passenger', NULL, '2023-09-09 10:07:47', '2023-09-09 10:07:47', NULL),
(122, '56756', '56756756@dsad-cce.ce', NULL, '756756756', NULL, '$2y$10$DJ08np8MuiZffPyI/oNFnOgNScYKjiXuaQzTvb4pD.PPivIO5k2j6', 'Passenger', NULL, '2023-10-02 15:35:53', '2023-10-02 15:35:53', NULL),
(123, 'moicge', 'moises@gmail.es', NULL, '23dfgdfgdgfd', NULL, '$2y$10$9DSatWeZ/7oeIXht9cOAF.xZa3EbR496R/SOAigq1Tbn3ggyVYVTS', 'Passenger', NULL, '2023-10-02 16:12:33', '2023-10-02 16:12:33', NULL),
(124, 'mezr', 'ellider@gmail.com', NULL, '589567567', NULL, '$2y$10$/V4kJshnLa9seifrHUXUbeY/6b7AxSFVIiHNwNlto5BMViYxKhYHC', 'Leader', NULL, '2023-10-03 15:00:36', '2023-10-03 15:00:36', NULL),
(125, 'juan', 'hola@gmail.es', NULL, '01241424', NULL, '$2y$10$DlPYyyhJKYCPoVjaaGbileu6fC7qEfgIaGI61oy6sZoxR/tWeK1A6', 'Guide', NULL, '2023-10-05 14:13:24', '2023-10-05 14:13:24', NULL),
(126, 'gdfgdfgfdg', 'hola@gmail.esasd', NULL, '43534634643', NULL, '$2y$10$0z2pUpD.2LfkKDYGVL6P7OmFd/5b7y2ia/olVFS8kkuREOFpZzG/O', 'Guide', NULL, '2023-10-05 16:23:40', '2023-10-05 16:23:40', NULL),
(127, 'manuel', 'equis@hol.esc', NULL, '23532525', NULL, '$2y$10$WV/lxKElMbxkmdqERiiM1eBIbEe41uA2zSE0rWM02J/UMzsPVMxxS', 'Guide', NULL, '2023-10-05 16:41:29', '2023-10-05 16:41:29', NULL),
(128, 'maria', 'marimari@caca.tota', NULL, '82742793', NULL, '$2y$10$OXeae7t33a1bHTfWqQGLBebbeYt0BMObTdkUFbcbgzMe9UxFYFZWi', 'Leader', NULL, '2023-10-05 16:49:35', '2023-10-05 16:49:35', NULL),
(129, 'moises air', 'mair@air.com', NULL, '5634643643', NULL, '$2y$10$1w2BtqporH6Nc/pq8qHTVe18rUvaX8DxKCblbMEqcGorjkX5QeWeG', 'ATP', NULL, '2023-10-06 13:08:24', '2023-10-06 13:08:24', NULL),
(130, 'moises bus', 'mair@air.ces', NULL, '563464364324', NULL, '$2y$10$9MXOOjseZ82Vx7SVKrdFTOrzpyl/n6K.qUNFzuru/p4qaAdvmUBfS', 'BC', NULL, '2023-10-06 13:09:51', '2023-10-06 13:09:51', NULL),
(131, 'laja real', 'lajareal@gmail.com', NULL, '34634343', NULL, '$2y$10$1LTxSWwLGqzp4x2CpTNv7ugpSRTUo9TyytIqWEH9n2PETq1ZQgbG.', 'Hotel', NULL, '2023-10-06 13:45:06', '2023-10-06 13:45:06', NULL),
(132, 'jonas', 'jonaszurita@gmail.com', NULL, '04148932333', NULL, '$2y$10$E7fuYDdGfSgk9SloSahEz.1IOrC3q9RpPdMhyN3OnEuN/98.zSznm', 'Passenger', NULL, '2023-10-07 04:32:20', '2023-10-07 04:32:20', NULL),
(133, 'juanch', 'hoaadfqsdgsd@revcd.cds', NULL, '254232353', NULL, '$2y$10$4XpIxC.PLuX.CXY3Lq/zqewtWXDgeo..Frdu7phuIpeaU9efVUinm', 'Passenger', NULL, '2023-10-07 19:59:58', '2023-10-07 19:59:58', NULL),
(134, 'maria', 'maria@maria.com', NULL, '1123124321', NULL, '$2y$10$4Sc8q0C27HPoAG512wwg6.ttOZXkvNntdxgi87/Mq34kIcBw2mTMC', 'Passenger', NULL, '2023-10-07 20:11:05', '2023-10-07 20:11:05', NULL),
(135, 'norma', 'norma@gmail.com', NULL, '123456789', NULL, '$2y$10$MGzmYNjULzpyLAkfIxgo/eGTN8m8FO34JWJYVsNXKW2Pp9TKbExLO', 'Leader', NULL, '2023-10-09 13:31:46', '2023-10-09 13:31:46', NULL),
(136, 'prueba', '1234@1234.1234', NULL, '12345', NULL, '$2y$10$I9Z229nXaE0IF5m7liJFsuRd08CLKXIdQEX.u7/tYNeYHWUNM0WC.', 'Passenger', NULL, '2023-10-09 16:26:41', '2023-10-09 16:26:41', NULL),
(137, 'moises buss', 'bus@bus.com', NULL, '12121212112', NULL, '$2y$10$MefUgHaINcgAA66nr/z15OtCWKC4nawM1o.xDjazSsPFr8Zy1LlyW', 'BC', NULL, '2023-10-12 15:16:33', '2023-10-12 15:16:33', NULL),
(138, 'Daniel bus', 'daniel@gmail.com', NULL, '123456789', NULL, '$2y$10$3PSaFsmNJ2DD12gihZdLLOemWjCU9XmGwuNqozu1g0JyxPZp1M1Wq', 'BC', NULL, '2023-10-12 16:25:23', '2023-10-12 16:25:23', NULL),
(139, 'bus company', 'moises@gmail.com', NULL, '11223344', NULL, '$2y$10$F8SWk/m/I7G584rOf2u2rexhG2gzAq7QYHDyx7Zxqo5w0jeQJhMky', 'BC', NULL, '2023-10-13 14:01:12', '2023-10-13 16:02:20', NULL),
(140, 'carmen', 'carmen@gmail.com', NULL, '1663994555', NULL, '$2y$10$.HKVmYN8weia6eXehiQOTO7MzXvQoOYW1EyInhAvZObNjKRkvu9Zu', 'Leader', NULL, '2023-10-13 18:49:46', '2023-10-13 18:49:46', NULL),
(141, 'jose', 'jose@gmail.com', NULL, '03331251', NULL, '$2y$10$BXS6uYCrsZUCxvGKaJ8NK.pKQEt77MIhxbwVew5jrlrLm5kywmoY6', 'Guide', NULL, '2023-10-13 19:09:20', '2023-10-13 19:09:20', NULL),
(142, 'First operator', 'operator@gmail.com', NULL, '123456789', NULL, '$2y$10$Xn61SX9kxFjf4FTTF27QPec/.AVAr1S1eIabgFHwMNeMd0.qgr51m', 'OP', NULL, '2023-10-14 16:17:07', '2023-10-14 16:17:07', NULL),
(143, 'operator', 'operator@operator.com', NULL, '12345', NULL, '$2y$10$yVtzLamzxgp4UShaZvKGAekoscD/NMuOef8mdj8YRVdm24e6m.4kO', 'Leader', NULL, '2023-10-14 17:33:43', '2023-10-14 17:33:43', NULL),
(144, 'operator', 'operator@operator.operator', NULL, '123456789', NULL, '$2y$10$XbzermatAFMKN/BY37ESEu5V.UCZpHnQrABjYVyLOuJSq6oy2XxNa', 'Guide', NULL, '2023-10-14 18:45:24', '2023-10-14 18:45:24', NULL),
(145, 'emirates', 'emirates@gmail.com', NULL, '1234567', NULL, '$2y$10$uo32kp74prs66U.5w1MlRugFXYZGDxED68g4OjAOrl5IdueimLQa2', 'ATP', NULL, '2023-10-14 21:32:15', '2023-10-14 21:32:15', NULL),
(146, 'moichehhhh', 'operator@gmail.operator', NULL, '123456789', NULL, '$2y$10$yfafht9hxDRAlqbG8CLur.WFUqVX7BgeAx/4pvuXb3mMqgZKaezQy', 'BC', NULL, '2023-10-14 21:41:43', '2023-10-14 23:08:25', NULL),
(147, 'operator hotel', 'gmail@operator.com', NULL, '123456789', NULL, '$2y$10$ilJrp9fDgzyaiBRZBVyucOSwcaNqmzXMLGt284d29SLQbRSkxDsTG', 'Hotel', NULL, '2023-10-14 21:50:11', '2023-10-14 21:50:11', NULL),
(148, 'operator', 'operator@operator.mail', NULL, '12345', NULL, '$2y$10$IleMQ18.x0Z.BYoOXBSX9e1SCHSBMVdxKJgFWc.frCjO4t2yFLFtG', 'Passenger', NULL, '2023-10-14 22:17:30', '2023-10-14 22:17:30', NULL),
(149, 'lol', 'klol@sad.coem', NULL, '1223432543254', NULL, '$2y$10$vcjxFCh1lYeWMnkGoR72QOlbSIgsdPmIyJuJE558RSnHINvrMpvD2', 'Passenger', NULL, '2023-10-14 22:19:00', '2023-10-14 22:19:00', NULL),
(150, 'jonas', 'hoasfawe@fsdf.ccwqe', NULL, '2423432', NULL, '$2y$10$nzxmY.dU81v.8rMuAflkaef/novnWrJJFzBn94yxHyxK76dpdcwuG', 'Passenger', NULL, '2023-10-14 22:22:23', '2023-10-14 22:22:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airline_ticket`
--
ALTER TABLE `airline_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airline_ticket_provider`
--
ALTER TABLE `airline_ticket_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_itinerary`
--
ALTER TABLE `day_itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digital_payment`
--
ALTER TABLE `digital_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flight_arrangement`
--
ALTER TABLE `flight_arrangement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ground_transportation_activity_fees`
--
ALTER TABLE `ground_transportation_activity_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gti`
--
ALTER TABLE `gti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide_reservation`
--
ALTER TABLE `guide_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_accommodation_type`
--
ALTER TABLE `hotel_accommodation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_arrangement`
--
ALTER TABLE `hotel_arrangement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_fees`
--
ALTER TABLE `hotel_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_reservation`
--
ALTER TABLE `hotel_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leader_flight`
--
ALTER TABLE `leader_flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_information`
--
ALTER TABLE `passenger_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_informations`
--
ALTER TABLE `passenger_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_payment`
--
ALTER TABLE `passenger_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sight`
--
ALTER TABLE `sight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sights_distant`
--
ALTER TABLE `sights_distant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sights_reservation`
--
ALTER TABLE `sights_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sight_media`
--
ALTER TABLE `sight_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_request`
--
ALTER TABLE `special_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_type`
--
ALTER TABLE `supplier_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourleader_tour`
--
ALTER TABLE `tourleader_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_bookings`
--
ALTER TABLE `tour_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_leader_info`
--
ALTER TABLE `tour_leader_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_cost`
--
ALTER TABLE `transport_cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_reservation`
--
ALTER TABLE `transport_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_type`
--
ALTER TABLE `transport_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- AUTO_INCREMENT for table `airline_ticket`
--
ALTER TABLE `airline_ticket`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `airline_ticket_provider`
--
ALTER TABLE `airline_ticket_provider`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `car_type`
--
ALTER TABLE `car_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `day_itinerary`
--
ALTER TABLE `day_itinerary`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=655;

--
-- AUTO_INCREMENT for table `digital_payment`
--
ALTER TABLE `digital_payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flight_arrangement`
--
ALTER TABLE `flight_arrangement`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ground_transportation_activity_fees`
--
ALTER TABLE `ground_transportation_activity_fees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gti`
--
ALTER TABLE `gti`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `guide_reservation`
--
ALTER TABLE `guide_reservation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotel_accommodation_type`
--
ALTER TABLE `hotel_accommodation_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hotel_arrangement`
--
ALTER TABLE `hotel_arrangement`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_fees`
--
ALTER TABLE `hotel_fees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotel_reservation`
--
ALTER TABLE `hotel_reservation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leader_flight`
--
ALTER TABLE `leader_flight`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `operators`
--
ALTER TABLE `operators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passenger_information`
--
ALTER TABLE `passenger_information`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `passenger_informations`
--
ALTER TABLE `passenger_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `passenger_payment`
--
ALTER TABLE `passenger_payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sight`
--
ALTER TABLE `sight`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `sights_distant`
--
ALTER TABLE `sights_distant`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sights_reservation`
--
ALTER TABLE `sights_reservation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sight_media`
--
ALTER TABLE `sight_media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `special_request`
--
ALTER TABLE `special_request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `supplier_type`
--
ALTER TABLE `supplier_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tourleader_tour`
--
ALTER TABLE `tourleader_tour`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tour_bookings`
--
ALTER TABLE `tour_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tour_leader_info`
--
ALTER TABLE `tour_leader_info`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transport_cost`
--
ALTER TABLE `transport_cost`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transport_reservation`
--
ALTER TABLE `transport_reservation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transport_type`
--
ALTER TABLE `transport_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
