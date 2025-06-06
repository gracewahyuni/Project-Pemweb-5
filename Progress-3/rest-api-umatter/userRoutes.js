const express = require('express');
const bcrypt = require('bcrypt');
const db = require('./db');
const router = express.Router();

//Register user 
router.post('/register', async(req, res) => {
    const { username, email, password } = req.body;

    try {
        const hashedPassword = await bcrypt.hash(password, 10);

        const [result] = await db.execute(
            "INSERT INTO user (username, email, password) VALUES (?, ?, ?)", 
            [username, email, hashedPassword]
        );

        res.status(201).json({ message: "User terdaftar", user_id: result.insertId });
    } catch (error) {
        res.status(500).json({ error: "Gagal mendaftarkan user", details: error.message });
    }
});

router.post('/login', async (req, res) => {
    const { username, password } = req.body;

    try {
        const [rows] = await db.execute(
            "SELECT * FROM user WHERE username = ?", [username]
        );

        if(rows.length === 0) 
            return res.status(401).json({ error: "User tidak ditemukan" });

        const user = rows[0];
        const match = await bcrypt.compare(password, user.password);

        if(!match) 
            return res.status(401).json({ error: "Password salah" });

        res.json({ message: "Login berhasil", user: { user_id: user.user_id, username: user.username } });
    } catch (error) {
        res.status(500).json({ error: "Gagal login", details: error.message });
    }
});

module.exports = router;