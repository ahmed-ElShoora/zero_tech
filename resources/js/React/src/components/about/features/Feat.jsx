import React from 'react'

function Feat({ title, img }) {
   return (
      <div className="feat">
         <div className='icon'>
            <img src={img} alt={ title } />
         </div>
         <div className="title">
            <p>{ title }</p>
         </div>
      </div>
   )
}

export default Feat