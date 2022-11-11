import chalk from 'chalk'
import validator from 'validator'

console.log(chalk.green.inverse('Succsess'));
var res = validator.isEmail('rohan@gmail.com'); 

console.log(res ? chalk.green.inverse(res): chalk.red.inverse(res))