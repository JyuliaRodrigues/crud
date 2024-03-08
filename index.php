<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>PHP CRUD</title>
</head>
<body>
    <div class="navbar navbar-light bg-light menu">  
        <a class="navbar-brand" href="#"> CRUD PHP </a>
    </div>
  
    <div> 
          <form>
              <div>
               <label> Nome </label>
               <input type= "text" name="Nome" autofocus value="" class= "form-control" requiere/>
            </div>

            <div>
                <label> Sobrenome </label>
            <input type= "text" name="Sobrenome" autofocus value="" class= "form-control" requiere/>
            </div>

            <div>
                <label> Idade </label>
            <input type= "number" name="Idade" autofocus value="" class= "form-control" requiere/>
            </div>

            <div>
                <label> Sexo </label>
            <select name="sexo" id="" value= "" class="form-control">
            <option value= "fem"> Feminino </option> 
            <option value= "mas"> Masculino </option> 
                 </select>
            </div>
            <div>
                <div>

                <button type="submit" class="btn btn-primary" name="Cadastrar">Cadastrar> </button>

                </div>
            </div>
          </form>
    </div>
</body>
</html>