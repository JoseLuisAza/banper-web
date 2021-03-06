CREATE OR REPLACE PACKAGE PACK_PERSONALES AS
PROCEDURE PRO_TELEFONO(EEMPRESA IN VARCHAR2,ENUMERO IN NUMBER,EDPI IN NUMBER);
END PACK_PERSONALES;

CREATE OR REPLACE PACKAGE BODY PACK_PERSONALES AS
  PROCEDURE PRO_TELEFONO(EEMPRESA IN VARCHAR2,ENUMERO IN NUMBER,EDPI IN NUMBER)
    AS
    BEGIN
    INSERT INTO TELEFONO(EMPRESA,NUMERO,DPI)VALUES(EEMPRESA,ENUMERO,EDPI);
    END PRO_TELEFONO;
END PACK_PERSONALES;


SELECT *FROM USUARIOS_FORMALES;

BEGIN
PACK_PERSONALES.PRO_CIUDAD('Uspantan','Quiche','Guatemala');
END;


CREATE OR REPLACE PACKAGE PACK_IDENT AS
  FUNCTION LOGIN(tex1 varchar2,text2 nvarchar2)
  RETURN NUMBER;
END PACK_IDENT;

CREATE OR REPLACE PACKAGE BODY PACK_IDENT AS
  FUNCTION LOGIN(tex1 varchar2,text2 nvarchar2)
  RETURN NUMBER
  IS
  RETORNO USUARIOS_FORMALES.CONTRASEŅA%Type;
  RESULTADO NUMBER;
  BEGIN
    SELECT CONTRASEŅA 
    INTO RETORNO
    FROM USUARIOS_FORMALES 
    WHERE USUARIO=tex1 AND
    CONTRASEŅA=text2;
    
    IF RETORNO IS NOT NULL THEN
      RESULTADO:=1;
      RETURN RESULTADO;
    ELSIF RETORNO IS NULL THEN
      RESULTADO:=0;
      RETURN RESULTADO;
    END IF;
  END LOGIN;
END PACK_IDENT;

COMMIT;

CREATE OR REPLACE FUNCTION FUN_LOGINU(eusua in USUARIOS.USUARIO%Type,econ in USUARIOS.CONTRASEŅA%Type)
RETURN NUMBER
AS
  RETORNO USUARIOS.CONTRASEŅA%Type;
  RESULTADO NUMBER;
  BEGIN
    SELECT CONTRASEŅA 
    INTO RETORNO
    FROM USUARIOS
    WHERE USUARIO=eusua AND
    CONTRASEŅA=econ;
    
    IF RETORNO IS NOT NULL THEN
      RESULTADO:=1;
      RETURN RESULTADO;
    ELSIF RETORNO IS NULL THEN
      RESULTADO:=0;
      RETURN RESULTADO;
    END IF;
END FUN_LOGINU;

DECLARE
RES NUMBER;
BEGIN
RES:=PACK_IDENT.FUN_LOGINU('Mat0045','R765@sef09p345_47');
END;


SELECT *FROM USUARIOS;


BEGIN
PACK_PERSONALES.PRO_PERSONA(2567856473493,'Mateo','Rodolfo','Lopez','Rodriguez','4ta Calle Zona 2','15-09-1990',25);
END;

INSERT INTO CLIENTE(FECHA_INGRESO,DPI,COD_CLIENTE)VALUES('16-08-2016',2567856473493,1);
INSERT INTO USUARIOS(COD_USUARIO,USUARIO,CONTRASEŅA,COD_CLIENTE)VALUES(1,'Mat0045','R765@sef09p345_47',1);

