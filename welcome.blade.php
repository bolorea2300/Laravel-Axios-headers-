<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p onclick="active()">起動</p>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function active()
        {
            let data = {
                headers: {
                    "GetData": "Hello!"
                }
            };

            axios
                .get("/api/test", data)
                .then(res => {
                    alert(res.data);
                })
        }
    </script>
</body>

</html>