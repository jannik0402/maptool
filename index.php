<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Maptool</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
      <script async defer data-website-id="6d7e8fec-e3e3-479a-a0e7-ea156099a8b2" src="https://jnmstat.space/umami.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <!-- Custom styles for this template -->
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow" style="z-index: 999;position: fixed;width:100%">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Maptool</strong>
          </a>
        </div>
      </div>
    </header>
    
  </body>
  <footer class="text-muted">
        <script>
        
                        
        function ausgabe(typ,link){
            if(link.includes("/gallery.")){
                alert("Bitte gib einen Artikellink ein. Mit Galerie-Links funktioniert der Generator leider im Moment noch nicht.");
            }else{
                
                if(link == ''){
                    document.getElementById('keinlink').style.display = 'block';
                }else if(typ == "tarue" || typ == "linkinbio" || typ == "badge"){
                     document.getElementById('keinlink').style.display = 'none';
                    window.open("ausgabe/design2/"+typ+".php?link="+link);     
                }else{
                    document.getElementById('keinlink').style.display = 'none';
                    window.open("ausgabe/"+typ+".php?link="+link); 
                }
                
            }
            
                
        }
                    
        
        </script>
      
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
