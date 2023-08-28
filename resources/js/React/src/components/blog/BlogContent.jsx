import axios from "axios";
import React, { useEffect, useState } from "react";
import { useDispatch, useSelector } from "react-redux";
import { Link } from "react-router-dom";
import { API_URL } from "../../config";
import { getPost } from "../../redux/action/blogAction";
import Popup from "../Uitily/popup/Popup";
import Post from "./Post";
import PostContent from "./post/PostContent";

function BlogContent({ data, textPage }) {
   const shareId = window.location.search
      ? window.location.search.split("=")[1]
      : null;
   const [clk, setClk] = useState(false);
   const [showPopup, setShowPopup] = useState(false);
   const postNew = data[data.length - 1];
   const dispatch = useDispatch();
   const { post, success, loading, error } = useSelector((state) => state.post);
   const getPostById = async (id) => {
      dispatch(getPost(id));
   };
   useEffect(
      (_) => {
         if (shareId) {
            dispatch(getPost(shareId));
            setShowPopup(true);
         }
      },
      [shareId]
   );
   return (
      <>
         {/* {
            success && ( */}
               <div className="blog-content py30">
         <h3>{textPage.newText}</h3>
         <div className="post-new">
            <div className="img">
               <img src={`${API_URL}/${postNew.image}`} alt={postNew.title} />
            </div>
            <div className="article-content">
               <p
                  className="title"
                  dangerouslySetInnerHTML={{ __html: postNew.text }}
               ></p>
               <button
                  onClick={(_) => {
                     setShowPopup(true);
                     getPostById(postNew.id);
                  }}
               >
                  {textPage.btnPopup}
               </button>
            </div>
         </div>
         <h3>{textPage.all}</h3>
         <div className="posts">
            {data.map((post, i) => {
               return (
                  <Post
                     key={i}
                     img={`${API_URL}/${post.image}`}
                     title={post.title}
                     text={post.text}
                     btn={textPage.btnPopup}
                     clicked={(clicked) => {
                        setShowPopup(clicked);
                        getPostById(post.id);
                     }}
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
                  {error && <>No found</>}
                  {success && <PostContent post={post} />}
               </div>
            </Popup>
         ) : null}
      </div>
            {/* )
         } */}
      </>
      
   );
}

export default BlogContent;
