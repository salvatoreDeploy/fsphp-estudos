# Conceitos e Estudo

## functions

* Dentro de uma função temos seu proprio escopo isolando o escopo externo por seguração, para isso são passados parametros para atribuir dados externos;
* Seguindo as boas praticas, temos dentro dos argumentos, devem vir por primeiro os argumentos obrigatorios, os argumentos importantes e os opcionais;
* Temos funções com acesso global, onde usamos a palavra reservada "global" para definir dentro da função e não nos argumentos, assim antes de chamarmos a função devemos
criar essas funcções identicas a função ou ja deve existir em nossa logica;
* Temos o argumento estatico, onde é criado com a palavra reservada static, assim ele é um atributo criado da propria função, assim seu valor vai sendo modificado a cada execução;
* Por fim temos os argumentos dinamicos, onde não passamos nenhum argumneto para função, mas usamos funções proprias do PHP para recuperar dados que serão passados dinamicamente,
ao chamar a função;