
function DynamicValues() {
	const title = 'Welcome to new blog'
	const likes = 50
	const link = 'http://www.google.com'

	return (
		<div className="App">
			<div className="content">
				<h1>{title}</h1>
				<p>Liked {likes} times</p>
				<p>{10}</p>
				<p>{'hello World'}</p>
				<p>{[1,2,3,4]}</p>
				<p>{Math.random() * 10}</p>

				<a href={link}>Google</a>

			</div>
		</div>
	);
}

export default DynamicValues;
