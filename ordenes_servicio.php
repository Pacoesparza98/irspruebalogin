
<!DOCTYPE html>
<html>
    
    <head>
    <title>Ordenes de Servicio | IRS</title>
    <link rel="stylesheet" href="css/master2.css">  

   <!-- <link rel="stylesheet" href="css/master.css">--> 
    </head>

    <body>
            <div class="orden-box"></div>
      <img class="avatar" src="img/irs.png" alt="Logo de IRS"> <br />
    
      
      <h1 class="titulo-centrado">Ordenes de Servicio</h1>
        <h2>Hola Director!</h2>
        <form name= "formOrden" action="" method= "post"></form>
            <!--El border es la medida de la tabla-->
            <table border="0" align="center">

                <tr>
                    <td class="descripcion">Cliente</td>
                    <td class= "valor">
                        <select>
                            <option value="1">Metalsa</option>
                            <option value="2">Nemak</option>
                            <option value="3">Prolamsa</option>
                            <option value="4">Brembo</option>
                            <option value="5">Caterpillar</option>
                            <option value="6">Magna</option>                                                                                                                                            
                        </select>
                    </td>

                </tr>

                <tr>
                    <td class="descripcion">Usuario</td>
                    <td class= "valor">
                        <select>
                        <option value="1">Ana Daniel</option>
                        <option value="2">Arely Cantú</option>
                        <option value="3">Aron Quiroz</option>
                        <option value="4">Ignacio Moreno</option>                                                                            
                        </select>
                    </td>
                    </tr>

                <tr>
                    <td class="descripcion"> Correo </td>
                    <td class= "valor"></td>
                </tr>

                <tr>
                    <td class="descripcion">Area de trabajo</td>
                    <td class= "valor">
                        <select>
                        <option value="1">Tacoma</option>
                        <option value="2">Tacoma2</option>          
                        <option value="3">Tacoma3</option>                                                                                  
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="descripcion">Actividad a realizar</td>
                    <td class= "valor">
                        <select>
                                <option value="1">Limpieza de oxido</option>
                                <option value="2">Inspección interna</option>
                                <option value="3">Actividad 3</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="descripcion">Servicio contratado por</td>
                    <td class= "valor">
                        <select>
                            <option value="1">Piezas</option>
                            <option value="2">Horas</option>
                            <option value="3">Dias</option>
                            <option value="4">Indefinido</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="descripcion">Total personas</td>
                    <td class= "valor">
                        <select>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="descripcion">Jornada</td>
                    <td class= "valor">
                        <select>
                                <option value="1">8 Dia</option>
                                <option value="2">8 Tarde</option>
                                <option value="3">8 Noche</option>
                                <option value="4">12 Dia</option>
                                <option value="5">12 Noche</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="descripcion">Precio pactado</td>
                    <td class= "valor">
                    <input type="number" min="0" max="100000" name="numPrecio">
                    </td>
                </tr>

                <tr>
                    <td class="descripcion">Folio</td>
                    <td class= "valor">
                    <input type="number" min="0" max="100000" name="numPrecio">
                    </td>
                </tr>
                    
                <tr>
                    <td class="descripcion">Numero parte/Contencion</td>
                    <td class= "valor">
                    <input type="number" min="0" max="100000" name="numPrecio">
                    </td>
                </tr>
                        
                <tr>
                    <td class="descripcion">Trazabilidad</td>
                    <td class= "valor">
                    <input type="radio" name="opTraza" value="s"/>Si
                    <input type="radio" name="opTraza" value="s"/>No
                    </td>
                </tr>
                        
                <tr>
                    <td class="descripcion">Cantidad</td>
                    <td class= "valor">
                    <input type="number" min="0" max="100000" name="numPrecio">
                </td>
                </tr>
                                
                <tr>
                    <td class="descripcion">Rate por hora</td>
                    <td class= "valor">
                    <input type="number" min="0" max="100000" name="numPrecio">
                    </td>
                </tr>
                                    
                <tr>
                    <td class="descripcion">Turno</td>
                    <td class= "valor">
                        <select>
                        <option value="1">Dia</option>
                        <option value="2">Tarde</option>
                        <option value="3">Noche</option>
                        </select>                    </td>
                </tr>
                                        
                <tr>
                    <td class="descripcion">Inicio</td>
                    <td class= "valor">
                        <input type="time" name="timeIni">
                    </td>
                </tr>
                                            
                <tr>  
                    <td class="descripcion">Fin</td>
                    <td class= "valor">
                        <input type="time" name="timeFin">
                    </td>
                </tr>
                                                
                <tr>
                    <td class="descripcion">Moneda</td>
                    <td class= "valor"> 
                    <input type="number" min="0" max="100000" name="numPrecio">
                    </td>
                </tr>                                                                                                                                                                                                                                                    
            </table>
        </form>  
    </div>
      </body>
</html>