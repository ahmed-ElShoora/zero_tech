import React, { useEffect } from 'react'
import Info from "../components/about/info/Info"
import "../components/about/About.css"
import Content from '../components/about/content/Content'
import Cards from '../components/about/cards/Cards'
import Features from '../components/about/features/Features'
import { useDispatch, useSelector } from "react-redux"
import { getAbout } from '../redux/action/aboutAction'
import Loading from "../components/Uitily/landing/landing";
function About () {
   const dispatch = useDispatch()
   const { data, success } = useSelector(state => state.about)

   useEffect(_ => {
      dispatch(getAbout())
      scrollTo(0, 0);
   }, [dispatch])
   return (
      <div className="about pattern abs">
         {!success ? (
            <Loading/>
         ) : (
            <>
               <Info />
               <div className="container">
                  <Content text={data.text} />
                  <Cards cards={data.cards} />
                  <Features feats={data.distinguishe} />
               </div>
            </>
         )}
      </div>
   );
}

export default About