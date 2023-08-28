import React from "react";
import icon from "../../assets/images/contact/icon.png";
import { API_URL } from "../../config";
import FormContact from "./Form";
function ContactCont({ data, pageText, formData }) {
   return (
      <div className="contact-about py30">
         <h3>{pageText}</h3>
         <div className="content">
            <div className="support">
               {data.map((box, i) => {
                  return (
                     <div className="box" key={i}>
                        <div className="icon">
                           <img
                              src={`${API_URL}/${box.image}`}
                              alt={box.text}
                           />
                        </div>
                        <p>{box.text}</p>
                        <p>{box.desc}</p>
                     </div>
                  );
               })}
            </div>
            <div className="forms">
               <FormContact formData={formData} />
            </div>
         </div>
      </div>
   );
}

export default ContactCont;
