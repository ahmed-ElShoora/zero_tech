import React, { useEffect } from "react";
import ContentInfo from "../components/Uitily/info/ContentInfo";
import PartnersContent from "../components/partners/PartnersContent";
import "../components/partners/Partners.css";
import { useDispatch, useSelector } from "react-redux";
import { getPartner } from "../redux/action/partnersAction";
import { API_URL } from "../config";
import Loading from "../components/Uitily/landing/landing";
function Partners() {
   const dispatch = useDispatch();
   const { data, success } = useSelector((state) => state.partenar);
   const datas = useSelector((state) => state.staticData.data);
   const { images } = useSelector((state) => state.masterImage);
   const img = `${API_URL}/${
      images?.find((item) => item.var === "partenar").image
   }`;
   useEffect(
      (_) => {
         dispatch(getPartner());
         scrollTo(0, 0);
      },
      [dispatch]
   );
   return (
      <div className="contact pattern abs">
         {!success ? (
            <Loading/>
         ) : (
            <>
               <ContentInfo
                  text={datas.partners.text}
                  loc={datas.partners.text}
                  home={datas.partners.home}
                  link={datas.partners.link}
                  img={img}
               />
               <div className="container">
                  <PartnersContent data={data} title={datas.partners.title} />
               </div>
            </>
         )}
      </div>
   );
}

export default Partners;
