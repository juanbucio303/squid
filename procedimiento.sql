DELIMITER $$
CREATE PROCEDURE registro (
    IN nombre VARCHAR(50),
    IN ap VARCHAR(50),
    IN am VARCHAR(50),
    IN no_cuenta VARCHAR(50),
    IN correo VARCHAR(50),
    IN nom_usuario VARCHAR(50),
    IN contra VARCHAR(255),
    IN tipo_disp INT,
    IN mac VARCHAR(50),
    IN ip VARCHAR(50))
BEGIN
DECLARE id_aux INT;
	insert into usuarios(id_usuario,nombre_usuario,estado,fecha_ini,fecha_fin,id_tipo_usuario,id_dispositivo,contra) values(null,nom_usuario,1,CURDATE(),'2018-08-03',1,tipo_disp,contra);
    SELECT id_usuario into id_aux FROM usuarios WHERE id_usuario= (SELECT MAX(id_usuario) FROM usuarios);
    insert into personales(id_personal,no_cuenta,nombre,ap,am,correo,id_usuario) values(null,no_cuenta,nombre,ap,am,correo,id_aux);
 END $$











SELECT usuarios.nombre_usuario,personales.nombre,personales.ap,personales.am,dispositivos.desc_dispositivo,dispositivos.ip_address,dispositivos.mac_address,tipo_dispositivo.desc_disp FROM dispositivos,tipo_dispositivo,personales,usuarios WHERE dispositivos.id_tipo_dispositivo=tipo_dispositivo.id_tipo_dispositivo AND usuarios.id_dispositivo=dispositivos.id_dispositivo AND personales.id_usuario=usuarios.id_usuario
