import axios from "axios";
import {
   PRIVACY_FAIL, PRIVACY_REQUEST, PRIVACY_SUCCESS
} from "../type/privacyConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getPrivacy = () => {
   return async (dispatch, getState) => {
      dispatch({ type: PRIVACY_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-privacy`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: PRIVACY_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: PRIVACY_SUCCESS, payload });
   };
};
