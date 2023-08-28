import React, { useEffect } from "react";
import ContentInfo from "../components/Uitily/info/ContentInfo";
import "../components/project/Project.css";
import ProjectContent from "../components/project/ProjectContent";
import { useDispatch, useSelector } from "react-redux";
import { getProject } from "../redux/action/projectAction";
import Loading from "../components/Uitily/landing/landing";
import { API_URL } from "../config";
function Project() {
   const dispatch = useDispatch();
   const { data, success } = useSelector((state) => state.project);
   const { images } = useSelector((state) => state.masterImage);
   const datas = useSelector((state) => state.staticData.data);
   const img = `${ API_URL }/${
      images?.find((item) => item.var === "level").image
   }`;
   useEffect(
      (_) => {
         dispatch(getProject());
         scrollTo(0, 0);
      },
      [dispatch]
   );
   return (
      <div className="project pattern abs">
         {!success ? (
            <Loading/>
         ) : (
            <>
               <ContentInfo
                  text={datas.projects.text}
                  loc={datas.projects.text}
                  home={datas.projects.home}
                  link={datas.projects.link}
                  img={img}
               />
               <div className="container">
                  <ProjectContent data={data} title={datas.projects.text} />
               </div>
            </>
         )}
      </div>
   );
}

export default Project;
