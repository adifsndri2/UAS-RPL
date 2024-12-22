const path = require('path');

module.exports = {
  // Other configurations...
  output: {
    path: path.resolve(__dirname, 'dist'), // Ensure this points to 'dist'
    filename: 'bundle.js', // Your output file name
  },
};