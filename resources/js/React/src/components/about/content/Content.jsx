import React from 'react'
import { useSelector } from 'react-redux';

function Content({ text }) {
   const {about} = useSelector((state) => state.staticData.data);
   return (
      <div className='content-about'>
         <div className="content-about-bg"></div>
         <div className="content-about-info">
            <h2>{about.text}</h2>
            <div dangerouslySetInnerHTML={{__html: text}} style={{
               padding: "20px"
            }}></div>
         </div>
      </div>
   )
}

export default Content