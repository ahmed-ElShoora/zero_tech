import React, { useState, useEffect } from "react";
import HeadH from "../HeadH";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Popup from "../../Uitily/popup/Popup";
import FormPopup from "./FormPopup";
import { useSelector } from "react-redux";
function Plans({ dataPlan, formData }) {
   const { loading, data } = useSelector((state) => state.home);
   const { lang } = useSelector((state) => state.lang);
   const [id, setId] = useState(0);
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
      dots: false,
      infinite: false,
      autoplay: true,
      speed: 1000,
      autoplaySpeed: 2000,
      slidesToShow: 4,
      slidesToScroll: 1,
      nextArrow: <ArrowRight />,
      prevArrow: <ArrowPrev />,
      responsive: [
         {
            breakpoint: 1270,
            settings: {
               slidesToShow: 3,
               slidesToScroll: 3,
               infinite: false,
               dots: false,
            },
         },
         {
            breakpoint: 950,
            settings: {
               slidesToShow: 2,
               slidesToScroll: 2,
            },
         },
         {
            breakpoint: 640,
            settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
            },
         },
      ],
   };
   const [showPopup, setShowPopup] = useState(false);
   const clicked = (clk) => {
      setShowPopup(clk);
   };
   return (
      <div className="p50 plans">
         {loading ? (
            <></>
         ) : (
            <>
               <HeadH text={dataPlan} color="var(--secound-color)" />
               <div style={{ maxWidth: "1200px", margin: "0 auto" }}>
                  <Slider {...settings}>
                     {data?.packages.map((plan, i) => (
                        <div className="plan" key={i}>
                           <div className="cont">
                              <h3 style={{ background: `${plan.color_head}` }}>
                                 {plan.title}
                              </h3>
                              <div className="circle">
                                 <span className="price" dir="ltr">
                                    {
                                       plan.price && (<span>{plan.price} <span>SAR</span></span>)
                                    }
                                 </span>
                                 <span>{plan.category}</span>
                              </div>
                           </div>
                           <div className="plan-content">
                              <div
                                 dangerouslySetInnerHTML={{ __html: plan.desc }}
                              ></div>
                              <button
                                 style={{ background: `${plan.btn_color}` }}
                                 onClick={(e) => {
                                    clicked(true);
                                    setId(plan.id);
                                 }}
                              >
                                 {plan.btn}
                              </button>
                           </div>
                        </div>
                     ))}
                  </Slider>
               </div>
               {showPopup ? (
                  <Popup hiddenPopup={(hidden) => setShowPopup(hidden)}>
                     <div className="close">
                        <i
                           className="fa-solid fa-xmark"
                           onClick={(_) => setShowPopup(false)}
                        ></i>
                     </div>
                     <div className="forms">
                        <FormPopup planId={id} formData={formData} />
                     </div>
                  </Popup>
               ) : null}
            </>
         )}
      </div>
   );
}

export default Plans;
