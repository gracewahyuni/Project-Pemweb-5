const express = require('express');
const db = require('./db');
const router = express.Router();

// Ambil semua postingan Mind Space
router.get('/', async (req, res) => {
  try {
    const [rows] = await db.execute(`
      SELECT m.post_id, m.content, m.created_at, u.username 
      FROM mind_space m
      JOIN user u ON m.user_id = u.user_id
      ORDER BY m.created_at DESC
    `);
    res.json(rows);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// Tambah postingan Mind Space
router.post('/', async (req, res) => {
  try {
    const { user_id, content } = req.body;
    await db.execute('INSERT INTO mind_space (user_id, content) VALUES (?, ?)', [user_id, content]);
    res.json({ message: 'Cerita berhasil diposting' });
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

module.exports = router;
