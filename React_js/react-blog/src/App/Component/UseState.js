import React, { useState } from 'react'



const UseState = () => {
  

  let [name,setName] = useState('mario')
  let [age , setAge ]  = useState(25)
  const handleClick = ()=>{
      setName('rohan')
      setAge(23)
  }

  return (
    <div>
      <h1>{name} is {age} old</h1>
      <button onClick={handleClick}>Click me</button>
    </div>
  )
}

export default UseState
