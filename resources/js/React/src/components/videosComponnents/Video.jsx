import React from 'react'

function video({ img, text, link, click }) {
   const clicked = (clk, link) => {
      click(clk, link)
   }
   return (
      <div className="item">
         <div className="top">
            <div className="img">
               <img src={img} alt={text} />
               <span></span>
            </div>
            <p>{ text }</p>
            <div className="icon" onClick={ _=>  clicked(true) } >
               <i className="fa-solid fa-play"></i>
            </div>
         </div>
         <div className="bottom">
            <button onClick={ _=>  clicked(true, link) }>مشاهدة</button>
         </div>
      </div>
   )
}

export default video