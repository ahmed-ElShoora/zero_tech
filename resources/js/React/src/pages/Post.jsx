import React from 'react'
import PostContent from '../components/post/PostContent'
import "../components/post/Post.css"


function Post () {
   return (
      <div className="posts pattern abs">
         <div className="container">
            <PostContent />
         </div>
      </div>
   )
}

export default Post