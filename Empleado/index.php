<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Reporte de Empleados</h2>
    <form  action="" method="POST" >
        <label for="Campo">Buscar</label>
        <input type="text" name="Campo" id="Campo">
    </form>
    <br>
    <table>
        <thead>
            
                <th>EmployeeID</th>
                <th>LastName</th>
                <th>FirstName</th>
                <th>BirthDate</th>
                <th>Photo</th>
                <th>Notes</th>
            
        </thead>
        <tbody id="content">

        </tbody>
    </table>
    <script>
            getData()
            document.getElementById("Campo").addEventListener("keyup", getData)

        function getData() {
            let input = document.getElementById("Campo").value
            let content = document.getElementById("content")
            let url = "load.php";
            let formaData = new FormData();
            formaData.append('Campo', input);
            
            fetch(url, {
                method: "POST",
                body: formaData
            })
            .then(Response => Response.json())

            .then(data => {
                content.innerHTML = data;
            }).catch(err => console.log(err));
        }
    </script>
    <a href='http://localhost/dashboard/php/index.html'>Volver a la página</a>
</body>
</html>
    
</body>
</html>