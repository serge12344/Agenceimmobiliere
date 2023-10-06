<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Gestion employé</title>
        <style>
            .hed{
                background: #ccc;
                color: blue;
            }
            .hed h1{
                padding-top: 20px;
                padding-bottom: 25px;
            }
            .form{
                margin-top: 50px;
                background: #ccc;
            }
            .table{
                margin-top: 50px;
            }
        </style>
    </head>
    <body class="stretched">
        <div id="wrapper" class="clearfix">
            <section id="page-title">
                <div class="container clearfix hed">
                    <center>
                    </center>
                </div>
            </section>
            <div class="col-md-12 hed">
                <center>
                    <h1>GESTION EMPLOYE</h1>
                </center>
            </div>
            <section id="content">
                <div class="content-wrap">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-md-12" id="hide">
                                <form  class="row form" action="insert.php" method="POST">
                                    <?php  
                                    include "form.php";
                                     ?>
                                    

                                    <div class="col-12 form-group">
                                        <input type="submit" class="btn btn-dark" name="submit" value="Insert">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12 p-0">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nom & Prénom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Poste</th>
                                            <!-- <th scope="col">Description</th> -->
                                            <th scope="col">Date création</th>
                                            <th scope="col">Date modification</th>
                                            <th scope="col" colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $database= new mysqli('localhost','root','','agenceimmob') ;
                                        $sql="SELECT * FROM employe" ;
                                        $result=$database->query($sql); 
                                        ?>

                                        <?php
                                        while ($row=mysqli_fetch_assoc($result)) { ?>

                                        
                                            <tr>
                                                <td> <?php echo $row["id_employe"] ?></td>
                                                <td> <?php echo $row["nompremom_employe"] ?></td>
                                                <td> <?php echo $row["poste_employe"] ?></td>
                                                <td> <?php echo $row["contact_employe"] ?></td>
                                                <td> <?php echo $row["date_enregistrement"] ?></td>
                                                <td> <?php echo $row["adresse_employe"] ?></td>
                                                <td> <?php echo $row["email_employe"] ?></td>
                                                <td> <?php echo $row["description_employe"] ?></td>
                                                
                                                <td>
                                                    <a href="" type="button" class="btn btn-success btn-sm">Voir</a>
                                                </td>
                                                <td>
                                                    <a href="" type="button" class="btn btn-primary btn-sm">Modifier</a>
                                                </td>
                                                <td>
                                                    <a href="" type="button"  data-toggle="modal" data-id="" data-target="#myModal" id="del" class="btn btn-danger btn-sm">Supprimer</a>
                                                </td>
                                            </tr> 
                                        <?php 
                                          }
                                          ?>
                                        
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </body>
</html>