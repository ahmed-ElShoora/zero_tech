import React from 'react'

function partner({ img, text, link }) {
   return (
      <div className="items" onClick={_=> link && window.open( link, '_blank') }>
         <img src={img} alt={ text } />
         <p>{ text }</p>
      </div>
   )
}

export default partner
