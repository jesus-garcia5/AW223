from app import mysql

#funcion para consultar todo
def selectAll():
    cursor= mysql.conection.cursor()
    cursor.execute("SELECT * FROM tb_alumnos WHER state=1 ")
    consulta  = cursor.fetchall()
    cursor.close()
    return consulta

#Funcion para insertar 
def insertEstudiante(nombre, carrera):
    cursor= mysql.conection.cursor()
    cursor.execute("INSERT INTO tb_alumnos(nombre, carrera) VALUES (%s,%s)",(nombre, carrera))
    mysql.connection.commit()
    cursor.close()

#Funcion para eliminar(softDelate)
def softDelateEstudiante(id):
    cursor= mysql.connection.cursor()
    cursor.execute("UPDATE tb_alumnos SET state= 0 WHERE id= %s",(id))
    mysql.connection.commit()
    cursor.close()

# Funcion para consultar por ID
def selectById(id):
    cursor = mysql.connection.cursor()
    cursor.execute("SELECT * FROM tb_alumnos WHERE id = %s AND state = 1", (id,))
    consulta = cursor.fetchone()
    cursor.close()
    return consulta


# Funcion para actualizar estudiante
def updateEstudiante(id, nombre, carrera):
    cursor = mysql.connection.cursor()
    cursor.execute("UPDATE tb_alumnos SET nombre = %s, carrera = %s WHERE id = %s", (nombre, carrera, id))
    mysql.connection.commit()
    cursor.close()