<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>

<body>
    <!-- <form action="" method="get">
        <input type="hidden" name="number" value="1">
        <button name="navigasi" value="prev">prev</button>
        <button name="navigasi" value="next">next</button>
    </form> -->
    <h1 id="counter"></h1>
    <button id="btn-next">Next</button>
    <button id="btn-prev">Prev</button>

    <script>
        let no=1;
        let next = document.getElementById("btn-next");
        let counter = document.getElementById("counter");
        counter.innerHTML = no;
        next.addEventListener('click',function(){
            no++;
            counter.innerHTML = no;
            if(no>5){
                alert('tidak lebih dari 5')
                console.log(no)
            }

            console.log(no)
        });
    </script>
</body>

</html>