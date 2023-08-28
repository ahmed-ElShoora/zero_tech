import React from 'react'
import { Link } from 'react-router-dom'

function NotFoundPageContent() {
   return (
      <main>
         <section>
            <span>404</span>
            <p>The requested path could not be page <Link to="/" style={{ color: "#00f" }}>Back to home</Link></p>
         </section>
      </main>
   )
}

export default NotFoundPageContent
