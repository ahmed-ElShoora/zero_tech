import { STATIC_LANG_AR, STATIC_LANG_EN } from "../type/staticData";

export const staticDataReducer = (state = {}, action) => {
   switch (action.type) {
      case STATIC_LANG_AR:
         return { data: action.payload };
      case STATIC_LANG_EN:
         return { data: action.payload };
      default:
         return state;
   }
};
