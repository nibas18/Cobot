var mysql = require('mysql');

var db_connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "cobot"
});
/*
db_connection.connect(function () {
    //if (error) throw err
    console.log("You have successfully connected to the database.")
});
db_connection.query("SELECT * FROM users", function(result){
    console.log(result.rows[0]);
});*/
db_connection.connect(function(err) {
    if (err) throw err;
    db_connection.query("SELECT * FROM users", function (err, result, fields) {
      if (err) throw err;
      console.log(result);
    });
  });
