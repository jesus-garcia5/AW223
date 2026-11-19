import { useState } from 'react';

function Tarjeta({ destino, esFavorito, onFavorito }) {
  const [mostrarInfo, setMostrarInfo] = useState(false);

  return (
    <div className="destino-card">

      <img
        src={destino.imagen}
        alt={destino.nombre}
        className="destino-img"
      />

      <div className="destino-info">
        <h2>{destino.nombre}</h2>

        <button onClick={onFavorito}>
          {esFavorito
            ? ' - Quitar de favoritos'
            : '+ Agregar a favoritos'}
        </button>

        <button
          onClick={() => setMostrarInfo(!mostrarInfo)}
          className="btn-mas"
        >
          {mostrarInfo ? 'Ver menos -' : 'Más información +'}
        </button>

        {mostrarInfo && (
          <div className="info-extra">
            <p><strong>Ubicación:</strong> {destino.ubicacion}</p>
            <p><strong>Precio:</strong> ${destino.precio}</p>
            <p>{destino.descripcion}</p>
          </div>
        )}
      </div>

    </div>
  );
}

export default Tarjeta;
