<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>QR Code Scanner</title>
</head>
<body>

<div id="sanisid-modal" class="hidden" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; z-index: 100;">
    <div class="modal-content" style="background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-width: 300px; text-align: center;">
        <svg width="64" height="64" viewBox="0 0 24 24" fill="#14aa6c" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 10px;">
            <path d="M10 19L4.5 13.5L5.91 12.09L10 16.17L18.59 7.58L20 9M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2Z"/>
        </svg>
        <p>Succesfully scanned a QR code. The data will be downloaded on your computer.</p>
        <button id="close-modal" style="border: none; background-color: #14aa6c; color: #ffffff; padding: 8px 16px; font-size: 14px; cursor: pointer; border-radius: 4px; margin-top: 10px;">Close</button>
    </div>
</div>

<div id="sanisid-notapproved" class="hidden" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; z-index: 100;">
    <div class="modal-content" style="background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-width: 300px; text-align: center;">
    <svg width="64" height="64" viewBox="0 0 24 24" fill="#ff4d4d" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 10px;">
    <path d="M13 13H11V7H13M13 17H11V15H13M12 2C6.48 2 2 6.48 2 12S6.48 22 12 22 22 17.52 22 12 17.52 2 12 2Z"/>
</svg>

        <p>The Document has not been approved by the administrator, asking for approval first before proceeding.</p>
        <button id="close-modalnotapproved" style="border: none; background-color: #14aa6c; color: #ffffff; padding: 8px 16px; font-size: 14px; cursor: pointer; border-radius: 4px; margin-top: 10px;">Close</button>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col scanner-col">
                <div class="scanner">
                    <video id="qr-video" width="300" height="300" autoplay></video>
                </div>
                
            </div>
            <div class="col description-col" style="padding-top:95px;">
                <h1>QR Code Scanner</h1>
                <p>Place the QR code inside the frame to scan it. Once detected, the page will automatically redirect to the corresponding link.</p>
                <div class="loading">
                    <div class="spinner"></div>
                    <p id="loading-text">Waiting for you to scan...</p>
                </div>
            </div>
        </div>
        <div class="row steps-row" style="justify-content: space-around;">
    <div class="col">
        <div class="step">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="#14aa6c" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 3H7C5.897 3 5 3.897 5 5V19C5 20.103 5.897 21 7 21H17C18.103 21 19 20.103 19 19V5C19 3.897 18.103 3 17 3ZM17 19H7V5H17V19Z"/>
                <path d="M9 9H15V11H9V9Z"/>
                <path d="M9 13H13V15H9V13Z"/>
            </svg>
            <p>Save QR Code</p>
        </div>
    </div>
    <div class="col">
        <div class="step">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="#14aa6c" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 1C6.486 1 2 5.486 2 11C2 16.514 6.486 21 12 21C17.514 21 22 16.514 22 11C22 5.486 17.514 1 12 1ZM12 19C7.589 19 4 15.411 4 11C4 6.589 7.589 3 12 3C16.411 3 20 6.589 20 11C20 15.411 16.411 19 12 19Z"/>
                <path d="M13 11V7H11V11H7V13H11V17H13V13H17V11H13Z"/>
            </svg>
            <p>Present it to Scanner</p>
        </div>
    </div>
    <div class="col">
        <div class="step">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="#14aa6c" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 7H19V9H5V7Z"/>
                <path d="M19 11H5V13H19V11Z"/>
                <path d="M5 15H19V17H5V15Z"/>
                <path d="M3 3H21V5H3V3Z"/>
                <path d="M3 19H21V21H3V19Z"/>
            </svg>
            <p>Print the Document</p>
        </div>
    </div>
</div>

    <script src="https://unpkg.com/@zxing/library@0.18.3/umd/index.min.js"></script>
    <script>
function downloadFile(data) {
    var filename = data;
    var path = "<?php echo '../asset/certs_issued/'; ?>" + filename;
    var http = new XMLHttpRequest();
    http.open('HEAD', path, false);
    http.send();
    if (http.status != 404) {
        // File exists, so call the fire() function
        fire();
        var link = document.createElement("a");
        link.setAttribute("href", path);
        link.setAttribute("download", filename);
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    } else {
        // File does not exist, so call the fired() function
        fired();
    }
}
const videoElem = document.getElementById('qr-video');
        const codeReader = new ZXing.BrowserQRCodeReader();

        codeReader.getVideoInputDevices().then((devices) => {
            if (devices.length > 0) {
                codeReader.decodeFromInputVideoDevice(devices[0].deviceId, videoElem)
                    .then((result) => {
                        console.log('Scanned: ' + result.text);
                        downloadFile(result.text);
                    })
                    .catch((error) => {
                        console.error('Error scanning:', error);
                    });
            } else {
                console.error('No cameras found.');
            }
        }).catch((error) => {
            console.error('Error getting video input devices:', error);
        });

        function fire() {
    const modal = document.getElementById('sanisid-modal');
    modal.classList.remove('hidden');

    setTimeout(() => {
        modal.classList.add('hidden');
    }, 5000);
}

const closeModal = document.getElementById('close-modal');

closeModal.addEventListener('click', () => {
    const modal = document.getElementById('sanisid-modal');
    modal.classList.add('hidden');
});

function fired() {
    const modal = document.getElementById('sanisid-notapproved');
    modal.classList.remove('hidden');

    setTimeout(() => {
        modal.classList.add('hidden');
    }, 5000);
}

const closeModals = document.getElementById('close-modalnotapproved');

closeModals.addEventListener('click', () => {
    const modala = document.getElementById('sanisid-notapproved');
    modala.classList.add('hidden');
});

        


    </script>
</body>

</html>
