const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = 8000;

const userRoutes = require('./userRoutes');
const consultantRoutes = require('./consultantRoutes');
const consultationRoutes = require('./consultationRoutes');

app.use(cors());
app.use(bodyParser.json());

app.use('/api/users', userRoutes);
app.use('/api', consultantRoutes);
app.use('/api', consultationRoutes);

app.listen(8000, () => {
    console.log("Server running on http://localhost:8000");
});
