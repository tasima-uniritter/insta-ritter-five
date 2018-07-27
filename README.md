<H2>ARQUITETURA WEB - TRABALHO FINAL</H2>

<H3>INSTA-RITTER</H3>
Projeto com o objetivo de criar um app parecido com o instagram

<br><H3>TIME:</br></H3>
André, Anderson e Gustavo

<br><H3>Dependencias</br></H3>
Uma conta no Docker inicialmente as imagens vão ser salvas no docker
Necessidade de ter uma conta cadastrada para utilizar o app

<br><H3>Rodar e Testar a Aplicação</br></H3>
Primeiramente deve rodar o aplicativo Usb Webserver
Depois entrar na seguinte uri: http://localhost:7777/insta/
Depois colocar imagens, por ser um app de fotos, ele não aceita documentos como .doc, .pdf entre outros.
![instaritter-txt](https://user-images.githubusercontent.com/19877736/43298463-74d47396-912c-11e8-9658-cef4cf355e81.png)
Mostra uma mensagem de erro informando que esse é um tipo de arquivo invalido.

<br><H3>Tecnologias Utilizadas:</br></H3>
<li>PHP</li>
<li>Docker</li>
<li>Nginx</li>
<li>MySQL</li>

<br><H3>VERSÕES:<br></H3>
<li>0.1: API em PHP, banco MySQL, DropBox para armazenar as imagens, trabalhando com Containers - versão atual</li>
<li>0.2: Incrementar instâncias para alta-disponibilidade - próxima versão</li>
<li>0.3: Incrementar filas - próxima versão</li>
