const express = require('express');
const path = require('path');
const server = express();

// set the static assets directory so express knows where to look
// for css files, js files, images etc.
server.use(express.static('public'));

server.get("/" , (req, res) => {
  console.log("Hit your Home Route");
  res.sendFile(path.join(__dirname, "stream.html")); //localhost:3000/index.html
})

const port = process.env.PORT || 3000;

server.listen(port, () => {
  console.log(`Server is now running at ${port}/`);
});