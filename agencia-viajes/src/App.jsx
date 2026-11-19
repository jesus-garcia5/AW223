import { useState } from 'react'
import './App.css'
import Tarjeta from './components/Tarjeta'

const destinos = [
  {
    id: 1, 
    nombre: "mazatlan",
    ubicacion: "sinaloa",
    precio: 7000,
    descripcion: "Es una vibrante ciudad portuaria y destino turístico ubicado en la costa del Pacífico, en el estado de Sinaloa, México",
    imagen: "https://media.staticontent.com/media/pictures/6c630a2f-f73c-4ce0-9181-092038818a81",

  },
  {
    id: 2, 
    nombre: "Puerto escondido",
    ubicacion: "Oaxaca",
    precio: 4500,
    descripcion: "Destino costero en el Pacífico de Oaxaca, México, famoso por sus playas, su ambiente relajado y el surf de talla mundial en Playa Zicatela",
    imagen: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHf9dsubv_4LocCQha0W0A0P1R62Qc9knmWbR9JJP4gA&s=10",
    
  },
  {
    id: 3, 
    nombre: "Cancún",
    ubicacion: "Quintana Roo",
    precio: 8000,
    descripcion: "Ciudad costera y destino turístico de talla mundial ubicada en el noreste de la península de Yucatán, en el estado de Quintana Roo",
    imagen: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRY8yMU7WS1Orkkale0S3TXc4cjfgFhcTGkI-cmER0TSRel69hlFrPcrw2u&s=10",
    
  },
  {
    id: 4, 
    nombre: "Acapulco",
    ubicacion: "Guerrero",
    precio: 6500,
    descripcion: "Emblemática ciudad y puerto turístico ubicado en la costa del estado de Guerrero, México, a orillas del océano Pacífico",
    imagen: "https://cdn.getyourguide.com/image/format=auto%2Cfit=crop%2Cgravity=auto%2Cquality=60%2Cwidth=400%2Cheight=265%2Cdpr=2/tour_img/20717ab0a3cea8675f994ae7e328dbd2d446e911681d93fa862ba77287971df2.jpeg",
    
  },
  {
    id: 5, 
    nombre: "Los cabos",
    ubicacion: "Oaxaca",
    precio: 9000,
    descripcion: "Destino turístico en el extremo sur de la península de Baja California Sur, donde el desierto se une con el océano Pacífico y el mar de Cortés",
    imagen: "https://assets.simpleviewinc.com/sv-loscabos/image/upload/c_fill,f_jpg,h_819,q_65,w_640/v1/cms_resources/clients/loscabosmx/Archkayak2019_b48ff346-426f-4d72-b153-67e2030e7500.jpg",
    
  },
  
  
  
  
];

function App() {
  const [favoritos, setFavoritos] = useState([]);

  // Agregar o quitar destinos de favoritos
  const toggleFavorito = (id) => {
    if (favoritos.includes(id)) {
      setFavoritos(favoritos.filter((favorito) => favorito !== id));
    } else {
      setFavoritos([...favoritos, id]);
    }
  };

  return (
    <div className="app">

      <h1>Playas turísticas de México</h1>

      <p>
        Explora nuestros destinos y agrega tus favoritos.
      </p>

      <h3>Mis favoritos: {favoritos.length}</h3>

      <div className="destinos-container">

        {destinos.map((destino) => (
          <Tarjeta
            key={destino.id}
            destino={destino}
            esFavorito={favoritos.includes(destino.id)}
            onFavorito={() => toggleFavorito(destino.id)}
          />
        ))}

      </div>

    </div>
  );
}

export default App;

