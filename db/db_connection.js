const mysql = require('mysql');

const db_connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "cobot"
});

function getDBConnection(){
    return db_connection;
}
exports.getDBConnection = getDBConnection;
//module.exports = { getDBConnection };