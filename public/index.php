<!DOCTYPE html>
<html>
<head>
  <title>My Sample App</title>
</head>
<body>
<h1>My Sample App</h1>
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
  <script>
    function fetchData(param) {
        return fetch(`/getData?param1=${param}`)
        .then(response => response.json())
        .then(data => {
            let table = document.getElementById("data-table").getElementsByTagName('tbody')[0];
            for (let i = 0; i < data.length; i++) {
                let row = table.insertRow();
                let keyCell = row.insertCell(0);
                let valueCell = row.insertCell(1);
                keyCell.innerHTML = data[i].key;
                valueCell.innerHTML = data[i].value;
            }
        });
    }

    fetchData("value1")
  </script>
</body>
</html>
