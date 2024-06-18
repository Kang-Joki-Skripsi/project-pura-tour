const fs = require('fs')
const path = require('path')

const folder = "assets/img/tangible/"
const getAllFiles = (dirPath, arrayOfFiles) => {
    const files = fs.readdirSync(dirPath);
  
    files.forEach((file) => {
      const filePath = path.join(dirPath, file);
  
      if (fs.statSync(filePath).isDirectory()) {
        getAllFiles(filePath, arrayOfFiles);
        let newname = filePath.replace('P ', "");
        fs.renameSync(filePath, newname)
      } 
    });
};

getAllFiles(folder)