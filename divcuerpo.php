<?php
//Diferentes secciones que se muestras en la parte del cuerpo segun sea la opción elegida

$body=$_GET['cuerpo'];//Resive el parametro del cuerpo que va a mostrar
//Condiciones segun el parametro recibido

if ($body=='somos' || $body=='')//Muestra el apartado de bienvenida y ¿quienes somos?
{
	echo"
		<div id='parrafos'>
    		<label class='titulo'>¿quienes somos?</label>
 				<p class='texSub'>
 					Somos una empresa Mexicana, altamente tecnificada, con personal calificado y capacitado para resolver desde
 					la concepción de un proyecto hasta su culminación en obra.
    			</p>
    			<p class='texSub' style='padding-bottom:50px;'>
    				La experiencia adquirida nos ha permitido integrar un equipo profesional comprometido en satisfacer las expectativas de nuestros clientes, construyendo obras de gran envergadura en diversas partes de la República Mexicana.
    			</p>
 			<label class='titulo'>Misión</label>
				<p class='texSub' style='padding-bottom:50px;'>
					Ser una empresa comprometida en la calidad de nuestras obras, esforzándonos al máximo para brindar
					acciones de excelencia,	que generen un crecimiento sustentable de todo el equipo de trabajo, contribuyendo
					así al desarrollo de la infraestructura	de nuestro Estado.
				</p>
			<label class='titulo'>Visión</label>
				<p class='texSub' style='padding-bottom:50px;'>
					Ser la empresa líder en el estado Veracruz, a través de la capacitación constante, la aplicación
					de los mas modernos sistemas de construcción y la integración vanguardista de software en materia de
					caminos y puentes, que superen las expectativas de calidad y costo beneficio de nuestras obras.
				</p>
			<label class='titulo'>Valores<label>
				<p class='texSub'>
					<ul class='texSub'>
						<li>honestidad</li>
						<li>compromiso</li>
						<li>respeto</li>
						<li>orientación a los resultados</li>
					</ul>
				</p>
 		</div>
	";
}
if ($body=='historia') //Muestra el apartado de historia
{
	echo "
		<div id='parrafos'>
			<label class='titulo'>Historia</label>
			<p class='texSub'>
				CONSTRUCCIONES PUENTES Y ASFALTOS DEL GOLFO S.A. DE C.V.
			</p>
			<p class='texSub'>
				Nace por la inquietud de personas, que teniendo el deseo de trabajar al servicio de empresas particulares y de gobierno,
				se reúnen, con el fin de alcanzar el éxito: mediante la experiencia teórica-practica, que les ha brindado varios años en
				diferentes ramas de la ingeniería.
			</p>
			<p class='texSub'>
				Nuestros proyectos son realizados con un alto nivel de especialización en el ramo de las vías terrestres.Somos una empresa
				veracruzana, altamente tecnificada, con personal calificado y capacitado para resolver desde la concepción de un proyecto,
				hasta su culminación en obra.
			</p>
			<p class='texSub'>
				Nos distingue la capacidad para diseñar, proyectar, construir y/o supervisar cualquier tipo de obra civil;
				cuya especialización es la ingeniería en vías terrestres y mecánica de suelos.
			</p>

		</div>
	";
}
if ($body=='filosofia')//Muestra el apartado que contiene misión, visión y valores
{
	echo "
		<div id='parrafos'>
			<label class='titulo'>Misión</label>
			<p class='texSub' style='padding-bottom:50px;'>
				Ser una empresa comprometida en la calidad de nuestras obras, esforzándonos al máximo para brindar
				acciones de excelencia,	que generen un crecimiento sustentable de todo el equipo de trabajo, contribuyendo
				así al desarrollo de la infraestructura	de nuestro Estado.
			</p>
			<label class='titulo'>Visión</label>
			<p class='texSub' style='padding-bottom:50px;'>
				Ser la empresa líder en el estado Veracruz, a través de la capacitación constante, la aplicación
				de los mas modernos sistemas de construcción y la integración vanguardista de software en materia de
				caminos y puentes, que superen las expectativas de calidad y costo beneficio de nuestras obras.
			</p>
			<label class='titulo'>Valores<label>
			<p class='texSub'>
				Responsabilidad / Profesionalismo / Compromiso / Respeto al Medio Ambiente
			</p>
		</div>
	";
}
if ($body=='vision_estrategica')//Muestra el apartado de visión estrategica
{}
if ($body=='premios') //Muestra el apartado de premios y menciones
{
	echo"
		<div id='parrafos'>
		<label class='titulo'>Premios y Menciones<label>
		<p class='texSub'>
			1998 Premio Mejor Puente 1998
		</p>
		</div>
	";
}
if ($body=='concretos') //Muestra el apartado de concretos (estilos definidos, aun con posibles modificaciones)
{
	echo "
		<div id='columnaIzq' style='position:absolute;margin: 0 auto 0 750px;'>
				<ul>
				<li>concretos de resistencia acelerada</li>
				<li>mr baja contracción</li>
				<li>concreto estructural</li>
				<li>concreto normal y a la medida</li>
			</ul>
		</div>
		<div id='parrafos'>
			<label class='titulosup'>concretos</label><br>
			<label class='subsup' style='color:#0d0a70'>plantas fijas y moviles</label>
				<p class='texSub'>
					El concreto premezclado útil en la construcción en una mezcla de agregados pétreos naturales, procesados o artificiales, cementante y agua, a la que además se le puede agregar algunos aditivos.
				</p>
				<p class='texSub'>
					Generalmente, esta mezcla es dosificada en unidades de masa en plantas de concreto premezclado, en masa y/o volumen en las obras. Mismo que se entrega para su utilización, en estado plástico.
				</p>
				<p class='texSub' style='padding-bottom:50px;'>
					Actualmente nos especializamos en la producción, suministro, transporte, bombeo, colocación y comercialización de concreto industrializado con los mas altos estandares de calidad.
				</p>
			<label class='titulo'>ventajas técnicas</label>
				<p class='texSub'>
					Dentro de las ventajas técnicas que usted encontrará en nuestros concretos se encuentran las siguientes:
					<ul class='texSub'  style='padding-bottom:50px;'>
						<li>Agregados seleccionados con propiedades y calidad controlada.</li>
						<li>Dosificación exacta de sus componentes por un proceso de producción digital y automatizado.</li>
						<li>Mezclas uniformes, fraguados optimos y resistencias garantizadas.</li>
						<li>Todo esto nos permite comprometernos a cumplir satisfactoriamente sus necesidades y especifiaciones en concretos premezclados.</li>
					</ul>
				</p>
			<label class='titulo'>Actualmente contamos con plantas moviles y plantas fijas:</label>
				<p class='texSub'>
					<ul class='texSub' style='padding-bottom:50px;'>
						<li>Planta fija Odisa 6 Lp <br> Capacidad de Max. 120 m3/h </li>
						<li>Camión Planta Quick Mix <br> Capacidad de Max. 21 m3/h </li>
						<li>Planta Móvil Alpha Container 20FT <br> Capacidad de Max. 35 m3/h </li>
					</ul>
				</p>
			<label class='titulo'>ofreciendo</label>
				<p class='texSub'>
					<ul class='texSub'>
						<li>Concreto Normal</li>
						<li>Resistencia Acelerada</li>
						<li>MR Baja Contractacción</li>
						<li>Estructural</li>
						<li>Concreto a la medida</li>
					</ul>
				</p>
		</div>
	";
}
if ($body=='proyectos') {
	echo "
		<div id='columnaIzq' style='position:absolute;margin: 0 auto 0 750px;'>
				<ul>
				<li>planeación</li>
				<li>análisis</li>
				<li>calculo</li>
			</ul>
		</div>

		<div id='parrafos'>
			<label class='titulosup'>proyectos</label><br>
			<label class='subsup' style='color:#e0a62a;'>planeación, análisis y calculo</label>
				<p class='texSub'>
					Desarrollamos procesos de planeación, proyectos de caminos, carreteras, puentes y muros de contención, redes hidraulicas, etc. aplicando técnicas modernas de análisis y cálculo en vías terrestres.
				</p>
				<p class='texSub' style='padding-bottom:50px'>
					Así mismo detectar oportunidades para generar valor agregado en su proceso, al conocer los diferentes tipos de software y equipos de medición para la especialidad aplicando tecnología de punta.
				</p>
			<label class='titulo'> somos especialistas en la proyección de:</label>
				<p class='texSub'>
					<ul class='texSub' style='text-transform:uppercase;padding-bottom:50px;'>
						<li>puentes</li>
						<li>carreteras</li>
						<li>complementarias</li>
						<li>caminos</li>
						<li>pasos a desnivel</li>
						<li>lotificaciones</li>
						<li>edificación y vivienda</li>
						<li>redes de agua potable</li>
						<li>alcantarillado sanitario</li>
						<li>alcantarillado pluvial</li>
					</ul>
				</p>
			<label class='titulo'>contamos con equipo topográfico tales como:</label>
				<p class='texSub'>
					<ul class='texSub' style='padding-bottom:50px;'>
						<li>Estación Total Sokkia Modelo CX-103</li>
						<li>Estación Total Sokkia Modelo SET650RX</li>
						<li>Estación Total Sokkia Modelo SET630RK</li>
						<li>Nivel Automático Sokkia B40</li>
						<li>Nivel Automático Sokkia B30</li>
						<li>Nivel Automático Sokkia C300</li>
						<li>Nivel Automático Topcon AT-G6</li>
						<li>Receptor GPS Ashtech Promark 2</li>
					</ul>
				</p>
			<label class='titulo'>cursos y capcitación obtenidas</label>
			<p class='texSub'>
				Master en análisis y Dimensionamiento de Puentes con Civilcad 2000-Universidad de Zaragoza.
			</p>
			<p class='texSub'>
			Análisis y Diseño de Puentes-Universidad Nacional Atónoma de México.
			</p>
			<p class='texSub'>
			Simposio Internacional sobre Cimentaciones Profundas-Deep Foundations Institute y la Sociedad Mexicana de Ingeniería de Vías Terrestres, A.C.
			</p>
			<p class='texSub' style='padding-bottom:50px;'>
				Diseño Geometrico de Carreteras-Universidad Nacional Autónoma de México.
			</p>
			<label class='titulo'>somos especialistas en el manejo de software's</label>
				<p class='texSub'>
					<ul class='texSub'>
						<li>Autocad</li>
						<li>Civil 3D</li>
						<li>Civil Cad</li>
						<li>Staad. Pro</li>
						<li>Ram Advance</li>
					</ul>
				</p>
		</div>
		";
}
if ($body=='geotecnia') {
	echo"

		<div id='columnaIzq' style='position:absolute;margin: 0 auto 0 750px;'>
				<ul>
				<li>mécanica de suelos</li>
				<li>estudios geotecnicos</li>
				<li>laboratorio de ensaye de materiales</li>
			</ul>
		</div>

		<div id='parrafos'>
			<label class='titulosup'>geotecnia</label><br>
			<label class='subsup' style='color:#dd8c2a;'>mecánica de suelos</label>
			<p class='texSub'>
				Geotecnia y Supervisión Técnica S.A. de C.V. ofrece sus servicios a empresas privadas, grupos de inversionistas, dependencias oficiales, entidades federales, paraestatales, personas físicas y en general a todo aquel que demande trabajos relacionados con la industra de la construcción.
			</p>
			<p class='texSub'>
				Somos una empresa formada por profesionistas de gran experiencia , que proporciona un servicio de calidad para obtener una mayor eficiencia en costo y tiempo en el desarrollo de los proyectos.
			</p>
			<p class='texSub' style='padding-bottom:50px;'>
				Geotecnia y Supervisión Técnica S.A de C.V. es una empresa con más de 15 años de experiencia en el ramo de la Mecánica de los Suelos, Estudios Geotécnicos y laboratorio de ensaye de Materiales, valido por la Entidad Mexicana de Acreditación (EMA) a través de la implementación de un sistema de calidad en cumplimiento a la Norma Mexicana NMX-EC-17025-IMNC-2006.
			</p>
			<label class='titulo'>estudio de mecánica de suelos <br> estudios geotécnicos <br> laboratorio de ensaye de materiales</label>
			<p class='texSub'>
				Los Estudios de la Mecánica de Suelos tienen como objetivo principal analizár, verificar y proyectar las caracteristicas de los estratos donde se desplantarán las estructuras como son puentes, edificios, aulas, muros de contensión, torres, etc., que permita determinar la capacidad de carga del suelo y así definir la profundidad y tipo de cimentación a construir.
			</p>
			<p class='texSub'>
				Los estudios Geotécnicos permiten determinar las características mecánicas del suelo con fines de diseño de la estructura de pavimentos.
			</p>
			<p class='texSub'>
				Partiendo de una campaña de prospección y reconocimiento del terreno, tomando muestras para su ensayo en el laboratorio que permiten definir los parámetros geotécnicos caracteristicos.
			</p>
			<p class='texSub'>
				El laboratorio de Ensaye de Materiales está compuesto por las áreas de asfaltos, terracerías, geotecnia, pavimentos, aceros, concretos y cementos asfálticos. Donde se pueden caracterizar y ensayar de acuerdo al área que corresponda para la verificación de la calidad, con la opción de proponer alternativas para la mejora de sus características asegurando su uso adecuado.
			</p>
			<p class='texSub'>
				Actualmente cuenta con equipo de vanguardia requerido por cada área, para su correcto ensaye.
			</p>
			<p class='titulo' style='padding-bottom:50px;'>asfaltos/concretos/terracerias/suelos/pavimentos</p>

			<label class='titulo'>Contamos con equipo de vanguardia para la perforación tales como:</label>
			<p class='texSub'>
				<ul class='texSub'>
					<li>LONGYEAR 34</li>
					<li>LONGYEAR24</li>
					<li>HACKER</li>
					<li>SPRAGUE & HENWOOD</li>
					<li>MOVIL DRILL</li>
				</ul>
			</p>
		</div>
		";
}
if ($body=='perforacion') {
	echo "
|		<div id='columnaIzq' style='position:absolute;margin: 0 auto 0 750px;'>
				<ul>
				<li>pilotes perforados</li>
				<li style='text-align:left;'>pilotes perforados profundos</li>
				<li>pilotes barrenados</li>
			</ul>
		</div>
		<div id='parrafos'>
			<label class='titulosup'>Perforación</label><br>
			<label class='subsup' style='color:red'>construcción de pilas y pilotes</label>
			<p class='texSub'>
				Las cimentaciones profundas generalmente se dividen en pilas, cuando su diámetro lado es mayor a 60 cm. y pilotes para dimensiones menores.
			</p>
			<p class='texSub'>
				En el diseño y la construcción de pilas y pilotes intervienen fundamentalmente tres variables: la forma como transmiten las cargas al subsuelo, el material con el que están fabricados y su procedimiento constructivo.
			</p>
			<p class='texSub' style='padding-bottom:50px;'>
				Tenemos la capacidad para realizar Pilas y Pilotes de concreto hidráulico colados In-situ, es decir, inicialmente se realiza la perforación del suelo a la profundidad  indicada en el proyecto, posteriormente se realiza la colocación de acero de refuerzo previamente habilitado y finalmente se realiza el colado de concreto hidráulico con tubería tremie o con trompa de elefante para evitar la segregación y contaminación del concreto.
			</p>
			<label class='titulo'>tenemos la capacidad para realizar:</label>
			<p class='texSub'>
				Pilotes perforados entubados con tubo de revestimiento hincado directamente por medio de la cabeza de rotación.
			</p>
			<p class='texSub'>
				Pilotes perforados profundos sin entubación en seco o estabilizados con fluidos de perforación.
			</p>
			<p class='texSub'>
				Pilotes barrenados (CFA) realizados con barrena continua de largas dimensiones.
			</p>
			<p class='texSub'>
				Transformable en equipo para excavación de muros pantallas (DW) a utilizar con cuchara guiada (GK-5)
			</p>
			<p class='texSub' style='padding-bottom:50px;'>
				Asesoría Técnica Profesional.
			</p>
			<label class='titulo'>Contamos con equipos de vanguardia tales como:</label>
			<p class='texSub'>
				<ul class='texSub' style='padding-bottom:50px;'>
					<li>SOILMEC SR-30</li>
					<li>WATSON 6000</li>
				</ul>
			</p>
			<label class='titulo'>Capacidades de perforación</label>
			<p class='texSub'>Hasta 1.50 mts. de diámetro con profundidades max. de 48.5 mts</p>
			<p style='texSub'>
				<ul class='texSub' style='padding-bottom:50px;'>
					<li>Colados con TUBO TREMIE.</li>
					<li>Sondeos Geotecnicos verificatorios mediante pruebas de penetración estándar, bajo la norma ASTM D-1586.</li>
					<li>Pruebas de integridad de las pilas, bajo la norma ASTM D-5882.</li>
				</ul>
			</p>
			<label class='titulo'>Maestria en vías terrestres con especialidad en mecánica de suelos universidad autónoma de chihuahua</label>
			<p class='texSub' style='padding-bottom:50px;'>
				M. en I. Luis Enrique Atzin Ragazzo
			</p>
			<label class='titulo'>Especialidad en vías terrestres universidad autónoma del estado de México</label>
			<p class='texSub'>Ing. H. Hugo Vázquez Reyes</p>
		</div>
	";
}
if ($body=='trabes') {
	echo "
		<div id='columnaIzq' style='position:absolute;margin: 0 auto 0 750px;'>
				<ul>
				<li>trabes asshto tipo iii</li>
				<li>trabes aashto tipo iv</li>
			</ul>
		</div>

		<div id='parrafos'>
			<label class='titulosup'>Trabes</label><br>
			<label class='subsup' style='color:#ddad2a;'>diseño, fabricación y montaje</label>
			<p class='texSub'>
				Las TRABES AASHTO TIPO III Y IV, son elementos estructurales en concreto preforzado, diseñados para soportar cargas de puentes en claros variables.
			</p>
			<p class='texSub' style='padding-bottom:50px;'>
				Estos elementos son ideales para la construcción de puentes con una reducción de costos de construcción y programa de ejecución del mismo, mejorando la calidad, limpieza y estética.
			</p>
			<label class='titulo'>ventajas</label>
			<p class='texSub'>
				<ul class='texSub' style='padding-bottom:50px;'>
					<li>Elemento estructural prefabricado preesforzado</li>
					<li>Permite una construcción mecanizada</li>
					<li>Textura fina en su acabado</li>
					<li>Soporta cargas de gran peso</li>
					<li>Garantía de producción en serie</li>
					<li>Calidad controlada</li>
					<li>Óptimo diseño estructural</li>
					<li>Ingeniería de punta</li>
					<li>Transportación segura</li>
					<li>Ofrecemos calidad, limpieza y estética</li>
				</ul>
			</p>
			<label class='titulo'>aplicaciones</label>
			<p class='texSub'>Ideal para la construcción de:</p>
			<p class='texSub'>
				<ul class='texSub' style='padding-bottom:50px;'>
					<li>Puentes vehiculares</li>
					<li>Pasos a desnivel</li>
					<li>Puentes peatonales</li>
					<li>Viaductos</li>
					<li>Puentes ferroviarios</li>
				</ul>
			</p>
			<label class='titulo'>especificaciones de las trabes</label>
			<label class='titulo'>Disponibles en:</label>
			<p class='texSub'>
				<ul class='texSub' style='padding-bottom:50px;'>
					<li>Tipo III 16.76 a 24.38 metros de longitud</li>
					<li>Tipo IV 21.34 y 30.48 metros de longitud</li>
				</ul>
			</p>
			<label class='titulo'>Pueden ser pretensadas</label>
			<p class='texSub'>Elaboradas con concreto de alta resistencia desde 350 hasta 500 kg/cm<sup>2</sup></p>

	";
}
if ($body=='iso')//Certificación ISO
{
	echo "
		<div id='parrafos'>
			<label class='titulo'>En construcciones puentes y asfaltos del golfo s.a. de c.v. nuestros objetivos están basados en las siguientes normas:</label>
			<p class='texSub'>
					<ul class='texSub' style='text-transform:uppercase;'>
						<li style='padding-bottom:20px;'>norma iso-9001:2008/nmx-cc-9001-imnc:2008 <br> sistema de gestion de la calidad.</li>
						<li style='padding-bottom:20px;'>norma ohsas 18001-2007/nmx-sast-001-imnc:2008 <br> sistema de gestion de seguridad y salud en el trabajo.</li>
						<li>norma iso-14001:2004/nmx-ssa-14001-imnc:2004 <br> sistema de gestion ambiental</li>
					</ul>
			</p>
		</div>
	";
}
if ($body=='master')//Master España
{
	echo "
		<div id='parrafos'>
			<label class='titulo'>Master</label>
			<ul class='texSub'>
					<li>Cursos Mecánica de suelos Master en puentes Universidad Zaragoza España </li>
					<li>Capacitación primeros auxilios</li>
					<li>Diplomado en financiamiento a la infraestructura ITESM</li>
			</ul>
		</div>
	";
}
if ($body=='sustentable')//Desarrollo sustentable
{
	echo "
		<div id='parrafos'>
			<label class='titulo'>Construcción Sustentable</label>
			<p class='texSub'>
				La sustentabilidad de México es uno de los mayores retos de nuestra generación.
				Ante un panorama de cambio climático global y de degradación ambiental , que lastima por la escasez
				del agua, la progresiva desaparición de los bosques y selvas. la perdida de la biodiversidad terrestre
				y marina, la contaminación y el crecimiento urbano, entre muchos otros problemas, lo que hace evidente
				la necesidad de lograr que los habitantes de nuestra nación estén preparados con los conocimientos y
				herramientas para enfrentar estos retos y encontrar soluciones viables a corto y mediano plazo.
			</p>
			<p class='texSub'>
				Es notable el avance del conocimiento científico y el desarrollo de las tecnologías de la información y
				la comunicación que permiten conocer la situación prevaleciente en el planeta casi de manera instantánea.
				Sin embargo, estos avances no han sido suficientemente utilizados para crear una conciencia ambiental, ni
				han logrado solucionar los problemas que amenazan la supervivencia del ser Humano.
			</p>
			<p class='texSub'>
				En CPA del Golfo somos consientes del reto y de la responsabilidad que esto implica y es por esta razón que
				todos nuestros procesos y métodos constructivos son respetuosos del medio ambiente y de la biodiversidad
				integrándose armónicamente con el entorno en el cual se desarrolla, creando mejores condiciones de vida para
				los habitantes del lugar y causando el menor impacto posible en la naturaleza.
			</p>
		</div>
	";
}
if ($body=='daños')//Seguridad cero daños
{
	echo "
		<div id='parrafos'>
			<label class='titulo'>Seguridad, Salud y Cero daños al personal</label>
			<p class='texSub'>
				Comprometidos con la Seguridad es un proceso para desarrollar e implementar una cultura en
				seguridad sólida y sustentable permitiendo a CPA alcanzar su objetivo de Cero daños al personal.
				Se basa en un fuerte compromiso de la administración y con una línea bien definida de responsabilidad
				en seguridad.
			</p>
			<p class='texSub'>
				Nuestro objetivo es el de Cero daños al personal.
				Proporcionamos los recursos y entrenamiento necesarios, evaluamos el desempeño y minimizamos los
				riesgos a los colaboradores, contratistas, visitantes y la comunidad.
			</p>
		</div>
	";
}
?>