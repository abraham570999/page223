if('caches' in self) {
    debug("Navegador compatible con CacheAPI");

    var currentCache = 'Cache de sistema de reportes nava.';

    var files =
    [
        './', // el index
'./index.php'
    ];

    self.addEventListener('install', event => {
        event.waitUntil(
            caches.open(currentCache).then(cache => {
                return cache.addAll(files).then(function() { 
                 // El skipWaiting descarta el service worker anterior e instalará el nuevo sin esperar.
        // Normalmente, sin esta línea, hasta que no se cierra del todo la pestaña/navegador y se abre
        // de nuevo, no se cogerá el nuevo service worker.
        // Otra opción es no hacerlo así, sino hacerlo con un botón de "ojo hay nueva versión" y 
        // en ese momento llamar a skipWaiting a mano
        self.skipWaiting();
                    debug("Caché descargada con éxito " + currentCache);
                }).catch(function(err){
                    debug("ERROR " + err);
                });
            })
        );
    });

    /**
        activate: una vez el worker está instalado, cuando arranca la app, salta el método activate
        en este caso, revisamos la versión de la caché para descargar una nueva versión si está obsoleta
    */
    self.addEventListener('activate', event => {
        debug('Ejecución evento "activate"');
        event.waitUntil(
            caches.keys().then(cacheNames => Promise.all(
                cacheNames.filter(cacheName => {
                    debug("Comprobando versión de cache " + currentCache);
                    return cacheName !== currentCache
                }).map(cacheName => caches.delete(cacheName).then(function(){
                    debug("ATENCIÓN NUEVA CACHÉ "+currentCache+"! (Caché vieja eliminada " + cacheName + ")");
                }))
            ))
        );
    });



if ('Notificación' en la ventana && Notificación.permiso != 'otorgado') { console.log('Solicitar permiso de usuario') Notificación.requestPermission(status => { console.log('Estado:'+estado) displayNotification(' Notificación habilitada'); }); } const mostrarNotificación = notificaciónTitle => { console.log('mostrar notificación') if (Notification.permission == 'concedido') { navigator.serviceWorker.getRegistration().then(reg => { console.log(reg) const options = { body: '¡Gracias por permitir la notificación push!', icon: '/assets/icons/icon-512x512.png', vibrate: [100, 50, 100], data:
 { dateOfArrival: Date.now(), PrimaryKey: 0 } }; reg.showNotification(notificationTitle, options); }); } };
    /**
        fetch: overridea todas las peticiones HTTP del navegador
        esta estrategia, busca si está en caché y sirve lo de caché
        en caso de que no exista, hace una petición a internet.
    */
    self.addEventListener('fetch', function(event) {
        event.respondWith(
            caches.match(event.request).then(function(response) {
                if(response === undefined){
                 // puro debug: si es un php, es dinámico. no lo mostramos en la consola.
                 if(event.request.url.indexOf(".php") === -1){
                  debug("FETCH No existe " + event.request.url);
                 }
                }else{
                    //debug("FETCH Existe " + event.request.url);
                }
                return response || fetch(event.request);
            })
        );
    });
}else{
    debug("Caché deshabilitada en el navegador, no podemos trabajar offline.");
}
function debug(mensaje){
    console.log(new Date().toISOString() + " [SW] " + mensaje);
}
