const express = require('express');
const db = require('./db');
const router = express.Router();

router.post('/consultation',async (req, res) => {
    const { user_id, consultant_id, schedule_date, consultation_type } = req.body;

    try {
        const [result] = await db.execute(
            `INSERT INTO consultation (user_id, consultant_id, schedule_date, consultation_type, status) VALUES (?, ?, ?, ?, 'undone')`,
            [user_id, consultant_id, schedule_date, consultation_type]
        );

        res.status(201).json({ message: "Konsultasi berhasil dibuat", consultation_id: result.insertId });
    } catch (error) {
        res.status(500).json({ error: "Gagal membuat konsultasi", details: error.message });
    }
});

module.exports = router;