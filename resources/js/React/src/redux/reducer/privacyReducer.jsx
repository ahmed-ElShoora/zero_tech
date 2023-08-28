import {
   PRIVACY_FAIL,
   PRIVACY_REQUEST,
   PRIVACY_SUCCESS
} from "../type/privacyConstants";

export const privacyReducer = (state = {}, action) => {
   switch (action.type) {
      case PRIVACY_REQUEST:
         return { loading: true };
      case PRIVACY_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case PRIVACY_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
