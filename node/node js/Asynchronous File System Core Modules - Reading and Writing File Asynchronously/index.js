const fs = require('fs');

// When ever useing async methods you must need to call callback func

// we pass them a func as an arg - a callback -
// that gets called when that task completes.
// the callback has an arg that tells you whether
// the operation completed successfully.
// now we need to say what to do when fs.writeFile()
// has completed (even if its's nothing), and start 
// checking errors

fs.writeFile('read.txt'," Hello",
(err)=>{
    console.log("File Created");
})



fs.appendFile('read.txt',"Hello World",
(err)=>{
    console.log("File Apended");
})



fs.readFile('read.txt',"utf8",
(err,data)=>{
    console.log(data)
})