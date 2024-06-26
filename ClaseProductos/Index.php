<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Reporte de Productos por cualquier campo</h2>
    <form  action="" method="POST" >
        <label for="Campo">Buscar</label>
        <input type="text" name="Campo" id="Campo">
    </form>
    <br>
    <table>
        <thead>
            
                <th>ProductID</th>
                <th>ProductName</th>
                <th>SupplierID</th>
                <th>CategoryID</th>
                <th>Unit</th>
                <th>Price</th>
            
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
</body>
</html>
