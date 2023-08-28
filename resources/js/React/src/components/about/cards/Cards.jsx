import React from 'react'
import Card from './Card'
function Cards({ cards }) {
   return (
      <div className='cards-content'>
         {
            cards.map((card, i) => {
               return (
                  <Card card={ card } key={i} />
               )
            })
         }
      </div>
   )
}

export default Cards