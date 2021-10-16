<html>
    <head>
        <title>Check</title>
        <style type="text/css">
            body{
                margin: 0;
                padding: 0;
            }
            .row{
                width: 100%;
                height: 100%;
                display: flex;
            }
            .col{
                width: 40%;
                height: 100%;
                margin: 2% 3%;
            }
            #carousel-pic1 {
                width: 100%;
                height: 100%;
                background-image: url("images/coding/pic 2.jpg");
                background-position:center;
                background-repeat:no-repeat;
                background-size:cover;
                background-attachment:fixed; 
                overflow:hidden;
                position: relative;
            }
            .layer{
                background-color: rgba(0, 0, 0, 0.7);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="carousel-pic1">
                        <div class="layer"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div id="carousel-pic2">
                        <div class="layer"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>