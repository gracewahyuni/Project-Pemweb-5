const express = require('express');
const db = require('./db');
const router = express.Router();

// Ambil pesan dari grup
router.get('/groups/:groupId/messages', async (req, res) => {
  try {
    const [rows] = await db.execute(`
      SELECT g.message_id, g.message, g.sent_at, u.username 
      FROM group_messages g
      JOIN user u ON g.user_id = u.user_id
      WHERE g.group_id = ?
      ORDER BY g.sent_at ASC
    `, [req.params.groupId]);
    res.json(rows);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// Kirim pesan ke grup
router.post('/groups/:groupId/messages', async (req, res) => {
  try {
    const { user_id, message } = req.body;
    await db.execute('INSERT INTO group_messages (group_id, user_id, message) VALUES (?, ?, ?)', [req.params.groupId, user_id, message]);
    res.json({ message: 'Pesan berhasil dikirim' });
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

module.exports = router;
