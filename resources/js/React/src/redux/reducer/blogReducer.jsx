import {
   BLOG_DETAILS_FAIL,
   BLOG_DETAILS_REQUEST,
   BLOG_DETAILS_SUCCESS,
   BLOG_LIST_FAIL,
   BLOG_LIST_REQUEST,
   BLOG_LIST_SUCCESS
} from "../type/blogConstants";

export const getBlogListReducer = (state = {}, action) => {
   switch (action.type) {
      case BLOG_LIST_REQUEST:
         return { loading: true };
      case BLOG_LIST_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case BLOG_LIST_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
export const getBlogDetailsReducer = (state = {}, action) => {
   switch (action.type) {
      case BLOG_DETAILS_REQUEST:
         return { loading: true };
      case BLOG_DETAILS_SUCCESS:
         return { loading: false, success: true, post: action.payload };
      case BLOG_DETAILS_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
