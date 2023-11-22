DROP DATABASE IF EXISTS bd_pizzaplanet;
CREATE DATABASE IF NOT EXISTS bd_pizzaplanet;
USE bd_pizzaplanet;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_Ingrediente` int(10) NOT NULL,
  `Nombre_Ingrediente` varchar(50) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Precio_Unidad` decimal(10,2) NOT NULL,
  `Unidad_medida` varchar(100) NOT NULL,
  `Stock_disponible` int(10) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `Cantidad_Ingrediente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id_Ingrediente`, `Nombre_Ingrediente`, `Descripcion`, `Precio_Unidad`, `Unidad_medida`, `Stock_disponible`, `fecha_caducidad`, `Cantidad_Ingrediente`) VALUES
(1, 'Jamón', 'Jamón de pavo', '125.65', '1 kg', 2, '2023-12-09', 155);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pizzas`
--

CREATE TABLE `pizzas` (
  `id_Pizza` int(10) NOT NULL,
  `Nombre_Pizza` varchar(10) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Ingredientes` varchar(500) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `tamano` varchar(50) NOT NULL,
  `Tiempo_de_coccion` varchar(100) NOT NULL,
  `Calorias_por_porcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pizzas`
--

INSERT INTO `pizzas` (`id_Pizza`, `Nombre_Pizza`, `Descripcion`, `Ingredientes`, `Precio`, `tamano`, `Tiempo_de_coccion`, `Calorias_por_porcion`) VALUES
(4, 'Pizza Hawa', 'Pizza Hawaiana de cuatro ingredientes', 'Salsa de tomate, Queso, Piña y Jamón', '234.56', 'GRANDE', '20 min', '125 cal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_Proveedor` int(11) NOT NULL,
  `Nombre_Proveedor` varchar(150) NOT NULL,
  `id_Ingrediente` int(10) NOT NULL,
  `Nombre_Ingrediente` varchar(100) NOT NULL,
  `Pais` varchar(100) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Numero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_Proveedor`, `Nombre_Proveedor`, `id_Ingrediente`, `Nombre_Ingrediente`, `Pais`, `Ciudad`, `Direccion`, `Numero`) VALUES
(5, 'CHIMEX', 1, 'Jamón', 'México', 'Ciudad Juárez', 'Calle Desierto de mojave', '656-352-7564');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_Ingrediente`);

--
-- Indices de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id_Pizza`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_Proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_Ingrediente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id_Pizza` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
