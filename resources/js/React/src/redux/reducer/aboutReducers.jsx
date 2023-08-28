import { ABOUT_FAIL, ABOUT_REQUEST, ABOUT_SUCCESS } from "../type/aboutConstants";

export const aboutReducer = (state = {}, action) => {
   switch (action.type) {
      case ABOUT_REQUEST:
         return { loading: true };
      case ABOUT_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case ABOUT_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
