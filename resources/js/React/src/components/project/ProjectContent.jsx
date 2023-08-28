import React from "react";
import { API_URL } from "../../config";
function ProjectContent({ data, title }) {
   return (
      <div className="project-content py30">
         <div className="info">
            <p className="title">{title}</p>
            <div
               className="topic"
               dangerouslySetInnerHTML={{ __html: data.text }}
            ></div>
         </div>
         <div className="identification">
            <img src={`${API_URL}/${data.image}`} alt="identification" />
         </div>
      </div>
   );
}

export default ProjectContent;
