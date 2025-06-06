const express =  require('express');
const db = require('./db');
const router = express.Router();

router.get('/consultants', async (req, res) => {
    try {
        const [rows] = await db.execute("SELECT * FROM consultant");
        res.json(rows);
    } catch (error) {
        res.status(500).json({ error: "Gagal mengambil data konsultan", details: error.message })
    }
});

module.exports = router;