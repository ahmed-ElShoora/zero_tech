import React, { useState } from "react";
import Popup from "../Uitily/popup/Popup";
import Video from "./Video";
import { API_URL } from "../../config";

function VideosContent({ data, title }) {
   const [showPopup, setShowPopup] = useState(false);
   const [linkVideos, setLinkVideos] = useState(false);
   const clicked = (clk, link) => {
      setLinkVideos(link);
      setShowPopup(clk);
   };
   return (
      <div className="videos-content py30">
         <h3>{title}</h3>
         <div className="videos-items">
            {data.map((item, i) => {
               return (
                  <Video
                     img={`${API_URL}/${item.image}`}
                     text={item.text}
                     click={clicked}
                     link={item.link}
                     key={i}
                  />
               );
            })}
         </div>
         {showPopup ? (
            <Popup hiddenPopup={(hidden) => setShowPopup(hidden)}>
               <div className="close">
                  <i
                     className="fa-solid fa-xmark"
                     onClick={(_) => setShowPopup(false)}
                  ></i>
               </div>
               <div className="show-videos" dangerouslySetInnerHTML={{__html: linkVideos}}>
               </div>
            </Popup>
         ) : null}
      </div>
   );
}

export default VideosContent;
