import { HOME_FAIL, HOME_REQUEST, HOME_SUCCESS } from "../type/homeConstants";

export const homeReducer = (state = {}, action) => {
   switch (action.type) {
      case HOME_REQUEST:
         return { loading: true };
      case HOME_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case HOME_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
