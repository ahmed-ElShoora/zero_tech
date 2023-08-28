import React from "react";
import ContentInfo from "../../Uitily/info/ContentInfo";
import { useSelector } from "react-redux";
import { API_URL } from "../../../config";

function Info() {
   const {data} = useSelector((state) => state.staticData);
   const { images, success } = useSelector((state) => state.masterImage);
   const img = `${API_URL}/${
      images?.find((item) => item.var === "about").image
   }`;
   return (
      <>
         {success && (
            <ContentInfo
               text={data.about.text}
               loc={data.about.text}
               home={data.about.home}
               link={data.about.link}
               img={img}
            />
         )}
      </>
   );
}

export default Info;
