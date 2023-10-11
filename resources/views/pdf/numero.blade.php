<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero de Inscripcion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .bgc{
            height: 13vw;
        }
        .bgc-blue{
            background-color:#195fa7;
        }
        .bgc-white{
            background-color:#fff;
        }
        .bgc-brown{
            background-color:#ebebeb;
        }
        .bgc-orange{
            background-color: #FFA534;
        }
        .input-form{
            border: none;
            border-radius: 0;
            background: none;
            border-bottom: 1px solid #919191;
        }
        .form-inscription{
        box-shadow: 0px 21px 38px -21px rgba(0,0,0,0.68);
        margin-top: -15%;
        }
        .text-form{
            letter-spacing: 1px;
        }
        .text-form_plomo{
            color: #747474;
        }
        .text-form_claro{
            color: #8a8a8a;
        }
        .border-title{
            border-bottom: 2px solid #e7e9eb;
        }
        .img-header{
            width: 30%;
        }
        .number{
            font-size: 10em;
        }
        .svg-white{
            width: 20px;
            height: 20px;
            color: white;
        }
        .title-number{
            font-size:2em;
        }
    </style>
</head>
<body class="bgc-brown">
<div class="container-fluid">
      <div class="row bgc bgc-blue">
      </div>
      <div class="row">
            <div class="container bgc-brown">
                <div class="form-inscription">
                        <div class="bgc-white mb-5 pt-4 pl-5 pr-5 pb-5">
                                <p class="text-center number">
                                    {{$data}}
                                </p>
                                <p class="text-center title-number">
                                   NUMERO DE INSCRITO
                                </p>
                        </div>
                </div>
            </div>
      </div>
   </div>

</div>
</body>
</html>
