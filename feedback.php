<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   <!--bootstrap-->
   <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
 <style media="screen">
 html,
body {
  overflow-x: hidden;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: helvetica;
  font-weight: 300;
}


a,
button{
  display: inline-block;
  padding: 14px 30px;
  text-decoration: none;
  color: #243342;
  letter-spacing: 1.2px;
  font-size: 14px;
  border: 1px solid #243342;
  border-radius: 7px;
  margin-right: 20px;
  transition: 0.15s ease-in-out;
}
a.focus,
button{
  color: white;
  background: #243342;
}
a.focus:hover,
button:hover{
cursor: pointer;
 color: #1bf1dc;
}
a:hover {
  background-color: #243342;
  color: #16f1d7;
}

nav {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 2;
  background-color: rgb(36, 51, 66);
}



nav .wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px 5%;
}
nav .hamburger {
  width: 30px;
  height: 30px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  z-index: 3;
  opacity: 0;
  pointer-events: none;
}
nav .hamburger:hover{
  cursor: pointer;
}

nav .hamburger:hover span.slice {
  background-color: #b9bbbd;
}

nav .hamburger span.slice {
  display: block;
  width: 100%;
  height: 2px;
  background-color: white;
  transition: 0.2s ease-in-out;
}

nav.open .hamburger span.cheese.slice {
  opacity: 0;
}

nav.open .hamburger span.lettuce.slice {
  transform-origin: center left;
  transform: rotate(43deg);
}

nav.open .hamburger span.beef.slice {
  transform-origin: center left;
  transform: rotate(-43deg);
}

nav.open .linkWrapper {
  opacity: 1;
  display: flex;
  pointer-events: initial;
}


nav h1 {
  color: white;
  font-weight: 300;
  font-size: 22px;
  letter-spacing: 1.2px;
}

nav a {
  color: white;
  text-decoration: none;
  display: inline-block;
  padding: 5px 15px;
  font-weight: 300;
  letter-spacing: 1.2;
  border: none;
  margin: 0;
}
a.active {
  color: #16f1dc;
  font-weight: 500;
}

.map{
position: fixed;
width: 100vw;
height: 100vh;
}
.map:after{
content: "";
position: absolute;
top: 0;
left: 0;
height: 100%;
width: 100%;
background: linear-gradient(45deg, rgba(7, 45, 72, 0.8), rgba(195, 195, 195, 0.8));
}




.content{
position: fixed;
top: 60px;
height: calc(100vh - 60px);
width: 100vw;
display: flex;
align-items: center;
justify-content: center;
overflow: auto;
padding: 20px;
}


.contact{
width: 80%;
max-width: 1080px;
display: flex;
 box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.28);
border-radius: 5px;
overflow: hidden;
}


.other{
width: 60%;
background-image: url(https://images.unsplash.com/photo-1485119584289-30ca2b38c67e?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=);
background-size: cover;
background-position: center;
position: relative;
display: flex;
flex-direction: column;
justify-content: flex-end;
}


.other:before{
content: "";
position: absolute;
top: 0;
left: 0;
height: 100%;
width: 100%;
background: linear-gradient(45deg, rgb(36, 51, 66), rgba(36, 51, 66, 0.81));
}






.form{
width: 40%;
background-color: white;
padding: 20px;
display: flex;
flex-direction: column;
align-items: flex-end;

}
.form h1{
text-align: center;
margin-bottom: 20px;
width: 100%;
}
.form form{
width: 100%;
display: flex;
flex-direction: column;
align-items: flex-end;
}
.flex-rev {
  display: flex;
  flex-direction: column-reverse;
  margin-bottom: 10px;
  width: 100%;
}

.flex-rev input, .flex-rev textarea {
  border: none;
  background-color: #e6e6e6;
  padding: 12px 10px;
  font-size: 16px;
  resize: none;
  margin-top: 7px;
  margin-bottom: 16px;
  border-radius: 5px;
  color: #243342;
  outline-color: #243342;
  outline-width: thin;
 -webkit-appearance: none;
}
.flex-rev textarea{
height: 150px;
}
button{
-webkit-appearance: none;
margin-right: 0;
}


.info {
  position: relative;
  padding: 20px;
}

h2 {}

.info h2 {
  color: #16f1dc;
  font-size: 34px;
}

.info h3 {
  color: white;
  letter-spacing: 1.2px;
  margin-top:  20px;
}

.svg-wrap {
  display: flex;
  margin-top: 14px;
}

.svg-wrap a {
  border: 0;
  padding: 0;
  display: flex;
  color: #bbbbbb;
  font-size: 16px;
  justify-content: center;
  align-items: center;
  font-style: italic;
}

.svg-wrap a svg {
  width: 20px;
  height: 20px;
  fill: white;
  transition: fill 0.2s ease-in-out;
  margin-right: 13px;
}

.svg-wrap a:hover svg {
  fill: #16f1dc;
  cursor: pointer;
}

.svg-wrap a:hover {
  background-color: transparent;
  color: #16f1dc;
  cursor: pointer;
}



@media screen and (max-width: 900px){
.content{
  padding: 10px 0 0;
  display: block;
}
.map{
  display: none;
}
.contact{
  width: 100%;
  flex-direction: column-reverse;
  border-radius: 0;
  box-shadow: 0px 0px 0px 0px;
}
.other{
  width: 100%;
  padding: 20px 0;
}
.form{
  width: 100%;
}
}

@media screen and (max-height: 660px){
.content{
  align-items: flex-start;
}
}


@media screen and (max-width: 660px){
  nav .hamburger{
      opacity: 1;
      pointer-events: initial;
  }
  nav div.linkWrapper{
      top: 0;
      right: 0;
      position: fixed;
      height: 100vh;
      background-color: rgba(36, 51, 66, 0.9);
      display: flex;
      flex-direction: column;
      padding: 10px 0;
      box-shadow: -10px 0px 20px rgba(0, 0, 0, 0.3);
      width: 100%;
      justify-content: center;
      will-change: transform;
      opacity: 0;
      display: none;
      pointer-events: none;
      transition: opacity 0.3s ease-in-out;
  }

  nav div a {
      color: white;
      text-decoration: none;
      display: inline-block;
      font-weight: 300;
      letter-spacing: 1.5;
      width: 100%;
      margin-bottom: 31px;
      text-align: center;
      font-size: 38px;
  }
}

</style>


  </head>
  <body>


<div class="map">
 </div>

<div class="content">

   <div class="form">
     <h1>Get In Touch</h1>
     <form action="">
       <div class="flex-rev">
         <input type="text" placeholder="name" name="name" id="name" />
         <label for="name">Full Name</label>
       </div>
       <div class="flex-rev">
         <input type="email" placeholder="email@.com" name="email" id="email" />
         <label for="email">Your Email</label>
       </div>

       <div class="flex-rev">
         <textarea placeholder="I have an idea for a project...." name="message" id="message" /></textarea>
         <label for="message">Email Message</label>
       </div>
       <button>Send Email</button>
     </form>
   </div>
 </div>
</div>
<script type="text/javascript" src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
</script>
  </body>
</html>
