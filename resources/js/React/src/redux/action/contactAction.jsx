import axios from "axios";
import {
   CONTACT_FAIL,
   CONTACT_REQUEST,
   CONTACT_SUCCESS,
   SEND_CONTACT_FAIL,
   SEND_CONTACT_REQUEST,
   SEND_CONTACT_SUCCESS,
} from "../type/contactConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getContact = () => {
   return async (dispatch, getState) => {
      dispatch({ type: CONTACT_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-contact-side`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: CONTACT_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: CONTACT_SUCCESS, payload });
   };
};
export const postContact = (values) => {
   return async (dispatch, getState) => {
      dispatch({ type: SEND_CONTACT_REQUEST });
      const { data } = await axios.post(`${API_URL}/api/contact`, values, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: SEND_CONTACT_FAIL, payload: data.msg });
      }
      const payload = data.msg;
      return dispatch({ type: SEND_CONTACT_SUCCESS, payload });
   };
};
