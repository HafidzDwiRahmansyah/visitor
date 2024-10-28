<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title') - Visitor Apps</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  {{-- <link rel="shortcut icon" href="/img/logo.jpg" type="image/x-icon"> --}}
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    #video-container {
      position: relative;
      display: block;
      margin: auto;
      max-width: 100%;
    }

    #video,
    #canvas,
    #result-image {
      display: block;
      margin: auto;
      max-width: 100%;
    }

    #border {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 475px;
      /* Adjust this to the width of your KTP */
      height: 300px;
      /* Adjust this to the height of your KTP */
      border: 5px solid red;
      transform: translate(-50%, -50%);
      pointer-events: none;
    }

    #video {
      transform: scaleX(-1);
      /* Membalik tampilan video secara horizontal */
    }


    body {
      background-color: white;
    }

    .spinner {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: white;
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.5s ease-out;
      transform: translateY(0);
    }

    .spinner.hide {
      transform: translateY(-100%);
    }


    .spinner>div {
      width: 18px;
      height: 18px;
      background-color: blue;
      border-radius: 100%;
      display: inline-block;
      -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
      animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    }

    .spinner .bounce1 {
      -webkit-animation-delay: -0.32s;
      animation-delay: -0.32s;
    }

    .spinner .bounce2 {
      -webkit-animation-delay: -0.16s;
      animation-delay: -0.16s;
    }

    @-webkit-keyframes sk-bouncedelay {

      0%,
      80%,
      100% {
        -webkit-transform: scale(0);
      }

      40% {
        -webkit-transform: scale(1.0);
      }
    }

    @keyframes sk-bouncedelay {

      0%,
      80%,
      100% {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      40% {
        -webkit-transform: scale(1.0);
        transform: scale(1.0);
      }
    }

    .content {
      display: none;
    }

    .informasi1 {
      width: 200px;
      height: 50px;
      background-color: blue;
      border-radius: 10px;
      transition: 0.4s;
    }

    .informasi1:hover {
      width: 210px;
      height: 60px;
      background-color: blue;
      border-radius: 10px;
      transition: 0.4s;
      cursor: pointer;
    }

    .informasi2 {
      width: 200px;
      height: 50px;
      background-color: red;
      transition: 0.4s;
      border-radius: 10px;
    }

    .informasi2:hover {
      width: 210px;
      height: 60px;
      background-color: red;
      border-radius: 10px;
      transition: 0.4s;
      cursor: pointer;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

  <div class="spinner" id="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
  <div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <h3 class="mx-auto d-block"><b>VISITOR APPS</b></h3>
        </nav>

        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; TRISTEL DEVELOPER 2024</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function hideLoader() {
      var spinner = document.getElementById('spinner');
      var content = document.querySelector('.content');
      setTimeout(function() {
        spinner.classList.add('hide');
        content.style.display = 'block';
      }, 2000);
    }
    document.addEventListener('DOMContentLoaded', function() {
      hideLoader();
    });
  </script>

  @if (session('error'))
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 4200,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });
    Toast.fire({
      icon: "error",
      title: "{{ session('error') }}"
    });
  </script>
  @endif

  @if (session('success'))
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 4200,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });
    Toast.fire({
      icon: "success",
      title: "{{ session('success') }}"
    });
  </script>
  @endif
  <script src="https://cdn.jsdelivr.net/npm/tesseract.js@v2.1.1/dist/tesseract.min.js"></script>
  <!-- <script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const resultImage = document.getElementById('result-image');
    const resultText = document.getElementById('result');
    const captureButton = document.getElementById('capture');
    const switchCameraButton = document.getElementById('switch-camera');
    const border = document.getElementById('border');

    // Form fields
    const nikField = document.getElementById('nik');
    const namaField = document.getElementById('nama');
    const alamatField = document.getElementById('alamat');

    let currentStream = null;
    let currentCameraIndex = 0;
    let videoDevices = [];

    // Get available video devices
    async function getVideoDevices() {
      const devices = await navigator.mediaDevices.enumerateDevices();
      videoDevices = devices.filter(device => device.kind === 'videoinput');
      return videoDevices;
    }

    // Initialize camera
    async function startCamera(cameraIndex = 0) {
      if (currentStream) {
        currentStream.getTracks().forEach(track => track.stop());
      }

      const constraints = {
        video: {
          deviceId: videoDevices[cameraIndex]?.deviceId || undefined
        }
      };

      try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        video.srcObject = stream;
        video.play();
        currentStream = stream;
      } catch (err) {
        console.error("Error accessing the camera: ", err);
      }
    }

    // Start the first camera
    (async () => {
      await getVideoDevices();
      startCamera(currentCameraIndex);
    })();

    captureButton.addEventListener('click', () => {
      const context = canvas.getContext('2d');
      canvas.width = video.videoWidth;
      canvas.height = video.videoHeight;
      context.drawImage(video, 0, 0, canvas.width, canvas.height);

      context.save();
      context.scale(-1, 1);  // Flip the canvas horizontally
      context.drawImage(video, -canvas.width, 0, canvas.width, canvas.height);  // Draw video
      context.restore();

      convertToGrayscaleAndProcess();
    });

    switchCameraButton.addEventListener('click', async () => {
      currentCameraIndex = (currentCameraIndex + 1) % videoDevices.length;
      await startCamera(currentCameraIndex);
    });

    function convertToGrayscaleAndProcess() {
      const context = canvas.getContext('2d');
      const imgData = context.getImageData(0, 0, canvas.width, canvas.height);
      const grayData = convertToGrayscale(imgData);
      context.putImageData(grayData, 0, 0);

      // Extract image within the border
      const borderRect = border.getBoundingClientRect();
      const videoRect = video.getBoundingClientRect();
      const scaleX = canvas.width / videoRect.width;
      const scaleY = canvas.height / videoRect.height;
      const x = (borderRect.left - videoRect.left) * scaleX;
      const y = (borderRect.top - videoRect.top) * scaleY;
      const width = borderRect.width * scaleX;
      const height = borderRect.height * scaleY;

      const borderCanvas = document.createElement('canvas');
      borderCanvas.width = width;
      borderCanvas.height = height;
      const borderContext = borderCanvas.getContext('2d');
      const borderImageData = context.getImageData(x, y, width, height);
      borderContext.putImageData(borderImageData, 0, 0);

      resultImage.src = borderCanvas.toDataURL('image/jpeg');

      Tesseract.recognize(
        borderCanvas,
        'eng', {
          logger: info => console.log(info),
        }
      ).then(({
        data: {
          text
        }
      }) => {
        const lines = text.trim().split('\n').map(line => line.trim());

        // Extract specific lines: 3, 4, and 7 (index 2, 3, and 6 in zero-based index)
        const selectedLinesIndices = [2, 3, 6];
        const selectedLines = selectedLinesIndices.map(index => lines[index] || "");

        // Function to format and filter NIK
        function formatNik(value) {
          return value.replace(/\D/g, ''); // Remove non-numeric characters
        }

        // Function to format and filter Nama (uppercase letters only)
        function formatNama(value) {
          return value.replace(/[^A-Z\s]/g, ''); // Keep only uppercase letters and spaces
        }

        // Function to format and filter Alamat (uppercase letters, numbers, spaces, dots, and slashes)
        function formatAlamat(value) {
          return value
            .toUpperCase() // Convert to uppercase
            .replace(/[^A-Z0-9\s./]/g, ''); // Keep only uppercase letters, numbers, spaces, dots, and slashes
        }

        // Fill form fields with the formatted data
        nikField.value = formatNik(selectedLines[0]);
        namaField.value = formatNama(selectedLines[1]);
        alamatField.value = formatAlamat(selectedLines[2]);

        // Optionally, display result as JSON
        const jsonOutput = {
          lines: selectedLines.map((line, index) => ({
            id: selectedLinesIndices[index] + 1,
            text: line
          }))
        };

        resultText.textContent = JSON.stringify(jsonOutput, null, 2);
      }).catch(err => {
        console.error("Error during OCR processing: ", err);
        resultText.textContent = "An error occurred during OCR processing.";
      });
    }

    function convertToGrayscale(imgData) {
      const data = imgData.data;
      for (let i = 0; i < data.length; i += 4) {
        const avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
        data[i] = avg; // Red
        data[i + 1] = avg; // Green
        data[i + 2] = avg; // Blue
      }
      return imgData;
    }
  </script> -->

  <script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const resultImage = document.getElementById('result-image');
    const resultText = document.getElementById('result');
    const captureButton = document.getElementById('capture');
    const switchCameraButton = document.getElementById('switch-camera');
    const border = document.getElementById('border');

    // Form fields
    const nikField = document.getElementById('nik');
    const namaField = document.getElementById('nama');
    const alamatField = document.getElementById('alamat');

    let currentStream = null;
    let currentCameraIndex = 0;
    let videoDevices = [];

    // Get available video devices
    async function getVideoDevices() {
        const devices = await navigator.mediaDevices.enumerateDevices();
        videoDevices = devices.filter(device => device.kind === 'videoinput');
        return videoDevices;
    }

    // Initialize camera
    async function startCamera(cameraIndex = 0) {
        if (currentStream) {
            currentStream.getTracks().forEach(track => track.stop());
        }

        const constraints = {
            video: {
                deviceId: videoDevices[cameraIndex]?.deviceId || undefined
            }
        };

        try {
            const stream = await navigator.mediaDevices.getUserMedia(constraints);
            video.srcObject = stream;
            video.play();
            currentStream = stream;
        } catch (err) {
            console.error("Error accessing the camera: ", err);
        }
    }

    // Start the first camera
    (async () => {
        await getVideoDevices();
        startCamera(currentCameraIndex);
    })();

    captureButton.addEventListener('click', () => {
        const context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;

        // Draw video frame on canvas
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        // No mirroring applied; process the image as is
        convertToGrayscaleAndProcess();
    });

    switchCameraButton.addEventListener('click', async () => {
        currentCameraIndex = (currentCameraIndex + 1) % videoDevices.length;
        await startCamera(currentCameraIndex);
    });

    function convertToGrayscaleAndProcess() {
        const context = canvas.getContext('2d');
        const imgData = context.getImageData(0, 0, canvas.width, canvas.height);
        const grayData = convertToGrayscale(imgData); // Convert image to grayscale
        context.putImageData(grayData, 0, 0);

        // Extract image within the border
        const borderRect = border.getBoundingClientRect();
        const videoRect = video.getBoundingClientRect();
        const scaleX = canvas.width / videoRect.width;
        const scaleY = canvas.height / videoRect.height;
        const x = (borderRect.left - videoRect.left) * scaleX;
        const y = (borderRect.top - videoRect.top) * scaleY;
        const width = borderRect.width * scaleX;
        const height = borderRect.height * scaleY;

        const borderCanvas = document.createElement('canvas');
        borderCanvas.width = width;
        borderCanvas.height = height;
        const borderContext = borderCanvas.getContext('2d');

        // Draw the extracted portion of the canvas onto the borderCanvas
        borderContext.drawImage(canvas, x, y, width, height, 0, 0, width, height);

        // Display the result image in the UI
        resultImage.src = borderCanvas.toDataURL('image/jpeg');

        // Proceed with Tesseract OCR
        Tesseract.recognize(
            borderCanvas,
            'eng', {
                logger: info => console.log(info),
            }
        ).then(({ data: { text } }) => {
            const lines = text.trim().split('\n').map(line => line.trim());

            // Extract specific lines: 3, 4, and 7 (index 2, 3, and 6 in zero-based index)
            const selectedLinesIndices = [3, 4, 5];
            const selectedLines = selectedLinesIndices.map(index => lines[index] || "");

            // Function to format and filter NIK
            function formatNik(value) {
                return value.replace(/\D/g, ''); // Remove non-numeric characters
            }

            // Function to format and filter Nama (uppercase letters only)
            function formatNama(value) {
                return value.replace(/[^A-Z\s]/g, ''); // Keep only uppercase letters and spaces
            }

            // Function to format and filter Alamat (uppercase letters, numbers, spaces, dots, and slashes)
            function formatAlamat(value) {
                return value
                    .toUpperCase() // Convert to uppercase
                    .replace(/[^A-Z0-9\s./]/g, ''); // Keep only uppercase letters, numbers, spaces, dots, and slashes
            }

            // Fill form fields with the formatted data
            nikField.value = formatNik(selectedLines[0]);
            namaField.value = formatNama(selectedLines[1]);
            alamatField.value = formatAlamat(selectedLines[2]);

            // Optionally, display result as JSON
            const jsonOutput = {
                lines: selectedLines.map((line, index) => ({
                    id: selectedLinesIndices[index],
                    text: line
                }))
            };

            resultText.textContent = JSON.stringify(jsonOutput, null, 2);
        }).catch(err => {
            console.error("Error during OCR processing: ", err);
            resultText.textContent = "An error occurred during OCR processing.";
        });
    }

    function convertToGrayscale(imgData) {
        const data = imgData.data;
        for (let i = 0; i < data.length; i += 4) {
            const avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
            data[i] = avg; // Red
            data[i + 1] = avg; // Green
            data[i + 2] = avg; // Blue
        }
        return imgData;
    }
  </script>





  {{-- <script>
    const progressBar = document.getElementById('progress-bar');
    const progressContainer = document.getElementById('progress-container');
    const ocrFailMessage = document.getElementById('ocr-fail');

    const video = document.getElementById('video');

    // Fungsi untuk mengakses kamera
    function startCamera() {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream; // Menampilkan stream video ke elemen <video>
                video.play(); // Memastikan video berjalan
            })
            .catch(error => {
                console.error("Error accessing camera: ", error);
                alert("Kamera tidak dapat diakses.");
            });
    }

    // Panggil fungsi untuk mulai menangkap video
    startCamera();


    captureButton.addEventListener('click', () => {
        // Reset progress bar and failure message
        progressBar.style.width = '0%';
        progressContainer.style.display = 'block';
        ocrFailMessage.style.display = 'none';

        // Capture image and start OCR
        const context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;

        // Apply transform to avoid mirror effect
        context.save();
        context.scale(-1, 1); // Flip the canvas horizontally
        context.drawImage(video, -canvas.width, 0, canvas.width, canvas.height); // Draw video
        context.restore();

        convertToGrayscaleAndProcess();
    });

    function convertToGrayscaleAndProcess() {
        const context = canvas.getContext('2d');
        const imgData = context.getImageData(0, 0, canvas.width, canvas.height);
        const grayData = convertToGrayscale(imgData);
        context.putImageData(grayData, 0, 0);

        // Extract image within the border
        const borderRect = border.getBoundingClientRect();
        const videoRect = video.getBoundingClientRect();
        const scaleX = canvas.width / videoRect.width;
        const scaleY = canvas.height / videoRect.height;
        const x = (borderRect.left - videoRect.left) * scaleX;
        const y = (borderRect.top - videoRect.top) * scaleY;
        const width = borderRect.width * scaleX;
        const height = borderRect.height * scaleY;

        const borderCanvas = document.createElement('canvas');
        borderCanvas.width = width;
        borderCanvas.height = height;
        const borderContext = borderCanvas.getContext('2d');
        const borderImageData = context.getImageData(x, y, width, height);
        borderContext.putImageData(borderImageData, 0, 0);

        resultImage.src = borderCanvas.toDataURL('image/jpeg');

        // OCR processing with progress tracking
        Tesseract.recognize(
            borderCanvas,
            'eng', {
                logger: info => {
                    console.log(info);
                    // Update progress bar based on OCR progress
                    if (info.status === 'recognizing text') {
                        const progress = Math.floor(info.progress * 100);
                        progressBar.style.width = progress + '%';
                        progressBar.setAttribute('aria-valuenow', progress);
                    }
                },
            }
        ).then(({ data: { text } }) => {
            const lines = text.trim().split('\n').map(line => line.trim());

            // Extract specific lines: 3, 4, and 7 (index 2, 3, and 6 in zero-based index)
            const selectedLinesIndices = [2, 3, 6];
            const selectedLines = selectedLinesIndices.map(index => lines[index] || "");

            // Function to format and filter NIK
            function formatNik(value) {
                return value.replace(/\D/g, ''); // Remove non-numeric characters
            }

            // Function to format and filter Nama (uppercase letters only)
            function formatNama(value) {
                return value.replace(/[^A-Z\s]/g, ''); // Keep only uppercase letters and spaces
            }

            // Function to format and filter Alamat (uppercase letters, numbers, spaces, dots, and slashes)
            function formatAlamat(value) {
                return value
                    .toUpperCase() // Convert to uppercase
                    .replace(/[^A-Z0-9\s./]/g, ''); // Keep only uppercase letters, numbers, spaces, dots, and slashes
            }

            // Check if the necessary fields are detected
            const isDataComplete = selectedLines.every(line => line !== "");

            if (isDataComplete) {
                // Fill form fields with the formatted data
                nikField.value = formatNik(selectedLines[0]);
                namaField.value = formatNama(selectedLines[1]);
                alamatField.value = formatAlamat(selectedLines[2]);

                // Hide progress bar when done
                progressContainer.style.display = 'none';
            } else {
                // If any data is missing, show the failure message
                progressContainer.style.display = 'none';
                ocrFailMessage.style.display = 'block';
            }
        }).catch(err => {
            console.error("Error during OCR processing: ", err);
            resultText.textContent = "An error occurred during OCR processing.";
            progressContainer.style.display = 'none';
        });
    }
  </script> --}}


</body>

</html>