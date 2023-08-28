import React, { useState, useEffect } from 'react'
import "./Popup.css"

function Popup({ hiddenPopup , children }) {
   const [ open, setOpen ] = useState(false)
   useEffect(_=> {
      setOpen(true)
   })
   const handlePopup = ({ target: { className } }) => {
      if(className.split(" ")[0] == "popup"){
         hiddenPopup(false)
      }
   }

   return (
      <>
         <div className={ open? "popup show" : "popup close" } onClick={handlePopup}>
            <div>
               <div className="popup-content">
                     {children}
               </div>
            </div>
         </div>
      </>
   )
}

export default Popup