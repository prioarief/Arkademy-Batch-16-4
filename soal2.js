const usernameValidity = (username) => 
/^[a-z][a-z0-9_.]{8,12}$/.test(username)


const passwordValidity = (password) => 
/[a-z0-9_!@#$%^&*+-=]{9}$/.test(password)

console.log(usernameValidity('john.smith'))
console.log(usernameValidity('johnsmith26'))
console.log(usernameValidity('JOHNSmith'))
console.log(passwordValidity('j0hn5m!th'))
