import React, { useEffect } from "react";
import ContentInfo from "../components/Uitily/info/ContentInfo";
import PrivacyContent from "../components/privacy/PrivacyContent";
import "../components/privacy/privacy.css";
import { useDispatch, useSelector } from "react-redux";
import { getPrivacy } from "../redux/action/privacyAction";
import { API_URL } from "../config";
import Loading from "../components/Uitily/landing/landing";
function Privacy() {
   const dispatch = useDispatch();
   const { data, success } = useSelector((state) => state.privacy);
   const datas = useSelector((state) => state.staticData.data);
   const { images } = useSelector((state) => state.masterImage);
   const img = `${API_URL}/${
      images?.find((item) => item.var === "privcy").image
   }`;
   useEffect(
      (_) => {
         dispatch(getPrivacy());
         scrollTo(0, 0);
      },
      [dispatch]
   );
   return (
      <div className="privacy pattern abs">
         {!success ? (
            <Loading/>
         ) : (
            <>
               <ContentInfo
                  text={datas.privacy.text}
                  loc={datas.privacy.text}
                  home={datas.privacy.home}
                  link={datas.privacy.link}
                  img={img}
               />
               <div className="container py30">
                  <PrivacyContent text={data} />
               </div>
            </>
         )}
      </div>
   );
}

export default Privacy;
