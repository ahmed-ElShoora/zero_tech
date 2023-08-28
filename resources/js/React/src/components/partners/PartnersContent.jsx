import React from "react";
import Partner from "./Partner";
import { API_URL } from "../../config";
function PartnersContent({ data, title }) {
   return (
      <div className="partners-content py30">
         <h3>{title }</h3>
         <div className="partners-boxs">
            {data.map((item, i) => {
               return (
                  <Partner
                     img={`${API_URL}/${item.image}`}
                     link={item.link}
                     text={item.text}
                     key={i}
                  />
               );
            })}
         </div>
      </div>
   );
}

export default PartnersContent;
