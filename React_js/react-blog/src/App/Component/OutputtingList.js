import React, { useState, useEffect } from 'react'
import useFetch from '../Hooks/useFetch'
import BlogList from './BlogList'



const OutputtingList = () => {

  // const [blogs, setBlogs] = useState([
  //   { title: 'My new website', body: 'lorem ipsum...', author: 'mario', id: 1 },
  //   { title: 'Welcome party!', body: 'lorem ipsum...', author: 'yoshi', id: 2 },
  //   { title: 'Web dev top tips', body: 'lorem ipsum...', author: 'mario', id: 3 }
  // ])




  // const handleDelete = (id) =>{
  //   const newBlogs = blogs.filter(blog => blog.id !== id )
  //   setBlogs(newBlogs)
  // }

  const [name, setName] = useState('rohan')


  // const [blogs, setBlogs] = useState(null)
  // const [isPending, setIsPending] = useState(true)
  // const [error , setError] = useState(null)


  // useEffect(()=>{
  //   fetch('http://localhost:8000/blogs')
  //   .then(res => {
  //     console.log(res)
  //     if(!res.ok){
  //       throw Error('Could not fetch the data')
  //     }
  //     return res.json()
  //   })
  //   .then(data => {
  //     console.log(data)
  //     setBlogs(data)
  //     setIsPending(false)
  //     setError(null)
  //   })
  //   .catch(err => {
  //     console.log(err.message)
  //     setError(err.message)
  //     setIsPending(false)
  //   })
  // },[])



  const {data : blogs, isPending, error} = useFetch('http://localhost:8000/blogs')

  return (
    <div className='home'>
      {/* {blogs && <BlogList blogs={blogs} title='All Blogs' handleDelete={handleDelete}/>} */}
      {/* <BlogList blogs={blogs.filter((blog)=>(
        blog.author === 'mario'
      ))} title='Marios Blogs' /> */}
      {/* <p>{name}</p> */}
      {/* <button onClick={()=>setName('Mario')}>Change Name</button> */}


      {error && <h2> {error} </h2>}
      {isPending && <h2> Loading... </h2>}
      {blogs && <BlogList blogs={blogs} title='All Blogs' />}


    </div>
  )
}

export default OutputtingList
