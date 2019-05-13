<!doctype HTML>
<html>
<head>
<title>Ping Testing</title>
</head>
    <body>
        <form method="post" action="">
            {{csrf_field()}}
            <input type="text"name="domain_name">
            <input type="text"name="packets">
            <input type="submit"name="submit">
            
        </form>
    </body>
</html>