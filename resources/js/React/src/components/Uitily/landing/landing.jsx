import React from 'react'
import "./landing.css"
import logo from "../../../assets/images/navbar/logo.png";

function landing () {
   return (
      <div className="landing pattern">
         <img src={logo} alt="logo" />
      </div>
   );
}

export default landing
