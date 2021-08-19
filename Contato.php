<STYle>
  
  
  H2 {
        FONT-SIZE: 50PX;
        text-align: center;
        color: #ed9121;
        text-shadow: 0 4px 8px black;
        width: 50%;
        margin: 10px auto;
     }

     form {
        width: 50%;
        margin: 10px auto;
        box-shadow: 0 4px 8px #999;


     }

    .card {
        
        background-color: white;
        color:  #ed9121;
        margin: auto;
        padding: 20px 20px;
        margin-top: 20px;      
       
    }

    input, textarea {
        width: 100%;
        padding-left: 10px;
        left: 10px;
        margin-bottom: 1em;
        font: 1em  sans-serif;
        border: 1px solid #999;
    } 
    label {
        font-weight: bold;
        padding-bottom: 5px;
        display: inline-block;
    }

    button  {
        background-color: white;
        border: 1px solid green;
        color: black;
        background: white;
        font-weight: bold;
        padding: 15px;
        left: 15px;
    }
    button:hover {
        background-color: green;
        color: white;
        cursor: pointer; 
    }

    input:invalid, textarea:invalid {
        border-color: red;
    }
    input:valid, textarea:valid {
        border-color: green;
    }
    input:focus, textarea:focus {
        border-color: blue !important;
    }

    .exemplo-relative {
        position: relative;
        left: 10px !important;
          }
          span {
        position: relative;
                 }
    input:invalid + span::before, textarea:invalid + span::before {
        content: '✖';
        color: red;
    }
    input:valid + span::before, textarea:valid + span::before {
        content: '✓';
        color: green;
    }
    input + span::before {
        position: absolute;
        right: 10px;
         left: 635px;
         top: -40px;
    }
    textarea + span::before {
        position: absolute;
        right: 10px;
         left: 635px;
         top: -80px;    
    }
</STYle>
<h2>C O N T A T O S</h2>
<section>
    <article>
        <div class="exemplo-relative">
            <form classe="card">
                <label for="inputNome">Nome:</label>
                <input type="text" id="inputNome" required>
                <span></span>

                <label for="inputEmail">Email:</label>
                <input type="Email" id="inputEmail"required>
                <span></span>

                <label for="textareaMensagem">Mensagem:</label>
              <textarea name="textareaMensagem" id="textareaMensagem" required></textarea>
                <span></span>
              <button>Enviar Mensagem</button>
            </form>
        </div>
   
    </article>
    <article>
        parte 2 
    </article>
    <article>
        parte 3 
    </article>
</section>