<b>Descripción</b></br>
Servicio de API Rest que permite realizar las operaciones de registro y autenticación de usuarios por medio de la tecnología JSON Web Token, además de las operaciones CRUD sobre una tabla llamada products las cuales se almacenan en una base de datos Mysql y por medio de Eloquent ORM se manipulan los datos tratados en la API.</br></br>

<b>Funciones del servicio API REST:</b></br>
•	Registro de nuevos usuarios, aplicando seguridad de cifrado a la contraseña almacenada en la base de datos.</br>
•	Inicio de sesión para usuarios previamente registrados en la base de datos, además, el servicio retorna un JWT para aplicar seguridad a los servicios.</br>
•	Servicio para consultar el perfil del usuario logueado.</br>
•	Servicios para listar los registros de la tabla products, crear nuevo registro, consultar los datos de un registro, editar los datos de un registro (con PUT) y eliminar un registro.</br>
•	Cierre de la sesión activa de un usuario invalidando el JWT generado en el proceso de logueo.</br></br>

<b>Tecnologías:</b></br>
•	PHP v 8.1.0</br>
•	Laravel v 10.48.17 para el servicio de API REST</br>
•	Tymon jwt-auth para el manejo de la seguridad JSON Web Token</br>
•	Eloquent para el manejo de los datos en la base de datos</br>
•	Motor de base de datos Mysql v 5.7.36</br></br>


<b>Importante:</b> todos los servicios que contienen el signo <b>*</b> deben contener en la sección de autorización el JWT proporcionado en el proceso de logueo (inicio de sesión). </br></br>

Servicio en la cual se puede registrar un nuevo usuario, enviando los datos en formato JSON</br></br>
![image](https://github.com/user-attachments/assets/5ee2017f-4211-44f4-9cfa-4a01b4a8cafe)</br></br>


Servicio para iniciar sesión con las credenciales de una cuenta previamente registrada en la base de datos, luego de la operación, el servicio retorna el JWT junto a información importante del mismo.</br></br>
![image](https://github.com/user-attachments/assets/e855a0ad-45ea-4d00-a9a4-9d3b8cc97a44)</br></br>


<b>*</b> Servicio para consultar los datos del perfil con las credenciales utilizadas en el proceso de logueo.</br></br>
![image](https://github.com/user-attachments/assets/0b49f64a-22cd-4148-a327-7f19231ce7b7)</br></br>


<b>*</b> Servicio utilizado para consultar el listado de todos los productos registrados en la base de datos.</br></br>
![image](https://github.com/user-attachments/assets/bc0a4062-bcee-4fbe-a7d6-677f4f66c615)</br></br>


<b>*</b> Servicio utilizado para crear un nuevo producto en la base de datos.</br></br>
![image](https://github.com/user-attachments/assets/4b7f02aa-0792-4905-b957-3ca672d34849)</br></br>


<b>*</b> Servicio utilizado para consultar el registro de un producto en la base de datos.</br></br>
![image](https://github.com/user-attachments/assets/2290babc-2bc9-448f-a06a-d106b3fe8cfb)</br></br>


<b>*</b> Servicio utilizado para editar los datos del registro de un producto en la base de datos.</br></br>
![image](https://github.com/user-attachments/assets/4b270797-54d4-4a61-a6b5-3ff1850b47a2)</br></br>


<b>*</b> Servicio utilizado para eliminar el registro de un producto en la base de datos.</br></br>
![image](https://github.com/user-attachments/assets/6b8e30b5-ac0c-4f5a-9b21-b50c27e3bc83)</br></br>


<b>*</b> Si se envía un id incorrecto al momento de utilizar el servicio para consultar el registro de un producto en la base de datos, se retornará un mensaje notificando que el producto no fue encontrado, dicha situación se replica para las operaciones de editar y eliminar, las cuales utilizan el proceso de búsqueda del registro para efectuar posteriormente la operación solicitada.</br></br>
![image](https://github.com/user-attachments/assets/ede2f074-a583-44dc-af08-48e52d91a2cc)</br></br>

<b>*</b> Servicio para el cierre de sesión, invalidando el token actual y se anulará la autenticación del usuario.
![image](https://github.com/user-attachments/assets/a9490ec4-8889-43fb-905d-c548bba4c377)</br></br>


<b>*</b> Si se envía en la sección de autorización un JWT invalido para los servicios que lo requieran, se retornará un mensaje indicando que el usuario no se ha autenticado.
![image](https://github.com/user-attachments/assets/91d3306f-cc73-49f1-a2fc-c0c911e46f5c)</br></br>



