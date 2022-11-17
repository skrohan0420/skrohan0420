import React from "react";
import Navbar from "./Component/Navbar";
import Home from "./Component/Home";
import UseState from "./Component/UseState";
import OutputtingList from "./Component/OutputtingList";


function MultipleComps() {
	return (
		<div className="App">
			<Navbar />
			<div className="content">
				{/* <Home /> */}
				<OutputtingList />
			</div>
		</div>
	);
}

export default MultipleComps;
