import axios from "axios";
import {
   PARTNERS_FAIL,
   PARTNERS_REQUEST,
   PARTNERS_SUCCESS
} from "../type/partnersConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getPartner = () => {
   return async (dispatch, getState) => {
      dispatch({ type: PARTNERS_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-partenar`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: PARTNERS_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: PARTNERS_SUCCESS, payload });
   };
};
