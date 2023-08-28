import { VIDEOS_FAIL, VIDEOS_REQUEST, VIDEOS_SUCCESS } from "../type/videosContstants";

export const videosReducer = (state = {}, action) => {
   switch (action.type) {
      case VIDEOS_REQUEST:
         return { loading: true };
      case VIDEOS_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case VIDEOS_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
