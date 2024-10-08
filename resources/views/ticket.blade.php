<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CSS Grid: Train Ticket</title>
  <link href="https://fonts.googleapis.com/css?family=Jura:400,700|Questrial|Inconsolata:400,700|Montserrat:900|Old+Standard+TT:700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="main-content">
  <div class="ticket">
    <div class="ticket__main">
      <div class="header">Hogwarts Express</div>
      <div class="info passenger">
        <div class="info__item">Passenger</div>
        <div class="info__detail">Hermione J. Granger</div>
      </div>
      <div class="info platform"> <span>Depart </span><span>from </span><span>platform</span>
        <div class="number">
          <div>9</div>
          <div> <span>3</span><span>4</span></div>
        </div>
      </div>
      <div class="info departure">
        <div class="info__item">Depart</div>
        <div class="info__detail">King's Cross</div>
      </div>
      <div class="info arrival">
        <div class="info__item">Arrive</div>
        <div class="info__detail">Hogsmeade</div>
      </div>
      <div class="info date">
        <div class="info__item">Date</div>
        <div class="info__detail">1 Sep 2018</div>
      </div>
      <div class="info time">
        <div class="info__item">Time</div>
        <div class="info__detail">11:00AM</div>
      </div>
      <div class="info carriage">
        <div class="info__item">car</div>
        <div class="info__detail">4</div>
      </div>
      <div class="info seat">
        <div class="info__item">Seat</div>
        <div class="info__detail">6B</div>
      </div>
      <div class="fineprint">
        <p>Boarding begins 30 minutes before departure. Snacks available for purchase from The Honeydukes Express.</p>
        <p>This ticket is Non-refundable • Hogwarts Express Railway Authority</p>
      </div>
      <div class="snack">
        <svg viewBox="0 -11 414.00053 414">
          <path d="m202.480469 352.128906c0-21.796875-17.671875-39.46875-39.46875-39.46875-21.800781 0-39.472657 17.667969-39.472657 39.46875 0 21.800782 17.671876 39.472656 39.472657 39.472656 21.785156-.023437 39.445312-17.683593 39.46875-39.472656zm0 0"></path>
          <path d="m348.445312 348.242188c2.148438 21.691406-13.695312 41.019531-35.390624 43.167968-21.691407 2.148438-41.015626-13.699218-43.164063-35.390625-2.148437-21.691406 13.695313-41.019531 35.386719-43.167969 21.691406-2.148437 41.019531 13.699219 43.167968 35.390626zm0 0"></path>
          <path d="m412.699219 63.554688c-1.3125-1.84375-3.433594-2.941407-5.699219-2.941407h-311.386719l-3.914062-24.742187c-3.191407-20.703125-21.050781-35.9531252-42-35.871094h-42.699219c-3.867188 0-7 3.132812-7 7s3.132812 7 7 7h42.699219c14.050781-.054688 26.03125 10.175781 28.171875 24.0625l33.800781 213.515625c3.191406 20.703125 21.050781 35.957031 42 35.871094h208.929687c3.863282 0 7-3.132813 7-7 0-3.863281-3.136718-7-7-7h-208.929687c-14.050781.054687-26.03125-10.175781-28.171875-24.0625l-5.746094-36.300781h213.980469c18.117187-.007813 34.242187-11.484376 40.179687-28.597657l39.699219-114.578125c.742188-2.140625.402344-4.511718-.914062-6.355468zm0 0"></path>
        </svg>
      </div>
      <div class="barcode">
        <div class="barcode__scan"></div>
        <div class="barcode__id">001256733</div>
      </div>
    </div>
    <div class="ticket__side">
      <div class="logo">
        <p>Hogwarts Express</p>
      </div>
      <div class="info side-arrive">
        <div class="info__item">Arrive</div>
        <div class="info__detail">Hogsmeade</div>
      </div>
      <div class="info side-depart">
        <div class="info__item">Depart</div>
        <div class="info__detail">King's Cross</div>
      </div>
      <div class="info side-date">
        <div class="info__item">Date</div>
        <div class="info__detail">1 Sep 2018</div>
      </div>
      <div class="info side-time">
        <div class="info__item">Time</div>
        <div class="info__detail">11:00AM</div>
      </div>
      <div class="barcode">
        <div class="barcode__scan"></div>
        <div class="barcode__id">001256733</div>
      </div>
    </div>
  </div>
</div>
<aside class="context">
  <div class="explanation">Part of the <a href="https://codepen.io/collection/DQvYpQ/" target="_blank">CSS Grid collection here</a>.</div>
</aside>
<footer><a href="https://twitter.com/meowlivia_" target="_blank"><i class="icon-social-twitter icons"></i></a><a href="https://github.com/oliviale" target="_blank"><i class="icon-social-github icons"></i></a><a href="https://dribbble.com/oliviale" target="_blank"><i class="icon-social-dribbble icons"></i></a></footer>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</body>
</html>


<style>
    body {
  background: #f2f2f2;
  font-family: "Questrial", sans-serif;
}

aside.context {
  text-align: center;
  color: #333;
  line-height: 1.7;
}
aside.context a {
  text-decoration: none;
  color: #333;
  padding: 3px 0;
  border-bottom: 1px dashed;
}
aside.context a:hover {
  border-bottom: 1px solid;
}
aside.context .explanation {
  max-width: 700px;
  margin: 4em auto 0;
}

footer {
  text-align: center;
  margin: 4em auto;
  width: 100%;
}
footer a {
  text-decoration: none;
  display: inline-block;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  background: transparent;
  border: 1px dashed #333;
  color: #333;
  margin: 5px;
}
footer a:hover {
  background: rgba(255, 255, 255, 0.1);
}
footer a .icons {
  margin-top: 12px;
  display: inline-block;
  font-size: 20px;
}

.main-content {
  margin: 4em auto 0;
  width: 740px;
  text-transform: uppercase;
}

.ticket {
  display: grid;
  grid-template-columns: auto 143px;
  background: #f3f1c9;
  border-radius: 10px;
  border: 2px solid #222;
  cursor: default;
}
.ticket__main {
  display: grid;
  grid-template-columns: repeat(6, 1fr) 120px;
  grid-template-rows: repeat(4, min-content) auto;
  padding: 10px;
}

.header {
  grid-area: title;
  grid-column: span 7;
  grid-row: 1;
  font: 900 38px "Montserrat", sans-serif;
  padding: 5px 0 5px 20px;
  letter-spacing: 6px;
  background: #111;
  color: #f3f1c9;
}

.info {
  border: 3px solid;
  border-width: 0 3px 3px 0;
  padding: 8px;
}
.info__item {
  font: 400 13px "Questrial", sans-serif;
  letter-spacing: 0.5px;
}
.info__detail {
  font: 700 20px/1 "Jura";
  letter-spacing: 1px;
  margin: 4px 0;
}

.passenger {
  grid-column: 1/span 6;
}

.platform {
  grid-column: 7/span 1;
  grid-row: 2/span 3;
  background: #c02a28;
  color: #fff;
  border-color: #000;
  text-align: center;
  padding: 10px 0;
}
.platform span {
  display: block;
}
.platform span:nth-child(1) {
  font: 900 22px/1 "Montserrat";
  letter-spacing: 1.5px;
}
.platform span:nth-child(2) {
  font: 900 29px/1 "Montserrat";
  letter-spacing: 3px;
}
.platform span:nth-child(3) {
  font: 900 16px/1.2 "Montserrat";
  letter-spacing: 0.5px;
}
.platform .number {
  display: flex;
  margin-top: 12px;
  position: relative;
}
.platform .number div:nth-child(1) {
  position: absolute;
  left: 16px;
  font: 900 90px/1 "Old Standard TT";
}
.platform .number span {
  font: 900 36px/1 "Old Standard TT";
  position: absolute;
  right: 18px;
}
.platform .number span:nth-child(1) {
  top: -2px;
  border-bottom: 2px solid;
  padding: 0 2px;
}
.platform .number span:nth-child(2) {
  top: 44px;
}

.departure, .arrival {
  grid-column-start: span 3;
}

.passenger, .departure, .date {
  border-left: 3px solid;
}

.date, .time {
  grid-column-start: span 2;
}

.fineprint {
  grid-column-start: span 5;
  font-size: 14px;
  font-family: "Inconsolata";
  line-height: 1;
  margin-top: 10px;
  padding-right: 5px;
}
.fineprint p:nth-child(2) {
  margin: 4px 4px 0 0;
  padding-top: 4px;
  border-top: 1.5px dotted;
  font: 11px/1 "Inconsolata";
}

.snack {
  grid-column: 6/span 1;
  width: 65px;
  margin: 10px 10px 0 0;
  position: relative;
  background: #000;
  padding: 6px 0 2px;
  text-align: center;
  border-radius: 5px;
}
.snack svg {
  fill: #f3f1c9;
  width: 36px;
}
.snack__name {
  color: #f3f1c9;
  font-size: 12px;
}

.barcode {
  grid-column-start: span 1;
  display: grid;
  margin: 10px 0 0;
  grid-template-rows: 1fr min-content;
}
.barcode__scan {
  background: linear-gradient(to right, #333 2%, #333 4%, transparent 4%, transparent 5%, #333 5%, #333 6%, transparent 6%, #333 6%, #333 8%, transparent 8%, transparent 9%, #333 9%, #333 10.5%, transparent 10.5%, transparent 11%, #333 11%, #333 12%, transparent 12%, transparent 13.5%, #333 13.5%, #333 15%, #333 17%, transparent 17%, transparent 19%, #333 19%, #333 20%, transparent 20%, transparent 21%, #333 21%, #333 22%, transparent 22%, transparent 23.5%, #333 23.5%, #333 25%, transparent 25%, transparent 26.5%, #333 26.5%, #333 27.5%, transparent 27.5%, transparent 28.5%, #333 28.5%, #333 30%, transparent 30%, transparent 32%, #333 32%, #333 34%, #333 36%, transparent 36%, transparent 37.5%, #333 37.5%, #333 40%, transparent 40%, transparent 41.5%, #333 41.5%, #333 43%, transparent 43%, transparent 46%, #333 46%, #333 48%, transparent 48%, transparent 49%, #333 49%, transparent 49%, transparent 50%, #333 50%, #333 51%, transparent 51%, transparent 53%, #333 53%, #333 54.5%, transparent 54.5%, transparent 56%, #333 56%, #333 58%, transparent 58%, transparent 59%, #333 59%, #333 60%, #333 62.5%, transparent 62.5%, transparent 64%, #333 64%, #333 64%, #333 67%, transparent 67%, transparent 69%, #333 69%, #333 70%, transparent 70%, transparent 71%, #333 71%, #333 72%, transparent 72%, transparent 73.5%, #333 73.5%, #333 76%, transparent 76%, transparent 79%, #333 79%, #333 80%, transparent 80%, transparent 82%, #333 82%, #333 82.5%, transparent 82.5%, transparent 84%, #333 84%, #333 87%, transparent 87%, transparent 89%, #333 89%, #333 91%, transparent 91%, transparent 92%, #333 92%, #333 95%, transparent 95%);
}
.barcode__id {
  letter-spacing: 4px;
  padding: 2px 0 0;
  color: #c02a28;
  font: 700 16px/1 "Jura";
}

.ticket__side {
  background: rgba(192, 42, 40, 0.2);
  box-sizing: border-box;
  border-left: 1.5px dashed #111;
  display: grid;
  grid-template-rows: repeat(2, 124px) 60px;
  grid-template-columns: 40px repeat(2, 45px);
  border-radius: 0 10px 10px 0;
}
.ticket__side .logo {
  text-align: center;
  background: #c02a28;
  padding: 10px 5px 10px 0px;
  margin: 10px 0 0 10px;
  font: 900 16px/1 "Montserrat";
  letter-spacing: 1.5px;
  grid-column: 1/span 1;
  grid-row: 1/span 2;
  position: relative;
  color: #fff;
  writing-mode: vertical-rl;
}
.ticket__side .logo p {
  transform: rotate(180deg);
}
.ticket__side .info {
  border: 3px solid #c02a28;
  border-width: 3px 3px 0;
  grid-column-start: 2;
  writing-mode: vertical-rl;
  transform: rotate(180deg);
}
.ticket__side .info.side-arrive {
  margin-top: 10px;
  border-width: 3px;
}
.ticket__side .info.side-date {
  grid-column-start: 3;
  border-right: none;
}
.ticket__side .info.side-time {
  grid-column: 3/span 1;
  grid-row: 1;
  margin-top: 10px;
  border-width: 3px 0 3px 3px;
}
.ticket__side .info__item {
  font-size: 11px;
  color: #c02a28;
}
.ticket__side .info__detail {
  font-size: 12px;
  margin: 0 2px 0 0;
  letter-spacing: 0px;
}
.ticket__side .barcode {
  grid-template-rows: 30px min-content;
  grid-row-start: 3;
  grid-column: 1/span 3;
  margin: 9px 0 0 10px;
  text-align: center;
}
</style>
