import axios from "axios";
import { HOME_REQUEST, HOME_SUCCESS, HOME_FAIL } from "../type/homeConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getHome = () => {
   return async (dispatch, getState) => {
      dispatch({ type: HOME_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-home`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: HOME_FAIL, payload: data.msg })
      }
      const payload = data.data
      return dispatch({ type: HOME_SUCCESS, payload });
   };
};
