import React from "react";
import Navbar from "./Component/Navbar";
import Home from "./Component/Home";
import UseState from "./Component/UseState";
import OutputtingList from "./Component/OutputtingList";
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom'

function MultipleComps() {
	return (
		<Router>
			<div className="App">
				<Navbar />
				<div className="content">
					<Switch>
						<Route path="/">
							<OutputtingList />
						</Route>
					</Switch>
				</div>
			</div>
		</Router>
	);
}

export default MultipleComps;
