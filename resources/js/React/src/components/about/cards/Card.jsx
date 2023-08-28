import React from 'react'
import { API_URL } from '../../../config'

function Card({ card }) {
   return (
      <div className="card">
         <span className="img">
            <img src={`${API_URL}/${card.image}`} alt={card.title} />
         </span>
         <span className="head">{card.title}</span>
         <div className="body">
            <p dangerouslySetInnerHTML={{ __html: card.text }}></p>
         </div>
      </div>
   );
}

export default Card