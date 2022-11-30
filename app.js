if (navigator.serviceWorker){
    navigator.serviWorker.register('/sw.js');

}

if (window.caches){
    
    caches.open('prueba-1');

    caches.open('prueba-2');

    caches.open('cache-v1.1').then( cache =>{

        cache.add('/index.php');

});