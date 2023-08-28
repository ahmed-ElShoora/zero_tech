import { STATIC_LANG_AR, STATIC_LANG_EN } from "../type/staticData";
import { data } from "../../data/data"

export const staticData = () => async (dispatch, getState) => {
   const lang = getState().lang.lang;
   if (lang == "AR") {
      dispatch({
         type: STATIC_LANG_AR,
         payload: data('ar'),
      });
   } else {
      dispatch({ type: STATIC_LANG_EN, payload: data('en') });
   }
};
