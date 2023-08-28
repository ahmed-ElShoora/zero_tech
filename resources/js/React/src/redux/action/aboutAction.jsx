import axios from "axios";
import { ABOUT_FAIL, ABOUT_REQUEST, ABOUT_SUCCESS } from "../type/aboutConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getAbout = () => {
   return async (dispatch, getState) => {
      dispatch({ type: ABOUT_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-about`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: ABOUT_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: ABOUT_SUCCESS, payload });
   };
};
