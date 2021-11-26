const { app, BrowserWindow } = require('electron')
function createWindow() {
    const win = new BrowserWindow({
        width: 375,
        height: 812
    });
    const electron = require('electron');
    require('electron-reload')(__dirname);
    win.loadFile('Html/cafeteria_map.html');
}

app.whenReady().then(() => {
    createWindow();
})