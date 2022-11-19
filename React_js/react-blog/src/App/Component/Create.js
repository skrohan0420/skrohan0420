import { useState } from "react";
import { useHistory } from "react-router-dom";


const Create = () => {
    const [title, setTitle] = useState('')
    const [body, setBody] = useState('')
    const [author, setAuthor] = useState('mario')
    const [isPending, setIsPending] = useState(false)
    const history = useHistory()

    const handleSubmit = (e) => {
        e.preventDefault()
        const blog = { title, body, author }

        setIsPending(true)

        console.log(blog)

        fetch('http://localhost:8000/blogs', {
            method: 'POST',
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(blog)
        }).then(() => {
            console.log('New Blog Added')
            setIsPending(false)

            setTitle('')
            setAuthor('mario')
            setBody('')

            // history.go(-1)
            // history.go(1)
            history.push('/')
        })
    }

    return (
        <div className="create">
            <h2>Add New Blog</h2>
            <form onSubmit={handleSubmit}>
                <label>Blog title:</label>
                <input
                    type="text"
                    required
                    value={title}
                    onChange={(e) => setTitle(e.target.value)}
                />
                <label>Blog author:</label>
                <select
                    onChange={(e) => setAuthor(e.target.value)}
                    value={author}
                >
                    <option value="mario">mario</option>
                    <option value="rohan">rohan</option>
                    <option value="tom">tom</option>
                </select>
                <label>Blog body:</label>
                <textarea
                    required
                    value={body}
                    onChange={(e) => setBody(e.target.value)}
                >
                </textarea>
                {!isPending && <button>Add Blog</button>}
                {isPending && <button disabled>Adding Blog...</button>}



                {/* <p>{title}</p>
                <p>{body}</p>
                <p>{author}</p> */}
            </form>

        </div>
    );
}

export default Create;