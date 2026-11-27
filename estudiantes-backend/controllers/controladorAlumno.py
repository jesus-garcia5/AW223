from flask import Blueprint, request, jsonify
from Models.modelEstudiante import *

controladorAlumnoBP = Blueprint('controladorAlumno', __name__)


# Ruta para arranque del servidor
@controladorAlumnoBP.route('/')
def inicio():
    return "Hola soy el backend de Alumno"


# Ruta para insertar un alumno
@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    nombreReq = request.form.get('txtNombre', '').strip()
    carreraReq = request.form.get('txtCarrera', '').strip()

    try:
        insertEstudiante(nombreReq, carreraReq)
        return jsonify({"Completado": "estudiante guardado"}), 200

    except Exception as e:
        return jsonify({"Error": str(e)}), 500


# Ruta para consultar alumnos
@controladorAlumnoBP.route('/consultarAlumnos', methods=['GET'])
def consultaAll():
    try:
        alumnos = selectAll()
        return jsonify(alumnos), 200

    except Exception as e:
        print(f"Error: {e}")
        return jsonify({"Error": str(e)}), 500


# Ruta para eliminar un alumno
@controladorAlumnoBP.route('/eliminarAlumno', methods=['PUT'])
def borrar():
    id = request.form.get('id', '').strip()

    try:
        softDeleteEstudiante(id)
        return jsonify({"Completado": "Alumno Borrado"}), 200

    except Exception as e:
        return jsonify({"Error": str(e)}), 500
    

# Ruta para consultar estudiante por ID
@controladorAlumnoBP.route('/consultarAlumno/<int:id>', methods=['GET'])
def consultaPorId(id):
    try:
        estudiante = selectById(id)

        if estudiante is None:
            return jsonify({"Mensaje": "Estudiante no encontrado"}), 404

        return jsonify(estudiante), 200

    except Exception as e:
        return jsonify({"Error": str(e)}), 500


# Ruta para actualizar estudiante
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar():
    id = request.form.get('id', '').strip()
    nombreReq = request.form.get('txtNombre', '').strip()
    carreraReq = request.form.get('txtCarrera', '').strip()

    try:
        updateEstudiante(id, nombreReq, carreraReq)
        return jsonify({"Completado": "Estudiante actualizado"}), 200

    except Exception as e:
        return jsonify({"Error": str(e)}), 500