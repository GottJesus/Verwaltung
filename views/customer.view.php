<!DOCTYPE html>
<html>
    <head>
        <?php include'head.view.php'; ?>
    </head>
    
    <body class="darkerBackground">    
    <div class="customerBox"> 
    
    <!-- Customer Header Box -->    
    <header class="customerHeader">
        <?php include'customerheader.php'; ?>
    </header> 
          
    <!-- Customer Article Box -->  
    <article class="customerArticle">
        
        <!-- Linke Section-->
    <section class="flexSection">
        <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" class="sectionTab">
            <tr>
                <td width="30" align="center" class="fuchsia">01</td>
                <td><a href="#" class="lightgreen hrefNo">Alle User (count)</a></td>
                <td width="auto" align="center" class="yellow">0</td>
            </tr>
            <tr>
                <td width="30" align="center" class="fuchsia">03</td>
                <td><a href="#" class="lightgreen hrefNo">User suchen nach Namen</a></td>
                <td align="center" class="yellow"></td>
            </tr>
            <tr>
                <td width="30" align="center" class="fuchsia">05</td>
                <td><a href="#" class="lightgreen hrefNo">User Sprache </a></td>
                <td align="center" class="yellow"></td>
            </tr>
            <tr>
                <td width="30" align="center" class="fuchsia">07</td>
                <td><a href="#" class="lightgreen hrefNo">T</a></td>
                <td align="center" class="yellow">N</td>
            </tr>
            <tr>
                <td width="30" align="center" class="fuchsia">09</td>
                <td><a href="#" class="lightgreen hrefNo">T</a></td>
                <td align="center" class="yellow">N</td>
            </tr>
            <tr>
                <td width="30" align="center" class="fuchsia">11</td>
                <td><a href="#" class="lightgreen hrefNo">T</a></td>
                <td align="center" class="yellow">N</td>
            </tr>
            <tr>
                <td width="30" align="center" class="fuchsia">13</td>
                <td><a href="#" class="lightgreen hrefNo">T</a></td>
                <td align="center" class="yellow">N</td>
            </tr>
            <tr>
                <td width="30" align="center" class="fuchsia">15</td>
                <td><a href="#" class="lightgreen hrefNo">T</a></td>
                <td align="center" class="yellow">N</td>
            </tr>
        </table>
    </section>
    
    <!-- Rechte Section-->
    <section class="flexSection sectionBorder">
    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" class="sectionTab">
        <tr>
            <td width="30" align="center" class="fuchsia">02</td>
            <td><a href="#" class="lightgreen hrefNo">T</a></td>
            <td width="auto" align="center" class="yellow">N</td>
        </tr>
        <tr>
            <td width="30" align="center" class="fuchsia">04</td>
            <td><a href="#" class="lightgreen hrefNo">T</a></td>
            <td align="center" class="yellow">N</td>
        </tr>
        <tr>
            <td width="30" align="center" class="fuchsia">06</td>
            <td><a href="#" class="lightgreen hrefNo">T</a></td>
            <td align="center" class="yellow">N</td>
        </tr>
        <tr>
            <td width="30" align="center" class="fuchsia"></td>
            <td><a href="#" class="lightgreen hrefNo"></a></td>
            <td align="center" class="yellow"></td>
        </tr>
        <tr>
            <td width="30" align="center" class="fuchsia"></td>
            <td><a href="#" class="lightgreen hrefNo"></a></td>
            <td align="center" class="yellow"></td>
        </tr>
        <tr>
            <td width="30" align="center" class="fuchsia"></td>
            <td><a href="#" class="lightgreen hrefNo"></a></td>
            <td align="center" class="yellow"></td>
        </tr>
        <tr>
            <td width="30" align="center" class="fuchsia">14</td>
            <td><a href="#" class="lightgreen hrefNo">T</a></td>
            <td align="center" class="yellow">N</td>
        </tr>
        <tr>
            <td width="30" align="center" class="fuchsia">16</td>
            <td><a href="#" class="lightgreen hrefNo">Informations-Tool</a></td>
            <td align="center" class="yellow"></td>
        </tr>
    </table>
    </section>
    
    </article> <!-- ende customer Article-->
    
    <!-- Customer Footer Box -->  
    <footer class="customerFooter">
        
        <!-- Auswahl Taste -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="customerHead">
            <tr>
                <td>
                    <input class="auswahlInput" type="text" maxlength="2" placeholder=".."  autofocus />
                    <span>&#160;&#160;&#160;</span>
                    <span class="lightgreen">Auswahl = Taste</span>
                </td>
                <td width="120">Leer</td>
                <td width="120">Leer</td>
            </tr>
        </table>          

        <!-- Fehler anzeigen -->
        <div class="hoch2">
        <?php if(!empty($errors) ) :?>
        <div class="customerFehler">
            <?= implode("<br>", $errors)?>
        </div>
        <?php endif; ?>
        </div>
        
        <!-- F1 Zurück  -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="customerHead">
            <tr>
                <td width="120">
                    <span class="weiss">F1</span><span class="lightgreen">&#160;Zur&#252;ck</span>
                </td>
                <td width="120">Leer</td>
                <td width="120">Leer</td>
                <td width="120">Leer</td>
                <td>Leer</td>
            </tr>
        </table>
        
    </footer> 
    
    </div><!-- Ende customer Box -->
    </body>
</html>