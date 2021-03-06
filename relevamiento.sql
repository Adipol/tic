-- MySQL Script generated by MySQL Workbench
-- Mon Sep 18 12:14:25 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema relevamiento
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema relevamiento
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `relevamiento` DEFAULT CHARACTER SET utf8 ;
USE `relevamiento` ;

-- -----------------------------------------------------
-- Table `relevamiento`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`roles` (
  `idroles` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idroles`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `cod_user` VARCHAR(45) NULL,
  `roles_idroles` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `materno` VARCHAR(45) NULL,
  `paterno` VARCHAR(45) NULL,
  `ci` VARCHAR(45) NOT NULL,
  `pass` VARCHAR(70) NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `fk_usuario_roles_idx` (`roles_idroles` ASC),
  CONSTRAINT `fk_usuario_roles`
    FOREIGN KEY (`roles_idroles`)
    REFERENCES `relevamiento`.`roles` (`idroles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`bus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`bus` (
  `idbus` INT NOT NULL AUTO_INCREMENT,
  `nombre_bus` VARCHAR(45) NOT NULL,
  `placa` VARCHAR(45) NULL,
  `si_cobro` INT NOT NULL,
  `si_acceso` INT NOT NULL,
  `si_geoloc` INT NOT NULL,
  `si_segurida` INT NOT NULL,
  `si_audiovicual` INT NOT NULL,
  `si_internet` INT NOT NULL,
  `si_electrico` INT NOT NULL,
  PRIMARY KEY (`idbus`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`instalacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`instalacion` (
  `idinstalacion` INT NOT NULL AUTO_INCREMENT,
  `nombre_instalacion` VARCHAR(45) NOT NULL,
  `abreviado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idinstalacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`acceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`acceso` (
  `idacceso` INT NOT NULL AUTO_INCREMENT,
  `bus_idbus` INT NOT NULL,
  `instalacion_idinstalacion` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `molinete` VARCHAR(45) NOT NULL,
  `estado_molinete` VARCHAR(45) NOT NULL,
  `placa_molinete` VARCHAR(45) NOT NULL,
  `val_conectordb9` VARCHAR(45) NOT NULL,
  `val_estadodb9` VARCHAR(45) NOT NULL,
  `sol_giro_ingreso` VARCHAR(45) NOT NULL,
  `sol_bastago_giro_ingreso` VARCHAR(45) NOT NULL,
  `sol_giro_inverso` VARCHAR(45) NOT NULL,
  `sol_bastago_giro_inverso` VARCHAR(45) NOT NULL,
  `sol_agarre_bastago` VARCHAR(45) NOT NULL,
  `sol_bastago_agarre` VARCHAR(45) NOT NULL,
  `sensor_agarre` VARCHAR(45) NOT NULL,
  `ferritas` VARCHAR(45) NOT NULL,
  `rueda_dentada` VARCHAR(45) NOT NULL,
  `contador_molinete` VARCHAR(45) NOT NULL,
  `bociona_activacion` VARCHAR(45) NOT NULL,
  `brz1_pasador` VARCHAR(45) NOT NULL,
  `brz1_tornillo_pasador` VARCHAR(45) NOT NULL,
  `brz1_brazo` VARCHAR(45) NOT NULL,
  `brz1_tornillo_alem_largo` VARCHAR(45) NOT NULL,
  `brz2_pasador` VARCHAR(45) NOT NULL,
  `brz2_tornillo_pasador` VARCHAR(45) NOT NULL,
  `brz2_brazo` VARCHAR(45) NOT NULL,
  `brz2_tornillo_alem_largo` VARCHAR(45) NOT NULL,
  `brz3_pasador` VARCHAR(45) NOT NULL,
  `brz3_tornillo_pasador` VARCHAR(45) NOT NULL,
  `brz3_brazo` VARCHAR(45) NOT NULL,
  `brz3_tornillo_alem_largo` VARCHAR(45) NOT NULL,
  `estructura_chasis` VARCHAR(45) NOT NULL,
  `estructura_visagras` VARCHAR(45) NOT NULL,
  `chapas_central` VARCHAR(45) NOT NULL,
  `chapas_derecha` VARCHAR(45) NOT NULL,
  `chapas_izquierda` VARCHAR(45) NOT NULL,
  `observaciones` VARCHAR(800) NOT NULL,
  `fecha` DATETIME NOT NULL,
  PRIMARY KEY (`idacceso`),
  INDEX `fk_acceso_bus1_idx` (`bus_idbus` ASC),
  INDEX `fk_acceso_instalacion1_idx` (`instalacion_idinstalacion` ASC),
  INDEX `fk_acceso_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_acceso_bus1`
    FOREIGN KEY (`bus_idbus`)
    REFERENCES `relevamiento`.`bus` (`idbus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_acceso_instalacion1`
    FOREIGN KEY (`instalacion_idinstalacion`)
    REFERENCES `relevamiento`.`instalacion` (`idinstalacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_acceso_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `relevamiento`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`seguridad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`seguridad` (
  `idseguridad` INT NOT NULL AUTO_INCREMENT,
  `bus_idbus` INT NOT NULL,
  `instalacion_idinstalacion` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `dvr_gabinete` VARCHAR(45) NOT NULL,
  `dvr` VARCHAR(45) NOT NULL,
  `dvr_existencia` VARCHAR(45) NOT NULL,
  `funcion_grabacion` VARCHAR(45) NOT NULL,
  `Almacenamiento` VARCHAR(45) NOT NULL,
  `Capacidad` VARCHAR(45) NOT NULL,
  `num_serie_hdd` VARCHAR(45) NOT NULL,
  `tornillos_rac_hdd` VARCHAR(45) NOT NULL,
  `adaptador_rca` VARCHAR(45) NOT NULL,
  `lambda1` VARCHAR(45) NOT NULL,
  `lambda2` VARCHAR(45) NOT NULL,
  `lambda3` VARCHAR(45) NOT NULL,
  `lambda4` VARCHAR(45) NOT NULL,
  `out1` VARCHAR(45) NOT NULL,
  `out2` VARCHAR(45) NOT NULL,
  `out3` VARCHAR(45) NOT NULL,
  `out4` VARCHAR(45) NOT NULL,
  `kl_mesclaor_video` VARCHAR(45) NOT NULL,
  `kl_out1` VARCHAR(45) NOT NULL,
  `kl_out2` VARCHAR(45) NOT NULL,
  `kl_out3` VARCHAR(45) NOT NULL,
  `kl_out4` VARCHAR(45) NOT NULL,
  `cam_com_front` VARCHAR(45) NOT NULL,
  `cam_com_cond` VARCHAR(45) NOT NULL,
  `cam_val` VARCHAR(45) NOT NULL,
  `cam_puerta_sal` VARCHAR(45) NOT NULL,
  `cam_retro` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(45) NOT NULL,
  `fecha` DATETIME NOT NULL,
  PRIMARY KEY (`idseguridad`),
  INDEX `fk_seguridad_usuario1_idx` (`usuario_idusuario` ASC),
  INDEX `fk_seguridad_bus1_idx` (`bus_idbus` ASC),
  INDEX `fk_seguridad_instalacion1_idx` (`instalacion_idinstalacion` ASC),
  CONSTRAINT `fk_seguridad_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `relevamiento`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_seguridad_bus1`
    FOREIGN KEY (`bus_idbus`)
    REFERENCES `relevamiento`.`bus` (`idbus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_seguridad_instalacion1`
    FOREIGN KEY (`instalacion_idinstalacion`)
    REFERENCES `relevamiento`.`instalacion` (`idinstalacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`Internet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`Internet` (
  `idInternet` INT NOT NULL AUTO_INCREMENT,
  `bus_idbus` INT NOT NULL,
  `instalacion_idinstalacion` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `rout_num_serie` VARCHAR(45) NOT NULL,
  `rout_num_imei` VARCHAR(45) NOT NULL,
  `rout_estado` VARCHAR(45) NOT NULL,
  `rout_ubicacion` VARCHAR(45) NOT NULL,
  `rout_cargador` VARCHAR(45) NOT NULL,
  `sim` VARCHAR(45) NOT NULL,
  `sim_ubicacion` VARCHAR(45) NOT NULL,
  `sim_numero` VARCHAR(45) NOT NULL,
  `sim_serie` VARCHAR(45) NOT NULL,
  `abrazaderas` VARCHAR(45) NOT NULL,
  `cloud` VARCHAR(45) NOT NULL,
  `cloud_estado` VARCHAR(45) NOT NULL,
  `cloud_numero` VARCHAR(45) NOT NULL,
  `cloud_serie` VARCHAR(45) NOT NULL,
  `cloud_cargador` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(45) NOT NULL,
  `fecha` DATETIME NOT NULL,
  PRIMARY KEY (`idInternet`),
  INDEX `fk_Internet_usuario1_idx` (`usuario_idusuario` ASC),
  INDEX `fk_Internet_instalacion1_idx` (`instalacion_idinstalacion` ASC),
  INDEX `fk_Internet_bus1_idx` (`bus_idbus` ASC),
  CONSTRAINT `fk_Internet_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `relevamiento`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Internet_instalacion1`
    FOREIGN KEY (`instalacion_idinstalacion`)
    REFERENCES `relevamiento`.`instalacion` (`idinstalacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Internet_bus1`
    FOREIGN KEY (`bus_idbus`)
    REFERENCES `relevamiento`.`bus` (`idbus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`cobro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`cobro` (
  `idcobro` INT NOT NULL AUTO_INCREMENT,
  `bus_idbus` INT NOT NULL,
  `instalacion_idinstalacion` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `modelo_tablet` VARCHAR(45) NOT NULL,
  `cobrocol` VARCHAR(45) NOT NULL,
  `estado_operativo` VARCHAR(45) NOT NULL,
  `descripcion_fallo_1` VARCHAR(45) NOT NULL,
  `descripcion_fallo_2` VARCHAR(45) NOT NULL,
  `id_validador` VARCHAR(45) NOT NULL,
  `codigo_gamlp` VARCHAR(45) NOT NULL,
  `cod_gamlp` VARCHAR(45) NULL,
  `codigo_mfs` VARCHAR(45) NOT NULL,
  `cod_mfs` VARCHAR(45) NULL,
  `interfaz` VARCHAR(45) NOT NULL,
  `estado_interfaz` VARCHAR(45) NOT NULL,
  `conector_db9` VARCHAR(45) NOT NULL,
  `estado_conector` VARCHAR(45) NOT NULL,
  `ubicacion_cable_comunicacion` VARCHAR(45) NOT NULL,
  `estado_cable_comunicacion` VARCHAR(45) NOT NULL,
  `tipo_cable` VARCHAR(45) NOT NULL,
  `tipo_hub` VARCHAR(45) NOT NULL,
  `condicion_hub` VARCHAR(45) NOT NULL,
  `tipo_conexion_hub` VARCHAR(45) NOT NULL,
  `estado_conexion_hub` VARCHAR(45) NOT NULL,
  `ext_usb` VARCHAR(45) NOT NULL,
  `estado_usb` VARCHAR(45) NOT NULL,
  `ubicacion_cargador` VARCHAR(45) NOT NULL,
  `estado_cargador` VARCHAR(45) NOT NULL,
  `tipo_tarjeta_inteligente` VARCHAR(45) NOT NULL,
  `estado_tarjeta_inteligente` VARCHAR(45) NOT NULL,
  `numero_serie` VARCHAR(45) NOT NULL,
  `id_vsam` VARCHAR(45) NOT NULL,
  `existencia_vsam` VARCHAR(45) NOT NULL,
  `estado_vsam` VARCHAR(45) NOT NULL,
  `tornillos_tapa_validador` VARCHAR(45) NOT NULL,
  `observaciones` VARCHAR(45) NOT NULL,
  `fecha` DATETIME NOT NULL,
  PRIMARY KEY (`idcobro`),
  INDEX `fk_cobro_bus1_idx` (`bus_idbus` ASC),
  INDEX `fk_cobro_instalacion1_idx` (`instalacion_idinstalacion` ASC),
  INDEX `fk_cobro_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_cobro_bus1`
    FOREIGN KEY (`bus_idbus`)
    REFERENCES `relevamiento`.`bus` (`idbus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cobro_instalacion1`
    FOREIGN KEY (`instalacion_idinstalacion`)
    REFERENCES `relevamiento`.`instalacion` (`idinstalacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cobro_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `relevamiento`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`geolocalizacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`geolocalizacion` (
  `idgeolocalizacion` INT NOT NULL AUTO_INCREMENT,
  `bus_idbus` INT NOT NULL,
  `instalacion_idinstalacion` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `estado_operativo_gps` VARCHAR(45) NOT NULL,
  `ubicacion` VARCHAR(45) NOT NULL,
  `imei` VARCHAR(45) NOT NULL,
  `numero_serie` VARCHAR(45) NOT NULL,
  `codigo_gamlp` VARCHAR(45) NOT NULL,
  `cod_gamlp` VARCHAR(45) NULL,
  `sim_card` VARCHAR(45) NOT NULL,
  `numero_sim_card` VARCHAR(45) NULL,
  `numero_serie_sim_card` VARCHAR(45) NULL,
  `gps` VARCHAR(45) NOT NULL,
  `gsm` VARCHAR(45) NOT NULL,
  `handset` VARCHAR(45) NOT NULL,
  `estado_handset` VARCHAR(45) NOT NULL,
  `conector_gps` VARCHAR(45) NOT NULL,
  `display_handset` VARCHAR(45) NOT NULL,
  `botones_handset` VARCHAR(45) NOT NULL,
  `carcasa_handset` VARCHAR(45) NOT NULL,
  `porta_handset` VARCHAR(45) NOT NULL,
  `visualizacion_sistema_gps` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(45) NOT NULL,
  `fecha` DATETIME NOT NULL,
  PRIMARY KEY (`idgeolocalizacion`),
  INDEX `fk_geolocalizacion_bus1_idx` (`bus_idbus` ASC),
  INDEX `fk_geolocalizacion_instalacion1_idx` (`instalacion_idinstalacion` ASC),
  INDEX `fk_geolocalizacion_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_geolocalizacion_bus1`
    FOREIGN KEY (`bus_idbus`)
    REFERENCES `relevamiento`.`bus` (`idbus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_geolocalizacion_instalacion1`
    FOREIGN KEY (`instalacion_idinstalacion`)
    REFERENCES `relevamiento`.`instalacion` (`idinstalacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_geolocalizacion_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `relevamiento`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`audiovisual`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`audiovisual` (
  `idaudiovisual` INT NOT NULL AUTO_INCREMENT,
  `bus_idbus` INT NOT NULL,
  `instalacion_idinstalacion` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `visualizacion_grabacionkl` VARCHAR(45) NOT NULL,
  `audiovisualcol` VARCHAR(45) NOT NULL,
  `tipo_almacenamientokl` VARCHAR(45) NOT NULL,
  `capacidad_almacenamientokl` VARCHAR(45) NOT NULL,
  `numero_serieHdd` VARCHAR(45) NOT NULL,
  `estado_kl` VARCHAR(45) NOT NULL,
  `estado_display` VARCHAR(45) NOT NULL,
  `touch_display` VARCHAR(45) NOT NULL,
  `boton_display1` VARCHAR(45) NOT NULL,
  `boton_display_2` VARCHAR(45) NOT NULL,
  `boton_display_3` VARCHAR(45) NOT NULL,
  `boton_display_4` VARCHAR(45) NOT NULL,
  `estado_tv1` VARCHAR(45) NOT NULL,
  `cod_gamlptv1` VARCHAR(45) NULL,
  `cod_gamlp1` VARCHAR(45) NULL,
  `numero_serietv1` VARCHAR(45) NOT NULL,
  `tipo_conectortv1` VARCHAR(45) NOT NULL,
  `estado_conectortv1` VARCHAR(45) NOT NULL,
  `conector_rcatv1` VARCHAR(45) NOT NULL,
  `estado_tv2` VARCHAR(45) NOT NULL,
  `cod_gamlptv2` VARCHAR(45) NULL,
  `cod_gamlp2` VARCHAR(45) NULL,
  `numero_serietv2` VARCHAR(45) NOT NULL,
  `tipo_conectortv2` VARCHAR(45) NOT NULL,
  `estado_conectortv2` VARCHAR(45) NOT NULL,
  `conector_rcatv2` VARCHAR(45) NOT NULL,
  `mic_conductor` VARCHAR(45) NOT NULL,
  `brazo_mic` VARCHAR(45) NOT NULL,
  `mic_anfitrion` VARCHAR(45) NOT NULL,
  `cable_usb` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(45) NOT NULL,
  `fecha` DATETIME NOT NULL,
  PRIMARY KEY (`idaudiovisual`),
  INDEX `fk_audiovisual_bus1_idx` (`bus_idbus` ASC),
  INDEX `fk_audiovisual_instalacion1_idx` (`instalacion_idinstalacion` ASC),
  INDEX `fk_audiovisual_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_audiovisual_bus1`
    FOREIGN KEY (`bus_idbus`)
    REFERENCES `relevamiento`.`bus` (`idbus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_audiovisual_instalacion1`
    FOREIGN KEY (`instalacion_idinstalacion`)
    REFERENCES `relevamiento`.`instalacion` (`idinstalacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_audiovisual_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `relevamiento`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relevamiento`.`electrico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relevamiento`.`electrico` (
  `idelectrico` INT NOT NULL AUTO_INCREMENT,
  `bus_idbus` INT NOT NULL,
  `instalacion_idinstalacion` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `inversor` VARCHAR(45) NOT NULL,
  `serie_inversor` VARCHAR(45) NULL,
  `codigo_gamlp` VARCHAR(45) NOT NULL,
  `cod_gamlp` VARCHAR(45) NOT NULL,
  `toma_energia_conductor` VARCHAR(45) NOT NULL,
  `cableado_energia` VARCHAR(45) NOT NULL,
  `estado_inversor` VARCHAR(45) NOT NULL,
  `obs` VARCHAR(45) NOT NULL,
  `fecha` DATETIME NOT NULL,
  PRIMARY KEY (`idelectrico`),
  INDEX `fk_electrico_bus1_idx` (`bus_idbus` ASC),
  INDEX `fk_electrico_instalacion1_idx` (`instalacion_idinstalacion` ASC),
  INDEX `fk_electrico_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_electrico_bus1`
    FOREIGN KEY (`bus_idbus`)
    REFERENCES `relevamiento`.`bus` (`idbus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_electrico_instalacion1`
    FOREIGN KEY (`instalacion_idinstalacion`)
    REFERENCES `relevamiento`.`instalacion` (`idinstalacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_electrico_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `relevamiento`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
