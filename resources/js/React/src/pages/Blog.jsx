import React, { useEffect } from "react";
import ContentInfo from "../components/Uitily/info/ContentInfo";
import "../components/blog/Blog.css";
import BlogContent from "../components/blog/BlogContent";
import { useDispatch, useSelector } from "react-redux";
import { getAllPosts } from "../redux/action/blogAction";
import Loading from "../components/Uitily/landing/landing";
import { API_URL } from "../config";
function Blog() {
   const dispatch = useDispatch();
   const { data, success } = useSelector((state) => state.posts);
   const { images } = useSelector((state) => state.masterImage);
   const datas = useSelector((state) => state.staticData.data);
   const img = `${API_URL}/${
      images?.find((item) => item.var === "blog").image
   }`;
   useEffect(
      (_) => {
         dispatch(getAllPosts());
         scrollTo(0, 0);
      },
      [dispatch]
   );
   return (
      <div className="blog pattern abs">
         {!success ? (
            <Loading/>
         ) : (
            <>
               <ContentInfo
                  text={datas.blogs.text.text}
                  loc={datas.blogs.text.text}
                  home={datas.blogs.text.home}
                  link={datas.blogs.text.link}
                  img={img}
               />
               <div className="container">
                  <BlogContent data={data} textPage={datas.blogs.pageText} />
               </div>
            </>
         )}
      </div>
   );
}

export default Blog;
