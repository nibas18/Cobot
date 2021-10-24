const { app, BrowserWindow } = require('electron')
function createWindow() {
    const win = new BrowserWindow({
        width: 1366,
        height: 1024
    });
    const electron = require('electron');
    require('electron-reload')(__dirname);
    win.loadFile('..Html/forgotpassword-page.html');
}

app.whenReady().then(() => {
    createWindow();
})