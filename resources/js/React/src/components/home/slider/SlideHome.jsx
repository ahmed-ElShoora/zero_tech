import React, { useCallback, useState, useEffect } from "react";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Particles from "react-tsparticles";
import { loadFull } from "tsparticles";
import { useSelector } from "react-redux";

function SlideHome() {
   const { loading, data } = useSelector((state) => state.home);
   const sliderData = useSelector((state) => state.staticData.data?.slider.home);
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
      autoplaySpeed: sliderData ? sliderData.autoplaySpeed : 2000,
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
      <>
         {loading ? (
            <></>
         ) : (
            <div
               className="boxs"
               style={{ background: `${data?.slider.background_color}` }}
            >
               <Slider {...settings}>
                  {data?.slider.data.map((slide, i) => {
                     return (
                        <div className="content-box" key={i}>
                           <span style={{ color: `${slide.color}` }}>
                              {slide.text}
                           </span>
                        </div>
                     );
                  })}
               </Slider>
               <Particles
                  init={particlesInit}
                  loaded={particlesLoaded}
                  options={{
                     fpsLimit: 120,
                     interactivity: {
                        events: {
                           onClick: {
                              enable: true,
                              mode: "push",
                           },
                           onHover: {
                              enable: true,
                              mode: "repulse",
                           },
                           resize: true,
                        },
                        modes: {
                           push: {
                              quantity: 4,
                           },
                           repulse: {
                              distance: 200,
                              duration: 0.4,
                           },
                        },
                     },
                     particles: {
                        color: {
                           value: "#fff",
                        },
                        links: {
                           color: "#fff",
                           distance: 150,
                           enable: true,
                           opacity: 0.5,
                           width: 1,
                        },
                        collisions: {
                           enable: true,
                        },
                        move: {
                           directions: "none",
                           enable: true,
                           outModes: {
                              default: "bounce",
                           },
                           random: false,
                           speed: 1,
                           straight: false,
                        },
                        number: {
                           density: {
                              enable: true,
                              area: 800,
                           },
                           value: 90,
                        },
                        opacity: {
                           value: 0.4,
                        },
                        shape: {
                           type: "circle",
                        },
                        size: {
                           value: { min: 1, max: 2 },
                        },
                     },
                     detectRetina: true,
                     style: {
                        width: "100%",
                        position: "absolute",
                     },
                  }}
               />
            </div>
         )}
      </>
   );
}

export default SlideHome;
