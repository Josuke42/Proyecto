-- cobrosdb

CREATE TABLE Escuela (
    EscuelaId INT PRIMARY KEY AUTO_INCREMENT,
    NombreDeLaEscuela VARCHAR(70),
    Direccion VARCHAR(400)
);

CREATE TABLE Estudiante (
    ClienteId INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(100),
    Apaterno VARCHAR(50),
    Amaterno VARCHAR (50),
    FechaRegistro DATE,
    Genero VARCHAR(1),
    SuscripcionId INT,
    FechaNacimiento DATE,
    curp VARCHAR(50),
    EscuelaId INT 
);

CREATE TABLE EstudianteTutor (
    EstudianteTutorId INT PRIMARY KEY AUTO_INCREMENT,
    EstudianteId INT,
    TutorId INT 
);

CREATE TABLE Tutor (
    TutorId INT PRIMARY KEY AUTO_INCREMENT,
    NombreCompleto VARCHAR(50),
    FirmoCartaCompromiso BOOLEAN
);

CREATE TABLE Suscripcion (
    SuscripcionId INT,
    Nombre VARCHAR(50),
    Costo DECIMAL,
    Periodo VARCHAR(100)
);

CREATE TABLE Pago (
    PagoId INT PRIMARY KEY AUTO_INCREMENT,
    FechaDeAplicacion DATE,
    SuscripcionId INT,
    ClienteId INT,
    Cantidad DECIMAL
);

CREATE TABLE EstudianteGrado (
    EstudianteGradoId INT PRIMARY KEY AUTO_INCREMENT,
    ClienteId INT,
    GradoId INT,
    FechaObtencion DATE
);

CREATE TABLE Grado (
    GradoId INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(100),
    ColorDeCinta VARCHAR(50)
);