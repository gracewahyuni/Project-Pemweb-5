const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = 8000;

// Import routes
const userRoutes = require('./userRoutes');
const communityRoutes = require('./communityRoutes');
const chatRoutes = require('./chatRoutes');
const mindspaceRoutes = require('./mindspaceRoutes');

// Middleware
app.use(cors());
app.use(bodyParser.json());

// Routing
app.use('/api/users', userRoutes);           // login, register
app.use('/api/communities', communityRoutes); // kategori, grup, join
app.use('/api/chat', chatRoutes);             // kirim dan ambil pesan grup
app.use('/api/mindspace', mindspaceRoutes);   // posting dan lihat cerita

// Start server
app.listen(PORT, () => {
    console.log(`Server berjalan di http://localhost:${PORT}`);
});
