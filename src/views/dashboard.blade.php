<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
test

<script>

    document.addEventListener('DOMContentLoaded', boot);


    function boot(){
        "use strict";


        let xhttp = new XMLHttpRequest();
        xhttp.open('GET', '{{ route('git-logger.load-data') }}' );
        xhttp.send();
        xhttp.onreadystatechange = function(e){
            if(this.readyState === 4 && this.status===200){
                let response = JSON.parse(xhttp.responseText)
                console.table(response)
            }

        }


    }

</script>
</body>
</html>
