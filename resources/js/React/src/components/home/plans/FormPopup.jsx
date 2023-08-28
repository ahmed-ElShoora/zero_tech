import React, { useRef } from "react";
import { Formik, Field, Form, ErrorMessage } from "formik";
import * as Yup from "yup";
import axios from "axios";
import { API_URL, API_PASSWORD } from "../../../config";
import { toast, ToastContainer } from "react-toastify";
import { useEffect } from "react";

function FormPopup({ planId, formData }) {
   const toastId = useRef(null);
   const Toastobjects = {
      pauseOnFoucsLoss: false,
      draggable: false,
      pauseOnHover: false,
      autoClose: 2000,
   };
   console.log(formData);
   return (
      <>
         <ToastContainer position="top-right"></ToastContainer>
         <Formik
            initialValues={{
               fullName: "",
               email: "",
               phone: "",
               message: "",
               topic: "",
            }}
            validationSchema={Yup.object({
               fullName: Yup.string().trim().required(formData.name.msg),
               email: Yup.string()
                  .trim()
                  .email(formData.email.emailMsg)
                  .required(formData.email.msg),
               phone: Yup.number().required(formData.phone.msg),
               message: Yup.string().trim().required(formData.title.msg),
               topic: Yup.string().trim().required(formData.message.msg),
            })}
            onSubmit={async (values, { setSubmitting, resetForm }) => {
               const { data } = await axios.post(
                  `${API_URL}/api/package`,
                  {
                     name: values.fullName,
                     email: values.email,
                     phone: values.phone,
                     title: values.message,
                     message: values.topic,
                     package_id: planId,
                  },
                  {
                     headers: {
                        api_password: API_PASSWORD,
                     },
                  }
               );
               if (data.status) {
                  toastId.current = toast.success(formData.msg.success, Toastobjects);
               } else {
                  toastId.current = toast.error(
                     formData.msg.error,
                     Toastobjects
                  );
               }
               setSubmitting(false);
               resetForm();
            }}
         >
            <Form>
               <div className="row mb2">
                  <Field
                     className="ml2"
                     type="text"
                     name="fullName"
                     placeholder={formData.name.placeholder}
                  />
                  <Field
                     type="email"
                     name="email"
                     placeholder={formData.email.placeholder}
                  />
                  <div className="msg">
                     <p className="ml20">
                        <ErrorMessage name="fullName" />
                     </p>
                     <p>
                        <ErrorMessage name="email" />
                     </p>
                  </div>
               </div>
               <div className="row mb2">
                  <Field
                     className="ml2"
                     type="number"
                     name="phone"
                     placeholder={formData.phone.placeholder}
                  />
                  <Field
                     type="text"
                     name="message"
                     placeholder={formData.title.placeholder}
                  />
                  <div className="msg">
                     <p className="ml20">
                        <ErrorMessage name="phone" />
                     </p>
                     <p>
                        <ErrorMessage name="message" />
                     </p>
                  </div>
               </div>
               <Field
                  as="textarea"
                  name="topic"
                  placeholder={formData.message.placeholder}
               />
               <p>
                  <ErrorMessage name="topic" />
               </p>
               <button type="submit">{formData.btn.text}</button>
            </Form>
         </Formik>
      </>
   );
}

export default FormPopup;
