import React from 'react'
import { Link } from 'react-router-dom'

function Post({ img, text, title, clicked, btn }) {
   return (
      <div className="post">
         <img src={img} alt={title} />
         <p className="title">{title}</p>
         <div className="body" dangerouslySetInnerHTML={{ __html: text }}></div>
         <button className="link-p" onClick={(_) => clicked(true)}>
            {btn}
         </button>
      </div>
   );
}

export default Post
