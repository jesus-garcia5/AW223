from flask import Blueprint

controladorAlumnoBP= Blueprint('controlarorAlumno',__name__)

#ruta para arranque del servidor
@controladorAlumnoBP.route('/')
def inicio():
    return "Hola soy el backend de Alumnos"

   #rutas para insert
@controladorAlumnoBP.route('/guardarAlumno' ,methods=['POST'])
def guardar():
    return 'Se guardo el Alumno'

   #rutas para consultar todo
@controladorAlumnoBP.route('/consultaTodo')
def consultatodo():
    return 'Se consulto toda'

   #ruta para actualizar
@controladorAlumnoBP.route('/actualizarAlumno' ,methods=['PUT'])
def actualizar():
    return 'Se actualizo el alumno'


   #ruta para eliminar alumno
@controladorAlumnoBP.route('/eliminarAlumno' ,methods=['DELETE'])
def eliminar():
    return 'Se elimino el alumno'

