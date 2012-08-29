<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>

        <div id="main_container">

            <div id="main_header">
                <h1>Web<span class="off">app</span></h1>
                <h2>template by -jaykrish</h2>
            </div>   

            <div id="main_menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Purchase</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Transport</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Stock</a></li>
                </ul>
            </div>

            <div id="main_content">

                <?php echo $sf_content ?>

            </div>
            
            <div id="main_footer"><h3><a href="#">Neat web design</a></h3></div>

        </div>
    </body>
</html>
