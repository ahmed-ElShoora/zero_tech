import React, { useEffect } from "react";
import ContentInfo from "../components/Uitily/info/ContentInfo";
import VideosContent from "../components/videosComponnents/VideosContent";
import "../components/videosComponnents/Videos.css";
import { useDispatch, useSelector } from "react-redux";
import { getVideos } from "../redux/action/videosAction";
import { API_URL } from "../config";
import Loading from "../components/Uitily/landing/landing";
function Videos() {
   const dispatch = useDispatch();
   const { data, success } = useSelector((state) => state.videos);
   const datas = useSelector((state) => state.staticData.data);
   const { images } = useSelector((state) => state.masterImage);
   const img = `${API_URL}/${
      images?.find((item) => item.var === "vidoes").image
   }`;
   useEffect(
      (_) => {
         dispatch(getVideos());
         scrollTo(0, 0);
      },
      [dispatch]
   );
   return (
      <div className="videos pattern abs">
         {!success ? (
            <Loading/>
         ) : (
            <>
               <ContentInfo
                  text={datas.videos.text}
                  loc={datas.videos.text}
                  home={datas.videos.home}
                  link={datas.videos.link}
                  img={img}
               />
               <div className="container">
                     <VideosContent data={data} title={datas.videos.title} />
               </div>
            </>
         )}
      </div>
   );
}

export default Videos;
