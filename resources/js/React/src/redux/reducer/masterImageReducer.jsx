import {
   MASTER_IMAGE_FAIL,
   MASTER_IMAGE_REQUEST,
   MASTER_IMAGE_SUCCESS
} from "../type/masterImageConstants";

export const masterImageReducer = (state = {}, action) => {
   switch (action.type) {
      case MASTER_IMAGE_REQUEST:
         return { loading: true };
      case MASTER_IMAGE_SUCCESS:
         return { loading: false, success: true, images: action.payload };
      case MASTER_IMAGE_FAIL:
         return { loading: false, error: action.payload };
      default:
         return state;
   }
};
