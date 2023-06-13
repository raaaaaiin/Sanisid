<html>
<head>
<style> .info {
        color: rgba(29, 33, 36, 0.76);
        background-color: #e7f3fe;
        border-left: 6px solid #2196F3;
    }
body, html {
  height: 100%
}

.bgimg {
  /* Background image */
  background-image: url('img/underdev.webp');
  background-repeat: no-repeat;
 background-size: contain;
 background-position: center;
  height: 100%;
  position: relative;
  color: white;
  font-size: 25px;
}

/* Position text in the top-left corner */
.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

/* Position text in the bottom-left corner */
.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

/* Position text in the middle */
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the <hr> element */
hr {
  margin: auto;
  width: 40%;
}
</style>
</head>
<body>
<div class="bgimg">
  <div class="topleft">
    <p>Logo</p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p><br></p>
  </div>
  <div class="bottomleft">
    <p>Some text</p>
  </div>
</div>
</body>
</html>