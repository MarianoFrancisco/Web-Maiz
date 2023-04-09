CREATE DATABASE maizgt;
USE maizgt;
Create Table Administrador(--
    usuario VARCHAR(10) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    pwd VARCHAR(60) NOT NULL,
    PRIMARY KEY(usuario)
);
Create Table TipoMaiz(--
    nombre_maiz VARCHAR(40) NOT NULL,
    descripcion TEXT NOT NULL,
    precio_quintal DECIMAL NOT NULL,
    PRIMARY KEY(nombre_maiz)
);
Create Table EtapaMaiz(--
    etapa CHAR(2) NOT NULL,
    dias INT NOT NULL,
    caracteristicas TEXT NOT NULL,
    PRIMARY KEY(etapa)
);
Create Table GuiaCultivo(--
    id_cultivo SERIAL NOT NULL,
    nombre_maiz VARCHAR(40) UNIQUE NOT NULL,
    descripcion TEXT NOT NULL,
    riego VARCHAR(50) NOT NULL,
    temperatura VARCHAR(12) NOT NULL,
    suelo VARCHAR(50) NOT NULL,
    cosecha INT NOT NULL,
    abonado  VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_cultivo),
    FOREIGN KEY(nombre_maiz) REFERENCES TipoMaiz(nombre_maiz)
);