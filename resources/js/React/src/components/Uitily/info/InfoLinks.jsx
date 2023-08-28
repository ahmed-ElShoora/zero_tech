import React from 'react'
import { Link } from 'react-router-dom'
import "./info.css"
function InfoLinks({ text, loc, home, link }) {
   return (
         <div className="info-content">
            <h1>{ text }</h1>
            {/* <div className="location">
            <Link to="/">{ home }</Link>
               <span>/</span>
            <Link to={link}>{ loc }</Link>
            </div> */}
         </div>
   )
}

export default InfoLinks