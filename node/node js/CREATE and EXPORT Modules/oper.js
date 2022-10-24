const add = (a,b) => {
    return a+b
}
const sub = (a,b) => {
    return a-b
}


// export method
// module.exports.add = add
// module.exports.sub = sub

// anathor efficient method
module.exports = {add,sub}