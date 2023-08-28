import axios from "axios";
import {
   MASTER_IMAGE_FAIL,
   MASTER_IMAGE_REQUEST,
   MASTER_IMAGE_SUCCESS,
} from "../type/masterImageConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getMaserImages = () => {
   return async (dispatch, getState) => {
      dispatch({ type: MASTER_IMAGE_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-master-images`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: MASTER_IMAGE_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: MASTER_IMAGE_SUCCESS, payload });
   };
};
