import React from 'react'
import InfoLinks from './InfoLinks'

function ContentInfo({ img, text, loc, home, link }) {
   return (
      <div className='about-all'>
         <div className='about-info blur-img' style={{
            backgroundSize: "cover",
            backgroundRepeat: "no-repeat",
            backgroundPosition: "center center",
            backgroundAttachment: "fixed",
            backgroundImage: `url("${img}")` ,
         }}>
         </div>
         <InfoLinks text={text} loc={loc} home={home} link={link} />
      </div>
   )
}

export default ContentInfo