import {
   PARTNERS_FAIL,
   PARTNERS_REQUEST,
   PARTNERS_SUCCESS,
} from "../type/partnersConstants";

export const partnerReducer = (state = {}, action) => {
   switch (action.type) {
      case PARTNERS_REQUEST:
         return { loading: true };
      case PARTNERS_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case PARTNERS_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
