const fs = require("fs")


// creating a new file
// fs.writeFileSync('read.txt',"Hello World")
// fs.writeFileSync('read.txt',"Hello Wordl, hi")


// fs.appendFileSync('read.txt',' Rohan')


const buf_data = fs.readFileSync('read.txt')

console.log(buf_data)
// node.js includes an addditional data type called buffer
// (not avalable in browser's javaScript)
// buffer is mainly used to store binary data,
// while reading form a file or receving packets over the network

const org_data = buf_data.toString();
console.log(org_data);

// to rename the file

fs.renameSync('read.txt','readWrite.txt')