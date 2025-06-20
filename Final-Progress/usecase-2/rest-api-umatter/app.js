const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = 8000;

// Import file route dari root folder
const userRoutes = require('./userRoutes');
const testAnswerRoutes = require('./testAnswerRoutes');

// Middleware
app.use(cors());
app.use(bodyParser.json());

// Gunakan route
app.use('/api/users', userRoutes);
app.use('/api/answers', testAnswerRoutes);

// Jalankan server
app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});
