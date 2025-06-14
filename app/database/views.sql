CREATE VIEW VIEW_MASCOTAS_CON_INFO_PROPIETARIOS AS
SELECT 
M.ID, M.TIPO, M.NOMBRE, M.COLOR, M.GENERO, M.ESTA_VIVO,
CONCAT(P.APELLIDOS, ' ', P.NOMBRES) 'PROPIETARIO'
FROM MASCOTAS AS M
INNER JOIN PROPIETARIOS P 
ON M.PROPIETARIO_ID = P.ID;
