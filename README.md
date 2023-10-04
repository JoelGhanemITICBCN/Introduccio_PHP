# Introduccio_PHP ITICBCN
## Exercici 1

Al primer exercici hem de gestionar un restaurant on tenim 10 taules
amb un màxim de 5 comensals per taula i volem que cada cop que obrim la pàgina
hi hagi una quantitat aleatòria de comensals per cada taula. 

El plantejament ha sigut el seguent:

Hem fet un array de 10 taules on en cada una hem posat un número aleatori amb
el [rand()](https://www.php.net/manual/en/function.rand.php). 
Després hem fet un for on recorrem totes les taules i instanciat cada taula amb un numero aleatori.
Per que quedés millor hem fet que en el case de que la taula tingui 5 o 0 comensals mostri un missatge diferent.


![Foto exercici 1](img/Exercici1.png)



