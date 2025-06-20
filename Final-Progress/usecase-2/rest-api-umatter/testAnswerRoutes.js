// testAnswerRoutes.js
const express = require('express');
const router = express.Router();
const db = require('./db'); // koneksi database

router.post('/', async (req, res) => {
  const { user_id, answers } = req.body;

  if (!user_id || !answers) {
    return res.status(400).json({ success: false, message: 'Missing user_id or answers' });
  }

  // Validasi semua jawaban dari q1 - q20
  for (let i = 1; i <= 20; i++) {
    if (typeof answers[`q${i}`] !== 'number') {
      return res.status(400).json({ success: false, message: `Invalid or missing answer for q${i}` });
    }
  }

  // Hitung total skor
  const total_score = Object.values(answers).reduce((a, b) => a + b, 0);

  // Siapkan kolom dan nilai untuk query SQL
  const columns = Object.keys(answers);
  columns.unshift('user_id');
  columns.push('total_score');

  const values = [user_id, ...Object.values(answers), total_score];
  const placeholders = columns.map(() => '?').join(', ');
  const sql = `INSERT INTO test_answer (${columns.join(', ')}) VALUES (${placeholders})`;

  try {
    await db.execute(sql, values);
    res.status(200).json({ success: true, message: 'Answers submitted successfully' });
  } catch (err) {
    res.status(500).json({ success: false, message: 'Database error', error: err.message });
  }
});

module.exports = router;
