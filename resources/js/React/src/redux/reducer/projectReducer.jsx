import {
   PROJECT_FAIL,
   PROJECT_REQUEST,
   PROJECT_SUCCESS
} from "../type/projectConstants";

export const projectReducer = (state = {}, action) => {
   switch (action.type) {
      case PROJECT_REQUEST:
         return { loading: true };
      case PROJECT_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case PROJECT_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
