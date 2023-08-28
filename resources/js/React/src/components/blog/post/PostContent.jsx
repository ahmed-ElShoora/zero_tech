import React, { useRef, useEffect, useCallback } from "react";
import { Link } from "react-router-dom";
import img from "../../../assets/images/post/post.jpg";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import { API_URL } from "../../../config";
import { toast, ToastContainer } from "react-toastify"
import "./Post.css";
import { loadFull } from "tsparticles";
import { useSelector } from "react-redux";
import moment from "moment/moment";
function PostContent ({ post }) {
   const msg = useRef(null);
   const toasId = useRef(null);
   const datas = useSelector((state) => state.staticData.data.blogs.post);
   const sliderData = useSelector((state) => state.staticData.data.slider.post);
   const handleClickCopy = (_) => {
      const ele = msg.current;
      ele.classList.toggle("show-share");
   };
   const shareClick = (sh) => {
      const loc = `${window.location.origin}/blog?id=${post.id}`;
      if (sh == "fb")
         window.open(`http://www.facebook.com/sharer.php?s=100&p[url]=${loc}`);
      if (sh == "linked")
         window.open(
            `https://www.linkedin.com/sharing/share-offsite/?url=${loc}`
         );
      if (sh == "twitter") window.open(`http://twitter.com/share?url=${loc}`);
      if (sh == "copy") {
         toasId.current = toast.success("نم نسخ الرابط")
         navigator.clipboard.writeText(loc)
      };
   };
   const ArrowRight = ({ currentSlide, slideCount, ...props }) => (
      <i
         {...props}
         className={
            "fa-solid fa-chevron-left next" +
            (currentSlide === slideCount - 1 ? " slick-disabled" : "")
         }
         aria-hidden="true"
         aria-disabled={currentSlide === 0 ? true : false}
      ></i>
   );
   const ArrowPrev = ({ currentSlide, slideCount, ...props }) => (
      <i
         {...props}
         className={
            "fa-solid fa-chevron-right prev" +
            (currentSlide === 0 ? " slick-disabled" : "")
         }
         aria-hidden="true"
         aria-disabled={currentSlide === slideCount - 1 ? true : false}
      ></i>
   );

   const settings = {
      dots: true,
      infinite: true,
      autoplay: true,
      speed: sliderData ? sliderData.speed : 2000,
      autoplaySpeed: sliderData? sliderData.autoplaySpeed : 2000,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: <ArrowRight />,
      prevArrow: <ArrowPrev />,
      appendDots: (dots) => {
         return <ul style={{ margin: "0px" }}>{dots}</ul>;
      },
   };
   const particlesInit = useCallback(async (engine) => {
      await loadFull(engine);
   }, []);

   const particlesLoaded = useCallback(async (container) => {}, []);

   return (
      <div className="post-content py30">
         <ToastContainer position="top-right"></ToastContainer>
         <div className="main">
            <div className="links">
               <Link to="/">{datas.header.linksHome}</Link>
               <span>/</span>
               <Link to="/blog">{datas.header.linkBlog}</Link>
               <span>/</span>
               <Link to="#">{post.title}</Link>
            </div>
            <div className="time">
               <span>{datas.header.date} </span>
               <span>{moment(post.created_at).format("L")}</span>
            </div>
         </div>
         <div className="items">
            <h3 className="title">{post.title}</h3>
            <Slider {...settings}>
               {post.slider_images.map((item, i) => {
                  return (
                     <div className="img" key={i}>
                        <img
                           src={`${API_URL}/${item.image}`}
                           alt={post.title}
                        />
                     </div>
                  );
               })}
            </Slider>
            <h4>{post.title}</h4>
            <div
               className="body"
               dangerouslySetInnerHTML={{ __html: post.text }}
            ></div>
            <div className="items-footer">
               <div className="share" onClick={handleClickCopy}>
                  <span>
                     <i className="fa-solid fa-share-from-square"></i>
                  </span>
                  <span>{datas.footer.share}</span>
                  <div className="msg-copy" ref={msg}>
                     <span onClick={(_) => shareClick("copy")}>
                        <i className="fa-solid fa-copy"></i>
                     </span>
                     <span onClick={(_) => shareClick("fb")}>
                        <i className="fa-brands fa-facebook-f"></i>
                     </span>
                     <span onClick={(_) => shareClick("linked")}>
                        <i className="fa-brands fa-linkedin-in"></i>
                     </span>
                     <span onClick={(_) => shareClick("twitter")}>
                        <i className="twitter fa-brands fa-twitter"></i>
                     </span>
                  </div>
               </div>
               <div className="show">
                  <span>
                     <i className="fa-solid fa-eye"></i>
                  </span>
                  <span>{datas.footer.views}</span>
                  <span>{post.views}</span>
               </div>
            </div>
         </div>
      </div>
   );
}

export default PostContent;
