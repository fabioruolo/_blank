var config = {};

// directories
config.dir = {
  assets: './assets',
  dist: './assets/dist',
  styl: './assets/src/styl',
  js: './assets/src/js'
};

// index files
config.index = {
  js: config.dir.js + '/index.js',
  styl: config.dir.styl + '/index.styl'
};

module.exports = config;
