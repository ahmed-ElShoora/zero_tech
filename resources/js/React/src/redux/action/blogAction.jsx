import axios from "axios";
import {
   BLOG_DETAILS_FAIL,
   BLOG_DETAILS_REQUEST,
   BLOG_DETAILS_SUCCESS,
   BLOG_LIST_FAIL,
   BLOG_LIST_REQUEST,
   BLOG_LIST_SUCCESS,
} from "../type/blogConstants";
import { API_URL, API_PASSWORD } from "../../config";

export const getAllPosts = () => {
   return async (dispatch, getState) => {
      dispatch({ type: BLOG_LIST_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-posts`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: BLOG_LIST_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: BLOG_LIST_SUCCESS, payload });
   };
};
export const getPost = (id) => {
   return async (dispatch, getState) => {
      dispatch({ type: BLOG_DETAILS_REQUEST });
      const { data } = await axios.get(`${API_URL}/api/get-post-${id}`, {
         headers: {
            api_password: `${API_PASSWORD}`,
            lang: getState().lang.lang.toLowerCase(),
         },
      });
      if (!data.status) {
         return dispatch({ type: BLOG_DETAILS_FAIL, payload: data.msg });
      }
      const payload = data.data;
      return dispatch({ type: BLOG_DETAILS_SUCCESS, payload });
   };
};
