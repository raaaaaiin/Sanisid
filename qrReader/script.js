
        const videoElem = document.getElementById('qr-video');
        const codeReader = new ZXing.BrowserQRCodeReader();

        codeReader.getVideoInputDevices().then((devices) => {
            if (devices.length > 0) {
                codeReader.decodeFromInputVideoDevice(devices[0].deviceId, videoElem)
                    .then((result) => {
                        console.log('Scanned: ' + result.text);
                        downloadFile(data)
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


        