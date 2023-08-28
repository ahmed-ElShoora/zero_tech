import {
   CONTACT_FAIL,
   CONTACT_REQUEST,
   CONTACT_SUCCESS,
   SEND_CONTACT_FAIL,
   SEND_CONTACT_REQUEST,
   SEND_CONTACT_SUCCESS
} from "../type/contactConstants";

export const contactReducer = (state = {}, action) => {
   switch (action.type) {
      case CONTACT_REQUEST:
         return { loading: true };
      case CONTACT_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case CONTACT_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
export const contactPostReducer = (state = {}, action) => {
   switch (action.type) {
      case SEND_CONTACT_REQUEST:
         return { loading: true };
      case SEND_CONTACT_SUCCESS:
         return { loading: false, success: true, data: action.payload };
      case SEND_CONTACT_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
