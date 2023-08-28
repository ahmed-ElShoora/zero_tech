import React from "react";
import HeadH from "../HeadH";
import ServicesBox from "./ServicesBox";
import { useSelector } from "react-redux";
import { API_URL } from "../../../config";

function Services({ dataServices }) {
   const { loading, data } = useSelector((state) => state.home);
   return (
      <div className="services" id="services">
         <HeadH text={dataServices} />
         <div className="boxs-services">
            {data?.services.map((serv, i) => {
               return (
                  <div key={i}>
                     <ServicesBox
                        num={i + 1}
                        img={`${API_URL}/${serv.image}`}
                        text={serv.title}
                        content={{
                           h: serv.title,
                           text: serv.text,
                        }}
                     />
                  </div>
               );
            })}
         </div>
      </div>
   );
}

export default Services;
