var mysql = require('mysql');

var db_connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "cobot"
});

function loginFunction(){
    var mobile = document.getElementById("mobile_input").value;
    db_connection.connect(function(err){
        if(err) throw err;
        db_connection.query('SELECT * FROM Users WHERE Mobile = ?', [mobile],function(err, result, fields){
            if(results.length > 0){
                console.log("You have successfully logged in.");
                location.href = "../html/main_use_page.html";
            }else{
                console.log("Incorrect mobile number. Try Again!");
            }
        });

    });
}

db_connection.connect(function(err) {
    if (err) throw err;
    db_connection.query("SELECT * FROM users", function (err, result, fields) {
      if (err) throw err;
      console.log(result);
    });
  });

/*function loginFunction(){
    let mobile = document.getElementById("mobile_input").value;
    console.log(mobile);

    const connection = require('../db/db_connection.js');
    console.log(`Connection: ${connection.getDBConnection()}`);

}*/