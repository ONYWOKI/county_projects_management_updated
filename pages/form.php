<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById(‘modal-wrapper’);
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = “none”;
}
}
</script>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-left: 0px;

}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;

}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 800px;
   margin:0 auto; /* this will center the page */
   width:900px; /*  use your width here */
   height: 100%;



}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.feedback{
  text-align: center;
}
#feedback{
  height: 100%;
  margin-left: 20px;
}
#name{
  width: 20px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>




<div class="container" id="modal-wrapper">
  <form method="POST" action="feedback.php" name="feedback" id="feedback">
    <h2 class="feedback">Please Give Us Your Feedback</h2>
  <div class="row">
    <div class="">
      <label for="fname" id="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="name" placeholder="Your name..">
    </div>
  </div>
 
  
  <div class="row">
    <div class="">
      <label for="subject" class="message">Massage</label><br>
    </div>
    <div class="col-75">
      <textarea id="subject" name="message" placeholder="Your Message.." style="height:200px"></textarea>
    </div>
  </div>
   <div class="row">
    <div class="">
      <label for="lname">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your Email..(Optional)">
    </div>
  </div>
   <div class="row">
    <div class="">
      <label for="lname">Phone</label>
    </div>
    <div class="col-75">
      <input type="text" id="phone" name="phone" placeholder="Your phone so that we can contact you">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </form>
</div>

</body>
</html>
