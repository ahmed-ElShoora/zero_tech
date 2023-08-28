import { createStore, applyMiddleware, combineReducers } from "redux";
import thunk from "redux-thunk";
import { composeWithDevTools } from "redux-devtools-extension";
import { langReducer } from "../reducer/LangReducer";
import { staticDataReducer } from "../reducer/staticDataReducer";
import { homeReducer } from "../reducer/homeReducer";
import { aboutReducer } from "../reducer/aboutReducers";
import { videosReducer } from "../reducer/videosReducers";
import { privacyReducer } from "../reducer/privacyReducer";
import { partnerReducer } from "../reducer/partnersReducers";
import { contactPostReducer, contactReducer } from "../reducer/contactReducer";
import { projectReducer } from "../reducer/projectReducer";
import {
   getBlogDetailsReducer,
   getBlogListReducer,
} from "../reducer/blogReducer";
import { masterImageReducer } from "../reducer/masterImageReducer";
import { socialReducer } from "../reducer/socialReducer";

const langFromLocalStorge = localStorage.getItem("lang")
   ? localStorage.getItem("lang")
   : "AR";

const reducer = combineReducers({
   lang: langReducer,
   staticData: staticDataReducer,
   home: homeReducer,
   about: aboutReducer,
   videos: videosReducer,
   privacy: privacyReducer,
   partenar: partnerReducer,
   contact: contactReducer,
   sendContact: contactPostReducer,
   project: projectReducer,
   posts: getBlogListReducer,
   post: getBlogDetailsReducer,
   masterImage: masterImageReducer,
   social: socialReducer,
});
const initialState = {
   lang: {
      lang: langFromLocalStorge,
   },
};

export const store = createStore(
   reducer,
   initialState,
   composeWithDevTools(applyMiddleware(thunk))
);
