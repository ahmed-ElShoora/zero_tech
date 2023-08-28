import React, { useRef } from "react";
import { Formik, Field, Form, ErrorMessage } from "formik";
import * as Yup from "yup";
import { toast, ToastContainer } from "react-toastify";
import { useDispatch, useSelector } from "react-redux"
import { postContact } from "../../redux/action/contactAction";
function FormContact({ formData }) {
   const toastId = useRef(null);
   const dispatch = useDispatch();
   const contact = useSelector((state) => state.sendContact);
   const Toastobjects = {
      pauseOnFoucsLoss: false,
      draggable: false,
      pauseOnHover: false,
      autoClose: 2000,
   };
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
               fullName: Yup.string().required(formData.name.msg),
               email: Yup.string()
                  .email(formData.email.emailMsg)
                  .required(formData.email.msg),
               phone: Yup.number().required(formData.phone.msg),
               message: Yup.string().required(formData.title.msg),
               topic: Yup.string().required(formData.message.msg),
            })}
            onSubmit={(values, { setSubmitting, resetForm }) => {
               const data = {
                  name: values.fullName,
                  email: values.email,
                  phone: values.phone,
                  title: values.message,
                  message: values.topic,
               };
               dispatch(postContact(data));
               if (contact.success) {
                  toastId.current = toast.success(
                     formData.msg.success,
                     Toastobjects
                  );
               } else {
                  return (toastId.current = toast.error(
                     formData.msg.error,
                     Toastobjects
                  ));
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
               <button type="submit">{formData.button.text}</button>
            </Form>
         </Formik>
      </>
   );
}

export default FormContact;
