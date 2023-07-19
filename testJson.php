<!DOCTYPE html>
<html>
<head>
  <title>People Viewer</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: blue;
}

#person-container {
  background-color: #fff;
  width: 419px;
  /* padding: 10px; */
  margin: 0 auto;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  border-radius: 12px;
  margin-left: 536px;
}
#person-containers {

  width: 500px;
  /* padding: 10px; */
  margin: 0 auto;
  /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  border-radius: 18px; */
  margin-left: 464px;
}

#person-name {
  font-size: 20px;
    /* margin: 6px; */
    padding-left: 38px;
    padding-bottom: 8px;
    border-radius: 0px 12px 0px 0px;
    background-color: #b9b9e6;
    font-weight: 600;
    width: 386px;
}

#person-age {
  color: #888;
  margin-top: 5px;
}

#person-description {
  margin-top: 15px;
  font-weight: 600;
    padding-left: 38px;
}
.test{
  background-color: green;
    font-size: 47px;
    border-radius: 17px 0px 0px 17px;
    margin: 0px -40px 0px -1px;
    z-index: 1;
    padding: 0.4px;
    text-align: center;
}


#next-person-btn {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: orange;
  border-radius: 17px;
  margin-left: 49px;
}

  </style>
</head>
<body>
  <div class="row">
  <div class="col-6">
    <h2 style="float:right; color:white; margin-top: 25px; font-weight: 600;">PEOPLE DATA</h2>
    </div>
    <div class="col-2">
    <button id="next-person-btn">Next Person</button>
    </div>
  </div>
  <div id="person-container">
    <div class="row">
      <div class="col-2 test" id="test" style='z-index: 1;'>
        <span id="person-count">1</span>
      </div>  
    <div class="col-8" id="pp">
      <div class='person-details'>
        <h2 id="person-name"></h2>
        <p id="person-description"></p>
      </div>
    </div>
  </div>
  
</div>

  <script>
    var currentIndex = 0;
    $(document).ready(function() {
      loadFirstPerson();

      // Handle button click
      $("#next-person-btn").click(function() {
        loadNextPerson();
      });
    });

    function loadFirstPerson() {
      $.getJSON("data.json", function(data) {
        displayPerson(data[0]);
      });
    }

    function loadNextPerson() {
     currentIndex++;
      $.getJSON("data.json", function(data) {
        if (currentIndex < data.length) {
          displayPerson(data[currentIndex]);
        } else {
          alert("No more people!");
        }
      });
    }

    function displayPerson(person) {
      $("#person-name").text("Name :"+person.name);
      $("#person-description").text("Location :" +person.location);

    }

  </script>
</body>
</html>
