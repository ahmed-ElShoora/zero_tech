import axios from "axios";
import {
   SOCIAL_FAIL,
   SOCIAL_REQUEST,
   SOCIAL_SUCCESS,
} from "../type/socialConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getSocial = () => {
   return async (dispatch, getState) => {
      dispatch({ type: SOCIAL_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-header-footer`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: SOCIAL_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: SOCIAL_SUCCESS, payload });
   };
};
