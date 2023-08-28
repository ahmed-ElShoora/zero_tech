import {
   SOCIAL_FAIL,
   SOCIAL_REQUEST,
   SOCIAL_SUCCESS,
} from "../type/socialConstants";

export const socialReducer = (state = {}, action) => {
   switch (action.type) {
      case SOCIAL_REQUEST:
         return { loading: true };
      case SOCIAL_SUCCESS:
         return { loading: false, success: true, social: action.payload };
      case SOCIAL_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
