-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-03-2018 a las 14:21:47
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `apellidos`, `email`, `id_usuario`) VALUES
(1, 'Juan Pablo', 'Raya', 'juanpabloraya@gmail.com', 1),
(5, 'pedro', 'perez', 'pedro@gmail.com', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(4000) NOT NULL,
  `units_in_stock` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `reward_points_credit` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `product`
--

INSERT INTO `product` (`id_producto`, `product_name`, `product_description`, `units_in_stock`, `product_category_id`, `reward_points_credit`) VALUES
(1, 'camisa', 'camisa negra talla L', 2, 1, 10),
(2, 'ropero', 'ropero de 2 cuerpos de madera', 2, 2, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `max_reward_points_encash` int(11) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `product_category`
--

INSERT INTO `product_category` (`id_categoria`, `category_name`, `max_reward_points_encash`, `parent_category_id`) VALUES
(1, 'ropa', 20, 0),
(2, 'muebles', 20, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_category_discount`
--

CREATE TABLE IF NOT EXISTS `product_category_discount` (
  `id_categoria_descuento` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_id` int(11) NOT NULL,
  `discount_value` int(11) NOT NULL,
  `discount_unit` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valid_until` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `coupon_code` varchar(10) NOT NULL,
  `minimum_order_value` int(11) NOT NULL,
  `maximum_discount_amount` int(11) NOT NULL,
  `is_redeem_allowed` char(1) NOT NULL,
  PRIMARY KEY (`id_categoria_descuento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `product_category_discount`
--

INSERT INTO `product_category_discount` (`id_categoria_descuento`, `product_category_id`, `discount_value`, `discount_unit`, `date_created`, `valid_until`, `coupon_code`, `minimum_order_value`, `maximum_discount_amount`, `is_redeem_allowed`) VALUES
(1, 1, 5, '2', '2018-03-05 00:00:00', '2018-03-13 00:00:00', '', 0, 0, '1'),
(2, 2, 20, '5', '2018-03-06 00:00:00', '2018-03-07 00:00:00', '', 0, 0, '1'),
(3, 1, 10, '2', '2018-03-06 00:00:00', '2018-03-07 00:00:00', '123456', 0, 0, '1'),
(4, 1, 20, '5', '2018-03-06 00:00:00', '2018-03-07 00:00:00', '123456', 1, 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_discount`
--

CREATE TABLE IF NOT EXISTS `product_discount` (
  `id_producto_descuento` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `discount_value` int(11) NOT NULL,
  `discount_unit` varchar(20) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valid_until` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `coupon_code` varchar(10) NOT NULL,
  `minimum_order_value` int(11) NOT NULL,
  `maximum_discount_amount` int(11) NOT NULL,
  `is_redeem_allowed` char(1) NOT NULL,
  PRIMARY KEY (`id_producto_descuento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `product_discount`
--

INSERT INTO `product_discount` (`id_producto_descuento`, `product_id`, `discount_value`, `discount_unit`, `date_created`, `valid_until`, `coupon_code`, `minimum_order_value`, `maximum_discount_amount`, `is_redeem_allowed`) VALUES
(1, 1, 20, '2', '2018-03-06 00:00:00', '2018-03-07 00:00:00', '123456', 1, 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_pricing`
--

CREATE TABLE IF NOT EXISTS `product_pricing` (
  `id_precio` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `base_price` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_expiry` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `in_active` char(1) NOT NULL,
  PRIMARY KEY (`id_precio`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `product_pricing`
--

INSERT INTO `product_pricing` (`id_precio`, `product_id`, `base_price`, `date_created`, `date_expiry`, `in_active`) VALUES
(1, 1, 60, '2018-03-05 00:00:00', '2018-03-06 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `password`, `nivel`) VALUES
(1, 'pablex', '123456', 1),
(6, 'pedro', '123456', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
