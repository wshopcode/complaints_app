const cacheName = 'sw-cache';
//const appShellFiles = [
// '/frontend/retrieve-data.php',
// '/frontend/index4.php',
// '/frontend/faq.html',
// '/frontend/coverpage.html',
// '/frontend/js/jquery-3.3.1.slim.min.js',
//'/frontend/js/scripts.js',
// '/frontend/css/bootstrap.css',
//  '/frontend/css/bootstrap-grid.css',
// '/frontend/css/bootstrap-grid.min.css',
// '/frontend/css/bootstrap-reboot.css',
// '/frontend/css/bootstrap-reboot.min.css',
// '/frontend/css/cover.css'
//];

// On install - the application shell cached
self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open('v1').then((cache) => {
            //static files that make up the application shell are cached
            return cache.add(
                '/frontend/retrieve-data.php',
                '/frontend/index4.php',
                '/frontend/faq.html', 
                '/frontend/coverpage.html',
                '/frontend/js/scripts.js',
                '/fontend/img/favicon.ico',
                '/frontend/img/favicon.png',
                '/frontend/img/icon1.ico',
                '/frontend/img/icon2.ico',
                '/frontend/img/icon3.ico',
                '/frontend/img/icon4.ico',
                '/frontend/img/icon5.ico',
                '/frontend/img/icon6.ico',
                '/frontend/img/icon7.ico',
                '/frontend/img/icon8.ico',
                '/frontend/img/logo.png',
                '/frontend/img/smallogo.png',
                '/frontend/css/additional.css',
                '/frontend/css/bootstrap.css',
                '/frontend/css/bootstrap.css.map',
                '/frontend/css/bootstrap.min.css',
                '/frontend/css/bootstrap.min.css.map',
                '/frontend/css/bootstrap-grid.css',
                '/frontend/css/bootstrap-grid.css.map',
                '/frontend/css/bootstrap-grid.min.css',
                '/frontend/css/bootstrap-grid.min.css.map',
                '/frontend/css/bootstrap-reboot.css',
                '/frontend/css/bootstrap-reboot.css.map',
                '/frontend/css/bootstrap-reboot.min.css',
                '/frontend/css/bootsrap-reboot.min.css.map',
                '/frontend/css/cover.css',
                '/frontend/css/style2.css',
                '/frontend/css/style3.css',
                '/frontend/css/style.css');
            //if you have css files and app.js files add them here
        })
    );
});

//with request network this creates a cached storage called v1 where the 
//above listed project files will be placed in the browser
self.addEventListener('fetch', (event) => {
    event.respondWith(
      caches.match(event.request).then((resp) => {
        return resp || fetch(event.request).then((response) => {
          let responseClone = response.clone();
          caches.open('sw-cache').then((cache) => {
            cache.put(event.request, responseClone);
            });
    
            return response;
            }).catch(() => {
            return caches.match('/frontend/faq.html');
            })
        })
    );
});
