const fs = require('fs')
const path = require('path')

const folder = "assets/img/tangible/"

const data = [];

const readDirectoryRecursive = (dirPath) => {
  let results = [];

  const list = fs.readdirSync(dirPath);
  list.forEach((file) => {
    const filePath = path.join(dirPath, file);
    const stat = fs.statSync(filePath);
    if (stat && stat.isDirectory()) {
      results = results.concat(readDirectoryRecursive(filePath));
    } else {
      results.push(file);
    }
  });

  return results;
};

const getAllFiles = (dirPath, jnsImg, type = '', id) => {
  if (type == "") {
    dirPath = path.join(dirPath, jnsImg)
    const folders = fs.readdirSync(dirPath);

    folders.forEach((folder) => {
      if (folder != "bale" && folder != "pelinggih") {
        let filePath = path.join(dirPath, folder)
        if (fs.statSync(filePath).isDirectory()) {
          let imgFiles = readDirectoryRecursive(path.join(dirPath, folder));
          data.push({
            id,
            type: '',
            imgType: jnsImg,
            metadata: 'https://nusaheritage.id/objekmetadata/warisanberwujud/candi-bentar-pertama',
            img: imgFiles.map(file => path.join(filePath, file).replace(/\\/g, '/').replace('assets', '../assets')),
            deskripsi: folder,
          })
          id++;
        } 
      }
    });
  }else {
    dirPath = path.join(dirPath, jnsImg, type)
    const folders = fs.readdirSync(dirPath);

    folders.forEach((folder) => {
      let deskripsi = folder;
      let filePath = path.join(dirPath, folder)
      if (fs.statSync(filePath).isDirectory()) {
        let imgFiles = readDirectoryRecursive(path.join(dirPath, folder));
        data.push({
          id,
          type,
          imgType: jnsImg,
          metadata: 'https://nusaheritage.id/objekmetadata/warisanberwujud/candi-bentar-pertama',
          img: imgFiles.map(file => path.join(filePath, file).replace(/\\/g, '/').replace('assets', '../assets')),
          deskripsi,
        })
        id++;
      } 
    });
  }
};

getAllFiles(folder, "potrait", "", 19)

console.log(data)
