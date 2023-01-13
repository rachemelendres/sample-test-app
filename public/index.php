<html>
<head>
  <title>My Sample App</title>
</head>
<body>
  <table id="data-table">
    <thead>
      <tr>
        <th>Key</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</body>
<script>
    function fetchData() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '../src/MyDataController.php?action=fetchData', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                console.log(data);
                // Do something with the data here, e.g. display it in a table
                let table = document.getElementById("data-table");
                let tbody = table.getElementsByTagName("tbody")[0];
                for (let i = 0; i < data.length; i++) {
                  let row = tbody.insertRow();
                  let keyCell = row.insertCell(0);
                  let valueCell = row.insertCell(1);
                  keyCell.innerHTML = data[i][0];
                  valueCell.innerHTML = data[i][1];
                }
            }
        };
        xhr.send();
    }
    fetchData();
  </script>
</html>
