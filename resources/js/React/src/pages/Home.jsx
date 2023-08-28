import React from "react";
import About from "../components/home/about/About";
import Services from "../components/home/services/Services";
import SlideHome from "../components/home/slider/SlideHome";
import "../components/home/Home.css";
import Plans from "../components/home/plans/Plans";
import { useDispatch, useSelector } from "react-redux";
import { useEffect } from "react";
import { getHome } from "../redux/action/homeAction";
import Loading from "../components/Uitily/landing/landing"
const Home = () => {
   const dispatch = useDispatch();
   const { data } = useSelector((state) => state.staticData);
   const { success } = useSelector((state) => state.home);
   const formData = data?.home.form;
   useEffect(
      (_) => {
         dispatch(getHome());
         scrollTo(0, 0);
      },
      [dispatch]
   );
   return (
      <div className="home pattern">
         {success? (
            <>
               <SlideHome />
               <About dataAbout={data?.home.about} />
               <div className="container">
                  <Services dataServices={data?.home.services} />
                  <Plans dataPlan={data?.home.packages} formData={formData} />
               </div>
            </>
         ): <Loading />}
      </div>
   );
};

export default Home;
