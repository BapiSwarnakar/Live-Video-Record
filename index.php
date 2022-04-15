<!DOCTYPE html>
<html>
  <head>
    <title>Media Recorder in Javascript</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div id="container">
      <video id="gum" playsinline autoplay muted></video>
      <video id="recorded" playsinline loop></video>

      <div>
        <button id="start">Start camera</button>
        <button id="record" disabled>Record</button>
        <button id="full_screen" disabled>Full Screen</button>
        <button id="play" disabled>Play</button>
        <button id="download" disabled>Download</button>
      </div>
      <div>
        <h4>Media Stream Constraints options</h4>
        <p>
          Echo cancellation: <input type="checkbox" id="echoCancellation" />
        </p>
      </div>

      <div>
        <span id="errorMsg"></span>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="script.js"></script>

</html>