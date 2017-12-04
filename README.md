# CMS-Equipos-deportivos-
Realizar un CMS con CODEIGNITER para clubes que practican algún deporte
En la pagina principal de la pagina va a colocar las ultimas noticias publicadas y se visualizara el siguiente
menú.
  1. Inicio.
  2. Noticias
  3. Miembros.
  o Registrarte / Inicia Sesión.
  4. Galería de fotos.
  5. Eventos
  6. Clasificados.
  7. Contacto
  8. Preguntas Frecuentes (FAQ).
  9. Admin

Definición:
1) Inicio:
Mostrará la página principal, con un resumen de las ultimas 5 noticias publicadas en
la página, y una barra a la derecha desplegando los 5 eventos mas cercanos y los 5
últimos anuncios clasificados.

2) Noticias:
Mostrará un resumen de las noticias publicadas con paginación, cada notica podrá
mostrar imagen y un texto. Al visualizar una noticia, se verá completa y se podrá
colocar un comentario para la misma.

3) Miembros:
Se verá un listado de miembros, el usuario se podrá registrar usando su cedula,
como campo único, una vez ingrese podrá visualizar los miembros registrados y sus
datos de contacto: foto, nombre, teléfono y correo. Para registrarse un miembro
debe registrar: cedula, nombre, apellido, teléfono, correo, celular, dirección, latitud
y longitud.

4) Galería de fotos:
CRUD galerías, que tendrán los campos, id, nombre, descripción y se podrá agregar
una cantidad de fotos, que aparecerán para visualizarse con algún plugin de galerías
bonito.

5) Eventos:
Se podrán crear eventos tipo Facebook, id, titulo, descripción, fecha, hora, foto, el
usuario si esta logueado puede marcar que asistirá al evento y públicamente se
verán los usuarios que han arcado como asistente.

6) Clasificados:
Los usuarios podrán ver anuncios y los registrados podrán publicar, los campos para
registrar un nuevo anuncio son: titulo, descripción, imágenes, fecha (automática), el
usuario y contacto de la persona que publico. Al visualizar los clasificados se verán
paginados mostrando no más de 10 por página. 

7) Contacto:
Se podrá enviar un mensaje a los administradores de la página con los datos:
nombre, email, mensaje.

8) Faq:
Preguntas frecuentes con sus respuestas.

9) Admin:
El admin podrá iniciar sesión para configurar los siguientes aspectos de la pagina:
  • Noticias: podrá crear, editar y eliminar las noticias, el contenido de la misma
  se hara con un editor WYSIWYG.
  
  • Miembros: Se podrán visualizar el listado de miembros, con la opción a
  mapa, donde aparecerán en el mismo los miembros según la latitud y logitud
  digitadas. Los miembros se pueden exportar a Excel con todos sus datos.
  
  • Galería: CRUD de la galería de fotos.
  
  • Eventos: CRUD de eventos.
  
  • Clasificados: Ver todos los clasificados y poder deshabilitar alguno que no se
  corresponda con los criterios éticos.
  
  • Contacto: Revisar todas las solicitudes de contacto.
  
  • FAQ: Editar las preguntas frecuentes (con sus respuestas).
  
  • CRUD de Admin: se podrán configurar los usuarios que tienen acceso al
  admin.
  
  • Parámetros: Titulo de la pagina, nombre del equipo y logo del mismo para
  que aparezca como icono en el navegador. 
