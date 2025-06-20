const express = require('express');
const db = require('./db');
const router = express.Router();

// Ambil semua kategori komunitas
router.get('/categories', async (req, res) => {
  try {
    const [rows] = await db.execute('SELECT * FROM community_category');
    res.json(rows);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// Ambil grup dari kategori tertentu
router.get('/categories/:id/groups', async (req, res) => {
  try {
    const [rows] = await db.execute('SELECT * FROM community_group WHERE category_id = ?', [req.params.id]);
    res.json(rows);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// Join ke grup
router.post('/groups/:groupId/join', async (req, res) => {
  try {
    const { user_id } = req.body;
    const groupId = req.params.groupId;
    await db.execute('INSERT IGNORE INTO user_group (user_id, group_id) VALUES (?, ?)', [user_id, groupId]);
    res.json({ message: 'Berhasil bergabung ke grup' });
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

module.exports = router;
