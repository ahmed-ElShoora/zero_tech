import React from 'react'
import FormLogin from './FormLogin'
import img from "../../assets/images/login/Saudi- png.png"
import logo from "../../assets/images/navbar/logo.png"
import { useSelector } from 'react-redux';
function LoginContent () {
      const text = useSelector((state) => state.staticData.data?.login.text);
   return (
      <div className='login-content'>
         <div className="right">
            <img src={logo} alt="logo" />
            <div className='forms'>
               <FormLogin />
            </div>
         </div>
         <div className="left">
            <div className='left-content'>
               <h2>{ text?.title}</h2>
               <p>{text?.body}</p>
            </div>
            <img src={img} alt="login" />
         </div>
      </div>
   )
}

export default LoginContent