import React, { useState, useEffect } from "react";
import { Link, NavLink } from "react-router-dom";
import { useSelector, useDispatch } from "react-redux";
import { changeLang } from "../../../redux/action/langAction";
import "./Navbar.css";
import { staticData } from "../../../redux/action/staticDataAction";
import { API_URL } from "../../../config";

const Navbar = ({ logo }) => {
   const [mobileShow, setMobileShow] = useState(false);
   const dispatch = useDispatch();
   const { data } = useSelector((state) => state.staticData);
   const { lang } = useSelector((state) => state.lang);
   useEffect(
      (_) => {
         document.querySelectorAll(".nav ul li a").forEach((ele) => {
            ele.addEventListener("click", (e) => {
               setMobileShow(false)
            });
         });
         return (_) => {
            window.location.reload();
         };
      },
      [dispatch, lang]
   );
   const handleLang = (_) => {
      if (lang == "AR") {
         dispatch(changeLang("EN"));
         dispatch(staticData());
      } else {
         dispatch(changeLang("AR"));
         dispatch(staticData());
      }
   };
   return (
      <div className="navbar">
         <div className="container">
            <div className="logo">
                  <img src={`${API_URL}/${logo}`} alt="logo" onClick={_=> window.location.href = "/"} />
               
            </div>
            <div className={mobileShow ? "nav active" : "nav"}>
               <ul>
                  <li className="earth" onClick={handleLang}>
                     <i className="fa-solid fa-earth-americas"></i>
                     <span className="circle-top">
                        {lang == "AR" ? "E" : "ع"}
                     </span>
                  </li>
                  {data?.navbar.map((item, i) => (
                     <li key={i}>
                        <NavLink
                           to={item.link}
                           onClick={item.clicked}
                           className={({ isActive }) => {
                              if (item.active) {
                                 return isActive ? "active" : null;
                              }
                           }}
                        >
                           {item.text}
                        </NavLink>
                     </li>
                  ))}
                  <li className="cust">
                     <Link to={`${data.customers.link}`}>{data.customers.text}</Link>
                  </li>
               </ul>
            </div>
            <div className={mobileShow ? "more active" : "more"}>
               {/* <div className='lang'>
                  <label htmlFor='lang'>EN</label>
                  <input type="checkbox" id='lang' onChange={ handleChangeLang } />
                  <label htmlFor='lang'>AR</label>
               </div> */}
            </div>
            <div className="mobile" onClick={(_) => setMobileShow(!mobileShow)}>
               {mobileShow ? (
                  <i className="fa-solid fa-xmark close"></i>
               ) : (
                  <i className="fa-solid fa-bars open"></i>
               )}
            </div>
         </div>
      </div>
   );
};
export default Navbar;
