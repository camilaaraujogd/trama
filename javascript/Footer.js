function createFooter() {
    const headerHTML = `
    <footer class="text-center footer text-center">

    <div class="footerbox">
  
        <div class="footerblock">
            <div class="nomeempresa ">
                <h4>TRAMA</h4>
                <p><br>RUA DA GLÓRIA, 372, SALA 505 CURITIBA, PARANÁ<br><b>(41) 99139-9175</b></p>
            </div>
    
            <div class="copyright"> <p>Copyright © 2023. Criado por Camila Araújo, Guilherme Belo, Yasmin Carmona & Juliano Detiuk.</p> </div>
         </div>
  
    </footer>
    `;
  
    document.body.insertAdjacentHTML('afterbegin', headerHTML);
  
    const style = document.createElement('style');
    style.textContent = `
      
.footer{
    color:#2c2c2c;
 /*   background-image:
    linear-gradient(to top right, rgba(0, 74, 109, 0.63) 20%, rgba(9, 38, 82, 0.8) 80%),
    url('');*/
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    width: 100%;
    text-align: center;
    background-image: url("../trama/imagens/background2.png");
}

.footerblock {
    margin: 0 ;
}

.nomeempresa h4{
    font-size: 25px;
    font-weight: 500;
    padding-top: 20px;
    margin-bottom: -20px;
}

.nomeempresa p{
    font-size: 15px;
    padding-bottom: 20px;
    padding-top: -10px;
}

.copyright{
    font-size: 10px;
    padding-bottom: 10px;
}
    `;
    document.head.appendChild(style);
  }
  
  document.addEventListener('DOMContentLoaded', createHeader);
  