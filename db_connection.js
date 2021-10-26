var mysql = require("mysql");

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: null,
  database: "cobot"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connection opened!");
});

function closeConnection(){
    con.end(function(){
        console.log("Connection closed!!");
    });
}

function registerUser(){
    var personalid = "9974746";
    var email = "jennifer@gmail.com";
    var username = "jennifer99";
    var password = "74386536";
    //var data = {personalid, email, username, password};

    var sql = "INSERT INTO useraccount (personalid, email, username, password) VALUES (?, ?, ?, ?)";
    con.query(sql, [personalid, email, username, password], function(err, results){
        console.log("inserted the data");  
    });
    
    closeConnection();
}
//registerUser(); WORKS!!!

function loginUser(){
    var personalid = "9974746";
    var password = "74386536";

    var getVariable = {};
    var sql = "SELECT personalid, password FROM useraccount WHERE personalid = ? AND password = ?";
    con.query(sql, [personalid, password], function(err, rows, fields){
        console.log("FOUND!!");
        var count = rows.length;
        if(count === 1){
            getVariable = rows[0].item;
            console.log(JSON.stringify(rows[0]));
            console.log(JSON.stringify(rows[0].personalid));
        }else{
            console.log("error!");
        }            

    });
}
//loginUser(); WORKS!!!