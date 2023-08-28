import React from 'react'
import LoginContent from '../components/login/LoginContent'
// import "../components/login/Login.css"
import { Link } from 'react-router-dom'
function Login() {

   return (
      <div className='login'>
         <div className="top pattern abs">
            <div className="back">
               <Link to="/">
                  <i className="fa-solid fa-arrow-right"></i>
               </Link>
            </div>
            <LoginContent />
         </div>
      </div>
   )
}

export default Login