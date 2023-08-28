import React from 'react'
import { useSelector } from 'react-redux';
import { Link } from 'react-router-dom'
import { API_URL } from '../../../config'
import "./Footer.css"
function Footer ({ social }) {
   const { data } = useSelector((state) => state.staticData);
   const handleClickFooter = _=> {
      window.scrollTo( 0, 0 )
   }
   const routes = data.footer.routes
   return (
      <div className="footer">
         <div className="links">
            <ul>
               <li>
                  <Link onClick={handleClickFooter} to="/">
                     {routes.home}
                  </Link>
               </li>
               <li>
                  <Link onClick={handleClickFooter} to="/about">
                     {routes.about}
                  </Link>
               </li>
               <li>
                  <Link
                     to="/#services"
                     onClick={(_) => {
                        const services = document.querySelector(".services");
                        if (services) {
                           services.scrollIntoView();
                        }
                     }}
                  >
                     {routes.services}
                  </Link>
               </li>
            </ul>
            <ul>
               <li>
                  <Link onClick={handleClickFooter} to="/contact">
                     {routes.contact}
                  </Link>
               </li>
               <li>
                  <Link onClick={handleClickFooter} to="/project">
                     {routes.projects}
                  </Link>
               </li>
               <li>
                  <Link onClick={handleClickFooter} to="/blog">
                     {routes.blog}
                  </Link>
               </li>
            </ul>
            <ul>
               <li>
                  <Link onClick={handleClickFooter} to="/partners">
                     {routes.partners}
                  </Link>
               </li>
               <li>
                  <Link onClick={handleClickFooter} to="/privacy">
                     {routes.privacy}
                  </Link>
               </li>
               <li>
                  <Link onClick={handleClickFooter} to="/videos">
                     {routes.videos}
                  </Link>
               </li>
            </ul>
         </div>
         <div className="copy">
            <img
               src={`${API_URL}/${social?.logo_footer}`}
               alt="footer"
               style={{ width: "100px" }}
               onClick={(_) => (window.location.href = "/")}
            />
            <p>
               <span>{data.footer.copyRight.text}</span>
               <span>&copy; </span>
               <span>{data.footer.copyRight.site}</span>
            </p>
            <div className="social">
               <a href={social.snapchat} target="_blank">
                  <i className="fa-brands fa-linkedin"></i>
               </a>
               <a href={social.twitter} target="_blank">
                  <i className="fa-brands fa-twitter"></i>
               </a>
               {/* <a href={social.insta} target="_blank">
                  <i className="fa-brands fa-instagram"></i>
               </a> */}
               <a href={social.facebook} target="_blank">
                  <i className="fa-brands fa-facebook-f"></i>
               </a>
            </div>
         </div>
      </div>
   );
}

export default Footer