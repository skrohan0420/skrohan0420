import React from "react";
import Navbar from "./Component/Navbar";
import Home from "./Component/Home";
import UseState from "./Component/UseState";
import OutputtingList from "./Component/OutputtingList";
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom'
import Create from "./Component/Create";
import BlogDetails from "./Component/BlogDetails";

function MultipleComps() {
	return (
		<Router>
			<div className="App">
				<Navbar />
				<div className="content">
					<Switch>
						<Route exact path="/">
							<OutputtingList />
						</Route>
						<Route path="/create">
							<Create />
						</Route>
						<Route path="/blogs/:id">
							<BlogDetails />
						</Route>
					</Switch>
				</div>
			</div>
		</Router>
	);
}

export default MultipleComps;
