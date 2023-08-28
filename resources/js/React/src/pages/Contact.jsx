import React, { useEffect } from "react";
import ContentInfo from "../components/Uitily/info/ContentInfo";
import ContactCont from "../components/contact/ContactCont";
import "../components/contact/Contact.css";
import { useDispatch, useSelector } from "react-redux";
import { getContact } from "../redux/action/contactAction";
import { API_URL } from "../config";
import Loading from "../components/Uitily/landing/landing";
function Contact() {
   const dispatch = useDispatch();
   const { data, success } = useSelector((state) => state.contact);
   const { images } = useSelector((state) => state.masterImage);
   const datas = useSelector((state) => state.staticData.data);
   const img = `${API_URL}/${
      images?.find((item) => item.var === "contact").image
   }`;
   useEffect(
      (_) => {
         dispatch(getContact());
         scrollTo(0, 0);
      },
      [dispatch]
   );
   return (
      <div className="content pattern abs">
         {!success ? (
            <Loading/>
         ) : (
            <>
               <ContentInfo
                  text={datas.contact.text.text}
                  loc={datas.contact.text.text}
                  home={datas.contact.text.home}
                  link={datas.contact.text.link}
                  img={img}
               />
               <div className="container">
                     <ContactCont data={data} formData={ datas.contact.form } pageText={datas.contact.pageText} />
               </div>
            </>
         )}
      </div>
   );
}

export default Contact;
