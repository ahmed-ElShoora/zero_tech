import React from "react";
import { useSelector } from "react-redux";
import HeadH from "../HeadH";

function About({ dataAbout }) {
   const { loading, data } = useSelector((state) => state.home);

   return (
      <>
         <div className="about">
            <div className="container">
               <HeadH text={dataAbout} />
               <div
                  className="tbody"
                  dangerouslySetInnerHTML={{ __html: data?.text }}
               ></div>
            </div>
            <div className="animate">
               <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="396.729"
                  height="138.743"
                  viewBox="0 0 396.729 138.743"
               >
                  <path
                     id="Path_2039"
                     data-name="Path 2039"
                     d="M4638.868,898.1s128.764,153.52,230.433,58.516,117.1,38.806,165.592,79.522"
                     transform="translate(-4638.484 -897.777)"
                     fill="none"
                     stroke="#1270b5"
                     strokeWidth="1"
                  />
               </svg>
               <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="396.729"
                  height="138.743"
                  viewBox="0 0 396.729 138.743"
               >
                  <path
                     id="Path_2039"
                     data-name="Path 2039"
                     d="M4638.868,898.1s128.764,153.52,230.433,58.516,117.1,38.806,165.592,79.522"
                     transform="translate(-4638.484 -897.777)"
                     fill="none"
                     stroke="#1270b5"
                     strokeWidth="1"
                  />
               </svg>
            </div>
         </div>
      </>
   );
}

export default About;
