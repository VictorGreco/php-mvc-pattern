-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-02-2021 a las 18:38:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_services`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `user_no` int(11) NOT NULL,
  `service_no` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `stars` int(5) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`user_no`, `service_no`, `service_name`, `description`, `stars`, `price`) VALUES
(1, 1, 'Create your custom html css javascript web pages', 'We are team of experienced Web Developers which are looking forward to work with people on fiverr. We have experience in Blogs, Personal Sites, E-commerce platforms, Social Networks and much more. We are a team of Experienced Developers can handle any kind of project efficiently. Before starting any order with us we can show you our previous work so you can make a decision.', 5, 4),
(2, 2, 'Do web development with nodejs and reactjs', 'I would like to provide you solution for your website development as per your requirements. Let is take a review of more details about me. Front-end: ReactJS - Redux - Redux Saga/thunk. Backend: Node(Express, Sails) - MongoDB/Postgres - Laravel / Core Php - GrapqhQL - Test-Driven Development. Deployment experience: AWS - Heroku - Azure - Digital Ocean', 5, 1300),
(1, 3, 'Create stunning react UI', 'To avoid cancellation, Feel free to message me and discuss your project before you buy a Gig.Rect was developed at Facebook and it is one of the most used front end Javascript frameworks. I will develop front end UI from the given design. Technologies Used JavaScript React Redux Routing Bootstrap etc', 5, 43),
(14, 4, 'Be your buddypress assistant and developer', '5 years plus Experience in word press theme development and Plugin customisation. Most Reliable & Higher WordPress Programmer.  What is covered in this gig ; I will Fix WordPress Errors.  I will Fix WordPress Budyypress Theme Issues. I will Fix WordPress Budyypress Theme and plugin customizations. I Will Fix Any Budyypress Coding Bugs. I Will Fix Any Plugin Issue. I Will update wordpress , theme or plugins. I Will Fix buddypress email template issue. ', 5, 69),
(10, 5, 'Develop fullstack web app using react and node', 'I have experience working with React, React Native, Redux, NextJS, Angular, NgRx, Ngxs, Nodejs, express, Mongodb, Postgres on live enterprise level projects. I also have hands on experience with redux-saga, redux-thunk, sass, firebase, AWS, nodejsstyled components, storybook and a lot of other frameworks and component libraries like AntD , MaterialUI, SemanticUI, ChakraUI, ReactStrap and Bootstrap. ', 5, 13),
(8, 6, 'Create multi step form in wordpress or jquery', 'I am a professional Full Stake Developer having 5+ years of experience. INTOm a passionate, hardworking and committed a person with a get-it-done approach. Up till now. What I am going to create in this GIG: I will create a multi-step form in Wordpress  I will create a multi-step form in HTML / CSS / JQUERY. I will create you a custom multi step form on any platform.', 5, 13),
(13, 7, 'Make website from sketch, psd, xd to html responsive', 'Do you need to convert Psd to Html or Sketch to Html or Xd to Html or Ai to Html or Zeplin to Html or Figma to Html or Envision to Html? If your answer is \"Yes\" then you have come to the right place! You have your design completed and want to convert that into a fully responsive html template? INTOt worry,', 4, 123),
(11, 8, 'Code you want on processing', 'I have expertise over Perfex CRM customization and module development. I have a one year experience on it if you hire me I sure I can fulfill your needs. I have  expertise over the integration of the following with Perfex CRM.', 5, 113),
(11, 9, 'Customize perfex CRM and develop its module', 'I am a Java developper ! I have create many Processing application. I have created Ankarus and Novasurf (available on Google Play Store). Tell me what you want and I will code!. I can convert your project to Android App to publish on Google Play ! I can create game, application, Arduino connection, and more.', 5, 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_no`),
  ADD UNIQUE KEY `service_name` (`service_name`),
  ADD KEY `user_no` (`user_no`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`user_no`) REFERENCES `users` (`user_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
