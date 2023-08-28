import { CHANGE_LANG_AR, CHANGE_LANG_EN } from "../type/langConstants";

export const langReducer = (state = {}, action) => {
   switch (action.type) {
      case CHANGE_LANG_AR:
         return { lang: action.payload };
      case CHANGE_LANG_EN:
         return { lang: action.payload };
      default:
         return state;
   }
};
