import React from 'react'

function HeadH({ text, color }) {
   return (
      <h3 className='HeadH' style={{color: color? color: "var(--main-color)"}}>{text}</h3>
   )
}

export default HeadH