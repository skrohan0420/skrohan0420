import React from 'react'
import { Link } from 'react-router-dom'

const BlogList = ({blogs,title}) => {
	 

	return (
		<div>
			<h3>{title}</h3>
			<div className="blog-list" >
				{blogs.map((blog) => (
					<div key={blog.id} className="blog-preview">
						<Link to={`/blogs/${blog.id}`}>
							<h2>{blog.title}</h2>
							<p>Written by {blog.author}</p>
							{/* <button onClick={() => handleDelete(blog.id)}>
								Delete Blog
							</button> */}
						</Link>
					</div>
				))}
			</div>
		</div>
	)
}

export default BlogList
