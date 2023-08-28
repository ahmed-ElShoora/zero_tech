import { useEffect, useState } from 'react'
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Navbar from "./components/Uitily/navbar/Navbar"
import Home from './pages/Home';
import About from './pages/About';
import Privacy from './pages/Privacy';
import Blog from './pages/Blog';
import Contact from './pages/Contact';
import Partners from './pages/Partners';
import Videos from './pages/Videos';
import Project from './pages/Project';
import Login from './pages/Login';
import NotFoundPage from './pages/NotFound';
import Footer from './components/Uitily/footer/Footer';
// import Post from './pages/Post';
import { useSelector, useDispatch } from "react-redux"
import { staticData } from "./redux/action/staticDataAction.jsx"
import { getMaserImages } from "./redux/action/masterImageAction"
import { getSocial } from "./redux/action/socialAction"
import "react-toastify/dist/ReactToastify.min.css";
import icons from "./assets/images/navbar/logo.png";

function App() {
  const dispatch = useDispatch()
  const { social, success } = useSelector(state => state.social)
  const { lang } = useSelector((state) => state.lang);
  useEffect(_ => {
    dispatch(staticData());
    dispatch(getMaserImages());
    dispatch(getSocial())
    if (lang == "AR") {
      document.documentElement.dir = "rtl";
      document.documentElement.lang = "ar";
    } else {
      document.documentElement.dir = "ltr";
      document.documentElement.lang = "en";
    }
  }, [dispatch])
  if (success) {
    document.head.innerHTML += `
    <meta name="description" content="${social.meta_desc}" >
    <title>${social.meta_title}</title>
    <link rel="icon" type="image/x-icon" href="${icons}">
    `;
  }

  return (
    <>
      <Router>
        {success && <Navbar logo={ social.logo } />}
        <Routes>
          <Route path='/' element={<Home />}/>
          <Route path='/about' element={<About />}/>
          <Route path='/project' element={<Project />}/>
          <Route path='/blog' element={<Blog />}/>
          {/* <Route path='/blog/post:id' element={<Post />}/> */}
          <Route path='/contact' element={<Contact />}/>
          <Route path='/partners' element={<Partners />}/>
          <Route path='/privacy' element={<Privacy />}/>
          <Route path='/videos' element={<Videos />}/>
          <Route path='/login' element={<Login />}/>
          {/* <Route path='*' element={<NotFoundPage />}/> */}
        </Routes>
        {success && <Footer social={social} />}
      </Router>
    </>
  )
}

export default App
