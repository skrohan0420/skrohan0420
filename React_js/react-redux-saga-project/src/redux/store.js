import { createStore } from "redux";
import rootReducer from "./rootReducer";

const dummy = ()=>{
    return 100
}
const store = createStore(dummy)

export default store