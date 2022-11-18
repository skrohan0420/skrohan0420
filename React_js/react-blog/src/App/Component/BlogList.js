import React from 'react'

const BlogList = ({blogs,title}) => {
	 

	return (
		<div>
			<h3>{title}</h3>
			<div className="blog-list">
				{blogs.map((blog) => (
					<div key={blog.id} className="blog-preview">
						<h2>{blog.title}</h2>
						<p>Written by {blog.author}</p>
						{/* <button onClick={() => handleDelete(blog.id)}>
							Delete Blog
						</button> */}
					</div>
				))}
			</div>
		</div>
	)
}

export default BlogList
