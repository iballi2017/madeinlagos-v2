<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Delivery</title>
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap");

:root {
        --primaryColor: #bcae00;
    --blackColor: #000000;
    --white: #ffffff;
    --fontFamily: "Roboto",
        sans-serif;
}

body {
    font-family: var(--fontFamily);
}

h1 {
    font-size: 2.2rem;
}
p{
    line-height: 30px;
}

a.link{
    text-decoration: none;
    color: var(--primaryColor);
    transition: all 300ms ease-in-out;
}
a.link:hover{
    color: var(--blackColor);
}

.container {
    max-width: 500px;
    margin: 0 auto;
}

.header {
    background-color: var(--blackColor);
    color: var(--white);
    padding: .4em .7em;
    text-align: left;
}

table {
    width: 100%;
}
</style>

<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>
                        <div class="header">
                            <h1>Seller Villa</h1>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>Great news!!! Your order #123213233223345434 was delivered successfully. Kindly click on the
                            link below to see the instructions to follow</p>
                            <p>
                                <a href="www. sellervilla.com/mydashboard" class="link">Dashboard</a>
                            </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>