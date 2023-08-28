import { data } from "../../data/data";
import { CHANGE_LANG_AR, CHANGE_LANG_EN } from "../type/langConstants"
import { STATIC_LANG_AR, STATIC_LANG_EN } from "../type/staticData";

export const changeLang = (lang) => async (dispatch, getState) => {
   if (lang == "AR") {
      dispatch({ type: CHANGE_LANG_AR, payload: "AR" })
   } else {
      dispatch({ type: CHANGE_LANG_EN, payload: "EN" });
   }
   localStorage.setItem("lang", getState().lang.lang);
}