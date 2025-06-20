const mysql = require('mysql2/promise');

const db = mysql.createPool({
  host: 'localhost',
  user: 'root',
  password: '',       // sesuaikan
  database: 'umatter' // sesuaikan
});

module.exports = db;
