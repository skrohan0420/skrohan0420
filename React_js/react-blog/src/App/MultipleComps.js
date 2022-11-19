import React from "react";
import Navbar from "./Component/Navbar";
import OutputtingList from "./Component/OutputtingList";
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom'
import Create from "./Component/Create";
import BlogDetails from "./Component/BlogDetails";
import NotFound from "./Component/NotFound";

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




						<Route path='*'>
							<NotFound />
						</Route>
					</Switch>
				</div>
			</div>
		</Router>
	);
}

export default MultipleComps;
