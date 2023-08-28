import axios from "axios";
import { VIDEOS_FAIL, VIDEOS_REQUEST, VIDEOS_SUCCESS } from "../type/videosContstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getVideos = () => {
   return async (dispatch, getState) => {
      dispatch({ type: VIDEOS_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-vedios`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: VIDEOS_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: VIDEOS_SUCCESS, payload });
   };
};
