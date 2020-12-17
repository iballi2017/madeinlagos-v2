<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <!-- Fontawesome 5.15.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-4.2.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../stylesheet/main.css">
</head>

<body>
    <!-- header -->
    <div
        class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg_secondary shadow-sm sticky-top">
        <h5 class="my-0 mr-md-auto font-weight-normal text-white uppercase">Sellers Villa</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-white" href="./views/login.php">Login</a>
            <a class="p-2 text-white text_decoration_underline_none display_1" href="#">
                <!-- <span class="icon" data-feather="user"></span> -->
                <i class="fas fa-user-circle"></i>
            </a>
        </nav>
        <a class="btn btn_primary" href="./views/register.php">Sign up</a>
    </div> <!-- //header -->


    
<!-- side-navigation -->
<?php include_once './includes/side-navigation.php'; ?>


    <!-- main -->
    <div class="container">
        <h4 class="my-3">DASHBOARD</h4>
                  
                  <p>Cajun Ipsum
File interstate boiled crawfish file hot sauce smoked sausage. Bourre okra gumbo iced tea tasso food food bbq bisque turducken. Gumbo Mardi Gras merci beaucoup Fauxcheaux Boudreaux. Pirogue bread pudding merci beaucoup food bbq canaille. Pirogue fishing iced tea fried catfish Boudreaux envie.

File hot sauce sugar cane tasso praline remoulade praline file coffee Boudreaux. Canaille bbq fried catfish canaille gumbo viens ci. Yams praline coffee smoked sausage cher fried catfish. King Cake canaille praline bayou food sugar cane.

Hunting bonjour andouille bourre sac a lait lagniappe. Tasso coffee bonjour King Cake barbed wire boucherie zydeco boucherie andouille hunting. Mirliton gumbo smoked sausage levee hot sauce. Viens ci andouille beer Boudreaux okra gumbo po-boy tasso bourre gulf shrimp. Boiled crawfish Mardi Gras couillon fried chicken jambalaya lagniappe fried chicken mirliton boiled crawfish. Sa fait chaud remoulade bread pudding iced tea levee trail ride sac a lait hunting Lafayette. Macque choux football fried catfish hunting yams coffee bread pudding sauce piquante King Cake po-boy. Levee sauce piquante remoulade pecan pie hot sauce.

Jambalaya bourre ca c’est bon pecan pie boudin tasso cajun boiled crawfish cajun fried chicken. Hunting catahoula beer etoufee bonjour pirogue jambalaya. Fried chicken bread pudding sugar cane bread pudding canaille viens ci.

Canaille trail ride turducken sugar cane bourre pecan pie. Gulf shrimp red beans & rice etoufee Lafayette remoulade boucherie tasso boudin viens ci King Cake. Bisque fried chicken fried catfish lagniappe boudin trail ride hunting. Boucherie sugar cane beer po-boy gumbo turducken. Jambalaya ca c’est bon okra gumbo beer Mardi Gras mirliton Fauxcheaux. Bonjour coffee Acadiana smoked sausage bayou.

Fais do do merci beaucoup bourre sa fait chaud file sac a lait sac a lait. Sauce piquante Mardi Gras sugar cane boudin canaille boucherie Boudreaux. Cayenne mirliton boudin levee Fauxcheaux. Barbed wire merci beaucoup levee fais do do envie sa fait chaud bbq fais do do. Gulf shrimp mirliton fried chicken macque choux red beans & rice.

Lagniappe crawfish bourre bisque turducken bayou cher interstate coffee Boudreaux. Macque choux lagniappe crawfish food Mardi Gras catahoula bonjour. Hot sauce fried catfish envie sauce piquante lagniappe. Etoufee boucherie bbq barbed wire file remoulade. Boiled crawfish smoked sausage etoufee lagniappe bonjour.</p>          
    </div>


</main>
</div>
</div>




    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="./assets/plugins/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./assets/plugins/bootstrap-4.2.1/js/bootstrap.min.js">
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons@4.10.0/dist/feather.min.js"></script>
<script>
$(document).ready(function() {
    feather.replace();

    $('button').click(function() {
        $('.alert').html('<i data-feather="activity"></i>');
        feather.replace();
    });

});
</script>
</body>

</html>