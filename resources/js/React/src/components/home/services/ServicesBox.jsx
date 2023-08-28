import React, { useRef } from 'react'
import { useEffect } from 'react';

function ServicesBox ({ num, img, text, content }) {
   const tbody = useRef();
   var xmlString = content.text;
   useEffect(_ => {
      tbody.current.innerHTML = xmlString;
   }, [])
   return (
      <div className="box">
         {/* <span data-num={num}>{num}</span>
         <span className="inCircle"></span> */}
         <img src={img} alt="services" />
         <p className="title">{text}</p>
         <div className="content-service">
            <h1>{content.h}</h1>
            <p ref={tbody}></p>
         </div>
      </div>
   );
}

export default ServicesBox