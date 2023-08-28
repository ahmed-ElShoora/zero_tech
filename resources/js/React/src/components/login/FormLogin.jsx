import React, { useRef, useEffect, useState } from 'react'
import { useSelector } from 'react-redux'
// import { Formik, Field, Form, ErrorMessage } from 'formik'
import * as Yup from 'yup'

function FormLogin () {
   const form = useSelector(state => state.staticData.data?.login.form)
   const input = useRef()
   const [val, setVal] = useState("")
   useEffect(_=>{
         setVal(document.querySelector(".csrf") && document.querySelector(".csrf input").value)
   }, [val])
   return (
      <>
         {/* <Formik
            initialValues = {{ name: "", pass: "" }}
            validationSchema = { Yup.object({
               name: Yup.string().trim().required("يرجي كتابة اليوزر"),
               pass: Yup.string().required("يرجي كتابة الباسورد"),
            }) }
            onSubmit = { ( values, { setSubmitting } ) => {
               alert(JSON.stringify(values, null, 2));
               setSubmitting(false)
            } } */}
         {/* > */}
         <form action="/login" method="POST">
            <h3>{form?.title}</h3>
            <div className="col-form">
               <label htmlFor="name">{form?.username.label}</label>
               <div className="row-form">
                  <i className="fa-regular fa-user"></i>
                  <input
                     type="email"
                     name="email"
                     id="name"
                     required
                     placeholder={form?.username.placeholder}
                  />
               </div>
               {/* <p><ErrorMessage name='name'/></p> */}
            </div>
            <div className="col-form">
               <label htmlFor="pass">{form?.password.label}</label>
               <div className="row-form">
                  <i className="fa-solid fa-lock"></i>
                  <input
                     type="password"
                     name="password"
                     required
                     id="pass"
                     placeholder={form?.password.placeholder}
                  />

                  </div>
                  <input type="hidden" name="_token" ref={input} value={val} style={{ display: "none" }}>
               </input>
               {/* <p><ErrorMessage name="pass" /></p> */}
            </div>
            <button type="submit">{form?.button}</button>
         </form>
         {/* </Formik> */}
      </>
   );
}

export default FormLogin
