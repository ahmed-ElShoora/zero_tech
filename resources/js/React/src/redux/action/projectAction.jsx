import axios from "axios";
import {
   PROJECT_FAIL,
   PROJECT_REQUEST,
   PROJECT_SUCCESS,
} from "../type/projectConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getProject = () => {
   return async (dispatch, getState) => {
      dispatch({ type: PROJECT_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-level-page`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: PROJECT_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: PROJECT_SUCCESS, payload });
   };
};
