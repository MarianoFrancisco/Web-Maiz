INSERT INTO Administrador VALUES
('mariano','Mariano Camposeco','31840649','1234'),
('lisbeth','Lisbeth Hernandez','53423121','1234')
;
INSERT INTO TipoMaiz VALUES
('Maíz blanco', 'Variedad de maíz con granos blancos que se utiliza para la elaboración de tortillas, tamales y otros productos alimenticios.', 250.00),
('Maíz amarillo', 'Variedad de maíz con granos amarillos que se utiliza principalmente para la alimentación animal y la producción de harina.', 200.00),
('Maíz negro', 'Variedad de maíz con granos negros que se utiliza para la elaboración de bebidas y alimentos tradicionales.', 300.00),
('Maíz rojo', 'Variedad de maíz con granos rojos que se utiliza para la elaboración de bebidas y alimentos tradicionales.', 280.00),
('Maíz morado', 'Variedad de maíz con granos morados que se utiliza para la elaboración de bebidas y alimentos tradicionales.', 350.00),
('Maíz criollo', 'Variedad de maíz de origen local que se ha adaptado a las condiciones climáticas y de suelo de Guatemala. Es utilizado para la elaboración de tortillas, tamales y otros productos alimenticios.', 280.00),
('Maíz cónico', 'Variedad de maíz con granos de forma cónica que se utiliza para la elaboración de atoles y bebidas tradicionales.', 320.00),
('Maíz cacahuazintle', 'Variedad de maíz originaria de México y que se ha popularizado en Guatemala para la elaboración de tamales. Sus granos son grandes y de forma irregular.', 350.00),
('Maíz cristalino', 'Variedad de maíz con granos transparentes que se utiliza para la elaboración de atoles y bebidas tradicionales.', 300.00),
('Maíz dulce', 'Variedad de maíz con granos dulces que se utiliza principalmente para consumo humano. Se consume cocido o enlatado.', 380.00)
;
INSERT INTO EtapaMaiz VALUES
('VE',5,'El coleoptilo emerge de la superficie del suelo.'),
('V1',9,'Es visible el cuello de la primera hoja.'),
('V2',12,'Es visible el cuello de la segunda hoja.'),
('Vn',54,'Es visible el cuello de la hoja número "n". ("n" es igual al número definitivo de hojas que tiene la planta; "n" generalmente fluctúa entre 16 y 22, pero para la floración se habrán perdido las 4 a 5 hojas de más abajo.)'),
('VT',55,'Es completamente visible la última rama de la panícula.'),
('R0',57,'Antesis o floración masculina. El polen se comienza a arrojar.'),
('R1',59,'Son visibles los estigmas.'),
('R2',71,'Etapa de ampolla. Los granos se llenan con un líquido claro y se puede ver el embrión.'),
('R3',80,'Etapa lechosa. Los granos se llenan con un líquido lechoso blanco.'),
('R4',90,'Etapa masosa. Los granos se llenan con una pasta blanca. El embrión tiene aproximadamente la mitad del ancho del grano.'),
('R5',102,'Etapa dentada. La parte superior de los granos se llena con almidón sólido y, cuando el genotipo es dentado, los granos adquieren la forma dentada. En los tipos tanto cristalinos como dentados es visible una "línea de leche" cuando se observa el grano desde el costado.'),
('R6',112,'Madurez fisiológica. Una capa negra es visible en la base del grano. La humedad del grano es generalmente de alrededor del 35%.')
;
INSERT INTO GuiaCultivo (nombre_maiz,descripcion,riego,temperatura,suelo,cosecha,abonado) VALUES
('Maíz blanco','El maíz blanco es una variedad de maíz de grano blanco opaco y sabor suave. Es ideal para la elaboración de tortillas y otros platillos típicos. Para su cultivo se recomienda el riego por goteo y una temperatura entre 20 y 30°C. El suelo franco-arcilloso es el más adecuado. Se recomienda abonarlo con fertilizantes nitrogenados y potásicos para lograr una producción óptima.','Riego por goteo','20-30°C','Suelo franco-arcilloso',110,'Fertilizantes nitrogenados y potásicos'),
('Maíz amarillo','El maíz amarillo es una variedad de maíz de grano amarillo y sabor dulce, ideal para la elaboración de alimentos dulces y salados. Para su cultivo se recomienda el riego por aspersión y una temperatura entre 20 y 30°C. El suelo franco-arenoso es el más adecuado. Se recomienda abonarlo con fertilizantes orgánicos y nitrogenados para lograr una producción óptima.','Riego por aspersión','20-30°C','Suelo franco-arenoso',120,'Fertilizantes orgánicos y nitrogenados'),
('Maíz negro','El maíz negro es una variedad de maíz de grano negro y sabor intenso, ideal para la elaboración de platillos típicos y como ingrediente decorativo en presentaciones de alta cocina. Para su cultivo se recomienda el riego por inundación y una temperatura entre 25 y 30°C. El suelo franco-arcilloso es el más adecuado. Se recomienda abonarlo con fertilizantes nitrogenados y fosfatados para lograr una producción óptima.','Riego por inundación','25-30°C','Suelo franco-arcilloso',130,'Fertilizantes nitrogenados y fosfatados'),
('Maíz rojo','El maíz rojo es una variedad de maíz de grano rojo oscuro y sabor ligeramente dulce. Es ideal para la elaboración de tortillas y otros platillos típicos. Para su cultivo se recomienda el riego por goteo y una temperatura entre 20 y 25°C. El suelo franco-arcilloso es el más adecuado. Se recomienda abonarlo con fertilizantes orgánicos y nitrogenados para lograr una producción óptima.','Riego por goteo','20-25°C','Suelo franco-arcilloso',115,'Fertilizantes orgánicos y nitrogenados'),
('Maíz morado','El maíz morado es una variedad de maíz de grano morado intenso y sabor dulce, ideal para la elaboración de alimentos dulces y salados. Para su cultivo se recomienda el riego por aspersión y una temperatura entre 18 y 25°C. El suelo franco-arcilloso es el más adecuado. Se recomienda abonarlo con fertilizantes orgánicos y fosfatados para lograr una producción óptima.','Riego por aspersión','18-25°C','Suelo franco-arcilloso',140,'Fertilizantes orgánicos y fosfatados'),
('Maíz criollo','El maíz criollo es una variedad de maíz nativa de América con diferentes colores de grano y sabor intenso, ideal para la elaboración de platillos típicos. Para su cultivo se recomienda el riego por goteo y una temperatura entre 20 y 30°C. El suelo franco-arenoso es el más adecuado. Se recomienda abonarlo con fertilizantes orgánicos y nitrogenados para lograr una producción óptima.','Riego por goteo','20-30°C','Suelo franco-arenoso',125,'Fertilizantes orgánicos y nitrogenados'),
('Maíz cónico','El maíz cónico es una variedad de maíz con un grano alargado y sabor suave. Requiere riego por aspersión y se desarrolla mejor en temperaturas entre 22 y 28°C. Se recomienda cultivarlo en suelos franco-arcillosos y abonarlo con fertilizantes orgánicos y fosfatados. La cosecha se realiza cuando la mazorca presenta un color marrón claro y los granos están duros al tacto.','Riego por aspersión','22-28°C','Suelo franco-arcilloso',105,'Fertilizantes orgánicos y fosfatados'),
('Maíz cacahuazintle','El maíz cacahuazintle es una variedad de maíz con un grano grande y sabor ligeramente dulce. Requiere riego por inundación y se desarrolla mejor en temperaturas entre 25 y 35°C. Se recomienda cultivarlo en suelos franco-arcillosos y abonarlo con fertilizantes nitrogenados y fosfatados. La cosecha se realiza cuando la mazorca presenta un color marrón oscuro y los granos están duros al tacto.','Riego por inundación','25-35°C','Suelo franco-arcilloso',150,'Fertilizantes nitrogenados y fosfatados');
;