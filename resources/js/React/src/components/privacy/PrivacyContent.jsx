import React from 'react'

function PrivacyContent({ text }) {
   return (
      <div className='privacy-body py30' dangerouslySetInnerHTML={{__html: text}} >
      </div>
   )
}

export default PrivacyContent